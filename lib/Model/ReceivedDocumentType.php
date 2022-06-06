<?php
/**
 * ReceivedDocumentType
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
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 400.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.
 *
 * The version of the OpenAPI document: 2.0.18
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FattureInCloud\Model;
use \FattureInCloud\ObjectSerializer;

/**
 * ReceivedDocumentType Class Doc Comment
 *
 * @category Class
 * @description Received document type.
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ReceivedDocumentType
{
    /**
     * Possible values of this enum
     */
    public const EXPENSE = 'expense';

    public const PASSIVE_CREDIT_NOTE = 'passive_credit_note';

    public const PASSIVE_DELIVERY_NOTE = 'passive_delivery_note';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXPENSE,
            self::PASSIVE_CREDIT_NOTE,
            self::PASSIVE_DELIVERY_NOTE
        ];
    }
}


