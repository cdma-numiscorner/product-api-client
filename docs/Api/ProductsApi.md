# ProductApi\ProductsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductsItem()**](ProductsApi.md#deleteProductsItem) | **DELETE** /api/products/{id} | Removes the products resource.
[**getProductsCollection()**](ProductsApi.md#getProductsCollection) | **GET** /api/products | Retrieves the collection of products resources.
[**getProductsItem()**](ProductsApi.md#getProductsItem) | **GET** /api/products/{id} | Retrieves a products resource.
[**postProductsCollection()**](ProductsApi.md#postProductsCollection) | **POST** /api/products | Creates a products resource.
[**putProductsItem()**](ProductsApi.md#putProductsItem) | **PUT** /api/products/{id} | Replaces the products resource.


## `deleteProductsItem()`

```php
deleteProductsItem($id)
```

Removes the products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteProductsItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductsItem: ', $e->getMessage(), PHP_EOL;
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

## `getProductsCollection()`

```php
getProductsCollection($title, $sku, $sku2, $description, $quantity_between, $quantity_gt, $quantity_gte, $quantity_lt, $quantity_lte, $is_available, $page): \ProductApi\Model\ProductsRead[]
```

Retrieves the collection of products resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$title = 'title_example'; // string
$sku = 'sku_example'; // string
$sku2 = array('sku_example'); // string[]
$description = 'description_example'; // string
$quantity_between = 'quantity_between_example'; // string
$quantity_gt = 'quantity_gt_example'; // string
$quantity_gte = 'quantity_gte_example'; // string
$quantity_lt = 'quantity_lt_example'; // string
$quantity_lte = 'quantity_lte_example'; // string
$is_available = True; // bool
$page = 56; // int | The collection page number

try {
    $result = $apiInstance->getProductsCollection($title, $sku, $sku2, $description, $quantity_between, $quantity_gt, $quantity_gte, $quantity_lt, $quantity_lte, $is_available, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductsCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**|  | [optional]
 **sku** | **string**|  | [optional]
 **sku2** | [**string[]**](../Model/string.md)|  | [optional]
 **description** | **string**|  | [optional]
 **quantity_between** | **string**|  | [optional]
 **quantity_gt** | **string**|  | [optional]
 **quantity_gte** | **string**|  | [optional]
 **quantity_lt** | **string**|  | [optional]
 **quantity_lte** | **string**|  | [optional]
 **is_available** | **bool**|  | [optional]
 **page** | **int**| The collection page number | [optional]

### Return type

[**\ProductApi\Model\ProductsRead[]**](../Model/ProductsRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductsItem()`

```php
getProductsItem($id): \ProductApi\Model\ProductsRead
```

Retrieves a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getProductsItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ProductApi\Model\ProductsRead**](../Model/ProductsRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductsCollection()`

```php
postProductsCollection($products): \ProductApi\Model\ProductsRead
```

Creates a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$products = new \ProductApi\Model\ProductsWrite(); // \ProductApi\Model\ProductsWrite | The new products resource

try {
    $result = $apiInstance->postProductsCollection($products);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->postProductsCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **products** | [**\ProductApi\Model\ProductsWrite**](../Model/ProductsWrite.md)| The new products resource | [optional]

### Return type

[**\ProductApi\Model\ProductsRead**](../Model/ProductsRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductsItem()`

```php
putProductsItem($id, $products): \ProductApi\Model\ProductsRead
```

Replaces the products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ProductApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$products = new \ProductApi\Model\ProductsWrite(); // \ProductApi\Model\ProductsWrite | The updated products resource

try {
    $result = $apiInstance->putProductsItem($id, $products);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->putProductsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **products** | [**\ProductApi\Model\ProductsWrite**](../Model/ProductsWrite.md)| The updated products resource | [optional]

### Return type

[**\ProductApi\Model\ProductsRead**](../Model/ProductsRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
