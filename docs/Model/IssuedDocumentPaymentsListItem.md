# # IssuedDocumentPaymentsListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Issued document payment item id | [optional]
**due_date** | **\DateTime** | Issued document payment due date | [optional]
**amount** | **float** | Issued document payment amount | [optional]
**status** | [**\FattureInCloud\Model\IssuedDocumentStatus**](IssuedDocumentStatus.md) |  | [optional]
**payment_account** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]
**paid_date** | **\DateTime** | Issued document payment date [Only if status is paid] | [optional]
**ei_raw** | **object** | Issued document payment advanced raw attributes for e-invoices | [optional]
**payment_terms** | [**\FattureInCloud\Model\IssuedDocumentPaymentsListItemPaymentTerms**](IssuedDocumentPaymentsListItemPaymentTerms.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
