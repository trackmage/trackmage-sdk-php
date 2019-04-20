# TrackMage\Client\Swagger\UserApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiUsersNotificationsGetSubresource**](UserApi.md#apiUsersNotificationsGetSubresource) | **GET** /users/{id}/notifications | Retrieves the collection of Notification resources.
[**apiUsersTeamMembersGetSubresource**](UserApi.md#apiUsersTeamMembersGetSubresource) | **GET** /users/{id}/team_members | Retrieves the collection of TeamMember resources.
[**getUserItem**](UserApi.md#getUserItem) | **GET** /users/{id} | Retrieves a User resource.
[**putUserItem**](UserApi.md#putUserItem) | **PUT** /users/{id} | Replaces the User resource.



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


$apiInstance = new TrackMage\Client\Swagger\Api\UserApi(
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
    echo 'Exception when calling UserApi->apiUsersNotificationsGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## apiUsersTeamMembersGetSubresource

> \TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams[] apiUsersTeamMembersGetSubresource($id, $teamId, $teamId2, $memberId, $memberId2)

Retrieves the collection of TeamMember resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$teamId = 56; // int | 
$teamId2 = array(56); // int[] | 
$memberId = 56; // int | 
$memberId2 = array(56); // int[] | 

try {
    $result = $apiInstance->apiUsersTeamMembersGetSubresource($id, $teamId, $teamId2, $memberId, $memberId2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersTeamMembersGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **teamId** | **int**|  | [optional]
 **teamId2** | [**int[]**](../Model/int.md)|  | [optional]
 **memberId** | **int**|  | [optional]
 **memberId2** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams[]**](../Model/TeamMemberGetTeamMemberGetTeams.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUserItem

> \TrackMage\Client\Swagger\Model\UserGetUserGetMediaShort getUserItem($id)

Retrieves a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getUserItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\UserGetUserGetMediaShort**](../Model/UserGetUserGetMediaShort.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putUserItem

> \TrackMage\Client\Swagger\Model\UserGetUserGetMediaShort putUserItem($id, $user)

Replaces the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$user = new \TrackMage\Client\Swagger\Model\UserSetUser(); // \TrackMage\Client\Swagger\Model\UserSetUser | The updated User resource

try {
    $result = $apiInstance->putUserItem($id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->putUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **user** | [**\TrackMage\Client\Swagger\Model\UserSetUser**](../Model/UserSetUser.md)| The updated User resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\UserGetUserGetMediaShort**](../Model/UserGetUserGetMediaShort.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

