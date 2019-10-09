# TrackMage\Client\Swagger\WorkflowApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesWorkflowsGetSubresource**](WorkflowApi.md#apiTeamsWorkspacesWorkflowsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/workflows | Retrieves the collection of Workflow resources.
[**apiTeamsWorkspacesWorkflowsRunsGetSubresource**](WorkflowApi.md#apiTeamsWorkspacesWorkflowsRunsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/workflows/{workflows}/runs | Retrieves the collection of WorkflowRun resources.
[**apiWorkflowsRunsGetSubresource**](WorkflowApi.md#apiWorkflowsRunsGetSubresource) | **GET** /workflows/{id}/runs | Retrieves the collection of WorkflowRun resources.
[**apiWorkspacesWorkflowsGetSubresource**](WorkflowApi.md#apiWorkspacesWorkflowsGetSubresource) | **GET** /workspaces/{id}/workflows | Retrieves the collection of Workflow resources.
[**apiWorkspacesWorkflowsRunsGetSubresource**](WorkflowApi.md#apiWorkspacesWorkflowsRunsGetSubresource) | **GET** /workspaces/{id}/workflows/{workflows}/runs | Retrieves the collection of WorkflowRun resources.
[**deleteWorkflowItem**](WorkflowApi.md#deleteWorkflowItem) | **DELETE** /workflows/{id} | Removes the Workflow resource.
[**getWorkflowCollection**](WorkflowApi.md#getWorkflowCollection) | **GET** /workflows | Retrieves the collection of Workflow resources.
[**getWorkflowItem**](WorkflowApi.md#getWorkflowItem) | **GET** /workflows/{id} | Retrieves a Workflow resource.
[**postWorkflowCollection**](WorkflowApi.md#postWorkflowCollection) | **POST** /workflows | Creates a Workflow resource.
[**putWorkflowItem**](WorkflowApi.md#putWorkflowItem) | **PUT** /workflows/{id} | Replaces the Workflow resource.



## apiTeamsWorkspacesWorkflowsGetSubresource

> \TrackMage\Client\Swagger\Model\WorkflowGetWorkflowGetWorkflowMeta[] apiTeamsWorkspacesWorkflowsGetSubresource($id, $workspaces, $type, $type2, $period, $period2, $orderCreatedAt)

Retrieves the collection of Workflow resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowApi(
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
$orderCreatedAt = 'orderCreatedAt_example'; // string | 

try {
    $result = $apiInstance->apiTeamsWorkspacesWorkflowsGetSubresource($id, $workspaces, $type, $type2, $period, $period2, $orderCreatedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->apiTeamsWorkspacesWorkflowsGetSubresource: ', $e->getMessage(), PHP_EOL;
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
 **orderCreatedAt** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowGetWorkflowGetWorkflowMeta[]**](../Model/WorkflowGetWorkflowGetWorkflowMeta.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


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


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowApi(
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
    echo 'Exception when calling WorkflowApi->apiTeamsWorkspacesWorkflowsRunsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowApi(
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
    echo 'Exception when calling WorkflowApi->apiWorkflowsRunsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiWorkspacesWorkflowsGetSubresource

> \TrackMage\Client\Swagger\Model\WorkflowGetWorkflowGetWorkflowMeta[] apiWorkspacesWorkflowsGetSubresource($id, $type, $type2, $period, $period2, $orderCreatedAt)

Retrieves the collection of Workflow resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowApi(
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
$orderCreatedAt = 'orderCreatedAt_example'; // string | 

try {
    $result = $apiInstance->apiWorkspacesWorkflowsGetSubresource($id, $type, $type2, $period, $period2, $orderCreatedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->apiWorkspacesWorkflowsGetSubresource: ', $e->getMessage(), PHP_EOL;
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
 **orderCreatedAt** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowGetWorkflowGetWorkflowMeta[]**](../Model/WorkflowGetWorkflowGetWorkflowMeta.md)

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


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowApi(
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
    echo 'Exception when calling WorkflowApi->apiWorkspacesWorkflowsRunsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## deleteWorkflowItem

> deleteWorkflowItem($id)

Removes the Workflow resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteWorkflowItem($id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->deleteWorkflowItem: ', $e->getMessage(), PHP_EOL;
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


## getWorkflowCollection

> \TrackMage\Client\Swagger\Model\WorkflowGetWorkflowsGetWorkflowMeta[] getWorkflowCollection($type, $type2, $period, $period2, $orderCreatedAt, $page, $itemsPerPage)

Retrieves the collection of Workflow resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$period = 'period_example'; // string | 
$period2 = array('period_example'); // string[] | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getWorkflowCollection($type, $type2, $period, $period2, $orderCreatedAt, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->getWorkflowCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  | [optional]
 **type2** | [**string[]**](../Model/string.md)|  | [optional]
 **period** | **string**|  | [optional]
 **period2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowGetWorkflowsGetWorkflowMeta[]**](../Model/WorkflowGetWorkflowsGetWorkflowMeta.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWorkflowItem

> \TrackMage\Client\Swagger\Model\WorkflowGetWorkflowGetWorkflowMeta getWorkflowItem($id)

Retrieves a Workflow resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getWorkflowItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->getWorkflowItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowGetWorkflowGetWorkflowMeta**](../Model/WorkflowGetWorkflowGetWorkflowMeta.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postWorkflowCollection

> \TrackMage\Client\Swagger\Model\WorkflowGetWorkflowGetWorkflowMeta postWorkflowCollection($workflow)

Creates a Workflow resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow = new \TrackMage\Client\Swagger\Model\WorkflowSetWorkflowSetWorkflowMetaSetIntegration(); // \TrackMage\Client\Swagger\Model\WorkflowSetWorkflowSetWorkflowMetaSetIntegration | The new Workflow resource

try {
    $result = $apiInstance->postWorkflowCollection($workflow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->postWorkflowCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workflow** | [**\TrackMage\Client\Swagger\Model\WorkflowSetWorkflowSetWorkflowMetaSetIntegration**](../Model/WorkflowSetWorkflowSetWorkflowMetaSetIntegration.md)| The new Workflow resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowGetWorkflowGetWorkflowMeta**](../Model/WorkflowGetWorkflowGetWorkflowMeta.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putWorkflowItem

> \TrackMage\Client\Swagger\Model\WorkflowGetWorkflowGetWorkflowMeta putWorkflowItem($id, $workflow)

Replaces the Workflow resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workflow = new \TrackMage\Client\Swagger\Model\WorkflowSetWorkflowSetWorkflowMetaSetIntegration(); // \TrackMage\Client\Swagger\Model\WorkflowSetWorkflowSetWorkflowMetaSetIntegration | The updated Workflow resource

try {
    $result = $apiInstance->putWorkflowItem($id, $workflow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->putWorkflowItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workflow** | [**\TrackMage\Client\Swagger\Model\WorkflowSetWorkflowSetWorkflowMetaSetIntegration**](../Model/WorkflowSetWorkflowSetWorkflowMetaSetIntegration.md)| The updated Workflow resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkflowGetWorkflowGetWorkflowMeta**](../Model/WorkflowGetWorkflowGetWorkflowMeta.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

