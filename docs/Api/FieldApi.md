# TrackMage\Client\Swagger\FieldApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFieldItem**](FieldApi.md#deleteFieldItem) | **DELETE** /fields/{id} | Removes the Field resource.
[**getFieldCollection**](FieldApi.md#getFieldCollection) | **GET** /fields | Retrieves the collection of Field resources.
[**getFieldItem**](FieldApi.md#getFieldItem) | **GET** /fields/{id} | Retrieves a Field resource.
[**postFieldCollection**](FieldApi.md#postFieldCollection) | **POST** /fields | Creates a Field resource.
[**putFieldItem**](FieldApi.md#putFieldItem) | **PUT** /fields/{id} | Replaces the Field resource.



## deleteFieldItem

> deleteFieldItem($id)

Removes the Field resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\FieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteFieldItem($id);
} catch (Exception $e) {
    echo 'Exception when calling FieldApi->deleteFieldItem: ', $e->getMessage(), PHP_EOL;
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


## getFieldCollection

> \TrackMage\Client\Swagger\Model\FieldGetFieldGetSelectOptionsGetDeliveryStatuses[] getFieldCollection($entity, $workspace, $primary)

Retrieves the collection of Field resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\FieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity = 'entity_example'; // string | The entity you need fields for. For example, shipments or orders. The whole format is entity[.type[.subtype]], for example, workflows.webhook or workflows.integration.sfc
$workspace = 56; // int | Specify workspace id for fields stored in EAV
$primary = True; // bool | If true only primary fields will be returned, if false only custom ones

try {
    $result = $apiInstance->getFieldCollection($entity, $workspace, $primary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldApi->getFieldCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | **string**| The entity you need fields for. For example, shipments or orders. The whole format is entity[.type[.subtype]], for example, workflows.webhook or workflows.integration.sfc |
 **workspace** | **int**| Specify workspace id for fields stored in EAV | [optional]
 **primary** | **bool**| If true only primary fields will be returned, if false only custom ones | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\FieldGetFieldGetSelectOptionsGetDeliveryStatuses[]**](../Model/FieldGetFieldGetSelectOptionsGetDeliveryStatuses.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFieldItem

> \TrackMage\Client\Swagger\Model\FieldGetFieldGetSelectOptionsGetDeliveryStatuses getFieldItem($id)

Retrieves a Field resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\FieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getFieldItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldApi->getFieldItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\FieldGetFieldGetSelectOptionsGetDeliveryStatuses**](../Model/FieldGetFieldGetSelectOptionsGetDeliveryStatuses.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postFieldCollection

> \TrackMage\Client\Swagger\Model\FieldGetFieldGetSelectOptionsGetDeliveryStatuses postFieldCollection($field)

Creates a Field resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\FieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field = new \TrackMage\Client\Swagger\Model\FieldPostField(); // \TrackMage\Client\Swagger\Model\FieldPostField | The new Field resource

try {
    $result = $apiInstance->postFieldCollection($field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldApi->postFieldCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field** | [**\TrackMage\Client\Swagger\Model\FieldPostField**](../Model/FieldPostField.md)| The new Field resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\FieldGetFieldGetSelectOptionsGetDeliveryStatuses**](../Model/FieldGetFieldGetSelectOptionsGetDeliveryStatuses.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putFieldItem

> \TrackMage\Client\Swagger\Model\FieldGetFieldGetSelectOptionsGetDeliveryStatuses putFieldItem($id, $field)

Replaces the Field resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\FieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$field = new \TrackMage\Client\Swagger\Model\FieldPutField(); // \TrackMage\Client\Swagger\Model\FieldPutField | The updated Field resource

try {
    $result = $apiInstance->putFieldItem($id, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldApi->putFieldItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **field** | [**\TrackMage\Client\Swagger\Model\FieldPutField**](../Model/FieldPutField.md)| The updated Field resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\FieldGetFieldGetSelectOptionsGetDeliveryStatuses**](../Model/FieldGetFieldGetSelectOptionsGetDeliveryStatuses.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

