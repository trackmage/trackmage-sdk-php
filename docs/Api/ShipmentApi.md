# TrackMage\Client\Swagger\ShipmentApi

All URIs are relative to *https://api.l.trackmage.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiShipmentsCheckpointsGetSubresource**](ShipmentApi.md#apiShipmentsCheckpointsGetSubresource) | **GET** /shipments/{id}/checkpoints | Retrieves the collection of TrackingCheckpoint resources.
[**apiShipmentsShipmentItemsGetSubresource**](ShipmentApi.md#apiShipmentsShipmentItemsGetSubresource) | **GET** /shipments/{id}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**apiTeamsWorkspacesShipmentsCheckpointsGetSubresource**](ShipmentApi.md#apiTeamsWorkspacesShipmentsCheckpointsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/shipments/{shipments}/checkpoints | Retrieves the collection of TrackingCheckpoint resources.
[**apiTeamsWorkspacesShipmentsGetSubresource**](ShipmentApi.md#apiTeamsWorkspacesShipmentsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/shipments | Retrieves the collection of Shipment resources.
[**apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource**](ShipmentApi.md#apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/shipments/{shipments}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**apiWorkspacesShipmentsCheckpointsGetSubresource**](ShipmentApi.md#apiWorkspacesShipmentsCheckpointsGetSubresource) | **GET** /workspaces/{id}/shipments/{shipments}/checkpoints | Retrieves the collection of TrackingCheckpoint resources.
[**apiWorkspacesShipmentsGetSubresource**](ShipmentApi.md#apiWorkspacesShipmentsGetSubresource) | **GET** /workspaces/{id}/shipments | Retrieves the collection of Shipment resources.
[**apiWorkspacesShipmentsShipmentItemsGetSubresource**](ShipmentApi.md#apiWorkspacesShipmentsShipmentItemsGetSubresource) | **GET** /workspaces/{id}/shipments/{shipments}/shipment_items | Retrieves the collection of ShipmentItem resources.
[**deleteShipmentItem**](ShipmentApi.md#deleteShipmentItem) | **DELETE** /shipments/{id} | Removes the Shipment resource.
[**getShipmentCollection**](ShipmentApi.md#getShipmentCollection) | **GET** /shipments | Retrieves the collection of Shipment resources.
[**getShipmentItem**](ShipmentApi.md#getShipmentItem) | **GET** /shipments/{id} | Retrieves a Shipment resource.
[**postShipmentCollection**](ShipmentApi.md#postShipmentCollection) | **POST** /shipments | Creates a Shipment resource.
[**putShipmentItem**](ShipmentApi.md#putShipmentItem) | **PUT** /shipments/{id} | Replaces the Shipment resource.



## apiShipmentsCheckpointsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingCheckpointGet[] apiShipmentsCheckpointsGetSubresource($id, $orderCheckpointDate, $page, $itemsPerPage)

Retrieves the collection of TrackingCheckpoint resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orderCheckpointDate = 'orderCheckpointDate_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiShipmentsCheckpointsGetSubresource($id, $orderCheckpointDate, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->apiShipmentsCheckpointsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **orderCheckpointDate** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingCheckpointGet[]**](../Model/TrackingCheckpointGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiShipmentsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGet[] apiShipmentsShipmentItemsGetSubresource($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
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
    $result = $apiInstance->apiShipmentsShipmentItemsGetSubresource($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->apiShipmentsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiTeamsWorkspacesShipmentsCheckpointsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingCheckpointGet[] apiTeamsWorkspacesShipmentsCheckpointsGetSubresource($id, $workspaces, $shipments, $orderCheckpointDate, $page, $itemsPerPage)

Retrieves the collection of TrackingCheckpoint resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$shipments = 'shipments_example'; // string | 
$orderCheckpointDate = 'orderCheckpointDate_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiTeamsWorkspacesShipmentsCheckpointsGetSubresource($id, $workspaces, $shipments, $orderCheckpointDate, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->apiTeamsWorkspacesShipmentsCheckpointsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **shipments** | **string**|  |
 **orderCheckpointDate** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingCheckpointGet[]**](../Model/TrackingCheckpointGet.md)

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


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
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
    echo 'Exception when calling ShipmentApi->apiTeamsWorkspacesShipmentsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGet[] apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource($id, $workspaces, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$shipments = 'shipments_example'; // string | 
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
    $result = $apiInstance->apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource($id, $workspaces, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiWorkspacesShipmentsCheckpointsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingCheckpointGet[] apiWorkspacesShipmentsCheckpointsGetSubresource($id, $shipments, $orderCheckpointDate, $page, $itemsPerPage)

Retrieves the collection of TrackingCheckpoint resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipments = 'shipments_example'; // string | 
$orderCheckpointDate = 'orderCheckpointDate_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiWorkspacesShipmentsCheckpointsGetSubresource($id, $shipments, $orderCheckpointDate, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->apiWorkspacesShipmentsCheckpointsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipments** | **string**|  |
 **orderCheckpointDate** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingCheckpointGet[]**](../Model/TrackingCheckpointGet.md)

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


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
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
    echo 'Exception when calling ShipmentApi->apiWorkspacesShipmentsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiWorkspacesShipmentsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGet[] apiWorkspacesShipmentsShipmentItemsGetSubresource($id, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage)

Retrieves the collection of ShipmentItem resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipments = 'shipments_example'; // string | 
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
    $result = $apiInstance->apiWorkspacesShipmentsShipmentItemsGetSubresource($id, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->apiWorkspacesShipmentsShipmentItemsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipments** | **string**|  |
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


## deleteShipmentItem

> deleteShipmentItem($id)

Removes the Shipment resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteShipmentItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->deleteShipmentItem: ', $e->getMessage(), PHP_EOL;
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


## getShipmentCollection

> \TrackMage\Client\Swagger\Model\ShipmentGetc[] getShipmentCollection($orderId, $orderTrackingNumber, $orderTrackingStatus, $orderShipmentStatusCode, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderPhoneNumber, $orderDaysInTransit, $orderReviewTotalScore, $orderAddressAddressLine1, $orderAddressAddressLine2, $orderAddressCity, $orderAddressCompany, $orderAddressCountryIso2, $orderAddressFirstName, $orderAddressLastName, $orderAddressPostcode, $orderAddressState, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id, $id2, $trackingNumber, $trackingStatus, $trackingStatus2, $shipmentStatusCode, $shipmentStatusCode2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $phoneNumber, $addressAddressLine1, $addressAddressLine2, $addressCity, $addressCompany, $addressCountryIso2, $addressCountryIso3, $addressFirstName, $addressLastName, $addressPostcode, $addressState, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte, $page, $itemsPerPage)

Retrieves the collection of Shipment resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
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
$id = 'id_example'; // string | 
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
    $result = $apiInstance->getShipmentCollection($orderId, $orderTrackingNumber, $orderTrackingStatus, $orderShipmentStatusCode, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderPhoneNumber, $orderDaysInTransit, $orderReviewTotalScore, $orderAddressAddressLine1, $orderAddressAddressLine2, $orderAddressCity, $orderAddressCompany, $orderAddressCountryIso2, $orderAddressFirstName, $orderAddressLastName, $orderAddressPostcode, $orderAddressState, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id, $id2, $trackingNumber, $trackingStatus, $trackingStatus2, $shipmentStatusCode, $shipmentStatusCode2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $phoneNumber, $addressAddressLine1, $addressAddressLine2, $addressCity, $addressCompany, $addressCountryIso2, $addressCountryIso3, $addressFirstName, $addressLastName, $addressPostcode, $addressState, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getShipmentCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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
 **id** | **string**|  | [optional]
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

[**\TrackMage\Client\Swagger\Model\ShipmentGetc[]**](../Model/ShipmentGetc.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getShipmentItem

> \TrackMage\Client\Swagger\Model\ShipmentGet getShipmentItem($id)

Retrieves a Shipment resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getShipmentItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getShipmentItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentGet**](../Model/ShipmentGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postShipmentCollection

> \TrackMage\Client\Swagger\Model\ShipmentGet postShipmentCollection($shipment)

Creates a Shipment resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment = new \TrackMage\Client\Swagger\Model\ShipmentPost(); // \TrackMage\Client\Swagger\Model\ShipmentPost | The new Shipment resource

try {
    $result = $apiInstance->postShipmentCollection($shipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->postShipmentCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment** | [**\TrackMage\Client\Swagger\Model\ShipmentPost**](../Model/ShipmentPost.md)| The new Shipment resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentGet**](../Model/ShipmentGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putShipmentItem

> \TrackMage\Client\Swagger\Model\ShipmentGet putShipmentItem($id, $shipment)

Replaces the Shipment resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipment = new \TrackMage\Client\Swagger\Model\ShipmentPut(); // \TrackMage\Client\Swagger\Model\ShipmentPut | The updated Shipment resource

try {
    $result = $apiInstance->putShipmentItem($id, $shipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->putShipmentItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipment** | [**\TrackMage\Client\Swagger\Model\ShipmentPut**](../Model/ShipmentPut.md)| The updated Shipment resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentGet**](../Model/ShipmentGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

