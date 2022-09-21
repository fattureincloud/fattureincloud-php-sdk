# FattureInCloud\InfoApi

All URIs are relative to https://api-v2.fattureincloud.it, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listArchiveCategories()**](InfoApi.md#listArchiveCategories) | **GET** /c/{company_id}/info/archive_categories | List Archive Categories |
| [**listCities()**](InfoApi.md#listCities) | **GET** /info/cities | List Cities |
| [**listCostCenters()**](InfoApi.md#listCostCenters) | **GET** /c/{company_id}/info/cost_centers | List Cost Centers |
| [**listCountries()**](InfoApi.md#listCountries) | **GET** /info/countries | List Countries |
| [**listCurrencies()**](InfoApi.md#listCurrencies) | **GET** /info/currencies | List Currencies |
| [**listDeliveryNotesDefaultCausals()**](InfoApi.md#listDeliveryNotesDefaultCausals) | **GET** /info/dn_causals | List Delivery Notes Default Causals |
| [**listDetailedCountries()**](InfoApi.md#listDetailedCountries) | **GET** /info/detailed_countries | List Detailed Countries |
| [**listLanguages()**](InfoApi.md#listLanguages) | **GET** /info/languages | List Languages |
| [**listPaymentAccounts()**](InfoApi.md#listPaymentAccounts) | **GET** /c/{company_id}/info/payment_accounts | List Payment Accounts |
| [**listPaymentMethods()**](InfoApi.md#listPaymentMethods) | **GET** /c/{company_id}/info/payment_methods | List Payment Methods |
| [**listProductCategories()**](InfoApi.md#listProductCategories) | **GET** /c/{company_id}/info/product_categories | List Product Categories |
| [**listReceivedDocumentCategories()**](InfoApi.md#listReceivedDocumentCategories) | **GET** /c/{company_id}/info/received_document_categories | List Received Document Categories |
| [**listRevenueCenters()**](InfoApi.md#listRevenueCenters) | **GET** /c/{company_id}/info/revenue_centers | List Revenue Centers |
| [**listTemplates()**](InfoApi.md#listTemplates) | **GET** /info/templates | List Templates |
| [**listUnitsOfMeasure()**](InfoApi.md#listUnitsOfMeasure) | **GET** /info/measures | List Units of Measure |
| [**listVatTypes()**](InfoApi.md#listVatTypes) | **GET** /c/{company_id}/info/vat_types | List Vat Types |


## `listArchiveCategories()`

```php
listArchiveCategories($company_id): \FattureInCloud\Model\ListArchiveCategoriesResponse
```

List Archive Categories

Lists the archive categories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.

try {
    $result = $apiInstance->listArchiveCategories($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listArchiveCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |

### Return type

[**\FattureInCloud\Model\ListArchiveCategoriesResponse**](../Model/ListArchiveCategoriesResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCities()`

```php
listCities($postal_code, $city): \FattureInCloud\Model\ListCitiesResponse
```

List Cities

Lists the Italian cities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postal_code = 'postal_code_example'; // string | Postal code for filtering.
$city = 'city_example'; // string | City for filtering (ignored if postal_code is passed).

try {
    $result = $apiInstance->listCities($postal_code, $city);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listCities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postal_code** | **string**| Postal code for filtering. | [optional] |
| **city** | **string**| City for filtering (ignored if postal_code is passed). | [optional] |

### Return type

[**\FattureInCloud\Model\ListCitiesResponse**](../Model/ListCitiesResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCostCenters()`

```php
listCostCenters($company_id): \FattureInCloud\Model\ListCostCentersResponse
```

List Cost Centers

Lists the cost centers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.

try {
    $result = $apiInstance->listCostCenters($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listCostCenters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |

### Return type

[**\FattureInCloud\Model\ListCostCentersResponse**](../Model/ListCostCentersResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCountries()`

```php
listCountries(): \FattureInCloud\Model\ListCountriesResponse
```

List Countries

Lists the supported countries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FattureInCloud\Model\ListCountriesResponse**](../Model/ListCountriesResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCurrencies()`

```php
listCurrencies(): \FattureInCloud\Model\ListCurrenciesResponse
```

List Currencies

Lists the supported currencies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FattureInCloud\Model\ListCurrenciesResponse**](../Model/ListCurrenciesResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDeliveryNotesDefaultCausals()`

```php
listDeliveryNotesDefaultCausals(): \FattureInCloud\Model\ListDeliveryNotesDefaultCausalsResponse
```

List Delivery Notes Default Causals

Lists the delivery note default causals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDeliveryNotesDefaultCausals();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listDeliveryNotesDefaultCausals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FattureInCloud\Model\ListDeliveryNotesDefaultCausalsResponse**](../Model/ListDeliveryNotesDefaultCausalsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDetailedCountries()`

```php
listDetailedCountries(): \FattureInCloud\Model\ListDetailedCountriesResponse
```

List Detailed Countries

Lists the supported countries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDetailedCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listDetailedCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FattureInCloud\Model\ListDetailedCountriesResponse**](../Model/ListDetailedCountriesResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLanguages()`

```php
listLanguages(): \FattureInCloud\Model\ListLanguagesResponse
```

List Languages

Lists the supported languages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FattureInCloud\Model\ListLanguagesResponse**](../Model/ListLanguagesResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentAccounts()`

```php
listPaymentAccounts($company_id, $fields, $fieldset, $sort): \FattureInCloud\Model\ListPaymentAccountsResponse
```

List Payment Accounts

Lists the available payment accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.
$sort = 'sort_example'; // string | List of comma-separated fields for result sorting (minus for desc sorting).

try {
    $result = $apiInstance->listPaymentAccounts($company_id, $fields, $fieldset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listPaymentAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **fields** | **string**| List of comma-separated fields. | [optional] |
| **fieldset** | **string**| Name of the fieldset. | [optional] |
| **sort** | **string**| List of comma-separated fields for result sorting (minus for desc sorting). | [optional] |

### Return type

[**\FattureInCloud\Model\ListPaymentAccountsResponse**](../Model/ListPaymentAccountsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentMethods()`

```php
listPaymentMethods($company_id, $fields, $fieldset, $sort): \FattureInCloud\Model\ListPaymentMethodsResponse
```

List Payment Methods

Lists the available payment methods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$fields = 'fields_example'; // string | List of comma-separated fields.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.
$sort = 'sort_example'; // string | List of comma-separated fields for result sorting (minus for desc sorting).

try {
    $result = $apiInstance->listPaymentMethods($company_id, $fields, $fieldset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **fields** | **string**| List of comma-separated fields. | [optional] |
| **fieldset** | **string**| Name of the fieldset. | [optional] |
| **sort** | **string**| List of comma-separated fields for result sorting (minus for desc sorting). | [optional] |

### Return type

[**\FattureInCloud\Model\ListPaymentMethodsResponse**](../Model/ListPaymentMethodsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductCategories()`

```php
listProductCategories($company_id, $context): \FattureInCloud\Model\ListProductCategoriesResponse
```

List Product Categories

Lists the product categories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$context = 'context_example'; // string

try {
    $result = $apiInstance->listProductCategories($company_id, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listProductCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **context** | **string**|  | |

### Return type

[**\FattureInCloud\Model\ListProductCategoriesResponse**](../Model/ListProductCategoriesResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReceivedDocumentCategories()`

```php
listReceivedDocumentCategories($company_id): \FattureInCloud\Model\ListReceivedDocumentCategoriesResponse
```

List Received Document Categories

Lists the received document categories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.

try {
    $result = $apiInstance->listReceivedDocumentCategories($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listReceivedDocumentCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |

### Return type

[**\FattureInCloud\Model\ListReceivedDocumentCategoriesResponse**](../Model/ListReceivedDocumentCategoriesResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRevenueCenters()`

```php
listRevenueCenters($company_id): \FattureInCloud\Model\ListRevenueCentersResponse
```

List Revenue Centers

Lists the revenue centers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.

try {
    $result = $apiInstance->listRevenueCenters($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listRevenueCenters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |

### Return type

[**\FattureInCloud\Model\ListRevenueCentersResponse**](../Model/ListRevenueCentersResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTemplates()`

```php
listTemplates($type, $by_type): \FattureInCloud\Model\ListTemplatesResponse
```

List Templates

Lists the available templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'all'; // string | Type of the templates.
$by_type = false; // bool | [Only if type=all] If true, splits the list in objects, grouping templates by type.

try {
    $result = $apiInstance->listTemplates($type, $by_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Type of the templates. | [optional] [default to &#39;all&#39;] |
| **by_type** | **bool**| [Only if type&#x3D;all] If true, splits the list in objects, grouping templates by type. | [optional] [default to false] |

### Return type

[**\FattureInCloud\Model\ListTemplatesResponse**](../Model/ListTemplatesResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUnitsOfMeasure()`

```php
listUnitsOfMeasure(): \FattureInCloud\Model\ListUnitsOfMeasureResponse
```

List Units of Measure

Lists the units of measure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listUnitsOfMeasure();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listUnitsOfMeasure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FattureInCloud\Model\ListUnitsOfMeasureResponse**](../Model/ListUnitsOfMeasureResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVatTypes()`

```php
listVatTypes($company_id, $fieldset): \FattureInCloud\Model\ListVatTypesResponse
```

List Vat Types

Lists the available vat types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$fieldset = 'fieldset_example'; // string | Name of the fieldset.

try {
    $result = $apiInstance->listVatTypes($company_id, $fieldset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->listVatTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **fieldset** | **string**| Name of the fieldset. | [optional] |

### Return type

[**\FattureInCloud\Model\ListVatTypesResponse**](../Model/ListVatTypesResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
