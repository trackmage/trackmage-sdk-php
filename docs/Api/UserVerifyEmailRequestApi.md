# TrackMage\Client\Swagger\UserVerifyEmailRequestApi

All URIs are relative to *https://api.l.trackmage.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postUserVerifyEmailRequestCollection**](UserVerifyEmailRequestApi.md#postUserVerifyEmailRequestCollection) | **POST** /security/verify-email | Creates a UserVerifyEmailRequest resource.



## postUserVerifyEmailRequestCollection

> object postUserVerifyEmailRequestCollection($userVerifyEmailRequest)

Creates a UserVerifyEmailRequest resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\UserVerifyEmailRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userVerifyEmailRequest = new \TrackMage\Client\Swagger\Model\UserVerifyEmailRequest(); // \TrackMage\Client\Swagger\Model\UserVerifyEmailRequest | The new UserVerifyEmailRequest resource

try {
    $result = $apiInstance->postUserVerifyEmailRequestCollection($userVerifyEmailRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserVerifyEmailRequestApi->postUserVerifyEmailRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userVerifyEmailRequest** | [**\TrackMage\Client\Swagger\Model\UserVerifyEmailRequest**](../Model/UserVerifyEmailRequest.md)| The new UserVerifyEmailRequest resource | [optional]

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

