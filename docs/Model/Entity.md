# # Entity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Entity id | [optional]
**code** | **string** | Entity code | [optional]
**name** | **string** | Entity name | [optional]
**type** | [**\FattureInCloud\Model\EntityType**](EntityType.md) |  | [optional]
**first_name** | **string** | Entity first name | [optional]
**last_name** | **string** | Entity last name | [optional]
**contact_person** | **string** | Entity contact person | [optional]
**vat_number** | **string** | Entity vat number | [optional]
**tax_code** | **string** | Entity tax code | [optional]
**address_street** | **string** | Entitity address street | [optional]
**address_postal_code** | **string** | Entity address postal code | [optional]
**address_city** | **string** | Entity address city | [optional]
**address_province** | **string** | Entity address province | [optional]
**address_extra** | **string** | Entity address extra info | [optional]
**country** | **string** | Entity country | [optional]
**country_iso** | **string** | Entity country iso code | [optional]
**email** | **string** | Entity email | [optional]
**certified_email** | **string** | Entity certified email | [optional]
**phone** | **string** | Entity phone | [optional]
**fax** | **string** | Entity fax | [optional]
**notes** | **string** | Entity extra | [optional]
**default_payment_terms** | **int** | [Only for client] Client default payment terms | [optional]
**default_vat** | [**\FattureInCloud\Model\VatType**](VatType.md) |  | [optional]
**default_payment_terms_type** | [**\FattureInCloud\Model\PaymentTermsType**](PaymentTermsType.md) |  | [optional]
**default_payment_method** | [**\FattureInCloud\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**bank_name** | **string** | [Only for client] Client bank name | [optional]
**bank_iban** | **string** | [Only for client] Client bank iban | [optional]
**bank_swift_code** | **string** | [Only for client] Client bank swift code | [optional]
**shipping_address** | **string** | [Only for client] Client Shipping address | [optional]
**e_invoice** | **bool** | [Only for client] Use e-invoices. | [optional]
**ei_code** | **string** | [Only for client] E-invoices code. | [optional]
**has_intent_declaration** | **bool** | [Only for client] Has intent declaration. | [optional]
**intent_declaration_protocol_number** | **string** | [Only for client] Client intent declaration protocol number | [optional]
**intent_declaration_protocol_date** | **\DateTime** | [Only for client] Client intent declaration protocol date | [optional]
**created_at** | **string** | Entity creation date | [optional]
**updated_at** | **string** | Entity last update date | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
