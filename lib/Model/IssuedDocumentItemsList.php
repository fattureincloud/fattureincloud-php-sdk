<?php
/**
 * IssuedDocumentItemsList
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
 * The version of the OpenAPI document: 2.0.9
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
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
 * IssuedDocumentItemsList Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IssuedDocumentItemsList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssuedDocument_items_list';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_id' => 'int',
        'code' => 'string',
        'name' => 'string',
        'category' => 'string',
        'description' => 'string',
        'qty' => 'float',
        'measure' => 'string',
        'net_price' => 'float',
        'gross_price' => 'float',
        'vat' => '\FattureInCloud\Model\VatType',
        'not_taxable' => 'bool',
        'apply_withholding_taxes' => 'bool',
        'discount' => 'float',
        'discount_highlight' => 'bool',
        'in_ddt' => 'bool',
        'stock' => 'bool',
        'ei_raw' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_id' => null,
        'code' => null,
        'name' => null,
        'category' => null,
        'description' => null,
        'qty' => null,
        'measure' => null,
        'net_price' => null,
        'gross_price' => null,
        'vat' => null,
        'not_taxable' => null,
        'apply_withholding_taxes' => null,
        'discount' => null,
        'discount_highlight' => null,
        'in_ddt' => null,
        'stock' => null,
        'ei_raw' => null
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
        'product_id' => 'product_id',
        'code' => 'code',
        'name' => 'name',
        'category' => 'category',
        'description' => 'description',
        'qty' => 'qty',
        'measure' => 'measure',
        'net_price' => 'net_price',
        'gross_price' => 'gross_price',
        'vat' => 'vat',
        'not_taxable' => 'not_taxable',
        'apply_withholding_taxes' => 'apply_withholding_taxes',
        'discount' => 'discount',
        'discount_highlight' => 'discount_highlight',
        'in_ddt' => 'in_ddt',
        'stock' => 'stock',
        'ei_raw' => 'ei_raw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'code' => 'setCode',
        'name' => 'setName',
        'category' => 'setCategory',
        'description' => 'setDescription',
        'qty' => 'setQty',
        'measure' => 'setMeasure',
        'net_price' => 'setNetPrice',
        'gross_price' => 'setGrossPrice',
        'vat' => 'setVat',
        'not_taxable' => 'setNotTaxable',
        'apply_withholding_taxes' => 'setApplyWithholdingTaxes',
        'discount' => 'setDiscount',
        'discount_highlight' => 'setDiscountHighlight',
        'in_ddt' => 'setInDdt',
        'stock' => 'setStock',
        'ei_raw' => 'setEiRaw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'code' => 'getCode',
        'name' => 'getName',
        'category' => 'getCategory',
        'description' => 'getDescription',
        'qty' => 'getQty',
        'measure' => 'getMeasure',
        'net_price' => 'getNetPrice',
        'gross_price' => 'getGrossPrice',
        'vat' => 'getVat',
        'not_taxable' => 'getNotTaxable',
        'apply_withholding_taxes' => 'getApplyWithholdingTaxes',
        'discount' => 'getDiscount',
        'discount_highlight' => 'getDiscountHighlight',
        'in_ddt' => 'getInDdt',
        'stock' => 'getStock',
        'ei_raw' => 'getEiRaw'
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
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['measure'] = $data['measure'] ?? null;
        $this->container['net_price'] = $data['net_price'] ?? null;
        $this->container['gross_price'] = $data['gross_price'] ?? null;
        $this->container['vat'] = $data['vat'] ?? null;
        $this->container['not_taxable'] = $data['not_taxable'] ?? false;
        $this->container['apply_withholding_taxes'] = $data['apply_withholding_taxes'] ?? true;
        $this->container['discount'] = $data['discount'] ?? null;
        $this->container['discount_highlight'] = $data['discount_highlight'] ?? false;
        $this->container['in_ddt'] = $data['in_ddt'] ?? true;
        $this->container['stock'] = $data['stock'] ?? null;
        $this->container['ei_raw'] = $data['ei_raw'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['discount']) && ($this->container['discount'] > 100)) {
            $invalidProperties[] = "invalid value for 'discount', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['discount']) && ($this->container['discount'] < 0)) {
            $invalidProperties[] = "invalid value for 'discount', must be bigger than or equal to 0.";
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
     * Gets product_id
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int|null $product_id Unique identifier of the product.
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Product code.
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param string|null $name Product name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Product category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * @param string|null $description Product description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return float|null
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param float|null $qty Items quantity,
     *
     * @return self
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets measure
     *
     * @return string|null
     */
    public function getMeasure()
    {
        return $this->container['measure'];
    }

    /**
     * Sets measure
     *
     * @param string|null $measure Item measure.
     *
     * @return self
     */
    public function setMeasure($measure)
    {
        $this->container['measure'] = $measure;

        return $this;
    }

    /**
     * Gets net_price
     *
     * @return float|null
     */
    public function getNetPrice()
    {
        return $this->container['net_price'];
    }

    /**
     * Sets net_price
     *
     * @param float|null $net_price Net price.
     *
     * @return self
     */
    public function setNetPrice($net_price)
    {
        $this->container['net_price'] = $net_price;

        return $this;
    }

    /**
     * Gets gross_price
     *
     * @return float|null
     */
    public function getGrossPrice()
    {
        return $this->container['gross_price'];
    }

    /**
     * Sets gross_price
     *
     * @param float|null $gross_price Gross price.
     *
     * @return self
     */
    public function setGrossPrice($gross_price)
    {
        $this->container['gross_price'] = $gross_price;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return \FattureInCloud\Model\VatType|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param \FattureInCloud\Model\VatType|null $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets not_taxable
     *
     * @return bool|null
     */
    public function getNotTaxable()
    {
        return $this->container['not_taxable'];
    }

    /**
     * Sets not_taxable
     *
     * @param bool|null $not_taxable not_taxable
     *
     * @return self
     */
    public function setNotTaxable($not_taxable)
    {
        $this->container['not_taxable'] = $not_taxable;

        return $this;
    }

    /**
     * Gets apply_withholding_taxes
     *
     * @return bool|null
     */
    public function getApplyWithholdingTaxes()
    {
        return $this->container['apply_withholding_taxes'];
    }

    /**
     * Sets apply_withholding_taxes
     *
     * @param bool|null $apply_withholding_taxes Apply withholding taxes, rivalsa and cassa.
     *
     * @return self
     */
    public function setApplyWithholdingTaxes($apply_withholding_taxes)
    {
        $this->container['apply_withholding_taxes'] = $apply_withholding_taxes;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float|null $discount Discount percentual value.
     *
     * @return self
     */
    public function setDiscount($discount)
    {

        if (!is_null($discount) && ($discount > 100)) {
            throw new \InvalidArgumentException('invalid value for $discount when calling IssuedDocumentItemsList., must be smaller than or equal to 100.');
        }
        if (!is_null($discount) && ($discount < 0)) {
            throw new \InvalidArgumentException('invalid value for $discount when calling IssuedDocumentItemsList., must be bigger than or equal to 0.');
        }

        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets discount_highlight
     *
     * @return bool|null
     */
    public function getDiscountHighlight()
    {
        return $this->container['discount_highlight'];
    }

    /**
     * Sets discount_highlight
     *
     * @param bool|null $discount_highlight discount_highlight
     *
     * @return self
     */
    public function setDiscountHighlight($discount_highlight)
    {
        $this->container['discount_highlight'] = $discount_highlight;

        return $this;
    }

    /**
     * Gets in_ddt
     *
     * @return bool|null
     */
    public function getInDdt()
    {
        return $this->container['in_ddt'];
    }

    /**
     * Sets in_ddt
     *
     * @param bool|null $in_ddt in_ddt
     *
     * @return self
     */
    public function setInDdt($in_ddt)
    {
        $this->container['in_ddt'] = $in_ddt;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return bool|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param bool|null $stock stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets ei_raw
     *
     * @return object|null
     */
    public function getEiRaw()
    {
        return $this->container['ei_raw'];
    }

    /**
     * Sets ei_raw
     *
     * @param object|null $ei_raw Advanced raw attributes for e-invoices.
     *
     * @return self
     */
    public function setEiRaw($ei_raw)
    {
        $this->container['ei_raw'] = $ei_raw;

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


