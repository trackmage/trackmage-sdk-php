<?php

namespace TrackMage\Client;

use GuzzleHttp\Exception\ClientException;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\ConsoleOutput;

final class TrackMageTest extends TestCase
{
    /** @var TrackMageClient */
    private static $client;
    /** @var int */
    private static $userId;
    /** @var int */
    private static $workspaceId;

    public static function setUpBeforeClass()
    {
        $host = getenv('API_HOST');
        self::assertNotFalse($host);
        $client = new TrackMageClient(null, null, null, $host, new ConsoleLogger(new ConsoleOutput()));

        // register a user
        $email = 'dpoddubny+'.uniqid().'@gmail.com';
        $response = $client->request('POST', '/security/signup', ['json' => ['email' => $email]]);
        self::assertSame(200, $response->getStatusCode());

        // confirm email address
        $response = $client->request('GET', '/public/user-confirmation-link/'.$email);
        $data = TrackMageClient::item($response);
        $parts = explode('/', $data['link']);
        $code = end($parts);

        $response = $client->request('POST', '/security/verify-email', ['json' => ['code' => $code]]);
        self::assertSame(200, $response->getStatusCode());
        $data = TrackMageClient::item($response);
        $token = $data['token']['access_token'];
        self::assertNotNull($token);
        $userId = $data['user']['id'];
        self::assertNotNull($userId);

        // authenticate user
        $client->setAccessToken($token);

        // create workspace
        $response = $client->request(
            'POST',
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
        $data = TrackMageClient::item($response);
        $workspaceId = $data['id'];

        $response = $client->request('GET', '/users/'.$userId);
        self::assertSame(200, $response->getStatusCode());
        $data = TrackMageClient::item($response);

        self::assertSame($email, $data['email']);
        self::assertTrue($data['emailVerified']);

        self::$userId = $userId;
        self::$client = $client;
        self::$workspaceId = $workspaceId;
    }

    public function testOAuthServerError()
    {
        try {
            $client = new TrackMageClient('fake', 'fake');
            $client->get('/workspaces');
        } catch (ClientException $e) {
            self::assertSame('The client credentials are invalid (invalid_client)', TrackMageClient::error($e));
        }
    }

    public function testHydraError()
    {
        try {
            self::$client->get('/workspaces/1720693b-6792-4c7a-848a-43b24ddba591');
        } catch (ClientException $e) {
            self::assertSame('Not Found', TrackMageClient::error($e));
        }
    }

    public function testHydraValidationError()
    {
        try {
            self::$client->post('/shipments', ['json' => [ ]]);
        } catch (ClientException $e) {
            self::assertSame('workspace: This value should not be blank.', TrackMageClient::error($e));
        }
    }

    public function testInvalidCredentials()
    {
        $this->expectException(ClientException::class);
        $this->expectExceptionCode(400);
        $this->expectExceptionMessageRegExp('/The client credentials are invalid/');
        $client = new TrackMageClient('fake', 'fake');
        $client->get('/workspaces');
    }

    public function testWorkspaces()
    {
        $response = self::$client->get('/workspaces');
        self::assertEquals(200, $response->getStatusCode());
        $workspaces = TrackMageClient::collection($response);
        self::assertCount(1, $workspaces);
        $ws = current($workspaces);
        self::assertSame('my company', $ws['title']);
    }

    public function testClientAuth()
    {
        $response = self::$client->post('/oauth_clients', ['json' => [
            'name' => 'test',
            'redirectUris' => ['https://localhost'],
        ]]);
        self::assertSame(201, $response->getStatusCode());
        $data = TrackMageClient::item($response);
        $clientId = $data['publicId'];
        $clientSecret = $data['secret'];

        $host = getenv('API_HOST');
        self::assertNotFalse($host);
        $client = new TrackMageClient($clientId, $clientSecret, null, $host);
        $response = $client->get('/users/'.self::$userId);
        self::assertSame(200, $response->getStatusCode());
    }

    public function testShipments()
    {
        $response = self::$client->get('/workspaces/'.self::$workspaceId.'/shipments');
        self::assertSame(200, $response->getStatusCode());
        $shipments = TrackMageClient::collection($response);
        self::assertEmpty($shipments);

        $response = self::$client->post('/shipments', ['json' => [
            'workspace' => '/workspaces/'.self::$workspaceId,
            'trackingNumber' => 'TN-1',
        ]]);
        self::assertSame(201, $response->getStatusCode());
        $data = TrackMageClient::item($response);
        self::assertEquals('TN-1', $data['trackingNumber']);

        $response = self::$client->get('/workspaces/'.self::$workspaceId.'/shipments');
        self::assertSame(200, $response->getStatusCode());
        $shipments = TrackMageClient::collection($response);
        self::assertCount(1, $shipments);
    }

    public function testCreateWebhook()
    {
        // create workspace
        $workflow = [
            'type' => 'webhook',
            'period' => 'immediately',
            'title' => 'Webhook for testing',
            'workspace' => '/workspaces/'.self::$workspaceId,
            'enabled' => true,
            'concurrency' => '1',
            'url' => 'http://acme.example',
            'authType' => 'basic',
            'username' => 'webhook_user',
            'password' => 'password',
            'notificationEmails' => [
                'test@email.com', 'test-2@email.com',
            ],
        ];
        $response = self::$client->post('/workflows', ['json' => $workflow]);
        //THEN
        self::assertEquals(201, $response->getStatusCode());
        $data = TrackMageClient::item($response);
        self::assertArraySubset($workflow, $data);
    }

    public function testCarriers()
    {
        $response = self::$client->get('/public/carriers');
        self::assertEquals(200, $response->getStatusCode());
        $data = TrackMageClient::collection($response);
        self::assertTrue(is_array($data));
        self::assertNotEmpty($data);
    }
}
