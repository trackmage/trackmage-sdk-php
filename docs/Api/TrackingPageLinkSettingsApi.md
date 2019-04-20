# TrackMage\Client\Swagger\TrackingPageLinkSettingsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesTrackingPageLinkSettingsGetSubresource**](TrackingPageLinkSettingsApi.md#apiTeamsWorkspacesTrackingPageLinkSettingsGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/tracking_page_link_settings | Retrieves the collection of TrackingPageLinkSettings resources.
[**apiWorkspacesTrackingPageLinkSettingsGetSubresource**](TrackingPageLinkSettingsApi.md#apiWorkspacesTrackingPageLinkSettingsGetSubresource) | **GET** /workspaces/{id}/tracking_page_link_settings | Retrieves the collection of TrackingPageLinkSettings resources.
[**deleteTrackingPageLinkSettingsItem**](TrackingPageLinkSettingsApi.md#deleteTrackingPageLinkSettingsItem) | **DELETE** /tracking_page_link_settings/{id} | Removes the TrackingPageLinkSettings resource.
[**getTrackingPageLinkSettingsCollection**](TrackingPageLinkSettingsApi.md#getTrackingPageLinkSettingsCollection) | **GET** /tracking_page_link_settings | Retrieves the collection of TrackingPageLinkSettings resources.
[**getTrackingPageLinkSettingsItem**](TrackingPageLinkSettingsApi.md#getTrackingPageLinkSettingsItem) | **GET** /tracking_page_link_settings/{id} | Retrieves a TrackingPageLinkSettings resource.
[**postTrackingPageLinkSettingsCollection**](TrackingPageLinkSettingsApi.md#postTrackingPageLinkSettingsCollection) | **POST** /tracking_page_link_settings | Creates a TrackingPageLinkSettings resource.



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


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageLinkSettingsApi(
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
    echo 'Exception when calling TrackingPageLinkSettingsApi->apiTeamsWorkspacesTrackingPageLinkSettingsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageLinkSettingsApi(
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
    echo 'Exception when calling TrackingPageLinkSettingsApi->apiWorkspacesTrackingPageLinkSettingsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## deleteTrackingPageLinkSettingsItem

> deleteTrackingPageLinkSettingsItem($id)

Removes the TrackingPageLinkSettings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageLinkSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteTrackingPageLinkSettingsItem($id);
} catch (Exception $e) {
    echo 'Exception when calling TrackingPageLinkSettingsApi->deleteTrackingPageLinkSettingsItem: ', $e->getMessage(), PHP_EOL;
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


## getTrackingPageLinkSettingsCollection

> \TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsGetTrackingPageLinkSettings[] getTrackingPageLinkSettingsCollection($page, $itemsPerPage)

Retrieves the collection of TrackingPageLinkSettings resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageLinkSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getTrackingPageLinkSettingsCollection($page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingPageLinkSettingsApi->getTrackingPageLinkSettingsCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

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


## getTrackingPageLinkSettingsItem

> \TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsGetTrackingPageLinkSettings getTrackingPageLinkSettingsItem($id)

Retrieves a TrackingPageLinkSettings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageLinkSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getTrackingPageLinkSettingsItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingPageLinkSettingsApi->getTrackingPageLinkSettingsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsGetTrackingPageLinkSettings**](../Model/TrackingPageLinkSettingsGetTrackingPageLinkSettings.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postTrackingPageLinkSettingsCollection

> \TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsGetTrackingPageLinkSettings postTrackingPageLinkSettingsCollection($trackingPageLinkSettings)

Creates a TrackingPageLinkSettings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageLinkSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trackingPageLinkSettings = new \TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsSetTrackingPageLinkSettings(); // \TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsSetTrackingPageLinkSettings | The new TrackingPageLinkSettings resource

try {
    $result = $apiInstance->postTrackingPageLinkSettingsCollection($trackingPageLinkSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingPageLinkSettingsApi->postTrackingPageLinkSettingsCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingPageLinkSettings** | [**\TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsSetTrackingPageLinkSettings**](../Model/TrackingPageLinkSettingsSetTrackingPageLinkSettings.md)| The new TrackingPageLinkSettings resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageLinkSettingsGetTrackingPageLinkSettings**](../Model/TrackingPageLinkSettingsGetTrackingPageLinkSettings.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

