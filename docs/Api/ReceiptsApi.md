# FattureInCloud\ReceiptsApi

All URIs are relative to https://api-v2.fattureincloud.it, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReceipt()**](ReceiptsApi.md#createReceipt) | **POST** /c/{company_id}/receipts | Create Receipt |
| [**deleteReceipt()**](ReceiptsApi.md#deleteReceipt) | **DELETE** /c/{company_id}/receipts/{document_id} | Delete Receipt |
| [**getReceipt()**](ReceiptsApi.md#getReceipt) | **GET** /c/{company_id}/receipts/{document_id} | Get Receipt |
| [**getReceiptPreCreateInfo()**](ReceiptsApi.md#getReceiptPreCreateInfo) | **GET** /c/{company_id}/receipts/info | Get Receipt Pre-Create Info |
| [**getReceiptsMonthlyTotals()**](ReceiptsApi.md#getReceiptsMonthlyTotals) | **GET** /c/{company_id}/receipts/monthly_totals | Get Receipts Monthly Totals |
| [**listReceipts()**](ReceiptsApi.md#listReceipts) | **GET** /c/{company_id}/receipts | List Receipts |
| [**modifyReceipt()**](ReceiptsApi.md#modifyReceipt) | **PUT** /c/{company_id}/receipts/{document_id} | Modify Receipt |


## `createReceipt()`

```php
createReceipt($company_id, $create_receipt_request): \FattureInCloud\Model\CreateReceiptResponse
```

Create Receipt

Creates a new receipt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$create_receipt_request = new \FattureInCloud\Model\CreateReceiptRequest; // \FattureInCloud\Model\CreateReceiptRequest | The Receipt to create.

try {
    $result = $apiInstance->createReceipt($company_id, $create_receipt_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->createReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **create_receipt_request** | [**\FattureInCloud\Model\CreateReceiptRequest**](../Model/CreateReceiptRequest.md)| The Receipt to create. | [optional] |

### Return type

[**\FattureInCloud\Model\CreateReceiptResponse**](../Model/CreateReceiptResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReceipt()`

```php
deleteReceipt($company_id, $document_id)
```

Delete Receipt

Deletes the specified receipt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.

try {
    $apiInstance->deleteReceipt($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->deleteReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |

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

## `getReceipt()`

```php
getReceipt($company_id, $document_id, $fields, $fieldset): \FattureInCloud\Model\GetReceiptResponse
```

Get Receipt

Gets the specified receipt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.

try {
    $result = $apiInstance->getReceipt($company_id, $document_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |
| **fields** | **string**| List of comma-separated fields. | [optional] |
| **fieldset** | **string**| Name of the fieldset. | [optional] |

### Return type

[**\FattureInCloud\Model\GetReceiptResponse**](../Model/GetReceiptResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceiptPreCreateInfo()`

```php
getReceiptPreCreateInfo($company_id): \FattureInCloud\Model\GetReceiptPreCreateInfoResponse
```

Get Receipt Pre-Create Info

Retrieves the information useful while creating a new receipt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.

try {
    $result = $apiInstance->getReceiptPreCreateInfo($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptPreCreateInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |

### Return type

[**\FattureInCloud\Model\GetReceiptPreCreateInfoResponse**](../Model/GetReceiptPreCreateInfoResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceiptsMonthlyTotals()`

```php
getReceiptsMonthlyTotals($company_id, $type, $year): \FattureInCloud\Model\GetReceiptsMonthlyTotalsResponse
```

Get Receipts Monthly Totals

Returns the monthly totals by year and receipt type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$type = 'type_example'; // string | Receipt Type
$year = 'year_example'; // string | Year for which you want monthly totals

try {
    $result = $apiInstance->getReceiptsMonthlyTotals($company_id, $type, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptsMonthlyTotals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **type** | **string**| Receipt Type | |
| **year** | **string**| Year for which you want monthly totals | |

### Return type

[**\FattureInCloud\Model\GetReceiptsMonthlyTotalsResponse**](../Model/GetReceiptsMonthlyTotalsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReceipts()`

```php
listReceipts($company_id, $fields, $fieldset, $page, $per_page, $sort, $q): \FattureInCloud\Model\ListReceiptsResponse
```

List Receipts

Lists the receipts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.
$page = 1; // int | The page to retrieve.
$per_page = 5; // int | The size of the page.
$sort = 'sort_example'; // string | List of comma-separated fields for result sorting (minus for desc sorting).
$q = 'q_example'; // string | Query for filtering the results.

try {
    $result = $apiInstance->listReceipts($company_id, $fields, $fieldset, $page, $per_page, $sort, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->listReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **fields** | **string**| List of comma-separated fields. | [optional] |
| **fieldset** | **string**| Name of the fieldset. | [optional] |
| **page** | **int**| The page to retrieve. | [optional] [default to 1] |
| **per_page** | **int**| The size of the page. | [optional] [default to 5] |
| **sort** | **string**| List of comma-separated fields for result sorting (minus for desc sorting). | [optional] |
| **q** | **string**| Query for filtering the results. | [optional] |

### Return type

[**\FattureInCloud\Model\ListReceiptsResponse**](../Model/ListReceiptsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyReceipt()`

```php
modifyReceipt($company_id, $document_id, $modify_receipt_request): \FattureInCloud\Model\ModifyReceiptResponse
```

Modify Receipt

Modifies the specified receipt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.
$modify_receipt_request = new \FattureInCloud\Model\ModifyReceiptRequest; // \FattureInCloud\Model\ModifyReceiptRequest | Modified receipt.

try {
    $result = $apiInstance->modifyReceipt($company_id, $document_id, $modify_receipt_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->modifyReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |
| **modify_receipt_request** | [**\FattureInCloud\Model\ModifyReceiptRequest**](../Model/ModifyReceiptRequest.md)| Modified receipt. | [optional] |

### Return type

[**\FattureInCloud\Model\ModifyReceiptResponse**](../Model/ModifyReceiptResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
