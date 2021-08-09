# OpenAPI\Client\UserApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserItem()**](UserApi.md#deleteUserItem) | **DELETE** /api/users/{id} | Removes the User resource.
[**getUserCollection()**](UserApi.md#getUserCollection) | **GET** /api/users | Retrieves the collection of User resources.
[**getUserItem()**](UserApi.md#getUserItem) | **GET** /api/users/{id} | Retrieves a User resource.
[**patchUserItem()**](UserApi.md#patchUserItem) | **PATCH** /api/users/{id} | Updates the User resource.
[**postUserCollection()**](UserApi.md#postUserCollection) | **POST** /api/users | Creates a User resource.
[**putUserItem()**](UserApi.md#putUserItem) | **PUT** /api/users/{id} | Replaces the User resource.


## `deleteUserItem()`

```php
deleteUserItem($id)
```

Removes the User resource.

Removes the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $apiInstance->deleteUserItem($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserCollection()`

```php
getUserCollection($page): \OpenAPI\Client\Model\UserUserRead[]
```

Retrieves the collection of User resources.

Retrieves the collection of User resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getUserCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\OpenAPI\Client\Model\UserUserRead[]**](../Model/UserUserRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserItem()`

```php
getUserItem($id): \OpenAPI\Client\Model\UserUserRead
```

Retrieves a User resource.

Retrieves a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->getUserItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\OpenAPI\Client\Model\UserUserRead**](../Model/UserUserRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchUserItem()`

```php
patchUserItem($id, $user_user_write): \OpenAPI\Client\Model\UserUserRead
```

Updates the User resource.

Updates the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$user_user_write = new \OpenAPI\Client\Model\UserUserWrite(); // \OpenAPI\Client\Model\UserUserWrite | The updated User resource

try {
    $result = $apiInstance->patchUserItem($id, $user_user_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->patchUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **user_user_write** | [**\OpenAPI\Client\Model\UserUserWrite**](../Model/UserUserWrite.md)| The updated User resource |

### Return type

[**\OpenAPI\Client\Model\UserUserRead**](../Model/UserUserRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserCollection()`

```php
postUserCollection($user_user_write): \OpenAPI\Client\Model\UserUserRead
```

Creates a User resource.

Creates a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_user_write = new \OpenAPI\Client\Model\UserUserWrite(); // \OpenAPI\Client\Model\UserUserWrite | The new User resource

try {
    $result = $apiInstance->postUserCollection($user_user_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_user_write** | [**\OpenAPI\Client\Model\UserUserWrite**](../Model/UserUserWrite.md)| The new User resource |

### Return type

[**\OpenAPI\Client\Model\UserUserRead**](../Model/UserUserRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUserItem()`

```php
putUserItem($id, $user_user_write): \OpenAPI\Client\Model\UserUserRead
```

Replaces the User resource.

Replaces the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Resource identifier
$user_user_write = new \OpenAPI\Client\Model\UserUserWrite(); // \OpenAPI\Client\Model\UserUserWrite | The updated User resource

try {
    $result = $apiInstance->putUserItem($id, $user_user_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->putUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **user_user_write** | [**\OpenAPI\Client\Model\UserUserWrite**](../Model/UserUserWrite.md)| The updated User resource |

### Return type

[**\OpenAPI\Client\Model\UserUserRead**](../Model/UserUserRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
