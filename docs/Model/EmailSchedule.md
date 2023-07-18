# # EmailSchedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_id** | **int** | Email sender id [required if **sender_email** is not specified] | [optional]
**sender_email** | **string** | Email sender address [required if **sender_id** is not specified] | [optional]
**recipient_email** | **string** | Email recipient emails [comma separated] | [optional]
**subject** | **string** | Email subject | [optional]
**body** | **string** | Email body [HTML Escaped] [max size 50KiB] | [optional]
**include** | [**\FattureInCloud\Model\EmailScheduleInclude**](EmailScheduleInclude.md) |  | [optional]
**attach_pdf** | **bool** | Attach the pdf of the document | [optional]
**send_copy** | **bool** | Send a copy of the email to the **cc_email** specified by **Get email data** | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
