<?php
/**
 * IssuedDocumentPreCreateInfoExtraDataDefaultValues
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  FattureInCloud
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fatture in Cloud API v2 - API Reference
 *
 * ## Request informations In every request description you will be able to find some additional informations about context, permissions and supported functionality:  | Parameter | Description | |-----------|-------------| | 👥 Context | Indicate the subject of the request. Can be `company`, `user` or `accountant`.  | | 🔒 Required scope | If present, indicates the required scope to fulfill the request. | | 🔍 Filtering | If present, indicates which fields support the filtering feature. | | ↕️ Sorting | If present, indicates which fields support the sorting feature. | | 📄 Paginated results | If present, indicate that the results are paginated. | | 🎩 Customized responses supported | If present, indicate that you can use `field` or `fieldset` to customize the response body. |  For example the request `GET /entities/{entityRole}` have tis informations: \\ 👥 Company context \\ 🔒 Required scope: `entity.clients:r` or `entity.suppliers:r` (depending on `entityRole`) \\ 🔍 Filtering: `id`, `name` \\ ↕️ Sorting: `id`, `name` \\ 📄 Paginated results \\ 🎩 Customized responses supported  Keep in mind that if you are making **company realted requests**, you will need to specify the company id in the requests: ``` GET /c/{company_id}/issued_documents ```
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * IssuedDocumentPreCreateInfoExtraDataDefaultValues Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IssuedDocumentPreCreateInfoExtraDataDefaultValues implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssuedDocumentPreCreateInfo_extra_data_default_values';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ts_communication' => 'bool',
        'ts_tipo_spesa' => 'string',
        'ts_flag_tipo_spesa' => 'int',
        'ts_pagamento_tracciato' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ts_communication' => null,
        'ts_tipo_spesa' => null,
        'ts_flag_tipo_spesa' => null,
        'ts_pagamento_tracciato' => null
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
        'ts_communication' => 'ts_communication',
        'ts_tipo_spesa' => 'ts_tipo_spesa',
        'ts_flag_tipo_spesa' => 'ts_flag_tipo_spesa',
        'ts_pagamento_tracciato' => 'ts_pagamento_tracciato'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ts_communication' => 'setTsCommunication',
        'ts_tipo_spesa' => 'setTsTipoSpesa',
        'ts_flag_tipo_spesa' => 'setTsFlagTipoSpesa',
        'ts_pagamento_tracciato' => 'setTsPagamentoTracciato'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ts_communication' => 'getTsCommunication',
        'ts_tipo_spesa' => 'getTsTipoSpesa',
        'ts_flag_tipo_spesa' => 'getTsFlagTipoSpesa',
        'ts_pagamento_tracciato' => 'getTsPagamentoTracciato'
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
        $this->container['ts_communication'] = $data['ts_communication'] ?? null;
        $this->container['ts_tipo_spesa'] = $data['ts_tipo_spesa'] ?? null;
        $this->container['ts_flag_tipo_spesa'] = $data['ts_flag_tipo_spesa'] ?? null;
        $this->container['ts_pagamento_tracciato'] = $data['ts_pagamento_tracciato'] ?? null;
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
     * Gets ts_communication
     *
     * @return bool|null
     */
    public function getTsCommunication()
    {
        return $this->container['ts_communication'];
    }

    /**
     * Sets ts_communication
     *
     * @param bool|null $ts_communication ts_communication
     *
     * @return self
     */
    public function setTsCommunication($ts_communication)
    {
        $this->container['ts_communication'] = $ts_communication;

        return $this;
    }

    /**
     * Gets ts_tipo_spesa
     *
     * @return string|null
     */
    public function getTsTipoSpesa()
    {
        return $this->container['ts_tipo_spesa'];
    }

    /**
     * Sets ts_tipo_spesa
     *
     * @param string|null $ts_tipo_spesa ts_tipo_spesa
     *
     * @return self
     */
    public function setTsTipoSpesa($ts_tipo_spesa)
    {
        $this->container['ts_tipo_spesa'] = $ts_tipo_spesa;

        return $this;
    }

    /**
     * Gets ts_flag_tipo_spesa
     *
     * @return int|null
     */
    public function getTsFlagTipoSpesa()
    {
        return $this->container['ts_flag_tipo_spesa'];
    }

    /**
     * Sets ts_flag_tipo_spesa
     *
     * @param int|null $ts_flag_tipo_spesa ts_flag_tipo_spesa
     *
     * @return self
     */
    public function setTsFlagTipoSpesa($ts_flag_tipo_spesa)
    {
        $this->container['ts_flag_tipo_spesa'] = $ts_flag_tipo_spesa;

        return $this;
    }

    /**
     * Gets ts_pagamento_tracciato
     *
     * @return bool|null
     */
    public function getTsPagamentoTracciato()
    {
        return $this->container['ts_pagamento_tracciato'];
    }

    /**
     * Sets ts_pagamento_tracciato
     *
     * @param bool|null $ts_pagamento_tracciato ts_pagamento_tracciato
     *
     * @return self
     */
    public function setTsPagamentoTracciato($ts_pagamento_tracciato)
    {
        $this->container['ts_pagamento_tracciato'] = $ts_pagamento_tracciato;

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
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
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


