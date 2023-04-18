# FattureInCloud\WebhooksApi

All URIs are relative to https://api-v2.fattureincloud.it, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhooksSubscription()**](WebhooksApi.md#createWebhooksSubscription) | **POST** /c/{company_id}/subscriptions | Create a Webhook Subscription |
| [**deleteWebhooksSubscription()**](WebhooksApi.md#deleteWebhooksSubscription) | **DELETE** /c/{company_id}/subscriptions/{subscription_id} | Delete Webhooks Subscription |
| [**getWebhooksSubscription()**](WebhooksApi.md#getWebhooksSubscription) | **GET** /c/{company_id}/subscriptions/{subscription_id} | Get Webhooks Subscription |
| [**listWebhooksSubscriptions()**](WebhooksApi.md#listWebhooksSubscriptions) | **GET** /c/{company_id}/subscriptions | List Webhooks Subscriptions |
| [**modifyWebhooksSubscription()**](WebhooksApi.md#modifyWebhooksSubscription) | **PUT** /c/{company_id}/subscriptions/{subscription_id} | Modify Webhooks Subscription |


## `createWebhooksSubscription()`

```php
createWebhooksSubscription($company_id, $create_webhooks_subscription_request): \FattureInCloud\Model\CreateWebhooksSubscriptionResponse
```

Create a Webhook Subscription

Register some webhooks Subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$create_webhooks_subscription_request = new \FattureInCloud\Model\CreateWebhooksSubscriptionRequest; // \FattureInCloud\Model\CreateWebhooksSubscriptionRequest | 

try {
    $result = $apiInstance->createWebhooksSubscription($company_id, $create_webhooks_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhooksSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **create_webhooks_subscription_request** | [**\FattureInCloud\Model\CreateWebhooksSubscriptionRequest**](../Model/CreateWebhooksSubscriptionRequest.md)|  | [optional] |

### Return type

[**\FattureInCloud\Model\CreateWebhooksSubscriptionResponse**](../Model/CreateWebhooksSubscriptionResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhooksSubscription()`

```php
deleteWebhooksSubscription($company_id, $subscription_id)
```

Delete Webhooks Subscription

Delete a webhooks subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$subscription_id = SUB123; // string | The ID of the subscription.

try {
    $apiInstance->deleteWebhooksSubscription($company_id, $subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhooksSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **subscription_id** | **string**| The ID of the subscription. | |

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

## `getWebhooksSubscription()`

```php
getWebhooksSubscription($company_id, $subscription_id): \FattureInCloud\Model\GetWebhooksSubscriptionResponse
```

Get Webhooks Subscription

Get a webhooks subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$subscription_id = SUB123; // string | The ID of the subscription.

try {
    $result = $apiInstance->getWebhooksSubscription($company_id, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooksSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **subscription_id** | **string**| The ID of the subscription. | |

### Return type

[**\FattureInCloud\Model\GetWebhooksSubscriptionResponse**](../Model/GetWebhooksSubscriptionResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhooksSubscriptions()`

```php
listWebhooksSubscriptions($company_id): \FattureInCloud\Model\ListWebhooksSubscriptionsResponse
```

List Webhooks Subscriptions

List active webhooks subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.

try {
    $result = $apiInstance->listWebhooksSubscriptions($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhooksSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |

### Return type

[**\FattureInCloud\Model\ListWebhooksSubscriptionsResponse**](../Model/ListWebhooksSubscriptionsResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyWebhooksSubscription()`

```php
modifyWebhooksSubscription($company_id, $subscription_id, $modify_webhooks_subscription_request): \FattureInCloud\Model\ModifyWebhooksSubscriptionResponse
```

Modify Webhooks Subscription

Edit a webhooks subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$subscription_id = SUB123; // string | The ID of the subscription.
$modify_webhooks_subscription_request = new \FattureInCloud\Model\ModifyWebhooksSubscriptionRequest; // \FattureInCloud\Model\ModifyWebhooksSubscriptionRequest

try {
    $result = $apiInstance->modifyWebhooksSubscription($company_id, $subscription_id, $modify_webhooks_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->modifyWebhooksSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The ID of the company. | |
| **subscription_id** | **string**| The ID of the subscription. | |
| **modify_webhooks_subscription_request** | [**\FattureInCloud\Model\ModifyWebhooksSubscriptionRequest**](../Model/ModifyWebhooksSubscriptionRequest.md)|  | [optional] |

### Return type

[**\FattureInCloud\Model\ModifyWebhooksSubscriptionResponse**](../Model/ModifyWebhooksSubscriptionResponse.md)

### Authorization

[OAuth2AuthenticationCodeFlow](../../README.md#OAuth2AuthenticationCodeFlow)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
