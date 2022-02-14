# # CashbookEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Cashbook unique identifier. | [optional]
**date** | **\DateTime** | Cashbook date. | [optional]
**description** | **string** | Cashbook description. | [optional]
**kind** | [**\FattureInCloud\Model\CashbookEntryKind**](CashbookEntryKind.md) |  | [optional]
**type** | [**\FattureInCloud\Model\CashbookEntryType**](CashbookEntryType.md) |  | [optional]
**entity_name** | **string** | Entity name. | [optional]
**document** | [**\FattureInCloud\Model\CashbookEntryDocument**](CashbookEntryDocument.md) |  | [optional]
**amount_in** | **float** | [Only for cashbook entry in] Total amount in. | [optional]
**payment_account_in** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]
**amount_out** | **float** | [Only for cashbook entry out] Total amount out. | [optional]
**payment_account_out** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
