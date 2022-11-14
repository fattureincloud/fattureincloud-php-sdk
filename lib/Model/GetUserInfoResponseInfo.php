<?php
/**
 * GetUserInfoResponseInfo
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
 * The version of the OpenAPI document: 2.0.21
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * GetUserInfoResponseInfo Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class GetUserInfoResponseInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetUserInfoResponse_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'need_marketing_consents_confirmation' => 'bool',
        'need_password_change' => 'bool',
        'need_terms_of_service_confirmation' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'need_marketing_consents_confirmation' => null,
        'need_password_change' => null,
        'need_terms_of_service_confirmation' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static $openAPINullables = [
        'need_marketing_consents_confirmation' => true,
            'need_password_change' => true,
            'need_terms_of_service_confirmation' => true
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
     * Sets openAPINullablesSetToNull
     *
     * @param boolean[] $openAPINullablesSetToNull Array of nullable field names deliberately set to null
     *
     * @return self
     */
    private function setOpenAPINullablesSetToNull($openAPINullablesSetToNull)
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
        return $this;
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
        'need_marketing_consents_confirmation' => 'need_marketing_consents_confirmation',
        'need_password_change' => 'need_password_change',
        'need_terms_of_service_confirmation' => 'need_terms_of_service_confirmation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'need_marketing_consents_confirmation' => 'setNeedMarketingConsentsConfirmation',
        'need_password_change' => 'setNeedPasswordChange',
        'need_terms_of_service_confirmation' => 'setNeedTermsOfServiceConfirmation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'need_marketing_consents_confirmation' => 'getNeedMarketingConsentsConfirmation',
        'need_password_change' => 'getNeedPasswordChange',
        'need_terms_of_service_confirmation' => 'getNeedTermsOfServiceConfirmation'
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
        $this->setIfExists('need_marketing_consents_confirmation', $data ?? [], null);
        $this->setIfExists('need_password_change', $data ?? [], null);
        $this->setIfExists('need_terms_of_service_confirmation', $data ?? [], null);
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
     * Gets need_marketing_consents_confirmation
     *
     * @return bool|null
     */
    public function getNeedMarketingConsentsConfirmation()
    {
        return $this->container['need_marketing_consents_confirmation'];
    }

    /**
     * Sets need_marketing_consents_confirmation
     *
     * @param bool|null $need_marketing_consents_confirmation need_marketing_consents_confirmation
     *
     * @return self
     */
    public function setNeedMarketingConsentsConfirmation($need_marketing_consents_confirmation)
    {

        if (is_null($need_marketing_consents_confirmation)) {
            array_push($this->openAPINullablesSetToNull, 'need_marketing_consents_confirmation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('need_marketing_consents_confirmation', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['need_marketing_consents_confirmation'] = $need_marketing_consents_confirmation;

        return $this;
    }

    /**
     * Gets need_password_change
     *
     * @return bool|null
     */
    public function getNeedPasswordChange()
    {
        return $this->container['need_password_change'];
    }

    /**
     * Sets need_password_change
     *
     * @param bool|null $need_password_change need_password_change
     *
     * @return self
     */
    public function setNeedPasswordChange($need_password_change)
    {

        if (is_null($need_password_change)) {
            array_push($this->openAPINullablesSetToNull, 'need_password_change');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('need_password_change', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['need_password_change'] = $need_password_change;

        return $this;
    }

    /**
     * Gets need_terms_of_service_confirmation
     *
     * @return bool|null
     */
    public function getNeedTermsOfServiceConfirmation()
    {
        return $this->container['need_terms_of_service_confirmation'];
    }

    /**
     * Sets need_terms_of_service_confirmation
     *
     * @param bool|null $need_terms_of_service_confirmation need_terms_of_service_confirmation
     *
     * @return self
     */
    public function setNeedTermsOfServiceConfirmation($need_terms_of_service_confirmation)
    {

        if (is_null($need_terms_of_service_confirmation)) {
            array_push($this->openAPINullablesSetToNull, 'need_terms_of_service_confirmation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('need_terms_of_service_confirmation', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['need_terms_of_service_confirmation'] = $need_terms_of_service_confirmation;

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


