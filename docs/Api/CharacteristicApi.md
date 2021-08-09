# ProductApi\CharacteristicApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharacteristicCollection()**](CharacteristicApi.md#getCharacteristicCollection) | **GET** /api/characteristics | Retrieves the collection of Characteristic resources.
[**getCharacteristicItem()**](CharacteristicApi.md#getCharacteristicItem) | **GET** /api/characteristics/{id} | Retrieves a Characteristic resource.
[**postCharacteristicCollection()**](CharacteristicApi.md#postCharacteristicCollection) | **POST** /api/characteristics | Creates a Characteristic resource.
[**putCharacteristicItem()**](CharacteristicApi.md#putCharacteristicItem) | **PUT** /api/characteristics/{id} | Replaces the Characteristic resource.


## `getCharacteristicCollection()`

```php
getCharacteristicCollection($page): \ProductApi\Model\CharacteristicRead[]
```

Retrieves the collection of Characteristic resources.

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
$page = 1; // int | The collection page number

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
 **page** | **int**| The collection page number | [optional] [default to 1]

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
$id = 'id_example'; // string | Resource identifier

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
 **id** | **string**| Resource identifier |

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
postCharacteristicCollection($characteristic_write): \ProductApi\Model\CharacteristicRead
```

Creates a Characteristic resource.

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
$characteristic_write = new \ProductApi\Model\CharacteristicWrite(); // \ProductApi\Model\CharacteristicWrite | The new Characteristic resource

try {
    $result = $apiInstance->postCharacteristicCollection($characteristic_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacteristicApi->postCharacteristicCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characteristic_write** | [**\ProductApi\Model\CharacteristicWrite**](../Model/CharacteristicWrite.md)| The new Characteristic resource |

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
putCharacteristicItem($id, $characteristic_write): \ProductApi\Model\CharacteristicRead
```

Replaces the Characteristic resource.

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
$id = 'id_example'; // string | Resource identifier
$characteristic_write = new \ProductApi\Model\CharacteristicWrite(); // \ProductApi\Model\CharacteristicWrite | The updated Characteristic resource

try {
    $result = $apiInstance->putCharacteristicItem($id, $characteristic_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacteristicApi->putCharacteristicItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **characteristic_write** | [**\ProductApi\Model\CharacteristicWrite**](../Model/CharacteristicWrite.md)| The updated Characteristic resource |

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
