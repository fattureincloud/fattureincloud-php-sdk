# PendingReceivedDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Pending received document id | [optional]
**date** | **\DateTime** | Pending received document date | [optional]
**subject** | **string** | Pending received document subject | [optional]
**filename** | **string** | Pending received document filename | [optional]
**type** | [**\FattureInCloud\Model\PendingReceivedDocumentType**](PendingReceivedDocumentType.md) |  | [optional]
**attachment_url** | **string** | [Temporary] [Read Only] Pending received document url of the attached file | [optional] [readonly]
**amount_gross** | **float** | [Read Only] Pending received document total gross amount | [optional] [readonly]
**currency** | [**\FattureInCloud\Model\Currency**](Currency.md) |  | [optional]
**document_type** | [**\FattureInCloud\Model\ReceivedDocumentType**](ReceivedDocumentType.md) |  | [optional]
**supplier_name** | **string** | Pending received document supplier name | [optional]
**cost_center** | **string** | Pending received document cost center | [optional]
**category** | **string** | Pending received document category | [optional]
**other_attachments** | [**\FattureInCloud\Model\Attachment[]**](Attachment.md) | Pending received document other attachments | [optional]
**emssion_date** | **\DateTime** | Pending received document emission date | [optional]
**payments_list** | [**\FattureInCloud\Model\PendingReceivedDocumentPaymentsListItem[]**](PendingReceivedDocumentPaymentsListItem.md) |  | [optional]
**amount_net** | **float** | Pending received document total net amount | [optional]
**amount_vat** | **float** | Pending received document total vat amount | [optional]
**import_error** | **string** | Pending received document import error | [optional]
**extracted_data** | [**\FattureInCloud\Model\PendingReceivedDocumentExtractedData**](PendingReceivedDocumentExtractedData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
