# FattureInCloud\IssuedDocumentsApi

All URIs are relative to https://api-v2.fattureincloud.it.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIssuedDocument()**](IssuedDocumentsApi.md#createIssuedDocument) | **POST** /c/{company_id}/issued_documents | Create Issued Document
[**deleteIssuedDocument()**](IssuedDocumentsApi.md#deleteIssuedDocument) | **DELETE** /c/{company_id}/issued_documents/{document_id} | Delete Issued Document
[**deleteIssuedDocumentAttachment()**](IssuedDocumentsApi.md#deleteIssuedDocumentAttachment) | **DELETE** /c/{company_id}/issued_documents/{document_id}/attachment | Delete Issued Document Attachment
[**getEmailData()**](IssuedDocumentsApi.md#getEmailData) | **GET** /c/{company_id}/issued_documents/{document_id}/email | Get Email Data
[**getExistingIssuedDocumentTotals()**](IssuedDocumentsApi.md#getExistingIssuedDocumentTotals) | **POST** /c/{company_id}/issued_documents/{document_id}/totals | Get Existing Issued Document Totals
[**getIssuedDocument()**](IssuedDocumentsApi.md#getIssuedDocument) | **GET** /c/{company_id}/issued_documents/{document_id} | Get Issued Document
[**getIssuedDocumentPreCreateInfo()**](IssuedDocumentsApi.md#getIssuedDocumentPreCreateInfo) | **GET** /c/{company_id}/issued_documents/info | Get Issued Document Pre-create info
[**getNewIssuedDocumentTotals()**](IssuedDocumentsApi.md#getNewIssuedDocumentTotals) | **POST** /c/{company_id}/issued_documents/totals | Get New Issued Document Totals
[**listIssuedDocuments()**](IssuedDocumentsApi.md#listIssuedDocuments) | **GET** /c/{company_id}/issued_documents | List Issued Documents
[**modifyIssuedDocument()**](IssuedDocumentsApi.md#modifyIssuedDocument) | **PUT** /c/{company_id}/issued_documents/{document_id} | Modify Issued Document
[**scheduleEmail()**](IssuedDocumentsApi.md#scheduleEmail) | **POST** /c/{company_id}/issued_documents/{document_id}/email | Schedule Email
[**uploadIssuedDocumentAttachment()**](IssuedDocumentsApi.md#uploadIssuedDocumentAttachment) | **POST** /c/{company_id}/issued_documents/attachment | Upload Issued Document Attachment


## `createIssuedDocument()`

```php
createIssuedDocument($company_id, $create_issued_document_request): \FattureInCloud\Model\CreateIssuedDocumentResponse
```

Create Issued Document

Creates a new document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$create_issued_document_request = {"data":{"type":"receipt","numeration":"rec123","subject":"","visible_subject":"","amount_net":68.18,"amount_vat":6.82,"amount_due_discount":0,"entity":{"id":54321,"name":"Mary Red S.r.L.","vat_number":"IT05432181211","tax_code":"IT05432181211","address_street":"Via Italia, 66","address_postal_code":"20900","address_city":"Milano","address_province":"MI","address_extra":"","country":"Italia","certified_email":"mary@pec.red.com","ei_code":"ABCXCR1"},"date":"2021-08-20","number":1,"next_due_date":"2021-12-31","attachment_token":"ypbqqe4u8w8bdabcd5fd5b1a","items_list":[{"product_id":333,"code":"SG3","name":"Soggiorno","measure":"","net_price":68.18182,"category":"","id":277875565,"gross_price":75,"apply_withholding_taxes":true,"discount":0,"discount_highlight":false,"in_dn":false,"qty":1,"vat":{"id":3,"value":10,"description":""},"stock":true,"description":"","not_taxable":false}],"payments_list":[{"amount":75,"due_date":"2020-08-23","id":444,"payment_terms":{"days":0,"type":"standard"},"status":"not_paid"}],"payment_method":{"id":4}}}; // \FattureInCloud\Model\CreateIssuedDocumentRequest | The Issued Document

try {
    $result = $apiInstance->createIssuedDocument($company_id, $create_issued_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->createIssuedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **create_issued_document_request** | [**\FattureInCloud\Model\CreateIssuedDocumentRequest**](../Model/CreateIssuedDocumentRequest.md)| The Issued Document | [optional]

### Return type

[**\FattureInCloud\Model\CreateIssuedDocumentResponse**](../Model/CreateIssuedDocumentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIssuedDocument()`

```php
deleteIssuedDocument($company_id, $document_id)
```

Delete Issued Document

Deletes the specified document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.

try {
    $apiInstance->deleteIssuedDocument($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->deleteIssuedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **document_id** | **int**| The ID of the document. |

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

## `deleteIssuedDocumentAttachment()`

```php
deleteIssuedDocumentAttachment($company_id, $document_id)
```

Delete Issued Document Attachment

Removes the attachment of the specified document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.

try {
    $apiInstance->deleteIssuedDocumentAttachment($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->deleteIssuedDocumentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **document_id** | **int**| The ID of the document. |

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

## `getEmailData()`

```php
getEmailData($company_id, $document_id): \FattureInCloud\Model\GetEmailDataResponse
```

Get Email Data

Gets the pre-compiled email details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.

try {
    $result = $apiInstance->getEmailData($company_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->getEmailData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **document_id** | **int**| The ID of the document. |

### Return type

[**\FattureInCloud\Model\GetEmailDataResponse**](../Model/GetEmailDataResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExistingIssuedDocumentTotals()`

```php
getExistingIssuedDocumentTotals($company_id, $document_id, $get_existing_issued_document_totals_request): \FattureInCloud\Model\GetExistingIssuedDocumentTotalsResponse
```

Get Existing Issued Document Totals

Returns the totals for a specified document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.
$get_existing_issued_document_totals_request = {"data":{"rivalsa":20}}; // \FattureInCloud\Model\GetExistingIssuedDocumentTotalsRequest

try {
    $result = $apiInstance->getExistingIssuedDocumentTotals($company_id, $document_id, $get_existing_issued_document_totals_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->getExistingIssuedDocumentTotals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **document_id** | **int**| The ID of the document. |
 **get_existing_issued_document_totals_request** | [**\FattureInCloud\Model\GetExistingIssuedDocumentTotalsRequest**](../Model/GetExistingIssuedDocumentTotalsRequest.md)|  | [optional]

### Return type

[**\FattureInCloud\Model\GetExistingIssuedDocumentTotalsResponse**](../Model/GetExistingIssuedDocumentTotalsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssuedDocument()`

```php
getIssuedDocument($company_id, $document_id, $fields, $fieldset): \FattureInCloud\Model\GetIssuedDocumentResponse
```

Get Issued Document

Gets the specified document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
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
    $result = $apiInstance->getIssuedDocument($company_id, $document_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->getIssuedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **document_id** | **int**| The ID of the document. |
 **fields** | **string**| List of comma-separated fields. | [optional]
 **fieldset** | **string**| Name of the fieldset. | [optional]

### Return type

[**\FattureInCloud\Model\GetIssuedDocumentResponse**](../Model/GetIssuedDocumentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssuedDocumentPreCreateInfo()`

```php
getIssuedDocumentPreCreateInfo($company_id, $type): \FattureInCloud\Model\GetIssuedDocumentPreCreateInfoResponse
```

Get Issued Document Pre-create info

Retrieves the information useful while creating a new document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$type = 'type_example'; // string | The type of the issued document.

try {
    $result = $apiInstance->getIssuedDocumentPreCreateInfo($company_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->getIssuedDocumentPreCreateInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **type** | **string**| The type of the issued document. |

### Return type

[**\FattureInCloud\Model\GetIssuedDocumentPreCreateInfoResponse**](../Model/GetIssuedDocumentPreCreateInfoResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewIssuedDocumentTotals()`

```php
getNewIssuedDocumentTotals($company_id, $get_new_issued_document_totals_request): \FattureInCloud\Model\GetNewIssuedDocumentTotalsResponse
```

Get New Issued Document Totals

Returns the totals for a new document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$get_new_issued_document_totals_request = {"data":{"id":12345,"type":"receipt","year":2021,"numeration":"rec123","subject":"","visible_subject":"","rc_center":"","stamp_duty":0,"use_gross_prices":false,"delivery_note":false,"accompanying_invoice":false,"amount_net":68.18,"amount_vat":6.82,"amount_due_discount":0,"amount_rivalsa":0,"amount_cassa":0,"amount_withholding_tax":0,"amount_other_withholding_tax":0,"permanent_token":"6pzguy12h45rn9yqwertp43t7ec90vr","h_margins":15,"v_margins":16,"show_payment_method":false,"show_payments":true,"show_totals":"all","show_paypal_button":true,"show_notification_button":false,"is_marked":false,"created_at":"2021-08-13 09:30:20","updated_at":"2021-08-23 05:34:20","entity":{"id":54321,"name":"Mary Red S.r.L.","vat_number":"IT05432181211","tax_code":"IT05432181211","address_street":"Via Italia, 66","address_postal_code":"20900","address_city":"Milano","address_province":"MI","address_extra":"","country":"Italia","certified_email":"mary@pec.red.com","ei_code":"ABCXCR1"},"date":"2021-08-20","number":1,"currency":{"id":"EUR","exchange_rate":"1.00000","symbol":"€"},"language":{"code":"it","name":"Italiano"},"notes":"","rivalsa":0,"cassa":0,"withholding_tax":0,"withholding_tax_taxable":100,"other_withholding_tax":0,"payment_method":{"id":4,"name":"Credit card"},"use_split_payment":false,"items_list":[{"product_id":5432,"code":"SG3","name":"Soggiorno","measure":"","net_price":68.18182,"category":"","id":277876033,"apply_withholding_taxes":true,"discount":0,"discount_highlight":false,"in_dn":false,"qty":1,"vat":{"id":3,"value":10,"description":""},"stock":false,"description":"","not_taxable":false}],"payments_list":[{"amount":75,"due_date":"2020-08-23","id":69078013,"payment_terms":{"days":0,"type":"standard"},"status":"not_paid"}],"attachment_url":"kdijrnf893hnwkfk45f50f.pdf","next_due_date":"2020-08-23","template":{"id":2821,"name":"Light Smoke"},"url":"y12h45rn9yf2mse0p43t7ec90vr.pdf"}}; // \FattureInCloud\Model\GetNewIssuedDocumentTotalsRequest

try {
    $result = $apiInstance->getNewIssuedDocumentTotals($company_id, $get_new_issued_document_totals_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->getNewIssuedDocumentTotals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **get_new_issued_document_totals_request** | [**\FattureInCloud\Model\GetNewIssuedDocumentTotalsRequest**](../Model/GetNewIssuedDocumentTotalsRequest.md)|  | [optional]

### Return type

[**\FattureInCloud\Model\GetNewIssuedDocumentTotalsResponse**](../Model/GetNewIssuedDocumentTotalsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIssuedDocuments()`

```php
listIssuedDocuments($company_id, $type, $fields, $fieldset, $sort, $page, $per_page, $q): \FattureInCloud\Model\ListIssuedDocumentsResponse
```

List Issued Documents

Lists the issued documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$type = 'type_example'; // string | The type of the issued document.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.
$sort = 'sort_example'; // string | List of comma-separated fields for result sorting (minus for desc sorting).
$page = 1; // int | The page to retrieve.
$per_page = 5; // int | The size of the page.
$q = 'q_example'; // string | Query for filtering the results.

try {
    $result = $apiInstance->listIssuedDocuments($company_id, $type, $fields, $fieldset, $sort, $page, $per_page, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->listIssuedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **type** | **string**| The type of the issued document. |
 **fields** | **string**| List of comma-separated fields. | [optional]
 **fieldset** | **string**| Name of the fieldset. | [optional]
 **sort** | **string**| List of comma-separated fields for result sorting (minus for desc sorting). | [optional]
 **page** | **int**| The page to retrieve. | [optional] [default to 1]
 **per_page** | **int**| The size of the page. | [optional] [default to 5]
 **q** | **string**| Query for filtering the results. | [optional]

### Return type

[**\FattureInCloud\Model\ListIssuedDocumentsResponse**](../Model/ListIssuedDocumentsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyIssuedDocument()`

```php
modifyIssuedDocument($company_id, $document_id, $modify_issued_document_request): \FattureInCloud\Model\ModifyIssuedDocumentResponse
```

Modify Issued Document

Modifies the specified document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.
$modify_issued_document_request = {"data":{"type":"receipt","numeration":"rec123","subject":"","visible_subject":"","amount_net":68.18,"amount_vat":6.82,"amount_due_discount":0,"entity":{"id":54321,"name":"Mary Red S.r.L.","vat_number":"IT05432181211","tax_code":"IT05432181211","address_street":"Via Italia, 66","address_postal_code":"20900","address_city":"Milano","address_province":"MI","address_extra":"","country":"Italia","certified_email":"mary@pec.red.com","ei_code":"ABCXCR1"},"date":"2021-08-20","number":1,"next_due_date":"2021-12-31","attachment_token":"ypbqqe4u8w8bdabcd5fd5b1a","items_list":[{"product_id":333,"code":"SG3","name":"Soggiorno","measure":"","net_price":68.18182,"category":"","id":277875565,"gross_price":75,"apply_withholding_taxes":true,"discount":0,"discount_highlight":false,"in_dn":false,"qty":1,"vat":{"id":3,"value":10,"description":""},"stock":true,"description":"","not_taxable":false}],"payments_list":[{"amount":75,"due_date":"2020-08-23","id":444,"payment_terms":{"days":0,"type":"standard"},"status":"not_paid"}]}}; // \FattureInCloud\Model\ModifyIssuedDocumentRequest | The modified document

try {
    $result = $apiInstance->modifyIssuedDocument($company_id, $document_id, $modify_issued_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->modifyIssuedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **document_id** | **int**| The ID of the document. |
 **modify_issued_document_request** | [**\FattureInCloud\Model\ModifyIssuedDocumentRequest**](../Model/ModifyIssuedDocumentRequest.md)| The modified document | [optional]

### Return type

[**\FattureInCloud\Model\ModifyIssuedDocumentResponse**](../Model/ModifyIssuedDocumentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleEmail()`

```php
scheduleEmail($company_id, $document_id, $schedule_email_request)
```

Schedule Email

Schedules the sending of a document by email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.
$schedule_email_request = {"data":{"sender_email":"mariorossi@fattureincloud.it","recipient_email":"mary.red@example.com","subject":"Nostra pro forma nr. 1","body":"Gentile Mario Rossi,<br>per vedere la nostra pro forma di  o per scaricarne una copia in versione PDF prema sul bottone sottostante.<br><br>{{allegati}}<br><br>Cordiali saluti,<br><b>Mario Rossi</b>","include":{"document":false,"delivery_note":false,"attachment":false,"accompanying_invoice":false},"attach_pdf":true,"send_copy":false}}; // \FattureInCloud\Model\ScheduleEmailRequest | Email Schedule

try {
    $apiInstance->scheduleEmail($company_id, $document_id, $schedule_email_request);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->scheduleEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **document_id** | **int**| The ID of the document. |
 **schedule_email_request** | [**\FattureInCloud\Model\ScheduleEmailRequest**](../Model/ScheduleEmailRequest.md)| Email Schedule | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadIssuedDocumentAttachment()`

```php
uploadIssuedDocumentAttachment($company_id, $filename, $attachment): \FattureInCloud\Model\UploadIssuedDocumentAttachmentResponse
```

Upload Issued Document Attachment

Uploads an attachment destined to an issued document. The actual association between the document and the attachment must be implemented separately, using the returned token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$filename = 'filename_example'; // string | Name of the file.
$attachment = "/path/to/file.txt"; // \SplFileObject | Valid format: .png, .jpg, .gif, .pdf, .zip, .xls, .xlsx, .doc, .docx

try {
    $result = $apiInstance->uploadIssuedDocumentAttachment($company_id, $filename, $attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->uploadIssuedDocumentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **filename** | **string**| Name of the file. | [optional]
 **attachment** | **\SplFileObject****\SplFileObject**| Valid format: .png, .jpg, .gif, .pdf, .zip, .xls, .xlsx, .doc, .docx | [optional]

### Return type

[**\FattureInCloud\Model\UploadIssuedDocumentAttachmentResponse**](../Model/UploadIssuedDocumentAttachmentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
