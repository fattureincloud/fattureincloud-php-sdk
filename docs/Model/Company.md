# # Company

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Company unique identifier. | [optional]
**name** | **string** | Company name. | [optional]
**type** | **string** | Company type. | [optional]
**access_token** | **string** | CompanyAuthentication token for this company. [Only if type&#x3D;company] | [optional]
**permissions** | [**\FattureInCloud\Model\Permissions**](Permissions.md) |  | [optional]
**controlled_companies** | [**\FattureInCloud\Model\Company[]**](Company.md) | List of controlled companies. [Only if type&#x3D;accountant] | [optional]
**connection_id** | **float** | Company connection id. | [optional]
**dic** | **bool** | Determine if the company has a DIC account. | [optional]
**fic** | **bool** | Determine if the company has a FIC account. | [optional]
**fic_license_expire** | [**\DateTime**](\DateTime.md) | Company FIC license expiration date. | [optional]
**fic_plan** | **string** | Company FIC account plan. | [optional]
**tax_code** | **string** | Tax code. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
