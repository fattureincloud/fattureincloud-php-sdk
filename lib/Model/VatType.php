<?php
/**
 * VatType
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
 * The version of the OpenAPI document: 2.0.10
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
 * VatType Class Doc Comment
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
class VatType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VatType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'value' => 'float',
        'description' => 'string',
        'notes' => 'string',
        'e_invoice' => 'bool',
        'ei_type' => 'string',
        'ei_description' => 'string',
        'editable' => 'bool',
        'is_disabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'value' => null,
        'description' => null,
        'notes' => null,
        'e_invoice' => null,
        'ei_type' => null,
        'ei_description' => null,
        'editable' => null,
        'is_disabled' => null
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
        'id' => 'id',
        'value' => 'value',
        'description' => 'description',
        'notes' => 'notes',
        'e_invoice' => 'e_invoice',
        'ei_type' => 'ei_type',
        'ei_description' => 'ei_description',
        'editable' => 'editable',
        'is_disabled' => 'is_disabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'value' => 'setValue',
        'description' => 'setDescription',
        'notes' => 'setNotes',
        'e_invoice' => 'setEInvoice',
        'ei_type' => 'setEiType',
        'ei_description' => 'setEiDescription',
        'editable' => 'setEditable',
        'is_disabled' => 'setIsDisabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'value' => 'getValue',
        'description' => 'getDescription',
        'notes' => 'getNotes',
        'e_invoice' => 'getEInvoice',
        'ei_type' => 'getEiType',
        'ei_description' => 'getEiDescription',
        'editable' => 'getEditable',
        'is_disabled' => 'getIsDisabled'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['e_invoice'] = $data['e_invoice'] ?? null;
        $this->container['ei_type'] = $data['ei_type'] ?? null;
        $this->container['ei_description'] = $data['ei_description'] ?? null;
        $this->container['editable'] = $data['editable'] ?? true;
        $this->container['is_disabled'] = $data['is_disabled'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if (($this->container['value'] > 100)) {
            $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 100.";
        }

        if (($this->container['value'] < 0)) {
            $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to 0.";
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Unique identifier
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value [Read Only] Percentual value.
     *
     * @return self
     */
    public function setValue($value)
    {

        if (($value > 100)) {
            throw new \InvalidArgumentException('invalid value for $value when calling VatType., must be smaller than or equal to 100.');
        }
        if (($value < 0)) {
            throw new \InvalidArgumentException('invalid value for $value when calling VatType., must be bigger than or equal to 0.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Short description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Long description and notes shown in documents.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets e_invoice
     *
     * @return bool|null
     */
    public function getEInvoice()
    {
        return $this->container['e_invoice'];
    }

    /**
     * Sets e_invoice
     *
     * @param bool|null $e_invoice Usable for e-invoices.
     *
     * @return self
     */
    public function setEInvoice($e_invoice)
    {
        $this->container['e_invoice'] = $e_invoice;

        return $this;
    }

    /**
     * Gets ei_type
     *
     * @return string|null
     */
    public function getEiType()
    {
        return $this->container['ei_type'];
    }

    /**
     * Sets ei_type
     *
     * @param string|null $ei_type E-invoice type (natura).
     *
     * @return self
     */
    public function setEiType($ei_type)
    {
        $this->container['ei_type'] = $ei_type;

        return $this;
    }

    /**
     * Gets ei_description
     *
     * @return string|null
     */
    public function getEiDescription()
    {
        return $this->container['ei_description'];
    }

    /**
     * Sets ei_description
     *
     * @param string|null $ei_description E-invoice description.
     *
     * @return self
     */
    public function setEiDescription($ei_description)
    {
        $this->container['ei_description'] = $ei_description;

        return $this;
    }

    /**
     * Gets editable
     *
     * @return bool|null
     */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
     * Sets editable
     *
     * @param bool|null $editable [Read Only] Determine if this vat type is editable.
     *
     * @return self
     */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;

        return $this;
    }

    /**
     * Gets is_disabled
     *
     * @return bool|null
     */
    public function getIsDisabled()
    {
        return $this->container['is_disabled'];
    }

    /**
     * Sets is_disabled
     *
     * @param bool|null $is_disabled Determine if the vat type is disabled.
     *
     * @return self
     */
    public function setIsDisabled($is_disabled)
    {
        $this->container['is_disabled'] = $is_disabled;

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


