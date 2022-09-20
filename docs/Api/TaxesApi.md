# FattureInCloud\TaxesApi

All URIs are relative to https://api-v2.fattureincloud.it, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createF24()**](TaxesApi.md#createF24) | **POST** /c/{company_id}/taxes | Create F24 |
| [**deleteF24()**](TaxesApi.md#deleteF24) | **DELETE** /c/{company_id}/taxes/{document_id} | Delete F24 |
| [**deleteF24Attachment()**](TaxesApi.md#deleteF24Attachment) | **DELETE** /c/{company_id}/taxes/{document_id}/attachment | Delete F24 Attachment |
| [**getF24()**](TaxesApi.md#getF24) | **GET** /c/{company_id}/taxes/{document_id} | Get F24 |
| [**listF24()**](TaxesApi.md#listF24) | **GET** /c/{company_id}/taxes | List F24 |
| [**modifyF24()**](TaxesApi.md#modifyF24) | **PUT** /c/{company_id}/taxes/{document_id} | Modify F24 |
| [**uploadF24Attachment()**](TaxesApi.md#uploadF24Attachment) | **POST** /c/{company_id}/taxes/attachment | Upload F24 Attachment |


## `createF24()`

```php
createF24($company_id, $create_f24_request): \FattureInCloud\Model\CreateF24Response
```

Create F24

Creates a new F24.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$create_f24_request = new \FattureInCloud\Model\CreateF24Request; // \FattureInCloud\Model\CreateF24Request | The F24 to create

try {
    $result = $apiInstance->createF24($company_id, $create_f24_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->createF24: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **create_f24_request** | [**\FattureInCloud\Model\CreateF24Request**](../Model/CreateF24Request.md)| The F24 to create | [optional] |

### Return type

[**\FattureInCloud\Model\CreateF24Response**](../Model/CreateF24Response.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteF24()`

```php
deleteF24($company_id, $document_id)
```

Delete F24

Removes the specified F24.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.

try {
    $apiInstance->deleteF24($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->deleteF24: ', $e->getMessage(), PHP_EOL;
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

## `deleteF24Attachment()`

```php
deleteF24Attachment($company_id, $document_id)
```

Delete F24 Attachment

Removes the attachment of the specified F24.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.

try {
    $apiInstance->deleteF24Attachment($company_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->deleteF24Attachment: ', $e->getMessage(), PHP_EOL;
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

## `getF24()`

```php
getF24($company_id, $document_id, $fields, $fieldset): \FattureInCloud\Model\GetF24Response
```

Get F24

Gets the specified F24.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\TaxesApi(
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
    $result = $apiInstance->getF24($company_id, $document_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getF24: ', $e->getMessage(), PHP_EOL;
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

[**\FattureInCloud\Model\GetF24Response**](../Model/GetF24Response.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listF24()`

```php
listF24($company_id, $fields, $fieldset, $sort, $page, $per_page, $q): \FattureInCloud\Model\ListF24Response
```

List F24

Lists the F24s.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\TaxesApi(
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
    $result = $apiInstance->listF24($company_id, $fields, $fieldset, $sort, $page, $per_page, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->listF24: ', $e->getMessage(), PHP_EOL;
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

[**\FattureInCloud\Model\ListF24Response**](../Model/ListF24Response.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyF24()`

```php
modifyF24($company_id, $document_id, $modify_f24_request): \FattureInCloud\Model\ModifyF24Response
```

Modify F24

Modifies the specified F24.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.
$modify_f24_request = new \FattureInCloud\Model\ModifyF24Request; // \FattureInCloud\Model\ModifyF24Request | The F24

try {
    $result = $apiInstance->modifyF24($company_id, $document_id, $modify_f24_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->modifyF24: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **document_id** | **int**| The ID of the document. | |
| **modify_f24_request** | [**\FattureInCloud\Model\ModifyF24Request**](../Model/ModifyF24Request.md)| The F24 | [optional] |

### Return type

[**\FattureInCloud\Model\ModifyF24Response**](../Model/ModifyF24Response.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadF24Attachment()`

```php
uploadF24Attachment($company_id, $filename, $attachment): \FattureInCloud\Model\UploadF24AttachmentResponse
```

Upload F24 Attachment

Uploads an attachment destined to a F24. The actual association between the document and the attachment must be implemented separately, using the returned token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$filename = 'filename_example'; // string | Name of the file.
$attachment = "/path/to/file.txt"; // \SplFileObject | Valid format: .png, .jpg, .gif, .pdf, .zip, .xls, .xlsx, .doc, .docx

try {
    $result = $apiInstance->uploadF24Attachment($company_id, $filename, $attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->uploadF24Attachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **filename** | **string**| Name of the file. | [optional] |
| **attachment** | **\SplFileObject****\SplFileObject**| Valid format: .png, .jpg, .gif, .pdf, .zip, .xls, .xlsx, .doc, .docx | [optional] |

### Return type

[**\FattureInCloud\Model\UploadF24AttachmentResponse**](../Model/UploadF24AttachmentResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
