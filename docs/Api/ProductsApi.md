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

Removes the products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ProductApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProductApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ProductApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Resource identifier

try {
    $apiInstance->deleteProductsItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductsCollection()`

```php
getProductsCollection($page, $title, $sku, $sku2, $description, $quantity_between, $quantity_gt, $quantity_gte, $quantity_lt, $quantity_lte, $is_available): \ProductApi\Model\ProductsRead[]
```

Retrieves the collection of products resources.

Retrieves the collection of products resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ProductApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProductApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ProductApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
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

try {
    $result = $apiInstance->getProductsCollection($page, $title, $sku, $sku2, $description, $quantity_between, $quantity_gt, $quantity_gte, $quantity_lt, $quantity_lte, $is_available);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductsCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
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

### Return type

[**\ProductApi\Model\ProductsRead[]**](../Model/ProductsRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

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

Retrieves a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ProductApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProductApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ProductApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Resource identifier

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
 **id** | **string**| Resource identifier |

### Return type

[**\ProductApi\Model\ProductsRead**](../Model/ProductsRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductsCollection()`

```php
postProductsCollection($products_write): \ProductApi\Model\ProductsRead
```

Creates a products resource.

Creates a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ProductApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProductApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ProductApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$products_write = new \ProductApi\Model\ProductsWrite(); // \ProductApi\Model\ProductsWrite | The new products resource

try {
    $result = $apiInstance->postProductsCollection($products_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->postProductsCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **products_write** | [**\ProductApi\Model\ProductsWrite**](../Model/ProductsWrite.md)| The new products resource |

### Return type

[**\ProductApi\Model\ProductsRead**](../Model/ProductsRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductsItem()`

```php
putProductsItem($id, $products_write): \ProductApi\Model\ProductsRead
```

Replaces the products resource.

Replaces the products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ProductApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProductApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ProductApi\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Resource identifier
$products_write = new \ProductApi\Model\ProductsWrite(); // \ProductApi\Model\ProductsWrite | The updated products resource

try {
    $result = $apiInstance->putProductsItem($id, $products_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->putProductsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **products_write** | [**\ProductApi\Model\ProductsWrite**](../Model/ProductsWrite.md)| The updated products resource |

### Return type

[**\ProductApi\Model\ProductsRead**](../Model/ProductsRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
