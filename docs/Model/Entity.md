# # Entity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | [optional]
**code** | **string** | Supplier code. | [optional]
**name** | **string** | Supplier name. |
**type** | **string** | Supplier type. | [optional]
**first_name** | **string** | Supplier first name. | [optional]
**last_name** | **string** | Supplier last name. | [optional]
**contact_person** | **string** |  | [optional]
**vat_number** | **string** | Supplier vat number. | [optional]
**tax_code** | **string** | Supplier tax code. | [optional]
**address_street** | **string** | Supplier street address. | [optional]
**address_postal_code** | **string** | Supplier postal code. | [optional]
**address_city** | **string** | Supplier city. | [optional]
**address_province** | **string** | Supplier province. | [optional]
**address_extra** | **string** | Supplier address extra info. | [optional]
**country** | **string** | Supplier country. | [optional] [default to 'Italia']
**email** | **string** | Supplier email. | [optional]
**certified_email** | **string** | Supplier certified email. | [optional]
**phone** | **string** | Supplier phone. | [optional]
**fax** | **string** | Supplier fax. | [optional]
**notes** | **string** | Supplier extra notes. | [optional]
**default_vat** | [**\FattureInCloud\Model\VatType**](VatType.md) |  | [optional]
**default_payment_terms** | **int** |  | [optional]
**default_payment_terms_type** | **string** |  | [optional] [default to 'standard']
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
