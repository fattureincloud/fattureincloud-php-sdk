# # EmailData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recipient_email** | **string** | Recipient&#39;s email | [optional]
**default_sender_email** | [**\FattureInCloud\Model\EmailDataDefaultSenderEmail**](EmailDataDefaultSenderEmail.md) |  | [optional]
**sender_emails_list** | [**\FattureInCloud\Model\SenderEmail[]**](SenderEmail.md) | List of all emails from which the document can be sent | [optional]
**cc_email** | **string** | By default is the logged company email. This is the email address to which a copy will be sent. | [optional]
**subject** | **string** | Email subject | [optional]
**body** | **string** | Email body | [optional]
**document_exists** | **bool** | If the document is not a delivery note, this flag will be set to true | [optional]
**delivery_note_exists** | **bool** | If the document is a delivery note, this flag will be set to true | [optional]
**attachment_exists** | **bool** | If the document has one or more attachments, this flag will be set to true | [optional]
**accompanying_invoice_exists** | **bool** | If an accompanying invoice exists, this flag will be set to true | [optional]
**default_attach_pdf** | **bool** | If a pdf is attached, this flag will be set to true | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
