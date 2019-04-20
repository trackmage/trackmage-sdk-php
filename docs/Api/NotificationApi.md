# TrackMage\Client\Swagger\NotificationApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiUsersNotificationsGetSubresource**](NotificationApi.md#apiUsersNotificationsGetSubresource) | **GET** /users/{id}/notifications | Retrieves the collection of Notification resources.
[**getNotificationCollection**](NotificationApi.md#getNotificationCollection) | **GET** /notifications | Retrieves the collection of Notification resources.
[**getNotificationItem**](NotificationApi.md#getNotificationItem) | **GET** /notifications/{id} | Retrieves a Notification resource.
[**putNotificationItem**](NotificationApi.md#putNotificationItem) | **PUT** /notifications/{id} | Replaces the Notification resource.



## apiUsersNotificationsGetSubresource

> \TrackMage\Client\Swagger\Model\NotificationGetNotification[] apiUsersNotificationsGetSubresource($id, $tag, $tag2, $message, $orderCreatedAt, $unread, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter)

Retrieves the collection of Notification resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$tag = 'tag_example'; // string | 
$tag2 = array('tag_example'); // string[] | 
$message = 'message_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$unread = True; // bool | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 

try {
    $result = $apiInstance->apiUsersNotificationsGetSubresource($id, $tag, $tag2, $message, $orderCreatedAt, $unread, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->apiUsersNotificationsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **tag** | **string**|  | [optional]
 **tag2** | [**string[]**](../Model/string.md)|  | [optional]
 **message** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **unread** | **bool**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtStrictlyBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **createdAtStrictlyAfter** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\NotificationGetNotification[]**](../Model/NotificationGetNotification.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getNotificationCollection

> \TrackMage\Client\Swagger\Model\NotificationGetNotification[] getNotificationCollection($tag, $tag2, $message, $orderCreatedAt, $unread, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $page, $itemsPerPage)

Retrieves the collection of Notification resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag = 'tag_example'; // string | 
$tag2 = array('tag_example'); // string[] | 
$message = 'message_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$unread = True; // bool | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getNotificationCollection($tag, $tag2, $message, $orderCreatedAt, $unread, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->getNotificationCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | **string**|  | [optional]
 **tag2** | [**string[]**](../Model/string.md)|  | [optional]
 **message** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]
 **unread** | **bool**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtStrictlyBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **createdAtStrictlyAfter** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\NotificationGetNotification[]**](../Model/NotificationGetNotification.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getNotificationItem

> \TrackMage\Client\Swagger\Model\NotificationGetNotification getNotificationItem($id)

Retrieves a Notification resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getNotificationItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->getNotificationItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\NotificationGetNotification**](../Model/NotificationGetNotification.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putNotificationItem

> \TrackMage\Client\Swagger\Model\NotificationGetNotification putNotificationItem($id, $notification)

Replaces the Notification resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$notification = new \TrackMage\Client\Swagger\Model\NotificationPutNotification(); // \TrackMage\Client\Swagger\Model\NotificationPutNotification | The updated Notification resource

try {
    $result = $apiInstance->putNotificationItem($id, $notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->putNotificationItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **notification** | [**\TrackMage\Client\Swagger\Model\NotificationPutNotification**](../Model/NotificationPutNotification.md)| The updated Notification resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\NotificationGetNotification**](../Model/NotificationGetNotification.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

