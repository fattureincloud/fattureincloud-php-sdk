# # Receipt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Receipt id | [optional]
**date** | **\DateTime** | Receipt date | [optional]
**number** | **float** | Receipt number | [optional]
**numeration** | **string** | Receipt numeration | [optional]
**amount_net** | **float** | Receipt total net amount | [optional]
**amount_vat** | **float** | Receipt total vat amount | [optional]
**amount_gross** | **float** | Receipt total gross amount | [optional]
**use_gross_prices** | **bool** | Receipt uses gross prices | [optional]
**type** | [**\FattureInCloud\Model\ReceiptType**](ReceiptType.md) |  | [optional]
**description** | **string** | Receipt description | [optional]
**rc_center** | **string** | Receipt revenue center | [optional]
**created_at** | **string** | Receipt creation date | [optional]
**updated_at** | **string** | Receipt last update date | [optional]
**payment_account** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]
**items_list** | [**\FattureInCloud\Model\ReceiptItemsListItem[]**](ReceiptItemsListItem.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
