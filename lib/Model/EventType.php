<?php
/**
 * EventType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */

/**
 * Fatture in Cloud API v2 - API Reference
 *
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 500.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.
 *
 * The version of the OpenAPI document: 2.1.2
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FattureInCloud\Model;
use \FattureInCloud\ObjectSerializer;

/**
 * EventType Class Doc Comment
 *
 * @category Class
 * @description Webhooks event type
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class EventType
{
    /**
     * Possible values of this enum
     */
    public const ISSUED_DOCUMENTS_INVOICES_CREATE = 'it.fattureincloud.webhooks.issued_documents.invoices.create';

    public const ISSUED_DOCUMENTS_INVOICES_UPDATE = 'it.fattureincloud.webhooks.issued_documents.invoices.update';

    public const ISSUED_DOCUMENTS_INVOICES_DELETE = 'it.fattureincloud.webhooks.issued_documents.invoices.delete';

    public const ISSUED_DOCUMENTS_QUOTES_CREATE = 'it.fattureincloud.webhooks.issued_documents.quotes.create';

    public const ISSUED_DOCUMENTS_QUOTES_UPDATE = 'it.fattureincloud.webhooks.issued_documents.quotes.update';

    public const ISSUED_DOCUMENTS_QUOTES_DELETE = 'it.fattureincloud.webhooks.issued_documents.quotes.delete';

    public const ISSUED_DOCUMENTS_PROFORMAS_CREATE = 'it.fattureincloud.webhooks.issued_documents.proformas.create';

    public const ISSUED_DOCUMENTS_PROFORMAS_UPDATE = 'it.fattureincloud.webhooks.issued_documents.proformas.update';

    public const ISSUED_DOCUMENTS_PROFORMAS_DELETE = 'it.fattureincloud.webhooks.issued_documents.proformas.delete';

    public const ISSUED_DOCUMENTS_RECEIPTS_CREATE = 'it.fattureincloud.webhooks.issued_documents.receipts.create';

    public const ISSUED_DOCUMENTS_RECEIPTS_UPDATE = 'it.fattureincloud.webhooks.issued_documents.receipts.update';

    public const ISSUED_DOCUMENTS_RECEIPTS_DELETE = 'it.fattureincloud.webhooks.issued_documents.receipts.delete';

    public const ISSUED_DOCUMENTS_DELIVERY_NOTES_CREATE = 'it.fattureincloud.webhooks.issued_documents.delivery_notes.create';

    public const ISSUED_DOCUMENTS_DELIVERY_NOTES_UPDATE = 'it.fattureincloud.webhooks.issued_documents.delivery_notes.update';

    public const ISSUED_DOCUMENTS_DELIVERY_NOTES_DELETE = 'it.fattureincloud.webhooks.issued_documents.delivery_notes.delete';

    public const ISSUED_DOCUMENTS_CREDIT_NOTES_CREATE = 'it.fattureincloud.webhooks.issued_documents.credit_notes.create';

    public const ISSUED_DOCUMENTS_CREDIT_NOTES_UPDATE = 'it.fattureincloud.webhooks.issued_documents.credit_notes.update';

    public const ISSUED_DOCUMENTS_CREDIT_NOTES_DELETE = 'it.fattureincloud.webhooks.issued_documents.credit_notes.delete';

    public const ISSUED_DOCUMENTS_ORDERS_CREATE = 'it.fattureincloud.webhooks.issued_documents.orders.create';

    public const ISSUED_DOCUMENTS_ORDERS_UPDATE = 'it.fattureincloud.webhooks.issued_documents.orders.update';

    public const ISSUED_DOCUMENTS_ORDERS_DELETE = 'it.fattureincloud.webhooks.issued_documents.orders.delete';

    public const ISSUED_DOCUMENTS_WORK_REPORTS_CREATE = 'it.fattureincloud.webhooks.issued_documents.work_reports.create';

    public const ISSUED_DOCUMENTS_WORK_REPORTS_UPDATE = 'it.fattureincloud.webhooks.issued_documents.work_reports.update';

    public const ISSUED_DOCUMENTS_WORK_REPORTS_DELETE = 'it.fattureincloud.webhooks.issued_documents.work_reports.delete';

    public const ISSUED_DOCUMENTS_SUPPLIER_ORDERS_CREATE = 'it.fattureincloud.webhooks.issued_documents.supplier_orders.create';

    public const ISSUED_DOCUMENTS_SUPPLIER_ORDERS_UPDATE = 'it.fattureincloud.webhooks.issued_documents.supplier_orders.update';

    public const ISSUED_DOCUMENTS_SUPPLIER_ORDERS_DELETE = 'it.fattureincloud.webhooks.issued_documents.supplier_orders.delete';

    public const ISSUED_DOCUMENTS_SELF_INVOICES_CREATE = 'it.fattureincloud.webhooks.issued_documents.self_invoices.create';

    public const ISSUED_DOCUMENTS_SELF_INVOICES_UPDATE = 'it.fattureincloud.webhooks.issued_documents.self_invoices.update';

    public const ISSUED_DOCUMENTS_SELF_INVOICES_DELETE = 'it.fattureincloud.webhooks.issued_documents.self_invoices.delete';

    public const ISSUED_DOCUMENTS_ALL_CREATE = 'it.fattureincloud.webhooks.issued_documents.all.create';

    public const ISSUED_DOCUMENTS_ALL_UPDATE = 'it.fattureincloud.webhooks.issued_documents.all.update';

    public const ISSUED_DOCUMENTS_ALL_DELETE = 'it.fattureincloud.webhooks.issued_documents.all.delete';

    public const RECEIVED_DOCUMENTS_CREATE = 'it.fattureincloud.webhooks.received_documents.create';

    public const RECEIVED_DOCUMENTS_UPDATE = 'it.fattureincloud.webhooks.received_documents.update';

    public const RECEIVED_DOCUMENTS_DELETE = 'it.fattureincloud.webhooks.received_documents.delete';

    public const RECEIPTS_CREATE = 'it.fattureincloud.webhooks.receipts.create';

    public const RECEIPTS_UPDATE = 'it.fattureincloud.webhooks.receipts.update';

    public const RECEIPTS_DELETE = 'it.fattureincloud.webhooks.receipts.delete';

    public const TAXES_CREATE = 'it.fattureincloud.webhooks.taxes.create';

    public const TAXES_UPDATE = 'it.fattureincloud.webhooks.taxes.update';

    public const TAXES_DELETE = 'it.fattureincloud.webhooks.taxes.delete';

    public const ARCHIVE_DOCUMENTS_CREATE = 'it.fattureincloud.webhooks.archive_documents.create';

    public const ARCHIVE_DOCUMENTS_UPDATE = 'it.fattureincloud.webhooks.archive_documents.update';

    public const ARCHIVE_DOCUMENTS_DELETE = 'it.fattureincloud.webhooks.archive_documents.delete';

    public const CASHBOOK_CREATE = 'it.fattureincloud.webhooks.cashbook.create';

    public const CASHBOOK_UPDATE = 'it.fattureincloud.webhooks.cashbook.update';

    public const CASHBOOK_DELETE = 'it.fattureincloud.webhooks.cashbook.delete';

    public const PRODUCTS_CREATE = 'it.fattureincloud.webhooks.products.create';

    public const PRODUCTS_UPDATE = 'it.fattureincloud.webhooks.products.update';

    public const PRODUCTS_DELETE = 'it.fattureincloud.webhooks.products.delete';

    public const PRODUCTS_STOCK_UPDATE = 'it.fattureincloud.webhooks.products.stock_update';

    public const ENTITIES_CLIENTS_CREATE = 'it.fattureincloud.webhooks.entities.clients.create';

    public const ENTITIES_CLIENTS_UPDATE = 'it.fattureincloud.webhooks.entities.clients.update';

    public const ENTITIES_CLIENTS_DELETE = 'it.fattureincloud.webhooks.entities.clients.delete';

    public const ENTITIES_SUPPLIERS_CREATE = 'it.fattureincloud.webhooks.entities.suppliers.create';

    public const ENTITIES_SUPPLIERS_UPDATE = 'it.fattureincloud.webhooks.entities.suppliers.update';

    public const ENTITIES_SUPPLIERS_DELETE = 'it.fattureincloud.webhooks.entities.suppliers.delete';

    public const ENTITIES_ALL_CREATE = 'it.fattureincloud.webhooks.entities.all.create';

    public const ENTITIES_ALL_UPDATE = 'it.fattureincloud.webhooks.entities.all.update';

    public const ENTITIES_ALL_DELETE = 'it.fattureincloud.webhooks.entities.all.delete';

    public const ISSUED_DOCUMENTS_E_INVOICES_STATUS_UPDATE = 'it.fattureincloud.webhooks.issued_documents.e_invoices.status_update';

    public const RECEIVED_DOCUMENTS_E_INVOICES_RECEIVE = 'it.fattureincloud.webhooks.received_documents.e_invoices.receive';

    public const ISSUED_DOCUMENTS_INVOICES_EMAIL_SENT = 'it.fattureincloud.webhooks.issued_documents.invoices.email_sent';

    public const ISSUED_DOCUMENTS_QUOTES_EMAIL_SENT = 'it.fattureincloud.webhooks.issued_documents.quotes.email_sent';

    public const ISSUED_DOCUMENTS_PROFORMAS_EMAIL_SENT = 'it.fattureincloud.webhooks.issued_documents.proformas.email_sent';

    public const ISSUED_DOCUMENTS_RECEIPTS_EMAIL_SENT = 'it.fattureincloud.webhooks.issued_documents.receipts.email_sent';

    public const ISSUED_DOCUMENTS_DELIVERY_NOTES_EMAIL_SENT = 'it.fattureincloud.webhooks.issued_documents.delivery_notes.email_sent';

    public const ISSUED_DOCUMENTS_CREDIT_NOTES_EMAIL_SENT = 'it.fattureincloud.webhooks.issued_documents.credit_notes.email_sent';

    public const ISSUED_DOCUMENTS_ORDERS_EMAIL_SENT = 'it.fattureincloud.webhooks.issued_documents.orders.email_sent';

    public const ISSUED_DOCUMENTS_WORK_REPORTS_EMAIL_SENT = 'it.fattureincloud.webhooks.issued_documents.work_reports.email_sent';

    public const ISSUED_DOCUMENTS_SUPPLIER_ORDERS_EMAIL_SENT = 'it.fattureincloud.webhooks.issued_documents.supplier_orders.email_sent';

    public const ISSUED_DOCUMENTS_SELF_INVOICES_EMAIL_SENT = 'it.fattureincloud.webhooks.issued_documents.self_invoices.email_sent';

    public const ISSUED_DOCUMENTS_ALL_EMAIL_SENT = 'it.fattureincloud.webhooks.issued_documents.all.email_sent';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ISSUED_DOCUMENTS_INVOICES_CREATE,
            self::ISSUED_DOCUMENTS_INVOICES_UPDATE,
            self::ISSUED_DOCUMENTS_INVOICES_DELETE,
            self::ISSUED_DOCUMENTS_QUOTES_CREATE,
            self::ISSUED_DOCUMENTS_QUOTES_UPDATE,
            self::ISSUED_DOCUMENTS_QUOTES_DELETE,
            self::ISSUED_DOCUMENTS_PROFORMAS_CREATE,
            self::ISSUED_DOCUMENTS_PROFORMAS_UPDATE,
            self::ISSUED_DOCUMENTS_PROFORMAS_DELETE,
            self::ISSUED_DOCUMENTS_RECEIPTS_CREATE,
            self::ISSUED_DOCUMENTS_RECEIPTS_UPDATE,
            self::ISSUED_DOCUMENTS_RECEIPTS_DELETE,
            self::ISSUED_DOCUMENTS_DELIVERY_NOTES_CREATE,
            self::ISSUED_DOCUMENTS_DELIVERY_NOTES_UPDATE,
            self::ISSUED_DOCUMENTS_DELIVERY_NOTES_DELETE,
            self::ISSUED_DOCUMENTS_CREDIT_NOTES_CREATE,
            self::ISSUED_DOCUMENTS_CREDIT_NOTES_UPDATE,
            self::ISSUED_DOCUMENTS_CREDIT_NOTES_DELETE,
            self::ISSUED_DOCUMENTS_ORDERS_CREATE,
            self::ISSUED_DOCUMENTS_ORDERS_UPDATE,
            self::ISSUED_DOCUMENTS_ORDERS_DELETE,
            self::ISSUED_DOCUMENTS_WORK_REPORTS_CREATE,
            self::ISSUED_DOCUMENTS_WORK_REPORTS_UPDATE,
            self::ISSUED_DOCUMENTS_WORK_REPORTS_DELETE,
            self::ISSUED_DOCUMENTS_SUPPLIER_ORDERS_CREATE,
            self::ISSUED_DOCUMENTS_SUPPLIER_ORDERS_UPDATE,
            self::ISSUED_DOCUMENTS_SUPPLIER_ORDERS_DELETE,
            self::ISSUED_DOCUMENTS_SELF_INVOICES_CREATE,
            self::ISSUED_DOCUMENTS_SELF_INVOICES_UPDATE,
            self::ISSUED_DOCUMENTS_SELF_INVOICES_DELETE,
            self::ISSUED_DOCUMENTS_ALL_CREATE,
            self::ISSUED_DOCUMENTS_ALL_UPDATE,
            self::ISSUED_DOCUMENTS_ALL_DELETE,
            self::RECEIVED_DOCUMENTS_CREATE,
            self::RECEIVED_DOCUMENTS_UPDATE,
            self::RECEIVED_DOCUMENTS_DELETE,
            self::RECEIPTS_CREATE,
            self::RECEIPTS_UPDATE,
            self::RECEIPTS_DELETE,
            self::TAXES_CREATE,
            self::TAXES_UPDATE,
            self::TAXES_DELETE,
            self::ARCHIVE_DOCUMENTS_CREATE,
            self::ARCHIVE_DOCUMENTS_UPDATE,
            self::ARCHIVE_DOCUMENTS_DELETE,
            self::CASHBOOK_CREATE,
            self::CASHBOOK_UPDATE,
            self::CASHBOOK_DELETE,
            self::PRODUCTS_CREATE,
            self::PRODUCTS_UPDATE,
            self::PRODUCTS_DELETE,
            self::PRODUCTS_STOCK_UPDATE,
            self::ENTITIES_CLIENTS_CREATE,
            self::ENTITIES_CLIENTS_UPDATE,
            self::ENTITIES_CLIENTS_DELETE,
            self::ENTITIES_SUPPLIERS_CREATE,
            self::ENTITIES_SUPPLIERS_UPDATE,
            self::ENTITIES_SUPPLIERS_DELETE,
            self::ENTITIES_ALL_CREATE,
            self::ENTITIES_ALL_UPDATE,
            self::ENTITIES_ALL_DELETE,
            self::ISSUED_DOCUMENTS_E_INVOICES_STATUS_UPDATE,
            self::RECEIVED_DOCUMENTS_E_INVOICES_RECEIVE,
            self::ISSUED_DOCUMENTS_INVOICES_EMAIL_SENT,
            self::ISSUED_DOCUMENTS_QUOTES_EMAIL_SENT,
            self::ISSUED_DOCUMENTS_PROFORMAS_EMAIL_SENT,
            self::ISSUED_DOCUMENTS_RECEIPTS_EMAIL_SENT,
            self::ISSUED_DOCUMENTS_DELIVERY_NOTES_EMAIL_SENT,
            self::ISSUED_DOCUMENTS_CREDIT_NOTES_EMAIL_SENT,
            self::ISSUED_DOCUMENTS_ORDERS_EMAIL_SENT,
            self::ISSUED_DOCUMENTS_WORK_REPORTS_EMAIL_SENT,
            self::ISSUED_DOCUMENTS_SUPPLIER_ORDERS_EMAIL_SENT,
            self::ISSUED_DOCUMENTS_SELF_INVOICES_EMAIL_SENT,
            self::ISSUED_DOCUMENTS_ALL_EMAIL_SENT
        ];
    }
}


