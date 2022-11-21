# # IssuedDocumentItemsListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. | [optional]
**product_id** | **int** | Unique identifier of the product. | [optional]
**code** | **string** | Product code. | [optional]
**name** | **string** | Product name. | [optional]
**category** | **string** | Product category | [optional]
**description** | **string** | Product description. | [optional]
**qty** | **float** | Items quantity, | [optional]
**measure** | **string** | Item measure. | [optional]
**net_price** | **float** | Net price. | [optional]
**gross_price** | **float** | Gross price. | [optional]
**vat** | [**\FattureInCloud\Model\VatType**](VatType.md) |  | [optional]
**not_taxable** | **bool** |  | [optional]
**apply_withholding_taxes** | **bool** | Apply withholding taxes, rivalsa and cassa. | [optional]
**discount** | **float** | Discount percentual value. | [optional]
**discount_highlight** | **bool** |  | [optional]
**in_dn** | **bool** |  | [optional]
**stock** | **bool** |  | [optional]
**ei_raw** | **object** | Advanced raw attributes for e-invoices. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
