<?php

namespace TrackMage\Client;

use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7;

/**
 * Adds Bearer token
 */
final class AddAuthHeadersMiddleware
{
    /** @var callable  */
    private $nextHandler;

    private $clientId;
    private $clientSecret;
    private $host;
    private $accessToken;

    /**
     * @param string|null $clientId
     * @param string|null $clientSecret
     * @param string|null $accessToken
     * @param string $host
     */
    public function __construct(callable $nextHandler, $clientId, $clientSecret, $accessToken, $host)
    {
        $this->nextHandler = $nextHandler;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->accessToken = $accessToken;
        $this->host = $host;
    }

    /**
     * @param string|null $clientId
     * @param string|null $clientSecret
     * @param string $host
     * @return \Closure
     */
    public static function get($clientId, $clientSecret, $accessToken, $host)
    {
        return static function (callable $handler) use ($clientId, $clientSecret, $accessToken, $host) {
            return new AddAuthHeadersMiddleware($handler, $clientId, $clientSecret, $accessToken, $host);
        };
    }

    /**
     * @param RequestInterface $request
     * @param array $options
     * @return mixed
     */
    public function __invoke(RequestInterface $request, array $options)
    {
        $request = $this->addGeneralHeaders($request);
        if (empty($this->accessToken) && !empty($this->clientId) && !empty($this->clientSecret)) {
            $this->accessToken = Helper::getAccessToken($this->host, $this->clientId, $this->clientSecret);
        }
        if (!empty($this->accessToken)) {
            $request = $this->addAuthHeaders($request, $this->accessToken);
        }
        $fn = $this->nextHandler;

        return $fn($request, $options);
    }

    /**
     * @param RequestInterface $request
     * @return RequestInterface
     */
    private function addGeneralHeaders(RequestInterface $request)
    {
        $headers = [
            'Accept' => 'application/ld+json',
        ];
        $modify['set_headers'] = $headers;

        return Psr7\modify_request($request, $modify);
    }

    /**
     * @param RequestInterface $request
     * @param string $token
     * @return RequestInterface
     */
    private function addAuthHeaders(RequestInterface $request, $token)
    {
        $headers = [
            'Authorization' => 'Bearer '.$token,
        ];
        $modify['set_headers'] = $headers;

        return Psr7\modify_request($request, $modify);
    }
}
