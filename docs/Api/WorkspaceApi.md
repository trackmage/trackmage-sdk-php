# TrackMage\Client\Swagger\WorkspaceApi

All URIs are relative to *https://api.l.trackmage.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesGetSubresource) | **GET** /teams/{id}/workspaces | Retrieves the collection of Workspace resources.
[**apiTeamsWorkspacesOrdersGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesOrdersGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/orders | Retrieves the collection of Order resources.
[**apiTeamsWorkspacesShipmentsGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesShipmentsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/shipments | Retrieves the collection of Shipment resources.
[**apiTeamsWorkspacesStatusesGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesStatusesGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/statuses | Retrieves the collection of Status resources.
[**apiTeamsWorkspacesTrackingPagesGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesTrackingPagesGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/tracking_pages | Retrieves the collection of TrackingPage resources.
[**apiTeamsWorkspacesWorkflowsGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesWorkflowsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/workflows | Retrieves the collection of Workflow resources.
[**apiWorkspacesOrdersGetSubresource**](WorkspaceApi.md#apiWorkspacesOrdersGetSubresource) | **GET** /workspaces/{id}/orders | Retrieves the collection of Order resources.
[**apiWorkspacesShipmentsGetSubresource**](WorkspaceApi.md#apiWorkspacesShipmentsGetSubresource) | **GET** /workspaces/{id}/shipments | Retrieves the collection of Shipment resources.
[**apiWorkspacesStatusesGetSubresource**](WorkspaceApi.md#apiWorkspacesStatusesGetSubresource) | **GET** /workspaces/{id}/statuses | Retrieves the collection of Status resources.
[**apiWorkspacesTrackingPagesGetSubresource**](WorkspaceApi.md#apiWorkspacesTrackingPagesGetSubresource) | **GET** /workspaces/{id}/tracking_pages | Retrieves the collection of TrackingPage resources.
[**apiWorkspacesWorkflowsGetSubresource**](WorkspaceApi.md#apiWorkspacesWorkflowsGetSubresource) | **GET** /workspaces/{id}/workflows | Retrieves the collection of Workflow resources.
[**deleteWorkspaceItem**](WorkspaceApi.md#deleteWorkspaceItem) | **DELETE** /workspaces/{id} | Removes the Workspace resource.
[**getWorkspaceCollection**](WorkspaceApi.md#getWorkspaceCollection) | **GET** /workspaces | Retrieves the collection of Workspace resources.
[**getWorkspaceItem**](WorkspaceApi.md#getWorkspaceItem) | **GET** /workspaces/{id} | Retrieves a Workspace resource.
[**postWorkspaceCollection**](WorkspaceApi.md#postWorkspaceCollection) | **POST** /workspaces | Creates a Workspace resource.
[**putWorkspaceItem**](WorkspaceApi.md#putWorkspaceItem) | **PUT** /workspaces/{id} | Replaces the Workspace resource.



## apiTeamsWorkspacesGetSubresource

> \TrackMage\Client\Swagger\Model\WorkspaceGet[] apiTeamsWorkspacesGetSubresource($id, $orderCreatedAt, $page, $itemsPerPage)

Retrieves the collection of Workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiTeamsWorkspacesGetSubresource($id, $orderCreatedAt, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->apiTeamsWorkspacesGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **orderCreatedAt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceGet[]**](../Model/WorkspaceGet.md)

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


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
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
    echo 'Exception when calling WorkspaceApi->apiTeamsWorkspacesOrdersGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiTeamsWorkspacesShipmentsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentGet[] apiTeamsWorkspacesShipmentsGetSubresource($id, $workspaces, $orderId, $orderTrackingNumber, $orderTrackingStatus, $orderShipmentStatusCode, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderPhoneNumber, $orderDaysInTransit, $orderReviewTotalScore, $orderAddressAddressLine1, $orderAddressAddressLine2, $orderAddressCity, $orderAddressCompany, $orderAddressCountryIso2, $orderAddressFirstName, $orderAddressLastName, $orderAddressPostcode, $orderAddressState, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id2, $trackingNumber, $trackingStatus, $trackingStatus2, $shipmentStatusCode, $shipmentStatusCode2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $phoneNumber, $addressAddressLine1, $addressAddressLine2, $addressCity, $addressCompany, $addressCountryIso2, $addressCountryIso3, $addressFirstName, $addressLastName, $addressPostcode, $addressState, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte, $page, $itemsPerPage)

Retrieves the collection of Shipment resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$orderId = 'orderId_example'; // string | 
$orderTrackingNumber = 'orderTrackingNumber_example'; // string | 
$orderTrackingStatus = 'orderTrackingStatus_example'; // string | 
$orderShipmentStatusCode = 'orderShipmentStatusCode_example'; // string | 
$orderOriginCarrier = 'orderOriginCarrier_example'; // string | 
$orderDestinationCarrier = 'orderDestinationCarrier_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$orderShippedAt = 'orderShippedAt_example'; // string | 
$orderLastStatusUpdate = 'orderLastStatusUpdate_example'; // string | 
$orderExpectedDeliveryDate = 'orderExpectedDeliveryDate_example'; // string | 
$orderOriginCountry = 'orderOriginCountry_example'; // string | 
$orderDestinationCountry = 'orderDestinationCountry_example'; // string | 
$orderOriginCountryIso2 = 'orderOriginCountryIso2_example'; // string | 
$orderDestinationCountryIso2 = 'orderDestinationCountryIso2_example'; // string | 
$orderEmail = 'orderEmail_example'; // string | 
$orderPhoneNumber = 'orderPhoneNumber_example'; // string | 
$orderDaysInTransit = 'orderDaysInTransit_example'; // string | 
$orderReviewTotalScore = 'orderReviewTotalScore_example'; // string | 
$orderAddressAddressLine1 = 'orderAddressAddressLine1_example'; // string | 
$orderAddressAddressLine2 = 'orderAddressAddressLine2_example'; // string | 
$orderAddressCity = 'orderAddressCity_example'; // string | 
$orderAddressCompany = 'orderAddressCompany_example'; // string | 
$orderAddressCountryIso2 = 'orderAddressCountryIso2_example'; // string | 
$orderAddressFirstName = 'orderAddressFirstName_example'; // string | 
$orderAddressLastName = 'orderAddressLastName_example'; // string | 
$orderAddressPostcode = 'orderAddressPostcode_example'; // string | 
$orderAddressState = 'orderAddressState_example'; // string | 
$orderNumbers = 'orderNumbers_example'; // string | 
$orderNumbers2 = array('orderNumbers_example'); // string[] | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$updatedAtBefore = 'updatedAtBefore_example'; // string | 
$updatedAtStrictlyBefore = 'updatedAtStrictlyBefore_example'; // string | 
$updatedAtAfter = 'updatedAtAfter_example'; // string | 
$updatedAtStrictlyAfter = 'updatedAtStrictlyAfter_example'; // string | 
$shippedAtBefore = 'shippedAtBefore_example'; // string | 
$shippedAtStrictlyBefore = 'shippedAtStrictlyBefore_example'; // string | 
$shippedAtAfter = 'shippedAtAfter_example'; // string | 
$shippedAtStrictlyAfter = 'shippedAtStrictlyAfter_example'; // string | 
$lastStatusUpdateBefore = 'lastStatusUpdateBefore_example'; // string | 
$lastStatusUpdateStrictlyBefore = 'lastStatusUpdateStrictlyBefore_example'; // string | 
$lastStatusUpdateAfter = 'lastStatusUpdateAfter_example'; // string | 
$lastStatusUpdateStrictlyAfter = 'lastStatusUpdateStrictlyAfter_example'; // string | 
$expectedDeliveryDateBefore = 'expectedDeliveryDateBefore_example'; // string | 
$expectedDeliveryDateStrictlyBefore = 'expectedDeliveryDateStrictlyBefore_example'; // string | 
$expectedDeliveryDateAfter = 'expectedDeliveryDateAfter_example'; // string | 
$expectedDeliveryDateStrictlyAfter = 'expectedDeliveryDateStrictlyAfter_example'; // string | 
$id2 = array('id_example'); // string[] | 
$trackingNumber = 'trackingNumber_example'; // string | 
$trackingStatus = 'trackingStatus_example'; // string | 
$trackingStatus2 = array('trackingStatus_example'); // string[] | 
$shipmentStatusCode = 'shipmentStatusCode_example'; // string | 
$shipmentStatusCode2 = array('shipmentStatusCode_example'); // string[] | 
$originCarrier = 'originCarrier_example'; // string | 
$originCarrier2 = array('originCarrier_example'); // string[] | 
$destinationCarrier = 'destinationCarrier_example'; // string | 
$destinationCarrier2 = array('destinationCarrier_example'); // string[] | 
$originCountry = 'originCountry_example'; // string | 
$originCountryIso2 = 'originCountryIso2_example'; // string | 
$originCountryIso3 = array('originCountryIso2_example'); // string[] | 
$destinationCountry = 'destinationCountry_example'; // string | 
$destinationCountryIso2 = 'destinationCountryIso2_example'; // string | 
$destinationCountryIso3 = array('destinationCountryIso2_example'); // string[] | 
$email = 'email_example'; // string | 
$phoneNumber = 'phoneNumber_example'; // string | 
$addressAddressLine1 = 'addressAddressLine1_example'; // string | 
$addressAddressLine2 = 'addressAddressLine2_example'; // string | 
$addressCity = 'addressCity_example'; // string | 
$addressCompany = 'addressCompany_example'; // string | 
$addressCountryIso2 = 'addressCountryIso2_example'; // string | 
$addressCountryIso3 = array('addressCountryIso2_example'); // string[] | 
$addressFirstName = 'addressFirstName_example'; // string | 
$addressLastName = 'addressLastName_example'; // string | 
$addressPostcode = 'addressPostcode_example'; // string | 
$addressState = 'addressState_example'; // string | 
$daysInTransit = 56; // int | 
$daysInTransit2 = array(56); // int[] | 
$daysInTransitBetween = 'daysInTransitBetween_example'; // string | 
$daysInTransitGt = 'daysInTransitGt_example'; // string | 
$daysInTransitGte = 'daysInTransitGte_example'; // string | 
$daysInTransitLt = 'daysInTransitLt_example'; // string | 
$daysInTransitLte = 'daysInTransitLte_example'; // string | 
$reviewTotalScoreBetween = 'reviewTotalScoreBetween_example'; // string | 
$reviewTotalScoreGt = 'reviewTotalScoreGt_example'; // string | 
$reviewTotalScoreGte = 'reviewTotalScoreGte_example'; // string | 
$reviewTotalScoreLt = 'reviewTotalScoreLt_example'; // string | 
$reviewTotalScoreLte = 'reviewTotalScoreLte_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiTeamsWorkspacesShipmentsGetSubresource($id, $workspaces, $orderId, $orderTrackingNumber, $orderTrackingStatus, $orderShipmentStatusCode, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderPhoneNumber, $orderDaysInTransit, $orderReviewTotalScore, $orderAddressAddressLine1, $orderAddressAddressLine2, $orderAddressCity, $orderAddressCompany, $orderAddressCountryIso2, $orderAddressFirstName, $orderAddressLastName, $orderAddressPostcode, $orderAddressState, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id2, $trackingNumber, $trackingStatus, $trackingStatus2, $shipmentStatusCode, $shipmentStatusCode2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $phoneNumber, $addressAddressLine1, $addressAddressLine2, $addressCity, $addressCompany, $addressCountryIso2, $addressCountryIso3, $addressFirstName, $addressLastName, $addressPostcode, $addressState, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->apiTeamsWorkspacesShipmentsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **orderId** | **string**|  | [optional]
 **orderTrackingNumber** | **string**|  | [optional]
 **orderTrackingStatus** | **string**|  | [optional]
 **orderShipmentStatusCode** | **string**|  | [optional]
 **orderOriginCarrier** | **string**|  | [optional]
 **orderDestinationCarrier** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **orderShippedAt** | **string**|  | [optional]
 **orderLastStatusUpdate** | **string**|  | [optional]
 **orderExpectedDeliveryDate** | **string**|  | [optional]
 **orderOriginCountry** | **string**|  | [optional]
 **orderDestinationCountry** | **string**|  | [optional]
 **orderOriginCountryIso2** | **string**|  | [optional]
 **orderDestinationCountryIso2** | **string**|  | [optional]
 **orderEmail** | **string**|  | [optional]
 **orderPhoneNumber** | **string**|  | [optional]
 **orderDaysInTransit** | **string**|  | [optional]
 **orderReviewTotalScore** | **string**|  | [optional]
 **orderAddressAddressLine1** | **string**|  | [optional]
 **orderAddressAddressLine2** | **string**|  | [optional]
 **orderAddressCity** | **string**|  | [optional]
 **orderAddressCompany** | **string**|  | [optional]
 **orderAddressCountryIso2** | **string**|  | [optional]
 **orderAddressFirstName** | **string**|  | [optional]
 **orderAddressLastName** | **string**|  | [optional]
 **orderAddressPostcode** | **string**|  | [optional]
 **orderAddressState** | **string**|  | [optional]
 **orderNumbers** | **string**|  | [optional]
 **orderNumbers2** | [**string[]**](../Model/string.md)|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtStrictlyBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **createdAtStrictlyAfter** | **string**|  | [optional]
 **updatedAtBefore** | **string**|  | [optional]
 **updatedAtStrictlyBefore** | **string**|  | [optional]
 **updatedAtAfter** | **string**|  | [optional]
 **updatedAtStrictlyAfter** | **string**|  | [optional]
 **shippedAtBefore** | **string**|  | [optional]
 **shippedAtStrictlyBefore** | **string**|  | [optional]
 **shippedAtAfter** | **string**|  | [optional]
 **shippedAtStrictlyAfter** | **string**|  | [optional]
 **lastStatusUpdateBefore** | **string**|  | [optional]
 **lastStatusUpdateStrictlyBefore** | **string**|  | [optional]
 **lastStatusUpdateAfter** | **string**|  | [optional]
 **lastStatusUpdateStrictlyAfter** | **string**|  | [optional]
 **expectedDeliveryDateBefore** | **string**|  | [optional]
 **expectedDeliveryDateStrictlyBefore** | **string**|  | [optional]
 **expectedDeliveryDateAfter** | **string**|  | [optional]
 **expectedDeliveryDateStrictlyAfter** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **trackingNumber** | **string**|  | [optional]
 **trackingStatus** | **string**|  | [optional]
 **trackingStatus2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentStatusCode** | **string**|  | [optional]
 **shipmentStatusCode2** | [**string[]**](../Model/string.md)|  | [optional]
 **originCarrier** | **string**|  | [optional]
 **originCarrier2** | [**string[]**](../Model/string.md)|  | [optional]
 **destinationCarrier** | **string**|  | [optional]
 **destinationCarrier2** | [**string[]**](../Model/string.md)|  | [optional]
 **originCountry** | **string**|  | [optional]
 **originCountryIso2** | **string**|  | [optional]
 **originCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **destinationCountry** | **string**|  | [optional]
 **destinationCountryIso2** | **string**|  | [optional]
 **destinationCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **email** | **string**|  | [optional]
 **phoneNumber** | **string**|  | [optional]
 **addressAddressLine1** | **string**|  | [optional]
 **addressAddressLine2** | **string**|  | [optional]
 **addressCity** | **string**|  | [optional]
 **addressCompany** | **string**|  | [optional]
 **addressCountryIso2** | **string**|  | [optional]
 **addressCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **addressFirstName** | **string**|  | [optional]
 **addressLastName** | **string**|  | [optional]
 **addressPostcode** | **string**|  | [optional]
 **addressState** | **string**|  | [optional]
 **daysInTransit** | **int**|  | [optional]
 **daysInTransit2** | [**int[]**](../Model/int.md)|  | [optional]
 **daysInTransitBetween** | **string**|  | [optional]
 **daysInTransitGt** | **string**|  | [optional]
 **daysInTransitGte** | **string**|  | [optional]
 **daysInTransitLt** | **string**|  | [optional]
 **daysInTransitLte** | **string**|  | [optional]
 **reviewTotalScoreBetween** | **string**|  | [optional]
 **reviewTotalScoreGt** | **string**|  | [optional]
 **reviewTotalScoreGte** | **string**|  | [optional]
 **reviewTotalScoreLt** | **string**|  | [optional]
 **reviewTotalScoreLte** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentGet[]**](../Model/ShipmentGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesStatusesGetSubresource

> \TrackMage\Client\Swagger\Model\StatusGet[] apiTeamsWorkspacesStatusesGetSubresource($id, $workspaces, $entity, $code, $title, $orderEntity, $orderCode, $orderTitle, $page, $itemsPerPage)

Retrieves the collection of Status resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$entity = 'entity_example'; // string | 
$code = 'code_example'; // string | 
$title = 'title_example'; // string | 
$orderEntity = 'orderEntity_example'; // string | 
$orderCode = 'orderCode_example'; // string | 
$orderTitle = 'orderTitle_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiTeamsWorkspacesStatusesGetSubresource($id, $workspaces, $entity, $code, $title, $orderEntity, $orderCode, $orderTitle, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->apiTeamsWorkspacesStatusesGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **entity** | **string**|  | [optional]
 **code** | **string**|  | [optional]
 **title** | **string**|  | [optional]
 **orderEntity** | **string**|  | [optional]
 **orderCode** | **string**|  | [optional]
 **orderTitle** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\StatusGet[]**](../Model/StatusGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesTrackingPagesGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingPageGet[] apiTeamsWorkspacesTrackingPagesGetSubresource($id, $workspaces, $page, $itemsPerPage)

Retrieves the collection of TrackingPage resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiTeamsWorkspacesTrackingPagesGetSubresource($id, $workspaces, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->apiTeamsWorkspacesTrackingPagesGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageGet[]**](../Model/TrackingPageGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesWorkflowsGetSubresource

> \TrackMage\Client\Swagger\Model\WorkflowGet[] apiTeamsWorkspacesWorkflowsGetSubresource($id, $workspaces, $type, $type2, $period, $period2, $title, $orderCreatedAt, $tag, $existsIntegration, $page, $itemsPerPage)

Retrieves the collection of Workflow resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$period = 'period_example'; // string | 
$period2 = array('period_example'); // string[] | 
$title = 'title_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$tag = 'tag_example'; // string | 
$existsIntegration = True; // bool | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiTeamsWorkspacesWorkflowsGetSubresource($id, $workspaces, $type, $type2, $period, $period2, $title, $orderCreatedAt, $tag, $existsIntegration, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->apiTeamsWorkspacesWorkflowsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **type** | **string**|  | [optional]
 **type2** | [**string[]**](../Model/string.md)|  | [optional]
 **period** | **string**|  | [optional]
 **period2** | [**string[]**](../Model/string.md)|  | [optional]
 **title** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **tag** | **string**|  | [optional]
 **existsIntegration** | **bool**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowGet[]**](../Model/WorkflowGet.md)

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


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
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
    echo 'Exception when calling WorkspaceApi->apiWorkspacesOrdersGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiWorkspacesShipmentsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentGet[] apiWorkspacesShipmentsGetSubresource($id, $orderId, $orderTrackingNumber, $orderTrackingStatus, $orderShipmentStatusCode, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderPhoneNumber, $orderDaysInTransit, $orderReviewTotalScore, $orderAddressAddressLine1, $orderAddressAddressLine2, $orderAddressCity, $orderAddressCompany, $orderAddressCountryIso2, $orderAddressFirstName, $orderAddressLastName, $orderAddressPostcode, $orderAddressState, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id2, $trackingNumber, $trackingStatus, $trackingStatus2, $shipmentStatusCode, $shipmentStatusCode2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $phoneNumber, $addressAddressLine1, $addressAddressLine2, $addressCity, $addressCompany, $addressCountryIso2, $addressCountryIso3, $addressFirstName, $addressLastName, $addressPostcode, $addressState, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte, $page, $itemsPerPage)

Retrieves the collection of Shipment resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orderId = 'orderId_example'; // string | 
$orderTrackingNumber = 'orderTrackingNumber_example'; // string | 
$orderTrackingStatus = 'orderTrackingStatus_example'; // string | 
$orderShipmentStatusCode = 'orderShipmentStatusCode_example'; // string | 
$orderOriginCarrier = 'orderOriginCarrier_example'; // string | 
$orderDestinationCarrier = 'orderDestinationCarrier_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$orderShippedAt = 'orderShippedAt_example'; // string | 
$orderLastStatusUpdate = 'orderLastStatusUpdate_example'; // string | 
$orderExpectedDeliveryDate = 'orderExpectedDeliveryDate_example'; // string | 
$orderOriginCountry = 'orderOriginCountry_example'; // string | 
$orderDestinationCountry = 'orderDestinationCountry_example'; // string | 
$orderOriginCountryIso2 = 'orderOriginCountryIso2_example'; // string | 
$orderDestinationCountryIso2 = 'orderDestinationCountryIso2_example'; // string | 
$orderEmail = 'orderEmail_example'; // string | 
$orderPhoneNumber = 'orderPhoneNumber_example'; // string | 
$orderDaysInTransit = 'orderDaysInTransit_example'; // string | 
$orderReviewTotalScore = 'orderReviewTotalScore_example'; // string | 
$orderAddressAddressLine1 = 'orderAddressAddressLine1_example'; // string | 
$orderAddressAddressLine2 = 'orderAddressAddressLine2_example'; // string | 
$orderAddressCity = 'orderAddressCity_example'; // string | 
$orderAddressCompany = 'orderAddressCompany_example'; // string | 
$orderAddressCountryIso2 = 'orderAddressCountryIso2_example'; // string | 
$orderAddressFirstName = 'orderAddressFirstName_example'; // string | 
$orderAddressLastName = 'orderAddressLastName_example'; // string | 
$orderAddressPostcode = 'orderAddressPostcode_example'; // string | 
$orderAddressState = 'orderAddressState_example'; // string | 
$orderNumbers = 'orderNumbers_example'; // string | 
$orderNumbers2 = array('orderNumbers_example'); // string[] | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$updatedAtBefore = 'updatedAtBefore_example'; // string | 
$updatedAtStrictlyBefore = 'updatedAtStrictlyBefore_example'; // string | 
$updatedAtAfter = 'updatedAtAfter_example'; // string | 
$updatedAtStrictlyAfter = 'updatedAtStrictlyAfter_example'; // string | 
$shippedAtBefore = 'shippedAtBefore_example'; // string | 
$shippedAtStrictlyBefore = 'shippedAtStrictlyBefore_example'; // string | 
$shippedAtAfter = 'shippedAtAfter_example'; // string | 
$shippedAtStrictlyAfter = 'shippedAtStrictlyAfter_example'; // string | 
$lastStatusUpdateBefore = 'lastStatusUpdateBefore_example'; // string | 
$lastStatusUpdateStrictlyBefore = 'lastStatusUpdateStrictlyBefore_example'; // string | 
$lastStatusUpdateAfter = 'lastStatusUpdateAfter_example'; // string | 
$lastStatusUpdateStrictlyAfter = 'lastStatusUpdateStrictlyAfter_example'; // string | 
$expectedDeliveryDateBefore = 'expectedDeliveryDateBefore_example'; // string | 
$expectedDeliveryDateStrictlyBefore = 'expectedDeliveryDateStrictlyBefore_example'; // string | 
$expectedDeliveryDateAfter = 'expectedDeliveryDateAfter_example'; // string | 
$expectedDeliveryDateStrictlyAfter = 'expectedDeliveryDateStrictlyAfter_example'; // string | 
$id2 = array('id_example'); // string[] | 
$trackingNumber = 'trackingNumber_example'; // string | 
$trackingStatus = 'trackingStatus_example'; // string | 
$trackingStatus2 = array('trackingStatus_example'); // string[] | 
$shipmentStatusCode = 'shipmentStatusCode_example'; // string | 
$shipmentStatusCode2 = array('shipmentStatusCode_example'); // string[] | 
$originCarrier = 'originCarrier_example'; // string | 
$originCarrier2 = array('originCarrier_example'); // string[] | 
$destinationCarrier = 'destinationCarrier_example'; // string | 
$destinationCarrier2 = array('destinationCarrier_example'); // string[] | 
$originCountry = 'originCountry_example'; // string | 
$originCountryIso2 = 'originCountryIso2_example'; // string | 
$originCountryIso3 = array('originCountryIso2_example'); // string[] | 
$destinationCountry = 'destinationCountry_example'; // string | 
$destinationCountryIso2 = 'destinationCountryIso2_example'; // string | 
$destinationCountryIso3 = array('destinationCountryIso2_example'); // string[] | 
$email = 'email_example'; // string | 
$phoneNumber = 'phoneNumber_example'; // string | 
$addressAddressLine1 = 'addressAddressLine1_example'; // string | 
$addressAddressLine2 = 'addressAddressLine2_example'; // string | 
$addressCity = 'addressCity_example'; // string | 
$addressCompany = 'addressCompany_example'; // string | 
$addressCountryIso2 = 'addressCountryIso2_example'; // string | 
$addressCountryIso3 = array('addressCountryIso2_example'); // string[] | 
$addressFirstName = 'addressFirstName_example'; // string | 
$addressLastName = 'addressLastName_example'; // string | 
$addressPostcode = 'addressPostcode_example'; // string | 
$addressState = 'addressState_example'; // string | 
$daysInTransit = 56; // int | 
$daysInTransit2 = array(56); // int[] | 
$daysInTransitBetween = 'daysInTransitBetween_example'; // string | 
$daysInTransitGt = 'daysInTransitGt_example'; // string | 
$daysInTransitGte = 'daysInTransitGte_example'; // string | 
$daysInTransitLt = 'daysInTransitLt_example'; // string | 
$daysInTransitLte = 'daysInTransitLte_example'; // string | 
$reviewTotalScoreBetween = 'reviewTotalScoreBetween_example'; // string | 
$reviewTotalScoreGt = 'reviewTotalScoreGt_example'; // string | 
$reviewTotalScoreGte = 'reviewTotalScoreGte_example'; // string | 
$reviewTotalScoreLt = 'reviewTotalScoreLt_example'; // string | 
$reviewTotalScoreLte = 'reviewTotalScoreLte_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiWorkspacesShipmentsGetSubresource($id, $orderId, $orderTrackingNumber, $orderTrackingStatus, $orderShipmentStatusCode, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderPhoneNumber, $orderDaysInTransit, $orderReviewTotalScore, $orderAddressAddressLine1, $orderAddressAddressLine2, $orderAddressCity, $orderAddressCompany, $orderAddressCountryIso2, $orderAddressFirstName, $orderAddressLastName, $orderAddressPostcode, $orderAddressState, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id2, $trackingNumber, $trackingStatus, $trackingStatus2, $shipmentStatusCode, $shipmentStatusCode2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $phoneNumber, $addressAddressLine1, $addressAddressLine2, $addressCity, $addressCompany, $addressCountryIso2, $addressCountryIso3, $addressFirstName, $addressLastName, $addressPostcode, $addressState, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->apiWorkspacesShipmentsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **orderId** | **string**|  | [optional]
 **orderTrackingNumber** | **string**|  | [optional]
 **orderTrackingStatus** | **string**|  | [optional]
 **orderShipmentStatusCode** | **string**|  | [optional]
 **orderOriginCarrier** | **string**|  | [optional]
 **orderDestinationCarrier** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **orderShippedAt** | **string**|  | [optional]
 **orderLastStatusUpdate** | **string**|  | [optional]
 **orderExpectedDeliveryDate** | **string**|  | [optional]
 **orderOriginCountry** | **string**|  | [optional]
 **orderDestinationCountry** | **string**|  | [optional]
 **orderOriginCountryIso2** | **string**|  | [optional]
 **orderDestinationCountryIso2** | **string**|  | [optional]
 **orderEmail** | **string**|  | [optional]
 **orderPhoneNumber** | **string**|  | [optional]
 **orderDaysInTransit** | **string**|  | [optional]
 **orderReviewTotalScore** | **string**|  | [optional]
 **orderAddressAddressLine1** | **string**|  | [optional]
 **orderAddressAddressLine2** | **string**|  | [optional]
 **orderAddressCity** | **string**|  | [optional]
 **orderAddressCompany** | **string**|  | [optional]
 **orderAddressCountryIso2** | **string**|  | [optional]
 **orderAddressFirstName** | **string**|  | [optional]
 **orderAddressLastName** | **string**|  | [optional]
 **orderAddressPostcode** | **string**|  | [optional]
 **orderAddressState** | **string**|  | [optional]
 **orderNumbers** | **string**|  | [optional]
 **orderNumbers2** | [**string[]**](../Model/string.md)|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtStrictlyBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **createdAtStrictlyAfter** | **string**|  | [optional]
 **updatedAtBefore** | **string**|  | [optional]
 **updatedAtStrictlyBefore** | **string**|  | [optional]
 **updatedAtAfter** | **string**|  | [optional]
 **updatedAtStrictlyAfter** | **string**|  | [optional]
 **shippedAtBefore** | **string**|  | [optional]
 **shippedAtStrictlyBefore** | **string**|  | [optional]
 **shippedAtAfter** | **string**|  | [optional]
 **shippedAtStrictlyAfter** | **string**|  | [optional]
 **lastStatusUpdateBefore** | **string**|  | [optional]
 **lastStatusUpdateStrictlyBefore** | **string**|  | [optional]
 **lastStatusUpdateAfter** | **string**|  | [optional]
 **lastStatusUpdateStrictlyAfter** | **string**|  | [optional]
 **expectedDeliveryDateBefore** | **string**|  | [optional]
 **expectedDeliveryDateStrictlyBefore** | **string**|  | [optional]
 **expectedDeliveryDateAfter** | **string**|  | [optional]
 **expectedDeliveryDateStrictlyAfter** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **trackingNumber** | **string**|  | [optional]
 **trackingStatus** | **string**|  | [optional]
 **trackingStatus2** | [**string[]**](../Model/string.md)|  | [optional]
 **shipmentStatusCode** | **string**|  | [optional]
 **shipmentStatusCode2** | [**string[]**](../Model/string.md)|  | [optional]
 **originCarrier** | **string**|  | [optional]
 **originCarrier2** | [**string[]**](../Model/string.md)|  | [optional]
 **destinationCarrier** | **string**|  | [optional]
 **destinationCarrier2** | [**string[]**](../Model/string.md)|  | [optional]
 **originCountry** | **string**|  | [optional]
 **originCountryIso2** | **string**|  | [optional]
 **originCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **destinationCountry** | **string**|  | [optional]
 **destinationCountryIso2** | **string**|  | [optional]
 **destinationCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **email** | **string**|  | [optional]
 **phoneNumber** | **string**|  | [optional]
 **addressAddressLine1** | **string**|  | [optional]
 **addressAddressLine2** | **string**|  | [optional]
 **addressCity** | **string**|  | [optional]
 **addressCompany** | **string**|  | [optional]
 **addressCountryIso2** | **string**|  | [optional]
 **addressCountryIso3** | [**string[]**](../Model/string.md)|  | [optional]
 **addressFirstName** | **string**|  | [optional]
 **addressLastName** | **string**|  | [optional]
 **addressPostcode** | **string**|  | [optional]
 **addressState** | **string**|  | [optional]
 **daysInTransit** | **int**|  | [optional]
 **daysInTransit2** | [**int[]**](../Model/int.md)|  | [optional]
 **daysInTransitBetween** | **string**|  | [optional]
 **daysInTransitGt** | **string**|  | [optional]
 **daysInTransitGte** | **string**|  | [optional]
 **daysInTransitLt** | **string**|  | [optional]
 **daysInTransitLte** | **string**|  | [optional]
 **reviewTotalScoreBetween** | **string**|  | [optional]
 **reviewTotalScoreGt** | **string**|  | [optional]
 **reviewTotalScoreGte** | **string**|  | [optional]
 **reviewTotalScoreLt** | **string**|  | [optional]
 **reviewTotalScoreLte** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentGet[]**](../Model/ShipmentGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesStatusesGetSubresource

> \TrackMage\Client\Swagger\Model\StatusGet[] apiWorkspacesStatusesGetSubresource($id, $entity, $code, $title, $orderEntity, $orderCode, $orderTitle, $page, $itemsPerPage)

Retrieves the collection of Status resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$entity = 'entity_example'; // string | 
$code = 'code_example'; // string | 
$title = 'title_example'; // string | 
$orderEntity = 'orderEntity_example'; // string | 
$orderCode = 'orderCode_example'; // string | 
$orderTitle = 'orderTitle_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiWorkspacesStatusesGetSubresource($id, $entity, $code, $title, $orderEntity, $orderCode, $orderTitle, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->apiWorkspacesStatusesGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **entity** | **string**|  | [optional]
 **code** | **string**|  | [optional]
 **title** | **string**|  | [optional]
 **orderEntity** | **string**|  | [optional]
 **orderCode** | **string**|  | [optional]
 **orderTitle** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\StatusGet[]**](../Model/StatusGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesTrackingPagesGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingPageGet[] apiWorkspacesTrackingPagesGetSubresource($id, $page, $itemsPerPage)

Retrieves the collection of TrackingPage resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiWorkspacesTrackingPagesGetSubresource($id, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->apiWorkspacesTrackingPagesGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageGet[]**](../Model/TrackingPageGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesWorkflowsGetSubresource

> \TrackMage\Client\Swagger\Model\WorkflowGet[] apiWorkspacesWorkflowsGetSubresource($id, $type, $type2, $period, $period2, $title, $orderCreatedAt, $tag, $existsIntegration, $page, $itemsPerPage)

Retrieves the collection of Workflow resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$period = 'period_example'; // string | 
$period2 = array('period_example'); // string[] | 
$title = 'title_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$tag = 'tag_example'; // string | 
$existsIntegration = True; // bool | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiWorkspacesWorkflowsGetSubresource($id, $type, $type2, $period, $period2, $title, $orderCreatedAt, $tag, $existsIntegration, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->apiWorkspacesWorkflowsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **type** | **string**|  | [optional]
 **type2** | [**string[]**](../Model/string.md)|  | [optional]
 **period** | **string**|  | [optional]
 **period2** | [**string[]**](../Model/string.md)|  | [optional]
 **title** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **tag** | **string**|  | [optional]
 **existsIntegration** | **bool**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowGet[]**](../Model/WorkflowGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteWorkspaceItem

> deleteWorkspaceItem($id)

Removes the Workspace resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteWorkspaceItem($id);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->deleteWorkspaceItem: ', $e->getMessage(), PHP_EOL;
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


## getWorkspaceCollection

> \TrackMage\Client\Swagger\Model\WorkspaceGetc[] getWorkspaceCollection($orderCreatedAt, $page, $itemsPerPage)

Retrieves the collection of Workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getWorkspaceCollection($orderCreatedAt, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getWorkspaceCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderCreatedAt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceGetc[]**](../Model/WorkspaceGetc.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWorkspaceItem

> \TrackMage\Client\Swagger\Model\WorkspaceGet getWorkspaceItem($id)

Retrieves a Workspace resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getWorkspaceItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getWorkspaceItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceGet**](../Model/WorkspaceGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postWorkspaceCollection

> \TrackMage\Client\Swagger\Model\WorkspaceGet postWorkspaceCollection($workspace)

Creates a Workspace resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace = new \TrackMage\Client\Swagger\Model\WorkspacePost(); // \TrackMage\Client\Swagger\Model\WorkspacePost | The new Workspace resource

try {
    $result = $apiInstance->postWorkspaceCollection($workspace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->postWorkspaceCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace** | [**\TrackMage\Client\Swagger\Model\WorkspacePost**](../Model/WorkspacePost.md)| The new Workspace resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceGet**](../Model/WorkspaceGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putWorkspaceItem

> \TrackMage\Client\Swagger\Model\WorkspaceGet putWorkspaceItem($id, $workspace)

Replaces the Workspace resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspace = new \TrackMage\Client\Swagger\Model\WorkspacePut(); // \TrackMage\Client\Swagger\Model\WorkspacePut | The updated Workspace resource

try {
    $result = $apiInstance->putWorkspaceItem($id, $workspace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->putWorkspaceItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspace** | [**\TrackMage\Client\Swagger\Model\WorkspacePut**](../Model/WorkspacePut.md)| The updated Workspace resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceGet**](../Model/WorkspaceGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

