<?php
/**
 * ReceiptPreCreateInfo
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
 * The version of the OpenAPI document: 2.0.3
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FattureInCloud\Model;

use \ArrayAccess;
use \FattureInCloud\ObjectSerializer;

/**
 * ReceiptPreCreateInfo Class Doc Comment
 *
 * @category Class
 * @description Pre-create info.
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReceiptPreCreateInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReceiptPreCreateInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'numerations' => 'object',
        'numerations_list' => 'string[]',
        'rc_centers_list' => 'string[]',
        'payment_accounts_list' => '\FattureInCloud\Model\PaymentAccount[]',
        'categories_list' => 'string[]',
        'vat_types_list' => '\FattureInCloud\Model\VatType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'numerations' => null,
        'numerations_list' => null,
        'rc_centers_list' => null,
        'payment_accounts_list' => null,
        'categories_list' => null,
        'vat_types_list' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'numerations' => 'numerations',
        'numerations_list' => 'numerations_list',
        'rc_centers_list' => 'rc_centers_list',
        'payment_accounts_list' => 'payment_accounts_list',
        'categories_list' => 'categories_list',
        'vat_types_list' => 'vat_types_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numerations' => 'setNumerations',
        'numerations_list' => 'setNumerationsList',
        'rc_centers_list' => 'setRcCentersList',
        'payment_accounts_list' => 'setPaymentAccountsList',
        'categories_list' => 'setCategoriesList',
        'vat_types_list' => 'setVatTypesList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numerations' => 'getNumerations',
        'numerations_list' => 'getNumerationsList',
        'rc_centers_list' => 'getRcCentersList',
        'payment_accounts_list' => 'getPaymentAccountsList',
        'categories_list' => 'getCategoriesList',
        'vat_types_list' => 'getVatTypesList'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['numerations'] = $data['numerations'] ?? null;
        $this->container['numerations_list'] = $data['numerations_list'] ?? null;
        $this->container['rc_centers_list'] = $data['rc_centers_list'] ?? null;
        $this->container['payment_accounts_list'] = $data['payment_accounts_list'] ?? null;
        $this->container['categories_list'] = $data['categories_list'] ?? null;
        $this->container['vat_types_list'] = $data['vat_types_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['numerations'] === null) {
            $invalidProperties[] = "'numerations' can't be null";
        }
        if ($this->container['numerations_list'] === null) {
            $invalidProperties[] = "'numerations_list' can't be null";
        }
        if ($this->container['rc_centers_list'] === null) {
            $invalidProperties[] = "'rc_centers_list' can't be null";
        }
        if ($this->container['payment_accounts_list'] === null) {
            $invalidProperties[] = "'payment_accounts_list' can't be null";
        }
        if ($this->container['categories_list'] === null) {
            $invalidProperties[] = "'categories_list' can't be null";
        }
        if ($this->container['vat_types_list'] === null) {
            $invalidProperties[] = "'vat_types_list' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets numerations
     *
     * @return object
     */
    public function getNumerations()
    {
        return $this->container['numerations'];
    }

    /**
     * Sets numerations
     *
     * @param object $numerations Next number by year, receipt type and numeration name.
     *
     * @return self
     */
    public function setNumerations($numerations)
    {
        $this->container['numerations'] = $numerations;

        return $this;
    }

    /**
     * Gets numerations_list
     *
     * @return string[]
     */
    public function getNumerationsList()
    {
        return $this->container['numerations_list'];
    }

    /**
     * Sets numerations_list
     *
     * @param string[] $numerations_list List of series used in the past.
     *
     * @return self
     */
    public function setNumerationsList($numerations_list)
    {
        $this->container['numerations_list'] = $numerations_list;

        return $this;
    }

    /**
     * Gets rc_centers_list
     *
     * @return string[]
     */
    public function getRcCentersList()
    {
        return $this->container['rc_centers_list'];
    }

    /**
     * Sets rc_centers_list
     *
     * @param string[] $rc_centers_list List of revenue centers used in the past.
     *
     * @return self
     */
    public function setRcCentersList($rc_centers_list)
    {
        $this->container['rc_centers_list'] = $rc_centers_list;

        return $this;
    }

    /**
     * Gets payment_accounts_list
     *
     * @return \FattureInCloud\Model\PaymentAccount[]
     */
    public function getPaymentAccountsList()
    {
        return $this->container['payment_accounts_list'];
    }

    /**
     * Sets payment_accounts_list
     *
     * @param \FattureInCloud\Model\PaymentAccount[] $payment_accounts_list User payment accounts list.
     *
     * @return self
     */
    public function setPaymentAccountsList($payment_accounts_list)
    {
        $this->container['payment_accounts_list'] = $payment_accounts_list;

        return $this;
    }

    /**
     * Gets categories_list
     *
     * @return string[]
     */
    public function getCategoriesList()
    {
        return $this->container['categories_list'];
    }

    /**
     * Sets categories_list
     *
     * @param string[] $categories_list List of categories used in the past.
     *
     * @return self
     */
    public function setCategoriesList($categories_list)
    {
        $this->container['categories_list'] = $categories_list;

        return $this;
    }

    /**
     * Gets vat_types_list
     *
     * @return \FattureInCloud\Model\VatType[]
     */
    public function getVatTypesList()
    {
        return $this->container['vat_types_list'];
    }

    /**
     * Sets vat_types_list
     *
     * @param \FattureInCloud\Model\VatType[] $vat_types_list List of user vat types with the default 22%, 10%, 4% and 0% vats.
     *
     * @return self
     */
    public function setVatTypesList($vat_types_list)
    {
        $this->container['vat_types_list'] = $vat_types_list;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link     https://fattureincloud.it
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


