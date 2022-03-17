# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | [optional]
**name** | **string** | Name of the payment method | [optional]
**type** | [**\FattureInCloud\Model\PaymentMethodType**](PaymentMethodType.md) |  | [optional]
**is_default** | **bool** | Determines if this is the default payment method. | [optional]
**default_payment_account** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]
**details** | [**\FattureInCloud\Model\PaymentMethodDetails[]**](PaymentMethodDetails.md) | Method details rows | [optional]
**bank_iban** | **string** | Bank iban | [optional]
**bank_name** | **string** | Bank name | [optional]
**bank_beneficiary** | **string** | Bank beneficiary | [optional]
**ei_payment_method** | **string** | E-invoice payment method | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
