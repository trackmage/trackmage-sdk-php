# TrackMage\Client\Swagger\OrderStatusApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesOrderStatusesGetSubresource**](OrderStatusApi.md#apiTeamsWorkspacesOrderStatusesGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/order_statuses | Retrieves the collection of OrderStatus resources.
[**apiWorkspacesOrderStatusesGetSubresource**](OrderStatusApi.md#apiWorkspacesOrderStatusesGetSubresource) | **GET** /workspaces/{id}/order_statuses | Retrieves the collection of OrderStatus resources.
[**deleteOrderStatusItem**](OrderStatusApi.md#deleteOrderStatusItem) | **DELETE** /order_statuses/{id} | Removes the OrderStatus resource.
[**getOrderStatusCollection**](OrderStatusApi.md#getOrderStatusCollection) | **GET** /order_statuses | Retrieves the collection of OrderStatus resources.
[**getOrderStatusItem**](OrderStatusApi.md#getOrderStatusItem) | **GET** /order_statuses/{id} | Retrieves a OrderStatus resource.
[**postOrderStatusCollection**](OrderStatusApi.md#postOrderStatusCollection) | **POST** /order_statuses | Creates a OrderStatus resource.
[**putOrderStatusItem**](OrderStatusApi.md#putOrderStatusItem) | **PUT** /order_statuses/{id} | Replaces the OrderStatus resource.



## apiTeamsWorkspacesOrderStatusesGetSubresource

> \TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus[] apiTeamsWorkspacesOrderStatusesGetSubresource($id, $workspaces, $name, $orderId, $orderName)

Retrieves the collection of OrderStatus resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$name = 'name_example'; // string | 
$orderId = 'orderId_example'; // string | 
$orderName = 'orderName_example'; // string | 

try {
    $result = $apiInstance->apiTeamsWorkspacesOrderStatusesGetSubresource($id, $workspaces, $name, $orderId, $orderName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusApi->apiTeamsWorkspacesOrderStatusesGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **name** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderName** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus[]**](../Model/OrderStatusGetOrderStatus.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesOrderStatusesGetSubresource

> \TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus[] apiWorkspacesOrderStatusesGetSubresource($id, $name, $orderId, $orderName)

Retrieves the collection of OrderStatus resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$name = 'name_example'; // string | 
$orderId = 'orderId_example'; // string | 
$orderName = 'orderName_example'; // string | 

try {
    $result = $apiInstance->apiWorkspacesOrderStatusesGetSubresource($id, $name, $orderId, $orderName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusApi->apiWorkspacesOrderStatusesGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **name** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderName** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus[]**](../Model/OrderStatusGetOrderStatus.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteOrderStatusItem

> deleteOrderStatusItem($id)

Removes the OrderStatus resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteOrderStatusItem($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusApi->deleteOrderStatusItem: ', $e->getMessage(), PHP_EOL;
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


## getOrderStatusCollection

> \TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus[] getOrderStatusCollection($name, $orderId, $orderName, $page, $itemsPerPage)

Retrieves the collection of OrderStatus resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | 
$orderId = 'orderId_example'; // string | 
$orderName = 'orderName_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getOrderStatusCollection($name, $orderId, $orderName, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusApi->getOrderStatusCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderName** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus[]**](../Model/OrderStatusGetOrderStatus.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderStatusItem

> \TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus getOrderStatusItem($id)

Retrieves a OrderStatus resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getOrderStatusItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusApi->getOrderStatusItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus**](../Model/OrderStatusGetOrderStatus.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postOrderStatusCollection

> \TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus postOrderStatusCollection($orderStatus)

Creates a OrderStatus resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderStatus = new \TrackMage\Client\Swagger\Model\OrderStatusPostOrderStatus(); // \TrackMage\Client\Swagger\Model\OrderStatusPostOrderStatus | The new OrderStatus resource

try {
    $result = $apiInstance->postOrderStatusCollection($orderStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusApi->postOrderStatusCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderStatus** | [**\TrackMage\Client\Swagger\Model\OrderStatusPostOrderStatus**](../Model/OrderStatusPostOrderStatus.md)| The new OrderStatus resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus**](../Model/OrderStatusGetOrderStatus.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putOrderStatusItem

> \TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus putOrderStatusItem($id, $orderStatus)

Replaces the OrderStatus resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orderStatus = new \TrackMage\Client\Swagger\Model\OrderStatusPutOrderStatus(); // \TrackMage\Client\Swagger\Model\OrderStatusPutOrderStatus | The updated OrderStatus resource

try {
    $result = $apiInstance->putOrderStatusItem($id, $orderStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusApi->putOrderStatusItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **orderStatus** | [**\TrackMage\Client\Swagger\Model\OrderStatusPutOrderStatus**](../Model/OrderStatusPutOrderStatus.md)| The updated OrderStatus resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderStatusGetOrderStatus**](../Model/OrderStatusGetOrderStatus.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

