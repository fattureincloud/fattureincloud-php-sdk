# FattureInCloud\PriceListsApi

All URIs are relative to https://api-v2.fattureincloud.it, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPriceListItems()**](PriceListsApi.md#getPriceListItems) | **GET** /c/{company_id}/price_lists/{price_list_id}/items | Get PriceList Items List |
| [**getPriceLists()**](PriceListsApi.md#getPriceLists) | **GET** /c/{company_id}/price_lists | Get PriceLists |


## `getPriceListItems()`

```php
getPriceListItems($company_id, $price_list_id): \FattureInCloud\Model\GetPriceListItemsResponse
```

Get PriceList Items List

Retrieves all the Items of a PriceList

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$price_list_id = 'price_list_id_example'; // string

try {
    $result = $apiInstance->getPriceListItems($company_id, $price_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **price_list_id** | **string**|  | |

### Return type

[**\FattureInCloud\Model\GetPriceListItemsResponse**](../Model/GetPriceListItemsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceLists()`

```php
getPriceLists($company_id): \FattureInCloud\Model\ListPriceListsResponse
```

Get PriceLists

Retrieves all price lists of the company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.

try {
    $result = $apiInstance->getPriceLists($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |

### Return type

[**\FattureInCloud\Model\ListPriceListsResponse**](../Model/ListPriceListsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
