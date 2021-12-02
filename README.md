# FattureInCloud PHP SDK

Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 400.000 businesses in Italy. 

The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.

For more information, please visit [https://www.fattureincloud.it](https://www.fattureincloud.it).

## Installation & Usage

### Requirements

PHP 7.1 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), run the following command:

```sh
$ composer require fattureincloud/fattureincloud-php-sdk
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/FattureInCloud PHP SDK/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth2AuthenticationCodeFlow
$config = FattureInCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FattureInCloud\Api\ArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 12345; // int | The ID of the company.
$create_archive_document_request = {"data":{"date":"2021-08-20","category":"Altri documenti","description":"spesa 1","attachment_token":"ibfjdbf94ey9w94g3w894qbasrga"}}; // \FattureInCloud\Model\CreateArchiveDocumentRequest | The Archive Document.

try {
    $result = $apiInstance->createArchiveDocument($company_id, $create_archive_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveApi->createArchiveDocument: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-v2.fattureincloud.it*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ArchiveApi* | [**createArchiveDocument**](docs/Api/ArchiveApi.md#createarchivedocument) | **POST** /c/{company_id}/archive | Create Archive Document
*ArchiveApi* | [**deleteArchiveDocument**](docs/Api/ArchiveApi.md#deletearchivedocument) | **DELETE** /c/{company_id}/archive/{document_id} | Delete Archive Document
*ArchiveApi* | [**getArchiveDocument**](docs/Api/ArchiveApi.md#getarchivedocument) | **GET** /c/{company_id}/archive/{document_id} | Get Archive Document
*ArchiveApi* | [**listArchiveDocuments**](docs/Api/ArchiveApi.md#listarchivedocuments) | **GET** /c/{company_id}/archive | List Archive Documents
*ArchiveApi* | [**modifyArchiveDocument**](docs/Api/ArchiveApi.md#modifyarchivedocument) | **PUT** /c/{company_id}/archive/{document_id} | Modify Archive Document
*ArchiveApi* | [**uploadArchiveDocumentAttachment**](docs/Api/ArchiveApi.md#uploadarchivedocumentattachment) | **POST** /c/{company_id}/archive/attachment | Upload Archive Document Attachment
*CashbookApi* | [**createCashbookEntry**](docs/Api/CashbookApi.md#createcashbookentry) | **POST** /c/{company_id}/cashbook | Create Cashbook Entry
*CashbookApi* | [**deleteCashbookEntry**](docs/Api/CashbookApi.md#deletecashbookentry) | **DELETE** /c/{company_id}/cashbook/{document_id} | Delete Cashbook Entry
*CashbookApi* | [**getCashbookEntry**](docs/Api/CashbookApi.md#getcashbookentry) | **GET** /c/{company_id}/cashbook/{document_id} | Get Cashbook Entry
*CashbookApi* | [**listCashbookEntries**](docs/Api/CashbookApi.md#listcashbookentries) | **GET** /c/{company_id}/cashbook | List Cashbook Entries
*CashbookApi* | [**modifyCashbookEntry**](docs/Api/CashbookApi.md#modifycashbookentry) | **PUT** /c/{company_id}/cashbook/{document_id} | Modify Cashbook Entry
*ClientsApi* | [**createClient**](docs/Api/ClientsApi.md#createclient) | **POST** /c/{company_id}/entities/clients | Create Client
*ClientsApi* | [**deleteClient**](docs/Api/ClientsApi.md#deleteclient) | **DELETE** /c/{company_id}/entities/clients/{client_id} | Delete Client
*ClientsApi* | [**getClient**](docs/Api/ClientsApi.md#getclient) | **GET** /c/{company_id}/entities/clients/{client_id} | Get Client
*ClientsApi* | [**listClients**](docs/Api/ClientsApi.md#listclients) | **GET** /c/{company_id}/entities/clients | List Clients
*ClientsApi* | [**modifyClient**](docs/Api/ClientsApi.md#modifyclient) | **PUT** /c/{company_id}/entities/clients/{client_id} | Modify Client
*CompaniesApi* | [**getCompanyInfo**](docs/Api/CompaniesApi.md#getcompanyinfo) | **GET** /c/{company_id}/company/info | Get Company Info
*InfoApi* | [**listArchiveCategories**](docs/Api/InfoApi.md#listarchivecategories) | **GET** /c/{company_id}/info/archive_categories | List Archive Categories
*InfoApi* | [**listCities**](docs/Api/InfoApi.md#listcities) | **GET** /info/cities | List Cities
*InfoApi* | [**listCostCenters**](docs/Api/InfoApi.md#listcostcenters) | **GET** /c/{company_id}/info/cost_centers | List Cost Centers
*InfoApi* | [**listCountries**](docs/Api/InfoApi.md#listcountries) | **GET** /info/countries | List Countries
*InfoApi* | [**listCurrencies**](docs/Api/InfoApi.md#listcurrencies) | **GET** /info/currencies | List Currencies
*InfoApi* | [**listDeliveryNotesDefaultCausals**](docs/Api/InfoApi.md#listdeliverynotesdefaultcausals) | **GET** /info/dn_causals | List Delivery Notes Default Causals
*InfoApi* | [**listLanguages**](docs/Api/InfoApi.md#listlanguages) | **GET** /info/languages | List Languages
*InfoApi* | [**listPaymentAccounts**](docs/Api/InfoApi.md#listpaymentaccounts) | **GET** /c/{company_id}/info/payment_accounts | List Payment Accounts
*InfoApi* | [**listPaymentMethods**](docs/Api/InfoApi.md#listpaymentmethods) | **GET** /c/{company_id}/info/payment_methods | List Payment Methods
*InfoApi* | [**listProductCategories**](docs/Api/InfoApi.md#listproductcategories) | **GET** /c/{company_id}/info/product_categories | List Product Categories
*InfoApi* | [**listReceivedDocumentCategories**](docs/Api/InfoApi.md#listreceiveddocumentcategories) | **GET** /c/{company_id}/info/received_document_categories | List Received Document Categories
*InfoApi* | [**listRevenueCenters**](docs/Api/InfoApi.md#listrevenuecenters) | **GET** /c/{company_id}/info/revenue_centers | List Revenue Centers
*InfoApi* | [**listTemplates**](docs/Api/InfoApi.md#listtemplates) | **GET** /info/templates | List Templates
*InfoApi* | [**listUnitsOfMeasure**](docs/Api/InfoApi.md#listunitsofmeasure) | **GET** /info/measures | List Units of Measure
*InfoApi* | [**listVatTypes**](docs/Api/InfoApi.md#listvattypes) | **GET** /c/{company_id}/info/vat_types | List Vat Types
*IssuedDocumentsApi* | [**createIssuedDocument**](docs/Api/IssuedDocumentsApi.md#createissueddocument) | **POST** /c/{company_id}/issued_documents | Create Issued Document
*IssuedDocumentsApi* | [**deleteIssuedDocument**](docs/Api/IssuedDocumentsApi.md#deleteissueddocument) | **DELETE** /c/{company_id}/issued_documents/{document_id} | Delete Issued Document
*IssuedDocumentsApi* | [**deleteIssuedDocumentAttachment**](docs/Api/IssuedDocumentsApi.md#deleteissueddocumentattachment) | **DELETE** /c/{company_id}/issued_documents/{document_id}/attachment | Delete Issued Document Attachment
*IssuedDocumentsApi* | [**getEmailData**](docs/Api/IssuedDocumentsApi.md#getemaildata) | **GET** /c/{company_id}/issued_documents/{document_id}/email | Get Email Data
*IssuedDocumentsApi* | [**getExistingIssuedDocumentTotals**](docs/Api/IssuedDocumentsApi.md#getexistingissueddocumenttotals) | **POST** /c/{company_id}/issued_documents/{document_id}/totals | Get Existing Issued Document Totals
*IssuedDocumentsApi* | [**getIssuedDocument**](docs/Api/IssuedDocumentsApi.md#getissueddocument) | **GET** /c/{company_id}/issued_documents/{document_id} | Get Issued Document
*IssuedDocumentsApi* | [**getIssuedDocumentPreCreateInfo**](docs/Api/IssuedDocumentsApi.md#getissueddocumentprecreateinfo) | **GET** /c/{company_id}/issued_documents/info | Get Issued Document Pre-create info
*IssuedDocumentsApi* | [**getNewIssuedDocumentTotals**](docs/Api/IssuedDocumentsApi.md#getnewissueddocumenttotals) | **POST** /c/{company_id}/issued_documents/totals | Get New Issued Document Totals
*IssuedDocumentsApi* | [**listIssuedDocuments**](docs/Api/IssuedDocumentsApi.md#listissueddocuments) | **GET** /c/{company_id}/issued_documents | List Issued Documents
*IssuedDocumentsApi* | [**modifyIssuedDocument**](docs/Api/IssuedDocumentsApi.md#modifyissueddocument) | **PUT** /c/{company_id}/issued_documents/{document_id} | Modify Issued Document
*IssuedDocumentsApi* | [**scheduleEmail**](docs/Api/IssuedDocumentsApi.md#scheduleemail) | **POST** /c/{company_id}/issued_documents/{document_id}/email | Schedule Email
*IssuedDocumentsApi* | [**uploadIssuedDocumentAttachment**](docs/Api/IssuedDocumentsApi.md#uploadissueddocumentattachment) | **POST** /c/{company_id}/issued_documents/attachment | Upload Issued Document Attachment
*IssuedEInvoicesApi* | [**sendEInvoice**](docs/Api/IssuedEInvoicesApi.md#sendeinvoice) | **POST** /c/{company_id}/issued_documents/{document_id}/e_invoice/send | Send the e-invoice
*IssuedEInvoicesApi* | [**verifyEInvoiceXml**](docs/Api/IssuedEInvoicesApi.md#verifyeinvoicexml) | **GET** /c/{company_id}/issued_documents/{document_id}/e_invoice/xml_verify | Verify e-invoice xml
*ProductsApi* | [**createProduct**](docs/Api/ProductsApi.md#createproduct) | **POST** /c/{company_id}/products | Create Product
*ProductsApi* | [**deleteProduct**](docs/Api/ProductsApi.md#deleteproduct) | **DELETE** /c/{company_id}/products/{product_id} | Delete Product
*ProductsApi* | [**getProduct**](docs/Api/ProductsApi.md#getproduct) | **GET** /c/{company_id}/products/{product_id} | Get Product
*ProductsApi* | [**listProducts**](docs/Api/ProductsApi.md#listproducts) | **GET** /c/{company_id}/products | List Products
*ProductsApi* | [**modifyProduct**](docs/Api/ProductsApi.md#modifyproduct) | **PUT** /c/{company_id}/products/{product_id} | Modify Product
*ReceiptsApi* | [**createReceipt**](docs/Api/ReceiptsApi.md#createreceipt) | **POST** /c/{company_id}/receipts | Create Receipt
*ReceiptsApi* | [**deleteReceipt**](docs/Api/ReceiptsApi.md#deletereceipt) | **DELETE** /c/{company_id}/receipts/{document_id} | Delete Receipt
*ReceiptsApi* | [**getReceipt**](docs/Api/ReceiptsApi.md#getreceipt) | **GET** /c/{company_id}/receipts/{document_id} | Get Receipt
*ReceiptsApi* | [**getReceiptPreCreateInfo**](docs/Api/ReceiptsApi.md#getreceiptprecreateinfo) | **GET** /c/{company_id}/receipts/info | Get Receipt Pre-Create Info
*ReceiptsApi* | [**getReceiptsMonthlyTotals**](docs/Api/ReceiptsApi.md#getreceiptsmonthlytotals) | **GET** /c/{company_id}/receipts/monthly_totals | Get Receipts Monthly Totals
*ReceiptsApi* | [**listReceipts**](docs/Api/ReceiptsApi.md#listreceipts) | **GET** /c/{company_id}/receipts | List Receipts
*ReceiptsApi* | [**modifyReceipt**](docs/Api/ReceiptsApi.md#modifyreceipt) | **PUT** /c/{company_id}/receipts/{document_id} | Modify Receipt
*ReceivedDocumentsApi* | [**createReceivedDocument**](docs/Api/ReceivedDocumentsApi.md#createreceiveddocument) | **POST** /c/{company_id}/received_documents | Create Received Document
*ReceivedDocumentsApi* | [**deleteReceivedDocument**](docs/Api/ReceivedDocumentsApi.md#deletereceiveddocument) | **DELETE** /c/{company_id}/received_documents/{document_id} | Delete Received Document
*ReceivedDocumentsApi* | [**deleteReceivedDocumentAttachment**](docs/Api/ReceivedDocumentsApi.md#deletereceiveddocumentattachment) | **DELETE** /c/{company_id}/received_documents/{document_id}/attachment | Delete Received Document Attachment
*ReceivedDocumentsApi* | [**getExistingReceivedDocumentTotals**](docs/Api/ReceivedDocumentsApi.md#getexistingreceiveddocumenttotals) | **POST** /c/{company_id}/received_documents/{document_id}/totals | Get Existing Received Document Totals
*ReceivedDocumentsApi* | [**getNewReceivedDocumentTotals**](docs/Api/ReceivedDocumentsApi.md#getnewreceiveddocumenttotals) | **POST** /c/{company_id}/received_documents/totals | Get New Received Document Totals
*ReceivedDocumentsApi* | [**getReceivedDocument**](docs/Api/ReceivedDocumentsApi.md#getreceiveddocument) | **GET** /c/{company_id}/received_documents/{document_id} | Get Received Document
*ReceivedDocumentsApi* | [**getReceivedDocumentPreCreateInfo**](docs/Api/ReceivedDocumentsApi.md#getreceiveddocumentprecreateinfo) | **GET** /c/{company_id}/received_documents/info | Get Received Document Pre-Create Info
*ReceivedDocumentsApi* | [**listReceivedDocuments**](docs/Api/ReceivedDocumentsApi.md#listreceiveddocuments) | **GET** /c/{company_id}/received_documents | List Received Documents
*ReceivedDocumentsApi* | [**modifyReceivedDocument**](docs/Api/ReceivedDocumentsApi.md#modifyreceiveddocument) | **PUT** /c/{company_id}/received_documents/{document_id} | Modify Received Document
*ReceivedDocumentsApi* | [**uploadReceivedDocumentAttachment**](docs/Api/ReceivedDocumentsApi.md#uploadreceiveddocumentattachment) | **POST** /c/{company_id}/received_documents/attachment | Upload Received Document Attachment
*SettingsApi* | [**createPaymentAccount**](docs/Api/SettingsApi.md#createpaymentaccount) | **POST** /c/{companyId}/settings/payment_accounts | Create Payment Account
*SettingsApi* | [**createPaymentMethod**](docs/Api/SettingsApi.md#createpaymentmethod) | **POST** /c/{companyId}/settings/payment_methods | Create Payment Method
*SettingsApi* | [**deletePaymentAccount**](docs/Api/SettingsApi.md#deletepaymentaccount) | **DELETE** /c/{companyId}/settings/payment_accounts/{paymentAccountId} | Delete Payment Account
*SettingsApi* | [**deletePaymentMethod**](docs/Api/SettingsApi.md#deletepaymentmethod) | **DELETE** /c/{companyId}/settings/payment_method/{paymentMethodId} | Delete Payment Method
*SettingsApi* | [**getPaymentAccount**](docs/Api/SettingsApi.md#getpaymentaccount) | **GET** /c/{companyId}/settings/payment_accounts/{paymentAccountId} | Get Payment Account
*SettingsApi* | [**getPaymentMethod**](docs/Api/SettingsApi.md#getpaymentmethod) | **GET** /c/{companyId}/settings/payment_method/{paymentMethodId} | Get Payment Method
*SettingsApi* | [**modifyPaymentAccount**](docs/Api/SettingsApi.md#modifypaymentaccount) | **PUT** /c/{companyId}/settings/payment_accounts/{paymentAccountId} | Modify Payment Account
*SettingsApi* | [**modifyPaymentMethod**](docs/Api/SettingsApi.md#modifypaymentmethod) | **PUT** /c/{companyId}/settings/payment_method/{paymentMethodId} | Modify Payment Method
*SuppliersApi* | [**createSupplier**](docs/Api/SuppliersApi.md#createsupplier) | **POST** /c/{company_id}/entities/suppliers | Create Supplier
*SuppliersApi* | [**deleteSupplier**](docs/Api/SuppliersApi.md#deletesupplier) | **DELETE** /c/{company_id}/entities/suppliers/{supplier_id} | Delete Supplier
*SuppliersApi* | [**getSupplier**](docs/Api/SuppliersApi.md#getsupplier) | **GET** /c/{company_id}/entities/suppliers/{supplier_id} | Get Supplier
*SuppliersApi* | [**listSuppliers**](docs/Api/SuppliersApi.md#listsuppliers) | **GET** /c/{company_id}/entities/suppliers | List Suppliers
*SuppliersApi* | [**modifySupplier**](docs/Api/SuppliersApi.md#modifysupplier) | **PUT** /c/{company_id}/entities/suppliers/{supplier_id} | Modify Supplier
*TaxesApi* | [**createF24**](docs/Api/TaxesApi.md#createf24) | **POST** /c/{company_id}/taxes | Create F24
*TaxesApi* | [**deleteF24**](docs/Api/TaxesApi.md#deletef24) | **DELETE** /c/{company_id}/taxes/{document_id} | Delete F24
*TaxesApi* | [**deleteF24Attachment**](docs/Api/TaxesApi.md#deletef24attachment) | **DELETE** /c/{company_id}/taxes/{document_id}/attachment | Delete F24 Attachment
*TaxesApi* | [**getF24**](docs/Api/TaxesApi.md#getf24) | **GET** /c/{company_id}/taxes/{document_id} | Get F24
*TaxesApi* | [**listF24**](docs/Api/TaxesApi.md#listf24) | **GET** /c/{company_id}/taxes | List F24
*TaxesApi* | [**modifyF24**](docs/Api/TaxesApi.md#modifyf24) | **PUT** /c/{company_id}/taxes/{document_id} | Modify F24
*TaxesApi* | [**uploadF24Attachment**](docs/Api/TaxesApi.md#uploadf24attachment) | **POST** /c/{company_id}/taxes/attachment | Upload F24 Attachment
*UserApi* | [**getUserInfo**](docs/Api/UserApi.md#getuserinfo) | **GET** /user/info | Get User Info
*UserApi* | [**listUserCompanies**](docs/Api/UserApi.md#listusercompanies) | **GET** /user/companies | List User Companies

## Models

- [ArchiveDocument](docs/Model/ArchiveDocument.md)
- [CashbookEntry](docs/Model/CashbookEntry.md)
- [CashbookEntryData](docs/Model/CashbookEntryData.md)
- [CashbookEntryDataDocument](docs/Model/CashbookEntryDataDocument.md)
- [CashbookEntryIn](docs/Model/CashbookEntryIn.md)
- [CashbookEntryInData](docs/Model/CashbookEntryInData.md)
- [CashbookEntryInOut](docs/Model/CashbookEntryInOut.md)
- [CashbookEntryKind](docs/Model/CashbookEntryKind.md)
- [CashbookEntryOut](docs/Model/CashbookEntryOut.md)
- [CashbookEntryOutData](docs/Model/CashbookEntryOutData.md)
- [CashbookEntryType](docs/Model/CashbookEntryType.md)
- [City](docs/Model/City.md)
- [Client](docs/Model/Client.md)
- [ClientType](docs/Model/ClientType.md)
- [Company](docs/Model/Company.md)
- [CompanyInfo](docs/Model/CompanyInfo.md)
- [CompanyInfoAccessInfo](docs/Model/CompanyInfoAccessInfo.md)
- [CompanyInfoPlanInfo](docs/Model/CompanyInfoPlanInfo.md)
- [CompanyInfoPlanInfoFunctions](docs/Model/CompanyInfoPlanInfoFunctions.md)
- [CompanyInfoPlanInfoFunctionsStatus](docs/Model/CompanyInfoPlanInfoFunctionsStatus.md)
- [CompanyInfoPlanInfoLimits](docs/Model/CompanyInfoPlanInfoLimits.md)
- [CompanyType](docs/Model/CompanyType.md)
- [CreateArchiveDocumentRequest](docs/Model/CreateArchiveDocumentRequest.md)
- [CreateArchiveDocumentResponse](docs/Model/CreateArchiveDocumentResponse.md)
- [CreateCashbookEntryRequest](docs/Model/CreateCashbookEntryRequest.md)
- [CreateCashbookEntryResponse](docs/Model/CreateCashbookEntryResponse.md)
- [CreateClientRequest](docs/Model/CreateClientRequest.md)
- [CreateClientResponse](docs/Model/CreateClientResponse.md)
- [CreateF24Request](docs/Model/CreateF24Request.md)
- [CreateF24Response](docs/Model/CreateF24Response.md)
- [CreateIssuedDocumentRequest](docs/Model/CreateIssuedDocumentRequest.md)
- [CreateIssuedDocumentResponse](docs/Model/CreateIssuedDocumentResponse.md)
- [CreatePaymentAccountRequest](docs/Model/CreatePaymentAccountRequest.md)
- [CreatePaymentAccountResponse](docs/Model/CreatePaymentAccountResponse.md)
- [CreatePaymentMethodRequest](docs/Model/CreatePaymentMethodRequest.md)
- [CreatePaymentMethodResponse](docs/Model/CreatePaymentMethodResponse.md)
- [CreateProductRequest](docs/Model/CreateProductRequest.md)
- [CreateProductResponse](docs/Model/CreateProductResponse.md)
- [CreateReceiptRequest](docs/Model/CreateReceiptRequest.md)
- [CreateReceiptResponse](docs/Model/CreateReceiptResponse.md)
- [CreateReceivedDocumentRequest](docs/Model/CreateReceivedDocumentRequest.md)
- [CreateReceivedDocumentResponse](docs/Model/CreateReceivedDocumentResponse.md)
- [CreateSupplierRequest](docs/Model/CreateSupplierRequest.md)
- [CreateSupplierResponse](docs/Model/CreateSupplierResponse.md)
- [Currency](docs/Model/Currency.md)
- [DefaultPaymentTermsType](docs/Model/DefaultPaymentTermsType.md)
- [DocumentTemplate](docs/Model/DocumentTemplate.md)
- [EmailData](docs/Model/EmailData.md)
- [EmailDataDefaultSenderEmail](docs/Model/EmailDataDefaultSenderEmail.md)
- [EmailDataSenderEmailsList](docs/Model/EmailDataSenderEmailsList.md)
- [EmailSchedule](docs/Model/EmailSchedule.md)
- [EmailScheduleInclude](docs/Model/EmailScheduleInclude.md)
- [Entity](docs/Model/Entity.md)
- [F24](docs/Model/F24.md)
- [F24Status](docs/Model/F24Status.md)
- [FunctionStatus](docs/Model/FunctionStatus.md)
- [GetArchiveDocumentResponse](docs/Model/GetArchiveDocumentResponse.md)
- [GetCashbookEntryResponse](docs/Model/GetCashbookEntryResponse.md)
- [GetClientResponse](docs/Model/GetClientResponse.md)
- [GetCompanyInfoResponse](docs/Model/GetCompanyInfoResponse.md)
- [GetEmailDataResponse](docs/Model/GetEmailDataResponse.md)
- [GetExistingIssuedDocumentTotalsRequest](docs/Model/GetExistingIssuedDocumentTotalsRequest.md)
- [GetExistingIssuedDocumentTotalsResponse](docs/Model/GetExistingIssuedDocumentTotalsResponse.md)
- [GetExistingReceivedDocumentTotalsRequest](docs/Model/GetExistingReceivedDocumentTotalsRequest.md)
- [GetExistingReceivedDocumentTotalsResponse](docs/Model/GetExistingReceivedDocumentTotalsResponse.md)
- [GetF24Response](docs/Model/GetF24Response.md)
- [GetIssuedDocumentPreCreateInfoResponse](docs/Model/GetIssuedDocumentPreCreateInfoResponse.md)
- [GetIssuedDocumentResponse](docs/Model/GetIssuedDocumentResponse.md)
- [GetNewIssuedDocumentTotalsRequest](docs/Model/GetNewIssuedDocumentTotalsRequest.md)
- [GetNewIssuedDocumentTotalsResponse](docs/Model/GetNewIssuedDocumentTotalsResponse.md)
- [GetNewReceivedDocumentTotalsRequest](docs/Model/GetNewReceivedDocumentTotalsRequest.md)
- [GetNewReceivedDocumentTotalsResponse](docs/Model/GetNewReceivedDocumentTotalsResponse.md)
- [GetPaymentAccountResponse](docs/Model/GetPaymentAccountResponse.md)
- [GetPaymentMethodResponse](docs/Model/GetPaymentMethodResponse.md)
- [GetProductResponse](docs/Model/GetProductResponse.md)
- [GetReceiptPreCreateInfoResponse](docs/Model/GetReceiptPreCreateInfoResponse.md)
- [GetReceiptResponse](docs/Model/GetReceiptResponse.md)
- [GetReceiptsMonthlyTotalsResponse](docs/Model/GetReceiptsMonthlyTotalsResponse.md)
- [GetReceivedDocumentPreCreateInfoResponse](docs/Model/GetReceivedDocumentPreCreateInfoResponse.md)
- [GetReceivedDocumentResponse](docs/Model/GetReceivedDocumentResponse.md)
- [GetSupplierResponse](docs/Model/GetSupplierResponse.md)
- [GetUserInfoResponse](docs/Model/GetUserInfoResponse.md)
- [GetUserInfoResponseEmailConfirmationState](docs/Model/GetUserInfoResponseEmailConfirmationState.md)
- [GetUserInfoResponseInfo](docs/Model/GetUserInfoResponseInfo.md)
- [IssuedDocument](docs/Model/IssuedDocument.md)
- [IssuedDocumentEiData](docs/Model/IssuedDocumentEiData.md)
- [IssuedDocumentExtraData](docs/Model/IssuedDocumentExtraData.md)
- [IssuedDocumentItemsList](docs/Model/IssuedDocumentItemsList.md)
- [IssuedDocumentPaymentsList](docs/Model/IssuedDocumentPaymentsList.md)
- [IssuedDocumentPreCreateInfo](docs/Model/IssuedDocumentPreCreateInfo.md)
- [IssuedDocumentPreCreateInfoDefaultValues](docs/Model/IssuedDocumentPreCreateInfoDefaultValues.md)
- [IssuedDocumentPreCreateInfoExtraDataDefaultValues](docs/Model/IssuedDocumentPreCreateInfoExtraDataDefaultValues.md)
- [IssuedDocumentPreCreateInfoItemsDefaultValues](docs/Model/IssuedDocumentPreCreateInfoItemsDefaultValues.md)
- [IssuedDocumentRefersTo](docs/Model/IssuedDocumentRefersTo.md)
- [IssuedDocumentStatus](docs/Model/IssuedDocumentStatus.md)
- [IssuedDocumentTotals](docs/Model/IssuedDocumentTotals.md)
- [IssuedDocumentTotalsVatList](docs/Model/IssuedDocumentTotalsVatList.md)
- [IssuedDocumentTotalsVatListVatItem](docs/Model/IssuedDocumentTotalsVatListVatItem.md)
- [IssuedDocumentType](docs/Model/IssuedDocumentType.md)
- [Language](docs/Model/Language.md)
- [ListArchiveCategoriesResponse](docs/Model/ListArchiveCategoriesResponse.md)
- [ListArchiveDocumentsResponse](docs/Model/ListArchiveDocumentsResponse.md)
- [ListArchiveDocumentsResponsePage](docs/Model/ListArchiveDocumentsResponsePage.md)
- [ListCashbookEntriesResponse](docs/Model/ListCashbookEntriesResponse.md)
- [ListCitiesResponse](docs/Model/ListCitiesResponse.md)
- [ListClientsResponse](docs/Model/ListClientsResponse.md)
- [ListClientsResponsePage](docs/Model/ListClientsResponsePage.md)
- [ListCostCentersResponse](docs/Model/ListCostCentersResponse.md)
- [ListCountriesResponse](docs/Model/ListCountriesResponse.md)
- [ListCurrenciesResponse](docs/Model/ListCurrenciesResponse.md)
- [ListDeliveryNotesDefaultCausalsResponse](docs/Model/ListDeliveryNotesDefaultCausalsResponse.md)
- [ListF24Response](docs/Model/ListF24Response.md)
- [ListF24ResponseAggregatedData](docs/Model/ListF24ResponseAggregatedData.md)
- [ListF24ResponseAggregatedDataAggregatedData](docs/Model/ListF24ResponseAggregatedDataAggregatedData.md)
- [ListF24ResponsePage](docs/Model/ListF24ResponsePage.md)
- [ListIssuedDocumentsResponse](docs/Model/ListIssuedDocumentsResponse.md)
- [ListIssuedDocumentsResponsePage](docs/Model/ListIssuedDocumentsResponsePage.md)
- [ListLanguagesResponse](docs/Model/ListLanguagesResponse.md)
- [ListPaymentAccountsResponse](docs/Model/ListPaymentAccountsResponse.md)
- [ListPaymentMethodsResponse](docs/Model/ListPaymentMethodsResponse.md)
- [ListProductCategoriesResponse](docs/Model/ListProductCategoriesResponse.md)
- [ListProductsResponse](docs/Model/ListProductsResponse.md)
- [ListProductsResponsePage](docs/Model/ListProductsResponsePage.md)
- [ListReceiptsResponse](docs/Model/ListReceiptsResponse.md)
- [ListReceiptsResponsePage](docs/Model/ListReceiptsResponsePage.md)
- [ListReceivedDocumentCategoriesResponse](docs/Model/ListReceivedDocumentCategoriesResponse.md)
- [ListReceivedDocumentsResponse](docs/Model/ListReceivedDocumentsResponse.md)
- [ListReceivedDocumentsResponsePage](docs/Model/ListReceivedDocumentsResponsePage.md)
- [ListRevenueCentersResponse](docs/Model/ListRevenueCentersResponse.md)
- [ListSuppliersResponse](docs/Model/ListSuppliersResponse.md)
- [ListSuppliersResponsePage](docs/Model/ListSuppliersResponsePage.md)
- [ListTemplatesResponse](docs/Model/ListTemplatesResponse.md)
- [ListUnitsOfMeasureResponse](docs/Model/ListUnitsOfMeasureResponse.md)
- [ListUserCompaniesResponse](docs/Model/ListUserCompaniesResponse.md)
- [ListUserCompaniesResponseData](docs/Model/ListUserCompaniesResponseData.md)
- [ListVatTypesResponse](docs/Model/ListVatTypesResponse.md)
- [ModifyArchiveDocumentRequest](docs/Model/ModifyArchiveDocumentRequest.md)
- [ModifyArchiveDocumentResponse](docs/Model/ModifyArchiveDocumentResponse.md)
- [ModifyCashbookEntryRequest](docs/Model/ModifyCashbookEntryRequest.md)
- [ModifyCashbookEntryResponse](docs/Model/ModifyCashbookEntryResponse.md)
- [ModifyClientRequest](docs/Model/ModifyClientRequest.md)
- [ModifyClientResponse](docs/Model/ModifyClientResponse.md)
- [ModifyF24Request](docs/Model/ModifyF24Request.md)
- [ModifyF24Response](docs/Model/ModifyF24Response.md)
- [ModifyIssuedDocumentRequest](docs/Model/ModifyIssuedDocumentRequest.md)
- [ModifyIssuedDocumentResponse](docs/Model/ModifyIssuedDocumentResponse.md)
- [ModifyPaymentAccountRequest](docs/Model/ModifyPaymentAccountRequest.md)
- [ModifyPaymentAccountResponse](docs/Model/ModifyPaymentAccountResponse.md)
- [ModifyPaymentMethodRequest](docs/Model/ModifyPaymentMethodRequest.md)
- [ModifyPaymentMethodResponse](docs/Model/ModifyPaymentMethodResponse.md)
- [ModifyProductRequest](docs/Model/ModifyProductRequest.md)
- [ModifyProductResponse](docs/Model/ModifyProductResponse.md)
- [ModifyReceiptRequest](docs/Model/ModifyReceiptRequest.md)
- [ModifyReceiptResponse](docs/Model/ModifyReceiptResponse.md)
- [ModifyReceivedDocumentRequest](docs/Model/ModifyReceivedDocumentRequest.md)
- [ModifyReceivedDocumentResponse](docs/Model/ModifyReceivedDocumentResponse.md)
- [ModifySupplierRequest](docs/Model/ModifySupplierRequest.md)
- [ModifySupplierResponse](docs/Model/ModifySupplierResponse.md)
- [MonthlyTotal](docs/Model/MonthlyTotal.md)
- [OriginalDocumentType](docs/Model/OriginalDocumentType.md)
- [Pagination](docs/Model/Pagination.md)
- [PaymentAccount](docs/Model/PaymentAccount.md)
- [PaymentAccountType](docs/Model/PaymentAccountType.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodDetails](docs/Model/PaymentMethodDetails.md)
- [PaymentMethodType](docs/Model/PaymentMethodType.md)
- [PermissionLevel](docs/Model/PermissionLevel.md)
- [Permissions](docs/Model/Permissions.md)
- [PermissionsFicIssuedDocumentsDetailed](docs/Model/PermissionsFicIssuedDocumentsDetailed.md)
- [Product](docs/Model/Product.md)
- [Receipt](docs/Model/Receipt.md)
- [ReceiptItemsListItem](docs/Model/ReceiptItemsListItem.md)
- [ReceiptPreCreateInfo](docs/Model/ReceiptPreCreateInfo.md)
- [ReceiptType](docs/Model/ReceiptType.md)
- [ReceivedDocument](docs/Model/ReceivedDocument.md)
- [ReceivedDocumentEntity](docs/Model/ReceivedDocumentEntity.md)
- [ReceivedDocumentInfo](docs/Model/ReceivedDocumentInfo.md)
- [ReceivedDocumentInfoDefaultValues](docs/Model/ReceivedDocumentInfoDefaultValues.md)
- [ReceivedDocumentInfoItemsDefaultValues](docs/Model/ReceivedDocumentInfoItemsDefaultValues.md)
- [ReceivedDocumentItemsList](docs/Model/ReceivedDocumentItemsList.md)
- [ReceivedDocumentPaymentTerms](docs/Model/ReceivedDocumentPaymentTerms.md)
- [ReceivedDocumentPaymentsList](docs/Model/ReceivedDocumentPaymentsList.md)
- [ReceivedDocumentTotals](docs/Model/ReceivedDocumentTotals.md)
- [ReceivedDocumentType](docs/Model/ReceivedDocumentType.md)
- [ScheduleEmailRequest](docs/Model/ScheduleEmailRequest.md)
- [SendEInvoiceRequest](docs/Model/SendEInvoiceRequest.md)
- [SendEInvoiceRequestData](docs/Model/SendEInvoiceRequestData.md)
- [SendEInvoiceResponse](docs/Model/SendEInvoiceResponse.md)
- [SendEInvoiceResponseData](docs/Model/SendEInvoiceResponseData.md)
- [ShowTotalsMode](docs/Model/ShowTotalsMode.md)
- [Supplier](docs/Model/Supplier.md)
- [SupplierType](docs/Model/SupplierType.md)
- [UploadArchiveAttachmentResponse](docs/Model/UploadArchiveAttachmentResponse.md)
- [UploadF24AttachmentResponse](docs/Model/UploadF24AttachmentResponse.md)
- [UploadIssuedDocumentAttachmentResponse](docs/Model/UploadIssuedDocumentAttachmentResponse.md)
- [UploadIssuedDocumentAttachmentResponseData](docs/Model/UploadIssuedDocumentAttachmentResponseData.md)
- [UploadReceivedDocumentAttachmentResponse](docs/Model/UploadReceivedDocumentAttachmentResponse.md)
- [UploadReceivedDocumentAttachmentResponseData](docs/Model/UploadReceivedDocumentAttachmentResponseData.md)
- [User](docs/Model/User.md)
- [UserCompanyRole](docs/Model/UserCompanyRole.md)
- [VatKind](docs/Model/VatKind.md)
- [VatType](docs/Model/VatType.md)
- [VerifyEInvoiceXmlErrorResponse](docs/Model/VerifyEInvoiceXmlErrorResponse.md)
- [VerifyEInvoiceXmlErrorResponseError](docs/Model/VerifyEInvoiceXmlErrorResponseError.md)
- [VerifyEInvoiceXmlErrorResponseExtra](docs/Model/VerifyEInvoiceXmlErrorResponseExtra.md)
- [VerifyEInvoiceXmlResponse](docs/Model/VerifyEInvoiceXmlResponse.md)
- [VerifyEInvoiceXmlSuccessResponse](docs/Model/VerifyEInvoiceXmlSuccessResponse.md)
- [VerifyEInvoiceXmlSuccessResponseData](docs/Model/VerifyEInvoiceXmlSuccessResponseData.md)

## Authorization

### OAuth2AuthenticationCodeFlow

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://api-v2.fattureincloud.it/oauth/authorize`
- **Scopes**: 
    - **entity.clients:r**: 
    - **entity.clients:a**: 
    - **entity.suppliers:r**: 
    - **entity.suppliers:a**: 
    - **products:r**: 
    - **products:a**: 
    - **issued_documents.invoice:r**: 
    - **issued_documents.credit_note:r**: 
    - **issued_documents.receipt:r**: 
    - **issued_documents.order:r**: 
    - **issued_documents.quote:r**: 
    - **issued_documents.proforma:r**: 
    - **issued_documents.delivery_note:r**: 
    - **issued_documents.invoice:a**: 
    - **issued_documents.credit_note:a**: 
    - **issued_documents.receipt:a**: 
    - **issued_documents.order:a**: 
    - **issued_documents.quote:a**: 
    - **issued_documents.proforma:a**: 
    - **issued_documents.delivery_note:a**: 
    - **received_documents:r**: 
    - **received_documents:a**: 
    - **stock:r**: 
    - **stock:a**: 
    - **receipts:r**: 
    - **receipts:a**: 
    - **taxes:r**: 
    - **taxes:a**: 
    - **archive:r**: 
    - **archive:a**: 
    - **cashbook:r**: 
    - **cashbook:a**: 
    - **settings:r**: 
    - **settings:a**: 
    - **situation:r**: 

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@fattureincloud.it

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.7`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
