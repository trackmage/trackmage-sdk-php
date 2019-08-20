# TrackMage\Client\Swagger\ShipmentItemApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiOrderItemsShipmentItemsGetSubresource**](ShipmentItemApi.md#apiOrderItemsShipmentItemsGetSubresource) | **GET** /order_items/{id}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**apiOrdersItemsShipmentItemsGetSubresource**](ShipmentItemApi.md#apiOrdersItemsShipmentItemsGetSubresource) | **GET** /orders/{id}/items/{items}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**apiShipmentsShipmentItemsGetSubresource**](ShipmentItemApi.md#apiShipmentsShipmentItemsGetSubresource) | **GET** /shipments/{id}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource**](ShipmentItemApi.md#apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/orders/{orders}/items/{items}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource**](ShipmentItemApi.md#apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/shipments/{shipments}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**apiWorkspacesOrdersItemsShipmentItemsGetSubresource**](ShipmentItemApi.md#apiWorkspacesOrdersItemsShipmentItemsGetSubresource) | **GET** /workspaces/{id}/orders/{orders}/items/{items}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**apiWorkspacesShipmentsShipmentItemsGetSubresource**](ShipmentItemApi.md#apiWorkspacesShipmentsShipmentItemsGetSubresource) | **GET** /workspaces/{id}/shipments/{shipments}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**deleteShipmentItemItem**](ShipmentItemApi.md#deleteShipmentItemItem) | **DELETE** /shipment_items/{id} | Removes the ShipmentItem resource.
[**getShipmentItemCollection**](ShipmentItemApi.md#getShipmentItemCollection) | **GET** /shipment_items | Retrieves the collection of ShipmentItem resources.
[**getShipmentItemItem**](ShipmentItemApi.md#getShipmentItemItem) | **GET** /shipment_items/{id} | Retrieves a ShipmentItem resource.
[**postShipmentItemCollection**](ShipmentItemApi.md#postShipmentItemCollection) | **POST** /shipment_items | Creates a ShipmentItem resource.
[**putShipmentItemItem**](ShipmentItemApi.md#putShipmentItemItem) | **PUT** /shipment_items/{id} | Replaces the ShipmentItem resource.



## apiOrderItemsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[] apiOrderItemsShipmentItemsGetSubresource($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$id2 = array('id_example'); // string[] | 
$shipmentId = 56; // int | 
$shipmentId2 = array(56); // int[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 

try {
    $result = $apiInstance->apiOrderItemsShipmentItemsGetSubresource($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->apiOrderItemsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentId** | **int**|  | [optional]
 **shipmentId2** | [**int[]**](../Model/int.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[]**](../Model/ShipmentItemGetShipmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiOrdersItemsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[] apiOrdersItemsShipmentItemsGetSubresource($id, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$items = 'items_example'; // string | 
$id2 = array('id_example'); // string[] | 
$shipmentId = 56; // int | 
$shipmentId2 = array(56); // int[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 

try {
    $result = $apiInstance->apiOrdersItemsShipmentItemsGetSubresource($id, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->apiOrdersItemsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **items** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentId** | **int**|  | [optional]
 **shipmentId2** | [**int[]**](../Model/int.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[]**](../Model/ShipmentItemGetShipmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiShipmentsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[] apiShipmentsShipmentItemsGetSubresource($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$id2 = array('id_example'); // string[] | 
$shipmentId = 56; // int | 
$shipmentId2 = array(56); // int[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 

try {
    $result = $apiInstance->apiShipmentsShipmentItemsGetSubresource($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->apiShipmentsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentId** | **int**|  | [optional]
 **shipmentId2** | [**int[]**](../Model/int.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[]**](../Model/ShipmentItemGetShipmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[] apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource($id, $workspaces, $orders, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
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
$shipmentId = 56; // int | 
$shipmentId2 = array(56); // int[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 

try {
    $result = $apiInstance->apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource($id, $workspaces, $orders, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->apiTeamsWorkspacesOrdersItemsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
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
 **shipmentId** | **int**|  | [optional]
 **shipmentId2** | [**int[]**](../Model/int.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[]**](../Model/ShipmentItemGetShipmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[] apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource($id, $workspaces, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$shipments = 'shipments_example'; // string | 
$id2 = array('id_example'); // string[] | 
$shipmentId = 56; // int | 
$shipmentId2 = array(56); // int[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 

try {
    $result = $apiInstance->apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource($id, $workspaces, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **shipments** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentId** | **int**|  | [optional]
 **shipmentId2** | [**int[]**](../Model/int.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[]**](../Model/ShipmentItemGetShipmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesOrdersItemsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[] apiWorkspacesOrdersItemsShipmentItemsGetSubresource($id, $orders, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orders = 'orders_example'; // string | 
$items = 'items_example'; // string | 
$id2 = array('id_example'); // string[] | 
$shipmentId = 56; // int | 
$shipmentId2 = array(56); // int[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 

try {
    $result = $apiInstance->apiWorkspacesOrdersItemsShipmentItemsGetSubresource($id, $orders, $items, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->apiWorkspacesOrdersItemsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
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
 **shipmentId** | **int**|  | [optional]
 **shipmentId2** | [**int[]**](../Model/int.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[]**](../Model/ShipmentItemGetShipmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesShipmentsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[] apiWorkspacesShipmentsShipmentItemsGetSubresource($id, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipments = 'shipments_example'; // string | 
$id2 = array('id_example'); // string[] | 
$shipmentId = 56; // int | 
$shipmentId2 = array(56); // int[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderQty = 'orderQty_example'; // string | 
$qty = 56; // int | 
$qty2 = array(56); // int[] | 
$qtyBetween = 'qtyBetween_example'; // string | 
$qtyGt = 'qtyGt_example'; // string | 
$qtyGte = 'qtyGte_example'; // string | 
$qtyLt = 'qtyLt_example'; // string | 
$qtyLte = 'qtyLte_example'; // string | 

try {
    $result = $apiInstance->apiWorkspacesShipmentsShipmentItemsGetSubresource($id, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->apiWorkspacesShipmentsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipments** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentId** | **int**|  | [optional]
 **shipmentId2** | [**int[]**](../Model/int.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderQty** | **string**|  | [optional]
 **qty** | **int**|  | [optional]
 **qty2** | [**int[]**](../Model/int.md)|  | [optional]
 **qtyBetween** | **string**|  | [optional]
 **qtyGt** | **string**|  | [optional]
 **qtyGte** | **string**|  | [optional]
 **qtyLt** | **string**|  | [optional]
 **qtyLte** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[]**](../Model/ShipmentItemGetShipmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteShipmentItemItem

> deleteShipmentItemItem($id)

Removes the ShipmentItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteShipmentItemItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->deleteShipmentItemItem: ', $e->getMessage(), PHP_EOL;
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


## getShipmentItemCollection

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[] getShipmentItemCollection($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$id2 = array('id_example'); // string[] | 
$shipmentId = 56; // int | 
$shipmentId2 = array(56); // int[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
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
    $result = $apiInstance->getShipmentItemCollection($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->getShipmentItemCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentId** | **int**|  | [optional]
 **shipmentId2** | [**int[]**](../Model/int.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
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

[**\TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[]**](../Model/ShipmentItemGetShipmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getShipmentItemItem

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem getShipmentItemItem($id)

Retrieves a ShipmentItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getShipmentItemItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->getShipmentItemItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem**](../Model/ShipmentItemGetShipmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postShipmentItemCollection

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem postShipmentItemCollection($shipmentItem)

Creates a ShipmentItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentItem = new \TrackMage\Client\Swagger\Model\ShipmentItemPostShipmentItem(); // \TrackMage\Client\Swagger\Model\ShipmentItemPostShipmentItem | The new ShipmentItem resource

try {
    $result = $apiInstance->postShipmentItemCollection($shipmentItem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->postShipmentItemCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipmentItem** | [**\TrackMage\Client\Swagger\Model\ShipmentItemPostShipmentItem**](../Model/ShipmentItemPostShipmentItem.md)| The new ShipmentItem resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem**](../Model/ShipmentItemGetShipmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putShipmentItemItem

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem putShipmentItemItem($id, $shipmentItem)

Replaces the ShipmentItem resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipmentItem = new \TrackMage\Client\Swagger\Model\ShipmentItemPutShipmentItem(); // \TrackMage\Client\Swagger\Model\ShipmentItemPutShipmentItem | The updated ShipmentItem resource

try {
    $result = $apiInstance->putShipmentItemItem($id, $shipmentItem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentItemApi->putShipmentItemItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipmentItem** | [**\TrackMage\Client\Swagger\Model\ShipmentItemPutShipmentItem**](../Model/ShipmentItemPutShipmentItem.md)| The updated ShipmentItem resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem**](../Model/ShipmentItemGetShipmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

