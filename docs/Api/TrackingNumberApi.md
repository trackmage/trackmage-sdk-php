# TrackMage\Client\Swagger\TrackingNumberApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesTrackingNumbersCheckpointsGetSubresource**](TrackingNumberApi.md#apiTeamsWorkspacesTrackingNumbersCheckpointsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/tracking_numbers/{trackingNumbers}/checkpoints | Retrieves the collection of TrackingCheckpoint resources.
[**apiTeamsWorkspacesTrackingNumbersGetSubresource**](TrackingNumberApi.md#apiTeamsWorkspacesTrackingNumbersGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/tracking_numbers | Retrieves the collection of TrackingNumber resources.
[**apiTrackingNumbersCheckpointsGetSubresource**](TrackingNumberApi.md#apiTrackingNumbersCheckpointsGetSubresource) | **GET** /tracking_numbers/{id}/checkpoints | Retrieves the collection of TrackingCheckpoint resources.
[**apiWorkspacesTrackingNumbersCheckpointsGetSubresource**](TrackingNumberApi.md#apiWorkspacesTrackingNumbersCheckpointsGetSubresource) | **GET** /workspaces/{id}/tracking_numbers/{trackingNumbers}/checkpoints | Retrieves the collection of TrackingCheckpoint resources.
[**apiWorkspacesTrackingNumbersGetSubresource**](TrackingNumberApi.md#apiWorkspacesTrackingNumbersGetSubresource) | **GET** /workspaces/{id}/tracking_numbers | Retrieves the collection of TrackingNumber resources.
[**getTrackingNumberCollection**](TrackingNumberApi.md#getTrackingNumberCollection) | **GET** /tracking_numbers | Retrieves the collection of TrackingNumber resources.
[**getTrackingNumberItem**](TrackingNumberApi.md#getTrackingNumberItem) | **GET** /tracking_numbers/{id} | Retrieves a TrackingNumber resource.
[**postTrackingNumberCollection**](TrackingNumberApi.md#postTrackingNumberCollection) | **POST** /tracking_numbers | Creates a TrackingNumber resource.
[**putTrackingNumberItem**](TrackingNumberApi.md#putTrackingNumberItem) | **PUT** /tracking_numbers/{id} | Replaces the TrackingNumber resource.



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


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberApi(
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
    echo 'Exception when calling TrackingNumberApi->apiTeamsWorkspacesTrackingNumbersCheckpointsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiTeamsWorkspacesTrackingNumbersGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumberGetTrackingNumberMeta[] apiTeamsWorkspacesTrackingNumbersGetSubresource($id, $workspaces, $orderTrackingNumber, $orderStatus, $orderCarrier, $orderCreatedAt, $orderUpdatedAt, $orderSentFrom, $orderSentTo, $orderEmail, $orderOrderId, $orderDaysInTransit, $orderReviewTotalScore, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $trackingNumber, $status, $status2, $carrier, $carrier2, $sentFrom, $sentTo, $email, $orderId, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte)

Retrieves the collection of TrackingNumber resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$orderTrackingNumber = 'orderTrackingNumber_example'; // string | 
$orderStatus = 'orderStatus_example'; // string | 
$orderCarrier = 'orderCarrier_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$orderSentFrom = 'orderSentFrom_example'; // string | 
$orderSentTo = 'orderSentTo_example'; // string | 
$orderEmail = 'orderEmail_example'; // string | 
$orderOrderId = 'orderOrderId_example'; // string | 
$orderDaysInTransit = 'orderDaysInTransit_example'; // string | 
$orderReviewTotalScore = 'orderReviewTotalScore_example'; // string | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$updatedAtBefore = 'updatedAtBefore_example'; // string | 
$updatedAtStrictlyBefore = 'updatedAtStrictlyBefore_example'; // string | 
$updatedAtAfter = 'updatedAtAfter_example'; // string | 
$updatedAtStrictlyAfter = 'updatedAtStrictlyAfter_example'; // string | 
$trackingNumber = 'trackingNumber_example'; // string | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$carrier = 'carrier_example'; // string | 
$carrier2 = array('carrier_example'); // string[] | 
$sentFrom = 'sentFrom_example'; // string | 
$sentTo = 'sentTo_example'; // string | 
$email = 'email_example'; // string | 
$orderId = 'orderId_example'; // string | 
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
    $result = $apiInstance->apiTeamsWorkspacesTrackingNumbersGetSubresource($id, $workspaces, $orderTrackingNumber, $orderStatus, $orderCarrier, $orderCreatedAt, $orderUpdatedAt, $orderSentFrom, $orderSentTo, $orderEmail, $orderOrderId, $orderDaysInTransit, $orderReviewTotalScore, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $trackingNumber, $status, $status2, $carrier, $carrier2, $sentFrom, $sentTo, $email, $orderId, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberApi->apiTeamsWorkspacesTrackingNumbersGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **orderTrackingNumber** | **string**|  | [optional]
 **orderStatus** | **string**|  | [optional]
 **orderCarrier** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **orderSentFrom** | **string**|  | [optional]
 **orderSentTo** | **string**|  | [optional]
 **orderEmail** | **string**|  | [optional]
 **orderOrderId** | **string**|  | [optional]
 **orderDaysInTransit** | **string**|  | [optional]
 **orderReviewTotalScore** | **string**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtStrictlyBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **createdAtStrictlyAfter** | **string**|  | [optional]
 **updatedAtBefore** | **string**|  | [optional]
 **updatedAtStrictlyBefore** | **string**|  | [optional]
 **updatedAtAfter** | **string**|  | [optional]
 **updatedAtStrictlyAfter** | **string**|  | [optional]
 **trackingNumber** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
 **carrier** | **string**|  | [optional]
 **carrier2** | [**string[]**](../Model/string.md)|  | [optional]
 **sentFrom** | **string**|  | [optional]
 **sentTo** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
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

[**\TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumberGetTrackingNumberMeta[]**](../Model/TrackingNumberGetTrackingNumberGetTrackingNumberMeta.md)

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


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberApi(
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
    echo 'Exception when calling TrackingNumberApi->apiTrackingNumbersCheckpointsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberApi(
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
    echo 'Exception when calling TrackingNumberApi->apiWorkspacesTrackingNumbersCheckpointsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiWorkspacesTrackingNumbersGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumberGetTrackingNumberMeta[] apiWorkspacesTrackingNumbersGetSubresource($id, $orderTrackingNumber, $orderStatus, $orderCarrier, $orderCreatedAt, $orderUpdatedAt, $orderSentFrom, $orderSentTo, $orderEmail, $orderOrderId, $orderDaysInTransit, $orderReviewTotalScore, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $trackingNumber, $status, $status2, $carrier, $carrier2, $sentFrom, $sentTo, $email, $orderId, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte)

Retrieves the collection of TrackingNumber resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orderTrackingNumber = 'orderTrackingNumber_example'; // string | 
$orderStatus = 'orderStatus_example'; // string | 
$orderCarrier = 'orderCarrier_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$orderSentFrom = 'orderSentFrom_example'; // string | 
$orderSentTo = 'orderSentTo_example'; // string | 
$orderEmail = 'orderEmail_example'; // string | 
$orderOrderId = 'orderOrderId_example'; // string | 
$orderDaysInTransit = 'orderDaysInTransit_example'; // string | 
$orderReviewTotalScore = 'orderReviewTotalScore_example'; // string | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$updatedAtBefore = 'updatedAtBefore_example'; // string | 
$updatedAtStrictlyBefore = 'updatedAtStrictlyBefore_example'; // string | 
$updatedAtAfter = 'updatedAtAfter_example'; // string | 
$updatedAtStrictlyAfter = 'updatedAtStrictlyAfter_example'; // string | 
$trackingNumber = 'trackingNumber_example'; // string | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$carrier = 'carrier_example'; // string | 
$carrier2 = array('carrier_example'); // string[] | 
$sentFrom = 'sentFrom_example'; // string | 
$sentTo = 'sentTo_example'; // string | 
$email = 'email_example'; // string | 
$orderId = 'orderId_example'; // string | 
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
    $result = $apiInstance->apiWorkspacesTrackingNumbersGetSubresource($id, $orderTrackingNumber, $orderStatus, $orderCarrier, $orderCreatedAt, $orderUpdatedAt, $orderSentFrom, $orderSentTo, $orderEmail, $orderOrderId, $orderDaysInTransit, $orderReviewTotalScore, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $trackingNumber, $status, $status2, $carrier, $carrier2, $sentFrom, $sentTo, $email, $orderId, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberApi->apiWorkspacesTrackingNumbersGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **orderTrackingNumber** | **string**|  | [optional]
 **orderStatus** | **string**|  | [optional]
 **orderCarrier** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **orderSentFrom** | **string**|  | [optional]
 **orderSentTo** | **string**|  | [optional]
 **orderEmail** | **string**|  | [optional]
 **orderOrderId** | **string**|  | [optional]
 **orderDaysInTransit** | **string**|  | [optional]
 **orderReviewTotalScore** | **string**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtStrictlyBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **createdAtStrictlyAfter** | **string**|  | [optional]
 **updatedAtBefore** | **string**|  | [optional]
 **updatedAtStrictlyBefore** | **string**|  | [optional]
 **updatedAtAfter** | **string**|  | [optional]
 **updatedAtStrictlyAfter** | **string**|  | [optional]
 **trackingNumber** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
 **carrier** | **string**|  | [optional]
 **carrier2** | [**string[]**](../Model/string.md)|  | [optional]
 **sentFrom** | **string**|  | [optional]
 **sentTo** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
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

[**\TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumberGetTrackingNumberMeta[]**](../Model/TrackingNumberGetTrackingNumberGetTrackingNumberMeta.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrackingNumberCollection

> \TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumbers[] getTrackingNumberCollection($orderTrackingNumber, $orderStatus, $orderCarrier, $orderCreatedAt, $orderUpdatedAt, $orderSentFrom, $orderSentTo, $orderEmail, $orderOrderId, $orderDaysInTransit, $orderReviewTotalScore, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $trackingNumber, $status, $status2, $carrier, $carrier2, $sentFrom, $sentTo, $email, $orderId, $id, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte, $page, $itemsPerPage)

Retrieves the collection of TrackingNumber resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderTrackingNumber = 'orderTrackingNumber_example'; // string | 
$orderStatus = 'orderStatus_example'; // string | 
$orderCarrier = 'orderCarrier_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$orderSentFrom = 'orderSentFrom_example'; // string | 
$orderSentTo = 'orderSentTo_example'; // string | 
$orderEmail = 'orderEmail_example'; // string | 
$orderOrderId = 'orderOrderId_example'; // string | 
$orderDaysInTransit = 'orderDaysInTransit_example'; // string | 
$orderReviewTotalScore = 'orderReviewTotalScore_example'; // string | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$updatedAtBefore = 'updatedAtBefore_example'; // string | 
$updatedAtStrictlyBefore = 'updatedAtStrictlyBefore_example'; // string | 
$updatedAtAfter = 'updatedAtAfter_example'; // string | 
$updatedAtStrictlyAfter = 'updatedAtStrictlyAfter_example'; // string | 
$trackingNumber = 'trackingNumber_example'; // string | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$carrier = 'carrier_example'; // string | 
$carrier2 = array('carrier_example'); // string[] | 
$sentFrom = 'sentFrom_example'; // string | 
$sentTo = 'sentTo_example'; // string | 
$email = 'email_example'; // string | 
$orderId = 'orderId_example'; // string | 
$id = 56; // int | 
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
    $result = $apiInstance->getTrackingNumberCollection($orderTrackingNumber, $orderStatus, $orderCarrier, $orderCreatedAt, $orderUpdatedAt, $orderSentFrom, $orderSentTo, $orderEmail, $orderOrderId, $orderDaysInTransit, $orderReviewTotalScore, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $trackingNumber, $status, $status2, $carrier, $carrier2, $sentFrom, $sentTo, $email, $orderId, $id, $id2, $daysInTransit, $daysInTransit2, $daysInTransitBetween, $daysInTransitGt, $daysInTransitGte, $daysInTransitLt, $daysInTransitLte, $reviewTotalScoreBetween, $reviewTotalScoreGt, $reviewTotalScoreGte, $reviewTotalScoreLt, $reviewTotalScoreLte, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberApi->getTrackingNumberCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderTrackingNumber** | **string**|  | [optional]
 **orderStatus** | **string**|  | [optional]
 **orderCarrier** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **orderSentFrom** | **string**|  | [optional]
 **orderSentTo** | **string**|  | [optional]
 **orderEmail** | **string**|  | [optional]
 **orderOrderId** | **string**|  | [optional]
 **orderDaysInTransit** | **string**|  | [optional]
 **orderReviewTotalScore** | **string**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtStrictlyBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **createdAtStrictlyAfter** | **string**|  | [optional]
 **updatedAtBefore** | **string**|  | [optional]
 **updatedAtStrictlyBefore** | **string**|  | [optional]
 **updatedAtAfter** | **string**|  | [optional]
 **updatedAtStrictlyAfter** | **string**|  | [optional]
 **trackingNumber** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
 **carrier** | **string**|  | [optional]
 **carrier2** | [**string[]**](../Model/string.md)|  | [optional]
 **sentFrom** | **string**|  | [optional]
 **sentTo** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **id** | **int**|  | [optional]
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

[**\TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumbers[]**](../Model/TrackingNumberGetTrackingNumbers.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrackingNumberItem

> \TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumberGetTrackingNumberMeta getTrackingNumberItem($id)

Retrieves a TrackingNumber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getTrackingNumberItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberApi->getTrackingNumberItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumberGetTrackingNumberMeta**](../Model/TrackingNumberGetTrackingNumberGetTrackingNumberMeta.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postTrackingNumberCollection

> \TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumberGetTrackingNumberMeta postTrackingNumberCollection($trackingNumber)

Creates a TrackingNumber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trackingNumber = new \TrackMage\Client\Swagger\Model\TrackingNumberPostTrackingNumberSetTrackingNumberMeta(); // \TrackMage\Client\Swagger\Model\TrackingNumberPostTrackingNumberSetTrackingNumberMeta | The new TrackingNumber resource

try {
    $result = $apiInstance->postTrackingNumberCollection($trackingNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberApi->postTrackingNumberCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingNumber** | [**\TrackMage\Client\Swagger\Model\TrackingNumberPostTrackingNumberSetTrackingNumberMeta**](../Model/TrackingNumberPostTrackingNumberSetTrackingNumberMeta.md)| The new TrackingNumber resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumberGetTrackingNumberMeta**](../Model/TrackingNumberGetTrackingNumberGetTrackingNumberMeta.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putTrackingNumberItem

> \TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumberGetTrackingNumberMeta putTrackingNumberItem($id, $trackingNumber)

Replaces the TrackingNumber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$trackingNumber = new \TrackMage\Client\Swagger\Model\TrackingNumberPutTrackingNumberSetTrackingNumberMeta(); // \TrackMage\Client\Swagger\Model\TrackingNumberPutTrackingNumberSetTrackingNumberMeta | The updated TrackingNumber resource

try {
    $result = $apiInstance->putTrackingNumberItem($id, $trackingNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingNumberApi->putTrackingNumberItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **trackingNumber** | [**\TrackMage\Client\Swagger\Model\TrackingNumberPutTrackingNumberSetTrackingNumberMeta**](../Model/TrackingNumberPutTrackingNumberSetTrackingNumberMeta.md)| The updated TrackingNumber resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingNumberGetTrackingNumberGetTrackingNumberMeta**](../Model/TrackingNumberGetTrackingNumberGetTrackingNumberMeta.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

