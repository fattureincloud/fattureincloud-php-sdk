# FattureInCloud\ClientsApi

All URIs are relative to https://api-v2.fattureincloud.it, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createClient()**](ClientsApi.md#createClient) | **POST** /c/{company_id}/entities/clients | Create Client |
| [**deleteClient()**](ClientsApi.md#deleteClient) | **DELETE** /c/{company_id}/entities/clients/{client_id} | Delete Client |
| [**getClient()**](ClientsApi.md#getClient) | **GET** /c/{company_id}/entities/clients/{client_id} | Get Client |
| [**listClients()**](ClientsApi.md#listClients) | **GET** /c/{company_id}/entities/clients | List Clients |
| [**modifyClient()**](ClientsApi.md#modifyClient) | **PUT** /c/{company_id}/entities/clients/{client_id} | Modify Client |


## `createClient()`

```php
createClient($company_id, $create_client_request): \FattureInCloud\Model\CreateClientResponse
```

Create Client

Creates a new client.

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
$company_id = 12345; // int | The ID of the company.
$create_client_request = new \FattureInCloud\Model\CreateClientRequest; // \FattureInCloud\Model\CreateClientRequest | The client to create

try {
    $result = $apiInstance->createClient($company_id, $create_client_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->createClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **create_client_request** | [**\FattureInCloud\Model\CreateClientRequest**](../Model/CreateClientRequest.md)| The client to create | [optional] |

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

Deletes the specified client.

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
$company_id = 12345; // int | The ID of the company.
$client_id = 56; // int | The ID of the client.

try {
    $apiInstance->deleteClient($company_id, $client_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->deleteClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **client_id** | **int**| The ID of the client. | |

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

Gets the specified client.

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
$company_id = 12345; // int | The ID of the company.
$client_id = 56; // int | The ID of the client.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.

try {
    $result = $apiInstance->getClient($company_id, $client_id, $fields, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->getClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **client_id** | **int**| The ID of the client. | |
| **fields** | **string**| List of comma-separated fields. | [optional] |
| **fieldset** | **string**| Name of the fieldset. | [optional] |

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
listClients($company_id, $fields, $fieldset, $sort, $page, $per_page, $q): \FattureInCloud\Model\ListClientsResponse
```

List Clients

Lists the clients.

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
$company_id = 12345; // int | The ID of the company.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.
$sort = 'sort_example'; // string | List of comma-separated fields for result sorting (minus for desc sorting).
$page = 1; // int | The page to retrieve.
$per_page = 5; // int | The size of the page.
$q = 'q_example'; // string | Query for filtering the results.

try {
    $result = $apiInstance->listClients($company_id, $fields, $fieldset, $sort, $page, $per_page, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->listClients: ', $e->getMessage(), PHP_EOL;
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

Modifies the specified client.

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
$company_id = 12345; // int | The ID of the company.
$client_id = 56; // int | The ID of the client.
$modify_client_request = new \FattureInCloud\Model\ModifyClientRequest; // \FattureInCloud\Model\ModifyClientRequest | The modified Client. First level parameters are managed in delta mode.

try {
    $result = $apiInstance->modifyClient($company_id, $client_id, $modify_client_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->modifyClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **client_id** | **int**| The ID of the client. | |
| **modify_client_request** | [**\FattureInCloud\Model\ModifyClientRequest**](../Model/ModifyClientRequest.md)| The modified Client. First level parameters are managed in delta mode. | [optional] |

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
