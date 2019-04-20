# TrackMage\Client\Swagger\ForgotPasswordResetRequestApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postForgotPasswordResetRequestCollection**](ForgotPasswordResetRequestApi.md#postForgotPasswordResetRequestCollection) | **POST** /security/forgot-password/reset | Creates a ForgotPasswordResetRequest resource.



## postForgotPasswordResetRequestCollection

> \TrackMage\Client\Swagger\Model\ForgotPasswordResetRequest postForgotPasswordResetRequestCollection($forgotPasswordResetRequest)

Creates a ForgotPasswordResetRequest resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ForgotPasswordResetRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$forgotPasswordResetRequest = new \TrackMage\Client\Swagger\Model\ForgotPasswordResetRequest(); // \TrackMage\Client\Swagger\Model\ForgotPasswordResetRequest | The new ForgotPasswordResetRequest resource

try {
    $result = $apiInstance->postForgotPasswordResetRequestCollection($forgotPasswordResetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForgotPasswordResetRequestApi->postForgotPasswordResetRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forgotPasswordResetRequest** | [**\TrackMage\Client\Swagger\Model\ForgotPasswordResetRequest**](../Model/ForgotPasswordResetRequest.md)| The new ForgotPasswordResetRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ForgotPasswordResetRequest**](../Model/ForgotPasswordResetRequest.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

