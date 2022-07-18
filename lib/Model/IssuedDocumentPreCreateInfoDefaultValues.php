<?php
/**
 * IssuedDocumentPreCreateInfoDefaultValues
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
 * IssuedDocumentPreCreateInfoDefaultValues Class Doc Comment
 *
 * @category Class
 * @description Default values for the document.
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class IssuedDocumentPreCreateInfoDefaultValues implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssuedDocumentPreCreateInfo_default_values';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_template' => '\FattureInCloud\Model\DocumentTemplate',
        'dn_template' => '\FattureInCloud\Model\DocumentTemplate',
        'ai_template' => '\FattureInCloud\Model\DocumentTemplate',
        'notes' => 'string',
        'rivalsa' => 'float',
        'cassa' => 'float',
        'withholding_tax' => 'float',
        'withholding_tax_taxable' => 'float',
        'other_withholding_tax' => 'float',
        'use_gross_prices' => 'bool',
        'payment_method' => '\FattureInCloud\Model\PaymentMethod'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_template' => null,
        'dn_template' => null,
        'ai_template' => null,
        'notes' => null,
        'rivalsa' => null,
        'cassa' => null,
        'withholding_tax' => null,
        'withholding_tax_taxable' => null,
        'other_withholding_tax' => null,
        'use_gross_prices' => null,
        'payment_method' => null
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
        'default_template' => 'default_template',
        'dn_template' => 'dn_template',
        'ai_template' => 'ai_template',
        'notes' => 'notes',
        'rivalsa' => 'rivalsa',
        'cassa' => 'cassa',
        'withholding_tax' => 'withholding_tax',
        'withholding_tax_taxable' => 'withholding_tax_taxable',
        'other_withholding_tax' => 'other_withholding_tax',
        'use_gross_prices' => 'use_gross_prices',
        'payment_method' => 'payment_method'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_template' => 'setDefaultTemplate',
        'dn_template' => 'setDnTemplate',
        'ai_template' => 'setAiTemplate',
        'notes' => 'setNotes',
        'rivalsa' => 'setRivalsa',
        'cassa' => 'setCassa',
        'withholding_tax' => 'setWithholdingTax',
        'withholding_tax_taxable' => 'setWithholdingTaxTaxable',
        'other_withholding_tax' => 'setOtherWithholdingTax',
        'use_gross_prices' => 'setUseGrossPrices',
        'payment_method' => 'setPaymentMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_template' => 'getDefaultTemplate',
        'dn_template' => 'getDnTemplate',
        'ai_template' => 'getAiTemplate',
        'notes' => 'getNotes',
        'rivalsa' => 'getRivalsa',
        'cassa' => 'getCassa',
        'withholding_tax' => 'getWithholdingTax',
        'withholding_tax_taxable' => 'getWithholdingTaxTaxable',
        'other_withholding_tax' => 'getOtherWithholdingTax',
        'use_gross_prices' => 'getUseGrossPrices',
        'payment_method' => 'getPaymentMethod'
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
        $this->container['default_template'] = $data['default_template'] ?? null;
        $this->container['dn_template'] = $data['dn_template'] ?? null;
        $this->container['ai_template'] = $data['ai_template'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['rivalsa'] = $data['rivalsa'] ?? null;
        $this->container['cassa'] = $data['cassa'] ?? null;
        $this->container['withholding_tax'] = $data['withholding_tax'] ?? null;
        $this->container['withholding_tax_taxable'] = $data['withholding_tax_taxable'] ?? null;
        $this->container['other_withholding_tax'] = $data['other_withholding_tax'] ?? null;
        $this->container['use_gross_prices'] = $data['use_gross_prices'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
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
     * Gets default_template
     *
     * @return \FattureInCloud\Model\DocumentTemplate|null
     */
    public function getDefaultTemplate()
    {
        return $this->container['default_template'];
    }

    /**
     * Sets default_template
     *
     * @param \FattureInCloud\Model\DocumentTemplate|null $default_template default_template
     *
     * @return self
     */
    public function setDefaultTemplate($default_template)
    {
        $this->container['default_template'] = $default_template;

        return $this;
    }

    /**
     * Gets dn_template
     *
     * @return \FattureInCloud\Model\DocumentTemplate|null
     */
    public function getDnTemplate()
    {
        return $this->container['dn_template'];
    }

    /**
     * Sets dn_template
     *
     * @param \FattureInCloud\Model\DocumentTemplate|null $dn_template dn_template
     *
     * @return self
     */
    public function setDnTemplate($dn_template)
    {
        $this->container['dn_template'] = $dn_template;

        return $this;
    }

    /**
     * Gets ai_template
     *
     * @return \FattureInCloud\Model\DocumentTemplate|null
     */
    public function getAiTemplate()
    {
        return $this->container['ai_template'];
    }

    /**
     * Sets ai_template
     *
     * @param \FattureInCloud\Model\DocumentTemplate|null $ai_template ai_template
     *
     * @return self
     */
    public function setAiTemplate($ai_template)
    {
        $this->container['ai_template'] = $ai_template;

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
     * @param string|null $notes Default notes.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets rivalsa
     *
     * @return float|null
     */
    public function getRivalsa()
    {
        return $this->container['rivalsa'];
    }

    /**
     * Sets rivalsa
     *
     * @param float|null $rivalsa Default rivalsa percentage.
     *
     * @return self
     */
    public function setRivalsa($rivalsa)
    {
        $this->container['rivalsa'] = $rivalsa;

        return $this;
    }

    /**
     * Gets cassa
     *
     * @return float|null
     */
    public function getCassa()
    {
        return $this->container['cassa'];
    }

    /**
     * Sets cassa
     *
     * @param float|null $cassa Default cassa percentage.
     *
     * @return self
     */
    public function setCassa($cassa)
    {
        $this->container['cassa'] = $cassa;

        return $this;
    }

    /**
     * Gets withholding_tax
     *
     * @return float|null
     */
    public function getWithholdingTax()
    {
        return $this->container['withholding_tax'];
    }

    /**
     * Sets withholding_tax
     *
     * @param float|null $withholding_tax Default withholding tax percentage.
     *
     * @return self
     */
    public function setWithholdingTax($withholding_tax)
    {
        $this->container['withholding_tax'] = $withholding_tax;

        return $this;
    }

    /**
     * Gets withholding_tax_taxable
     *
     * @return float|null
     */
    public function getWithholdingTaxTaxable()
    {
        return $this->container['withholding_tax_taxable'];
    }

    /**
     * Sets withholding_tax_taxable
     *
     * @param float|null $withholding_tax_taxable Default withholding tax taxable percentage.
     *
     * @return self
     */
    public function setWithholdingTaxTaxable($withholding_tax_taxable)
    {
        $this->container['withholding_tax_taxable'] = $withholding_tax_taxable;

        return $this;
    }

    /**
     * Gets other_withholding_tax
     *
     * @return float|null
     */
    public function getOtherWithholdingTax()
    {
        return $this->container['other_withholding_tax'];
    }

    /**
     * Sets other_withholding_tax
     *
     * @param float|null $other_withholding_tax Default other withholding tax percentage.
     *
     * @return self
     */
    public function setOtherWithholdingTax($other_withholding_tax)
    {
        $this->container['other_withholding_tax'] = $other_withholding_tax;

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
     * @param bool|null $use_gross_prices Use gross price by default.
     *
     * @return self
     */
    public function setUseGrossPrices($use_gross_prices)
    {
        $this->container['use_gross_prices'] = $use_gross_prices;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \FattureInCloud\Model\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \FattureInCloud\Model\PaymentMethod|null $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

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


