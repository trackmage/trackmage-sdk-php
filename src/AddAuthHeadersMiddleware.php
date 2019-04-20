<?php

namespace TrackMage\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use TrackMage\Client\Swagger\ApiException;
use TrackMage\Client\Swagger\Configuration;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7;

/**
 * Adds Bearer token
 */
class AddAuthHeadersMiddleware
{
    /** @var callable  */
    private $nextHandler;

    private $configuration;

    /**
     * @param callable      $nextHandler
     * @param Configuration $configuration
     */
    public function __construct(callable $nextHandler, Configuration $configuration)
    {
        $this->nextHandler = $nextHandler;
        $this->configuration = $configuration;
    }

    /**
     * @param Configuration $configuration
     * @return \Closure
     */
    public static function get(Configuration $configuration)
    {
        return function (callable $handler) use ($configuration) {
            return new AddAuthHeadersMiddleware($handler, $configuration);
        };
    }

    /**
     * @param RequestInterface $request
     * @param array            $options
     * @return mixed
     * @throws ApiException
     */
    public function __invoke(RequestInterface $request, array $options)
    {
        $token = $this->configuration->getAccessToken();
        if (empty($token)) {
            $clientId = $this->configuration->getUsername();
            $clientSecret = $this->configuration->getPassword();
            if (!empty($clientId) && !empty($clientSecret)) {
                $token = $this->getAccessToken($clientId, $clientSecret);
                $this->configuration->setAccessToken($token);
            }
        }
        if (!empty($token)) {
            $request = $this->addAuthHeaders($request, $token);
        }
        $fn = $this->nextHandler;

        return $fn($request, $options);
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
            $response = $client->get($this->configuration->getHost().'/oauth/v2/token', [
                'query' => [
                    'client_id' => $clientId,
                    'client_secret' => $clientSecret,
                    'grant_type' => 'client_credentials',
                ],
            ]);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            throw new ApiException(
                'Authorization error',
                $e->getCode(),
                $response->getHeaders(),
                $response->getBody()->getContents()
            );
        }
        $data = json_decode($response->getBody()->getContents(), true);

        return $data['access_token'];
    }
}
