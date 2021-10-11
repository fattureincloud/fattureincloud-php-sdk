# # Client

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | [optional]
**code** | **string** | Client code. | [optional]
**name** | **string** | Client name |
**type** | **string** | Client type | [optional]
**first_name** | **string** | Client first name. | [optional]
**last_name** | **string** | Client last name. | [optional]
**contact_person** | **string** |  | [optional]
**vat_number** | **string** | Client vat number | [optional]
**tax_code** | **string** | Client tax code. | [optional]
**address_street** | **string** | Client street address. | [optional]
**address_postal_code** | **string** | Client postal code. | [optional]
**address_city** | **string** | Client city. | [optional]
**address_province** | **string** | Client province. | [optional]
**address_extra** | **string** | Client address extra info. | [optional]
**country** | **string** | Client country | [optional] [default to 'Italia']
**email** | **string** | Client email. | [optional]
**certified_email** | **string** | Client certified email. | [optional]
**phone** | **string** | Client phone. | [optional]
**fax** | **string** | Client fax. | [optional]
**notes** | **string** | Extra notes. | [optional]
**default_vat** | [**\FattureInCloud\Model\VatType**](VatType.md) |  | [optional]
**default_payment_terms** | **int** |  | [optional]
**default_payment_terms_type** | **string** |  | [optional] [default to DEFAULT_PAYMENT_TERMS_TYPE_STANDARD]
**default_payment_method** | [**\FattureInCloud\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**bank_name** | **string** | Client bank name. | [optional]
**bank_iban** | **string** | Client iban. | [optional]
**bank_swift_code** | **string** | Client bank swift code. | [optional]
**shipping_address** | **string** | Client shipping address. | [optional]
**e_invoice** | **bool** | Use e-invoices for this entity | [optional] [default to false]
**ei_code** | **string** | E-invoice code | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)