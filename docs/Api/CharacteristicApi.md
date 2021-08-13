# ProductApi\CharacteristicApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCharacteristicItem()**](CharacteristicApi.md#deleteCharacteristicItem) | **DELETE** /api/characteristics/{id} | Removes the Characteristic resource.
[**getCharacteristicCollection()**](CharacteristicApi.md#getCharacteristicCollection) | **GET** /api/characteristics | Retrieves the collection of Characteristic resources.
[**getCharacteristicItem()**](CharacteristicApi.md#getCharacteristicItem) | **GET** /api/characteristics/{id} | Retrieves a Characteristic resource.
[**postCharacteristicCollection()**](CharacteristicApi.md#postCharacteristicCollection) | **POST** /api/characteristics | Creates a Characteristic resource.
[**putCharacteristicItem()**](CharacteristicApi.md#putCharacteristicItem) | **PUT** /api/characteristics/{id} | Replaces the Characteristic resource.


## `deleteCharacteristicItem()`

```php
deleteCharacteristicItem($id)
```

Removes the Characteristic resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\CharacteristicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteCharacteristicItem($id);
} catch (Exception $e) {
    echo 'Exception when calling CharacteristicApi->deleteCharacteristicItem: ', $e->getMessage(), PHP_EOL;
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

## `getCharacteristicCollection()`

```php
getCharacteristicCollection($page): \ProductApi\Model\CharacteristicRead[]
```

Retrieves the collection of Characteristic resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\CharacteristicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | The collection page number

try {
    $result = $apiInstance->getCharacteristicCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacteristicApi->getCharacteristicCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional]

### Return type

[**\ProductApi\Model\CharacteristicRead[]**](../Model/CharacteristicRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharacteristicItem()`

```php
getCharacteristicItem($id): \ProductApi\Model\CharacteristicRead
```

Retrieves a Characteristic resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\CharacteristicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getCharacteristicItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacteristicApi->getCharacteristicItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ProductApi\Model\CharacteristicRead**](../Model/CharacteristicRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCharacteristicCollection()`

```php
postCharacteristicCollection($characteristic): \ProductApi\Model\CharacteristicRead
```

Creates a Characteristic resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\CharacteristicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$characteristic = new \ProductApi\Model\CharacteristicWrite(); // \ProductApi\Model\CharacteristicWrite | The new Characteristic resource

try {
    $result = $apiInstance->postCharacteristicCollection($characteristic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacteristicApi->postCharacteristicCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characteristic** | [**\ProductApi\Model\CharacteristicWrite**](../Model/CharacteristicWrite.md)| The new Characteristic resource | [optional]

### Return type

[**\ProductApi\Model\CharacteristicRead**](../Model/CharacteristicRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCharacteristicItem()`

```php
putCharacteristicItem($id, $characteristic): \ProductApi\Model\CharacteristicRead
```

Replaces the Characteristic resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\CharacteristicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$characteristic = new \ProductApi\Model\CharacteristicWrite(); // \ProductApi\Model\CharacteristicWrite | The updated Characteristic resource

try {
    $result = $apiInstance->putCharacteristicItem($id, $characteristic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacteristicApi->putCharacteristicItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **characteristic** | [**\ProductApi\Model\CharacteristicWrite**](../Model/CharacteristicWrite.md)| The updated Characteristic resource | [optional]

### Return type

[**\ProductApi\Model\CharacteristicRead**](../Model/CharacteristicRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
