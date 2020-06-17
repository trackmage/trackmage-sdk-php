# TrackMage\Client\Swagger\StatusApi

All URIs are relative to *https://api.l.trackmage.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesStatusesGetSubresource**](StatusApi.md#apiTeamsWorkspacesStatusesGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/statuses | Retrieves the collection of Status resources.
[**apiWorkspacesStatusesGetSubresource**](StatusApi.md#apiWorkspacesStatusesGetSubresource) | **GET** /workspaces/{id}/statuses | Retrieves the collection of Status resources.
[**checkStatusCollection**](StatusApi.md#checkStatusCollection) | **POST** /statuses/check-references | Check if the status has references
[**deleteStatusItem**](StatusApi.md#deleteStatusItem) | **DELETE** /statuses/{id} | Removes the Status resource.
[**getStatusCollection**](StatusApi.md#getStatusCollection) | **GET** /statuses | Retrieves the collection of Status resources.
[**getStatusItem**](StatusApi.md#getStatusItem) | **GET** /statuses/{id} | Retrieves a Status resource.
[**migrateStatusCollection**](StatusApi.md#migrateStatusCollection) | **POST** /statuses/migrate-references | Migrate the old status references to the new one
[**postStatusCollection**](StatusApi.md#postStatusCollection) | **POST** /statuses | Creates a Status resource.
[**putStatusItem**](StatusApi.md#putStatusItem) | **PUT** /statuses/{id} | Replaces the Status resource.



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


$apiInstance = new TrackMage\Client\Swagger\Api\StatusApi(
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
    echo 'Exception when calling StatusApi->apiTeamsWorkspacesStatusesGetSubresource: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TrackMage\Client\Swagger\Api\StatusApi(
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
    echo 'Exception when calling StatusApi->apiWorkspacesStatusesGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## checkStatusCollection

> \TrackMage\Client\Swagger\Model\Status01d0f434438e480f7bbc7790c6311108GetCheckStatusRefsResponse checkStatusCollection($status)

Check if the status has references

- Check if the status has references

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \TrackMage\Client\Swagger\Model\Status113e64b04cfc724b475734cd9eb5ea56SetCheckStatusRefsRequest(); // \TrackMage\Client\Swagger\Model\Status113e64b04cfc724b475734cd9eb5ea56SetCheckStatusRefsRequest | The new Status resource

try {
    $result = $apiInstance->checkStatusCollection($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->checkStatusCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\TrackMage\Client\Swagger\Model\Status113e64b04cfc724b475734cd9eb5ea56SetCheckStatusRefsRequest**](../Model/Status113e64b04cfc724b475734cd9eb5ea56SetCheckStatusRefsRequest.md)| The new Status resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\Status01d0f434438e480f7bbc7790c6311108GetCheckStatusRefsResponse**](../Model/Status01d0f434438e480f7bbc7790c6311108GetCheckStatusRefsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteStatusItem

> deleteStatusItem($id)

Removes the Status resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteStatusItem($id);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->deleteStatusItem: ', $e->getMessage(), PHP_EOL;
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


## getStatusCollection

> \TrackMage\Client\Swagger\Model\StatusGet[] getStatusCollection($entity, $code, $title, $orderEntity, $orderCode, $orderTitle, $page, $itemsPerPage)

Retrieves the collection of Status resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity = 'entity_example'; // string | 
$code = 'code_example'; // string | 
$title = 'title_example'; // string | 
$orderEntity = 'orderEntity_example'; // string | 
$orderCode = 'orderCode_example'; // string | 
$orderTitle = 'orderTitle_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getStatusCollection($entity, $code, $title, $orderEntity, $orderCode, $orderTitle, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->getStatusCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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


## getStatusItem

> \TrackMage\Client\Swagger\Model\StatusGet getStatusItem($id)

Retrieves a Status resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getStatusItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->getStatusItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\StatusGet**](../Model/StatusGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## migrateStatusCollection

> \TrackMage\Client\Swagger\Model\StatusFb253404adfa1c8f5e5289236bfea1fdGetMigrateStatusRefsResponse migrateStatusCollection($status)

Migrate the old status references to the new one

- Migrate the old status references to the new one within given workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \TrackMage\Client\Swagger\Model\StatusA5842c80e161de61194eb8382eef2bd2SetMigrateStatusRefsRequest(); // \TrackMage\Client\Swagger\Model\StatusA5842c80e161de61194eb8382eef2bd2SetMigrateStatusRefsRequest | The new Status resource

try {
    $result = $apiInstance->migrateStatusCollection($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->migrateStatusCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\TrackMage\Client\Swagger\Model\StatusA5842c80e161de61194eb8382eef2bd2SetMigrateStatusRefsRequest**](../Model/StatusA5842c80e161de61194eb8382eef2bd2SetMigrateStatusRefsRequest.md)| The new Status resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\StatusFb253404adfa1c8f5e5289236bfea1fdGetMigrateStatusRefsResponse**](../Model/StatusFb253404adfa1c8f5e5289236bfea1fdGetMigrateStatusRefsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postStatusCollection

> \TrackMage\Client\Swagger\Model\StatusGet postStatusCollection($status)

Creates a Status resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \TrackMage\Client\Swagger\Model\StatusPost(); // \TrackMage\Client\Swagger\Model\StatusPost | The new Status resource

try {
    $result = $apiInstance->postStatusCollection($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->postStatusCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\TrackMage\Client\Swagger\Model\StatusPost**](../Model/StatusPost.md)| The new Status resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\StatusGet**](../Model/StatusGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putStatusItem

> \TrackMage\Client\Swagger\Model\StatusGet putStatusItem($id, $status)

Replaces the Status resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$status = new \TrackMage\Client\Swagger\Model\StatusPut(); // \TrackMage\Client\Swagger\Model\StatusPut | The updated Status resource

try {
    $result = $apiInstance->putStatusItem($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->putStatusItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **status** | [**\TrackMage\Client\Swagger\Model\StatusPut**](../Model/StatusPut.md)| The updated Status resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\StatusGet**](../Model/StatusGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

