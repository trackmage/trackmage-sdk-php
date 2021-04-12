<?php

namespace TrackMage\Client;

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

    /**
     * @throws Swagger\ApiException
     */
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
        $data = json_decode($response->getBody()->getContents(), true);
        $parts = explode('/', $data['link']);
        $code = end($parts);

        $response = $client->request('POST', '/security/verify-email', ['json' => ['code' => $code]]);
        self::assertSame(200, $response->getStatusCode());
        $data = json_decode($response->getBody()->getContents(), true);
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
        $data = json_decode($response->getBody()->getContents(), true);
        $workspaceId = $data['id'];

        $response = $client->request('GET', '/users/'.$userId);
        self::assertSame(200, $response->getStatusCode());
        $data = json_decode($response->getBody()->getContents(), true);

        self::assertSame($email, $data['email']);
        self::assertTrue($data['emailVerified']);

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
        $client->request('GET', '/workspaces');
    }

    /**
     * @throws Swagger\ApiException
     */
    public function testWorkspaces()
    {
        $response = self::$client->request('GET', '/workspaces');
        self::assertEquals(200, $response->getStatusCode());
        $workspaces = json_decode($response->getBody()->getContents(), true);

        self::assertCount(1, $workspaces);
        $ws = current($workspaces);
        self::assertSame('my company', $ws['title']);
    }

    /**
     * @throws Swagger\ApiException
     */
    public function testClientAuth()
    {
        $response = self::$client->request('POST', '/oauth_clients', ['json' => [
            'name' => 'test',
            'redirectUris' => ['https://localhost'],
        ]]);
        self::assertSame(201, $response->getStatusCode());
        $data = json_decode($response->getBody()->getContents(), true);
        $clientId = $data['publicId'];
        $clientSecret = $data['secret'];

        $host = getenv('API_HOST');
        self::assertNotFalse($host);
        $client = new TrackMageClient($clientId, $clientSecret, null, $host);
        $response = $client->request('GET', '/users/'.self::$userId);
        self::assertSame(200, $response->getStatusCode());
    }

    /**
     * @throws Swagger\ApiException
     */
    public function testShipments()
    {
        $response = self::$client->request('GET', '/workspaces/'.self::$workspaceId.'/shipments');
        self::assertSame(200, $response->getStatusCode());
        $data = json_decode($response->getBody()->getContents(), true);
        self::assertEmpty($data);

        $response = self::$client->request('POST', '/shipments', ['json' => [
            'workspace' => '/workspaces/'.self::$workspaceId,
            'trackingNumber' => 'TN-1',
        ]]);
        self::assertSame(201, $response->getStatusCode());
        $data = json_decode($response->getBody()->getContents(), true);
        self::assertEquals('TN-1', $data['trackingNumber']);

        $response = self::$client->request('GET', '/workspaces/'.self::$workspaceId.'/shipments');
        self::assertSame(200, $response->getStatusCode());
        $data = json_decode($response->getBody()->getContents(), true);
        self::assertCount(1, $data);
    }

    /**
     * @throws Swagger\ApiException
     */
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
        $response = self::$client->request('POST', '/workflows', ['json' => $workflow]);
        //THEN
        $contents = $response->getBody()->getContents();
        self::assertEquals(201, $response->getStatusCode(), $contents);
        $data = json_decode($contents, true);
        self::assertArraySubset($workflow, $data);
    }

    /**
     * @throws Swagger\ApiException
     */
    public function testCarriers()
    {
        $response = self::$client->request('GET', '/public/carriers');
        $contents = $response->getBody()->getContents();
        self::assertEquals(200, $response->getStatusCode(), $contents);
        $data = json_decode($contents, true);
        self::assertTrue(is_array($data));
        self::assertNotEmpty($data);
    }
}
