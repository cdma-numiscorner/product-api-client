# ProductApi\ProductTypeApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductTypeCollection()**](ProductTypeApi.md#getProductTypeCollection) | **GET** /api/product-types | Retrieves the collection of product-type resources.
[**getProductTypeItem()**](ProductTypeApi.md#getProductTypeItem) | **GET** /api/product-types/{id} | Retrieves a product-type resource.
[**postProductTypeCollection()**](ProductTypeApi.md#postProductTypeCollection) | **POST** /api/product-types | Creates a product-type resource.
[**putProductTypeItem()**](ProductTypeApi.md#putProductTypeItem) | **PUT** /api/product-types/{id} | Replaces the product-type resource.


## `getProductTypeCollection()`

```php
getProductTypeCollection($page): \ProductApi\Model\ProductTypeRead[]
```

Retrieves the collection of product-type resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\ProductTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | The collection page number

try {
    $result = $apiInstance->getProductTypeCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->getProductTypeCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional]

### Return type

[**\ProductApi\Model\ProductTypeRead[]**](../Model/ProductTypeRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductTypeItem()`

```php
getProductTypeItem($id): \ProductApi\Model\ProductTypeRead
```

Retrieves a product-type resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\ProductTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getProductTypeItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->getProductTypeItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ProductApi\Model\ProductTypeRead**](../Model/ProductTypeRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductTypeCollection()`

```php
postProductTypeCollection($product_type): \ProductApi\Model\ProductTypeRead
```

Creates a product-type resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\ProductTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_type = new \ProductApi\Model\ProductTypeWrite(); // \ProductApi\Model\ProductTypeWrite | The new product-type resource

try {
    $result = $apiInstance->postProductTypeCollection($product_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->postProductTypeCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_type** | [**\ProductApi\Model\ProductTypeWrite**](../Model/ProductTypeWrite.md)| The new product-type resource | [optional]

### Return type

[**\ProductApi\Model\ProductTypeRead**](../Model/ProductTypeRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductTypeItem()`

```php
putProductTypeItem($id, $product_type): \ProductApi\Model\ProductTypeRead
```

Replaces the product-type resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\ProductTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$product_type = new \ProductApi\Model\ProductTypeWrite(); // \ProductApi\Model\ProductTypeWrite | The updated product-type resource

try {
    $result = $apiInstance->putProductTypeItem($id, $product_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->putProductTypeItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **product_type** | [**\ProductApi\Model\ProductTypeWrite**](../Model/ProductTypeWrite.md)| The updated product-type resource | [optional]

### Return type

[**\ProductApi\Model\ProductTypeRead**](../Model/ProductTypeRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
