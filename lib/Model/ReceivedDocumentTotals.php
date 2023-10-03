<?php
/**
 * ReceivedDocumentTotals
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
 * The version of the OpenAPI document: 2.0.30
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
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
 * ReceivedDocumentTotals Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class ReceivedDocumentTotals implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReceivedDocumentTotals';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount_net' => 'float',
        'amount_vat' => 'float',
        'amount_gross' => 'float',
        'amount_withholding_tax' => 'float',
        'amount_other_withholding_tax' => 'float',
        'amount_due' => 'float',
        'payments_sum' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount_net' => null,
        'amount_vat' => null,
        'amount_gross' => null,
        'amount_withholding_tax' => null,
        'amount_other_withholding_tax' => null,
        'amount_due' => null,
        'payments_sum' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'amount_net' => true,
            'amount_vat' => true,
            'amount_gross' => true,
            'amount_withholding_tax' => true,
            'amount_other_withholding_tax' => true,
            'amount_due' => true,
            'payments_sum' => true
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
    private function setOpenAPINullablesSetToNull($openAPINullablesSetToNull): void
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
        'amount_net' => 'amount_net',
        'amount_vat' => 'amount_vat',
        'amount_gross' => 'amount_gross',
        'amount_withholding_tax' => 'amount_withholding_tax',
        'amount_other_withholding_tax' => 'amount_other_withholding_tax',
        'amount_due' => 'amount_due',
        'payments_sum' => 'payments_sum'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_net' => 'setAmountNet',
        'amount_vat' => 'setAmountVat',
        'amount_gross' => 'setAmountGross',
        'amount_withholding_tax' => 'setAmountWithholdingTax',
        'amount_other_withholding_tax' => 'setAmountOtherWithholdingTax',
        'amount_due' => 'setAmountDue',
        'payments_sum' => 'setPaymentsSum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_net' => 'getAmountNet',
        'amount_vat' => 'getAmountVat',
        'amount_gross' => 'getAmountGross',
        'amount_withholding_tax' => 'getAmountWithholdingTax',
        'amount_other_withholding_tax' => 'getAmountOtherWithholdingTax',
        'amount_due' => 'getAmountDue',
        'payments_sum' => 'getPaymentsSum'
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
    public function __construct($data = null)
    {
        $this->setIfExists('amount_net', $data ?? [], null);
        $this->setIfExists('amount_vat', $data ?? [], null);
        $this->setIfExists('amount_gross', $data ?? [], null);
        $this->setIfExists('amount_withholding_tax', $data ?? [], null);
        $this->setIfExists('amount_other_withholding_tax', $data ?? [], null);
        $this->setIfExists('amount_due', $data ?? [], null);
        $this->setIfExists('payments_sum', $data ?? [], null);
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
    private function setIfExists(string $variableName, $fields, $defaultValue): void
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
     * @param float|null $amount_net Received document total net amount
     *
     * @return self
     */
    public function setAmountNet($amount_net)
    {
        if (is_null($amount_net)) {
            array_push($this->openAPINullablesSetToNull, 'amount_net');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_net', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
     * @param float|null $amount_vat Received document total vat amount
     *
     * @return self
     */
    public function setAmountVat($amount_vat)
    {
        if (is_null($amount_vat)) {
            array_push($this->openAPINullablesSetToNull, 'amount_vat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_vat', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
     * @param float|null $amount_gross Received document total gross amount
     *
     * @return self
     */
    public function setAmountGross($amount_gross)
    {
        if (is_null($amount_gross)) {
            array_push($this->openAPINullablesSetToNull, 'amount_gross');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_gross', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_gross'] = $amount_gross;

        return $this;
    }

    /**
     * Gets amount_withholding_tax
     *
     * @return float|null
     */
    public function getAmountWithholdingTax()
    {
        return $this->container['amount_withholding_tax'];
    }

    /**
     * Sets amount_withholding_tax
     *
     * @param float|null $amount_withholding_tax Received document withholding tax amount
     *
     * @return self
     */
    public function setAmountWithholdingTax($amount_withholding_tax)
    {
        if (is_null($amount_withholding_tax)) {
            array_push($this->openAPINullablesSetToNull, 'amount_withholding_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_withholding_tax', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_withholding_tax'] = $amount_withholding_tax;

        return $this;
    }

    /**
     * Gets amount_other_withholding_tax
     *
     * @return float|null
     */
    public function getAmountOtherWithholdingTax()
    {
        return $this->container['amount_other_withholding_tax'];
    }

    /**
     * Sets amount_other_withholding_tax
     *
     * @param float|null $amount_other_withholding_tax Received document other withholding tax amount
     *
     * @return self
     */
    public function setAmountOtherWithholdingTax($amount_other_withholding_tax)
    {
        if (is_null($amount_other_withholding_tax)) {
            array_push($this->openAPINullablesSetToNull, 'amount_other_withholding_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_other_withholding_tax', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_other_withholding_tax'] = $amount_other_withholding_tax;

        return $this;
    }

    /**
     * Gets amount_due
     *
     * @return float|null
     */
    public function getAmountDue()
    {
        return $this->container['amount_due'];
    }

    /**
     * Sets amount_due
     *
     * @param float|null $amount_due Received document total amount due
     *
     * @return self
     */
    public function setAmountDue($amount_due)
    {
        if (is_null($amount_due)) {
            array_push($this->openAPINullablesSetToNull, 'amount_due');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_due', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_due'] = $amount_due;

        return $this;
    }

    /**
     * Gets payments_sum
     *
     * @return float|null
     */
    public function getPaymentsSum()
    {
        return $this->container['payments_sum'];
    }

    /**
     * Sets payments_sum
     *
     * @param float|null $payments_sum Received document payments sum
     *
     * @return self
     */
    public function setPaymentsSum($payments_sum)
    {
        if (is_null($payments_sum)) {
            array_push($this->openAPINullablesSetToNull, 'payments_sum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payments_sum', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payments_sum'] = $payments_sum;

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


