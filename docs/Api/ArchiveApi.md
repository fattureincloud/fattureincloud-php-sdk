# FattureInCloud\ArchiveApi

All URIs are relative to https://api-v2.fattureincloud.it, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createArchiveDocument()**](ArchiveApi.md#createArchiveDocument) | **POST** /c/{company_id}/archive | Create Archive Document |
| [**deleteArchiveDocument()**](ArchiveApi.md#deleteArchiveDocument) | **DELETE** /c/{company_id}/archive/{document_id} | Delete Archive Document |
| [**getArchiveDocument()**](ArchiveApi.md#getArchiveDocument) | **GET** /c/{company_id}/archive/{document_id} | Get Archive Document |
| [**listArchiveDocuments()**](ArchiveApi.md#listArchiveDocuments) | **GET** /c/{company_id}/archive | List Archive Documents |
| [**modifyArchiveDocument()**](ArchiveApi.md#modifyArchiveDocument) | **PUT** /c/{company_id}/archive/{document_id} | Modify Archive Document |
| [**uploadArchiveDocumentAttachment()**](ArchiveApi.md#uploadArchiveDocumentAttachment) | **POST** /c/{company_id}/archive/attachment | Upload Archive Document Attachment |


## `createArchiveDocument()`

```php
createArchiveDocument($company_id, $create_archive_document_request): \FattureInCloud\Model\CreateArchiveDocumentResponse
```

Create Archive Document

Creates a new archive document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$create_archive_document_request = new \FattureInCloud\Model\CreateArchiveDocumentRequest; // \FattureInCloud\Model\CreateArchiveDocumentRequest | The Archive Document.

try {
    $result = $apiInstance->createArchiveDocument($company_id, $create_archive_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveApi->createArchiveDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **create_archive_document_request** | [**\FattureInCloud\Model\CreateArchiveDocumentRequest**](../Model/CreateArchiveDocumentRequest.md)| The Archive Document. | [optional] |

### Return type

[**\FattureInCloud\Model\CreateArchiveDocumentResponse**](../Model/CreateArchiveDocumentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteArchiveDocument()`

```php
deleteArchiveDocument($company_id, $document_id)
```

Delete Archive Document

Deletes the specified archive document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.

try {
    $apiInstance->deleteArchiveDocument($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveApi->deleteArchiveDocument: ', $e->getMessage(), PHP_EOL;
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

## `getArchiveDocument()`

```php
getArchiveDocument($company_id, $document_id, $fields, $fieldset): \FattureInCloud\Model\GetArchiveDocumentResponse
```

Get Archive Document

Gets the specified archive document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ArchiveApi(
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
    $result = $apiInstance->getArchiveDocument($company_id, $document_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveApi->getArchiveDocument: ', $e->getMessage(), PHP_EOL;
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

[**\FattureInCloud\Model\GetArchiveDocumentResponse**](../Model/GetArchiveDocumentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listArchiveDocuments()`

```php
listArchiveDocuments($company_id, $fields, $fieldset, $sort, $page, $per_page, $q): \FattureInCloud\Model\ListArchiveDocumentsResponse
```

List Archive Documents

Lists the archive documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.
$sort = 'sort_example'; // string | List of comma-separated fields for result sorting (minus for desc sorting).
$page = 1; // int | The page to retrieve.
$per_page = 5; // int | The size of the page.
$q = 'q_example'; // string | Query for filtering the results.

try {
    $result = $apiInstance->listArchiveDocuments($company_id, $fields, $fieldset, $sort, $page, $per_page, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveApi->listArchiveDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **fields** | **string**| List of comma-separated fields. | [optional] |
| **fieldset** | **string**| Name of the fieldset. | [optional] |
| **sort** | **string**| List of comma-separated fields for result sorting (minus for desc sorting). | [optional] |
| **page** | **int**| The page to retrieve. | [optional] [default to 1] |
| **per_page** | **int**| The size of the page. | [optional] [default to 5] |
| **q** | **string**| Query for filtering the results. | [optional] |

### Return type

[**\FattureInCloud\Model\ListArchiveDocumentsResponse**](../Model/ListArchiveDocumentsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyArchiveDocument()`

```php
modifyArchiveDocument($company_id, $document_id, $modify_archive_document_request): \FattureInCloud\Model\ModifyArchiveDocumentResponse
```

Modify Archive Document

Modifies the specified archive document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.
$modify_archive_document_request = new \FattureInCloud\Model\ModifyArchiveDocumentRequest; // \FattureInCloud\Model\ModifyArchiveDocumentRequest | Modified Archive Document

try {
    $result = $apiInstance->modifyArchiveDocument($company_id, $document_id, $modify_archive_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveApi->modifyArchiveDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |
| **modify_archive_document_request** | [**\FattureInCloud\Model\ModifyArchiveDocumentRequest**](../Model/ModifyArchiveDocumentRequest.md)| Modified Archive Document | [optional] |

### Return type

[**\FattureInCloud\Model\ModifyArchiveDocumentResponse**](../Model/ModifyArchiveDocumentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadArchiveDocumentAttachment()`

```php
uploadArchiveDocumentAttachment($company_id, $filename, $attachment): \FattureInCloud\Model\UploadArchiveAttachmentResponse
```

Upload Archive Document Attachment

Uploads an attachment destined to an archive document. The actual association between the document and the attachment must be implemented separately, using the returned token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$filename = 'filename_example'; // string | Name of the file.
$attachment = "/path/to/file.txt"; // \SplFileObject | Valid format: .png, .jpg, .gif, .pdf, .zip, .xls, .xlsx, .doc, .docx

try {
    $result = $apiInstance->uploadArchiveDocumentAttachment($company_id, $filename, $attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveApi->uploadArchiveDocumentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **filename** | **string**| Name of the file. | [optional] |
| **attachment** | **\SplFileObject****\SplFileObject**| Valid format: .png, .jpg, .gif, .pdf, .zip, .xls, .xlsx, .doc, .docx | [optional] |

### Return type

[**\FattureInCloud\Model\UploadArchiveAttachmentResponse**](../Model/UploadArchiveAttachmentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
