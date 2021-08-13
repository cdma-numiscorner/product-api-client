# ProductApi\UserApi

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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteUserItem($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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
getUserCollection($page): \ProductApi\Model\UserUserRead[]
```

Retrieves the collection of User resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | The collection page number

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
 **page** | **int**| The collection page number | [optional]

### Return type

[**\ProductApi\Model\UserUserRead[]**](../Model/UserUserRead.md)

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
getUserItem($id): \ProductApi\Model\UserUserRead
```

Retrieves a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

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
 **id** | **string**|  |

### Return type

[**\ProductApi\Model\UserUserRead**](../Model/UserUserRead.md)

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
patchUserItem($id, $user): \ProductApi\Model\UserUserRead
```

Updates the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$user = new \ProductApi\Model\UserUserWrite(); // \ProductApi\Model\UserUserWrite | The updated User resource

try {
    $result = $apiInstance->patchUserItem($id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->patchUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **user** | [**\ProductApi\Model\UserUserWrite**](../Model/UserUserWrite.md)| The updated User resource | [optional]

### Return type

[**\ProductApi\Model\UserUserRead**](../Model/UserUserRead.md)

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
postUserCollection($user): \ProductApi\Model\UserUserRead
```

Creates a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = new \ProductApi\Model\UserUserWrite(); // \ProductApi\Model\UserUserWrite | The new User resource

try {
    $result = $apiInstance->postUserCollection($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\ProductApi\Model\UserUserWrite**](../Model/UserUserWrite.md)| The new User resource | [optional]

### Return type

[**\ProductApi\Model\UserUserRead**](../Model/UserUserRead.md)

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
putUserItem($id, $user): \ProductApi\Model\UserUserRead
```

Replaces the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$user = new \ProductApi\Model\UserUserWrite(); // \ProductApi\Model\UserUserWrite | The updated User resource

try {
    $result = $apiInstance->putUserItem($id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->putUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **user** | [**\ProductApi\Model\UserUserWrite**](../Model/UserUserWrite.md)| The updated User resource | [optional]

### Return type

[**\ProductApi\Model\UserUserRead**](../Model/UserUserRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
