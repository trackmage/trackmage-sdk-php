# TrackMage\Client\Swagger\TrackingPageApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsWorkspacesTrackingPagesGetSubresource**](TrackingPageApi.md#apiTeamsWorkspacesTrackingPagesGetSubresource) | **GET** /teams/{id}/workspaces/{workspaces}/tracking_pages | Retrieves the collection of TrackingPage resources.
[**apiWorkspacesTrackingPagesGetSubresource**](TrackingPageApi.md#apiWorkspacesTrackingPagesGetSubresource) | **GET** /workspaces/{id}/tracking_pages | Retrieves the collection of TrackingPage resources.
[**deleteTrackingPageItem**](TrackingPageApi.md#deleteTrackingPageItem) | **DELETE** /tracking_pages/{id} | Removes the TrackingPage resource.
[**getTrackingPageCollection**](TrackingPageApi.md#getTrackingPageCollection) | **GET** /tracking_pages | Retrieves the collection of TrackingPage resources.
[**getTrackingPageItem**](TrackingPageApi.md#getTrackingPageItem) | **GET** /tracking_pages/{id} | Retrieves a TrackingPage resource.
[**postTrackingPageCollection**](TrackingPageApi.md#postTrackingPageCollection) | **POST** /tracking_pages | Creates a TrackingPage resource.
[**putTrackingPageItem**](TrackingPageApi.md#putTrackingPageItem) | **PUT** /tracking_pages/{id} | Replaces the TrackingPage resource.



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


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageApi(
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
    echo 'Exception when calling TrackingPageApi->apiTeamsWorkspacesTrackingPagesGetSubresource: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageApi(
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
    echo 'Exception when calling TrackingPageApi->apiWorkspacesTrackingPagesGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## deleteTrackingPageItem

> deleteTrackingPageItem($id)

Removes the TrackingPage resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteTrackingPageItem($id);
} catch (Exception $e) {
    echo 'Exception when calling TrackingPageApi->deleteTrackingPageItem: ', $e->getMessage(), PHP_EOL;
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


## getTrackingPageCollection

> \TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPages[] getTrackingPageCollection($page, $itemsPerPage)

Retrieves the collection of TrackingPage resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getTrackingPageCollection($page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingPageApi->getTrackingPageCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPages[]**](../Model/TrackingPageGetTrackingPages.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrackingPageItem

> \TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPageGetBuilder getTrackingPageItem($id)

Retrieves a TrackingPage resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getTrackingPageItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingPageApi->getTrackingPageItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPageGetBuilder**](../Model/TrackingPageGetTrackingPageGetBuilder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postTrackingPageCollection

> \TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPageGetBuilder postTrackingPageCollection($trackingPage)

Creates a TrackingPage resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trackingPage = new \TrackMage\Client\Swagger\Model\TrackingPageSetTrackingPageSetBuilder(); // \TrackMage\Client\Swagger\Model\TrackingPageSetTrackingPageSetBuilder | The new TrackingPage resource

try {
    $result = $apiInstance->postTrackingPageCollection($trackingPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingPageApi->postTrackingPageCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingPage** | [**\TrackMage\Client\Swagger\Model\TrackingPageSetTrackingPageSetBuilder**](../Model/TrackingPageSetTrackingPageSetBuilder.md)| The new TrackingPage resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPageGetBuilder**](../Model/TrackingPageGetTrackingPageGetBuilder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putTrackingPageItem

> \TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPageGetBuilder putTrackingPageItem($id, $trackingPage)

Replaces the TrackingPage resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TrackingPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$trackingPage = new \TrackMage\Client\Swagger\Model\TrackingPageSetTrackingPageSetBuilder(); // \TrackMage\Client\Swagger\Model\TrackingPageSetTrackingPageSetBuilder | The updated TrackingPage resource

try {
    $result = $apiInstance->putTrackingPageItem($id, $trackingPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingPageApi->putTrackingPageItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **trackingPage** | [**\TrackMage\Client\Swagger\Model\TrackingPageSetTrackingPageSetBuilder**](../Model/TrackingPageSetTrackingPageSetBuilder.md)| The updated TrackingPage resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TrackingPageGetTrackingPageGetBuilder**](../Model/TrackingPageGetTrackingPageGetBuilder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

