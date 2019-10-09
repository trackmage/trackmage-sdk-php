# TrackMage\Client\Swagger\ShipmentApi

All URIs are relative to *http://localhost*

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

> \TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoint[] apiShipmentsCheckpointsGetSubresource($id, $orderCheckpointDate)

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

try {
    $result = $apiInstance->apiShipmentsCheckpointsGetSubresource($id, $orderCheckpointDate);
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


## apiShipmentsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[] apiShipmentsShipmentItemsGetSubresource($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte)

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
$shipmentId = 56; // int | 
$shipmentId2 = array(56); // int[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$workspaceId = 56; // int | 
$workspaceId2 = array(56); // int[] | 
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
    $result = $apiInstance->apiShipmentsShipmentItemsGetSubresource($id, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte);
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
 **shipmentId** | **int**|  | [optional]
 **shipmentId2** | [**int[]**](../Model/int.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **workspaceId** | **int**|  | [optional]
 **workspaceId2** | [**int[]**](../Model/int.md)|  | [optional]
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


## apiTeamsWorkspacesShipmentsCheckpointsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoint[] apiTeamsWorkspacesShipmentsCheckpointsGetSubresource($id, $workspaces, $shipments, $orderCheckpointDate)

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

try {
    $result = $apiInstance->apiTeamsWorkspacesShipmentsCheckpointsGetSubresource($id, $workspaces, $shipments, $orderCheckpointDate);
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


## apiTeamsWorkspacesShipmentsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentGetShipmentGetShipmentMetaGetAddress[] apiTeamsWorkspacesShipmentsGetSubresource($id, $workspaces, $orderId, $orderTrackingNumber, $orderStatus, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderDaysInTransit, $orderReviewTotalScore, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id2, $trackingNumber, $status, $status2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte)

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
$orderStatus = 'orderStatus_example'; // string | 
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
$orderDaysInTransit = 'orderDaysInTransit_example'; // string | 
$orderReviewTotalScore = 'orderReviewTotalScore_example'; // string | 
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
$id2 = array(56); // int[] | 
$trackingNumber = 'trackingNumber_example'; // string | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
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
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$id2 = array(56); // int[] | 
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

try {
    $result = $apiInstance->apiTeamsWorkspacesShipmentsGetSubresource($id, $workspaces, $orderId, $orderTrackingNumber, $orderStatus, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderDaysInTransit, $orderReviewTotalScore, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id2, $trackingNumber, $status, $status2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte);
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
 **orderStatus** | **string**|  | [optional]
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
 **orderDaysInTransit** | **string**|  | [optional]
 **orderReviewTotalScore** | **string**|  | [optional]
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
 **id2** | [**int[]**](../Model/int.md)|  | [optional]
 **trackingNumber** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
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
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **id2** | [**int[]**](../Model/int.md)|  | [optional]
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

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentGetShipmentGetShipmentMetaGetAddress[]**](../Model/ShipmentGetShipmentGetShipmentMetaGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[] apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource($id, $workspaces, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte)

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
$shipmentId = 56; // int | 
$shipmentId2 = array(56); // int[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$workspaceId = 56; // int | 
$workspaceId2 = array(56); // int[] | 
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
    $result = $apiInstance->apiTeamsWorkspacesShipmentsShipmentItemsGetSubresource($id, $workspaces, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte);
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
 **shipmentId** | **int**|  | [optional]
 **shipmentId2** | [**int[]**](../Model/int.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **workspaceId** | **int**|  | [optional]
 **workspaceId2** | [**int[]**](../Model/int.md)|  | [optional]
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


## apiWorkspacesShipmentsCheckpointsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingCheckpointGetTrackingCheckpoint[] apiWorkspacesShipmentsCheckpointsGetSubresource($id, $shipments, $orderCheckpointDate)

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

try {
    $result = $apiInstance->apiWorkspacesShipmentsCheckpointsGetSubresource($id, $shipments, $orderCheckpointDate);
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


## apiWorkspacesShipmentsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentGetShipmentGetShipmentMetaGetAddress[] apiWorkspacesShipmentsGetSubresource($id, $orderId, $orderTrackingNumber, $orderStatus, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderDaysInTransit, $orderReviewTotalScore, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id2, $trackingNumber, $status, $status2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte)

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
$orderStatus = 'orderStatus_example'; // string | 
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
$orderDaysInTransit = 'orderDaysInTransit_example'; // string | 
$orderReviewTotalScore = 'orderReviewTotalScore_example'; // string | 
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
$id2 = array(56); // int[] | 
$trackingNumber = 'trackingNumber_example'; // string | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
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
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$id2 = array(56); // int[] | 
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

try {
    $result = $apiInstance->apiWorkspacesShipmentsGetSubresource($id, $orderId, $orderTrackingNumber, $orderStatus, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderDaysInTransit, $orderReviewTotalScore, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id2, $trackingNumber, $status, $status2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte);
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
 **orderStatus** | **string**|  | [optional]
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
 **orderDaysInTransit** | **string**|  | [optional]
 **orderReviewTotalScore** | **string**|  | [optional]
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
 **id2** | [**int[]**](../Model/int.md)|  | [optional]
 **trackingNumber** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
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
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **id2** | [**int[]**](../Model/int.md)|  | [optional]
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

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentGetShipmentGetShipmentMetaGetAddress[]**](../Model/ShipmentGetShipmentGetShipmentMetaGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesShipmentsShipmentItemsGetSubresource

> \TrackMage\Client\Swagger\Model\ShipmentItemGetShipmentItem[] apiWorkspacesShipmentsShipmentItemsGetSubresource($id, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte)

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
$shipmentId = 56; // int | 
$shipmentId2 = array(56); // int[] | 
$shipmentTrackingNumber = 'shipmentTrackingNumber_example'; // string | 
$orderItemId = 'orderItemId_example'; // string | 
$orderItemId2 = array('orderItemId_example'); // string[] | 
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$workspaceId = 56; // int | 
$workspaceId2 = array(56); // int[] | 
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
    $result = $apiInstance->apiWorkspacesShipmentsShipmentItemsGetSubresource($id, $shipments, $id2, $shipmentId, $shipmentId2, $shipmentTrackingNumber, $orderItemId, $orderItemId2, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $workspaceId, $workspaceId2, $orderId, $orderQty, $qty, $qty2, $qtyBetween, $qtyGt, $qtyGte, $qtyLt, $qtyLte);
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
 **shipmentId** | **int**|  | [optional]
 **shipmentId2** | [**int[]**](../Model/int.md)|  | [optional]
 **shipmentTrackingNumber** | **string**|  | [optional]
 **orderItemId** | **string**|  | [optional]
 **orderItemId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **workspaceId** | **int**|  | [optional]
 **workspaceId2** | [**int[]**](../Model/int.md)|  | [optional]
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

> \TrackMage\Client\Swagger\Model\ShipmentGetShipmentsGetAddress[] getShipmentCollection($orderId, $orderTrackingNumber, $orderStatus, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderDaysInTransit, $orderReviewTotalScore, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id, $id2, $trackingNumber, $status, $status2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $id2, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte, $page, $itemsPerPage)

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
$orderStatus = 'orderStatus_example'; // string | 
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
$orderDaysInTransit = 'orderDaysInTransit_example'; // string | 
$orderReviewTotalScore = 'orderReviewTotalScore_example'; // string | 
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
$id = 56; // int | 
$id2 = array(56); // int[] | 
$trackingNumber = 'trackingNumber_example'; // string | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
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
$externalSyncId = 'externalSyncId_example'; // string | 
$externalSyncId2 = array('externalSyncId_example'); // string[] | 
$externalSource = 'externalSource_example'; // string | 
$externalSource2 = array('externalSource_example'); // string[] | 
$id2 = 56; // int | 
$id2 = array(56); // int[] | 
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
    $result = $apiInstance->getShipmentCollection($orderId, $orderTrackingNumber, $orderStatus, $orderOriginCarrier, $orderDestinationCarrier, $orderCreatedAt, $orderUpdatedAt, $orderShippedAt, $orderLastStatusUpdate, $orderExpectedDeliveryDate, $orderOriginCountry, $orderDestinationCountry, $orderOriginCountryIso2, $orderDestinationCountryIso2, $orderEmail, $orderDaysInTransit, $orderReviewTotalScore, $orderNumbers, $orderNumbers2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $shippedAtBefore, $shippedAtStrictlyBefore, $shippedAtAfter, $shippedAtStrictlyAfter, $lastStatusUpdateBefore, $lastStatusUpdateStrictlyBefore, $lastStatusUpdateAfter, $lastStatusUpdateStrictlyAfter, $expectedDeliveryDateBefore, $expectedDeliveryDateStrictlyBefore, $expectedDeliveryDateAfter, $expectedDeliveryDateStrictlyAfter, $id, $id2, $trackingNumber, $status, $status2, $originCarrier, $originCarrier2, $destinationCarrier, $destinationCarrier2, $originCountry, $originCountryIso2, $originCountryIso3, $destinationCountry, $destinationCountryIso2, $destinationCountryIso3, $email, $externalSyncId, $externalSyncId2, $externalSource, $externalSource2, $id2, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte, $page, $itemsPerPage);
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
 **orderStatus** | **string**|  | [optional]
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
 **orderDaysInTransit** | **string**|  | [optional]
 **orderReviewTotalScore** | **string**|  | [optional]
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
 **id** | **int**|  | [optional]
 **id2** | [**int[]**](../Model/int.md)|  | [optional]
 **trackingNumber** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
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
 **externalSyncId** | **string**|  | [optional]
 **externalSyncId2** | [**string[]**](../Model/string.md)|  | [optional]
 **externalSource** | **string**|  | [optional]
 **externalSource2** | [**string[]**](../Model/string.md)|  | [optional]
 **id2** | **int**|  | [optional]
 **id2** | [**int[]**](../Model/int.md)|  | [optional]
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

[**\TrackMage\Client\Swagger\Model\ShipmentGetShipmentsGetAddress[]**](../Model/ShipmentGetShipmentsGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getShipmentItem

> \TrackMage\Client\Swagger\Model\ShipmentGetShipmentGetShipmentMetaGetAddress getShipmentItem($id)

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

[**\TrackMage\Client\Swagger\Model\ShipmentGetShipmentGetShipmentMetaGetAddress**](../Model/ShipmentGetShipmentGetShipmentMetaGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postShipmentCollection

> \TrackMage\Client\Swagger\Model\ShipmentGetShipmentGetShipmentMetaGetAddress postShipmentCollection($shipment)

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
$shipment = new \TrackMage\Client\Swagger\Model\ShipmentPostShipmentSetShipmentMetaSetAddress(); // \TrackMage\Client\Swagger\Model\ShipmentPostShipmentSetShipmentMetaSetAddress | The new Shipment resource

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
 **shipment** | [**\TrackMage\Client\Swagger\Model\ShipmentPostShipmentSetShipmentMetaSetAddress**](../Model/ShipmentPostShipmentSetShipmentMetaSetAddress.md)| The new Shipment resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentGetShipmentGetShipmentMetaGetAddress**](../Model/ShipmentGetShipmentGetShipmentMetaGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putShipmentItem

> \TrackMage\Client\Swagger\Model\ShipmentGetShipmentGetShipmentMetaGetAddress putShipmentItem($id, $shipment)

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
$shipment = new \TrackMage\Client\Swagger\Model\ShipmentPutShipmentSetShipmentMetaSetAddress(); // \TrackMage\Client\Swagger\Model\ShipmentPutShipmentSetShipmentMetaSetAddress | The updated Shipment resource

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
 **shipment** | [**\TrackMage\Client\Swagger\Model\ShipmentPutShipmentSetShipmentMetaSetAddress**](../Model/ShipmentPutShipmentSetShipmentMetaSetAddress.md)| The updated Shipment resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ShipmentGetShipmentGetShipmentMetaGetAddress**](../Model/ShipmentGetShipmentGetShipmentMetaGetAddress.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

