# FattureInCloud\IssuedDocumentsApi

All URIs are relative to https://api-v2.fattureincloud.it, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createIssuedDocument()**](IssuedDocumentsApi.md#createIssuedDocument) | **POST** /c/{company_id}/issued_documents | Create Issued Document |
| [**deleteIssuedDocument()**](IssuedDocumentsApi.md#deleteIssuedDocument) | **DELETE** /c/{company_id}/issued_documents/{document_id} | Delete Issued Document |
| [**deleteIssuedDocumentAttachment()**](IssuedDocumentsApi.md#deleteIssuedDocumentAttachment) | **DELETE** /c/{company_id}/issued_documents/{document_id}/attachment | Delete Issued Document Attachment |
| [**getEmailData()**](IssuedDocumentsApi.md#getEmailData) | **GET** /c/{company_id}/issued_documents/{document_id}/email | Get Email Data |
| [**getExistingIssuedDocumentTotals()**](IssuedDocumentsApi.md#getExistingIssuedDocumentTotals) | **POST** /c/{company_id}/issued_documents/{document_id}/totals | Get Existing Issued Document Totals |
| [**getIssuedDocument()**](IssuedDocumentsApi.md#getIssuedDocument) | **GET** /c/{company_id}/issued_documents/{document_id} | Get Issued Document |
| [**getIssuedDocumentPreCreateInfo()**](IssuedDocumentsApi.md#getIssuedDocumentPreCreateInfo) | **GET** /c/{company_id}/issued_documents/info | Get Issued Document Pre-create info |
| [**getNewIssuedDocumentTotals()**](IssuedDocumentsApi.md#getNewIssuedDocumentTotals) | **POST** /c/{company_id}/issued_documents/totals | Get New Issued Document Totals |
| [**joinIssuedDocuments()**](IssuedDocumentsApi.md#joinIssuedDocuments) | **GET** /c/{company_id}/issued_documents/join | Join issued documents |
| [**listIssuedDocuments()**](IssuedDocumentsApi.md#listIssuedDocuments) | **GET** /c/{company_id}/issued_documents | List Issued Documents |
| [**modifyIssuedDocument()**](IssuedDocumentsApi.md#modifyIssuedDocument) | **PUT** /c/{company_id}/issued_documents/{document_id} | Modify Issued Document |
| [**scheduleEmail()**](IssuedDocumentsApi.md#scheduleEmail) | **POST** /c/{company_id}/issued_documents/{document_id}/email | Schedule Email |
| [**transformIssuedDocument()**](IssuedDocumentsApi.md#transformIssuedDocument) | **GET** /c/{company_id}/issued_documents/transform | Transform issued document |
| [**uploadIssuedDocumentAttachment()**](IssuedDocumentsApi.md#uploadIssuedDocumentAttachment) | **POST** /c/{company_id}/issued_documents/attachment | Upload Issued Document Attachment |


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
$create_issued_document_request = new \FattureInCloud\Model\CreateIssuedDocumentRequest; // \FattureInCloud\Model\CreateIssuedDocumentRequest | The Issued Document

try {
    $result = $apiInstance->createIssuedDocument($company_id, $create_issued_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->createIssuedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **create_issued_document_request** | [**\FattureInCloud\Model\CreateIssuedDocumentRequest**](../Model/CreateIssuedDocumentRequest.md)| The Issued Document | [optional] |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |

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
$get_existing_issued_document_totals_request = new \FattureInCloud\Model\GetExistingIssuedDocumentTotalsRequest; // \FattureInCloud\Model\GetExistingIssuedDocumentTotalsRequest

try {
    $result = $apiInstance->getExistingIssuedDocumentTotals($company_id, $document_id, $get_existing_issued_document_totals_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->getExistingIssuedDocumentTotals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |
| **get_existing_issued_document_totals_request** | [**\FattureInCloud\Model\GetExistingIssuedDocumentTotalsRequest**](../Model/GetExistingIssuedDocumentTotalsRequest.md)|  | [optional] |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |
| **fields** | **string**| List of comma-separated fields. | [optional] |
| **fieldset** | **string**| Name of the fieldset. | [optional] |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **type** | **string**| The type of the issued document. | |

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
$get_new_issued_document_totals_request = new \FattureInCloud\Model\GetNewIssuedDocumentTotalsRequest; // \FattureInCloud\Model\GetNewIssuedDocumentTotalsRequest

try {
    $result = $apiInstance->getNewIssuedDocumentTotals($company_id, $get_new_issued_document_totals_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->getNewIssuedDocumentTotals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **get_new_issued_document_totals_request** | [**\FattureInCloud\Model\GetNewIssuedDocumentTotalsRequest**](../Model/GetNewIssuedDocumentTotalsRequest.md)|  | [optional] |

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

## `joinIssuedDocuments()`

```php
joinIssuedDocuments($company_id, $ids, $group, $e_invoice): \FattureInCloud\Model\JoinIssuedDocumentsResponse
```

Join issued documents

Joins issued documents.

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
$ids = 1,2,3,4; // string | Ids of the documents.
$group = 56; // int | Group items.
$e_invoice = 56; // int | New document e_invoice.

try {
    $result = $apiInstance->joinIssuedDocuments($company_id, $ids, $group, $e_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->joinIssuedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **ids** | **string**| Ids of the documents. | |
| **group** | **int**| Group items. | [optional] |
| **e_invoice** | **int**| New document e_invoice. | [optional] |

### Return type

[**\FattureInCloud\Model\JoinIssuedDocumentsResponse**](../Model/JoinIssuedDocumentsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIssuedDocuments()`

```php
listIssuedDocuments($company_id, $type, $fields, $fieldset, $sort, $page, $per_page, $q, $inclusive): \FattureInCloud\Model\ListIssuedDocumentsResponse
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
$inclusive = 56; // int | (Only for type = delivery_notes) Include invoices delivery notes.

try {
    $result = $apiInstance->listIssuedDocuments($company_id, $type, $fields, $fieldset, $sort, $page, $per_page, $q, $inclusive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->listIssuedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **type** | **string**| The type of the issued document. | |
| **fields** | **string**| List of comma-separated fields. | [optional] |
| **fieldset** | **string**| Name of the fieldset. | [optional] |
| **sort** | **string**| List of comma-separated fields for result sorting (minus for desc sorting). | [optional] |
| **page** | **int**| The page to retrieve. | [optional] [default to 1] |
| **per_page** | **int**| The size of the page. | [optional] [default to 5] |
| **q** | **string**| Query for filtering the results. | [optional] |
| **inclusive** | **int**| (Only for type &#x3D; delivery_notes) Include invoices delivery notes. | [optional] |

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
$modify_issued_document_request = new \FattureInCloud\Model\ModifyIssuedDocumentRequest; // \FattureInCloud\Model\ModifyIssuedDocumentRequest | The modified document

try {
    $result = $apiInstance->modifyIssuedDocument($company_id, $document_id, $modify_issued_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->modifyIssuedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |
| **modify_issued_document_request** | [**\FattureInCloud\Model\ModifyIssuedDocumentRequest**](../Model/ModifyIssuedDocumentRequest.md)| The modified document | [optional] |

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
$schedule_email_request = new \FattureInCloud\Model\ScheduleEmailRequest; // \FattureInCloud\Model\ScheduleEmailRequest | Email Schedule

try {
    $apiInstance->scheduleEmail($company_id, $document_id, $schedule_email_request);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->scheduleEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |
| **schedule_email_request** | [**\FattureInCloud\Model\ScheduleEmailRequest**](../Model/ScheduleEmailRequest.md)| Email Schedule | [optional] |

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

## `transformIssuedDocument()`

```php
transformIssuedDocument($company_id, $original_document_id, $new_type, $e_invoice, $transform_keep_copy): \FattureInCloud\Model\TransformIssuedDocumentResponse
```

Transform issued document

Transforms the document.

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
$original_document_id = 56; // int | Original document id.
$new_type = 'new_type_example'; // string | New document type.
$e_invoice = 56; // int | New document e_invoice.
$transform_keep_copy = 56; // int | Keep the old document.

try {
    $result = $apiInstance->transformIssuedDocument($company_id, $original_document_id, $new_type, $e_invoice, $transform_keep_copy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedDocumentsApi->transformIssuedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **original_document_id** | **int**| Original document id. | |
| **new_type** | **string**| New document type. | |
| **e_invoice** | **int**| New document e_invoice. | [optional] |
| **transform_keep_copy** | **int**| Keep the old document. | [optional] |

### Return type

[**\FattureInCloud\Model\TransformIssuedDocumentResponse**](../Model/TransformIssuedDocumentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **filename** | **string**| Name of the file. | [optional] |
| **attachment** | **\SplFileObject****\SplFileObject**| Valid format: .png, .jpg, .gif, .pdf, .zip, .xls, .xlsx, .doc, .docx | [optional] |

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
