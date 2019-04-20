# TrackMage\Client\Swagger\TrackingNumberFieldApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesFieldsGetSubresource**](TrackingNumberFieldApi.md#apiTeamsWorkspacesFieldsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/fields | Retrieves the collection of TrackingNumberField resources.
[**apiWorkspacesFieldsGetSubresource**](TrackingNumberFieldApi.md#apiWorkspacesFieldsGetSubresource) | **GET** /workspaces/{id}/fields | Retrieves the collection of TrackingNumberField resources.
[**deleteTrackingNumberFieldItem**](TrackingNumberFieldApi.md#deleteTrackingNumberFieldItem) | **DELETE** /tracking_number_fields/{id} | Removes the TrackingNumberField resource.
[**getTrackingNumberFieldCollection**](TrackingNumberFieldApi.md#getTrackingNumberFieldCollection) | **GET** /tracking_number_fields | Retrieves the collection of TrackingNumberField resources.
[**getTrackingNumberFieldItem**](TrackingNumberFieldApi.md#getTrackingNumberFieldItem) | **GET** /tracking_number_fields/{id} | Retrieves a TrackingNumberField resource.
[**postTrackingNumberFieldCollection**](TrackingNumberFieldApi.md#postTrackingNumberFieldCollection) | **POST** /tracking_number_fields | Creates a TrackingNumberField resource.
[**primaryTrackingNumberFieldCollection**](TrackingNumberFieldApi.md#primaryTrackingNumberFieldCollection) | **GET** /tracking_number_primary_fields | Retrieves the collection of TrackingNumberField resources.
[**putTrackingNumberFieldItem**](TrackingNumberFieldApi.md#putTrackingNumberFieldItem) | **PUT** /tracking_number_fields/{id} | Replaces the TrackingNumberField resource.



## apiTeamsWorkspacesFieldsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField[] apiTeamsWorkspacesFieldsGetSubresource($id, $workspaces, $workspaceId, $workspaceId2)

Retrieves the collection of TrackingNumberField resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$workspaceId = 56; // int | 
$workspaceId2 = array(56); // int[] | 

try {
    $result = $apiInstance->apiTeamsWorkspacesFieldsGetSubresource($id, $workspaces, $workspaceId, $workspaceId2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberFieldApi->apiTeamsWorkspacesFieldsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **workspaceId** | **int**|  | [optional]
 **workspaceId2** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField[]**](../Model/TrackingNumberFieldGetTrackingNumberField.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesFieldsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField[] apiWorkspacesFieldsGetSubresource($id, $workspaceId, $workspaceId2)

Retrieves the collection of TrackingNumberField resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaceId = 56; // int | 
$workspaceId2 = array(56); // int[] | 

try {
    $result = $apiInstance->apiWorkspacesFieldsGetSubresource($id, $workspaceId, $workspaceId2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberFieldApi->apiWorkspacesFieldsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaceId** | **int**|  | [optional]
 **workspaceId2** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField[]**](../Model/TrackingNumberFieldGetTrackingNumberField.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTrackingNumberFieldItem

> deleteTrackingNumberFieldItem($id)

Removes the TrackingNumberField resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteTrackingNumberFieldItem($id);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberFieldApi->deleteTrackingNumberFieldItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrackingNumberFieldCollection

> \TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField[] getTrackingNumberFieldCollection($workspaceId, $workspaceId2, $page, $itemsPerPage)

Retrieves the collection of TrackingNumberField resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = 56; // int | 
$workspaceId2 = array(56); // int[] | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getTrackingNumberFieldCollection($workspaceId, $workspaceId2, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberFieldApi->getTrackingNumberFieldCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **int**|  | [optional]
 **workspaceId2** | [**int[]**](../Model/int.md)|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField[]**](../Model/TrackingNumberFieldGetTrackingNumberField.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrackingNumberFieldItem

> \TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField getTrackingNumberFieldItem($id)

Retrieves a TrackingNumberField resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getTrackingNumberFieldItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberFieldApi->getTrackingNumberFieldItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField**](../Model/TrackingNumberFieldGetTrackingNumberField.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postTrackingNumberFieldCollection

> \TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField postTrackingNumberFieldCollection($trackingNumberField)

Creates a TrackingNumberField resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trackingNumberField = new \TrackMage\Client\Swagger\Model\TrackingNumberFieldPostTrackingNumberField(); // \TrackMage\Client\Swagger\Model\TrackingNumberFieldPostTrackingNumberField | The new TrackingNumberField resource

try {
    $result = $apiInstance->postTrackingNumberFieldCollection($trackingNumberField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberFieldApi->postTrackingNumberFieldCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingNumberField** | [**\TrackMage\Client\Swagger\Model\TrackingNumberFieldPostTrackingNumberField**](../Model/TrackingNumberFieldPostTrackingNumberField.md)| The new TrackingNumberField resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField**](../Model/TrackingNumberFieldGetTrackingNumberField.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## primaryTrackingNumberFieldCollection

> \TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberPrimaryFieldGetSelectOptionsGetDeliveryStatuses[] primaryTrackingNumberFieldCollection($workspaceId, $workspaceId2, $page, $itemsPerPage)

Retrieves the collection of TrackingNumberField resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = 56; // int | 
$workspaceId2 = array(56); // int[] | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->primaryTrackingNumberFieldCollection($workspaceId, $workspaceId2, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberFieldApi->primaryTrackingNumberFieldCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **int**|  | [optional]
 **workspaceId2** | [**int[]**](../Model/int.md)|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberPrimaryFieldGetSelectOptionsGetDeliveryStatuses[]**](../Model/TrackingNumberFieldGetTrackingNumberPrimaryFieldGetSelectOptionsGetDeliveryStatuses.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putTrackingNumberFieldItem

> \TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField putTrackingNumberFieldItem($id, $trackingNumberField)

Replaces the TrackingNumberField resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$trackingNumberField = new \TrackMage\Client\Swagger\Model\TrackingNumberFieldPutTrackingNumberField(); // \TrackMage\Client\Swagger\Model\TrackingNumberFieldPutTrackingNumberField | The updated TrackingNumberField resource

try {
    $result = $apiInstance->putTrackingNumberFieldItem($id, $trackingNumberField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberFieldApi->putTrackingNumberFieldItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **trackingNumberField** | [**\TrackMage\Client\Swagger\Model\TrackingNumberFieldPutTrackingNumberField**](../Model/TrackingNumberFieldPutTrackingNumberField.md)| The updated TrackingNumberField resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingNumberFieldGetTrackingNumberField**](../Model/TrackingNumberFieldGetTrackingNumberField.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

