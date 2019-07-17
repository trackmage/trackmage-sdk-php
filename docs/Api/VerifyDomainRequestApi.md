# TrackMage\Client\Swagger\VerifyDomainRequestApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postVerifyDomainRequestCollection**](VerifyDomainRequestApi.md#postVerifyDomainRequestCollection) | **POST** /domain/verify | Verifies given domain



## postVerifyDomainRequestCollection

> \TrackMage\Client\Swagger\Model\VerifyDomainRequestDddf337f2968b9a0d8945a92c3650a2f postVerifyDomainRequestCollection($verifyDomainRequest)

Verifies given domain

- Accessible means domain returns non-error status. - Verified means DNS is configured correctly. - SSL indicates that the domain was verified through https or http.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\VerifyDomainRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verifyDomainRequest = new \TrackMage\Client\Swagger\Model\VerifyDomainRequest(); // \TrackMage\Client\Swagger\Model\VerifyDomainRequest | The new VerifyDomainRequest resource

try {
    $result = $apiInstance->postVerifyDomainRequestCollection($verifyDomainRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyDomainRequestApi->postVerifyDomainRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verifyDomainRequest** | [**\TrackMage\Client\Swagger\Model\VerifyDomainRequest**](../Model/VerifyDomainRequest.md)| The new VerifyDomainRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\VerifyDomainRequestDddf337f2968b9a0d8945a92c3650a2f**](../Model/VerifyDomainRequestDddf337f2968b9a0d8945a92c3650a2f.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

