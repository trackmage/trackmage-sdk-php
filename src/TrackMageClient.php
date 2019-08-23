<?php
namespace TrackMage\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Psr\Log\NullLogger;
use RuntimeException;
use TrackMage\Client\Swagger\Configuration;
use TrackMage\Client\Swagger\Api;

/**
 * TrackMage client wrapper
 * @method Api\CarrierApi getCarrierApi
 * @method Api\OauthClientApi getOauthClientApi
 * @method Api\ShipmentApi getShipmentApi
 * @method Api\WorkflowApi getWorkflowApi
 * @method Api\IntegrationApi getIntegrationApi
 * @method Api\UserSignupRequestApi getUserSignupRequestApi
 * @method Api\UserVerifyEmailRequestApi getUserVerifyEmailRequestApi
 * @method Api\UserApi getUserApi
 * @method Api\WorkspaceApi getWorkspaceApi
 */
class TrackMageClient
{
    /** @var LoggerInterface */
    private $logger;

    /** @var ClientInterface */
    private $guzzleClient;

    /** @var Configuration */
    private $configuration;

    /**
     * @param string|null $clientId
     * @param string|null $clientSecret
     */
    public function __construct($clientId = null, $clientSecret = null)
    {
        $this->logger = new NullLogger();
        $this->configuration = new Configuration();
        $this->configuration->setHost('https://api.trackmage.com');
        if (null !== $clientId) {
            $this->configuration->setUsername($clientId);
        }
        if (null !== $clientSecret) {
            $this->configuration->setPassword($clientSecret);
        }
    }

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->configuration->setHost($host);
    }

    /**
     * @param string $token
     */
    public function setAccessToken($token)
    {
        $this->configuration->setAccessToken($token);
    }

    /**
     * @param string $name
     * @param array  $args
     * @return mixed
     */
    public function __call($name, array $args)
    {
        if (strpos($name, 'get') !== 0) {
            throw new RuntimeException(sprintf('Method "%s" not found', $name));
        }
        list(, $class) = explode('get', $name, 2);
        $fqcn = 'TrackMage\\Client\\Swagger\\Api\\'.$class;

        return new $fqcn($this->getGuzzleClient(), $this->configuration);
    }

    /**
     * @return ClientInterface|Client
     */
    public function getGuzzleClient()
    {
        if (!$this->guzzleClient) {
            $stack = HandlerStack::create(new CurlHandler());
            $stack->push(AddAuthHeadersMiddleware::get($this->configuration));
            $stack->push(Middleware::log($this->logger, new MessageFormatter(), LogLevel::INFO));
            $this->guzzleClient = new Client([
                'handler' => $stack,
                'base_uri' => $this->configuration->getHost(),
                'http_errors' => true,
            ]);
        }

        return $this->guzzleClient;
    }

    /**
     * @param ClientInterface $guzzleClient
     */
    public function setGuzzleClient(ClientInterface $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }

    /**
     * @return Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
}
