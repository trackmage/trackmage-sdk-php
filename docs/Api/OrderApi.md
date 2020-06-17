# TrackMage\Client\Swagger\OrderApi

All URIs are relative to *https://api.l.trackmage.com*

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
[**postOrderCollection**](OrderApi.md#postOrderCollection) | **POST** /orders | Creates a Order resource.
[**putOrderItem**](OrderApi.md#putOrderItem) | **PUT** /orders/{id} | Replaces the Order resource.



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


$apiInstance = new TrackMage\Client\Swagger\Api\OrderApi(
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


## apiTeamsWorkspacesOrdersGetSubresource

> \TrackMage\Client\Swagger\Model\OrderGet[] apiTeamsWorkspacesOrdersGetSubresource($id, $workspaces, $orderId, $orderOrderNumber, $orderEmail, $orderPhoneNumber, $orderOrderStatusCode, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $orderShippingAddressAddressLine1, $orderShippingAddressAddressLine2, $orderShippingAddressCity, $orderShippingAddressCompany, $orderShippingAddressCountryIso2, $orderShippingAddressFirstName, $orderShippingAddressLastName, $orderShippingAddressPostcode, $orderShippingAddressState, $orderBillingAddressAddressLine1, $orderBillingAddressAddressLine2, $orderBillingAddressCity, $orderBillingAddressCompany, $orderBillingAddressCountryIso2, $orderBillingAddressFirstName, $orderBillingAddressLastName, $orderBillingAddressPostcode, $orderBillingAddressState, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id2, $orderNumber, $email, $phoneNumber, $orderStatusCode, $orderStatusCode2, $orderType, $orderType2, $shippingAddressAddressLine1, $shippingAddressAddressLine2, $shippingAddressCity, $shippingAddressCompany, $shippingAddressCountryIso2, $shippingAddressCountryIso3, $shippingAddressFirstName, $shippingAddressLastName, $shippingAddressPostcode, $shippingAddressState, $billingAddressAddressLine1, $billingAddressAddressLine2, $billingAddressCity, $billingAddressCompany, $billingAddressCountryIso2, $billingAddressCountryIso3, $billingAddressFirstName, $billingAddressLastName, $billingAddressPostcode, $billingAddressState, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte, $page, $itemsPerPage)

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
$orderEmail = 'orderEmail_example'; // string | 
$orderPhoneNumber = 'orderPhoneNumber_example'; // string | 
$orderOrderStatusCode = 'orderOrderStatusCode_example'; // string | 
$orderSubtotal = 'orderSubtotal_example'; // string | 
$orderTotal = 'orderTotal_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$orderShippingAddressAddressLine1 = 'orderShippingAddressAddressLine1_example'; // string | 
$orderShippingAddressAddressLine2 = 'orderShippingAddressAddressLine2_example'; // string | 
$orderShippingAddressCity = 'orderShippingAddressCity_example'; // string | 
$orderShippingAddressCompany = 'orderShippingAddressCompany_example'; // string | 
$orderShippingAddressCountryIso2 = 'orderShippingAddressCountryIso2_example'; // string | 
$orderShippingAddressFirstName = 'orderShippingAddressFirstName_example'; // string | 
$orderShippingAddressLastName = 'orderShippingAddressLastName_example'; // string | 
$orderShippingAddressPostcode = 'orderShippingAddressPostcode_example'; // string | 
$orderShippingAddressState = 'orderShippingAddressState_example'; // string | 
$orderBillingAddressAddressLine1 = 'orderBillingAddressAddressLine1_example'; // string | 
$orderBillingAddressAddressLine2 = 'orderBillingAddressAddressLine2_example'; // string | 
$orderBillingAddressCity = 'orderBillingAddressCity_example'; // string | 
$orderBillingAddressCompany = 'orderBillingAddressCompany_example'; // string | 
$orderBillingAddressCountryIso2 = 'orderBillingAddressCountryIso2_example'; // string | 
$orderBillingAddressFirstName = 'orderBillingAddressFirstName_example'; // string | 
$orderBillingAddressLastName = 'orderBillingAddressLastName_example'; // string | 
$orderBillingAddressPostcode = 'orderBillingAddressPostcode_example'; // string | 
$orderBillingAddressState = 'orderBillingAddressState_example'; // string | 
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
$email = 'email_example'; // string | 
$phoneNumber = 'phoneNumber_example'; // string | 
$orderStatusCode = 'orderStatusCode_example'; // string | 
$orderStatusCode2 = array('orderStatusCode_example'); // string[] | 
$orderType = 'orderType_example'; // string | 
$orderType2 = array('orderType_example'); // string[] | 
$shippingAddressAddressLine1 = 'shippingAddressAddressLine1_example'; // string | 
$shippingAddressAddressLine2 = 'shippingAddressAddressLine2_example'; // string | 
$shippingAddressCity = 'shippingAddressCity_example'; // string | 
$shippingAddressCompany = 'shippingAddressCompany_example'; // string | 
$shippingAddressCountryIso2 = 'shippingAddressCountryIso2_example'; // string | 
$shippingAddressCountryIso3 = array('shippingAddressCountryIso2_example'); // string[] | 
$shippingAddressFirstName = 'shippingAddressFirstName_example'; // string | 
$shippingAddressLastName = 'shippingAddressLastName_example'; // string | 
$shippingAddressPostcode = 'shippingAddressPostcode_example'; // string | 
$shippingAddressState = 'shippingAddressState_example'; // string | 
$billingAddressAddressLine1 = 'billingAddressAddressLine1_example'; // string | 
$billingAddressAddressLine2 = 'billingAddressAddressLine2_example'; // string | 
$billingAddressCity = 'billingAddressCity_example'; // string | 
$billingAddressCompany = 'billingAddressCompany_example'; // string | 
$billingAddressCountryIso2 = 'billingAddressCountryIso2_example'; // string | 
$billingAddressCountryIso3 = array('billingAddressCountryIso2_example'); // string[] | 
$billingAddressFirstName = 'billingAddressFirstName_example'; // string | 
$billingAddressLastName = 'billingAddressLastName_example'; // string | 
$billingAddressPostcode = 'billingAddressPostcode_example'; // string | 
$billingAddressState = 'billingAddressState_example'; // string | 
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
    $result = $apiInstance->apiTeamsWorkspacesOrdersGetSubresource($id, $workspaces, $orderId, $orderOrderNumber, $orderEmail, $orderPhoneNumber, $orderOrderStatusCode, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $orderShippingAddressAddressLine1, $orderShippingAddressAddressLine2, $orderShippingAddressCity, $orderShippingAddressCompany, $orderShippingAddressCountryIso2, $orderShippingAddressFirstName, $orderShippingAddressLastName, $orderShippingAddressPostcode, $orderShippingAddressState, $orderBillingAddressAddressLine1, $orderBillingAddressAddressLine2, $orderBillingAddressCity, $orderBillingAddressCompany, $orderBillingAddressCountryIso2, $orderBillingAddressFirstName, $orderBillingAddressLastName, $orderBillingAddressPostcode, $orderBillingAddressState, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id2, $orderNumber, $email, $phoneNumber, $orderStatusCode, $orderStatusCode2, $orderType, $orderType2, $shippingAddressAddressLine1, $shippingAddressAddressLine2, $shippingAddressCity, $shippingAddressCompany, $shippingAddressCountryIso2, $shippingAddressCountryIso3, $shippingAddressFirstName, $shippingAddressLastName, $shippingAddressPostcode, $shippingAddressState, $billingAddressAddressLine1, $billingAddressAddressLine2, $billingAddressCity, $billingAddressCompany, $billingAddressCountryIso2, $billingAddressCountryIso3, $billingAddressFirstName, $billingAddressLastName, $billingAddressPostcode, $billingAddressState, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte, $page, $itemsPerPage);
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
 **orderEmail** | **string**|  | [optional]
 **orderPhoneNumber** | **string**|  | [optional]
 **orderOrderStatusCode** | **string**|  | [optional]
 **orderSubtotal** | **string**|  | [optional]
 **orderTotal** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **orderShippingAddressAddressLine1** | **string**|  | [optional]
 **orderShippingAddressAddressLine2** | **string**|  | [optional]
 **orderShippingAddressCity** | **string**|  | [optional]
 **orderShippingAddressCompany** | **string**|  | [optional]
 **orderShippingAddressCountryIso2** | **string**|  | [optional]
 **orderShippingAddressFirstName** | **string**|  | [optional]
 **orderShippingAddressLastName** | **string**|  | [optional]
 **orderShippingAddressPostcode** | **string**|  | [optional]
 **orderShippingAddressState** | **string**|  | [optional]
 **orderBillingAddressAddressLine1** | **string**|  | [optional]
 **orderBillingAddressAddressLine2** | **string**|  | [optional]
 **orderBillingAddressCity** | **string**|  | [optional]
 **orderBillingAddressCompany** | **string**|  | [optional]
 **orderBillingAddressCountryIso2** | **string**|  | [optional]
 **orderBillingAddressFirstName** | **string**|  | [optional]
 **orderBillingAddressLastName** | **string**|  | [optional]
 **orderBillingAddressPostcode** | **string**|  | [optional]
 **orderBillingAddressState** | **string**|  | [optional]
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
 **email** | **string**|  | [optional]
 **phoneNumber** | **string**|  | [optional]
 **orderStatusCode** | **string**|  | [optional]
 **orderStatusCode2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderType** | **string**|  | [optional]
 **orderType2** | [**string[]**](../Model/string.md)|  | [optional]
 **shippingAddressAddressLine1** | **string**|  | [optional]
 **shippingAddressAddressLine2** | **string**|  | [optional]
 **shippingAddressCity** | **string**|  | [optional]
 **shippingAddressCompany** | **string**|  | [optional]
 **shippingAddressCountryIso2** | **string**|  | [optional]
 **shippingAddressCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **shippingAddressFirstName** | **string**|  | [optional]
 **shippingAddressLastName** | **string**|  | [optional]
 **shippingAddressPostcode** | **string**|  | [optional]
 **shippingAddressState** | **string**|  | [optional]
 **billingAddressAddressLine1** | **string**|  | [optional]
 **billingAddressAddressLine2** | **string**|  | [optional]
 **billingAddressCity** | **string**|  | [optional]
 **billingAddressCompany** | **string**|  | [optional]
 **billingAddressCountryIso2** | **string**|  | [optional]
 **billingAddressCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **billingAddressFirstName** | **string**|  | [optional]
 **billingAddressLastName** | **string**|  | [optional]
 **billingAddressPostcode** | **string**|  | [optional]
 **billingAddressState** | **string**|  | [optional]
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

[**\TrackMage\Client\Swagger\Model\OrderGet[]**](../Model/OrderGet.md)

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


## apiWorkspacesOrdersGetSubresource

> \TrackMage\Client\Swagger\Model\OrderGet[] apiWorkspacesOrdersGetSubresource($id, $orderId, $orderOrderNumber, $orderEmail, $orderPhoneNumber, $orderOrderStatusCode, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $orderShippingAddressAddressLine1, $orderShippingAddressAddressLine2, $orderShippingAddressCity, $orderShippingAddressCompany, $orderShippingAddressCountryIso2, $orderShippingAddressFirstName, $orderShippingAddressLastName, $orderShippingAddressPostcode, $orderShippingAddressState, $orderBillingAddressAddressLine1, $orderBillingAddressAddressLine2, $orderBillingAddressCity, $orderBillingAddressCompany, $orderBillingAddressCountryIso2, $orderBillingAddressFirstName, $orderBillingAddressLastName, $orderBillingAddressPostcode, $orderBillingAddressState, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id2, $orderNumber, $email, $phoneNumber, $orderStatusCode, $orderStatusCode2, $orderType, $orderType2, $shippingAddressAddressLine1, $shippingAddressAddressLine2, $shippingAddressCity, $shippingAddressCompany, $shippingAddressCountryIso2, $shippingAddressCountryIso3, $shippingAddressFirstName, $shippingAddressLastName, $shippingAddressPostcode, $shippingAddressState, $billingAddressAddressLine1, $billingAddressAddressLine2, $billingAddressCity, $billingAddressCompany, $billingAddressCountryIso2, $billingAddressCountryIso3, $billingAddressFirstName, $billingAddressLastName, $billingAddressPostcode, $billingAddressState, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte, $page, $itemsPerPage)

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
$orderEmail = 'orderEmail_example'; // string | 
$orderPhoneNumber = 'orderPhoneNumber_example'; // string | 
$orderOrderStatusCode = 'orderOrderStatusCode_example'; // string | 
$orderSubtotal = 'orderSubtotal_example'; // string | 
$orderTotal = 'orderTotal_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$orderShippingAddressAddressLine1 = 'orderShippingAddressAddressLine1_example'; // string | 
$orderShippingAddressAddressLine2 = 'orderShippingAddressAddressLine2_example'; // string | 
$orderShippingAddressCity = 'orderShippingAddressCity_example'; // string | 
$orderShippingAddressCompany = 'orderShippingAddressCompany_example'; // string | 
$orderShippingAddressCountryIso2 = 'orderShippingAddressCountryIso2_example'; // string | 
$orderShippingAddressFirstName = 'orderShippingAddressFirstName_example'; // string | 
$orderShippingAddressLastName = 'orderShippingAddressLastName_example'; // string | 
$orderShippingAddressPostcode = 'orderShippingAddressPostcode_example'; // string | 
$orderShippingAddressState = 'orderShippingAddressState_example'; // string | 
$orderBillingAddressAddressLine1 = 'orderBillingAddressAddressLine1_example'; // string | 
$orderBillingAddressAddressLine2 = 'orderBillingAddressAddressLine2_example'; // string | 
$orderBillingAddressCity = 'orderBillingAddressCity_example'; // string | 
$orderBillingAddressCompany = 'orderBillingAddressCompany_example'; // string | 
$orderBillingAddressCountryIso2 = 'orderBillingAddressCountryIso2_example'; // string | 
$orderBillingAddressFirstName = 'orderBillingAddressFirstName_example'; // string | 
$orderBillingAddressLastName = 'orderBillingAddressLastName_example'; // string | 
$orderBillingAddressPostcode = 'orderBillingAddressPostcode_example'; // string | 
$orderBillingAddressState = 'orderBillingAddressState_example'; // string | 
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
$email = 'email_example'; // string | 
$phoneNumber = 'phoneNumber_example'; // string | 
$orderStatusCode = 'orderStatusCode_example'; // string | 
$orderStatusCode2 = array('orderStatusCode_example'); // string[] | 
$orderType = 'orderType_example'; // string | 
$orderType2 = array('orderType_example'); // string[] | 
$shippingAddressAddressLine1 = 'shippingAddressAddressLine1_example'; // string | 
$shippingAddressAddressLine2 = 'shippingAddressAddressLine2_example'; // string | 
$shippingAddressCity = 'shippingAddressCity_example'; // string | 
$shippingAddressCompany = 'shippingAddressCompany_example'; // string | 
$shippingAddressCountryIso2 = 'shippingAddressCountryIso2_example'; // string | 
$shippingAddressCountryIso3 = array('shippingAddressCountryIso2_example'); // string[] | 
$shippingAddressFirstName = 'shippingAddressFirstName_example'; // string | 
$shippingAddressLastName = 'shippingAddressLastName_example'; // string | 
$shippingAddressPostcode = 'shippingAddressPostcode_example'; // string | 
$shippingAddressState = 'shippingAddressState_example'; // string | 
$billingAddressAddressLine1 = 'billingAddressAddressLine1_example'; // string | 
$billingAddressAddressLine2 = 'billingAddressAddressLine2_example'; // string | 
$billingAddressCity = 'billingAddressCity_example'; // string | 
$billingAddressCompany = 'billingAddressCompany_example'; // string | 
$billingAddressCountryIso2 = 'billingAddressCountryIso2_example'; // string | 
$billingAddressCountryIso3 = array('billingAddressCountryIso2_example'); // string[] | 
$billingAddressFirstName = 'billingAddressFirstName_example'; // string | 
$billingAddressLastName = 'billingAddressLastName_example'; // string | 
$billingAddressPostcode = 'billingAddressPostcode_example'; // string | 
$billingAddressState = 'billingAddressState_example'; // string | 
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
    $result = $apiInstance->apiWorkspacesOrdersGetSubresource($id, $orderId, $orderOrderNumber, $orderEmail, $orderPhoneNumber, $orderOrderStatusCode, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $orderShippingAddressAddressLine1, $orderShippingAddressAddressLine2, $orderShippingAddressCity, $orderShippingAddressCompany, $orderShippingAddressCountryIso2, $orderShippingAddressFirstName, $orderShippingAddressLastName, $orderShippingAddressPostcode, $orderShippingAddressState, $orderBillingAddressAddressLine1, $orderBillingAddressAddressLine2, $orderBillingAddressCity, $orderBillingAddressCompany, $orderBillingAddressCountryIso2, $orderBillingAddressFirstName, $orderBillingAddressLastName, $orderBillingAddressPostcode, $orderBillingAddressState, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id2, $orderNumber, $email, $phoneNumber, $orderStatusCode, $orderStatusCode2, $orderType, $orderType2, $shippingAddressAddressLine1, $shippingAddressAddressLine2, $shippingAddressCity, $shippingAddressCompany, $shippingAddressCountryIso2, $shippingAddressCountryIso3, $shippingAddressFirstName, $shippingAddressLastName, $shippingAddressPostcode, $shippingAddressState, $billingAddressAddressLine1, $billingAddressAddressLine2, $billingAddressCity, $billingAddressCompany, $billingAddressCountryIso2, $billingAddressCountryIso3, $billingAddressFirstName, $billingAddressLastName, $billingAddressPostcode, $billingAddressState, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte, $page, $itemsPerPage);
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
 **orderEmail** | **string**|  | [optional]
 **orderPhoneNumber** | **string**|  | [optional]
 **orderOrderStatusCode** | **string**|  | [optional]
 **orderSubtotal** | **string**|  | [optional]
 **orderTotal** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **orderShippingAddressAddressLine1** | **string**|  | [optional]
 **orderShippingAddressAddressLine2** | **string**|  | [optional]
 **orderShippingAddressCity** | **string**|  | [optional]
 **orderShippingAddressCompany** | **string**|  | [optional]
 **orderShippingAddressCountryIso2** | **string**|  | [optional]
 **orderShippingAddressFirstName** | **string**|  | [optional]
 **orderShippingAddressLastName** | **string**|  | [optional]
 **orderShippingAddressPostcode** | **string**|  | [optional]
 **orderShippingAddressState** | **string**|  | [optional]
 **orderBillingAddressAddressLine1** | **string**|  | [optional]
 **orderBillingAddressAddressLine2** | **string**|  | [optional]
 **orderBillingAddressCity** | **string**|  | [optional]
 **orderBillingAddressCompany** | **string**|  | [optional]
 **orderBillingAddressCountryIso2** | **string**|  | [optional]
 **orderBillingAddressFirstName** | **string**|  | [optional]
 **orderBillingAddressLastName** | **string**|  | [optional]
 **orderBillingAddressPostcode** | **string**|  | [optional]
 **orderBillingAddressState** | **string**|  | [optional]
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
 **email** | **string**|  | [optional]
 **phoneNumber** | **string**|  | [optional]
 **orderStatusCode** | **string**|  | [optional]
 **orderStatusCode2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderType** | **string**|  | [optional]
 **orderType2** | [**string[]**](../Model/string.md)|  | [optional]
 **shippingAddressAddressLine1** | **string**|  | [optional]
 **shippingAddressAddressLine2** | **string**|  | [optional]
 **shippingAddressCity** | **string**|  | [optional]
 **shippingAddressCompany** | **string**|  | [optional]
 **shippingAddressCountryIso2** | **string**|  | [optional]
 **shippingAddressCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **shippingAddressFirstName** | **string**|  | [optional]
 **shippingAddressLastName** | **string**|  | [optional]
 **shippingAddressPostcode** | **string**|  | [optional]
 **shippingAddressState** | **string**|  | [optional]
 **billingAddressAddressLine1** | **string**|  | [optional]
 **billingAddressAddressLine2** | **string**|  | [optional]
 **billingAddressCity** | **string**|  | [optional]
 **billingAddressCompany** | **string**|  | [optional]
 **billingAddressCountryIso2** | **string**|  | [optional]
 **billingAddressCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **billingAddressFirstName** | **string**|  | [optional]
 **billingAddressLastName** | **string**|  | [optional]
 **billingAddressPostcode** | **string**|  | [optional]
 **billingAddressState** | **string**|  | [optional]
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

[**\TrackMage\Client\Swagger\Model\OrderGet[]**](../Model/OrderGet.md)

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

> \TrackMage\Client\Swagger\Model\OrderGetc[] getOrderCollection($orderId, $orderOrderNumber, $orderEmail, $orderPhoneNumber, $orderOrderStatusCode, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $orderShippingAddressAddressLine1, $orderShippingAddressAddressLine2, $orderShippingAddressCity, $orderShippingAddressCompany, $orderShippingAddressCountryIso2, $orderShippingAddressFirstName, $orderShippingAddressLastName, $orderShippingAddressPostcode, $orderShippingAddressState, $orderBillingAddressAddressLine1, $orderBillingAddressAddressLine2, $orderBillingAddressCity, $orderBillingAddressCompany, $orderBillingAddressCountryIso2, $orderBillingAddressFirstName, $orderBillingAddressLastName, $orderBillingAddressPostcode, $orderBillingAddressState, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id, $id2, $orderNumber, $email, $phoneNumber, $orderStatusCode, $orderStatusCode2, $orderType, $orderType2, $shippingAddressAddressLine1, $shippingAddressAddressLine2, $shippingAddressCity, $shippingAddressCompany, $shippingAddressCountryIso2, $shippingAddressCountryIso3, $shippingAddressFirstName, $shippingAddressLastName, $shippingAddressPostcode, $shippingAddressState, $billingAddressAddressLine1, $billingAddressAddressLine2, $billingAddressCity, $billingAddressCompany, $billingAddressCountryIso2, $billingAddressCountryIso3, $billingAddressFirstName, $billingAddressLastName, $billingAddressPostcode, $billingAddressState, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte, $page, $itemsPerPage)

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
$orderEmail = 'orderEmail_example'; // string | 
$orderPhoneNumber = 'orderPhoneNumber_example'; // string | 
$orderOrderStatusCode = 'orderOrderStatusCode_example'; // string | 
$orderSubtotal = 'orderSubtotal_example'; // string | 
$orderTotal = 'orderTotal_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$orderShippingAddressAddressLine1 = 'orderShippingAddressAddressLine1_example'; // string | 
$orderShippingAddressAddressLine2 = 'orderShippingAddressAddressLine2_example'; // string | 
$orderShippingAddressCity = 'orderShippingAddressCity_example'; // string | 
$orderShippingAddressCompany = 'orderShippingAddressCompany_example'; // string | 
$orderShippingAddressCountryIso2 = 'orderShippingAddressCountryIso2_example'; // string | 
$orderShippingAddressFirstName = 'orderShippingAddressFirstName_example'; // string | 
$orderShippingAddressLastName = 'orderShippingAddressLastName_example'; // string | 
$orderShippingAddressPostcode = 'orderShippingAddressPostcode_example'; // string | 
$orderShippingAddressState = 'orderShippingAddressState_example'; // string | 
$orderBillingAddressAddressLine1 = 'orderBillingAddressAddressLine1_example'; // string | 
$orderBillingAddressAddressLine2 = 'orderBillingAddressAddressLine2_example'; // string | 
$orderBillingAddressCity = 'orderBillingAddressCity_example'; // string | 
$orderBillingAddressCompany = 'orderBillingAddressCompany_example'; // string | 
$orderBillingAddressCountryIso2 = 'orderBillingAddressCountryIso2_example'; // string | 
$orderBillingAddressFirstName = 'orderBillingAddressFirstName_example'; // string | 
$orderBillingAddressLastName = 'orderBillingAddressLastName_example'; // string | 
$orderBillingAddressPostcode = 'orderBillingAddressPostcode_example'; // string | 
$orderBillingAddressState = 'orderBillingAddressState_example'; // string | 
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
$email = 'email_example'; // string | 
$phoneNumber = 'phoneNumber_example'; // string | 
$orderStatusCode = 'orderStatusCode_example'; // string | 
$orderStatusCode2 = array('orderStatusCode_example'); // string[] | 
$orderType = 'orderType_example'; // string | 
$orderType2 = array('orderType_example'); // string[] | 
$shippingAddressAddressLine1 = 'shippingAddressAddressLine1_example'; // string | 
$shippingAddressAddressLine2 = 'shippingAddressAddressLine2_example'; // string | 
$shippingAddressCity = 'shippingAddressCity_example'; // string | 
$shippingAddressCompany = 'shippingAddressCompany_example'; // string | 
$shippingAddressCountryIso2 = 'shippingAddressCountryIso2_example'; // string | 
$shippingAddressCountryIso3 = array('shippingAddressCountryIso2_example'); // string[] | 
$shippingAddressFirstName = 'shippingAddressFirstName_example'; // string | 
$shippingAddressLastName = 'shippingAddressLastName_example'; // string | 
$shippingAddressPostcode = 'shippingAddressPostcode_example'; // string | 
$shippingAddressState = 'shippingAddressState_example'; // string | 
$billingAddressAddressLine1 = 'billingAddressAddressLine1_example'; // string | 
$billingAddressAddressLine2 = 'billingAddressAddressLine2_example'; // string | 
$billingAddressCity = 'billingAddressCity_example'; // string | 
$billingAddressCompany = 'billingAddressCompany_example'; // string | 
$billingAddressCountryIso2 = 'billingAddressCountryIso2_example'; // string | 
$billingAddressCountryIso3 = array('billingAddressCountryIso2_example'); // string[] | 
$billingAddressFirstName = 'billingAddressFirstName_example'; // string | 
$billingAddressLastName = 'billingAddressLastName_example'; // string | 
$billingAddressPostcode = 'billingAddressPostcode_example'; // string | 
$billingAddressState = 'billingAddressState_example'; // string | 
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
    $result = $apiInstance->getOrderCollection($orderId, $orderOrderNumber, $orderEmail, $orderPhoneNumber, $orderOrderStatusCode, $orderSubtotal, $orderTotal, $orderCreatedAt, $orderUpdatedAt, $orderShippingAddressAddressLine1, $orderShippingAddressAddressLine2, $orderShippingAddressCity, $orderShippingAddressCompany, $orderShippingAddressCountryIso2, $orderShippingAddressFirstName, $orderShippingAddressLastName, $orderShippingAddressPostcode, $orderShippingAddressState, $orderBillingAddressAddressLine1, $orderBillingAddressAddressLine2, $orderBillingAddressCity, $orderBillingAddressCompany, $orderBillingAddressCountryIso2, $orderBillingAddressFirstName, $orderBillingAddressLastName, $orderBillingAddressPostcode, $orderBillingAddressState, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id, $id2, $orderNumber, $email, $phoneNumber, $orderStatusCode, $orderStatusCode2, $orderType, $orderType2, $shippingAddressAddressLine1, $shippingAddressAddressLine2, $shippingAddressCity, $shippingAddressCompany, $shippingAddressCountryIso2, $shippingAddressCountryIso3, $shippingAddressFirstName, $shippingAddressLastName, $shippingAddressPostcode, $shippingAddressState, $billingAddressAddressLine1, $billingAddressAddressLine2, $billingAddressCity, $billingAddressCompany, $billingAddressCountryIso2, $billingAddressCountryIso3, $billingAddressFirstName, $billingAddressLastName, $billingAddressPostcode, $billingAddressState, $subtotal, $subtotal2, $total, $total2, $subtotalBetween, $subtotalGt, $subtotalGte, $subtotalLt, $subtotalLte, $totalBetween, $totalGt, $totalGte, $totalLt, $totalLte, $page, $itemsPerPage);
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
 **orderEmail** | **string**|  | [optional]
 **orderPhoneNumber** | **string**|  | [optional]
 **orderOrderStatusCode** | **string**|  | [optional]
 **orderSubtotal** | **string**|  | [optional]
 **orderTotal** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **orderShippingAddressAddressLine1** | **string**|  | [optional]
 **orderShippingAddressAddressLine2** | **string**|  | [optional]
 **orderShippingAddressCity** | **string**|  | [optional]
 **orderShippingAddressCompany** | **string**|  | [optional]
 **orderShippingAddressCountryIso2** | **string**|  | [optional]
 **orderShippingAddressFirstName** | **string**|  | [optional]
 **orderShippingAddressLastName** | **string**|  | [optional]
 **orderShippingAddressPostcode** | **string**|  | [optional]
 **orderShippingAddressState** | **string**|  | [optional]
 **orderBillingAddressAddressLine1** | **string**|  | [optional]
 **orderBillingAddressAddressLine2** | **string**|  | [optional]
 **orderBillingAddressCity** | **string**|  | [optional]
 **orderBillingAddressCompany** | **string**|  | [optional]
 **orderBillingAddressCountryIso2** | **string**|  | [optional]
 **orderBillingAddressFirstName** | **string**|  | [optional]
 **orderBillingAddressLastName** | **string**|  | [optional]
 **orderBillingAddressPostcode** | **string**|  | [optional]
 **orderBillingAddressState** | **string**|  | [optional]
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
 **email** | **string**|  | [optional]
 **phoneNumber** | **string**|  | [optional]
 **orderStatusCode** | **string**|  | [optional]
 **orderStatusCode2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderType** | **string**|  | [optional]
 **orderType2** | [**string[]**](../Model/string.md)|  | [optional]
 **shippingAddressAddressLine1** | **string**|  | [optional]
 **shippingAddressAddressLine2** | **string**|  | [optional]
 **shippingAddressCity** | **string**|  | [optional]
 **shippingAddressCompany** | **string**|  | [optional]
 **shippingAddressCountryIso2** | **string**|  | [optional]
 **shippingAddressCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **shippingAddressFirstName** | **string**|  | [optional]
 **shippingAddressLastName** | **string**|  | [optional]
 **shippingAddressPostcode** | **string**|  | [optional]
 **shippingAddressState** | **string**|  | [optional]
 **billingAddressAddressLine1** | **string**|  | [optional]
 **billingAddressAddressLine2** | **string**|  | [optional]
 **billingAddressCity** | **string**|  | [optional]
 **billingAddressCompany** | **string**|  | [optional]
 **billingAddressCountryIso2** | **string**|  | [optional]
 **billingAddressCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **billingAddressFirstName** | **string**|  | [optional]
 **billingAddressLastName** | **string**|  | [optional]
 **billingAddressPostcode** | **string**|  | [optional]
 **billingAddressState** | **string**|  | [optional]
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

[**\TrackMage\Client\Swagger\Model\OrderGetc[]**](../Model/OrderGetc.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderItem

> \TrackMage\Client\Swagger\Model\OrderGet getOrderItem($id)

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

[**\TrackMage\Client\Swagger\Model\OrderGet**](../Model/OrderGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postOrderCollection

> \TrackMage\Client\Swagger\Model\OrderGet postOrderCollection($order)

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
$order = new \TrackMage\Client\Swagger\Model\OrderPost(); // \TrackMage\Client\Swagger\Model\OrderPost | The new Order resource

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
 **order** | [**\TrackMage\Client\Swagger\Model\OrderPost**](../Model/OrderPost.md)| The new Order resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderGet**](../Model/OrderGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putOrderItem

> \TrackMage\Client\Swagger\Model\OrderGet putOrderItem($id, $order)

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
$order = new \TrackMage\Client\Swagger\Model\OrderPut(); // \TrackMage\Client\Swagger\Model\OrderPut | The updated Order resource

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
 **order** | [**\TrackMage\Client\Swagger\Model\OrderPut**](../Model/OrderPut.md)| The updated Order resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\OrderGet**](../Model/OrderGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

