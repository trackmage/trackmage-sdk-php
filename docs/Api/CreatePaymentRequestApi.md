# TrackMage\Client\Swagger\CreatePaymentRequestApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postCreatePaymentRequestCollection**](CreatePaymentRequestApi.md#postCreatePaymentRequestCollection) | **POST** /public/payment | Creates a CreatePaymentRequest resource.



## postCreatePaymentRequestCollection

> \TrackMage\Client\Swagger\Model\CreatePaymentRequest4bbe19ecc8946f4a61a6a05915363ab6 postCreatePaymentRequestCollection($createPaymentRequest)

Creates a CreatePaymentRequest resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\CreatePaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createPaymentRequest = new \TrackMage\Client\Swagger\Model\CreatePaymentRequest(); // \TrackMage\Client\Swagger\Model\CreatePaymentRequest | The new CreatePaymentRequest resource

try {
    $result = $apiInstance->postCreatePaymentRequestCollection($createPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatePaymentRequestApi->postCreatePaymentRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createPaymentRequest** | [**\TrackMage\Client\Swagger\Model\CreatePaymentRequest**](../Model/CreatePaymentRequest.md)| The new CreatePaymentRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\CreatePaymentRequest4bbe19ecc8946f4a61a6a05915363ab6**](../Model/CreatePaymentRequest4bbe19ecc8946f4a61a6a05915363ab6.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

