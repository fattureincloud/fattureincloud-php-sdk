# # Product

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. | [optional]
**name** | **string** | Product name. | [optional]
**code** | **string** | Product code. | [optional]
**net_price** | **float** | Net sale price (used if use_gross_price is false, otherwise it&#39;s competed automatically). | [optional]
**gross_price** | **float** | Gross sale price (used if use_gross_price is false, otherwise it&#39;s competed automatically). | [optional]
**use_gross_price** | **bool** | Determine which price to use for calculations. | [optional]
**default_vat** | [**\FattureInCloud\Model\VatType**](VatType.md) |  | [optional]
**net_cost** | **float** | Net cost of the product (used for received documents). | [optional]
**measure** | **string** | Unit of measure. | [optional]
**description** | **string** | Product description. | [optional]
**category** | **string** | Product category. | [optional]
**notes** | **string** | Extra notes. | [optional]
**in_stock** | **bool** | Determine if the product is in stock. | [optional]
**stock_initial** | **float** | Product initial stock. | [optional]
**stock_current** | **float** | [Read Only] Product current stock. | [optional] [readonly]
**average_cost** | **float** | Product average cost. | [optional]
**average_price** | **float** | Product average price. | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
