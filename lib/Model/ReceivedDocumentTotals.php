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
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 400.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.
 *
 * The version of the OpenAPI document: 2.0.19
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
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
 * @description 
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
    public function __construct(array $data = null)
    {
        $this->container['amount_net'] = $data['amount_net'] ?? null;
        $this->container['amount_vat'] = $data['amount_vat'] ?? null;
        $this->container['amount_gross'] = $data['amount_gross'] ?? null;
        $this->container['amount_withholding_tax'] = $data['amount_withholding_tax'] ?? null;
        $this->container['amount_other_withholding_tax'] = $data['amount_other_withholding_tax'] ?? null;
        $this->container['amount_due'] = $data['amount_due'] ?? null;
        $this->container['payments_sum'] = $data['payments_sum'] ?? null;
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
     * @param float|null $amount_withholding_tax Total withholding tax amount.
     *
     * @return self
     */
    public function setAmountWithholdingTax($amount_withholding_tax)
    {
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
     * @param float|null $amount_other_withholding_tax Total other withholding tax amount.
     *
     * @return self
     */
    public function setAmountOtherWithholdingTax($amount_other_withholding_tax)
    {
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
     * @param float|null $amount_due Total amount due.
     *
     * @return self
     */
    public function setAmountDue($amount_due)
    {
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
     * @param float|null $payments_sum Payments sum.
     *
     * @return self
     */
    public function setPaymentsSum($payments_sum)
    {
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


