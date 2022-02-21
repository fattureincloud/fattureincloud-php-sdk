<?php
/**
 * CashbookEntry
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
 * The version of the OpenAPI document: 2.0.12
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
 * CashbookEntry Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CashbookEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashbookEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'date' => '\DateTime',
        'description' => 'string',
        'kind' => '\FattureInCloud\Model\CashbookEntryKind',
        'type' => '\FattureInCloud\Model\CashbookEntryType',
        'entity_name' => 'string',
        'document' => '\FattureInCloud\Model\CashbookEntryDocument',
        'amount_in' => 'float',
        'payment_account_in' => '\FattureInCloud\Model\PaymentAccount',
        'amount_out' => 'float',
        'payment_account_out' => '\FattureInCloud\Model\PaymentAccount'
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
        'date' => 'date',
        'description' => null,
        'kind' => null,
        'type' => null,
        'entity_name' => null,
        'document' => null,
        'amount_in' => null,
        'payment_account_in' => null,
        'amount_out' => null,
        'payment_account_out' => null
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
        'date' => 'date',
        'description' => 'description',
        'kind' => 'kind',
        'type' => 'type',
        'entity_name' => 'entity_name',
        'document' => 'document',
        'amount_in' => 'amount_in',
        'payment_account_in' => 'payment_account_in',
        'amount_out' => 'amount_out',
        'payment_account_out' => 'payment_account_out'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date' => 'setDate',
        'description' => 'setDescription',
        'kind' => 'setKind',
        'type' => 'setType',
        'entity_name' => 'setEntityName',
        'document' => 'setDocument',
        'amount_in' => 'setAmountIn',
        'payment_account_in' => 'setPaymentAccountIn',
        'amount_out' => 'setAmountOut',
        'payment_account_out' => 'setPaymentAccountOut'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date' => 'getDate',
        'description' => 'getDescription',
        'kind' => 'getKind',
        'type' => 'getType',
        'entity_name' => 'getEntityName',
        'document' => 'getDocument',
        'amount_in' => 'getAmountIn',
        'payment_account_in' => 'getPaymentAccountIn',
        'amount_out' => 'getAmountOut',
        'payment_account_out' => 'getPaymentAccountOut'
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
        $this->container['date'] = $data['date'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['kind'] = $data['kind'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['entity_name'] = $data['entity_name'] ?? null;
        $this->container['document'] = $data['document'] ?? null;
        $this->container['amount_in'] = $data['amount_in'] ?? null;
        $this->container['payment_account_in'] = $data['payment_account_in'] ?? null;
        $this->container['amount_out'] = $data['amount_out'] ?? null;
        $this->container['payment_account_out'] = $data['payment_account_out'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Cashbook unique identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Cashbook date.
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * @param string|null $description Cashbook description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return \FattureInCloud\Model\CashbookEntryKind|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param \FattureInCloud\Model\CashbookEntryKind|null $kind kind
     *
     * @return self
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \FattureInCloud\Model\CashbookEntryType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \FattureInCloud\Model\CashbookEntryType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets entity_name
     *
     * @return string|null
     */
    public function getEntityName()
    {
        return $this->container['entity_name'];
    }

    /**
     * Sets entity_name
     *
     * @param string|null $entity_name Entity name.
     *
     * @return self
     */
    public function setEntityName($entity_name)
    {
        $this->container['entity_name'] = $entity_name;

        return $this;
    }

    /**
     * Gets document
     *
     * @return \FattureInCloud\Model\CashbookEntryDocument|null
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param \FattureInCloud\Model\CashbookEntryDocument|null $document document
     *
     * @return self
     */
    public function setDocument($document)
    {
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets amount_in
     *
     * @return float|null
     */
    public function getAmountIn()
    {
        return $this->container['amount_in'];
    }

    /**
     * Sets amount_in
     *
     * @param float|null $amount_in [Only for cashbook entry in] Total amount in.
     *
     * @return self
     */
    public function setAmountIn($amount_in)
    {
        $this->container['amount_in'] = $amount_in;

        return $this;
    }

    /**
     * Gets payment_account_in
     *
     * @return \FattureInCloud\Model\PaymentAccount|null
     */
    public function getPaymentAccountIn()
    {
        return $this->container['payment_account_in'];
    }

    /**
     * Sets payment_account_in
     *
     * @param \FattureInCloud\Model\PaymentAccount|null $payment_account_in payment_account_in
     *
     * @return self
     */
    public function setPaymentAccountIn($payment_account_in)
    {
        $this->container['payment_account_in'] = $payment_account_in;

        return $this;
    }

    /**
     * Gets amount_out
     *
     * @return float|null
     */
    public function getAmountOut()
    {
        return $this->container['amount_out'];
    }

    /**
     * Sets amount_out
     *
     * @param float|null $amount_out [Only for cashbook entry out] Total amount out.
     *
     * @return self
     */
    public function setAmountOut($amount_out)
    {
        $this->container['amount_out'] = $amount_out;

        return $this;
    }

    /**
     * Gets payment_account_out
     *
     * @return \FattureInCloud\Model\PaymentAccount|null
     */
    public function getPaymentAccountOut()
    {
        return $this->container['payment_account_out'];
    }

    /**
     * Sets payment_account_out
     *
     * @param \FattureInCloud\Model\PaymentAccount|null $payment_account_out payment_account_out
     *
     * @return self
     */
    public function setPaymentAccountOut($payment_account_out)
    {
        $this->container['payment_account_out'] = $payment_account_out;

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


