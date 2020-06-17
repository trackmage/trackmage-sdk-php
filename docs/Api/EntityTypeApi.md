# TrackMage\Client\Swagger\EntityTypeApi

All URIs are relative to *https://api.l.trackmage.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeStatusBatchEntityTypeCollection**](EntityTypeApi.md#changeStatusBatchEntityTypeCollection) | **POST** /change_status_batch | Assign a status to a given ids list
[**deleteRecordsBatchEntityTypeCollection**](EntityTypeApi.md#deleteRecordsBatchEntityTypeCollection) | **POST** /delete_records_batch | Delete a set of records by ids list



## changeStatusBatchEntityTypeCollection

> \TrackMage\Client\Swagger\Model\EntityType changeStatusBatchEntityTypeCollection($entityType)

Assign a status to a given ids list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\EntityTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityType = new \TrackMage\Client\Swagger\Model\EntityTypeFa101a5f3e9cea55760e926a015950beSetChangeStatusBatchRequest(); // \TrackMage\Client\Swagger\Model\EntityTypeFa101a5f3e9cea55760e926a015950beSetChangeStatusBatchRequest | The new EntityType resource

try {
    $result = $apiInstance->changeStatusBatchEntityTypeCollection($entityType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityTypeApi->changeStatusBatchEntityTypeCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityType** | [**\TrackMage\Client\Swagger\Model\EntityTypeFa101a5f3e9cea55760e926a015950beSetChangeStatusBatchRequest**](../Model/EntityTypeFa101a5f3e9cea55760e926a015950beSetChangeStatusBatchRequest.md)| The new EntityType resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\EntityType**](../Model/EntityType.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteRecordsBatchEntityTypeCollection

> \TrackMage\Client\Swagger\Model\EntityType deleteRecordsBatchEntityTypeCollection($entityType)

Delete a set of records by ids list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\EntityTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityType = new \TrackMage\Client\Swagger\Model\EntityType9eccbdc57c4c56bc5d7b3bf086123b25SetDeleteRecordsBatchRequest(); // \TrackMage\Client\Swagger\Model\EntityType9eccbdc57c4c56bc5d7b3bf086123b25SetDeleteRecordsBatchRequest | The new EntityType resource

try {
    $result = $apiInstance->deleteRecordsBatchEntityTypeCollection($entityType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityTypeApi->deleteRecordsBatchEntityTypeCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityType** | [**\TrackMage\Client\Swagger\Model\EntityType9eccbdc57c4c56bc5d7b3bf086123b25SetDeleteRecordsBatchRequest**](../Model/EntityType9eccbdc57c4c56bc5d7b3bf086123b25SetDeleteRecordsBatchRequest.md)| The new EntityType resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\EntityType**](../Model/EntityType.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

