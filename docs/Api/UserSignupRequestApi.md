# TrackMage\Client\Swagger\UserSignupRequestApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postUserSignupRequestCollection**](UserSignupRequestApi.md#postUserSignupRequestCollection) | **POST** /security/signup | Creates a UserSignupRequest resource.



## postUserSignupRequestCollection

> \TrackMage\Client\Swagger\Model\UserSignupRequest postUserSignupRequestCollection($userSignupRequest)

Creates a UserSignupRequest resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\UserSignupRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userSignupRequest = new \TrackMage\Client\Swagger\Model\UserSignupRequestSetUserSignupRequest(); // \TrackMage\Client\Swagger\Model\UserSignupRequestSetUserSignupRequest | The new UserSignupRequest resource

try {
    $result = $apiInstance->postUserSignupRequestCollection($userSignupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSignupRequestApi->postUserSignupRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userSignupRequest** | [**\TrackMage\Client\Swagger\Model\UserSignupRequestSetUserSignupRequest**](../Model/UserSignupRequestSetUserSignupRequest.md)| The new UserSignupRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\UserSignupRequest**](../Model/UserSignupRequest.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

