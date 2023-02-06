# # ReceivedDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier of the document. | [optional]
**type** | [**\FattureInCloud\Model\ReceivedDocumentType**](ReceivedDocumentType.md) |  | [optional]
**entity** | [**\FattureInCloud\Model\ReceivedDocumentEntity**](ReceivedDocumentEntity.md) |  | [optional]
**date** | **\DateTime** | Date of the document [If not specified, today date is used]. | [optional]
**category** | **string** | Document category. | [optional]
**description** | **string** | Document description. | [optional]
**amount_net** | **float** | Total net amount. | [optional]
**amount_vat** | **float** | Total vat amount. | [optional]
**amount_withholding_tax** | **float** | Withholding tax amount. | [optional]
**amount_other_withholding_tax** | **float** | Other withholding tax amount. | [optional]
**amount_gross** | **float** | [Read Only] Total gross amount. | [optional] [readonly]
**amortization** | **float** | Amortization value | [optional]
**rc_center** | **string** | Revenue center. | [optional]
**invoice_number** | **string** | Invoice number | [optional]
**is_marked** | **bool** |  | [optional]
**is_detailed** | **bool** |  | [optional]
**e_invoice** | **bool** | [Read Only] Indicates if this is an e-invoice. | [optional]
**next_due_date** | **\DateTime** | [Read Only] Next due date. | [optional] [readonly]
**currency** | [**\FattureInCloud\Model\Currency**](Currency.md) |  | [optional]
**tax_deductibility** | **float** | Tax deducibility percentage. | [optional]
**vat_deductibility** | **float** | Vat deducibility percentage. | [optional]
**items_list** | [**\FattureInCloud\Model\ReceivedDocumentItemsListItem[]**](ReceivedDocumentItemsListItem.md) |  | [optional]
**payments_list** | [**\FattureInCloud\Model\ReceivedDocumentPaymentsListItem[]**](ReceivedDocumentPaymentsListItem.md) |  | [optional]
**attachment_url** | **string** | [Temporary] [Read Only]  Public url of the attached file. Authomatically set if a valid attachment token is passed via POST /received_documents or PUT /received_documents/{documentId}. | [optional] [readonly]
**attachment_preview_url** | **string** | [Temporary] [Read Only]  Attachment preview url. | [optional] [readonly]
**auto_calculate** | **bool** | If set to false total items amount and total payments amount can be different. | [optional]
**attachment_token** | **string** | Uploaded attachement token. | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
