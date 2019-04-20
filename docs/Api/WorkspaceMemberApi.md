# TrackMage\Client\Swagger\WorkspaceMemberApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWorkspaceMemberItem**](WorkspaceMemberApi.md#deleteWorkspaceMemberItem) | **DELETE** /workspace_members/{id} | Removes the WorkspaceMember resource.
[**getWorkspaceMemberCollection**](WorkspaceMemberApi.md#getWorkspaceMemberCollection) | **GET** /workspace_members | Retrieves the collection of WorkspaceMember resources.
[**getWorkspaceMemberItem**](WorkspaceMemberApi.md#getWorkspaceMemberItem) | **GET** /workspace_members/{id} | Retrieves a WorkspaceMember resource.
[**putWorkspaceMemberItem**](WorkspaceMemberApi.md#putWorkspaceMemberItem) | **PUT** /workspace_members/{id} | Replaces the WorkspaceMember resource.



## deleteWorkspaceMemberItem

> deleteWorkspaceMemberItem($id)

Removes the WorkspaceMember resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceMemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteWorkspaceMemberItem($id);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceMemberApi->deleteWorkspaceMemberItem: ', $e->getMessage(), PHP_EOL;
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


## getWorkspaceMemberCollection

> \TrackMage\Client\Swagger\Model\WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort[] getWorkspaceMemberCollection($workspaceId, $teamMemberId, $teamId, $memberId)

Retrieves the collection of WorkspaceMember resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceMemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = 56; // int | 
$teamMemberId = 56; // int | 
$teamId = 56; // int | 
$memberId = 56; // int | 

try {
    $result = $apiInstance->getWorkspaceMemberCollection($workspaceId, $teamMemberId, $teamId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceMemberApi->getWorkspaceMemberCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **int**|  | [optional]
 **teamMemberId** | **int**|  | [optional]
 **teamId** | **int**|  | [optional]
 **memberId** | **int**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort[]**](../Model/WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWorkspaceMemberItem

> \TrackMage\Client\Swagger\Model\WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort getWorkspaceMemberItem($id)

Retrieves a WorkspaceMember resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceMemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getWorkspaceMemberItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceMemberApi->getWorkspaceMemberItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort**](../Model/WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putWorkspaceMemberItem

> \TrackMage\Client\Swagger\Model\WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort putWorkspaceMemberItem($id, $workspaceMember)

Replaces the WorkspaceMember resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\WorkspaceMemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$workspaceMember = new \TrackMage\Client\Swagger\Model\WorkspaceMemberSetWorkspaceMember(); // \TrackMage\Client\Swagger\Model\WorkspaceMemberSetWorkspaceMember | The updated WorkspaceMember resource

try {
    $result = $apiInstance->putWorkspaceMemberItem($id, $workspaceMember);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceMemberApi->putWorkspaceMemberItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workspaceMember** | [**\TrackMage\Client\Swagger\Model\WorkspaceMemberSetWorkspaceMember**](../Model/WorkspaceMemberSetWorkspaceMember.md)| The updated WorkspaceMember resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort**](../Model/WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

