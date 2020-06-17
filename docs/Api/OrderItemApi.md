# TrackMage\Client\Swagger\OrderItemApi

All URIs are relative to *https://api.l.trackmage.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiOrderItemsShipmentItemsGetSubresource**](OrderItemApi.md#apiOrderItemsShipmentItemsGetSubresource) | **GET** /order_items/{id}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**apiOrdersItemsGetSubresource**](OrderItemApi.md#apiOrdersItemsGetSubresource) | **GET** /orders/{id}/items | Retrieves the collection of OrderItem resources.
[**apiOrdersItemsShipmentItemsGetSubresource**](OrderItemApi.md#apiOrdersItemsShipmentItemsGetSubresource) | **GET** /orders/{id}/items/{items}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**apiTeamsWorkspacesOrdersItemsGetSubresource**](OrderItemApi.md#apiTeamsWorkspacesOrdersItemsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/orders/{orders}/items | Retrieves the collection of OrderItem resources.
[**apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource**](OrderItemApi.md#apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/orders/{orders}/items/{items}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**apiWorkspacesOrdersItemsGetSubresource**](OrderItemApi.md#apiWorkspacesOrdersItemsGetSubresource) | **GET** /workspaces/{id}/orders/{orders}/items | Retrieves the collection of OrderItem resources.
[**apiWorkspacesOrdersItemsShipmentItemsGetSubresource**](OrderItemApi.md#apiWorkspacesOrdersItemsShipmentItemsGetSubresource) | **GET** /workspaces/{id}/orders/{orders}/items/{items}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**deleteOrderItemItem**](OrderItemApi.md#deleteOrderItemItem) | **DELETE** /order_items/{id} | Removes the OrderItem resource.
[**getOrderItemCollection**](OrderItemApi.md#getOrderItemCollection) | **GET** /order_items | Retrieves the collection of OrderItem resources.
[**getOrderItemItem**](OrderItemApi.md#getOrderItemItem) | **GET** /order_items/{id} | Retrieves a OrderItem resource.
[**postOrderItemCollection**](OrderItemApi.md#postOrderItemCollection) | **POST** /order_items | Creates a OrderItem resource.
[**putOrderItemItem**](OrderItemApi.md#putOrderItemItem) | **PUT** /order_items/{id} | Replaces the OrderItem resource.



## apiOrderItemsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGet[] apiOrderItemsShipmentItemsGetSubresource($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$id2 = array('id_example'); // string[] | 
$shipmentId = 'shipmentId_example'; // string | 
$shipmentId2 = array('shipmentId_example'); // string[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$workspaceId = 'workspaceId_example'; // string | 
$workspaceId2 = array('workspaceId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiOrderItemsShipmentItemsGetSubresource($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiOrderItemsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentId** | **string**|  | [optional]
 **shipmentId2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **workspaceId** | **string**|  | [optional]
 **workspaceId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGet[]**](../Model/ShipmentItemGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiOrdersItemsGetSubresource

> \TrackMage\Client\Swagger\Model\OrderItemGet[] apiOrdersItemsGetSubresource($id, $id2, $productName, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte, $page, $itemsPerPage)

Retrieves the collection of OrderItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$id2 = array('id_example'); // string[] | 
$productName = 'productName_example'; // string | 
$workspaceId = 'workspaceId_example'; // string | 
$workspaceId2 = array('workspaceId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderProductName = 'orderProductName_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$orderPrice = 'orderPrice_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 
$priceBetween = 'priceBetween_example'; // string | 
$priceGt = 'priceGt_example'; // string | 
$priceGte = 'priceGte_example'; // string | 
$priceLt = 'priceLt_example'; // string | 
$priceLte = 'priceLte_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiOrdersItemsGetSubresource($id, $id2, $productName, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiOrdersItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **productName** | **string**|  | [optional]
 **workspaceId** | **string**|  | [optional]
 **workspaceId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderProductName** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **orderPrice** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **price** | **string**|  | [optional]
 **price2** | [**string[]**](../Model/string.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]
 **priceBetween** | **string**|  | [optional]
 **priceGt** | **string**|  | [optional]
 **priceGte** | **string**|  | [optional]
 **priceLt** | **string**|  | [optional]
 **priceLte** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderItemGet[]**](../Model/OrderItemGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiOrdersItemsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGet[] apiOrdersItemsShipmentItemsGetSubresource($id, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$items = 'items_example'; // string | 
$id2 = array('id_example'); // string[] | 
$shipmentId = 'shipmentId_example'; // string | 
$shipmentId2 = array('shipmentId_example'); // string[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$workspaceId = 'workspaceId_example'; // string | 
$workspaceId2 = array('workspaceId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiOrdersItemsShipmentItemsGetSubresource($id, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiOrdersItemsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **items** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentId** | **string**|  | [optional]
 **shipmentId2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **workspaceId** | **string**|  | [optional]
 **workspaceId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGet[]**](../Model/ShipmentItemGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesOrdersItemsGetSubresource

> \TrackMage\Client\Swagger\Model\OrderItemGet[] apiTeamsWorkspacesOrdersItemsGetSubresource($id, $workspaces, $orders, $id2, $productName, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte, $page, $itemsPerPage)

Retrieves the collection of OrderItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$orders = 'orders_example'; // string | 
$id2 = array('id_example'); // string[] | 
$productName = 'productName_example'; // string | 
$workspaceId = 'workspaceId_example'; // string | 
$workspaceId2 = array('workspaceId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderProductName = 'orderProductName_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$orderPrice = 'orderPrice_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 
$priceBetween = 'priceBetween_example'; // string | 
$priceGt = 'priceGt_example'; // string | 
$priceGte = 'priceGte_example'; // string | 
$priceLt = 'priceLt_example'; // string | 
$priceLte = 'priceLte_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiTeamsWorkspacesOrdersItemsGetSubresource($id, $workspaces, $orders, $id2, $productName, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiTeamsWorkspacesOrdersItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **orders** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **productName** | **string**|  | [optional]
 **workspaceId** | **string**|  | [optional]
 **workspaceId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderProductName** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **orderPrice** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **price** | **string**|  | [optional]
 **price2** | [**string[]**](../Model/string.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]
 **priceBetween** | **string**|  | [optional]
 **priceGt** | **string**|  | [optional]
 **priceGte** | **string**|  | [optional]
 **priceLt** | **string**|  | [optional]
 **priceLte** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderItemGet[]**](../Model/OrderItemGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGet[] apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource($id, $workspaces, $orders, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$orders = 'orders_example'; // string | 
$items = 'items_example'; // string | 
$id2 = array('id_example'); // string[] | 
$shipmentId = 'shipmentId_example'; // string | 
$shipmentId2 = array('shipmentId_example'); // string[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$workspaceId = 'workspaceId_example'; // string | 
$workspaceId2 = array('workspaceId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource($id, $workspaces, $orders, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **orders** | **string**|  |
 **items** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentId** | **string**|  | [optional]
 **shipmentId2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **workspaceId** | **string**|  | [optional]
 **workspaceId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGet[]**](../Model/ShipmentItemGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesOrdersItemsGetSubresource

> \TrackMage\Client\Swagger\Model\OrderItemGet[] apiWorkspacesOrdersItemsGetSubresource($id, $orders, $id2, $productName, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte, $page, $itemsPerPage)

Retrieves the collection of OrderItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orders = 'orders_example'; // string | 
$id2 = array('id_example'); // string[] | 
$productName = 'productName_example'; // string | 
$workspaceId = 'workspaceId_example'; // string | 
$workspaceId2 = array('workspaceId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderProductName = 'orderProductName_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$orderPrice = 'orderPrice_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 
$priceBetween = 'priceBetween_example'; // string | 
$priceGt = 'priceGt_example'; // string | 
$priceGte = 'priceGte_example'; // string | 
$priceLt = 'priceLt_example'; // string | 
$priceLte = 'priceLte_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiWorkspacesOrdersItemsGetSubresource($id, $orders, $id2, $productName, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiWorkspacesOrdersItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **orders** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **productName** | **string**|  | [optional]
 **workspaceId** | **string**|  | [optional]
 **workspaceId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderProductName** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **orderPrice** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **price** | **string**|  | [optional]
 **price2** | [**string[]**](../Model/string.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]
 **priceBetween** | **string**|  | [optional]
 **priceGt** | **string**|  | [optional]
 **priceGte** | **string**|  | [optional]
 **priceLt** | **string**|  | [optional]
 **priceLte** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderItemGet[]**](../Model/OrderItemGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesOrdersItemsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGet[] apiWorkspacesOrdersItemsShipmentItemsGetSubresource($id, $orders, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orders = 'orders_example'; // string | 
$items = 'items_example'; // string | 
$id2 = array('id_example'); // string[] | 
$shipmentId = 'shipmentId_example'; // string | 
$shipmentId2 = array('shipmentId_example'); // string[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$workspaceId = 'workspaceId_example'; // string | 
$workspaceId2 = array('workspaceId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiWorkspacesOrdersItemsShipmentItemsGetSubresource($id, $orders, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->apiWorkspacesOrdersItemsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **orders** | **string**|  |
 **items** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentId** | **string**|  | [optional]
 **shipmentId2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **workspaceId** | **string**|  | [optional]
 **workspaceId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGet[]**](../Model/ShipmentItemGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteOrderItemItem

> deleteOrderItemItem($id)

Removes the OrderItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteOrderItemItem($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->deleteOrderItemItem: ', $e->getMessage(), PHP_EOL;
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


## getOrderItemCollection

> \TrackMage\Client\Swagger\Model\OrderItemGet[] getOrderItemCollection($id, $id2, $productName, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte, $page, $itemsPerPage)

Retrieves the collection of OrderItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$id2 = array('id_example'); // string[] | 
$productName = 'productName_example'; // string | 
$workspaceId = 'workspaceId_example'; // string | 
$workspaceId2 = array('workspaceId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderProductName = 'orderProductName_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$orderPrice = 'orderPrice_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 
$priceBetween = 'priceBetween_example'; // string | 
$priceGt = 'priceGt_example'; // string | 
$priceGte = 'priceGte_example'; // string | 
$priceLt = 'priceLt_example'; // string | 
$priceLte = 'priceLte_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getOrderItemCollection($id, $id2, $productName, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->getOrderItemCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **productName** | **string**|  | [optional]
 **workspaceId** | **string**|  | [optional]
 **workspaceId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderProductName** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **orderPrice** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **price** | **string**|  | [optional]
 **price2** | [**string[]**](../Model/string.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]
 **priceBetween** | **string**|  | [optional]
 **priceGt** | **string**|  | [optional]
 **priceGte** | **string**|  | [optional]
 **priceLt** | **string**|  | [optional]
 **priceLte** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderItemGet[]**](../Model/OrderItemGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderItemItem

> \TrackMage\Client\Swagger\Model\OrderItemGet getOrderItemItem($id)

Retrieves a OrderItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getOrderItemItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->getOrderItemItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\OrderItemGet**](../Model/OrderItemGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postOrderItemCollection

> \TrackMage\Client\Swagger\Model\OrderItemGet postOrderItemCollection($orderItem)

Creates a OrderItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderItem = new \TrackMage\Client\Swagger\Model\OrderItemPost(); // \TrackMage\Client\Swagger\Model\OrderItemPost | The new OrderItem resource

try {
    $result = $apiInstance->postOrderItemCollection($orderItem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->postOrderItemCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderItem** | [**\TrackMage\Client\Swagger\Model\OrderItemPost**](../Model/OrderItemPost.md)| The new OrderItem resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderItemGet**](../Model/OrderItemGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putOrderItemItem

> \TrackMage\Client\Swagger\Model\OrderItemGet putOrderItemItem($id, $orderItem)

Replaces the OrderItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orderItem = new \TrackMage\Client\Swagger\Model\OrderItemPut(); // \TrackMage\Client\Swagger\Model\OrderItemPut | The updated OrderItem resource

try {
    $result = $apiInstance->putOrderItemItem($id, $orderItem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemApi->putOrderItemItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **orderItem** | [**\TrackMage\Client\Swagger\Model\OrderItemPut**](../Model/OrderItemPut.md)| The updated OrderItem resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderItemGet**](../Model/OrderItemGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

