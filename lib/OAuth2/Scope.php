<?php

namespace FattureInCloud\OAuth2;

class Scope
{
    // Read permission to the Clients registry
    public const ENTITY_CLIENTS_READ = "entity.clients:r";

    // Write permission to the Clients registry
    public const ENTITY_CLIENTS_ALL = "entity.clients:a";

    // Read permission to the Suppliers registry
    public const ENTITY_SUPPLIERS_READ = "entity.suppliers:r";

    // Write permission to the Suppliers registry
    public const ENTITY_SUPPLIERS_ALL = "entity.suppliers:a";

    // Read permission to the Products
    public const PRODUCTS_READ = "products:r";

    // Write permission to the Products
    public const PRODUCTS_ALL = "products:a";

    // Read permission to the issued Invoices
    public const ISSUED_DOCUMENTS_INVOICES_READ = "issued_documents.invoices:r";

    // Read permission to the issued Credit Notes
    public const ISSUED_DOCUMENTS_CREDIT_NOTES_READ = "issued_documents.credit_notes:r";

    // Read permission to the issued Receipts
    public const ISSUED_DOCUMENTS_RECEIPTS_READ = "issued_documents.receipts:r";

    // Read permission to the issued Orders
    public const ISSUED_DOCUMENTS_ORDERS_READ = "issued_documents.orders:r";

    // Read permission to the issued Quotes
    public const ISSUED_DOCUMENTS_QUOTES_READ = "issued_documents.quotes:r";

    // Read permission to the issued Proformas
    public const ISSUED_DOCUMENTS_PROFORMAS_READ = "issued_documents.proformas:r";

    // Read permission to the issued Delivery Notes
    public const ISSUED_DOCUMENTS_DELIVERY_NOTES_READ = "issued_documents.delivery_notes:r";

    // Read permission to the issued Work Reports
    public const ISSUED_DOCUMENTS_WORK_REPORTS_READ = "issued_documents.work_reports:r";

    // Read permission to the issued Supplier Orders
    public const ISSUED_DOCUMENTS_SUPPLIER_ORDERS_READ = "issued_documents.supplier_orders:r";

    // Read permission to the issued Self Invoices
    public const ISSUED_DOCUMENTS_SELF_INVOICES_READ = "issued_documents.self_invoices:r";

    // Write permission to the issued Invoices
    public const ISSUED_DOCUMENTS_INVOICES_ALL = "issued_documents.invoices:a";

    // Write permission to the issued Credit Notes
    public const ISSUED_DOCUMENTS_CREDIT_NOTES_ALL = "issued_documents.credit_notes:a";

    // Write permission to the issued issued Receipts
    public const ISSUED_DOCUMENTS_RECEIPTS_ALL = "issued_documents.receipts:a";

    // Write permission to the issued Orders
    public const ISSUED_DOCUMENTS_ORDERS_ALL = "issued_documents.orders:a";

    // Write permission to the issued Quotes
    public const ISSUED_DOCUMENTS_QUOTES_ALL = "issued_documents.quotes:a";

    // Write permission to the issued Proformas
    public const ISSUED_DOCUMENTS_PROFORMAS_ALL = "issued_documents.proformas:a";

    // Write permission to the issued Delivery Notes
    public const ISSUED_DOCUMENTS_DELIVERY_NOTES_ALL = "issued_documents.delivery_notes:a";

    // Write permission to the issued Work Reports
    public const ISSUED_DOCUMENTS_WORK_REPORTS_ALL = "issued_documents.work_reports:a";

    // Write permission to the issued Supplier Orders
    public const ISSUED_DOCUMENTS_SUPPLIER_ORDERS_ALL = "issued_documents.supplier_orders:a";

    // Write permission to the issued Self Invoices
    public const ISSUED_DOCUMENTS_SELF_INVOICES_ALL = "issued_documents.self_invoices:a";

    // Read permission to the Received Documents
    public const RECEIVED_DOCUMENTS_READ = "received_documents:r";

    // Write permission to the Received Documents
    public const RECEIVED_DOCUMENTS_ALL = "received_documents:a";

    // Read permission to the Stock movements
    public const STOCK_READ = "stock:r";

    // Write permission to the Stock movements
    public const STOCK_ALL = "stock:a";

    // Read permission to the Receipts
    public const RECEIPTS_READ = "receipts:r";

    // Write permission to the Receipts
    public const RECEIPTS_ALL = "receipts:a";

    // Read permission to the Taxes
    public const TAXES_READ = "taxes:r";

    // Write permission to the Taxes
    public const TAXES_ALL = "taxes:a";

    // Read permission to the Archive Documents
    public const ARCHIVE_READ = "archive:r";

    // Read permission to the Archive Documents
    public const ARCHIVE_ALL = "archive:a";

    // Read permission to the Cashbook
    public const CASHBOOK_READ = "cashbook:r";

    // Write permission to the Cashbook
    public const CASHBOOK_ALL = "cashbook:a";

    // Read permission to the Settings
    public const SETTINGS_READ = "settings:r";

    // Write permission to the Settings
    public const SETTINGS_ALL = "settings:a";

    // Read permission to the company Situation
    public const SITUATION_READ = "situation:r";


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

            self::ISSUED_DOCUMENTS_WORK_REPORTS_READ,

            self::ISSUED_DOCUMENTS_SUPPLIER_ORDERS_READ,

            self::ISSUED_DOCUMENTS_SELF_INVOICES_READ,

            self::ISSUED_DOCUMENTS_INVOICES_ALL,

            self::ISSUED_DOCUMENTS_CREDIT_NOTES_ALL,

            self::ISSUED_DOCUMENTS_RECEIPTS_ALL,

            self::ISSUED_DOCUMENTS_ORDERS_ALL,

            self::ISSUED_DOCUMENTS_QUOTES_ALL,

            self::ISSUED_DOCUMENTS_PROFORMAS_ALL,

            self::ISSUED_DOCUMENTS_DELIVERY_NOTES_ALL,

            self::ISSUED_DOCUMENTS_WORK_REPORTS_ALL,

            self::ISSUED_DOCUMENTS_SUPPLIER_ORDERS_ALL,

            self::ISSUED_DOCUMENTS_SELF_INVOICES_ALL,

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