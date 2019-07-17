# TrackMage\Client\Swagger\TeamMemberApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsTeamMembersGetSubresource**](TeamMemberApi.md#apiTeamsTeamMembersGetSubresource) | **GET** /teams/{id}/team_members | Retrieves the collection of TeamMember resources.
[**apiUsersTeamMembersGetSubresource**](TeamMemberApi.md#apiUsersTeamMembersGetSubresource) | **GET** /users/{id}/team_members | Retrieves the collection of TeamMember resources.
[**deleteTeamMemberItem**](TeamMemberApi.md#deleteTeamMemberItem) | **DELETE** /team_members/{id} | Removes the TeamMember resource.
[**getTeamMemberCollection**](TeamMemberApi.md#getTeamMemberCollection) | **GET** /team_members | Retrieves the collection of TeamMember resources.
[**getTeamMemberItem**](TeamMemberApi.md#getTeamMemberItem) | **GET** /team_members/{id} | Retrieves a TeamMember resource.
[**putTeamMemberItem**](TeamMemberApi.md#putTeamMemberItem) | **PUT** /team_members/{id} | Replaces the TeamMember resource.
[**resendInviteTeamMemberItem**](TeamMemberApi.md#resendInviteTeamMemberItem) | **POST** /team_members/{id}/resend_invite | Creates a TeamMember resource.



## apiTeamsTeamMembersGetSubresource

> \TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams[] apiTeamsTeamMembersGetSubresource($id, $teamId, $teamId2, $memberId, $memberId2)

Retrieves the collection of TeamMember resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamMemberApi(
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
    $result = $apiInstance->apiTeamsTeamMembersGetSubresource($id, $teamId, $teamId2, $memberId, $memberId2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->apiTeamsTeamMembersGetSubresource: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TrackMage\Client\Swagger\Api\TeamMemberApi(
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
    echo 'Exception when calling TeamMemberApi->apiUsersTeamMembersGetSubresource: ', $e->getMessage(), PHP_EOL;
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


## deleteTeamMemberItem

> deleteTeamMemberItem($id)

Removes the TeamMember resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamMemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteTeamMemberItem($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->deleteTeamMemberItem: ', $e->getMessage(), PHP_EOL;
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


## getTeamMemberCollection

> \TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams[] getTeamMemberCollection($teamId, $teamId2, $memberId, $memberId2, $page, $itemsPerPage)

Retrieves the collection of TeamMember resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamMemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = 56; // int | 
$teamId2 = array(56); // int[] | 
$memberId = 56; // int | 
$memberId2 = array(56); // int[] | 
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getTeamMemberCollection($teamId, $teamId2, $memberId, $memberId2, $page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->getTeamMemberCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **int**|  | [optional]
 **teamId2** | [**int[]**](../Model/int.md)|  | [optional]
 **memberId** | **int**|  | [optional]
 **memberId2** | [**int[]**](../Model/int.md)|  | [optional]
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

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


## getTeamMemberItem

> \TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams getTeamMemberItem($id)

Retrieves a TeamMember resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamMemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getTeamMemberItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->getTeamMemberItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams**](../Model/TeamMemberGetTeamMemberGetTeams.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putTeamMemberItem

> \TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams putTeamMemberItem($id, $teamMember)

Replaces the TeamMember resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamMemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$teamMember = new \TrackMage\Client\Swagger\Model\TeamMemberSetTeamMember(); // \TrackMage\Client\Swagger\Model\TeamMemberSetTeamMember | The updated TeamMember resource

try {
    $result = $apiInstance->putTeamMemberItem($id, $teamMember);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->putTeamMemberItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **teamMember** | [**\TrackMage\Client\Swagger\Model\TeamMemberSetTeamMember**](../Model/TeamMemberSetTeamMember.md)| The updated TeamMember resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams**](../Model/TeamMemberGetTeamMemberGetTeams.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resendInviteTeamMemberItem

> \TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams resendInviteTeamMemberItem($id, $teamMember)

Creates a TeamMember resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamMemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$teamMember = new \TrackMage\Client\Swagger\Model\TeamMemberSetTeamMember(); // \TrackMage\Client\Swagger\Model\TeamMemberSetTeamMember | The new TeamMember resource

try {
    $result = $apiInstance->resendInviteTeamMemberItem($id, $teamMember);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->resendInviteTeamMemberItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **teamMember** | [**\TrackMage\Client\Swagger\Model\TeamMemberSetTeamMember**](../Model/TeamMemberSetTeamMember.md)| The new TeamMember resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams**](../Model/TeamMemberGetTeamMemberGetTeams.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

