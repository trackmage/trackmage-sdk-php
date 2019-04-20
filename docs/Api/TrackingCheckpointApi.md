# TrackMage\Client\Swagger\TrackingCheckpointApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesTrackingNumbersCheckpointsGetSubresource**](TrackingCheckpointApi.md#apiTeamsWorkspacesTrackingNumbersCheckpointsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/tracking_numbers/{trackingNumbers}/checkpoints | Retrieves the collection of TrackingCheckpoint resources.
[**apiTrackingNumbersCheckpointsGetSubresource**](TrackingCheckpointApi.md#apiTrackingNumbersCheckpointsGetSubresource) | **GET** /tracking_numbers/{id}/checkpoints | Retrieves the collection of TrackingCheckpoint resources.
[**apiWorkspacesTrackingNumbersCheckpointsGetSubresource**](TrackingCheckpointApi.md#apiWorkspacesTrackingNumbersCheckpointsGetSubresource) | **GET** /workspaces/{id}/tracking_numbers/{trackingNumbers}/checkpoints | Retrieves the collection of TrackingCheckpoint resources.
[**getTrackingCheckpointCollection**](TrackingCheckpointApi.md#getTrackingCheckpointCollection) | **GET** /tracking_checkpoints | Retrieves the collection of TrackingCheckpoint resources.
[**getTrackingCheckpointItem**](TrackingCheckpointApi.md#getTrackingCheckpointItem) | **GET** /tracking_checkpoints/{id} | Retrieves a TrackingCheckpoint resource.



## apiTeamsWorkspacesTrackingNumbersCheckpointsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoint[] apiTeamsWorkspacesTrackingNumbersCheckpointsGetSubresource($id, $workspaces, $trackingNumbers, $orderCheckpointDate)

Retrieves the collection of TrackingCheckpoint resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingCheckpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$trackingNumbers = 'trackingNumbers_example'; // string | 
$orderCheckpointDate = 'orderCheckpointDate_example'; // string | 

try {
    $result = $apiInstance->apiTeamsWorkspacesTrackingNumbersCheckpointsGetSubresource($id, $workspaces, $trackingNumbers, $orderCheckpointDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingCheckpointApi->apiTeamsWorkspacesTrackingNumbersCheckpointsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **trackingNumbers** | **string**|  |
 **orderCheckpointDate** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoint[]**](../Model/TrackingCheckpointGetTrackingCheckpoint.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTrackingNumbersCheckpointsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoint[] apiTrackingNumbersCheckpointsGetSubresource($id, $orderCheckpointDate)

Retrieves the collection of TrackingCheckpoint resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingCheckpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orderCheckpointDate = 'orderCheckpointDate_example'; // string | 

try {
    $result = $apiInstance->apiTrackingNumbersCheckpointsGetSubresource($id, $orderCheckpointDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingCheckpointApi->apiTrackingNumbersCheckpointsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **orderCheckpointDate** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoint[]**](../Model/TrackingCheckpointGetTrackingCheckpoint.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesTrackingNumbersCheckpointsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoint[] apiWorkspacesTrackingNumbersCheckpointsGetSubresource($id, $trackingNumbers, $orderCheckpointDate)

Retrieves the collection of TrackingCheckpoint resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingCheckpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$trackingNumbers = 'trackingNumbers_example'; // string | 
$orderCheckpointDate = 'orderCheckpointDate_example'; // string | 

try {
    $result = $apiInstance->apiWorkspacesTrackingNumbersCheckpointsGetSubresource($id, $trackingNumbers, $orderCheckpointDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingCheckpointApi->apiWorkspacesTrackingNumbersCheckpointsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **trackingNumbers** | **string**|  |
 **orderCheckpointDate** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoint[]**](../Model/TrackingCheckpointGetTrackingCheckpoint.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrackingCheckpointCollection

> \TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoints[] getTrackingCheckpointCollection($orderCheckpointDate, $page, $itemsPerPage)

Retrieves the collection of TrackingCheckpoint resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingCheckpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderCheckpointDate = 'orderCheckpointDate_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getTrackingCheckpointCollection($orderCheckpointDate, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingCheckpointApi->getTrackingCheckpointCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderCheckpointDate** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoints[]**](../Model/TrackingCheckpointGetTrackingCheckpoints.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrackingCheckpointItem

> \TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoint getTrackingCheckpointItem($id)

Retrieves a TrackingCheckpoint resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingCheckpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getTrackingCheckpointItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingCheckpointApi->getTrackingCheckpointItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoint**](../Model/TrackingCheckpointGetTrackingCheckpoint.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

