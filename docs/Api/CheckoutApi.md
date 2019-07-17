# TrackMage\Client\Swagger\CheckoutApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCheckoutCollection**](CheckoutApi.md#getCheckoutCollection) | **GET** /checkouts | Retrieves the collection of Checkout resources.
[**getCheckoutItem**](CheckoutApi.md#getCheckoutItem) | **GET** /checkouts/{id} | Retrieves a Checkout resource.
[**postCheckoutCollection**](CheckoutApi.md#postCheckoutCollection) | **POST** /checkouts | Creates a Checkout resource.
[**postInitiateCheckoutCollection**](CheckoutApi.md#postInitiateCheckoutCollection) | **POST** /checkouts/init | Creates a Checkout resource.
[**putAddressCheckoutItem**](CheckoutApi.md#putAddressCheckoutItem) | **PUT** /checkouts/{id}/step_address | Replaces the Checkout resource.
[**putEmailCheckoutItem**](CheckoutApi.md#putEmailCheckoutItem) | **PUT** /checkouts/{id}/step_email | Replaces the Checkout resource.



## getCheckoutCollection

> \TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct[] getCheckoutCollection($page, $itemsPerPage)

Retrieves the collection of Checkout resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getCheckoutCollection($page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getCheckoutCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct[]**](../Model/CheckoutGetCheckoutGetCheckoutProduct.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCheckoutItem

> \TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct getCheckoutItem($id)

Retrieves a Checkout resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getCheckoutItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getCheckoutItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct**](../Model/CheckoutGetCheckoutGetCheckoutProduct.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postCheckoutCollection

> \TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct postCheckoutCollection($checkout)

Creates a Checkout resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout = new \TrackMage\Client\Swagger\Model\CheckoutPostCheckoutPutCheckoutEmailPutCheckoutAddress(); // \TrackMage\Client\Swagger\Model\CheckoutPostCheckoutPutCheckoutEmailPutCheckoutAddress | The new Checkout resource

try {
    $result = $apiInstance->postCheckoutCollection($checkout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->postCheckoutCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout** | [**\TrackMage\Client\Swagger\Model\CheckoutPostCheckoutPutCheckoutEmailPutCheckoutAddress**](../Model/CheckoutPostCheckoutPutCheckoutEmailPutCheckoutAddress.md)| The new Checkout resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct**](../Model/CheckoutGetCheckoutGetCheckoutProduct.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postInitiateCheckoutCollection

> \TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct postInitiateCheckoutCollection($checkout)

Creates a Checkout resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout = new \TrackMage\Client\Swagger\Model\CheckoutPostCheckout(); // \TrackMage\Client\Swagger\Model\CheckoutPostCheckout | The new Checkout resource

try {
    $result = $apiInstance->postInitiateCheckoutCollection($checkout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->postInitiateCheckoutCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout** | [**\TrackMage\Client\Swagger\Model\CheckoutPostCheckout**](../Model/CheckoutPostCheckout.md)| The new Checkout resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct**](../Model/CheckoutGetCheckoutGetCheckoutProduct.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putAddressCheckoutItem

> \TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct putAddressCheckoutItem($id, $checkout)

Replaces the Checkout resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$checkout = new \TrackMage\Client\Swagger\Model\CheckoutPutCheckoutAddress(); // \TrackMage\Client\Swagger\Model\CheckoutPutCheckoutAddress | The updated Checkout resource

try {
    $result = $apiInstance->putAddressCheckoutItem($id, $checkout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->putAddressCheckoutItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **checkout** | [**\TrackMage\Client\Swagger\Model\CheckoutPutCheckoutAddress**](../Model/CheckoutPutCheckoutAddress.md)| The updated Checkout resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct**](../Model/CheckoutGetCheckoutGetCheckoutProduct.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putEmailCheckoutItem

> \TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct putEmailCheckoutItem($id, $checkout)

Replaces the Checkout resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$checkout = new \TrackMage\Client\Swagger\Model\CheckoutPutCheckoutEmail(); // \TrackMage\Client\Swagger\Model\CheckoutPutCheckoutEmail | The updated Checkout resource

try {
    $result = $apiInstance->putEmailCheckoutItem($id, $checkout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->putEmailCheckoutItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **checkout** | [**\TrackMage\Client\Swagger\Model\CheckoutPutCheckoutEmail**](../Model/CheckoutPutCheckoutEmail.md)| The updated Checkout resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\CheckoutGetCheckoutGetCheckoutProduct**](../Model/CheckoutGetCheckoutGetCheckoutProduct.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

