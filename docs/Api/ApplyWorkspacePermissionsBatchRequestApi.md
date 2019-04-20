# TrackMage\Client\Swagger\ApplyWorkspacePermissionsBatchRequestApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApplyWorkspacePermissionsBatchRequestCollection**](ApplyWorkspacePermissionsBatchRequestApi.md#postApplyWorkspacePermissionsBatchRequestCollection) | **POST** /workspace_permissions_batch | Creates a ApplyWorkspacePermissionsBatchRequest resource.



## postApplyWorkspacePermissionsBatchRequestCollection

> \TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest postApplyWorkspacePermissionsBatchRequestCollection($applyWorkspacePermissionsBatchRequest)

Creates a ApplyWorkspacePermissionsBatchRequest resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ApplyWorkspacePermissionsBatchRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applyWorkspacePermissionsBatchRequest = new \TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest(); // \TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest | The new ApplyWorkspacePermissionsBatchRequest resource

try {
    $result = $apiInstance->postApplyWorkspacePermissionsBatchRequestCollection($applyWorkspacePermissionsBatchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplyWorkspacePermissionsBatchRequestApi->postApplyWorkspacePermissionsBatchRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applyWorkspacePermissionsBatchRequest** | [**\TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest**](../Model/ApplyWorkspacePermissionsBatchRequest.md)| The new ApplyWorkspacePermissionsBatchRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ApplyWorkspacePermissionsBatchRequest**](../Model/ApplyWorkspacePermissionsBatchRequest.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

