# FattureInCloud\ClientsApi

All URIs are relative to https://api-v2.fattureincloud.it.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClient()**](ClientsApi.md#createClient) | **POST** /c/{company_id}/entities/clients | Create Client
[**deleteClient()**](ClientsApi.md#deleteClient) | **DELETE** /c/{company_id}/entities/clients/{client_id} | Delete Client
[**getClient()**](ClientsApi.md#getClient) | **GET** /c/{company_id}/entities/clients/{client_id} | Get Client
[**listClients()**](ClientsApi.md#listClients) | **GET** /c/{company_id}/entities/clients | List Clients
[**modifyClient()**](ClientsApi.md#modifyClient) | **PUT** /c/{company_id}/entities/clients/{client_id} | Modify Client


## `createClient()`

```php
createClient($company_id, $create_client_request): \FattureInCloud\Model\CreateClientResponse
```

Create Client

👥 Company context \\ 🔒 Required scope: `entity.clients:a`  Create a new client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$create_client_request = {"data":{"code":"AE86","name":"Avv. Maria Rossi","type":"person","first_name":"Maria","last_name":"Rossi","contact_person":"","vat_number":"IT12345640962","tax_code":"BLTGNI5ABCDA794E","address_street":"Via Roma, 1","address_postal_code":"20900","address_city":"Milano","address_province":"MI","address_extra":"","country":"Italia","email":"maria.rossi@example.com","certified_email":"maria.rossi@pec.example.com","phone":"1234567890","fax":"","notes":"","default_payment_terms":1,"default_payment_terms_type":"standard","bank_name":"Indesa","bank_iban":"IT40P123456781000000123456","bank_swift_code":"AK86PCT","shipping_address":"Corso Magellano 4","e_invoice":true,"ei_code":"111111","default_vat":{"id":54321,"value":45,"description":"","is_disabled":false}}}; // \FattureInCloud\Model\CreateClientRequest | The client to create

try {
    $result = $apiInstance->createClient($company_id, $create_client_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->createClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **create_client_request** | [**\FattureInCloud\Model\CreateClientRequest**](../Model/CreateClientRequest.md)| The client to create | [optional]

### Return type

[**\FattureInCloud\Model\CreateClientResponse**](../Model/CreateClientResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteClient()`

```php
deleteClient($company_id, $client_id)
```

Delete Client

👥 Company context 🔒 Required scope: entity.clients:a  Delete an existing client by its unique id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$client_id = 56; // int

try {
    $apiInstance->deleteClient($company_id, $client_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->deleteClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **client_id** | **int**|  |

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

## `getClient()`

```php
getClient($company_id, $client_id, $fields, $fieldset): \FattureInCloud\Model\GetClientResponse
```

Get Client

👥 Company context 🔒 Required scope: entity.clients:r 🎩 Customized responses supported  Get details of an existing client by its unique id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$client_id = 56; // int
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset

try {
    $result = $apiInstance->getClient($company_id, $client_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->getClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **client_id** | **int**|  |
 **fields** | **string**| List of comma-separated fields. | [optional]
 **fieldset** | **string**| Name of the fieldset | [optional]

### Return type

[**\FattureInCloud\Model\GetClientResponse**](../Model/GetClientResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listClients()`

```php
listClients($company_id, $fields, $fieldset, $sort, $page, $per_page): \FattureInCloud\Model\ListClientsResponse
```

List Clients

👥 Company context 🔒 Required scope: entity.clients:r 🔍 Filtering: id, code, name, type, vat_number, tax_code, address_street, address_postal_code, address_city, address_province, country, email, certified_email, phone, fax, notes, imported, atoka_show, e_invoice, ei_code, created_at, updated_at ↕️ Sorting: code, name, type, vat_number, tax_code, address_street, address_postal_code, address_city, address_province, country, email, certified_email, phone, fax, notes, e_invoice, ei_code, created_at, updated_at 📄 Paginated results 🎩 Customized responses supported  Get a list of clients that match the filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset
$sort = 'sort_example'; // string | List of comma-separated fields for result sorting (minus for desc sorting)
$page = 1; // int | Requested page
$per_page = 5; // int | Items to be shown per page

try {
    $result = $apiInstance->listClients($company_id, $fields, $fieldset, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->listClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **fields** | **string**| List of comma-separated fields. | [optional]
 **fieldset** | **string**| Name of the fieldset | [optional]
 **sort** | **string**| List of comma-separated fields for result sorting (minus for desc sorting) | [optional]
 **page** | **int**| Requested page | [optional] [default to 1]
 **per_page** | **int**| Items to be shown per page | [optional] [default to 5]

### Return type

[**\FattureInCloud\Model\ListClientsResponse**](../Model/ListClientsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyClient()`

```php
modifyClient($company_id, $client_id, $modify_client_request): \FattureInCloud\Model\ModifyClientResponse
```

Modify Client

👥 Company context 🔒 Required scope: entity.clients:a  Edit an existing client by its unique id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The Referred Company Id.
$client_id = 56; // int
$modify_client_request = {"data":{"code":"AE86","name":"Avv. Maria Rossi","type":"person","first_name":"Maria","last_name":"Rossi","contact_person":"","vat_number":"IT12345640962","tax_code":"BLTGNI5ABCDA794E","address_street":"Via Roma, 1","address_postal_code":"20900","address_city":"Milano","address_province":"MI","address_extra":"","country":"Italia","email":"maria.rossi@example.com","certified_email":"maria.rossi@pec.example.com","phone":"1234567890","fax":"","notes":"","default_payment_terms":1,"default_payment_terms_type":"standard","bank_name":"Indesa","bank_iban":"IT40P123456781000000123456","bank_swift_code":"AK86PCT","shipping_address":"Corso Magellano 4","e_invoice":true,"ei_code":"111111","default_vat":{"id":54321,"value":45,"description":"","is_disabled":false}}}; // \FattureInCloud\Model\ModifyClientRequest | The modified Client. First level parameters are managed in delta mode.

try {
    $result = $apiInstance->modifyClient($company_id, $client_id, $modify_client_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->modifyClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The Referred Company Id. |
 **client_id** | **int**|  |
 **modify_client_request** | [**\FattureInCloud\Model\ModifyClientRequest**](../Model/ModifyClientRequest.md)| The modified Client. First level parameters are managed in delta mode. | [optional]

### Return type

[**\FattureInCloud\Model\ModifyClientResponse**](../Model/ModifyClientResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
