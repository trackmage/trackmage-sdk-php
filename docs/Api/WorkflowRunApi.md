# TrackMage\Client\Swagger\WorkflowRunApi

All URIs are relative to *https://api.l.trackmage.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesWorkflowsRunsGetSubresource**](WorkflowRunApi.md#apiTeamsWorkspacesWorkflowsRunsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/workflows/{workflows}/runs | Retrieves the collection of WorkflowRun resources.



## apiTeamsWorkspacesWorkflowsRunsGetSubresource

> \TrackMage\Client\Swagger\Model\WorkflowRun[] apiTeamsWorkspacesWorkflowsRunsGetSubresource($id, $workspaces, $workflows, $status, $status2, $orderCreatedAt, $page, $itemsPerPage)

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
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiTeamsWorkspacesWorkflowsRunsGetSubresource($id, $workspaces, $workflows, $status, $status2, $orderCreatedAt, $page, $itemsPerPage);
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
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowRun[]**](../Model/WorkflowRun.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

