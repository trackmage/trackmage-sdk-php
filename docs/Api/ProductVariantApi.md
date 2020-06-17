# TrackMage\Client\Swagger\ProductVariantApi

All URIs are relative to *https://api.l.trackmage.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiProductsProductVariantsGetSubresource**](ProductVariantApi.md#apiProductsProductVariantsGetSubresource) | **GET** /products/{id}/product_variants | Retrieves the collection of ProductVariant resources.
[**deleteProductVariantItem**](ProductVariantApi.md#deleteProductVariantItem) | **DELETE** /product_variants/{id} | Removes the ProductVariant resource.
[**getProductVariantCollection**](ProductVariantApi.md#getProductVariantCollection) | **GET** /product_variants | Retrieves the collection of ProductVariant resources.
[**getProductVariantItem**](ProductVariantApi.md#getProductVariantItem) | **GET** /product_variants/{id} | Retrieves a ProductVariant resource.
[**postProductVariantCollection**](ProductVariantApi.md#postProductVariantCollection) | **POST** /product_variants | Creates a ProductVariant resource.
[**putProductVariantItem**](ProductVariantApi.md#putProductVariantItem) | **PUT** /product_variants/{id} | Replaces the ProductVariant resource.



## apiProductsProductVariantsGetSubresource

> \TrackMage\Client\Swagger\Model\ProductVariantGet[] apiProductsProductVariantsGetSubresource($id, $id2, $sku, $team, $team2, $product, $product2, $orderId, $orderSku, $page, $itemsPerPage)

Retrieves the collection of ProductVariant resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ProductVariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$id2 = array('id_example'); // string[] | 
$sku = 'sku_example'; // string | 
$team = 'team_example'; // string | 
$team2 = array('team_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderSku = 'orderSku_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->apiProductsProductVariantsGetSubresource($id, $id2, $sku, $team, $team2, $product, $product2, $orderId, $orderSku, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantApi->apiProductsProductVariantsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **sku** | **string**|  | [optional]
 **team** | **string**|  | [optional]
 **team2** | [**string[]**](../Model/string.md)|  | [optional]
 **product** | **string**|  | [optional]
 **product2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderSku** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ProductVariantGet[]**](../Model/ProductVariantGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteProductVariantItem

> deleteProductVariantItem($id)

Removes the ProductVariant resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ProductVariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteProductVariantItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantApi->deleteProductVariantItem: ', $e->getMessage(), PHP_EOL;
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


## getProductVariantCollection

> \TrackMage\Client\Swagger\Model\ProductVariantGet[] getProductVariantCollection($id, $id2, $sku, $team, $team2, $product, $product2, $orderId, $orderSku, $page, $itemsPerPage)

Retrieves the collection of ProductVariant resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ProductVariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$id2 = array('id_example'); // string[] | 
$sku = 'sku_example'; // string | 
$team = 'team_example'; // string | 
$team2 = array('team_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$orderId = 'orderId_example'; // string | 
$orderSku = 'orderSku_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getProductVariantCollection($id, $id2, $sku, $team, $team2, $product, $product2, $orderId, $orderSku, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantApi->getProductVariantCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **sku** | **string**|  | [optional]
 **team** | **string**|  | [optional]
 **team2** | [**string[]**](../Model/string.md)|  | [optional]
 **product** | **string**|  | [optional]
 **product2** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderSku** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ProductVariantGet[]**](../Model/ProductVariantGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getProductVariantItem

> \TrackMage\Client\Swagger\Model\ProductVariantGet getProductVariantItem($id)

Retrieves a ProductVariant resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ProductVariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getProductVariantItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantApi->getProductVariantItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\ProductVariantGet**](../Model/ProductVariantGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postProductVariantCollection

> \TrackMage\Client\Swagger\Model\ProductVariantGet postProductVariantCollection($productVariant)

Creates a ProductVariant resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ProductVariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productVariant = new \TrackMage\Client\Swagger\Model\ProductVariantPost(); // \TrackMage\Client\Swagger\Model\ProductVariantPost | The new ProductVariant resource

try {
    $result = $apiInstance->postProductVariantCollection($productVariant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantApi->postProductVariantCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productVariant** | [**\TrackMage\Client\Swagger\Model\ProductVariantPost**](../Model/ProductVariantPost.md)| The new ProductVariant resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ProductVariantGet**](../Model/ProductVariantGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putProductVariantItem

> \TrackMage\Client\Swagger\Model\ProductVariantGet putProductVariantItem($id, $productVariant)

Replaces the ProductVariant resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ProductVariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$productVariant = new \TrackMage\Client\Swagger\Model\ProductVariantPut(); // \TrackMage\Client\Swagger\Model\ProductVariantPut | The updated ProductVariant resource

try {
    $result = $apiInstance->putProductVariantItem($id, $productVariant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantApi->putProductVariantItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **productVariant** | [**\TrackMage\Client\Swagger\Model\ProductVariantPut**](../Model/ProductVariantPut.md)| The updated ProductVariant resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ProductVariantGet**](../Model/ProductVariantGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

