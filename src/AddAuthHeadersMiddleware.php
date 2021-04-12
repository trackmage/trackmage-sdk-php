<?php

namespace TrackMage\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use TrackMage\Client\Swagger\ApiException;
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
     * @throws ApiException
     */
    public function __invoke(RequestInterface $request, array $options)
    {
        $request = $this->addGeneralHeaders($request);
        if (empty($this->accessToken) && !empty($this->clientId) && !empty($this->clientSecret)) {
            $this->accessToken = $this->getAccessToken($this->clientId, $this->clientSecret);
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
            'Accept' => 'application/json',
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

    /**
     * @param string $clientId
     * @param string $clientSecret
     * @return string
     * @throws ApiException
     */
    private function getAccessToken($clientId, $clientSecret)
    {
        $client = new Client();
        try {
            $response = $client->get($this->host.'/oauth/v2/token', [
                'query' => [
                    'client_id' => $clientId,
                    'client_secret' => $clientSecret,
                    'grant_type' => 'client_credentials',
                ],
            ]);
        } catch (ClientException $e) {
            throw new ApiException(
                'Authorization error',
                $e->getRequest(),
                $e->getResponse(),
                $e
            );
        }
        $data = json_decode($response->getBody()->getContents(), true);

        return $data['access_token'];
    }
}
