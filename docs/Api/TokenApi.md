# ProductApi\TokenApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postCredentialsItem()**](TokenApi.md#postCredentialsItem) | **POST** /token/authorize | 
[**postRefreshToken()**](TokenApi.md#postRefreshToken) | **POST** /token/refresh | 


## `postCredentialsItem()`

```php
postCredentialsItem($credentials): \ProductApi\Model\Token
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ProductApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProductApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ProductApi\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credentials = new \ProductApi\Model\Credentials(); // \ProductApi\Model\Credentials | Generate new JWT Token

try {
    $result = $apiInstance->postCredentialsItem($credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->postCredentialsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | [**\ProductApi\Model\Credentials**](../Model/Credentials.md)| Generate new JWT Token | [optional]

### Return type

[**\ProductApi\Model\Token**](../Model/Token.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRefreshToken()`

```php
postRefreshToken($refresh_token): \ProductApi\Model\Token
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ProductApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProductApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ProductApi\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refresh_token = new \ProductApi\Model\RefreshToken(); // \ProductApi\Model\RefreshToken | Generate new JWT Token

try {
    $result = $apiInstance->postRefreshToken($refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->postRefreshToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_token** | [**\ProductApi\Model\RefreshToken**](../Model/RefreshToken.md)| Generate new JWT Token | [optional]

### Return type

[**\ProductApi\Model\Token**](../Model/Token.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
