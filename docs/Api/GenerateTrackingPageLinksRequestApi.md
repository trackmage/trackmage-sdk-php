# TrackMage\Client\Swagger\GenerateTrackingPageLinksRequestApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postGenerateTrackingPageLinksRequestCollection**](GenerateTrackingPageLinksRequestApi.md#postGenerateTrackingPageLinksRequestCollection) | **POST** /generate_tracking_page_links | Creates a GenerateTrackingPageLinksRequest resource.



## postGenerateTrackingPageLinksRequestCollection

> \TrackMage\Client\Swagger\Model\GenerateTrackingPageLinksRequest postGenerateTrackingPageLinksRequestCollection($generateTrackingPageLinksRequest)

Creates a GenerateTrackingPageLinksRequest resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\GenerateTrackingPageLinksRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generateTrackingPageLinksRequest = new \TrackMage\Client\Swagger\Model\GenerateTrackingPageLinksRequest(); // \TrackMage\Client\Swagger\Model\GenerateTrackingPageLinksRequest | The new GenerateTrackingPageLinksRequest resource

try {
    $result = $apiInstance->postGenerateTrackingPageLinksRequestCollection($generateTrackingPageLinksRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenerateTrackingPageLinksRequestApi->postGenerateTrackingPageLinksRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generateTrackingPageLinksRequest** | [**\TrackMage\Client\Swagger\Model\GenerateTrackingPageLinksRequest**](../Model/GenerateTrackingPageLinksRequest.md)| The new GenerateTrackingPageLinksRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\GenerateTrackingPageLinksRequest**](../Model/GenerateTrackingPageLinksRequest.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

