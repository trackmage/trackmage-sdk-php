<?php

namespace TrackMage\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Psr\Log\NullLogger;

final class TrackMageClient implements ClientInterface
{
    private $clientId;
    private $clientSecret;
    private $accessToken;
    private $host;
    private $logger;

    /** @var ClientInterface */
    private $guzzleClient;

    /**
     * @param string|null $clientId
     * @param string|null $clientSecret
     * @param string|null $accessToken
     * @param string $host
     */
    public function __construct($clientId = null, $clientSecret = null, $accessToken = null, $host = 'https://api.trackmage.com', LoggerInterface $logger = null)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->accessToken = $accessToken;
        $this->host = $host;
        $this->logger = $logger ?: new NullLogger();
        $this->initGuzzleClient();
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
        $this->initGuzzleClient();
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        $this->initGuzzleClient();
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return ClientInterface|Client
     */
    public function getGuzzleClient()
    {
        if (null === $this->guzzleClient) {
            $this->initGuzzleClient();
        }
        return $this->guzzleClient;
    }

    public function send(RequestInterface $request, array $options = [])
    {
        return $this->guzzleClient->send($request, $options);
    }

    public function sendAsync(RequestInterface $request, array $options = [])
    {
        return $this->guzzleClient->sendAsync($request, $options);
    }

    public function request($method, $uri, array $options = [])
    {
        return $this->guzzleClient->request($method, $uri, $options);
    }

    public function requestAsync($method, $uri, array $options = [])
    {
        return $this->guzzleClient->requestAsync($method, $uri, $options);
    }

    public function getConfig($option = null)
    {
        return $this->guzzleClient->getConfig($option);
    }

    /**
     * @return array
     */
    public static function collection(ResponseInterface $response)
    {
        $data = json_decode($response->getBody()->getContents(), true);
        return $data['hydra:member'];
    }

    /**
     * @return array
     */
    public static function item(ResponseInterface $response)
    {
        return json_decode($response->getBody()->getContents(), true);
    }

    private function initGuzzleClient()
    {
        $stack = HandlerStack::create(new CurlHandler());
        $stack->push(AddAuthHeadersMiddleware::get($this->clientId, $this->clientSecret, $this->accessToken, $this->host));
        $stack->push(Middleware::log($this->logger, new MessageFormatter(), LogLevel::INFO));
        $this->guzzleClient = new Client([
            'handler' => $stack,
            'base_uri' => $this->host,
            'http_errors' => true,
        ]);
    }
}
