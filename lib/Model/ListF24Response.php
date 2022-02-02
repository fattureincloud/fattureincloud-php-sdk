<?php
/**
 * ListF24Response
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
 * ListF24Response Class Doc Comment
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
class ListF24Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListF24Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_page' => 'int',
        'first_page_url' => 'string',
        'from' => 'int',
        'last_page' => 'int',
        'last_page_url' => 'string',
        'next_page_url' => 'string',
        'path' => 'string',
        'per_page' => 'int',
        'prev_page_url' => 'string',
        'to' => 'int',
        'total' => 'int',
        'data' => '\FattureInCloud\Model\F24[]',
        'aggregated_data' => '\FattureInCloud\Model\ListF24ResponseAggregatedData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_page' => null,
        'first_page_url' => 'uri',
        'from' => null,
        'last_page' => null,
        'last_page_url' => 'uri',
        'next_page_url' => 'uri',
        'path' => 'uri',
        'per_page' => null,
        'prev_page_url' => 'uri',
        'to' => null,
        'total' => null,
        'data' => null,
        'aggregated_data' => null
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
        'current_page' => 'current_page',
        'first_page_url' => 'first_page_url',
        'from' => 'from',
        'last_page' => 'last_page',
        'last_page_url' => 'last_page_url',
        'next_page_url' => 'next_page_url',
        'path' => 'path',
        'per_page' => 'per_page',
        'prev_page_url' => 'prev_page_url',
        'to' => 'to',
        'total' => 'total',
        'data' => 'data',
        'aggregated_data' => 'aggregated_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_page' => 'setCurrentPage',
        'first_page_url' => 'setFirstPageUrl',
        'from' => 'setFrom',
        'last_page' => 'setLastPage',
        'last_page_url' => 'setLastPageUrl',
        'next_page_url' => 'setNextPageUrl',
        'path' => 'setPath',
        'per_page' => 'setPerPage',
        'prev_page_url' => 'setPrevPageUrl',
        'to' => 'setTo',
        'total' => 'setTotal',
        'data' => 'setData',
        'aggregated_data' => 'setAggregatedData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_page' => 'getCurrentPage',
        'first_page_url' => 'getFirstPageUrl',
        'from' => 'getFrom',
        'last_page' => 'getLastPage',
        'last_page_url' => 'getLastPageUrl',
        'next_page_url' => 'getNextPageUrl',
        'path' => 'getPath',
        'per_page' => 'getPerPage',
        'prev_page_url' => 'getPrevPageUrl',
        'to' => 'getTo',
        'total' => 'getTotal',
        'data' => 'getData',
        'aggregated_data' => 'getAggregatedData'
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
        $this->container['current_page'] = $data['current_page'] ?? null;
        $this->container['first_page_url'] = $data['first_page_url'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['last_page'] = $data['last_page'] ?? null;
        $this->container['last_page_url'] = $data['last_page_url'] ?? null;
        $this->container['next_page_url'] = $data['next_page_url'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['per_page'] = $data['per_page'] ?? null;
        $this->container['prev_page_url'] = $data['prev_page_url'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['data'] = $data['data'] ?? null;
        $this->container['aggregated_data'] = $data['aggregated_data'] ?? null;
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
     * Gets current_page
     *
     * @return int|null
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int|null $current_page Current page number.
     *
     * @return self
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets first_page_url
     *
     * @return string|null
     */
    public function getFirstPageUrl()
    {
        return $this->container['first_page_url'];
    }

    /**
     * Sets first_page_url
     *
     * @param string|null $first_page_url First page url.
     *
     * @return self
     */
    public function setFirstPageUrl($first_page_url)
    {
        $this->container['first_page_url'] = $first_page_url;

        return $this;
    }

    /**
     * Gets from
     *
     * @return int|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param int|null $from First result of the page.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets last_page
     *
     * @return int|null
     */
    public function getLastPage()
    {
        return $this->container['last_page'];
    }

    /**
     * Sets last_page
     *
     * @param int|null $last_page Last page number.
     *
     * @return self
     */
    public function setLastPage($last_page)
    {
        $this->container['last_page'] = $last_page;

        return $this;
    }

    /**
     * Gets last_page_url
     *
     * @return string|null
     */
    public function getLastPageUrl()
    {
        return $this->container['last_page_url'];
    }

    /**
     * Sets last_page_url
     *
     * @param string|null $last_page_url Last page url.
     *
     * @return self
     */
    public function setLastPageUrl($last_page_url)
    {
        $this->container['last_page_url'] = $last_page_url;

        return $this;
    }

    /**
     * Gets next_page_url
     *
     * @return string|null
     */
    public function getNextPageUrl()
    {
        return $this->container['next_page_url'];
    }

    /**
     * Sets next_page_url
     *
     * @param string|null $next_page_url Next page url
     *
     * @return self
     */
    public function setNextPageUrl($next_page_url)
    {
        $this->container['next_page_url'] = $next_page_url;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path Request path.
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets per_page
     *
     * @return int|null
     */
    public function getPerPage()
    {
        return $this->container['per_page'];
    }

    /**
     * Sets per_page
     *
     * @param int|null $per_page Number of result per page.
     *
     * @return self
     */
    public function setPerPage($per_page)
    {
        $this->container['per_page'] = $per_page;

        return $this;
    }

    /**
     * Gets prev_page_url
     *
     * @return string|null
     */
    public function getPrevPageUrl()
    {
        return $this->container['prev_page_url'];
    }

    /**
     * Sets prev_page_url
     *
     * @param string|null $prev_page_url Previous page url.
     *
     * @return self
     */
    public function setPrevPageUrl($prev_page_url)
    {
        $this->container['prev_page_url'] = $prev_page_url;

        return $this;
    }

    /**
     * Gets to
     *
     * @return int|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param int|null $to Last result of the page.
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total Total number of results
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \FattureInCloud\Model\F24[]|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \FattureInCloud\Model\F24[]|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets aggregated_data
     *
     * @return \FattureInCloud\Model\ListF24ResponseAggregatedData|null
     */
    public function getAggregatedData()
    {
        return $this->container['aggregated_data'];
    }

    /**
     * Sets aggregated_data
     *
     * @param \FattureInCloud\Model\ListF24ResponseAggregatedData|null $aggregated_data aggregated_data
     *
     * @return self
     */
    public function setAggregatedData($aggregated_data)
    {
        $this->container['aggregated_data'] = $aggregated_data;

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


