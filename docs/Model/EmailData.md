# # EmailData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recipient_email** | **string** | Email recipient | [optional]
**default_sender_email** | [**\FattureInCloud\Model\EmailDataDefaultSenderEmail**](EmailDataDefaultSenderEmail.md) |  | [optional]
**sender_emails_list** | [**\FattureInCloud\Model\SenderEmail[]**](SenderEmail.md) | List of all emails from which the document can be sent | [optional]
**cc_email** | **string** | Email cc [by default is the logged company email] | [optional]
**subject** | **string** | Email subject | [optional]
**body** | **string** | Email body | [optional]
**document_exists** | **bool** | Document exists if it is not a delivery note | [optional]
**delivery_note_exists** | **bool** | Document is a delivery note | [optional]
**attachment_exists** | **bool** | Document has attachment | [optional]
**accompanying_invoice_exists** | **bool** | Document has accompanying invoice | [optional]
**default_attach_pdf** | **bool** | Attach document pdf | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
