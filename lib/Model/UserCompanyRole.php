<?php
/**
 * UserCompanyRole
 *
 * PHP version 7.3
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
 * The version of the OpenAPI document: 2.0.9
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FattureInCloud\Model;
use \FattureInCloud\ObjectSerializer;

/**
 * UserCompanyRole Class Doc Comment
 *
 * @category Class
 * @description Role of the user in this company.
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class UserCompanyRole
{
    /**
     * Possible values of this enum
     */
    const MASTER = 'master';

    const SUBACCOUNT = 'subaccount';

    const EMPLOYEE = 'employee';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MASTER,
            self::SUBACCOUNT,
            self::EMPLOYEE
        ];
    }
}


