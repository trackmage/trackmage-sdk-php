# TrackMage\Client\Swagger\GenerateTrackingPageLinkRequestApi

All URIs are relative to *https://api.l.trackmage.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postGenerateTrackingPageLinkRequestCollection**](GenerateTrackingPageLinkRequestApi.md#postGenerateTrackingPageLinkRequestCollection) | **POST** /generate_tracking_page_link | Creates a GenerateTrackingPageLinkRequest resource.



## postGenerateTrackingPageLinkRequestCollection

> \TrackMage\Client\Swagger\Model\GenerateTrackingPageLinkRequest postGenerateTrackingPageLinkRequestCollection($generateTrackingPageLinkRequest)

Creates a GenerateTrackingPageLinkRequest resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\GenerateTrackingPageLinkRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generateTrackingPageLinkRequest = new \TrackMage\Client\Swagger\Model\GenerateTrackingPageLinkRequest(); // \TrackMage\Client\Swagger\Model\GenerateTrackingPageLinkRequest | The new GenerateTrackingPageLinkRequest resource

try {
    $result = $apiInstance->postGenerateTrackingPageLinkRequestCollection($generateTrackingPageLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenerateTrackingPageLinkRequestApi->postGenerateTrackingPageLinkRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generateTrackingPageLinkRequest** | [**\TrackMage\Client\Swagger\Model\GenerateTrackingPageLinkRequest**](../Model/GenerateTrackingPageLinkRequest.md)| The new GenerateTrackingPageLinkRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\GenerateTrackingPageLinkRequest**](../Model/GenerateTrackingPageLinkRequest.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

