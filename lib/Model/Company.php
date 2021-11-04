<?php
/**
 * Company
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
 * The version of the OpenAPI document: 2.0.3
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
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
 * Company Class Doc Comment
 *
 * @category Class
 * @description Description of a company.
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Company implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'type' => 'string',
        'access_token' => 'string',
        'permissions' => '\FattureInCloud\Model\Permissions',
        'controlled_companies' => '\FattureInCloud\Model\Company[]',
        'connection_id' => 'float',
        'dic' => 'bool',
        'fic' => 'bool',
        'fic_license_expire' => '\DateTime',
        'fic_plan' => 'string',
        'tax_code' => 'string'
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
        'access_token' => null,
        'permissions' => null,
        'controlled_companies' => null,
        'connection_id' => null,
        'dic' => null,
        'fic' => null,
        'fic_license_expire' => 'date',
        'fic_plan' => null,
        'tax_code' => null
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
        'access_token' => 'access_token',
        'permissions' => 'permissions',
        'controlled_companies' => 'controlled_companies',
        'connection_id' => 'connection_id',
        'dic' => 'dic',
        'fic' => 'fic',
        'fic_license_expire' => 'fic_license_expire',
        'fic_plan' => 'fic_plan',
        'tax_code' => 'tax_code'
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
        'access_token' => 'setAccessToken',
        'permissions' => 'setPermissions',
        'controlled_companies' => 'setControlledCompanies',
        'connection_id' => 'setConnectionId',
        'dic' => 'setDic',
        'fic' => 'setFic',
        'fic_license_expire' => 'setFicLicenseExpire',
        'fic_plan' => 'setFicPlan',
        'tax_code' => 'setTaxCode'
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
        'access_token' => 'getAccessToken',
        'permissions' => 'getPermissions',
        'controlled_companies' => 'getControlledCompanies',
        'connection_id' => 'getConnectionId',
        'dic' => 'getDic',
        'fic' => 'getFic',
        'fic_license_expire' => 'getFicLicenseExpire',
        'fic_plan' => 'getFicPlan',
        'tax_code' => 'getTaxCode'
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

    const TYPE_COMPANY = 'company';
    const TYPE_ACCOUNTANT = 'accountant';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_COMPANY,
            self::TYPE_ACCOUNTANT,
        ];
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
        $this->container['access_token'] = $data['access_token'] ?? null;
        $this->container['permissions'] = $data['permissions'] ?? null;
        $this->container['controlled_companies'] = $data['controlled_companies'] ?? null;
        $this->container['connection_id'] = $data['connection_id'] ?? null;
        $this->container['dic'] = $data['dic'] ?? null;
        $this->container['fic'] = $data['fic'] ?? null;
        $this->container['fic_license_expire'] = $data['fic_license_expire'] ?? null;
        $this->container['fic_plan'] = $data['fic_plan'] ?? null;
        $this->container['tax_code'] = $data['tax_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * @param int|null $id Company unique identifier.
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
     * @param string|null $name Company name.
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
     * Sets type
     *
     * @param string|null $type Company type.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets access_token
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string|null $access_token CompanyAuthentication token for this company. [Only if type=company]
     *
     * @return self
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \FattureInCloud\Model\Permissions|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \FattureInCloud\Model\Permissions|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets controlled_companies
     *
     * @return \FattureInCloud\Model\Company[]|null
     */
    public function getControlledCompanies()
    {
        return $this->container['controlled_companies'];
    }

    /**
     * Sets controlled_companies
     *
     * @param \FattureInCloud\Model\Company[]|null $controlled_companies List of controlled companies. [Only if type=accountant]
     *
     * @return self
     */
    public function setControlledCompanies($controlled_companies)
    {
        $this->container['controlled_companies'] = $controlled_companies;

        return $this;
    }

    /**
     * Gets connection_id
     *
     * @return float|null
     */
    public function getConnectionId()
    {
        return $this->container['connection_id'];
    }

    /**
     * Sets connection_id
     *
     * @param float|null $connection_id Company connection id.
     *
     * @return self
     */
    public function setConnectionId($connection_id)
    {
        $this->container['connection_id'] = $connection_id;

        return $this;
    }

    /**
     * Gets dic
     *
     * @return bool|null
     */
    public function getDic()
    {
        return $this->container['dic'];
    }

    /**
     * Sets dic
     *
     * @param bool|null $dic Determine if the company has a DIC account.
     *
     * @return self
     */
    public function setDic($dic)
    {
        $this->container['dic'] = $dic;

        return $this;
    }

    /**
     * Gets fic
     *
     * @return bool|null
     */
    public function getFic()
    {
        return $this->container['fic'];
    }

    /**
     * Sets fic
     *
     * @param bool|null $fic Determine if the company has a FIC account.
     *
     * @return self
     */
    public function setFic($fic)
    {
        $this->container['fic'] = $fic;

        return $this;
    }

    /**
     * Gets fic_license_expire
     *
     * @return \DateTime|null
     */
    public function getFicLicenseExpire()
    {
        return $this->container['fic_license_expire'];
    }

    /**
     * Sets fic_license_expire
     *
     * @param \DateTime|null $fic_license_expire Company FIC license expiration date.
     *
     * @return self
     */
    public function setFicLicenseExpire($fic_license_expire)
    {
        $this->container['fic_license_expire'] = $fic_license_expire;

        return $this;
    }

    /**
     * Gets fic_plan
     *
     * @return string|null
     */
    public function getFicPlan()
    {
        return $this->container['fic_plan'];
    }

    /**
     * Sets fic_plan
     *
     * @param string|null $fic_plan Company FIC account plan.
     *
     * @return self
     */
    public function setFicPlan($fic_plan)
    {
        $this->container['fic_plan'] = $fic_plan;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string|null $tax_code Tax code.
     *
     * @return self
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

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


