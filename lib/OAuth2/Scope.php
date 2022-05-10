<?php

namespace FattureInCloud\OAuth2;

class Scope
{

    // Read permission to the Clients registry
    const ENTITY_CLIENTS_READ = "entity.clients:r";

    // Write permission to the Clients registry
    const ENTITY_CLIENTS_ALL = "entity.clients:a";

    // Read permission to the Suppliers registry
    const ENTITY_SUPPLIERS_READ = "entity.suppliers:r";

    // Write permission to the Suppliers registry
    const ENTITY_SUPPLIERS_ALL = "entity.suppliers:a";

    // Read permission to the Products
    const PRODUCTS_READ = "products:r";

    // Write permission to the Products
    const PRODUCTS_ALL = "products:a";

    // Read permission to the issued Invoices
    const ISSUED_DOCUMENTS_INVOICES_READ = "issued_documents.invoices:r";

    // Read permission to the issued Credit Notes
    const ISSUED_DOCUMENTS_CREDIT_NOTES_READ = "issued_documents.credit_notes:r";

    // Read permission to the issued Receipts
    const ISSUED_DOCUMENTS_RECEIPTS_READ = "issued_documents.receipts:r";

    // Read permission to the issued Orders
    const ISSUED_DOCUMENTS_ORDERS_READ = "issued_documents.orders:r";

    // Read permission to the issued Quotes
    const ISSUED_DOCUMENTS_QUOTES_READ = "issued_documents.quotes:r";

    // Read permission to the issued Proformas
    const ISSUED_DOCUMENTS_PROFORMAS_READ = "issued_documents.proformas:r";

    // Read permission to the issued Delivery Notes
    const ISSUED_DOCUMENTS_DELIVERY_NOTES_READ = "issued_documents.delivery_notes:r";

    // Write permission to the issued Invoices
    const ISSUED_DOCUMENTS_INVOICES_ALL = "issued_documents.invoices:a";

    // Write permission to the issued Credit Notes
    const ISSUED_DOCUMENTS_CREDIT_NOTES_ALL = "issued_documents.credit_notes:a";

    // Write permission to the issued issued Receipts
    const ISSUED_DOCUMENTS_RECEIPTS_ALL = "issued_documents.receipts:a";

    // Write permission to the issued Orders
    const ISSUED_DOCUMENTS_ORDERS_ALL = "issued_documents.orders:a";

    // Write permission to the issued Quotes
    const ISSUED_DOCUMENTS_QUOTES_ALL = "issued_documents.quotes:a";

    // Write permission to the issued Proformas
    const ISSUED_DOCUMENTS_PROFORMAS_ALL = "issued_documents.proformas:a";

    // Write permission to the issued Delivery Notes
    const ISSUED_DOCUMENTS_DELIVERY_NOTES_ALL = "issued_documents.delivery_notes:a";

    // Read permission to the issued Received Documents
    const RECEIVED_DOCUMENTS_READ = "received_documents:r";

    // Write permission to the issued Received Documents
    const RECEIVED_DOCUMENTS_ALL = "received_documents:a";

    // Read permission to the Stock movements
    const STOCK_READ = "stock:r";

    // Write permission to the Stock movements
    const STOCK_ALL = "stock:a";

    // Read permission to the Receipts
    const RECEIPTS_READ = "receipts:r";

    // Write permission to the Receipts
    const RECEIPTS_ALL = "receipts:a";

    // Read permission to the Taxes
    const TAXES_READ = "taxes:r";

    // Write permission to the Taxes
    const TAXES_ALL = "taxes:a";

    // Read permission to the Archive Documents
    const ARCHIVE_READ = "archive:r";

    // Read permission to the Archive Documents
    const ARCHIVE_ALL = "archive:a";

    // Read permission to the Cashbook
    const CASHBOOK_READ = "cashbook:r";

    // Write permission to the Cashbook
    const CASHBOOK_ALL = "cashbook:a";

    // Read permission to the Settings
    const SETTINGS_READ = "settings:r";

    // Write permission to the Settings
    const SETTINGS_ALL = "settings:a";

    // Read permission to the company Situation
    const SITUATION_READ = "situation:r";


    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [

            self::ENTITY_CLIENTS_READ,

            self::ENTITY_CLIENTS_ALL,

            self::ENTITY_SUPPLIERS_READ,

            self::ENTITY_SUPPLIERS_ALL,

            self::PRODUCTS_READ,

            self::PRODUCTS_ALL,

            self::ISSUED_DOCUMENTS_INVOICES_READ,

            self::ISSUED_DOCUMENTS_CREDIT_NOTES_READ,

            self::ISSUED_DOCUMENTS_RECEIPTS_READ,

            self::ISSUED_DOCUMENTS_ORDERS_READ,

            self::ISSUED_DOCUMENTS_QUOTES_READ,

            self::ISSUED_DOCUMENTS_PROFORMAS_READ,

            self::ISSUED_DOCUMENTS_DELIVERY_NOTES_READ,

            self::ISSUED_DOCUMENTS_INVOICES_ALL,

            self::ISSUED_DOCUMENTS_CREDIT_NOTES_ALL,

            self::ISSUED_DOCUMENTS_RECEIPTS_ALL,

            self::ISSUED_DOCUMENTS_ORDERS_ALL,

            self::ISSUED_DOCUMENTS_QUOTES_ALL,

            self::ISSUED_DOCUMENTS_PROFORMAS_ALL,

            self::ISSUED_DOCUMENTS_DELIVERY_NOTES_ALL,

            self::RECEIVED_DOCUMENTS_READ,

            self::RECEIVED_DOCUMENTS_ALL,

            self::STOCK_READ,

            self::STOCK_ALL,

            self::RECEIPTS_READ,

            self::RECEIPTS_ALL,

            self::TAXES_READ,

            self::TAXES_ALL,

            self::ARCHIVE_READ,

            self::ARCHIVE_ALL,

            self::CASHBOOK_READ,

            self::CASHBOOK_ALL,

            self::SETTINGS_READ,

            self::SETTINGS_ALL,

            self::SITUATION_READ,

        ];
    }
}