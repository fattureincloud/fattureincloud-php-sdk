# # CashbookEntryInOut

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Cashbook unique identifier. |
**date** | **\DateTime** | Cashbook date. |
**description** | **string** | Cashbook description. |
**kind** | **string** | Cashbook kind. |
**type** | **string** | Cashbook type. |
**entity_name** | **string** | Entity name. | [optional]
**document** | [**\FattureInCloud\Model\CashbookEntryDataDocument**](CashbookEntryDataDocument.md) |  | [optional]
**amount_out** | **float** | Total amount out. | [optional]
**payment_account_out** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]
**amount_in** | **float** | Total amount in. | [optional]
**payment_account_in** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
