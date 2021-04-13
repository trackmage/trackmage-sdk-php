<?php

namespace TrackMage\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Psr\Log\NullLogger;

/**
 * @method ResponseInterface get(string|UriInterface $uri, array $options = [])
 * @method ResponseInterface head(string|UriInterface $uri, array $options = [])
 * @method ResponseInterface put(string|UriInterface $uri, array $options = [])
 * @method ResponseInterface post(string|UriInterface $uri, array $options = [])
 * @method ResponseInterface patch(string|UriInterface $uri, array $options = [])
 * @method ResponseInterface delete(string|UriInterface $uri, array $options = [])
 * @method PromiseInterface getAsync(string|UriInterface $uri, array $options = [])
 * @method PromiseInterface headAsync(string|UriInterface $uri, array $options = [])
 * @method PromiseInterface putAsync(string|UriInterface $uri, array $options = [])
 * @method PromiseInterface postAsync(string|UriInterface $uri, array $options = [])
 * @method PromiseInterface patchAsync(string|UriInterface $uri, array $options = [])
 * @method PromiseInterface deleteAsync(string|UriInterface $uri, array $options = [])
 */
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

    public function setGuzzleClient(ClientInterface $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
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
     * @param string $method
     * @param array  $args
     *
     * @return PromiseInterface|ResponseInterface
     */
    public function __call($method, $args)
    {
        if (count($args) < 1) {
            throw new \InvalidArgumentException('Magic request methods require a URI and optional options array');
        }

        $uri = $args[0];
        $opts = isset($args[1]) ? $args[1] : [];

        return substr($method, -5) === 'Async'
            ? $this->requestAsync(substr($method, 0, -5), $uri, $opts)
            : $this->request($method, $uri, $opts);
    }

    /**
     * @return array
     */
    public static function collection(ResponseInterface $response)
    {
        $data = json_decode($response->getBody()->getContents(), true);
        return isset($data['hydra:member']) ? $data['hydra:member'] : [];
    }

    /**
     * @return array
     */
    public static function item(ResponseInterface $response)
    {
        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @return string
     */
    public static function error(RequestException $e)
    {
        $response = $e->getResponse();
        if (null !== $response) {
            $data = json_decode($response->getBody()->getContents(), true);

            if (isset($data['error']) && isset($data['error_description'])) {
                return $data['error_description'] .' ('.$data['error'].')';
            }
            if (isset($data['hydra:description'])) {
                return $data['hydra:description'];
            }
            if (isset($data['hydra:title'])) {
                return $data['hydra:title'];
            }
        }

        return $e->getMessage();
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
