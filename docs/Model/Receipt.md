# # Receipt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Receipt unique identifier. | [optional]
**date** | **\DateTime** | Receipt date. | [optional]
**number** | **float** | Receipt number. | [optional]
**numeration** | **string** | If it&#39;s null or empty string use the default numeration. | [optional]
**amount_net** | **float** | Total net amount. | [optional]
**amount_vat** | **float** | Total vat amount. | [optional]
**amount_gross** | **float** | Total gross amount. | [optional]
**use_gross_prices** | **bool** |  | [optional]
**type** | [**\FattureInCloud\Model\ReceiptType**](ReceiptType.md) |  | [optional]
**description** | **string** | Receipt description. | [optional]
**rc_center** | **string** | Revenue center. | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **string** |  | [optional]
**payment_account** | [**\FattureInCloud\Model\PaymentAccount**](PaymentAccount.md) |  | [optional]
**items_list** | [**\FattureInCloud\Model\ReceiptItemsListItem[]**](ReceiptItemsListItem.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
