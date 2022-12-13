# FattureInCloud\EmailsApi

All URIs are relative to https://api-v2.fattureincloud.it, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listEmails()**](EmailsApi.md#listEmails) | **GET** /c/{company_id}/emails | List emails |


## `listEmails()`

```php
listEmails($company_id): \FattureInCloud\Model\ListEmailsResponse
```

List emails

List Emails.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.

try {
    $result = $apiInstance->listEmails($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->listEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |

### Return type

[**\FattureInCloud\Model\ListEmailsResponse**](../Model/ListEmailsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
