# ProductApi\CategoriesApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategoriesCollection()**](CategoriesApi.md#getCategoriesCollection) | **GET** /api/categories | Retrieves the collection of Categories resources.
[**getCategoriesItem()**](CategoriesApi.md#getCategoriesItem) | **GET** /api/categories/{id} | Retrieves a Categories resource.
[**postCategoriesCollection()**](CategoriesApi.md#postCategoriesCollection) | **POST** /api/categories | Creates a Categories resource.
[**putCategoriesItem()**](CategoriesApi.md#putCategoriesItem) | **PUT** /api/categories/{id} | Replaces the Categories resource.


## `getCategoriesCollection()`

```php
getCategoriesCollection($page): \ProductApi\Model\CategoriesRead[]
```

Retrieves the collection of Categories resources.

Retrieves the collection of Categories resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ProductApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProductApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ProductApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getCategoriesCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoriesCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\ProductApi\Model\CategoriesRead[]**](../Model/CategoriesRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoriesItem()`

```php
getCategoriesItem($id): \ProductApi\Model\CategoriesRead
```

Retrieves a Categories resource.

Retrieves a Categories resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ProductApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProductApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ProductApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Resource identifier

try {
    $result = $apiInstance->getCategoriesItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoriesItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\ProductApi\Model\CategoriesRead**](../Model/CategoriesRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCategoriesCollection()`

```php
postCategoriesCollection($categories_write): \ProductApi\Model\CategoriesRead
```

Creates a Categories resource.

Creates a Categories resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ProductApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProductApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ProductApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categories_write = new \ProductApi\Model\CategoriesWrite(); // \ProductApi\Model\CategoriesWrite | The new Categories resource

try {
    $result = $apiInstance->postCategoriesCollection($categories_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->postCategoriesCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categories_write** | [**\ProductApi\Model\CategoriesWrite**](../Model/CategoriesWrite.md)| The new Categories resource |

### Return type

[**\ProductApi\Model\CategoriesRead**](../Model/CategoriesRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCategoriesItem()`

```php
putCategoriesItem($id, $categories_write): \ProductApi\Model\CategoriesRead
```

Replaces the Categories resource.

Replaces the Categories resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ProductApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProductApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ProductApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Resource identifier
$categories_write = new \ProductApi\Model\CategoriesWrite(); // \ProductApi\Model\CategoriesWrite | The updated Categories resource

try {
    $result = $apiInstance->putCategoriesItem($id, $categories_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->putCategoriesItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |
 **categories_write** | [**\ProductApi\Model\CategoriesWrite**](../Model/CategoriesWrite.md)| The updated Categories resource |

### Return type

[**\ProductApi\Model\CategoriesRead**](../Model/CategoriesRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
