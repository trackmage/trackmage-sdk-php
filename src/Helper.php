<?php

namespace TrackMage\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

final class Helper
{
    /**
     * @param string $host
     * @param string|null $clientId
     * @param string|null $clientSecret
     * @return string
     * @throws ClientException
     */
    public static function getAccessToken($host, $clientId, $clientSecret)
    {
        $client = new Client();
        $response = $client->get($host.'/oauth/v2/token', [
            'query' => [
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
                'grant_type' => 'client_credentials',
            ],
        ]);
        $data = json_decode($response->getBody()->getContents(), true);

        return $data['access_token'];
    }
}
