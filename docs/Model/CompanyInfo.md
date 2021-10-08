# # CompanyInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Company unique identifier. | [optional]
**name** | **string** | Company name. | [optional]
**email** | **string** | Company email. | [optional]
**type** | **string** | Company type. | [optional]
**fic** | **bool** | Determine if the company has a FIC account. | [optional]
**fic_plan_name** | **string** | Company FIC account plan. | [optional]
**fic_license_type** | **string** | Company FIC account plan. | [optional]
**fic_payment_subject** | **string** | Company FIC account payment subject. | [optional]
**fic_license_expire** | [**\DateTime**](\DateTime.md) | Company FIC license expiration date. | [optional]
**fic_signup_date** | **string** | FIC account sign up date. | [optional]
**use_fic** | **bool** | Determine if the FIC account is actually used. If type&#x3D;\&quot;company\&quot; this is always true; if type&#x3D;\&quot;accountant\&quot; it can be true or false. If false, it means that the accountant uses FIC only to control other companies and not to control itself. | [optional]
**fic_need_setup** | **bool** | Indicate that the initial setup for FIC is required. | [optional]
**dic** | **bool** | Determine if the company has a DIC account. | [optional]
**dic_plan** | **string** | Company DIC account plan. | [optional]
**dic_license_expire** | [**\DateTime**](\DateTime.md) | Company FIC license expiration date. | [optional]
**use_dic** | **bool** | Determine if the DIC account is actually used. If type&#x3D;“company” this is always true; if type&#x3D;“accountant” it can be true or false. If false, it means that the accountant uses DIC only to control other companies and not to control itself. | [optional]
**dic_need_setup** | **bool** | Indicate that the initial setup for DIC is required. | [optional]
**access_info** | [**\FattureInCloud\Model\CompanyInfoAccessInfo**](CompanyInfoAccessInfo.md) |  | [optional]
**plan_info** | [**\FattureInCloud\Model\CompanyInfoPlanInfo**](CompanyInfoPlanInfo.md) |  | [optional]
**can_use_coupon** | **bool** | Determine if a coupon can be used. | [optional]
**accountant_id** | **int** | Accountant unique identifier. | [optional]
**dic_license_type** | **string** | Company DIC account license type. | [optional]
**dic_payment_subject** | **string** | Company DIC account payment subject. | [optional]
**dic_plan_name** | **string** | Company DIC account plan name. | [optional]
**dic_signup_date** | **string** | DIC account sign up date. | [optional]
**is_accountant** | **bool** | Determine if the logged account is an accountant. | [optional]
**registration_service** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
