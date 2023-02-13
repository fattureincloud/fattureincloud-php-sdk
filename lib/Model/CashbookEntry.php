<?php
/**
 * CashbookEntry
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
 * The version of the OpenAPI document: 2.0.26
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
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
 * @implements \ArrayAccess<string, mixed>
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
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static $openAPINullables = [
        'id' => true,
            'date' => true,
            'description' => true,
            'kind' => false,
            'type' => true,
            'entity_name' => true,
            'document' => true,
            'amount_in' => true,
            'payment_account_in' => true,
            'amount_out' => true,
            'payment_account_out' => true
    ];

    /**
     * If a nullable field gets set to null, insert it here
     *
     * @var boolean[]
     */
    protected $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull($openAPINullablesSetToNull)
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('entity_name', $data ?? [], null);
        $this->setIfExists('document', $data ?? [], null);
        $this->setIfExists('amount_in', $data ?? [], null);
        $this->setIfExists('payment_account_in', $data ?? [], null);
        $this->setIfExists('amount_out', $data ?? [], null);
        $this->setIfExists('payment_account_out', $data ?? [], null);
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array
     *
     * @param string $variableName
     * @param array  $fields
     * @param mixed  $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($date)) {
            array_push($this->openAPINullablesSetToNull, 'date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind, the accepted values are available in \FattureInCloud\Model\CashbookEntryKind
     *
     * @param string|null $kind kind
     *
     * @return self
     */
    public function setKind($kind)
    {
        if (is_null($kind)) {
            throw new \InvalidArgumentException('non-nullable kind cannot be null');
        }
        $this->container['kind'] = $kind;

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
     * Sets type, the accepted values are available in \FattureInCloud\Model\CashbookEntryType
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($entity_name)) {
            array_push($this->openAPINullablesSetToNull, 'entity_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entity_name', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($document)) {
            array_push($this->openAPINullablesSetToNull, 'document');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('document', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($amount_in)) {
            array_push($this->openAPINullablesSetToNull, 'amount_in');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_in', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($payment_account_in)) {
            array_push($this->openAPINullablesSetToNull, 'payment_account_in');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_account_in', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($amount_out)) {
            array_push($this->openAPINullablesSetToNull, 'amount_out');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_out', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        if (is_null($payment_account_out)) {
            array_push($this->openAPINullablesSetToNull, 'payment_account_out');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_account_out', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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


