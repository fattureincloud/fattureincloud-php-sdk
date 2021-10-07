# FattureInCloud\CashbookApi

All URIs are relative to https://api-v2.fattureincloud.it.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCashbookEntry()**](CashbookApi.md#createCashbookEntry) | **POST** /c/{company_id}/cashbook | Create Cashbook Entry
[**deleteCashbookEntry()**](CashbookApi.md#deleteCashbookEntry) | **DELETE** /c/{company_id}/cashbook/{document_id} | Delete Cashbook Entry
[**getCashbookEntry()**](CashbookApi.md#getCashbookEntry) | **GET** /c/{company_id}/cashbook/{document_id} | Get Cashbook Entry
[**listCashbookEntries()**](CashbookApi.md#listCashbookEntries) | **GET** /c/{company_id}/cashbook | List Cashbook Entries
[**modifyCashbookEntry()**](CashbookApi.md#modifyCashbookEntry) | **PUT** /c/{company_id}/cashbook/{document_id} | Modify Cashbook Entry


## `createCashbookEntry()`

```php
createCashbookEntry($company_id, $create_cashbook_entry_request): \FattureInCloud\Model\CreateCashbookEntryResponse
```

Create Cashbook Entry

👥 Company context \\ 🔒 Required scope: `cashbook:a`  Create a new cashbook entry. It is possible to create an entry as an income or an outcome.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\CashbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$create_cashbook_entry_request = {"data":{"date":"2021-08-24","amount_in":122,"payment_account_in":{"id":333},"description":"Fattura n. 201/2021","entity_name":"Rossi S.r.l.","kind":"issued_document","document":{"id":54321},"type":"in"}}; // \FattureInCloud\Model\CreateCashbookEntryRequest | Cashbook entry.

try {
    $result = $apiInstance->createCashbookEntry($company_id, $create_cashbook_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashbookApi->createCashbookEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **create_cashbook_entry_request** | [**\FattureInCloud\Model\CreateCashbookEntryRequest**](../Model/CreateCashbookEntryRequest.md)| Cashbook entry. | [optional]

### Return type

[**\FattureInCloud\Model\CreateCashbookEntryResponse**](../Model/CreateCashbookEntryResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCashbookEntry()`

```php
deleteCashbookEntry($company_id, $document_id)
```

Delete Cashbook Entry

👥 Company context \\ 🔒 Required scope: `cashbook:a`  Delete an existing cashbook entry by its unique id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\CashbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$document_id = 56; // int | Unique Id of the document

try {
    $apiInstance->deleteCashbookEntry($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling CashbookApi->deleteCashbookEntry: ', $e->getMessage(), PHP_EOL;
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

## `getCashbookEntry()`

```php
getCashbookEntry($company_id, $document_id, $fields, $fieldset): \FattureInCloud\Model\GetCashbookEntryResponse
```

Get Cashbook Entry

👥 Company context \\ 🔒 Required scope: `cashbook:r` \\ 🎩 Customized responses supported  Get details of an existing document by its unique id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\CashbookApi(
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
    $result = $apiInstance->getCashbookEntry($company_id, $document_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashbookApi->getCashbookEntry: ', $e->getMessage(), PHP_EOL;
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

[**\FattureInCloud\Model\GetCashbookEntryResponse**](../Model/GetCashbookEntryResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCashbookEntries()`

```php
listCashbookEntries($company_id, $date_from, $date_to, $year, $type, $payment_account_id): \FattureInCloud\Model\ListCashbookEntriesResponse
```

List Cashbook Entries

👥 Company context 🔒 Required scope: cashbook:r \\  Get a list of cashbook notes that match the filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\CashbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$date_from = 'date_from_example'; // string | Start date.
$date_to = 'date_to_example'; // string | End date.
$year = 56; // int | Filter cashbook by year.
$type = 'type_example'; // string | Filter cashbook by type.
$payment_account_id = 56; // int | Filter by payment account.

try {
    $result = $apiInstance->listCashbookEntries($company_id, $date_from, $date_to, $year, $type, $payment_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashbookApi->listCashbookEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **date_from** | **string**| Start date. |
 **date_to** | **string**| End date. |
 **year** | **int**| Filter cashbook by year. | [optional]
 **type** | **string**| Filter cashbook by type. | [optional]
 **payment_account_id** | **int**| Filter by payment account. | [optional]

### Return type

[**\FattureInCloud\Model\ListCashbookEntriesResponse**](../Model/ListCashbookEntriesResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyCashbookEntry()`

```php
modifyCashbookEntry($company_id, $document_id, $modify_cashbook_entry_request): \FattureInCloud\Model\ModifyCashbookEntryResponse
```

Modify Cashbook Entry

👥 Company context \\ 🔒 Required scope: `cashbook:a`  Edit an existing cashbook entry by its unique id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\CashbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$document_id = 56; // int | Unique Id of the document
$modify_cashbook_entry_request = {"data":{"date":"2021-08-24","amount_in":122,"payment_account_in":{"id":333},"description":"Fattura n. 201/2021","entity_name":"Rossi S.r.l."}}; // \FattureInCloud\Model\ModifyCashbookEntryRequest | Cashbook Entry

try {
    $result = $apiInstance->modifyCashbookEntry($company_id, $document_id, $modify_cashbook_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashbookApi->modifyCashbookEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **document_id** | **int**| Unique Id of the document |
 **modify_cashbook_entry_request** | [**\FattureInCloud\Model\ModifyCashbookEntryRequest**](../Model/ModifyCashbookEntryRequest.md)| Cashbook Entry | [optional]

### Return type

[**\FattureInCloud\Model\ModifyCashbookEntryResponse**](../Model/ModifyCashbookEntryResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
