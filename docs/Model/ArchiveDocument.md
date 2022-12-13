# # ArchiveDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Archive document unique identifier. | [optional]
**date** | **\DateTime** | Archive document date. | [optional]
**description** | **string** | Archive Document description. | [optional]
**attachment_url** | **string** | [Temporary] [Read Only] Absolute url of the attached file. Authomatically set if a valid attachment token is passed via POST /archive or PUT /archive/{documentId}. | [optional] [readonly]
**category** | **string** | Archive document category. | [optional]
**attachment_token** | **string** | [Write Only]  [Required] Attachment token returned by POST /archive/attachment. Used to attach the file already uploaded. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
