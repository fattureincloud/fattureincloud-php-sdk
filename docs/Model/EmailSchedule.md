# # EmailSchedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_id** | **int** | Sender id. Required if &#x60;sender_email&#x60; is not specified | [optional]
**sender_email** | **string** | Sender email. Required if &#x60;sender_id&#x60; is not specified | [optional]
**recipient_email** | **string** | One or more comma separated recipient emails | [optional]
**subject** | **string** | Email subject | [optional]
**body** | **string** | Email body | [optional]
**include** | [**\FattureInCloud\Model\EmailScheduleInclude**](EmailScheduleInclude.md) |  | [optional]
**attach_pdf** | **bool** | If set to true, documents will be sent as PDF attachments too | [optional]
**send_copy** | **bool** | If set to true, a copy of the email will be sent to the &#x60;cc_email&#x60; specified by &#x60;Get email data&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
