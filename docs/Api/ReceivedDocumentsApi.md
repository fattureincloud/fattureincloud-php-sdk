# FattureInCloud\ReceivedDocumentsApi

All URIs are relative to https://api-v2.fattureincloud.it, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReceivedDocument()**](ReceivedDocumentsApi.md#createReceivedDocument) | **POST** /c/{company_id}/received_documents | Create Received Document |
| [**deleteReceivedDocument()**](ReceivedDocumentsApi.md#deleteReceivedDocument) | **DELETE** /c/{company_id}/received_documents/{document_id} | Delete Received Document |
| [**deleteReceivedDocumentAttachment()**](ReceivedDocumentsApi.md#deleteReceivedDocumentAttachment) | **DELETE** /c/{company_id}/received_documents/{document_id}/attachment | Delete Received Document Attachment |
| [**getExistingReceivedDocumentTotals()**](ReceivedDocumentsApi.md#getExistingReceivedDocumentTotals) | **POST** /c/{company_id}/received_documents/{document_id}/totals | Get Existing Received Document Totals |
| [**getNewReceivedDocumentTotals()**](ReceivedDocumentsApi.md#getNewReceivedDocumentTotals) | **POST** /c/{company_id}/received_documents/totals | Get New Received Document Totals |
| [**getReceivedDocument()**](ReceivedDocumentsApi.md#getReceivedDocument) | **GET** /c/{company_id}/received_documents/{document_id} | Get Received Document |
| [**getReceivedDocumentPreCreateInfo()**](ReceivedDocumentsApi.md#getReceivedDocumentPreCreateInfo) | **GET** /c/{company_id}/received_documents/info | Get Received Document Pre-Create Info |
| [**listReceivedDocuments()**](ReceivedDocumentsApi.md#listReceivedDocuments) | **GET** /c/{company_id}/received_documents | List Received Documents |
| [**modifyReceivedDocument()**](ReceivedDocumentsApi.md#modifyReceivedDocument) | **PUT** /c/{company_id}/received_documents/{document_id} | Modify Received Document |
| [**uploadReceivedDocumentAttachment()**](ReceivedDocumentsApi.md#uploadReceivedDocumentAttachment) | **POST** /c/{company_id}/received_documents/attachment | Upload Received Document Attachment |


## `createReceivedDocument()`

```php
createReceivedDocument($company_id, $create_received_document_request): \FattureInCloud\Model\CreateReceivedDocumentResponse
```

Create Received Document

Creates a new document.

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
$company_id = 12345; // int | The ID of the company.
$create_received_document_request = new \FattureInCloud\Model\CreateReceivedDocumentRequest; // \FattureInCloud\Model\CreateReceivedDocumentRequest | Document to create

try {
    $result = $apiInstance->createReceivedDocument($company_id, $create_received_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->createReceivedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **create_received_document_request** | [**\FattureInCloud\Model\CreateReceivedDocumentRequest**](../Model/CreateReceivedDocumentRequest.md)| Document to create | [optional] |

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

Deletes the specified document.

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
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.

try {
    $apiInstance->deleteReceivedDocument($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->deleteReceivedDocument: ', $e->getMessage(), PHP_EOL;
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

## `deleteReceivedDocumentAttachment()`

```php
deleteReceivedDocumentAttachment($company_id, $document_id)
```

Delete Received Document Attachment

Removes the attachment of the specified document.

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
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.

try {
    $apiInstance->deleteReceivedDocumentAttachment($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->deleteReceivedDocumentAttachment: ', $e->getMessage(), PHP_EOL;
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

## `getExistingReceivedDocumentTotals()`

```php
getExistingReceivedDocumentTotals($company_id, $document_id, $get_existing_received_document_totals_request): \FattureInCloud\Model\GetExistingReceivedDocumentTotalsResponse
```

Get Existing Received Document Totals

Returns the totals for the specified document.

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
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.
$get_existing_received_document_totals_request = new \FattureInCloud\Model\GetExistingReceivedDocumentTotalsRequest; // \FattureInCloud\Model\GetExistingReceivedDocumentTotalsRequest | Received document.

try {
    $result = $apiInstance->getExistingReceivedDocumentTotals($company_id, $document_id, $get_existing_received_document_totals_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->getExistingReceivedDocumentTotals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |
| **get_existing_received_document_totals_request** | [**\FattureInCloud\Model\GetExistingReceivedDocumentTotalsRequest**](../Model/GetExistingReceivedDocumentTotalsRequest.md)| Received document. | [optional] |

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

Returns the totals for a new document.

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
$company_id = 12345; // int | The ID of the company.
$get_new_received_document_totals_request = new \FattureInCloud\Model\GetNewReceivedDocumentTotalsRequest; // \FattureInCloud\Model\GetNewReceivedDocumentTotalsRequest | Received document.

try {
    $result = $apiInstance->getNewReceivedDocumentTotals($company_id, $get_new_received_document_totals_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->getNewReceivedDocumentTotals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **get_new_received_document_totals_request** | [**\FattureInCloud\Model\GetNewReceivedDocumentTotalsRequest**](../Model/GetNewReceivedDocumentTotalsRequest.md)| Received document. | [optional] |

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

Gets the specified document.

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
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.

try {
    $result = $apiInstance->getReceivedDocument($company_id, $document_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->getReceivedDocument: ', $e->getMessage(), PHP_EOL;
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

Retrieves the information useful while creating a new document.

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
$company_id = 12345; // int | The ID of the company.
$type = 'type_example'; // string | The type of the received document.

try {
    $result = $apiInstance->getReceivedDocumentPreCreateInfo($company_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->getReceivedDocumentPreCreateInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **type** | **string**| The type of the received document. | |

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
listReceivedDocuments($company_id, $type, $fields, $fieldset, $sort, $page, $per_page, $q): \FattureInCloud\Model\ListReceivedDocumentsResponse
```

List Received Documents

Lists the received documents.

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
$company_id = 12345; // int | The ID of the company.
$type = 'type_example'; // string | The type of the received document.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.
$sort = 'sort_example'; // string | List of comma-separated fields for result sorting (minus for desc sorting).
$page = 1; // int | The page to retrieve.
$per_page = 5; // int | The size of the page.
$q = 'q_example'; // string | Query for filtering the results.

try {
    $result = $apiInstance->listReceivedDocuments($company_id, $type, $fields, $fieldset, $sort, $page, $per_page, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->listReceivedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **type** | **string**| The type of the received document. | |
| **fields** | **string**| List of comma-separated fields. | [optional] |
| **fieldset** | **string**| Name of the fieldset. | [optional] |
| **sort** | **string**| List of comma-separated fields for result sorting (minus for desc sorting). | [optional] |
| **page** | **int**| The page to retrieve. | [optional] [default to 1] |
| **per_page** | **int**| The size of the page. | [optional] [default to 5] |
| **q** | **string**| Query for filtering the results. | [optional] |

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

Modifies the specified document.

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
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.
$modify_received_document_request = new \FattureInCloud\Model\ModifyReceivedDocumentRequest; // \FattureInCloud\Model\ModifyReceivedDocumentRequest | Modified document.

try {
    $result = $apiInstance->modifyReceivedDocument($company_id, $document_id, $modify_received_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->modifyReceivedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |
| **modify_received_document_request** | [**\FattureInCloud\Model\ModifyReceivedDocumentRequest**](../Model/ModifyReceivedDocumentRequest.md)| Modified document. | [optional] |

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

Uploads an attachment destined to a received document. The actual association between the document and the attachment must be implemented separately, using the returned token.

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
$company_id = 12345; // int | The ID of the company.
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **filename** | **string**| Name of the file. | [optional] |
| **attachment** | **\SplFileObject****\SplFileObject**| Valid format: .png, .jpg, .gif, .pdf, .zip, .xls, .xlsx, .doc, .docx | [optional] |

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
