# OpenAPIClient-php

# Authentication

<!-- ReDoc-Inject: <security-definitions> -->


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CategoriesApi* | [**getCategoriesCollection**](docs/Api/CategoriesApi.md#getcategoriescollection) | **GET** /api/categories | Retrieves the collection of Categories resources.
*CategoriesApi* | [**getCategoriesItem**](docs/Api/CategoriesApi.md#getcategoriesitem) | **GET** /api/categories/{id} | Retrieves a Categories resource.
*CategoriesApi* | [**postCategoriesCollection**](docs/Api/CategoriesApi.md#postcategoriescollection) | **POST** /api/categories | Creates a Categories resource.
*CategoriesApi* | [**putCategoriesItem**](docs/Api/CategoriesApi.md#putcategoriesitem) | **PUT** /api/categories/{id} | Replaces the Categories resource.
*CharacteristicApi* | [**deleteCharacteristicItem**](docs/Api/CharacteristicApi.md#deletecharacteristicitem) | **DELETE** /api/characteristics/{id} | Removes the Characteristic resource.
*CharacteristicApi* | [**getCharacteristicCollection**](docs/Api/CharacteristicApi.md#getcharacteristiccollection) | **GET** /api/characteristics | Retrieves the collection of Characteristic resources.
*CharacteristicApi* | [**getCharacteristicItem**](docs/Api/CharacteristicApi.md#getcharacteristicitem) | **GET** /api/characteristics/{id} | Retrieves a Characteristic resource.
*CharacteristicApi* | [**postCharacteristicCollection**](docs/Api/CharacteristicApi.md#postcharacteristiccollection) | **POST** /api/characteristics | Creates a Characteristic resource.
*CharacteristicApi* | [**putCharacteristicItem**](docs/Api/CharacteristicApi.md#putcharacteristicitem) | **PUT** /api/characteristics/{id} | Replaces the Characteristic resource.
*ProductTypeApi* | [**getProductTypeCollection**](docs/Api/ProductTypeApi.md#getproducttypecollection) | **GET** /api/product-types | Retrieves the collection of product-type resources.
*ProductTypeApi* | [**getProductTypeItem**](docs/Api/ProductTypeApi.md#getproducttypeitem) | **GET** /api/product-types/{id} | Retrieves a product-type resource.
*ProductTypeApi* | [**postProductTypeCollection**](docs/Api/ProductTypeApi.md#postproducttypecollection) | **POST** /api/product-types | Creates a product-type resource.
*ProductTypeApi* | [**putProductTypeItem**](docs/Api/ProductTypeApi.md#putproducttypeitem) | **PUT** /api/product-types/{id} | Replaces the product-type resource.
*ProductsApi* | [**deleteProductsItem**](docs/Api/ProductsApi.md#deleteproductsitem) | **DELETE** /api/products/{id} | Removes the products resource.
*ProductsApi* | [**getProductsCollection**](docs/Api/ProductsApi.md#getproductscollection) | **GET** /api/products | Retrieves the collection of products resources.
*ProductsApi* | [**getProductsItem**](docs/Api/ProductsApi.md#getproductsitem) | **GET** /api/products/{id} | Retrieves a products resource.
*ProductsApi* | [**postProductsCollection**](docs/Api/ProductsApi.md#postproductscollection) | **POST** /api/products | Creates a products resource.
*ProductsApi* | [**putProductsItem**](docs/Api/ProductsApi.md#putproductsitem) | **PUT** /api/products/{id} | Replaces the products resource.
*TokenApi* | [**postCredentialsItem**](docs/Api/TokenApi.md#postcredentialsitem) | **POST** /token/authorize | 
*TokenApi* | [**postRefreshToken**](docs/Api/TokenApi.md#postrefreshtoken) | **POST** /token/refresh | 
*UserApi* | [**getUserCollection**](docs/Api/UserApi.md#getusercollection) | **GET** /api/users | Retrieves the collection of User resources.
*UserApi* | [**getUserItem**](docs/Api/UserApi.md#getuseritem) | **GET** /api/users/{id} | Retrieves a User resource.
*UserApi* | [**postUserCollection**](docs/Api/UserApi.md#postusercollection) | **POST** /api/users | Creates a User resource.
*UserApi* | [**putUserItem**](docs/Api/UserApi.md#putuseritem) | **PUT** /api/users/{id} | Replaces the User resource.

## Models

- [CategoriesRead](docs/Model/CategoriesRead.md)
- [CategoriesWrite](docs/Model/CategoriesWrite.md)
- [CharacteristicRead](docs/Model/CharacteristicRead.md)
- [CharacteristicWrite](docs/Model/CharacteristicWrite.md)
- [Credentials](docs/Model/Credentials.md)
- [ProductTypeRead](docs/Model/ProductTypeRead.md)
- [ProductTypeWrite](docs/Model/ProductTypeWrite.md)
- [ProductsRead](docs/Model/ProductsRead.md)
- [ProductsWrite](docs/Model/ProductsWrite.md)
- [RefreshToken](docs/Model/RefreshToken.md)
- [Token](docs/Model/Token.md)
- [UserUserRead](docs/Model/UserUserRead.md)
- [UserUserWrite](docs/Model/UserUserWrite.md)

## Authorization

### apiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
