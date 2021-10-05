# # IssuedDocumentPaymentsList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**due_date** | [**\DateTime**](\DateTime.md) | Due date. | [optional]
**amount** | **float** | Payment amount. | [optional]
**status** | **string** | Payment status. | [optional] [default to STATUS_NOT_PAID]
**payment_account** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]
**paid_date** | [**\DateTime**](\DateTime.md) | Payment date. [Only if status is paid] | [optional]
**ei_raw** | **object** | Advanced raw attributes for e-invoices. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
