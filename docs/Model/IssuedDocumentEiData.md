# # IssuedDocumentEiData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vat_kind** | [**\FattureInCloud\Model\VatKind**](VatKind.md) |  | [optional]
**original_document_type** | [**\FattureInCloud\Model\OriginalDocumentType**](OriginalDocumentType.md) |  | [optional]
**od_number** | **string** | E-invoice original document number | [optional]
**od_date** | **\DateTime** | E-invoice original document date | [optional]
**cig** | **string** | E-invoice CIG | [optional]
**cup** | **string** | E-invoice CUP | [optional]
**payment_method** | **string** | E-invoice payment method [required for e-invoices] (see [here](https://www.fatturapa.gov.it/export/documenti/fatturapa/v1.2.2/Rappresentazione_Tabellare_FattOrdinaria_V1.2.2.pdf) for the accepted values of ModalitaPagamento) | [optional]
**bank_name** | **string** | E-invoice bank name | [optional]
**bank_iban** | **string** | E-invoice bank IBAN | [optional]
**bank_beneficiary** | **string** | E-invoice bank beneficiary | [optional]
**invoice_number** | **string** | E-invoice invoice number | [optional]
**invoice_date** | **\DateTime** | E-invoice invoice date | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
