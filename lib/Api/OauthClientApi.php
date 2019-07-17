<?php
/**
 * OauthClientApi
 * PHP version 5
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TrackMage API
 *
 * TrackMage API
 *
 * The version of the OpenAPI document: v0.1.40-86-ge2f1de7
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TrackMage\Client\Swagger\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use TrackMage\Client\Swagger\ApiException;
use TrackMage\Client\Swagger\Configuration;
use TrackMage\Client\Swagger\HeaderSelector;
use TrackMage\Client\Swagger\ObjectSerializer;

/**
 * OauthClientApi Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OauthClientApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation deleteOauthClientItem
     *
     * Removes the OauthClient resource.
     *
     * @param  string $id id (required)
     *
     * @throws \TrackMage\Client\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteOauthClientItem($id)
    {
        $this->deleteOauthClientItemWithHttpInfo($id);
    }

    /**
     * Operation deleteOauthClientItemWithHttpInfo
     *
     * Removes the OauthClient resource.
     *
     * @param  string $id (required)
     *
     * @throws \TrackMage\Client\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteOauthClientItemWithHttpInfo($id)
    {
        $request = $this->deleteOauthClientItemRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteOauthClientItemAsync
     *
     * Removes the OauthClient resource.
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOauthClientItemAsync($id)
    {
        return $this->deleteOauthClientItemAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteOauthClientItemAsyncWithHttpInfo
     *
     * Removes the OauthClient resource.
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOauthClientItemAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->deleteOauthClientItemRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteOauthClientItem'
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteOauthClientItemRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteOauthClientItem'
            );
        }

        $resourcePath = '/oauth_clients/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOauthClientCollection
     *
     * Retrieves the collection of OauthClient resources.
     *
     * @param  int $page The collection page number (optional)
     * @param  int $itemsPerPage The number of items per page (optional)
     *
     * @throws \TrackMage\Client\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient[]
     */
    public function getOauthClientCollection($page = null, $itemsPerPage = null)
    {
        list($response) = $this->getOauthClientCollectionWithHttpInfo($page, $itemsPerPage);
        return $response;
    }

    /**
     * Operation getOauthClientCollectionWithHttpInfo
     *
     * Retrieves the collection of OauthClient resources.
     *
     * @param  int $page The collection page number (optional)
     * @param  int $itemsPerPage The number of items per page (optional)
     *
     * @throws \TrackMage\Client\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getOauthClientCollectionWithHttpInfo($page = null, $itemsPerPage = null)
    {
        $request = $this->getOauthClientCollectionRequest($page, $itemsPerPage);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOauthClientCollectionAsync
     *
     * Retrieves the collection of OauthClient resources.
     *
     * @param  int $page The collection page number (optional)
     * @param  int $itemsPerPage The number of items per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOauthClientCollectionAsync($page = null, $itemsPerPage = null)
    {
        return $this->getOauthClientCollectionAsyncWithHttpInfo($page, $itemsPerPage)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOauthClientCollectionAsyncWithHttpInfo
     *
     * Retrieves the collection of OauthClient resources.
     *
     * @param  int $page The collection page number (optional)
     * @param  int $itemsPerPage The number of items per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOauthClientCollectionAsyncWithHttpInfo($page = null, $itemsPerPage = null)
    {
        $returnType = '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient[]';
        $request = $this->getOauthClientCollectionRequest($page, $itemsPerPage);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOauthClientCollection'
     *
     * @param  int $page The collection page number (optional)
     * @param  int $itemsPerPage The number of items per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOauthClientCollectionRequest($page = null, $itemsPerPage = null)
    {

        $resourcePath = '/oauth_clients';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($itemsPerPage !== null) {
            $queryParams['itemsPerPage'] = ObjectSerializer::toQueryValue($itemsPerPage);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/ld+json', 'application/json', 'text/csv', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/ld+json', 'application/json', 'text/csv', 'text/html'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOauthClientItem
     *
     * Retrieves a OauthClient resource.
     *
     * @param  string $id id (required)
     *
     * @throws \TrackMage\Client\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient
     */
    public function getOauthClientItem($id)
    {
        list($response) = $this->getOauthClientItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getOauthClientItemWithHttpInfo
     *
     * Retrieves a OauthClient resource.
     *
     * @param  string $id (required)
     *
     * @throws \TrackMage\Client\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOauthClientItemWithHttpInfo($id)
    {
        $request = $this->getOauthClientItemRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOauthClientItemAsync
     *
     * Retrieves a OauthClient resource.
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOauthClientItemAsync($id)
    {
        return $this->getOauthClientItemAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOauthClientItemAsyncWithHttpInfo
     *
     * Retrieves a OauthClient resource.
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOauthClientItemAsyncWithHttpInfo($id)
    {
        $returnType = '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient';
        $request = $this->getOauthClientItemRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOauthClientItem'
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOauthClientItemRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getOauthClientItem'
            );
        }

        $resourcePath = '/oauth_clients/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/ld+json', 'application/json', 'text/csv', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/ld+json', 'application/json', 'text/csv', 'text/html'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postOauthClientCollection
     *
     * Creates a OauthClient resource.
     *
     * @param  \TrackMage\Client\Swagger\Model\OauthClientSetOAuthClient $oauthClient The new OauthClient resource (optional)
     *
     * @throws \TrackMage\Client\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient
     */
    public function postOauthClientCollection($oauthClient = null)
    {
        list($response) = $this->postOauthClientCollectionWithHttpInfo($oauthClient);
        return $response;
    }

    /**
     * Operation postOauthClientCollectionWithHttpInfo
     *
     * Creates a OauthClient resource.
     *
     * @param  \TrackMage\Client\Swagger\Model\OauthClientSetOAuthClient $oauthClient The new OauthClient resource (optional)
     *
     * @throws \TrackMage\Client\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient, HTTP status code, HTTP response headers (array of strings)
     */
    public function postOauthClientCollectionWithHttpInfo($oauthClient = null)
    {
        $request = $this->postOauthClientCollectionRequest($oauthClient);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 201:
                    if ('\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postOauthClientCollectionAsync
     *
     * Creates a OauthClient resource.
     *
     * @param  \TrackMage\Client\Swagger\Model\OauthClientSetOAuthClient $oauthClient The new OauthClient resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postOauthClientCollectionAsync($oauthClient = null)
    {
        return $this->postOauthClientCollectionAsyncWithHttpInfo($oauthClient)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postOauthClientCollectionAsyncWithHttpInfo
     *
     * Creates a OauthClient resource.
     *
     * @param  \TrackMage\Client\Swagger\Model\OauthClientSetOAuthClient $oauthClient The new OauthClient resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postOauthClientCollectionAsyncWithHttpInfo($oauthClient = null)
    {
        $returnType = '\TrackMage\Client\Swagger\Model\OauthClientGetOAuthClient';
        $request = $this->postOauthClientCollectionRequest($oauthClient);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postOauthClientCollection'
     *
     * @param  \TrackMage\Client\Swagger\Model\OauthClientSetOAuthClient $oauthClient The new OauthClient resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postOauthClientCollectionRequest($oauthClient = null)
    {

        $resourcePath = '/oauth_clients';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($oauthClient)) {
            $_tempBody = $oauthClient;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/ld+json', 'application/json', 'text/csv', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/ld+json', 'application/json', 'text/csv', 'text/html'],
                ['application/ld+json', 'application/json', 'text/csv', 'text/html']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
