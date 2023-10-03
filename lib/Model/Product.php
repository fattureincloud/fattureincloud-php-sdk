<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class Product implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'code' => 'string',
        'net_price' => 'float',
        'gross_price' => 'float',
        'use_gross_price' => 'bool',
        'default_vat' => '\FattureInCloud\Model\VatType',
        'net_cost' => 'float',
        'measure' => 'string',
        'description' => 'string',
        'category' => 'string',
        'notes' => 'string',
        'in_stock' => 'bool',
        'stock_initial' => 'float',
        'stock_current' => 'float',
        'average_cost' => 'float',
        'average_price' => 'float',
        'created_at' => 'string',
        'updated_at' => 'string'
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
        'code' => null,
        'net_price' => null,
        'gross_price' => null,
        'use_gross_price' => null,
        'default_vat' => null,
        'net_cost' => null,
        'measure' => null,
        'description' => null,
        'category' => null,
        'notes' => null,
        'in_stock' => null,
        'stock_initial' => null,
        'stock_current' => null,
        'average_cost' => null,
        'average_price' => null,
        'created_at' => null,
        'updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => true,
            'name' => true,
            'code' => true,
            'net_price' => true,
            'gross_price' => true,
            'use_gross_price' => true,
            'default_vat' => true,
            'net_cost' => true,
            'measure' => true,
            'description' => true,
            'category' => true,
            'notes' => true,
            'in_stock' => true,
            'stock_initial' => true,
            'stock_current' => true,
            'average_cost' => true,
            'average_price' => true,
            'created_at' => true,
            'updated_at' => true
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
        'id' => 'id',
        'name' => 'name',
        'code' => 'code',
        'net_price' => 'net_price',
        'gross_price' => 'gross_price',
        'use_gross_price' => 'use_gross_price',
        'default_vat' => 'default_vat',
        'net_cost' => 'net_cost',
        'measure' => 'measure',
        'description' => 'description',
        'category' => 'category',
        'notes' => 'notes',
        'in_stock' => 'in_stock',
        'stock_initial' => 'stock_initial',
        'stock_current' => 'stock_current',
        'average_cost' => 'average_cost',
        'average_price' => 'average_price',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'code' => 'setCode',
        'net_price' => 'setNetPrice',
        'gross_price' => 'setGrossPrice',
        'use_gross_price' => 'setUseGrossPrice',
        'default_vat' => 'setDefaultVat',
        'net_cost' => 'setNetCost',
        'measure' => 'setMeasure',
        'description' => 'setDescription',
        'category' => 'setCategory',
        'notes' => 'setNotes',
        'in_stock' => 'setInStock',
        'stock_initial' => 'setStockInitial',
        'stock_current' => 'setStockCurrent',
        'average_cost' => 'setAverageCost',
        'average_price' => 'setAveragePrice',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'code' => 'getCode',
        'net_price' => 'getNetPrice',
        'gross_price' => 'getGrossPrice',
        'use_gross_price' => 'getUseGrossPrice',
        'default_vat' => 'getDefaultVat',
        'net_cost' => 'getNetCost',
        'measure' => 'getMeasure',
        'description' => 'getDescription',
        'category' => 'getCategory',
        'notes' => 'getNotes',
        'in_stock' => 'getInStock',
        'stock_initial' => 'getStockInitial',
        'stock_current' => 'getStockCurrent',
        'average_cost' => 'getAverageCost',
        'average_price' => 'getAveragePrice',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('net_price', $data ?? [], null);
        $this->setIfExists('gross_price', $data ?? [], null);
        $this->setIfExists('use_gross_price', $data ?? [], null);
        $this->setIfExists('default_vat', $data ?? [], null);
        $this->setIfExists('net_cost', $data ?? [], null);
        $this->setIfExists('measure', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('in_stock', $data ?? [], null);
        $this->setIfExists('stock_initial', $data ?? [], null);
        $this->setIfExists('stock_current', $data ?? [], null);
        $this->setIfExists('average_cost', $data ?? [], null);
        $this->setIfExists('average_price', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
     * @param int|null $id Product id
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
     * @param string|null $name Product name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

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
     * @param string|null $code Product code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            array_push($this->openAPINullablesSetToNull, 'code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['code'] = $code;

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
     * @param float|null $net_price Product net price
     *
     * @return self
     */
    public function setNetPrice($net_price)
    {
        if (is_null($net_price)) {
            array_push($this->openAPINullablesSetToNull, 'net_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('net_price', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
     * @param float|null $gross_price Product gross price
     *
     * @return self
     */
    public function setGrossPrice($gross_price)
    {
        if (is_null($gross_price)) {
            array_push($this->openAPINullablesSetToNull, 'gross_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gross_price', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gross_price'] = $gross_price;

        return $this;
    }

    /**
     * Gets use_gross_price
     *
     * @return bool|null
     */
    public function getUseGrossPrice()
    {
        return $this->container['use_gross_price'];
    }

    /**
     * Sets use_gross_price
     *
     * @param bool|null $use_gross_price Product uses gross prices
     *
     * @return self
     */
    public function setUseGrossPrice($use_gross_price)
    {
        if (is_null($use_gross_price)) {
            array_push($this->openAPINullablesSetToNull, 'use_gross_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('use_gross_price', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['use_gross_price'] = $use_gross_price;

        return $this;
    }

    /**
     * Gets default_vat
     *
     * @return \FattureInCloud\Model\VatType|null
     */
    public function getDefaultVat()
    {
        return $this->container['default_vat'];
    }

    /**
     * Sets default_vat
     *
     * @param \FattureInCloud\Model\VatType|null $default_vat default_vat
     *
     * @return self
     */
    public function setDefaultVat($default_vat)
    {
        if (is_null($default_vat)) {
            array_push($this->openAPINullablesSetToNull, 'default_vat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_vat', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_vat'] = $default_vat;

        return $this;
    }

    /**
     * Gets net_cost
     *
     * @return float|null
     */
    public function getNetCost()
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost
     *
     * @param float|null $net_cost Product net cost
     *
     * @return self
     */
    public function setNetCost($net_cost)
    {
        if (is_null($net_cost)) {
            array_push($this->openAPINullablesSetToNull, 'net_cost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('net_cost', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['net_cost'] = $net_cost;

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
     * @param string|null $measure Product measure
     *
     * @return self
     */
    public function setMeasure($measure)
    {
        if (is_null($measure)) {
            array_push($this->openAPINullablesSetToNull, 'measure');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('measure', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['measure'] = $measure;

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
     * @param string|null $description Product description
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
        if (is_null($category)) {
            array_push($this->openAPINullablesSetToNull, 'category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['category'] = $category;

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
     * @param string|null $notes Product extra notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            array_push($this->openAPINullablesSetToNull, 'notes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('notes', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets in_stock
     *
     * @return bool|null
     */
    public function getInStock()
    {
        return $this->container['in_stock'];
    }

    /**
     * Sets in_stock
     *
     * @param bool|null $in_stock Product has stock
     *
     * @return self
     */
    public function setInStock($in_stock)
    {
        if (is_null($in_stock)) {
            array_push($this->openAPINullablesSetToNull, 'in_stock');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('in_stock', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['in_stock'] = $in_stock;

        return $this;
    }

    /**
     * Gets stock_initial
     *
     * @return float|null
     */
    public function getStockInitial()
    {
        return $this->container['stock_initial'];
    }

    /**
     * Sets stock_initial
     *
     * @param float|null $stock_initial Product initial stock
     *
     * @return self
     */
    public function setStockInitial($stock_initial)
    {
        if (is_null($stock_initial)) {
            array_push($this->openAPINullablesSetToNull, 'stock_initial');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stock_initial', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stock_initial'] = $stock_initial;

        return $this;
    }

    /**
     * Gets stock_current
     *
     * @return float|null
     */
    public function getStockCurrent()
    {
        return $this->container['stock_current'];
    }

    /**
     * Sets stock_current
     *
     * @param float|null $stock_current [Read Only] Product current stock
     *
     * @return self
     */
    public function setStockCurrent($stock_current)
    {
        if (is_null($stock_current)) {
            array_push($this->openAPINullablesSetToNull, 'stock_current');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stock_current', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stock_current'] = $stock_current;

        return $this;
    }

    /**
     * Gets average_cost
     *
     * @return float|null
     */
    public function getAverageCost()
    {
        return $this->container['average_cost'];
    }

    /**
     * Sets average_cost
     *
     * @param float|null $average_cost Product average cost
     *
     * @return self
     */
    public function setAverageCost($average_cost)
    {
        if (is_null($average_cost)) {
            array_push($this->openAPINullablesSetToNull, 'average_cost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('average_cost', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['average_cost'] = $average_cost;

        return $this;
    }

    /**
     * Gets average_price
     *
     * @return float|null
     */
    public function getAveragePrice()
    {
        return $this->container['average_price'];
    }

    /**
     * Sets average_price
     *
     * @param float|null $average_price Product average price
     *
     * @return self
     */
    public function setAveragePrice($average_price)
    {
        if (is_null($average_price)) {
            array_push($this->openAPINullablesSetToNull, 'average_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('average_price', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['average_price'] = $average_price;

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
     * @param string|null $created_at Product creation date
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            array_push($this->openAPINullablesSetToNull, 'created_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_at', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
     * @param string|null $updated_at Product last update date
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            array_push($this->openAPINullablesSetToNull, 'updated_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updated_at', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updated_at'] = $updated_at;

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


