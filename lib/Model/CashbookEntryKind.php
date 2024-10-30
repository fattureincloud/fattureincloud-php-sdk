<?php
/**
 * CashbookEntryKind
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
 * The version of the OpenAPI document: 2.1.3
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
 * CashbookEntryKind Class Doc Comment
 *
 * @category Class
 * @description Cashbook kind
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class CashbookEntryKind
{
    /**
     * Possible values of this enum
     */
    public const CASHBOOK = 'cashbook';

    public const ISSUED_DOCUMENT = 'issued_document';

    public const RECEIVED_DOCUMENT = 'received_document';

    public const TAX = 'tax';

    public const RECEIPT = 'receipt';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CASHBOOK,
            self::ISSUED_DOCUMENT,
            self::RECEIVED_DOCUMENT,
            self::TAX,
            self::RECEIPT
        ];
    }
}


