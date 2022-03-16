<?php
/**
 * ReceivedDocumentInfo
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
 * The version of the OpenAPI document: 2.0.14
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * ReceivedDocumentInfo Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReceivedDocumentInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReceivedDocumentInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_values' => '\FattureInCloud\Model\ReceivedDocumentInfoDefaultValues',
        'items_default_values' => '\FattureInCloud\Model\ReceivedDocumentInfoItemsDefaultValues',
        'countries_list' => 'string[]',
        'currencies_list' => '\FattureInCloud\Model\Currency[]',
        'categories_list' => 'string[]',
        'payment_accounts_list' => '\FattureInCloud\Model\PaymentAccount[]',
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
        'default_values' => null,
        'items_default_values' => null,
        'countries_list' => null,
        'currencies_list' => null,
        'categories_list' => null,
        'payment_accounts_list' => null,
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
        'default_values' => 'default_values',
        'items_default_values' => 'items_default_values',
        'countries_list' => 'countries_list',
        'currencies_list' => 'currencies_list',
        'categories_list' => 'categories_list',
        'payment_accounts_list' => 'payment_accounts_list',
        'vat_types_list' => 'vat_types_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_values' => 'setDefaultValues',
        'items_default_values' => 'setItemsDefaultValues',
        'countries_list' => 'setCountriesList',
        'currencies_list' => 'setCurrenciesList',
        'categories_list' => 'setCategoriesList',
        'payment_accounts_list' => 'setPaymentAccountsList',
        'vat_types_list' => 'setVatTypesList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_values' => 'getDefaultValues',
        'items_default_values' => 'getItemsDefaultValues',
        'countries_list' => 'getCountriesList',
        'currencies_list' => 'getCurrenciesList',
        'categories_list' => 'getCategoriesList',
        'payment_accounts_list' => 'getPaymentAccountsList',
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
        $this->container['default_values'] = $data['default_values'] ?? null;
        $this->container['items_default_values'] = $data['items_default_values'] ?? null;
        $this->container['countries_list'] = $data['countries_list'] ?? null;
        $this->container['currencies_list'] = $data['currencies_list'] ?? null;
        $this->container['categories_list'] = $data['categories_list'] ?? null;
        $this->container['payment_accounts_list'] = $data['payment_accounts_list'] ?? null;
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
     * Gets default_values
     *
     * @return \FattureInCloud\Model\ReceivedDocumentInfoDefaultValues|null
     */
    public function getDefaultValues()
    {
        return $this->container['default_values'];
    }

    /**
     * Sets default_values
     *
     * @param \FattureInCloud\Model\ReceivedDocumentInfoDefaultValues|null $default_values default_values
     *
     * @return self
     */
    public function setDefaultValues($default_values)
    {
        $this->container['default_values'] = $default_values;

        return $this;
    }

    /**
     * Gets items_default_values
     *
     * @return \FattureInCloud\Model\ReceivedDocumentInfoItemsDefaultValues|null
     */
    public function getItemsDefaultValues()
    {
        return $this->container['items_default_values'];
    }

    /**
     * Sets items_default_values
     *
     * @param \FattureInCloud\Model\ReceivedDocumentInfoItemsDefaultValues|null $items_default_values items_default_values
     *
     * @return self
     */
    public function setItemsDefaultValues($items_default_values)
    {
        $this->container['items_default_values'] = $items_default_values;

        return $this;
    }

    /**
     * Gets countries_list
     *
     * @return string[]|null
     */
    public function getCountriesList()
    {
        return $this->container['countries_list'];
    }

    /**
     * Sets countries_list
     *
     * @param string[]|null $countries_list countries_list
     *
     * @return self
     */
    public function setCountriesList($countries_list)
    {
        $this->container['countries_list'] = $countries_list;

        return $this;
    }

    /**
     * Gets currencies_list
     *
     * @return \FattureInCloud\Model\Currency[]|null
     */
    public function getCurrenciesList()
    {
        return $this->container['currencies_list'];
    }

    /**
     * Sets currencies_list
     *
     * @param \FattureInCloud\Model\Currency[]|null $currencies_list currencies_list
     *
     * @return self
     */
    public function setCurrenciesList($currencies_list)
    {
        $this->container['currencies_list'] = $currencies_list;

        return $this;
    }

    /**
     * Gets categories_list
     *
     * @return string[]|null
     */
    public function getCategoriesList()
    {
        return $this->container['categories_list'];
    }

    /**
     * Sets categories_list
     *
     * @param string[]|null $categories_list categories_list
     *
     * @return self
     */
    public function setCategoriesList($categories_list)
    {
        $this->container['categories_list'] = $categories_list;

        return $this;
    }

    /**
     * Gets payment_accounts_list
     *
     * @return \FattureInCloud\Model\PaymentAccount[]|null
     */
    public function getPaymentAccountsList()
    {
        return $this->container['payment_accounts_list'];
    }

    /**
     * Sets payment_accounts_list
     *
     * @param \FattureInCloud\Model\PaymentAccount[]|null $payment_accounts_list payment_accounts_list
     *
     * @return self
     */
    public function setPaymentAccountsList($payment_accounts_list)
    {
        $this->container['payment_accounts_list'] = $payment_accounts_list;

        return $this;
    }

    /**
     * Gets vat_types_list
     *
     * @return \FattureInCloud\Model\VatType[]|null
     */
    public function getVatTypesList()
    {
        return $this->container['vat_types_list'];
    }

    /**
     * Sets vat_types_list
     *
     * @param \FattureInCloud\Model\VatType[]|null $vat_types_list vat_types_list
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


