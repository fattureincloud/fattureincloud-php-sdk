<?php
/**
 * Receipt
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
 * The version of the OpenAPI document: 2.0.5
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
 * Receipt Class Doc Comment
 *
 * @category Class
 * @description Receipt
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Receipt implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Receipt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'date' => '\DateTime',
        'number' => 'float',
        'numeration' => 'string',
        'amount_net' => 'float',
        'amount_vat' => 'float',
        'amount_gross' => 'float',
        'use_gross_prices' => 'bool',
        'type' => '\FattureInCloud\Model\ReceiptType',
        'description' => 'string',
        'rc_center' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'payment_account' => '\FattureInCloud\Model\PaymentAccount',
        'items_list' => '\FattureInCloud\Model\ReceiptItemsListItem[]'
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
        'number' => null,
        'numeration' => null,
        'amount_net' => null,
        'amount_vat' => null,
        'amount_gross' => null,
        'use_gross_prices' => null,
        'type' => null,
        'description' => null,
        'rc_center' => null,
        'created_at' => null,
        'updated_at' => null,
        'payment_account' => null,
        'items_list' => null
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
        'number' => 'number',
        'numeration' => 'numeration',
        'amount_net' => 'amount_net',
        'amount_vat' => 'amount_vat',
        'amount_gross' => 'amount_gross',
        'use_gross_prices' => 'use_gross_prices',
        'type' => 'type',
        'description' => 'description',
        'rc_center' => 'rc_center',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'payment_account' => 'payment_account',
        'items_list' => 'items_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date' => 'setDate',
        'number' => 'setNumber',
        'numeration' => 'setNumeration',
        'amount_net' => 'setAmountNet',
        'amount_vat' => 'setAmountVat',
        'amount_gross' => 'setAmountGross',
        'use_gross_prices' => 'setUseGrossPrices',
        'type' => 'setType',
        'description' => 'setDescription',
        'rc_center' => 'setRcCenter',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'payment_account' => 'setPaymentAccount',
        'items_list' => 'setItemsList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date' => 'getDate',
        'number' => 'getNumber',
        'numeration' => 'getNumeration',
        'amount_net' => 'getAmountNet',
        'amount_vat' => 'getAmountVat',
        'amount_gross' => 'getAmountGross',
        'use_gross_prices' => 'getUseGrossPrices',
        'type' => 'getType',
        'description' => 'getDescription',
        'rc_center' => 'getRcCenter',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'payment_account' => 'getPaymentAccount',
        'items_list' => 'getItemsList'
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
        $this->container['number'] = $data['number'] ?? null;
        $this->container['numeration'] = $data['numeration'] ?? null;
        $this->container['amount_net'] = $data['amount_net'] ?? null;
        $this->container['amount_vat'] = $data['amount_vat'] ?? null;
        $this->container['amount_gross'] = $data['amount_gross'] ?? null;
        $this->container['use_gross_prices'] = $data['use_gross_prices'] ?? false;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['rc_center'] = $data['rc_center'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['payment_account'] = $data['payment_account'] ?? null;
        $this->container['items_list'] = $data['items_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['payment_account'] === null) {
            $invalidProperties[] = "'payment_account' can't be null";
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
     * @param int|null $id Receipt unique identifier.
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
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Receipt date.
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets number
     *
     * @return float|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param float|null $number Receipt number.
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets numeration
     *
     * @return string|null
     */
    public function getNumeration()
    {
        return $this->container['numeration'];
    }

    /**
     * Sets numeration
     *
     * @param string|null $numeration If it's null or empty string use the default numeration.
     *
     * @return self
     */
    public function setNumeration($numeration)
    {
        $this->container['numeration'] = $numeration;

        return $this;
    }

    /**
     * Gets amount_net
     *
     * @return float|null
     */
    public function getAmountNet()
    {
        return $this->container['amount_net'];
    }

    /**
     * Sets amount_net
     *
     * @param float|null $amount_net Total net amount.
     *
     * @return self
     */
    public function setAmountNet($amount_net)
    {
        $this->container['amount_net'] = $amount_net;

        return $this;
    }

    /**
     * Gets amount_vat
     *
     * @return float|null
     */
    public function getAmountVat()
    {
        return $this->container['amount_vat'];
    }

    /**
     * Sets amount_vat
     *
     * @param float|null $amount_vat Total vat amount.
     *
     * @return self
     */
    public function setAmountVat($amount_vat)
    {
        $this->container['amount_vat'] = $amount_vat;

        return $this;
    }

    /**
     * Gets amount_gross
     *
     * @return float|null
     */
    public function getAmountGross()
    {
        return $this->container['amount_gross'];
    }

    /**
     * Sets amount_gross
     *
     * @param float|null $amount_gross Total gross amount.
     *
     * @return self
     */
    public function setAmountGross($amount_gross)
    {
        $this->container['amount_gross'] = $amount_gross;

        return $this;
    }

    /**
     * Gets use_gross_prices
     *
     * @return bool|null
     */
    public function getUseGrossPrices()
    {
        return $this->container['use_gross_prices'];
    }

    /**
     * Sets use_gross_prices
     *
     * @param bool|null $use_gross_prices use_gross_prices
     *
     * @return self
     */
    public function setUseGrossPrices($use_gross_prices)
    {
        $this->container['use_gross_prices'] = $use_gross_prices;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \FattureInCloud\Model\ReceiptType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \FattureInCloud\Model\ReceiptType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string|null $description Receipt description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets rc_center
     *
     * @return string|null
     */
    public function getRcCenter()
    {
        return $this->container['rc_center'];
    }

    /**
     * Sets rc_center
     *
     * @param string|null $rc_center Revenue center.
     *
     * @return self
     */
    public function setRcCenter($rc_center)
    {
        $this->container['rc_center'] = $rc_center;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets payment_account
     *
     * @return \FattureInCloud\Model\PaymentAccount
     */
    public function getPaymentAccount()
    {
        return $this->container['payment_account'];
    }

    /**
     * Sets payment_account
     *
     * @param \FattureInCloud\Model\PaymentAccount $payment_account payment_account
     *
     * @return self
     */
    public function setPaymentAccount($payment_account)
    {
        $this->container['payment_account'] = $payment_account;

        return $this;
    }

    /**
     * Gets items_list
     *
     * @return \FattureInCloud\Model\ReceiptItemsListItem[]|null
     */
    public function getItemsList()
    {
        return $this->container['items_list'];
    }

    /**
     * Sets items_list
     *
     * @param \FattureInCloud\Model\ReceiptItemsListItem[]|null $items_list items_list
     *
     * @return self
     */
    public function setItemsList($items_list)
    {
        $this->container['items_list'] = $items_list;

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


