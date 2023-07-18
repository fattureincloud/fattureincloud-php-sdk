# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Payment method id | [optional]
**name** | **string** | Payment method name | [optional]
**type** | [**\FattureInCloud\Model\PaymentMethodType**](PaymentMethodType.md) |  | [optional]
**is_default** | **bool** | Payment method is default | [optional]
**default_payment_account** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]
**details** | [**\FattureInCloud\Model\PaymentMethodDetails[]**](PaymentMethodDetails.md) | Payment method details | [optional]
**bank_iban** | **string** | Payment method bank iban | [optional]
**bank_name** | **string** | Payment method bank name | [optional]
**bank_beneficiary** | **string** | Payment method bank beneficiary | [optional]
**ei_payment_method** | **string** | E-invoice payment method | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
