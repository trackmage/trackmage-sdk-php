# TrackMage\Client\Swagger\ProductApi

All URIs are relative to *https://api.l.trackmage.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiProductsProductVariantsGetSubresource**](ProductApi.md#apiProductsProductVariantsGetSubresource) | **GET** /products/{id}/product_variants | Retrieves the collection of ProductVariant resources.
[**deleteProductItem**](ProductApi.md#deleteProductItem) | **DELETE** /products/{id} | Removes the Product resource.
[**getProductCollection**](ProductApi.md#getProductCollection) | **GET** /products | Retrieves the collection of Product resources.
[**getProductItem**](ProductApi.md#getProductItem) | **GET** /products/{id} | Retrieves a Product resource.
[**postProductCollection**](ProductApi.md#postProductCollection) | **POST** /products | Creates a Product resource.
[**putProductItem**](ProductApi.md#putProductItem) | **PUT** /products/{id} | Replaces the Product resource.



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


$apiInstance = new TrackMage\Client\Swagger\Api\ProductApi(
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
    echo 'Exception when calling ProductApi->apiProductsProductVariantsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## deleteProductItem

> deleteProductItem($id)

Removes the Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteProductItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->deleteProductItem: ', $e->getMessage(), PHP_EOL;
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


## getProductCollection

> \TrackMage\Client\Swagger\Model\ProductGetc[] getProductCollection($orderId, $orderName, $orderCreatedAt, $orderUpdatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id, $id2, $name, $page, $itemsPerPage)

Retrieves the collection of Product resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 'orderId_example'; // string | 
$orderName = 'orderName_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$updatedAtBefore = 'updatedAtBefore_example'; // string | 
$updatedAtStrictlyBefore = 'updatedAtStrictlyBefore_example'; // string | 
$updatedAtAfter = 'updatedAtAfter_example'; // string | 
$updatedAtStrictlyAfter = 'updatedAtStrictlyAfter_example'; // string | 
$id = 'id_example'; // string | 
$id2 = array('id_example'); // string[] | 
$name = 'name_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getProductCollection($orderId, $orderName, $orderCreatedAt, $orderUpdatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $id, $id2, $name, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **orderName** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **orderUpdatedAt** | **string**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtStrictlyBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **createdAtStrictlyAfter** | **string**|  | [optional]
 **updatedAtBefore** | **string**|  | [optional]
 **updatedAtStrictlyBefore** | **string**|  | [optional]
 **updatedAtAfter** | **string**|  | [optional]
 **updatedAtStrictlyAfter** | **string**|  | [optional]
 **id** | **string**|  | [optional]
 **id2** | [**string[]**](../Model/string.md)|  | [optional]
 **name** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ProductGetc[]**](../Model/ProductGetc.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getProductItem

> \TrackMage\Client\Swagger\Model\ProductGet getProductItem($id)

Retrieves a Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\ProductGet**](../Model/ProductGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postProductCollection

> \TrackMage\Client\Swagger\Model\ProductGet postProductCollection($product)

Creates a Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = new \TrackMage\Client\Swagger\Model\ProductPost(); // \TrackMage\Client\Swagger\Model\ProductPost | The new Product resource

try {
    $result = $apiInstance->postProductCollection($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->postProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\TrackMage\Client\Swagger\Model\ProductPost**](../Model/ProductPost.md)| The new Product resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ProductGet**](../Model/ProductGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putProductItem

> \TrackMage\Client\Swagger\Model\ProductGet putProductItem($id, $product)

Replaces the Product resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$product = new \TrackMage\Client\Swagger\Model\ProductPut(); // \TrackMage\Client\Swagger\Model\ProductPut | The updated Product resource

try {
    $result = $apiInstance->putProductItem($id, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->putProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **product** | [**\TrackMage\Client\Swagger\Model\ProductPut**](../Model/ProductPut.md)| The updated Product resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\ProductGet**](../Model/ProductGet.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

