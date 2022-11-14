# # Entity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | [optional]
**code** | **string** | Code. | [optional]
**name** | **string** | Name | [optional]
**type** | [**\FattureInCloud\Model\EntityType**](EntityType.md) |  | [optional]
**first_name** | **string** | First name. | [optional]
**last_name** | **string** | Last name. | [optional]
**contact_person** | **string** |  | [optional]
**vat_number** | **string** | Vat number | [optional]
**tax_code** | **string** | Tax code. | [optional]
**address_street** | **string** | Street address. | [optional]
**address_postal_code** | **string** | Postal code. | [optional]
**address_city** | **string** | City. | [optional]
**address_province** | **string** | Province. | [optional]
**address_extra** | **string** | Address extra info. | [optional]
**country** | **string** | Country | [optional]
**country_iso** | **string** | Country Iso | [optional]
**email** | **string** | Email. | [optional]
**certified_email** | **string** | Certified email. | [optional]
**phone** | **string** | Phone. | [optional]
**fax** | **string** | Fax. | [optional]
**notes** | **string** | Extra notes. | [optional]
**default_vat** | [**\FattureInCloud\Model\VatType**](VatType.md) |  | [optional]
**default_payment_terms** | **int** | [Only for client] Default payment terms. | [optional]
**default_payment_terms_type** | [**\FattureInCloud\Model\PaymentTermsType**](PaymentTermsType.md) |  | [optional]
**default_payment_method** | [**\FattureInCloud\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**bank_name** | **string** | [Only for client] Bank name. | [optional]
**bank_iban** | **string** | [Only for client] Iban. | [optional]
**bank_swift_code** | **string** | [Only for client] Bank swift code. | [optional]
**shipping_address** | **string** | [Only for client] Shipping address. | [optional]
**e_invoice** | **bool** | [Only for client] Use e-invoices. | [optional]
**ei_code** | **string** | [Only for client] E-invoices code. | [optional]
**has_intent_declaration** | **bool** | [Only for client] Has intent declaration. | [optional]
**intent_declaration_protocol_number** | **string** | [Only for client] Intent declaration protocol number. | [optional]
**intent_declaration_protocol_date** | **\DateTime** | [Only for client] Intent declaration protocol date. | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
