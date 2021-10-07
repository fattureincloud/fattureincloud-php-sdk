# FattureInCloud\ProductsApi

All URIs are relative to https://api-v2.fattureincloud.it.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProduct()**](ProductsApi.md#createProduct) | **POST** /c/{company_id}/products | Create Product
[**deleteProduct()**](ProductsApi.md#deleteProduct) | **DELETE** /c/{company_id}/products/{product_id} | Delete Product
[**getProduct()**](ProductsApi.md#getProduct) | **GET** /c/{company_id}/products/{product_id} | Get Product
[**listProducts()**](ProductsApi.md#listProducts) | **GET** /c/{company_id}/products | List Products
[**modifyProduct()**](ProductsApi.md#modifyProduct) | **PUT** /c/{company_id}/products/{product_id} | Modify Product


## `createProduct()`

```php
createProduct($company_id, $create_product_request): \FattureInCloud\Model\CreateProductResponse
```

Create Product

👥 Company context 🔒 Required scope: products:a  Create a new product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$create_product_request = {"data":{"name":"Tavolo di marmo","code":"TAVOLO003","net_price":240,"gross_price":280,"use_gross_price":false,"net_cost":0,"measure":"","description":"Tavolo in marmo pregiato","category":"arredamento","in_stock":true,"default_vat":{"id":3,"value":22,"description":"Non imponibile art. 123","notes":"IVA non imponibile ai sensi dell'articolo 123, comma 2","is_disabled":false}}}; // \FattureInCloud\Model\CreateProductRequest

try {
    $result = $apiInstance->createProduct($company_id, $create_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **create_product_request** | [**\FattureInCloud\Model\CreateProductRequest**](../Model/CreateProductRequest.md)|  | [optional]

### Return type

[**\FattureInCloud\Model\CreateProductResponse**](../Model/CreateProductResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProduct()`

```php
deleteProduct($company_id, $product_id)
```

Delete Product

Delete Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$product_id = 56; // int

try {
    $apiInstance->deleteProduct($company_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **product_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProduct()`

```php
getProduct($company_id, $product_id, $fields, $fieldset): \FattureInCloud\Model\GetProductResponse
```

Get Product

👥 Company context 🔒 Required scope: products:r 🎩 Customized responses supported  Get product details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$product_id = 56; // int
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset

try {
    $result = $apiInstance->getProduct($company_id, $product_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **product_id** | **int**|  |
 **fields** | **string**| List of comma-separated fields. | [optional]
 **fieldset** | **string**| Name of the fieldset | [optional]

### Return type

[**\FattureInCloud\Model\GetProductResponse**](../Model/GetProductResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProducts()`

```php
listProducts($company_id, $fields, $fieldset, $sort, $page, $per_page): \FattureInCloud\Model\ListProductsResponse
```

List Products

👥 Company context 🔒 Required scope: products:r 🔍 Filtering: id, name, code, net_price, gross_price, net_cost, description, category, notes, in_stock, created_at, updated_at ↕️ Sorting: name, code, net_price, gross_price, net_cost, description, category, notes, in_stock, created_at, updated_at 📄 Paginated results 🎩 Customized responses supported  Get a list of products that match the filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset
$sort = 'sort_example'; // string | List of comma-separated fields for result sorting (minus for desc sorting)
$page = 1; // int | Requested page
$per_page = 5; // int | Items to be shown per page

try {
    $result = $apiInstance->listProducts($company_id, $fields, $fieldset, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **fields** | **string**| List of comma-separated fields. | [optional]
 **fieldset** | **string**| Name of the fieldset | [optional]
 **sort** | **string**| List of comma-separated fields for result sorting (minus for desc sorting) | [optional]
 **page** | **int**| Requested page | [optional] [default to 1]
 **per_page** | **int**| Items to be shown per page | [optional] [default to 5]

### Return type

[**\FattureInCloud\Model\ListProductsResponse**](../Model/ListProductsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyProduct()`

```php
modifyProduct($company_id, $product_id, $modify_product_request): \FattureInCloud\Model\ModifyProductResponse
```

Modify Product

👥 Company context 🔒 Required scope: products:a  Edit an existing product by its unique id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$product_id = 56; // int
$modify_product_request = {"data":{"name":"Tavolo di marmo","code":"TAVOLO003","net_price":240,"gross_price":280,"use_gross_price":false,"net_cost":0,"measure":"","description":"Tavolo in marmo pregiato","category":"arredamento","in_stock":true,"default_vat":{"id":3,"value":22,"description":"Non imponibile art. 123","notes":"IVA non imponibile ai sensi dell'articolo 123, comma 2","is_disabled":false}}}; // \FattureInCloud\Model\ModifyProductRequest | Modified product details.

try {
    $result = $apiInstance->modifyProduct($company_id, $product_id, $modify_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->modifyProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **product_id** | **int**|  |
 **modify_product_request** | [**\FattureInCloud\Model\ModifyProductRequest**](../Model/ModifyProductRequest.md)| Modified product details. | [optional]

### Return type

[**\FattureInCloud\Model\ModifyProductResponse**](../Model/ModifyProductResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
