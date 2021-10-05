# # ArchiveDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Archive document unique identifier. | [optional]
**date** | [**\DateTime**](\DateTime.md) | Archive document date. |
**description** | **string** | Archive Document description. |
**attachment_url** | **string** | [Read Only] Absolute url of the attached file. Authomatically set if a valid attachment token is passed via POST /archive or PUT /archive/{documentId}. | [optional] [readonly]
**category** | **string** | Archive document category. |
**attachment_token** | **string** | [Write Only]  [Required] Attachment token returned by POST /archive/attachment. Used to attach the file already uploaded. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
