# TrackMage\Client\Swagger\WorkflowRunApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesWorkflowsRunsGetSubresource**](WorkflowRunApi.md#apiTeamsWorkspacesWorkflowsRunsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/workflows/{workflows}/runs | Retrieves the collection of WorkflowRun resources.
[**apiWorkflowsRunsGetSubresource**](WorkflowRunApi.md#apiWorkflowsRunsGetSubresource) | **GET** /workflows/{id}/runs | Retrieves the collection of WorkflowRun resources.
[**apiWorkspacesWorkflowsRunsGetSubresource**](WorkflowRunApi.md#apiWorkspacesWorkflowsRunsGetSubresource) | **GET** /workspaces/{id}/workflows/{workflows}/runs | Retrieves the collection of WorkflowRun resources.
[**getWorkflowRunCollection**](WorkflowRunApi.md#getWorkflowRunCollection) | **GET** /workflow_runs | Retrieves the collection of WorkflowRun resources.
[**getWorkflowRunItem**](WorkflowRunApi.md#getWorkflowRunItem) | **GET** /workflow_runs/{id} | Retrieves a WorkflowRun resource.



## apiTeamsWorkspacesWorkflowsRunsGetSubresource

> \TrackMage\Client\Swagger\Model\WorkflowRunGetWorkflowRun[] apiTeamsWorkspacesWorkflowsRunsGetSubresource($id, $workspaces, $workflows, $status, $status2, $orderCreatedAt)

Retrieves the collection of WorkflowRun resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaces = 'workspaces_example'; // string | 
$workflows = 'workflows_example'; // string | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 

try {
    $result = $apiInstance->apiTeamsWorkspacesWorkflowsRunsGetSubresource($id, $workspaces, $workflows, $status, $status2, $orderCreatedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowRunApi->apiTeamsWorkspacesWorkflowsRunsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaces** | **string**|  |
 **workflows** | **string**|  |
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowRunGetWorkflowRun[]**](../Model/WorkflowRunGetWorkflowRun.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkflowsRunsGetSubresource

> \TrackMage\Client\Swagger\Model\WorkflowRunGetWorkflowRun[] apiWorkflowsRunsGetSubresource($id, $status, $status2, $orderCreatedAt)

Retrieves the collection of WorkflowRun resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 

try {
    $result = $apiInstance->apiWorkflowsRunsGetSubresource($id, $status, $status2, $orderCreatedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowRunApi->apiWorkflowsRunsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowRunGetWorkflowRun[]**](../Model/WorkflowRunGetWorkflowRun.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiWorkspacesWorkflowsRunsGetSubresource

> \TrackMage\Client\Swagger\Model\WorkflowRunGetWorkflowRun[] apiWorkspacesWorkflowsRunsGetSubresource($id, $workflows, $status, $status2, $orderCreatedAt)

Retrieves the collection of WorkflowRun resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workflows = 'workflows_example'; // string | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 

try {
    $result = $apiInstance->apiWorkspacesWorkflowsRunsGetSubresource($id, $workflows, $status, $status2, $orderCreatedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowRunApi->apiWorkspacesWorkflowsRunsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workflows** | **string**|  |
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowRunGetWorkflowRun[]**](../Model/WorkflowRunGetWorkflowRun.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWorkflowRunCollection

> \TrackMage\Client\Swagger\Model\WorkflowRunGetWorkflowRuns[] getWorkflowRunCollection($status, $status2, $orderCreatedAt, $page, $itemsPerPage)

Retrieves the collection of WorkflowRun resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getWorkflowRunCollection($status, $status2, $orderCreatedAt, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowRunApi->getWorkflowRunCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**|  | [optional]
 **status2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowRunGetWorkflowRuns[]**](../Model/WorkflowRunGetWorkflowRuns.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWorkflowRunItem

> \TrackMage\Client\Swagger\Model\WorkflowRunGetWorkflowRun getWorkflowRunItem($id)

Retrieves a WorkflowRun resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getWorkflowRunItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowRunApi->getWorkflowRunItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowRunGetWorkflowRun**](../Model/WorkflowRunGetWorkflowRun.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

