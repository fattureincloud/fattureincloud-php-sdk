# # Company

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Company unique identifier. | [optional]
**name** | **string** | Company name. | [optional]
**type** | [**\FattureInCloud\Model\CompanyType**](CompanyType.md) |  | [optional]
**access_token** | **string** | CompanyAuthentication token for this company. [Only if type&#x3D;company] | [optional]
**controlled_companies** | [**\FattureInCloud\Model\Company[]**](Company.md) | List of controlled companies. [Only if type&#x3D;accountant] | [optional]
**connection_id** | **float** | Company connection id. | [optional]
**tax_code** | **string** | Tax code. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
