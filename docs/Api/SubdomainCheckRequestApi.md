# TrackMage\Client\Swagger\SubdomainCheckRequestApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postSubdomainCheckRequestCollection**](SubdomainCheckRequestApi.md#postSubdomainCheckRequestCollection) | **POST** /subdomain/check | Checks whether subdomain is available



## postSubdomainCheckRequestCollection

> \TrackMage\Client\Swagger\Model\SubdomainCheckRequestE29d63eea28a754aa626ec5e9cd91799 postSubdomainCheckRequestCollection($subdomainCheckRequest)

Checks whether subdomain is available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\SubdomainCheckRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subdomainCheckRequest = new \TrackMage\Client\Swagger\Model\SubdomainCheckRequest(); // \TrackMage\Client\Swagger\Model\SubdomainCheckRequest | The new SubdomainCheckRequest resource

try {
    $result = $apiInstance->postSubdomainCheckRequestCollection($subdomainCheckRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubdomainCheckRequestApi->postSubdomainCheckRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subdomainCheckRequest** | [**\TrackMage\Client\Swagger\Model\SubdomainCheckRequest**](../Model/SubdomainCheckRequest.md)| The new SubdomainCheckRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\SubdomainCheckRequestE29d63eea28a754aa626ec5e9cd91799**](../Model/SubdomainCheckRequestE29d63eea28a754aa626ec5e9cd91799.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

