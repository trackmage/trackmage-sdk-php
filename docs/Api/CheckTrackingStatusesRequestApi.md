# TrackMage\Client\Swagger\CheckTrackingStatusesRequestApi

All URIs are relative to *https://api.l.trackmage.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postCheckTrackingStatusesRequestCollection**](CheckTrackingStatusesRequestApi.md#postCheckTrackingStatusesRequestCollection) | **POST** /check_tracking_numbers | Checks the statuses of existing tracking numbers and immediately returns the result.



## postCheckTrackingStatusesRequestCollection

> object postCheckTrackingStatusesRequestCollection($checkTrackingStatusesRequest)

Checks the statuses of existing tracking numbers and immediately returns the result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\CheckTrackingStatusesRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkTrackingStatusesRequest = new \TrackMage\Client\Swagger\Model\CheckTrackingStatusesRequestCheckTrackingStatusesRequestSetTrackingForCheck(); // \TrackMage\Client\Swagger\Model\CheckTrackingStatusesRequestCheckTrackingStatusesRequestSetTrackingForCheck | The new CheckTrackingStatusesRequest resource

try {
    $result = $apiInstance->postCheckTrackingStatusesRequestCollection($checkTrackingStatusesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckTrackingStatusesRequestApi->postCheckTrackingStatusesRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkTrackingStatusesRequest** | [**\TrackMage\Client\Swagger\Model\CheckTrackingStatusesRequestCheckTrackingStatusesRequestSetTrackingForCheck**](../Model/CheckTrackingStatusesRequestCheckTrackingStatusesRequestSetTrackingForCheck.md)| The new CheckTrackingStatusesRequest resource | [optional]

### Return type

**object**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

