# TrackMage\Client\Swagger\ForgotPasswordSendEmailRequestApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postForgotPasswordSendEmailRequestCollection**](ForgotPasswordSendEmailRequestApi.md#postForgotPasswordSendEmailRequestCollection) | **POST** /security/forgot-password/send-email | Creates a ForgotPasswordSendEmailRequest resource.



## postForgotPasswordSendEmailRequestCollection

> \TrackMage\Client\Swagger\Model\ForgotPasswordSendEmailRequest postForgotPasswordSendEmailRequestCollection($forgotPasswordSendEmailRequest)

Creates a ForgotPasswordSendEmailRequest resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ForgotPasswordSendEmailRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$forgotPasswordSendEmailRequest = new \TrackMage\Client\Swagger\Model\ForgotPasswordSendEmailRequest(); // \TrackMage\Client\Swagger\Model\ForgotPasswordSendEmailRequest | The new ForgotPasswordSendEmailRequest resource

try {
    $result = $apiInstance->postForgotPasswordSendEmailRequestCollection($forgotPasswordSendEmailRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForgotPasswordSendEmailRequestApi->postForgotPasswordSendEmailRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forgotPasswordSendEmailRequest** | [**\TrackMage\Client\Swagger\Model\ForgotPasswordSendEmailRequest**](../Model/ForgotPasswordSendEmailRequest.md)| The new ForgotPasswordSendEmailRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ForgotPasswordSendEmailRequest**](../Model/ForgotPasswordSendEmailRequest.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

