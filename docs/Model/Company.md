# # Company

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Company id | [optional]
**name** | **string** | Company name | [optional]
**type** | [**\FattureInCloud\Model\CompanyType**](CompanyType.md) |  | [optional]
**access_token** | **string** | Company authentication token for this company. [Only if type&#x3D;company] | [optional]
**controlled_companies** | [**\FattureInCloud\Model\ControlledCompany[]**](ControlledCompany.md) | Company list of controlled companies [Only if type&#x3D;accountant] | [optional]
**fic_license_expire** | **\DateTime** |  | [optional]
**fic_plan** | [**\FattureInCloud\Model\FattureInCloudPlanType**](FattureInCloudPlanType.md) |  | [optional]
**connection_id** | **int** | Company connection id | [optional]
**tax_code** | **string** | Company tax code | [optional]
**vat_number** | **string** | Company vat number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
