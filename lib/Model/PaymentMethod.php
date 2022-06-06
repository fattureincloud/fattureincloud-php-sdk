<?php
/**
 * PaymentMethod
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

use \ArrayAccess;
use \FattureInCloud\ObjectSerializer;

/**
 * PaymentMethod Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'type' => '\FattureInCloud\Model\PaymentMethodType',
        'is_default' => 'bool',
        'default_payment_account' => '\FattureInCloud\Model\PaymentAccount',
        'details' => '\FattureInCloud\Model\PaymentMethodDetails[]',
        'bank_iban' => 'string',
        'bank_name' => 'string',
        'bank_beneficiary' => 'string',
        'ei_payment_method' => 'string'
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
        'name' => null,
        'type' => null,
        'is_default' => null,
        'default_payment_account' => null,
        'details' => null,
        'bank_iban' => null,
        'bank_name' => null,
        'bank_beneficiary' => null,
        'ei_payment_method' => null
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
        'name' => 'name',
        'type' => 'type',
        'is_default' => 'is_default',
        'default_payment_account' => 'default_payment_account',
        'details' => 'details',
        'bank_iban' => 'bank_iban',
        'bank_name' => 'bank_name',
        'bank_beneficiary' => 'bank_beneficiary',
        'ei_payment_method' => 'ei_payment_method'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'is_default' => 'setIsDefault',
        'default_payment_account' => 'setDefaultPaymentAccount',
        'details' => 'setDetails',
        'bank_iban' => 'setBankIban',
        'bank_name' => 'setBankName',
        'bank_beneficiary' => 'setBankBeneficiary',
        'ei_payment_method' => 'setEiPaymentMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'is_default' => 'getIsDefault',
        'default_payment_account' => 'getDefaultPaymentAccount',
        'details' => 'getDetails',
        'bank_iban' => 'getBankIban',
        'bank_name' => 'getBankName',
        'bank_beneficiary' => 'getBankBeneficiary',
        'ei_payment_method' => 'getEiPaymentMethod'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['is_default'] = $data['is_default'] ?? null;
        $this->container['default_payment_account'] = $data['default_payment_account'] ?? null;
        $this->container['details'] = $data['details'] ?? null;
        $this->container['bank_iban'] = $data['bank_iban'] ?? null;
        $this->container['bank_name'] = $data['bank_name'] ?? null;
        $this->container['bank_beneficiary'] = $data['bank_beneficiary'] ?? null;
        $this->container['ei_payment_method'] = $data['ei_payment_method'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['details']) && (count($this->container['details']) > 5)) {
            $invalidProperties[] = "invalid value for 'details', number of items must be less than or equal to 5.";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the payment method
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type, the accepted values are available in \FattureInCloud\Model\PaymentMethodType
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool|null $is_default Determines if this is the default payment method.
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets default_payment_account
     *
     * @return \FattureInCloud\Model\PaymentAccount|null
     */
    public function getDefaultPaymentAccount()
    {
        return $this->container['default_payment_account'];
    }

    /**
     * Sets default_payment_account
     *
     * @param \FattureInCloud\Model\PaymentAccount|null $default_payment_account default_payment_account
     *
     * @return self
     */
    public function setDefaultPaymentAccount($default_payment_account)
    {
        $this->container['default_payment_account'] = $default_payment_account;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \FattureInCloud\Model\PaymentMethodDetails[]|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \FattureInCloud\Model\PaymentMethodDetails[]|null $details Method details rows
     *
     * @return self
     */
    public function setDetails($details)
    {

        if (!is_null($details) && (count($details) > 5)) {
            throw new \InvalidArgumentException('invalid value for $details when calling PaymentMethod., number of items must be less than or equal to 5.');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets bank_iban
     *
     * @return string|null
     */
    public function getBankIban()
    {
        return $this->container['bank_iban'];
    }

    /**
     * Sets bank_iban
     *
     * @param string|null $bank_iban Bank iban
     *
     * @return self
     */
    public function setBankIban($bank_iban)
    {
        $this->container['bank_iban'] = $bank_iban;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name Bank name
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bank_beneficiary
     *
     * @return string|null
     */
    public function getBankBeneficiary()
    {
        return $this->container['bank_beneficiary'];
    }

    /**
     * Sets bank_beneficiary
     *
     * @param string|null $bank_beneficiary Bank beneficiary
     *
     * @return self
     */
    public function setBankBeneficiary($bank_beneficiary)
    {
        $this->container['bank_beneficiary'] = $bank_beneficiary;

        return $this;
    }

    /**
     * Gets ei_payment_method
     *
     * @return string|null
     */
    public function getEiPaymentMethod()
    {
        return $this->container['ei_payment_method'];
    }

    /**
     * Sets ei_payment_method
     *
     * @param string|null $ei_payment_method E-invoice payment method
     *
     * @return self
     */
    public function setEiPaymentMethod($ei_payment_method)
    {
        $this->container['ei_payment_method'] = $ei_payment_method;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


