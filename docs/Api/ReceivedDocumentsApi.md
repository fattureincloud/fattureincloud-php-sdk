# FattureInCloud\ReceivedDocumentsApi

All URIs are relative to https://api-v2.fattureincloud.it.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReceivedDocument()**](ReceivedDocumentsApi.md#createReceivedDocument) | **POST** /c/{company_id}/received_documents | Create Received Document
[**deleteReceivedDocument()**](ReceivedDocumentsApi.md#deleteReceivedDocument) | **DELETE** /c/{company_id}/received_documents/{document_id} | Delete Received Document
[**deleteReceivedDocumentAttachment()**](ReceivedDocumentsApi.md#deleteReceivedDocumentAttachment) | **DELETE** /c/{company_id}/received_documents/{document_id}/attachment | Delete Received Document Attachment
[**getExistingReceivedDocumentTotals()**](ReceivedDocumentsApi.md#getExistingReceivedDocumentTotals) | **POST** /c/{company_id}/received_documents/{document_id}/totals | Get Existing Received Document Totals
[**getNewReceivedDocumentTotals()**](ReceivedDocumentsApi.md#getNewReceivedDocumentTotals) | **POST** /c/{company_id}/received_documents/totals | Get New Received Document Totals
[**getReceivedDocument()**](ReceivedDocumentsApi.md#getReceivedDocument) | **GET** /c/{company_id}/received_documents/{document_id} | Get Received Document
[**getReceivedDocumentPreCreateInfo()**](ReceivedDocumentsApi.md#getReceivedDocumentPreCreateInfo) | **GET** /c/{company_id}/received_documents/info | Get Received Document Pre-Create Info
[**listReceivedDocuments()**](ReceivedDocumentsApi.md#listReceivedDocuments) | **GET** /c/{company_id}/received_documents | List Received Documents
[**modifyReceivedDocument()**](ReceivedDocumentsApi.md#modifyReceivedDocument) | **PUT** /c/{company_id}/received_documents/{document_id} | Modify Received Document
[**uploadReceivedDocumentAttachment()**](ReceivedDocumentsApi.md#uploadReceivedDocumentAttachment) | **POST** /c/{company_id}/received_documents/attachment | Upload Received Document Attachment


## `createReceivedDocument()`

```php
createReceivedDocument($company_id, $create_received_document_request): \FattureInCloud\Model\CreateReceivedDocumentResponse
```

Create Received Document

👥 Company context 🔒 Required scope: received_documents:a (but if the document is a passive_delivery_note you’ll need stock:a scope)  Create a new received document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$create_received_document_request = {"data":{"type":"expense","description":"Soggiorno di lavoro","amortization":1,"rc_center":"","invoice_number":"","is_marked":false,"is_detailed":false,"e_invoice":false,"entity":{"id":111,"name":"Hotel Rubino Palace"},"date":"2021-08-15","next_due_date":"2021-08-15","currency":{"id":"EUR","exchange_rate":"1.00000","symbol":"€"},"amount_net":592,"amount_vat":0,"amount_gross":592,"amount_withholding_tax":0,"amount_other_withholding_tax":0,"tax_deductibility":50,"vat_deductibility":100,"items_list":null,"payments_list":[{"amount":592,"due_date":"2021-08-15","paid_date":"2021-08-15","id":777,"payment_terms":{"days":0,"type":"standard"},"status":"paid","payment_account":{"id":222,"name":"Contanti","virtual":false}}],"attachment_token":"bnopjao8gvydtgnewgiovs74yrfqwefEF"}}; // \FattureInCloud\Model\CreateReceivedDocumentRequest | Document to create

try {
    $result = $apiInstance->createReceivedDocument($company_id, $create_received_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->createReceivedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **create_received_document_request** | [**\FattureInCloud\Model\CreateReceivedDocumentRequest**](../Model/CreateReceivedDocumentRequest.md)| Document to create | [optional]

### Return type

[**\FattureInCloud\Model\CreateReceivedDocumentResponse**](../Model/CreateReceivedDocumentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReceivedDocument()`

```php
deleteReceivedDocument($company_id, $document_id)
```

Delete Received Document

👥 Company context 🔒 Required scope: received_documents:a (but if the document is a passive_delivery_note you’ll need stock:a scope)  Delete an existing document by its unique id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$document_id = 56; // int | Unique Id of the document

try {
    $apiInstance->deleteReceivedDocument($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->deleteReceivedDocument: ', $e->getMessage(), PHP_EOL;
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

## `deleteReceivedDocumentAttachment()`

```php
deleteReceivedDocumentAttachment($company_id, $document_id)
```

Delete Received Document Attachment

👥 Company context 🔒 Required scope: received_documents:a (but if the document is a passive_delivery_note you’ll need stock:a scope)  Remove the attachment (but not the document)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$document_id = 56; // int | Unique Id of the document

try {
    $apiInstance->deleteReceivedDocumentAttachment($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->deleteReceivedDocumentAttachment: ', $e->getMessage(), PHP_EOL;
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

## `getExistingReceivedDocumentTotals()`

```php
getExistingReceivedDocumentTotals($company_id, $document_id, $get_existing_received_document_totals_request): \FattureInCloud\Model\GetExistingReceivedDocumentTotalsResponse
```

Get Existing Received Document Totals

👥 Company context 🔒 Required scope: received_documents:a (but if the document is a passive_delivery_note you’ll need stock:a scope)  Calculate totals of the received document indicated by the id with the changes passed in the body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$document_id = 56; // int | Unique Id of the document
$get_existing_received_document_totals_request = {"data":{"amount_vat":20}}; // \FattureInCloud\Model\GetExistingReceivedDocumentTotalsRequest | Received document.

try {
    $result = $apiInstance->getExistingReceivedDocumentTotals($company_id, $document_id, $get_existing_received_document_totals_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->getExistingReceivedDocumentTotals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **document_id** | **int**| Unique Id of the document |
 **get_existing_received_document_totals_request** | [**\FattureInCloud\Model\GetExistingReceivedDocumentTotalsRequest**](../Model/GetExistingReceivedDocumentTotalsRequest.md)| Received document. | [optional]

### Return type

[**\FattureInCloud\Model\GetExistingReceivedDocumentTotalsResponse**](../Model/GetExistingReceivedDocumentTotalsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewReceivedDocumentTotals()`

```php
getNewReceivedDocumentTotals($company_id, $get_new_received_document_totals_request): \FattureInCloud\Model\GetNewReceivedDocumentTotalsResponse
```

Get New Received Document Totals

👥 Company context 🔒 Required scope: received_documents:a (but if the document is a passive_delivery_note you’ll need stock:a scope)  Calculate totals of the received document passed in the body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$get_new_received_document_totals_request = {"data":{"type":"expense","description":"Soggiorno di lavoro","amortization":1,"rc_center":"","invoice_number":"","is_marked":false,"is_detailed":false,"e_invoice":false,"created_at":"2021-08-15 14:02:02","updated_at":"2021-08-15 14:02:02","entity":{"id":111,"name":"Hotel Rubino Palace"},"date":"2021-08-15","next_due_date":"2021-08-15","currency":{"id":"EUR","exchange_rate":"1.00000","symbol":"€"},"amount_net":592,"amount_vat":10,"amount_withholding_tax":0,"amount_other_withholding_tax":0,"tax_deductibility":50,"vat_deductibility":100,"items_list":null,"payments_list":[{"amount":592,"due_date":"2021-08-15","paid_date":"2021-08-15","id":777,"payment_terms":{"days":0,"type":"standard"},"status":"paid"}]}}; // \FattureInCloud\Model\GetNewReceivedDocumentTotalsRequest | Received document.

try {
    $result = $apiInstance->getNewReceivedDocumentTotals($company_id, $get_new_received_document_totals_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->getNewReceivedDocumentTotals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **get_new_received_document_totals_request** | [**\FattureInCloud\Model\GetNewReceivedDocumentTotalsRequest**](../Model/GetNewReceivedDocumentTotalsRequest.md)| Received document. | [optional]

### Return type

[**\FattureInCloud\Model\GetNewReceivedDocumentTotalsResponse**](../Model/GetNewReceivedDocumentTotalsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceivedDocument()`

```php
getReceivedDocument($company_id, $document_id, $fields, $fieldset): \FattureInCloud\Model\GetReceivedDocumentResponse
```

Get Received Document

👥 Company context 🔒 Required scope: received_documents:r (but if the document is a passive_delivery_note you’ll need stock:r scope) 🎩 Customized responses supported  Get details of an existing document by its unique id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceivedDocumentsApi(
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
    $result = $apiInstance->getReceivedDocument($company_id, $document_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->getReceivedDocument: ', $e->getMessage(), PHP_EOL;
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

[**\FattureInCloud\Model\GetReceivedDocumentResponse**](../Model/GetReceivedDocumentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceivedDocumentPreCreateInfo()`

```php
getReceivedDocumentPreCreateInfo($company_id, $type): \FattureInCloud\Model\GetReceivedDocumentPreCreateInfoResponse
```

Get Received Document Pre-Create Info

👥 Company context 🔒 Required scope: received_documents:r  Get the info needed for the document creation flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$type = 'type_example'; // string | Received Document Type

try {
    $result = $apiInstance->getReceivedDocumentPreCreateInfo($company_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->getReceivedDocumentPreCreateInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **type** | **string**| Received Document Type |

### Return type

[**\FattureInCloud\Model\GetReceivedDocumentPreCreateInfoResponse**](../Model/GetReceivedDocumentPreCreateInfoResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReceivedDocuments()`

```php
listReceivedDocuments($company_id, $type, $fields, $fieldset, $sort, $page, $per_page): \FattureInCloud\Model\ListReceivedDocumentsResponse
```

List Received Documents

👥 Company context 🔒 Required scope: received_documents:r (but if the document is a passive_delivery_note you’ll need stock:r scope) 🔍 Filtering: id, type, category, description, entity.id, entity.name, date, next_due_date, amount_gross, amount_net, amount_vat, invoice_number, created_at, updated_at ↕️ Sorting: id, category, entity.id, entity.name, date, next_due_date, amount_gross, amount_net, amount_vat, created_at, updated_at 📄 Paginated results 🎩 Customized responses supported (available fieldsets: basic, detailed, fic_list, fic_view) \\  Get a list of documents that match the filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$type = 'type_example'; // string | Received Document Type
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset
$sort = 'sort_example'; // string | List of comma-separated fields for result sorting (minus for desc sorting)
$page = 1; // int | Requested page
$per_page = 5; // int | Items to be shown per page

try {
    $result = $apiInstance->listReceivedDocuments($company_id, $type, $fields, $fieldset, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->listReceivedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **type** | **string**| Received Document Type |
 **fields** | **string**| List of comma-separated fields. | [optional]
 **fieldset** | **string**| Name of the fieldset | [optional]
 **sort** | **string**| List of comma-separated fields for result sorting (minus for desc sorting) | [optional]
 **page** | **int**| Requested page | [optional] [default to 1]
 **per_page** | **int**| Items to be shown per page | [optional] [default to 5]

### Return type

[**\FattureInCloud\Model\ListReceivedDocumentsResponse**](../Model/ListReceivedDocumentsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyReceivedDocument()`

```php
modifyReceivedDocument($company_id, $document_id, $modify_received_document_request): \FattureInCloud\Model\ModifyReceivedDocumentResponse
```

Modify Received Document

👥 Company context 🔒 Required scope: received_documents:a (but if the document is a passive_delivery_note you’ll need stock:a scope)  Edit an existing document by its unique id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$document_id = 56; // int | Unique Id of the document
$modify_received_document_request = {"data":{"type":"expense","description":"Soggiorno di lavoro","amortization":1,"rc_center":"","invoice_number":"","is_marked":false,"is_detailed":false,"e_invoice":false,"entity":{"id":111,"name":"Hotel Rubino Palace"},"date":"2021-08-15","next_due_date":"2021-08-15","currency":{"id":"EUR","exchange_rate":"1.00000","symbol":"€"},"amount_net":592,"amount_vat":0,"amount_gross":592,"amount_withholding_tax":0,"amount_other_withholding_tax":0,"tax_deductibility":50,"vat_deductibility":100,"items_list":null,"payments_list":[{"amount":592,"due_date":"2021-08-15","paid_date":"2021-08-15","id":777,"payment_terms":{"days":0,"type":"standard"},"status":"paid","payment_account":{"id":222,"name":"Contanti","virtual":false}}]}}; // \FattureInCloud\Model\ModifyReceivedDocumentRequest | Modified document.

try {
    $result = $apiInstance->modifyReceivedDocument($company_id, $document_id, $modify_received_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->modifyReceivedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **document_id** | **int**| Unique Id of the document |
 **modify_received_document_request** | [**\FattureInCloud\Model\ModifyReceivedDocumentRequest**](../Model/ModifyReceivedDocumentRequest.md)| Modified document. | [optional]

### Return type

[**\FattureInCloud\Model\ModifyReceivedDocumentResponse**](../Model/ModifyReceivedDocumentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadReceivedDocumentAttachment()`

```php
uploadReceivedDocumentAttachment($company_id, $filename, $attachment): \FattureInCloud\Model\UploadReceivedDocumentAttachmentResponse
```

Upload Received Document Attachment

👥 Company context 🔒 Required scope: received_documents:a (but if the document is a passive_delivery_note you’ll need stock:a scope)  Upload an attachment and return the relative token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$filename = 'filename_example'; // string | Name of the file.
$attachment = "/path/to/file.txt"; // \SplFileObject | Valid format: .png, .jpg, .gif, .pdf, .zip, .xls, .xlsx, .doc, .docx

try {
    $result = $apiInstance->uploadReceivedDocumentAttachment($company_id, $filename, $attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->uploadReceivedDocumentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **filename** | **string**| Name of the file. | [optional]
 **attachment** | **\SplFileObject****\SplFileObject**| Valid format: .png, .jpg, .gif, .pdf, .zip, .xls, .xlsx, .doc, .docx | [optional]

### Return type

[**\FattureInCloud\Model\UploadReceivedDocumentAttachmentResponse**](../Model/UploadReceivedDocumentAttachmentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
