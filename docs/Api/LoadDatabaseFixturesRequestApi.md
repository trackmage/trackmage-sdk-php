# TrackMage\Client\Swagger\LoadDatabaseFixturesRequestApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postLoadDatabaseFixturesRequestCollection**](LoadDatabaseFixturesRequestApi.md#postLoadDatabaseFixturesRequestCollection) | **POST** /test/load-fixtures | Loads database fixtures in the test mode



## postLoadDatabaseFixturesRequestCollection

> \TrackMage\Client\Swagger\Model\LoadDatabaseFixturesRequest76bb9dbd6a178681462e873fc4169938 postLoadDatabaseFixturesRequestCollection($loadDatabaseFixturesRequest)

Loads database fixtures in the test mode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\LoadDatabaseFixturesRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loadDatabaseFixturesRequest = new \TrackMage\Client\Swagger\Model\LoadDatabaseFixturesRequest(); // \TrackMage\Client\Swagger\Model\LoadDatabaseFixturesRequest | The new LoadDatabaseFixturesRequest resource

try {
    $result = $apiInstance->postLoadDatabaseFixturesRequestCollection($loadDatabaseFixturesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadDatabaseFixturesRequestApi->postLoadDatabaseFixturesRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loadDatabaseFixturesRequest** | [**\TrackMage\Client\Swagger\Model\LoadDatabaseFixturesRequest**](../Model/LoadDatabaseFixturesRequest.md)| The new LoadDatabaseFixturesRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\LoadDatabaseFixturesRequest76bb9dbd6a178681462e873fc4169938**](../Model/LoadDatabaseFixturesRequest76bb9dbd6a178681462e873fc4169938.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

