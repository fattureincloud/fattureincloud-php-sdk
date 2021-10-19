# FattureInCloud\IssuedEInvoicesApi

All URIs are relative to https://api-v2.fattureincloud.it.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendEInvoice()**](IssuedEInvoicesApi.md#sendEInvoice) | **POST** /c/{company_id}/issued_documents/{document_id}/e_invoice/send | Send the e-invoice
[**verifyEInvoiceXml()**](IssuedEInvoicesApi.md#verifyEInvoiceXml) | **GET** /c/{company_id}/issued_documents/{document_id}/e_invoice/xml_verify | Verify e-invoice xml


## `sendEInvoice()`

```php
sendEInvoice($company_id, $document_id, $send_e_invoice_request): \FattureInCloud\Model\SendEInvoiceResponse
```

Send the e-invoice

Sends the e-invoice to SDI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedEInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.
$send_e_invoice_request = {"data":{"withholding_tax_causal":"causale"}}; // \FattureInCloud\Model\SendEInvoiceRequest

try {
    $result = $apiInstance->sendEInvoice($company_id, $document_id, $send_e_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedEInvoicesApi->sendEInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **document_id** | **int**| The ID of the document. |
 **send_e_invoice_request** | [**\FattureInCloud\Model\SendEInvoiceRequest**](../Model/SendEInvoiceRequest.md)|  | [optional]

### Return type

[**\FattureInCloud\Model\SendEInvoiceResponse**](../Model/SendEInvoiceResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyEInvoiceXml()`

```php
verifyEInvoiceXml($company_id, $document_id): \FattureInCloud\Model\VerifyEInvoiceXmlResponse
```

Verify e-invoice xml

Verifies the e-invoice xml format. Checks if all of the mandatory fields are filled and compliant to the right format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\IssuedEInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$document_id = 56; // int | The ID of the document.

try {
    $result = $apiInstance->verifyEInvoiceXml($company_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuedEInvoicesApi->verifyEInvoiceXml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **document_id** | **int**| The ID of the document. |

### Return type

[**\FattureInCloud\Model\VerifyEInvoiceXmlResponse**](../Model/VerifyEInvoiceXmlResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
