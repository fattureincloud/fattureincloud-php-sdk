# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | [optional]
**name** | **string** | Name of the payment method |
**type** | **string** | Method type | [optional] [default to TYPE_STANDARD]
**is_default** | **bool** | Determines if this is the default payment method. | [optional]
**default_payment_account** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]
**details** | [**\FattureInCloud\Model\PaymentMethodDetails[]**](PaymentMethodDetails.md) | Method details rows | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
