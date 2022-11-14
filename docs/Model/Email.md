# # Email

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Email unique identifier. | [optional]
**status** | [**\FattureInCloud\Model\EmailStatus**](EmailStatus.md) |  | [optional]
**sent_date** | **\DateTime** | Email sent date. | [optional]
**errors_count** | **int** | Errors count. | [optional]
**error_log** | **string** | Error log. | [optional]
**from_email** | **string** | Sender email. | [optional]
**from_name** | **string** | Sender name. | [optional]
**to_email** | **string** | Recipient email. | [optional]
**to_name** | **string** | Receipient email. | [optional]
**subject** | **string** | Email subject. | [optional]
**content** | **string** | Email content. | [optional]
**copy_to** | **string** |  | [optional]
**recipient_status** | [**\FattureInCloud\Model\EmailRecipientStatus**](EmailRecipientStatus.md) |  | [optional]
**recipient_date** | **\DateTime** |  | [optional]
**kind** | **string** | Email kind. | [optional]
**attachments** | [**\FattureInCloud\Model\EmailAttachment[]**](EmailAttachment.md) | Email attachments. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
