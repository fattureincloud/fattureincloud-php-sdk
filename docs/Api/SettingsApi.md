# FattureInCloud\SettingsApi

All URIs are relative to https://api-v2.fattureincloud.it.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentAccount()**](SettingsApi.md#createPaymentAccount) | **POST** /c/{companyId}/settings/payment_accounts | Create Payment Account
[**createPaymentMethod()**](SettingsApi.md#createPaymentMethod) | **POST** /c/{companyId}/settings/payment_methods | Create Payment Method
[**deletePaymentAccount()**](SettingsApi.md#deletePaymentAccount) | **DELETE** /c/{companyId}/settings/payment_accounts/{paymentAccountId} | Delete Payment Account
[**deletePaymentMethod()**](SettingsApi.md#deletePaymentMethod) | **DELETE** /c/{companyId}/settings/payment_method/{paymentMethodId} | Delete Payment Method
[**getPaymentAccount()**](SettingsApi.md#getPaymentAccount) | **GET** /c/{companyId}/settings/payment_accounts/{paymentAccountId} | Get Payment Account
[**getPaymentMethod()**](SettingsApi.md#getPaymentMethod) | **GET** /c/{companyId}/settings/payment_method/{paymentMethodId} | Get Payment Method
[**modifyPaymentAccount()**](SettingsApi.md#modifyPaymentAccount) | **PUT** /c/{companyId}/settings/payment_accounts/{paymentAccountId} | Modify Payment Account
[**modifyPaymentMethod()**](SettingsApi.md#modifyPaymentMethod) | **PUT** /c/{companyId}/settings/payment_method/{paymentMethodId} | Modify Payment Method


## `createPaymentAccount()`

```php
createPaymentAccount($company_id, $create_payment_account_request): \FattureInCloud\Model\CreatePaymentAccountResponse
```

Create Payment Account

Creates a new payment account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$create_payment_account_request = {"data":{"id":12345,"name":"Indesa","type":"bank","iban":"IT17Q0051343200000003497636","sia":"T1234","virtual":false}}; // \FattureInCloud\Model\CreatePaymentAccountRequest

try {
    $result = $apiInstance->createPaymentAccount($company_id, $create_payment_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->createPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **create_payment_account_request** | [**\FattureInCloud\Model\CreatePaymentAccountRequest**](../Model/CreatePaymentAccountRequest.md)|  | [optional]

### Return type

[**\FattureInCloud\Model\CreatePaymentAccountResponse**](../Model/CreatePaymentAccountResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentMethod()`

```php
createPaymentMethod($company_id, $create_payment_method_request): \FattureInCloud\Model\CreatePaymentMethodResponse
```

Create Payment Method

Creates a new payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$create_payment_method_request = {"data":{"id":386683,"name":"Bonifico bancario","is_default":true,"type":"standard","details":[{"title":"Banca","description":"Sao Paulo"}],"default_payment_account":{"id":12345,"name":"conto banca SP"}}}; // \FattureInCloud\Model\CreatePaymentMethodRequest

try {
    $result = $apiInstance->createPaymentMethod($company_id, $create_payment_method_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->createPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **create_payment_method_request** | [**\FattureInCloud\Model\CreatePaymentMethodRequest**](../Model/CreatePaymentMethodRequest.md)|  | [optional]

### Return type

[**\FattureInCloud\Model\CreatePaymentMethodResponse**](../Model/CreatePaymentMethodResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePaymentAccount()`

```php
deletePaymentAccount($company_id, $payment_account_id)
```

Delete Payment Account

Deletes the specified payment account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$payment_account_id = 1; // string | The Referred Payment Account Id.

try {
    $apiInstance->deletePaymentAccount($company_id, $payment_account_id);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deletePaymentAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **payment_account_id** | **string**| The Referred Payment Account Id. |

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

## `deletePaymentMethod()`

```php
deletePaymentMethod($company_id, $payment_method_id)
```

Delete Payment Method

Deletes the specified payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$payment_method_id = 1; // int | The Referred Payment Method Id.

try {
    $apiInstance->deletePaymentMethod($company_id, $payment_method_id);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deletePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **payment_method_id** | **int**| The Referred Payment Method Id. |

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

## `getPaymentAccount()`

```php
getPaymentAccount($company_id, $payment_account_id, $fields, $fieldset, $body): \FattureInCloud\Model\GetPaymentAccountResponse
```

Get Payment Account

Gets the specified payment account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$payment_account_id = 1; // string | The Referred Payment Account Id.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->getPaymentAccount($company_id, $payment_account_id, $fields, $fieldset, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **payment_account_id** | **string**| The Referred Payment Account Id. |
 **fields** | **string**| List of comma-separated fields. | [optional]
 **fieldset** | **string**| Name of the fieldset. | [optional]
 **body** | **object**|  | [optional]

### Return type

[**\FattureInCloud\Model\GetPaymentAccountResponse**](../Model/GetPaymentAccountResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentMethod()`

```php
getPaymentMethod($company_id, $payment_method_id, $fields, $fieldset): \FattureInCloud\Model\GetPaymentMethodResponse
```

Get Payment Method

Gets the specified payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$payment_method_id = 1; // int | The Referred Payment Method Id.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.

try {
    $result = $apiInstance->getPaymentMethod($company_id, $payment_method_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **payment_method_id** | **int**| The Referred Payment Method Id. |
 **fields** | **string**| List of comma-separated fields. | [optional]
 **fieldset** | **string**| Name of the fieldset. | [optional]

### Return type

[**\FattureInCloud\Model\GetPaymentMethodResponse**](../Model/GetPaymentMethodResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyPaymentAccount()`

```php
modifyPaymentAccount($company_id, $payment_account_id, $modify_payment_account_request): \FattureInCloud\Model\ModifyPaymentAccountResponse
```

Modify Payment Account

Modifies the specified payment account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$payment_account_id = 1; // string | The Referred Payment Account Id.
$modify_payment_account_request = {"data":{"id":0,"name":"Conto Banca Intesa","type":"standard","iban":"string","sia":"string","cuc":"string","virtual":true}}; // \FattureInCloud\Model\ModifyPaymentAccountRequest

try {
    $result = $apiInstance->modifyPaymentAccount($company_id, $payment_account_id, $modify_payment_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->modifyPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **payment_account_id** | **string**| The Referred Payment Account Id. |
 **modify_payment_account_request** | [**\FattureInCloud\Model\ModifyPaymentAccountRequest**](../Model/ModifyPaymentAccountRequest.md)|  | [optional]

### Return type

[**\FattureInCloud\Model\ModifyPaymentAccountResponse**](../Model/ModifyPaymentAccountResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyPaymentMethod()`

```php
modifyPaymentMethod($company_id, $payment_method_id, $modify_payment_method_request): \FattureInCloud\Model\ModifyPaymentMethodResponse
```

Modify Payment Method

Modifies the specified payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$payment_method_id = 1; // int | The Referred Payment Method Id.
$modify_payment_method_request = {"data":{"id":386683,"name":"Bonifico bancario","is_default":true,"type":"standard","details":[{"title":"Banca","description":"Sao Paulo"}],"default_payment_account":{"id":12345,"name":"conto banca SP"}}}; // \FattureInCloud\Model\ModifyPaymentMethodRequest

try {
    $result = $apiInstance->modifyPaymentMethod($company_id, $payment_method_id, $modify_payment_method_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->modifyPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company. |
 **payment_method_id** | **int**| The Referred Payment Method Id. |
 **modify_payment_method_request** | [**\FattureInCloud\Model\ModifyPaymentMethodRequest**](../Model/ModifyPaymentMethodRequest.md)|  | [optional]

### Return type

[**\FattureInCloud\Model\ModifyPaymentMethodResponse**](../Model/ModifyPaymentMethodResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
