# TrackMage\Client\Swagger\OrderApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiOrdersItemsGetSubresource**](OrderApi.md#apiOrdersItemsGetSubresource) | **GET** /orders/{id}/items | Retrieves the collection of OrderItem resources.
[**apiTeamsWorkspacesOrdersGetSubresource**](OrderApi.md#apiTeamsWorkspacesOrdersGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/orders | Retrieves the collection of Order resources.
[**apiTeamsWorkspacesOrdersItemsGetSubresource**](OrderApi.md#apiTeamsWorkspacesOrdersItemsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/orders/{orders}/items | Retrieves the collection of OrderItem resources.
[**apiWorkspacesOrdersGetSubresource**](OrderApi.md#apiWorkspacesOrdersGetSubresource) | **GET** /workspaces/{id}/orders | Retrieves the collection of Order resources.
[**apiWorkspacesOrdersItemsGetSubresource**](OrderApi.md#apiWorkspacesOrdersItemsGetSubresource) | **GET** /workspaces/{id}/orders/{orders}/items | Retrieves the collection of OrderItem resources.
[**deleteOrderItem**](OrderApi.md#deleteOrderItem) | **DELETE** /orders/{id} | Removes the Order resource.
[**getOrderCollection**](OrderApi.md#getOrderCollection) | **GET** /orders | Retrieves the collection of Order resources.
[**getOrderItem**](OrderApi.md#getOrderItem) | **GET** /orders/{id} | Retrieves a Order resource.
[**migrateOrderCollection**](OrderApi.md#migrateOrderCollection) | **POST** /orders-migrate | Migrate orders from old status to a new one
[**postOrderCollection**](OrderApi.md#postOrderCollection) | **POST** /orders | Creates a Order resource.
[**putOrderItem**](OrderApi.md#putOrderItem) | **PUT** /orders/{id} | Replaces the Order resource.



## apiOrdersItemsGetSubresource

> \TrackMage\Client\Swagger\Model\OrderItemGetOrderItem[] apiOrdersItemsGetSubresource($id, $id2, $productName, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderExternalSyncId, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte)

Retrieves the collection of OrderItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$id2 = array('id_example'); // string[] | 
$productName = 'productName_example'; // string | 
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$workspaceId = 56; // int | 
$workspaceId2 = array(56); // int[] | 
$orderId = 'orderId_example'; // string | 
$orderProductName = 'orderProductName_example'; // string | 
$orderExternalSyncId = 'orderExternalSyncId_example'; // string | 
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

try {
    $result = $apiInstance->apiOrdersItemsGetSubresource($id, $id2, $productName, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderExternalSyncId, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **productName** | **string**|  | [optional]
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **workspaceId** | **int**|  | [optional]
 **workspaceId2** | [**int[]**](../Model/int.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderProductName** | **string**|  | [optional]
 **orderExternalSyncId** | **string**|  | [optional]
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

### Return type

[**\TrackMage\Client\Swagger\Model\OrderItemGetOrderItem[]**](../Model/OrderItemGetOrderItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesOrdersGetSubresource

> \TrackMage\Client\Swagger\Model\OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress[] apiTeamsWorkspacesOrdersGetSubresource($id, $workspaces, $orderId, $orderOrderNumber, $orderExternalSyncId, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id2, $orderNumber, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $status, $status2, $orderType, $orderType2, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte)

Retrieves the collection of Order resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$orderId = 'orderId_example'; // string | 
$orderOrderNumber = 'orderOrderNumber_example'; // string | 
$orderExternalSyncId = 'orderExternalSyncId_example'; // string | 
$orderSubtotal = 'orderSubtotal_example'; // string | 
$orderTotal = 'orderTotal_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$updatedAtBefore = 'updatedAtBefore_example'; // string | 
$updatedAtStrictlyBefore = 'updatedAtStrictlyBefore_example'; // string | 
$updatedAtAfter = 'updatedAtAfter_example'; // string | 
$updatedAtStrictlyAfter = 'updatedAtStrictlyAfter_example'; // string | 
$id2 = array('id_example'); // string[] | 
$orderNumber = 'orderNumber_example'; // string | 
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$orderType = 'orderType_example'; // string | 
$orderType2 = array('orderType_example'); // string[] | 
$subtotal = 'subtotal_example'; // string | 
$subtotal2 = array('subtotal_example'); // string[] | 
$total = 'total_example'; // string | 
$total2 = array('total_example'); // string[] | 
$subtotalBetween = 'subtotalBetween_example'; // string | 
$subtotalGt = 'subtotalGt_example'; // string | 
$subtotalGte = 'subtotalGte_example'; // string | 
$subtotalLt = 'subtotalLt_example'; // string | 
$subtotalLte = 'subtotalLte_example'; // string | 
$totalBetween = 'totalBetween_example'; // string | 
$totalGt = 'totalGt_example'; // string | 
$totalGte = 'totalGte_example'; // string | 
$totalLt = 'totalLt_example'; // string | 
$totalLte = 'totalLte_example'; // string | 

try {
    $result = $apiInstance->apiTeamsWorkspacesOrdersGetSubresource($id, $workspaces, $orderId, $orderOrderNumber, $orderExternalSyncId, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id2, $orderNumber, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $status, $status2, $orderType, $orderType2, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiTeamsWorkspacesOrdersGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **orderId** | **string**|  | [optional]
 **orderOrderNumber** | **string**|  | [optional]
 **orderExternalSyncId** | **string**|  | [optional]
 **orderSubtotal** | **string**|  | [optional]
 **orderTotal** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtStrictlyBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **createdAtStrictlyAfter** | **string**|  | [optional]
 **updatedAtBefore** | **string**|  | [optional]
 **updatedAtStrictlyBefore** | **string**|  | [optional]
 **updatedAtAfter** | **string**|  | [optional]
 **updatedAtStrictlyAfter** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderNumber** | **string**|  | [optional]
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderType** | **string**|  | [optional]
 **orderType2** | [**string[]**](../Model/string.md)|  | [optional]
 **subtotal** | **string**|  | [optional]
 **subtotal2** | [**string[]**](../Model/string.md)|  | [optional]
 **total** | **string**|  | [optional]
 **total2** | [**string[]**](../Model/string.md)|  | [optional]
 **subtotalBetween** | **string**|  | [optional]
 **subtotalGt** | **string**|  | [optional]
 **subtotalGte** | **string**|  | [optional]
 **subtotalLt** | **string**|  | [optional]
 **subtotalLte** | **string**|  | [optional]
 **totalBetween** | **string**|  | [optional]
 **totalGt** | **string**|  | [optional]
 **totalGte** | **string**|  | [optional]
 **totalLt** | **string**|  | [optional]
 **totalLte** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress[]**](../Model/OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesOrdersItemsGetSubresource

> \TrackMage\Client\Swagger\Model\OrderItemGetOrderItem[] apiTeamsWorkspacesOrdersItemsGetSubresource($id, $workspaces, $orders, $id2, $productName, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderExternalSyncId, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte)

Retrieves the collection of OrderItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
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
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$workspaceId = 56; // int | 
$workspaceId2 = array(56); // int[] | 
$orderId = 'orderId_example'; // string | 
$orderProductName = 'orderProductName_example'; // string | 
$orderExternalSyncId = 'orderExternalSyncId_example'; // string | 
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

try {
    $result = $apiInstance->apiTeamsWorkspacesOrdersItemsGetSubresource($id, $workspaces, $orders, $id2, $productName, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderExternalSyncId, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiTeamsWorkspacesOrdersItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
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
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **workspaceId** | **int**|  | [optional]
 **workspaceId2** | [**int[]**](../Model/int.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderProductName** | **string**|  | [optional]
 **orderExternalSyncId** | **string**|  | [optional]
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

### Return type

[**\TrackMage\Client\Swagger\Model\OrderItemGetOrderItem[]**](../Model/OrderItemGetOrderItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesOrdersGetSubresource

> \TrackMage\Client\Swagger\Model\OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress[] apiWorkspacesOrdersGetSubresource($id, $orderId, $orderOrderNumber, $orderExternalSyncId, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id2, $orderNumber, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $status, $status2, $orderType, $orderType2, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte)

Retrieves the collection of Order resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orderId = 'orderId_example'; // string | 
$orderOrderNumber = 'orderOrderNumber_example'; // string | 
$orderExternalSyncId = 'orderExternalSyncId_example'; // string | 
$orderSubtotal = 'orderSubtotal_example'; // string | 
$orderTotal = 'orderTotal_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$updatedAtBefore = 'updatedAtBefore_example'; // string | 
$updatedAtStrictlyBefore = 'updatedAtStrictlyBefore_example'; // string | 
$updatedAtAfter = 'updatedAtAfter_example'; // string | 
$updatedAtStrictlyAfter = 'updatedAtStrictlyAfter_example'; // string | 
$id2 = array('id_example'); // string[] | 
$orderNumber = 'orderNumber_example'; // string | 
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$orderType = 'orderType_example'; // string | 
$orderType2 = array('orderType_example'); // string[] | 
$subtotal = 'subtotal_example'; // string | 
$subtotal2 = array('subtotal_example'); // string[] | 
$total = 'total_example'; // string | 
$total2 = array('total_example'); // string[] | 
$subtotalBetween = 'subtotalBetween_example'; // string | 
$subtotalGt = 'subtotalGt_example'; // string | 
$subtotalGte = 'subtotalGte_example'; // string | 
$subtotalLt = 'subtotalLt_example'; // string | 
$subtotalLte = 'subtotalLte_example'; // string | 
$totalBetween = 'totalBetween_example'; // string | 
$totalGt = 'totalGt_example'; // string | 
$totalGte = 'totalGte_example'; // string | 
$totalLt = 'totalLt_example'; // string | 
$totalLte = 'totalLte_example'; // string | 

try {
    $result = $apiInstance->apiWorkspacesOrdersGetSubresource($id, $orderId, $orderOrderNumber, $orderExternalSyncId, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id2, $orderNumber, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $status, $status2, $orderType, $orderType2, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiWorkspacesOrdersGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **orderId** | **string**|  | [optional]
 **orderOrderNumber** | **string**|  | [optional]
 **orderExternalSyncId** | **string**|  | [optional]
 **orderSubtotal** | **string**|  | [optional]
 **orderTotal** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtStrictlyBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **createdAtStrictlyAfter** | **string**|  | [optional]
 **updatedAtBefore** | **string**|  | [optional]
 **updatedAtStrictlyBefore** | **string**|  | [optional]
 **updatedAtAfter** | **string**|  | [optional]
 **updatedAtStrictlyAfter** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderNumber** | **string**|  | [optional]
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderType** | **string**|  | [optional]
 **orderType2** | [**string[]**](../Model/string.md)|  | [optional]
 **subtotal** | **string**|  | [optional]
 **subtotal2** | [**string[]**](../Model/string.md)|  | [optional]
 **total** | **string**|  | [optional]
 **total2** | [**string[]**](../Model/string.md)|  | [optional]
 **subtotalBetween** | **string**|  | [optional]
 **subtotalGt** | **string**|  | [optional]
 **subtotalGte** | **string**|  | [optional]
 **subtotalLt** | **string**|  | [optional]
 **subtotalLte** | **string**|  | [optional]
 **totalBetween** | **string**|  | [optional]
 **totalGt** | **string**|  | [optional]
 **totalGte** | **string**|  | [optional]
 **totalLt** | **string**|  | [optional]
 **totalLte** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress[]**](../Model/OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesOrdersItemsGetSubresource

> \TrackMage\Client\Swagger\Model\OrderItemGetOrderItem[] apiWorkspacesOrdersItemsGetSubresource($id, $orders, $id2, $productName, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderExternalSyncId, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte)

Retrieves the collection of OrderItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orders = 'orders_example'; // string | 
$id2 = array('id_example'); // string[] | 
$productName = 'productName_example'; // string | 
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$workspaceId = 56; // int | 
$workspaceId2 = array(56); // int[] | 
$orderId = 'orderId_example'; // string | 
$orderProductName = 'orderProductName_example'; // string | 
$orderExternalSyncId = 'orderExternalSyncId_example'; // string | 
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

try {
    $result = $apiInstance->apiWorkspacesOrdersItemsGetSubresource($id, $orders, $id2, $productName, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderProductName, $orderExternalSyncId, $orderQty, $orderPrice, $qty, $qty2, $price, $price2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $priceBetween, $priceGt, $priceGte, $priceLt, $priceLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiWorkspacesOrdersItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
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
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **workspaceId** | **int**|  | [optional]
 **workspaceId2** | [**int[]**](../Model/int.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderProductName** | **string**|  | [optional]
 **orderExternalSyncId** | **string**|  | [optional]
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

### Return type

[**\TrackMage\Client\Swagger\Model\OrderItemGetOrderItem[]**](../Model/OrderItemGetOrderItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteOrderItem

> deleteOrderItem($id)

Removes the Order resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteOrderItem($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteOrderItem: ', $e->getMessage(), PHP_EOL;
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


## getOrderCollection

> \TrackMage\Client\Swagger\Model\OrderGetOrdersGetOrderMetaGetOrderStatusForOrderGetAddress[] getOrderCollection($orderId, $orderOrderNumber, $orderExternalSyncId, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id, $id2, $orderNumber, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $status, $status2, $orderType, $orderType2, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte, $page, $itemsPerPage)

Retrieves the collection of Order resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 'orderId_example'; // string | 
$orderOrderNumber = 'orderOrderNumber_example'; // string | 
$orderExternalSyncId = 'orderExternalSyncId_example'; // string | 
$orderSubtotal = 'orderSubtotal_example'; // string | 
$orderTotal = 'orderTotal_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$updatedAtBefore = 'updatedAtBefore_example'; // string | 
$updatedAtStrictlyBefore = 'updatedAtStrictlyBefore_example'; // string | 
$updatedAtAfter = 'updatedAtAfter_example'; // string | 
$updatedAtStrictlyAfter = 'updatedAtStrictlyAfter_example'; // string | 
$id = 'id_example'; // string | 
$id2 = array('id_example'); // string[] | 
$orderNumber = 'orderNumber_example'; // string | 
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$orderType = 'orderType_example'; // string | 
$orderType2 = array('orderType_example'); // string[] | 
$subtotal = 'subtotal_example'; // string | 
$subtotal2 = array('subtotal_example'); // string[] | 
$total = 'total_example'; // string | 
$total2 = array('total_example'); // string[] | 
$subtotalBetween = 'subtotalBetween_example'; // string | 
$subtotalGt = 'subtotalGt_example'; // string | 
$subtotalGte = 'subtotalGte_example'; // string | 
$subtotalLt = 'subtotalLt_example'; // string | 
$subtotalLte = 'subtotalLte_example'; // string | 
$totalBetween = 'totalBetween_example'; // string | 
$totalGt = 'totalGt_example'; // string | 
$totalGte = 'totalGte_example'; // string | 
$totalLt = 'totalLt_example'; // string | 
$totalLte = 'totalLte_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getOrderCollection($orderId, $orderOrderNumber, $orderExternalSyncId, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id, $id2, $orderNumber, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $status, $status2, $orderType, $orderType2, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **orderOrderNumber** | **string**|  | [optional]
 **orderExternalSyncId** | **string**|  | [optional]
 **orderSubtotal** | **string**|  | [optional]
 **orderTotal** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtStrictlyBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **createdAtStrictlyAfter** | **string**|  | [optional]
 **updatedAtBefore** | **string**|  | [optional]
 **updatedAtStrictlyBefore** | **string**|  | [optional]
 **updatedAtAfter** | **string**|  | [optional]
 **updatedAtStrictlyAfter** | **string**|  | [optional]
 **id** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderNumber** | **string**|  | [optional]
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderType** | **string**|  | [optional]
 **orderType2** | [**string[]**](../Model/string.md)|  | [optional]
 **subtotal** | **string**|  | [optional]
 **subtotal2** | [**string[]**](../Model/string.md)|  | [optional]
 **total** | **string**|  | [optional]
 **total2** | [**string[]**](../Model/string.md)|  | [optional]
 **subtotalBetween** | **string**|  | [optional]
 **subtotalGt** | **string**|  | [optional]
 **subtotalGte** | **string**|  | [optional]
 **subtotalLt** | **string**|  | [optional]
 **subtotalLte** | **string**|  | [optional]
 **totalBetween** | **string**|  | [optional]
 **totalGt** | **string**|  | [optional]
 **totalGte** | **string**|  | [optional]
 **totalLt** | **string**|  | [optional]
 **totalLte** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderGetOrdersGetOrderMetaGetOrderStatusForOrderGetAddress[]**](../Model/OrderGetOrdersGetOrderMetaGetOrderStatusForOrderGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderItem

> \TrackMage\Client\Swagger\Model\OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress getOrderItem($id)

Retrieves a Order resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getOrderItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress**](../Model/OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## migrateOrderCollection

> \TrackMage\Client\Swagger\Model\Order159339841dc29518f4db0fcf51e5430dGetMigrateOrdersResponse migrateOrderCollection($order)

Migrate orders from old status to a new one

- Migrate orders from old status to a new one within given workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \TrackMage\Client\Swagger\Model\Order9f235eff7e914c651ace3fcc3d169fd6SetMigrateOrdersRequest(); // \TrackMage\Client\Swagger\Model\Order9f235eff7e914c651ace3fcc3d169fd6SetMigrateOrdersRequest | The new Order resource

try {
    $result = $apiInstance->migrateOrderCollection($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->migrateOrderCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\TrackMage\Client\Swagger\Model\Order9f235eff7e914c651ace3fcc3d169fd6SetMigrateOrdersRequest**](../Model/Order9f235eff7e914c651ace3fcc3d169fd6SetMigrateOrdersRequest.md)| The new Order resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\Order159339841dc29518f4db0fcf51e5430dGetMigrateOrdersResponse**](../Model/Order159339841dc29518f4db0fcf51e5430dGetMigrateOrdersResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postOrderCollection

> \TrackMage\Client\Swagger\Model\OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress postOrderCollection($order)

Creates a Order resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \TrackMage\Client\Swagger\Model\OrderPostOrderSetOrderMetaSetOrderStatusForOrderSetAddress(); // \TrackMage\Client\Swagger\Model\OrderPostOrderSetOrderMetaSetOrderStatusForOrderSetAddress | The new Order resource

try {
    $result = $apiInstance->postOrderCollection($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postOrderCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\TrackMage\Client\Swagger\Model\OrderPostOrderSetOrderMetaSetOrderStatusForOrderSetAddress**](../Model/OrderPostOrderSetOrderMetaSetOrderStatusForOrderSetAddress.md)| The new Order resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress**](../Model/OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putOrderItem

> \TrackMage\Client\Swagger\Model\OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress putOrderItem($id, $order)

Replaces the Order resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$order = new \TrackMage\Client\Swagger\Model\OrderPutOrderSetOrderMetaSetOrderStatusForOrderSetAddress(); // \TrackMage\Client\Swagger\Model\OrderPutOrderSetOrderMetaSetOrderStatusForOrderSetAddress | The updated Order resource

try {
    $result = $apiInstance->putOrderItem($id, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->putOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **order** | [**\TrackMage\Client\Swagger\Model\OrderPutOrderSetOrderMetaSetOrderStatusForOrderSetAddress**](../Model/OrderPutOrderSetOrderMetaSetOrderStatusForOrderSetAddress.md)| The updated Order resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress**](../Model/OrderGetOrderGetOrderMetaGetOrderStatusForOrderGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

