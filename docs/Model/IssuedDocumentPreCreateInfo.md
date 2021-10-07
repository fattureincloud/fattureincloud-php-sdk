# # IssuedDocumentPreCreateInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**numerations** | **object** | Next numbers by year and numeration name (for the given document type). | [optional]
**dn_numerations** | **object** | Next numbers by year and numeration name (for delivery_notes). | [optional]
**default_values** | [**\FattureInCloud\Model\IssuedDocumentPreCreateInfoDefaultValues**](IssuedDocumentPreCreateInfoDefaultValues.md) |  | [optional]
**extra_data_default_values** | [**\FattureInCloud\Model\IssuedDocumentPreCreateInfoExtraDataDefaultValues**](IssuedDocumentPreCreateInfoExtraDataDefaultValues.md) |  | [optional]
**items_default_values** | [**\FattureInCloud\Model\IssuedDocumentPreCreateInfoItemsDefaultValues**](IssuedDocumentPreCreateInfoItemsDefaultValues.md) |  | [optional]
**countries_list** | **string[]** | Countries list. | [optional]
**currencies_list** | [**\FattureInCloud\Model\Currency[]**](Currency.md) | Currencies list. | [optional]
**templates_list** | [**\FattureInCloud\Model\DocumentTemplate[]**](DocumentTemplate.md) | Document templates list. | [optional]
**dn_templates_list** | [**\FattureInCloud\Model\DocumentTemplate[]**](DocumentTemplate.md) | Delivery note templates list. | [optional]
**ai_templates_list** | [**\FattureInCloud\Model\DocumentTemplate[]**](DocumentTemplate.md) | Accompanying invoice templates list. | [optional]
**payment_methods_list** | [**\FattureInCloud\Model\PaymentMethod[]**](PaymentMethod.md) | Payment methods list. | [optional]
**payment_accounts_list** | [**\FattureInCloud\Model\PaymentAccount[]**](PaymentAccount.md) | Payment accounts list. | [optional]
**vat_types_list** | [**\FattureInCloud\Model\VatType[]**](VatType.md) | Vat types list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
