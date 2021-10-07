# FattureInCloud\ReceiptsApi

All URIs are relative to https://api-v2.fattureincloud.it.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReceipt()**](ReceiptsApi.md#createReceipt) | **POST** /c/{company_id}/receipts | Create Receipt
[**deleteReceipt()**](ReceiptsApi.md#deleteReceipt) | **DELETE** /c/{company_id}/receipts/{document_id} | Delete Receipt
[**getReceipt()**](ReceiptsApi.md#getReceipt) | **GET** /c/{company_id}/receipts/{document_id} | Get Receipt
[**getReceiptPreCreateInfo()**](ReceiptsApi.md#getReceiptPreCreateInfo) | **GET** /c/{company_id}/receipts/info | Get Receipt Pre-Create Info
[**getReceiptsMonthlyTotals()**](ReceiptsApi.md#getReceiptsMonthlyTotals) | **GET** /c/{company_id}/receipts/monthly_totals | Get Receipts Monthly Totals
[**listReceipts()**](ReceiptsApi.md#listReceipts) | **GET** /c/{company_id}/receipts | List Receipts
[**modifyReceipt()**](ReceiptsApi.md#modifyReceipt) | **PUT** /c/{company_id}/receipts/{document_id} | Modify Receipt


## `createReceipt()`

```php
createReceipt($company_id, $create_receipt_request): \FattureInCloud\Model\CreateReceiptResponse
```

Create Receipt

👥 Company context 🔒 Required scope: receipts:a  Create a new receipt.

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
$company_id = 12345; // int | The Referred Company Id.
$create_receipt_request = {"data":{"date":"2021-08-19","number":6,"numeration":"REC006","amount_net":8.2,"amount_vat":1.8,"amount_gross":10,"use_gross_prices":true,"type":"sales_receipt","description":"cassa 1","rc_center":"","payment_account":{"id":555,"name":"contanti"},"items_list":[{"id":888,"amount_net":8.2,"amount_vat":1.8,"amount_gross":10,"category":"altro","vat":{"id":0,"value":22,"description":"iva"}}]}}; // \FattureInCloud\Model\CreateReceiptRequest | The Receipt to create.

try {
    $result = $apiInstance->createReceipt($company_id, $create_receipt_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->createReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **create_receipt_request** | [**\FattureInCloud\Model\CreateReceiptRequest**](../Model/CreateReceiptRequest.md)| The Receipt to create. | [optional]

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

👥 Company context 🔒 Required scope: receipts:a  Delete an existing document by its unique id.

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
$company_id = 12345; // int | The Referred Company Id.
$document_id = 56; // int | Unique Id of the document

try {
    $apiInstance->deleteReceipt($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->deleteReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **document_id** | **int**| Unique Id of the document |

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

👥 Company context 🔒 Required scope: receipts:r 🎩 Customized responses supported  Get details of an existing document by its unique id.

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
$company_id = 12345; // int | The Referred Company Id.
$document_id = 56; // int | Unique Id of the document
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset

try {
    $result = $apiInstance->getReceipt($company_id, $document_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **document_id** | **int**| Unique Id of the document |
 **fields** | **string**| List of comma-separated fields. | [optional]
 **fieldset** | **string**| Name of the fieldset | [optional]

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

👥 Company context 🔒 Required scope: receipts:r  Get the info needed for the document creation flow.

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
$company_id = 12345; // int | The Referred Company Id.

try {
    $result = $apiInstance->getReceiptPreCreateInfo($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptPreCreateInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |

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

👥 Company context 🔒 Required scope: receipts:r  Get the monthly totals by year and receipt type.

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
$company_id = 12345; // int | The Referred Company Id.
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **type** | **string**| Receipt Type |
 **year** | **string**| Year for which you want monthly totals |

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
listReceipts($company_id, $fields, $fieldset, $page, $per_page, $sort): \FattureInCloud\Model\ListReceiptsResponse
```

List Receipts

👥 Company context 🔒 Required scope: receipts:r 🔍 Filtering: date, type, description, rc_center, created_at, updated_at ↕️ Sorting: date, rc_center, created_at, updated_at 📄 Paginated results 🎩 Customized responses supported  Get a list of receipt documents that match the filters.

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
$company_id = 12345; // int | The Referred Company Id.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset
$page = 1; // int | Requested page
$per_page = 5; // int | Items to be shown per page
$sort = 'sort_example'; // string | List of comma-separated fields for result sorting (minus for desc sorting)

try {
    $result = $apiInstance->listReceipts($company_id, $fields, $fieldset, $page, $per_page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->listReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **fields** | **string**| List of comma-separated fields. | [optional]
 **fieldset** | **string**| Name of the fieldset | [optional]
 **page** | **int**| Requested page | [optional] [default to 1]
 **per_page** | **int**| Items to be shown per page | [optional] [default to 5]
 **sort** | **string**| List of comma-separated fields for result sorting (minus for desc sorting) | [optional]

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

👥 Company context 🔒 Required scope: receipts:a  Edit an existing document by its unique id.

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
$company_id = 12345; // int | The Referred Company Id.
$document_id = 56; // int | Unique Id of the document
$modify_receipt_request = {"date":"2021-08-19","number":6,"numeration":"REC006","amount_net":8.2,"amount_vat":1.8,"amount_gross":10,"use_gross_prices":true,"type":"sales_receipt","description":"cassa 1","rc_center":"","payment_account":{"id":555,"name":"contanti"},"items_list":[{"id":888,"amount_net":8.2,"amount_vat":1.8,"amount_gross":10,"category":"altro","vat":{"id":0,"value":22,"description":"iva"}}]}; // \FattureInCloud\Model\ModifyReceiptRequest | Modified receipt.

try {
    $result = $apiInstance->modifyReceipt($company_id, $document_id, $modify_receipt_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->modifyReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **document_id** | **int**| Unique Id of the document |
 **modify_receipt_request** | [**\FattureInCloud\Model\ModifyReceiptRequest**](../Model/ModifyReceiptRequest.md)| Modified receipt. | [optional]

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
