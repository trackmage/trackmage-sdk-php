<?php
/**
 * ApplyWorkspacePermissionsBatchRequestApi
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
 * ApplyWorkspacePermissionsBatchRequestApi Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApplyWorkspacePermissionsBatchRequestApi
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
     * Operation postApplyWorkspacePermissionsBatchRequestCollection
     *
     * Creates a ApplyWorkspacePermissionsBatchRequest resource.
     *
     * @param  \TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest $applyWorkspacePermissionsBatchRequest The new ApplyWorkspacePermissionsBatchRequest resource (optional)
     *
     * @throws \TrackMage\Client\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest
     */
    public function postApplyWorkspacePermissionsBatchRequestCollection($applyWorkspacePermissionsBatchRequest = null)
    {
        list($response) = $this->postApplyWorkspacePermissionsBatchRequestCollectionWithHttpInfo($applyWorkspacePermissionsBatchRequest);
        return $response;
    }

    /**
     * Operation postApplyWorkspacePermissionsBatchRequestCollectionWithHttpInfo
     *
     * Creates a ApplyWorkspacePermissionsBatchRequest resource.
     *
     * @param  \TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest $applyWorkspacePermissionsBatchRequest The new ApplyWorkspacePermissionsBatchRequest resource (optional)
     *
     * @throws \TrackMage\Client\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function postApplyWorkspacePermissionsBatchRequestCollectionWithHttpInfo($applyWorkspacePermissionsBatchRequest = null)
    {
        $request = $this->postApplyWorkspacePermissionsBatchRequestCollectionRequest($applyWorkspacePermissionsBatchRequest);

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
                    if ('\TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest';
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
                        '\TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postApplyWorkspacePermissionsBatchRequestCollectionAsync
     *
     * Creates a ApplyWorkspacePermissionsBatchRequest resource.
     *
     * @param  \TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest $applyWorkspacePermissionsBatchRequest The new ApplyWorkspacePermissionsBatchRequest resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postApplyWorkspacePermissionsBatchRequestCollectionAsync($applyWorkspacePermissionsBatchRequest = null)
    {
        return $this->postApplyWorkspacePermissionsBatchRequestCollectionAsyncWithHttpInfo($applyWorkspacePermissionsBatchRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postApplyWorkspacePermissionsBatchRequestCollectionAsyncWithHttpInfo
     *
     * Creates a ApplyWorkspacePermissionsBatchRequest resource.
     *
     * @param  \TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest $applyWorkspacePermissionsBatchRequest The new ApplyWorkspacePermissionsBatchRequest resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postApplyWorkspacePermissionsBatchRequestCollectionAsyncWithHttpInfo($applyWorkspacePermissionsBatchRequest = null)
    {
        $returnType = '\TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest';
        $request = $this->postApplyWorkspacePermissionsBatchRequestCollectionRequest($applyWorkspacePermissionsBatchRequest);

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
     * Create request for operation 'postApplyWorkspacePermissionsBatchRequestCollection'
     *
     * @param  \TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest $applyWorkspacePermissionsBatchRequest The new ApplyWorkspacePermissionsBatchRequest resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postApplyWorkspacePermissionsBatchRequestCollectionRequest($applyWorkspacePermissionsBatchRequest = null)
    {

        $resourcePath = '/workspace_permissions_batch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($applyWorkspacePermissionsBatchRequest)) {
            $_tempBody = $applyWorkspacePermissionsBatchRequest;
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
