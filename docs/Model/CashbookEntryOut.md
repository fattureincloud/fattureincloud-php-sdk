# # CashbookEntryOut

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Cashbook unique identifier. |
**date** | **\DateTime** | Cashbook date. |
**description** | **string** | Cashbook description. |
**kind** | [**\FattureInCloud\Model\CashbookEntryKind**](CashbookEntryKind.md) |  |
**type** | [**\FattureInCloud\Model\CashbookEntryType**](CashbookEntryType.md) |  | [optional]
**entity_name** | **string** | Entity name. | [optional]
**document** | [**\FattureInCloud\Model\CashbookEntryDataDocument**](CashbookEntryDataDocument.md) |  | [optional]
**amount_out** | **float** | Total amount out. | [optional]
**payment_account_out** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
