# # ReceivedDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Received document id | [optional]
**type** | [**\FattureInCloud\Model\ReceivedDocumentType**](ReceivedDocumentType.md) |  | [optional]
**entity** | [**\FattureInCloud\Model\Entity**](Entity.md) |  | [optional]
**date** | **\DateTime** | Received document date [defaults to today&#39;s date] | [optional]
**category** | **string** | Received document category | [optional]
**description** | **string** | Received document description | [optional]
**amount_net** | **float** | Received document total net amount | [optional]
**amount_vat** | **float** | Received document total vat amount | [optional]
**amount_withholding_tax** | **float** | Received document withholding tax amount | [optional]
**amount_other_withholding_tax** | **float** | Received document other withholding tax amount | [optional]
**amount_gross** | **float** | [Read Only] Received document total gross amount | [optional] [readonly]
**amortization** | **float** | Received document amortization value | [optional]
**rc_center** | **string** | Received document revenue center | [optional]
**invoice_number** | **string** | Received document invoice number | [optional]
**is_marked** | **bool** | Received document is marked | [optional]
**is_detailed** | **bool** | Received document has items | [optional]
**e_invoice** | **bool** | [Read Only] Received document is an e-invoice | [optional]
**next_due_date** | **\DateTime** | [Read Only] Received document date of the next not paid payment | [optional] [readonly]
**currency** | [**\FattureInCloud\Model\Currency**](Currency.md) |  | [optional]
**tax_deductibility** | **float** | Received document tax deducibility percentage | [optional]
**vat_deductibility** | **float** | Received document vat deducibility percentage | [optional]
**items_list** | [**\FattureInCloud\Model\ReceivedDocumentItemsListItem[]**](ReceivedDocumentItemsListItem.md) |  | [optional]
**payments_list** | [**\FattureInCloud\Model\ReceivedDocumentPaymentsListItem[]**](ReceivedDocumentPaymentsListItem.md) |  | [optional]
**attachment_url** | **string** | [Temporary] [Read Only] Received document url of the attached file | [optional] [readonly]
**attachment_preview_url** | **string** | [Temporary] [Read Only] Received document url of the attachment preview | [optional] [readonly]
**auto_calculate** | **bool** | Received document total items amount and total payments amount can differ if this field is set to false | [optional]
**attachment_token** | **string** | [Write Only] Received document attachment token returned by POST /received_documents/attachment | [optional]
**locked** | **bool** | Received Document can&#39;t be edited | [optional]
**created_at** | **string** | Received document creation date | [optional]
**updated_at** | **string** | Received document last update date | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
