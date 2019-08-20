<?php
namespace TrackMage\Client;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\ConsoleOutput;
use TrackMage\Client\Swagger\Model\OauthClientSetOAuthClient;
use TrackMage\Client\Swagger\Model\ShipmentPostShipmentSetShipmentMeta;
use TrackMage\Client\Swagger\Model\UserSignupRequest;
use TrackMage\Client\Swagger\Model\UserVerifyEmailRequest;

/**
 * Basic functional test
 */
class TrackMageTest extends TestCase
{
    /** @var TrackMageClient */
    private static $client;
    /** @var int */
    private static $userId;
    /** @var int */
    private static $workspaceId;

    /**
     * @throws Swagger\ApiException
     */
    public static function setUpBeforeClass()
    {
        $client = new TrackMageClient();
        $client->setLogger(new ConsoleLogger(new ConsoleOutput()));
        $client->setHost(getenv('API_HOST'));

        // register a user
        $request = new UserSignupRequest();
        $email = 'dpoddubny+'.uniqid().'@gmail.com';
        $request->setEmail($email);
        $client->getUserSignupRequestApi()->postUserSignupRequestCollection($request);

        // confirm email address
        $response = $client->getGuzzleClient()->get('/public/user-confirmation-link/'.$email);
        $data = json_decode($response->getBody()->getContents(), true);
        $code = @end(@explode('/', $data['link']));
        $request = new UserVerifyEmailRequest();
        $request->setCode($code);
        $data = $client->getUserVerifyEmailRequestApi()->postUserVerifyEmailRequestCollection($request);
        $data = json_decode(current($data), true);
        $token = $data['token']['access_token'];
        self::assertNotNull($token);
        $userId = $data['user']['id'];
        self::assertNotNull($userId);

        // authenticate user
        $client->setAccessToken($token);

        // create workspace
        $response = $client->getGuzzleClient()->post(
            '/workspaces',
            [
                'json' => [
                    'team' => [
                        'name' => 'my team',
                    ],
                    'title' => 'my company',
                    'defaultTrackingPage' => [
                        'title' => 'default tracking page',
                        'subdomain' => uniqid(),
                    ],
                ],
            ]
        );
        self::assertEquals(201, $response->getStatusCode());
        $data = json_decode($response->getBody()->getContents(), true);
        $workspaceId = $data['id'];

        $user = $client->getUserApi()->getUserItem($userId);
        self::assertSame($email, $user->getEmail());
        self::assertTrue($user->getEmailVerified());

        self::$userId = $userId;
        self::$client = $client;
        self::$workspaceId = $workspaceId;
    }

    /**
     * @expectedException \TrackMage\Client\Swagger\ApiException
     * @expectedExceptionMessage Authorization error
     */
    public function testInvalidCredentials()
    {
        $client = new TrackMageClient('fake', 'fake');
        $client->getWorkspaceApi()->getWorkspaceCollection();
    }

    /**
     * @throws Swagger\ApiException
     */
    public function testWorkspaces()
    {
        $workspaces = self::$client->getWorkspaceApi()->getWorkspaceCollection();
        self::assertCount(1, $workspaces);
        $ws = current($workspaces);
        $ws->getTitle('my company', $ws->getTitle());
    }

    /**
     * @throws Swagger\ApiException
     */
    public function testClientAuth()
    {
        $request = new OauthClientSetOAuthClient();
        $request->setName('test');
        $request->setRedirectUris(['https://localhost']);
        $response = self::$client->getOauthClientApi()->postOauthClientCollection($request);

        $clientId = current($response->getPublicId());
        $clientSecret = $response->getSecret();
        $client = new TrackMageClient($clientId, $clientSecret);
        $client->setHost(getenv('API_HOST'));
        $user = $client->getUserApi()->getUserItem(self::$userId);
        self::assertNotNull($user);
    }

    /**
     * @throws Swagger\ApiException
     */
    public function testShipments()
    {
        $res = self::$client->getShipmentApi()->apiWorkspacesShipmentsGetSubresource(self::$workspaceId);
        self::assertEmpty($res);

        $tn = new ShipmentPostShipmentSetShipmentMeta();
        $tn->setTrackingNumber('TN-1');
        $tn->setWorkspace('/workspaces/'.self::$workspaceId);
        $response = self::$client->getShipmentApi()->postShipmentCollection($tn);
        self::assertNotNull($response);
        self::assertEquals('TN-1', $response->getTrackingNumber());

        $res = self::$client->getShipmentApi()->apiWorkspacesShipmentsGetSubresource(self::$workspaceId);
        self::assertCount(1, $res);
    }

    /**
     * @throws Swagger\ApiException
     */
    public function testCreateWebhook()
    {
        // create workspace
        $integration = [
            'type' => 'webhook',
            'credentials' => [
                'url' => 'http://acme.example',
                'authType' => 'basic',
                'username' => 'webhook_user',
                'password' => 'password',
            ],
        ];
        $workflow = [
            'direction' => 'out',
            'period' => 'immediately',
            'title' => 'Webhook for testing',
            'workspace' => '/workspaces/'.self::$workspaceId,
            'settings' => [],
            'enabled' => true,
            'concurrency' => 1,
            'notificationEmails' => [
                'test@email.com', 'test-2@email.com',
            ],
        ];
        $response = self::$client->getGuzzleClient()->post(
            '/workflows',
            [
                'json' => array_merge($workflow, ['integration' => $integration]),
            ]
        );
        //THEN
        $contents = $response->getBody()->getContents();
        self::assertEquals(201, $response->getStatusCode(), $contents);
        $data = json_decode($contents, true);
        self::assertArraySubset($workflow, $data);

        $integrationId = explode('/', $data['integration']);
        $integrationId = end($integrationId);
        $actualIntegration = self::$client->getIntegrationApi()->getIntegrationItem($integrationId);
        self::assertSame('webhook', $actualIntegration->getType());
    }

    /**
     * @throws Swagger\ApiException
     */
    public function testCarriers()
    {
        $carriers = self::$client->getCarrierApi()->getCarrierCollection();
        self::assertTrue(is_array($carriers));
        self::assertNotEmpty($carriers);
    }
}
