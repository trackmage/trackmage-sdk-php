# TrackMage\Client\Swagger\PostReviewRequestApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postPostReviewRequestCollection**](PostReviewRequestApi.md#postPostReviewRequestCollection) | **POST** /public/tracking_page_links/{hash}/reviews | Creates a PostReviewRequest resource.



## postPostReviewRequestCollection

> \TrackMage\Client\Swagger\Model\PostReviewRequest418096edba57c92b933e9d97367d1a6f postPostReviewRequestCollection($postReviewRequest)

Creates a PostReviewRequest resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\PostReviewRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postReviewRequest = new \TrackMage\Client\Swagger\Model\PostReviewRequest(); // \TrackMage\Client\Swagger\Model\PostReviewRequest | The new PostReviewRequest resource

try {
    $result = $apiInstance->postPostReviewRequestCollection($postReviewRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostReviewRequestApi->postPostReviewRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postReviewRequest** | [**\TrackMage\Client\Swagger\Model\PostReviewRequest**](../Model/PostReviewRequest.md)| The new PostReviewRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\PostReviewRequest418096edba57c92b933e9d97367d1a6f**](../Model/PostReviewRequest418096edba57c92b933e9d97367d1a6f.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

