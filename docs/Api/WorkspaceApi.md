# TrackMage\Client\Swagger\WorkspaceApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesFieldsGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesFieldsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/fields | Retrieves the collection of TrackingNumberField resources.
[**apiTeamsWorkspacesGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesGetSubresource) | **GET** /teams/{id}/workspaces | Retrieves the collection of Workspace resources.
[**apiTeamsWorkspacesTrackingNumbersGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesTrackingNumbersGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/tracking_numbers | Retrieves the collection of TrackingNumber resources.
[**apiTeamsWorkspacesTrackingPageLinkSettingsGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesTrackingPageLinkSettingsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/tracking_page_link_settings | Retrieves the collection of TrackingPageLinkSettings resources.
[**apiTeamsWorkspacesTrackingPagesGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesTrackingPagesGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/tracking_pages | Retrieves the collection of TrackingPage resources.
[**apiTeamsWorkspacesWorkflowsGetSubresource**](WorkspaceApi.md#apiTeamsWorkspacesWorkflowsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/workflows | Retrieves the collection of Workflow resources.
[**apiWorkspacesFieldsGetSubresource**](WorkspaceApi.md#apiWorkspacesFieldsGetSubresource) | **GET** /workspaces/{id}/fields | Retrieves the collection of TrackingNumberField resources.
[**apiWorkspacesTrackingNumbersGetSubresource**](WorkspaceApi.md#apiWorkspacesTrackingNumbersGetSubresource) | **GET** /workspaces/{id}/tracking_numbers | Retrieves the collection of TrackingNumber resources.
[**apiWorkspacesTrackingPageLinkSettingsGetSubresource**](WorkspaceApi.md#apiWorkspacesTrackingPageLinkSettingsGetSubresource) | **GET** /workspaces/{id}/tracking_page_link_settings | Retrieves the collection of TrackingPageLinkSettings resources.
[**apiWorkspacesTrackingPagesGetSubresource**](WorkspaceApi.md#apiWorkspacesTrackingPagesGetSubresource) | **GET** /workspaces/{id}/tracking_pages | Retrieves the collection of TrackingPage resources.
[**apiWorkspacesWorkflowsGetSubresource**](WorkspaceApi.md#apiWorkspacesWorkflowsGetSubresource) | **GET** /workspaces/{id}/workflows | Retrieves the collection of Workflow resources.
[**deleteWorkspaceItem**](WorkspaceApi.md#deleteWorkspaceItem) | **DELETE** /workspaces/{id} | Removes the Workspace resource.
[**getWorkspaceCollection**](WorkspaceApi.md#getWorkspaceCollection) | **GET** /workspaces | Retrieves the collection of Workspace resources.
[**getWorkspaceItem**](WorkspaceApi.md#getWorkspaceItem) | **GET** /workspaces/{id} | Retrieves a Workspace resource.
[**postWorkspaceCollection**](WorkspaceApi.md#postWorkspaceCollection) | **POST** /workspaces | Creates a Workspace resource.
[**putWorkspaceItem**](WorkspaceApi.md#putWorkspaceItem) | **PUT** /workspaces/{id} | Replaces the Workspace resource.



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


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
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
    echo 'Exception when calling WorkspaceApi->apiTeamsWorkspacesFieldsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiTeamsWorkspacesGetSubresource

> \TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShort[] apiTeamsWorkspacesGetSubresource($id, $orderCreatedAt)

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

try {
    $result = $apiInstance->apiTeamsWorkspacesGetSubresource($id, $orderCreatedAt);
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

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShort[]**](../Model/WorkspaceGetWorkspaceGetMediaShort.md)

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


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
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
    echo 'Exception when calling WorkspaceApi->apiTeamsWorkspacesTrackingNumbersGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiTeamsWorkspacesTrackingPageLinkSettingsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsGetTrackingPageLinkSettings[] apiTeamsWorkspacesTrackingPageLinkSettingsGetSubresource($id, $workspaces)

Retrieves the collection of TrackingPageLinkSettings resources.

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

try {
    $result = $apiInstance->apiTeamsWorkspacesTrackingPageLinkSettingsGetSubresource($id, $workspaces);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->apiTeamsWorkspacesTrackingPageLinkSettingsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsGetTrackingPageLinkSettings[]**](../Model/TrackingPageLinkSettingsGetTrackingPageLinkSettings.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesTrackingPagesGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPageGetBuilder[] apiTeamsWorkspacesTrackingPagesGetSubresource($id, $workspaces)

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

try {
    $result = $apiInstance->apiTeamsWorkspacesTrackingPagesGetSubresource($id, $workspaces);
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

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPageGetBuilder[]**](../Model/TrackingPageGetTrackingPageGetBuilder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesWorkflowsGetSubresource

> \TrackMage\Client\Swagger\Model\WorkflowGetWorkflow[] apiTeamsWorkspacesWorkflowsGetSubresource($id, $workspaces, $direction, $direction2, $orderCreatedAt)

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
$direction = 'direction_example'; // string | 
$direction2 = array('direction_example'); // string[] | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 

try {
    $result = $apiInstance->apiTeamsWorkspacesWorkflowsGetSubresource($id, $workspaces, $direction, $direction2, $orderCreatedAt);
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
 **direction** | **string**|  | [optional]
 **direction2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowGetWorkflow[]**](../Model/WorkflowGetWorkflow.md)

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


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
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
    echo 'Exception when calling WorkspaceApi->apiWorkspacesFieldsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceApi(
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
    echo 'Exception when calling WorkspaceApi->apiWorkspacesTrackingNumbersGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiWorkspacesTrackingPageLinkSettingsGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsGetTrackingPageLinkSettings[] apiWorkspacesTrackingPageLinkSettingsGetSubresource($id)

Retrieves the collection of TrackingPageLinkSettings resources.

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
    $result = $apiInstance->apiWorkspacesTrackingPageLinkSettingsGetSubresource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->apiWorkspacesTrackingPageLinkSettingsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsGetTrackingPageLinkSettings[]**](../Model/TrackingPageLinkSettingsGetTrackingPageLinkSettings.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesTrackingPagesGetSubresource

> \TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPageGetBuilder[] apiWorkspacesTrackingPagesGetSubresource($id)

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

try {
    $result = $apiInstance->apiWorkspacesTrackingPagesGetSubresource($id);
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

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPageGetBuilder[]**](../Model/TrackingPageGetTrackingPageGetBuilder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesWorkflowsGetSubresource

> \TrackMage\Client\Swagger\Model\WorkflowGetWorkflow[] apiWorkspacesWorkflowsGetSubresource($id, $direction, $direction2, $orderCreatedAt)

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
$direction = 'direction_example'; // string | 
$direction2 = array('direction_example'); // string[] | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 

try {
    $result = $apiInstance->apiWorkspacesWorkflowsGetSubresource($id, $direction, $direction2, $orderCreatedAt);
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
 **direction** | **string**|  | [optional]
 **direction2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowGetWorkflow[]**](../Model/WorkflowGetWorkflow.md)

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

> \TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShort[] getWorkspaceCollection($orderCreatedAt, $page, $itemsPerPage)

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

[**\TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShort[]**](../Model/WorkspaceGetWorkspaceGetMediaShort.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWorkspaceItem

> \TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShort getWorkspaceItem($id)

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

[**\TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShort**](../Model/WorkspaceGetWorkspaceGetMediaShort.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postWorkspaceCollection

> \TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShortGetTeam postWorkspaceCollection($workspace)

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
$workspace = new \TrackMage\Client\Swagger\Model\WorkspacePostWorkspaceSetTeamSetTrackingPageNoWs(); // \TrackMage\Client\Swagger\Model\WorkspacePostWorkspaceSetTeamSetTrackingPageNoWs | The new Workspace resource

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
 **workspace** | [**\TrackMage\Client\Swagger\Model\WorkspacePostWorkspaceSetTeamSetTrackingPageNoWs**](../Model/WorkspacePostWorkspaceSetTeamSetTrackingPageNoWs.md)| The new Workspace resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShortGetTeam**](../Model/WorkspaceGetWorkspaceGetMediaShortGetTeam.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putWorkspaceItem

> \TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShort putWorkspaceItem($id, $workspace)

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
$workspace = new \TrackMage\Client\Swagger\Model\WorkspacePutWorkspaceSetTrackingPageNoWs(); // \TrackMage\Client\Swagger\Model\WorkspacePutWorkspaceSetTrackingPageNoWs | The updated Workspace resource

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
 **workspace** | [**\TrackMage\Client\Swagger\Model\WorkspacePutWorkspaceSetTrackingPageNoWs**](../Model/WorkspacePutWorkspaceSetTrackingPageNoWs.md)| The updated Workspace resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShort**](../Model/WorkspaceGetWorkspaceGetMediaShort.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

