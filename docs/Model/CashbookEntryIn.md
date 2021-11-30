# # CashbookEntryIn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Cashbook unique identifier. |
**date** | **\DateTime** | Cashbook date. |
**description** | **string** | Cashbook description. |
**kind** | [**\FattureInCloud\Model\CashbookEntryKind**](CashbookEntryKind.md) |  |
**type** | [**\FattureInCloud\Model\CashbookEntryType**](CashbookEntryType.md) |  |
**entity_name** | **string** | Entity name. | [optional]
**document** | [**\FattureInCloud\Model\CashbookEntryDataDocument**](CashbookEntryDataDocument.md) |  | [optional]
**amount_in** | **float** | Total amount in. | [optional]
**payment_account_in** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
