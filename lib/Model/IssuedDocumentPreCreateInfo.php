<?php
/**
 * IssuedDocumentPreCreateInfo
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
 * The version of the OpenAPI document: 2.0.33
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
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
 * IssuedDocumentPreCreateInfo Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class IssuedDocumentPreCreateInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssuedDocumentPreCreateInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'numerations' => 'array<string,array>',
        'dn_numerations' => 'array<string,array>',
        'default_values' => '\FattureInCloud\Model\IssuedDocumentPreCreateInfoDefaultValues',
        'extra_data_default_values' => '\FattureInCloud\Model\IssuedDocumentPreCreateInfoExtraDataDefaultValues',
        'items_default_values' => '\FattureInCloud\Model\IssuedDocumentPreCreateInfoItemsDefaultValues',
        'countries_list' => 'string[]',
        'currencies_list' => '\FattureInCloud\Model\Currency[]',
        'templates_list' => '\FattureInCloud\Model\DocumentTemplate[]',
        'dn_templates_list' => '\FattureInCloud\Model\DocumentTemplate[]',
        'ai_templates_list' => '\FattureInCloud\Model\DocumentTemplate[]',
        'payment_methods_list' => '\FattureInCloud\Model\PaymentMethod[]',
        'payment_accounts_list' => '\FattureInCloud\Model\PaymentAccount[]',
        'vat_types_list' => '\FattureInCloud\Model\VatType[]',
        'languages_list' => '\FattureInCloud\Model\Language[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'numerations' => null,
        'dn_numerations' => null,
        'default_values' => null,
        'extra_data_default_values' => null,
        'items_default_values' => null,
        'countries_list' => null,
        'currencies_list' => null,
        'templates_list' => null,
        'dn_templates_list' => null,
        'ai_templates_list' => null,
        'payment_methods_list' => null,
        'payment_accounts_list' => null,
        'vat_types_list' => null,
        'languages_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'numerations' => false,
            'dn_numerations' => false,
            'default_values' => true,
            'extra_data_default_values' => true,
            'items_default_values' => true,
            'countries_list' => true,
            'currencies_list' => true,
            'templates_list' => true,
            'dn_templates_list' => true,
            'ai_templates_list' => true,
            'payment_methods_list' => true,
            'payment_accounts_list' => true,
            'vat_types_list' => true,
            'languages_list' => true
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
        'numerations' => 'numerations',
        'dn_numerations' => 'dn_numerations',
        'default_values' => 'default_values',
        'extra_data_default_values' => 'extra_data_default_values',
        'items_default_values' => 'items_default_values',
        'countries_list' => 'countries_list',
        'currencies_list' => 'currencies_list',
        'templates_list' => 'templates_list',
        'dn_templates_list' => 'dn_templates_list',
        'ai_templates_list' => 'ai_templates_list',
        'payment_methods_list' => 'payment_methods_list',
        'payment_accounts_list' => 'payment_accounts_list',
        'vat_types_list' => 'vat_types_list',
        'languages_list' => 'languages_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numerations' => 'setNumerations',
        'dn_numerations' => 'setDnNumerations',
        'default_values' => 'setDefaultValues',
        'extra_data_default_values' => 'setExtraDataDefaultValues',
        'items_default_values' => 'setItemsDefaultValues',
        'countries_list' => 'setCountriesList',
        'currencies_list' => 'setCurrenciesList',
        'templates_list' => 'setTemplatesList',
        'dn_templates_list' => 'setDnTemplatesList',
        'ai_templates_list' => 'setAiTemplatesList',
        'payment_methods_list' => 'setPaymentMethodsList',
        'payment_accounts_list' => 'setPaymentAccountsList',
        'vat_types_list' => 'setVatTypesList',
        'languages_list' => 'setLanguagesList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numerations' => 'getNumerations',
        'dn_numerations' => 'getDnNumerations',
        'default_values' => 'getDefaultValues',
        'extra_data_default_values' => 'getExtraDataDefaultValues',
        'items_default_values' => 'getItemsDefaultValues',
        'countries_list' => 'getCountriesList',
        'currencies_list' => 'getCurrenciesList',
        'templates_list' => 'getTemplatesList',
        'dn_templates_list' => 'getDnTemplatesList',
        'ai_templates_list' => 'getAiTemplatesList',
        'payment_methods_list' => 'getPaymentMethodsList',
        'payment_accounts_list' => 'getPaymentAccountsList',
        'vat_types_list' => 'getVatTypesList',
        'languages_list' => 'getLanguagesList'
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
        $this->setIfExists('numerations', $data ?? [], null);
        $this->setIfExists('dn_numerations', $data ?? [], null);
        $this->setIfExists('default_values', $data ?? [], null);
        $this->setIfExists('extra_data_default_values', $data ?? [], null);
        $this->setIfExists('items_default_values', $data ?? [], null);
        $this->setIfExists('countries_list', $data ?? [], null);
        $this->setIfExists('currencies_list', $data ?? [], null);
        $this->setIfExists('templates_list', $data ?? [], null);
        $this->setIfExists('dn_templates_list', $data ?? [], null);
        $this->setIfExists('ai_templates_list', $data ?? [], null);
        $this->setIfExists('payment_methods_list', $data ?? [], null);
        $this->setIfExists('payment_accounts_list', $data ?? [], null);
        $this->setIfExists('vat_types_list', $data ?? [], null);
        $this->setIfExists('languages_list', $data ?? [], null);
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
     * Gets numerations
     *
     * @return array<string,array>|null
     */
    public function getNumerations()
    {
        return $this->container['numerations'];
    }

    /**
     * Sets numerations
     *
     * @param array<string,array>|null $numerations numerations
     *
     * @return self
     */
    public function setNumerations($numerations)
    {
        if (is_null($numerations)) {
            throw new \InvalidArgumentException('non-nullable numerations cannot be null');
        }
        $this->container['numerations'] = $numerations;

        return $this;
    }

    /**
     * Gets dn_numerations
     *
     * @return array<string,array>|null
     */
    public function getDnNumerations()
    {
        return $this->container['dn_numerations'];
    }

    /**
     * Sets dn_numerations
     *
     * @param array<string,array>|null $dn_numerations dn_numerations
     *
     * @return self
     */
    public function setDnNumerations($dn_numerations)
    {
        if (is_null($dn_numerations)) {
            throw new \InvalidArgumentException('non-nullable dn_numerations cannot be null');
        }
        $this->container['dn_numerations'] = $dn_numerations;

        return $this;
    }

    /**
     * Gets default_values
     *
     * @return \FattureInCloud\Model\IssuedDocumentPreCreateInfoDefaultValues|null
     */
    public function getDefaultValues()
    {
        return $this->container['default_values'];
    }

    /**
     * Sets default_values
     *
     * @param \FattureInCloud\Model\IssuedDocumentPreCreateInfoDefaultValues|null $default_values default_values
     *
     * @return self
     */
    public function setDefaultValues($default_values)
    {
        if (is_null($default_values)) {
            array_push($this->openAPINullablesSetToNull, 'default_values');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_values', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_values'] = $default_values;

        return $this;
    }

    /**
     * Gets extra_data_default_values
     *
     * @return \FattureInCloud\Model\IssuedDocumentPreCreateInfoExtraDataDefaultValues|null
     */
    public function getExtraDataDefaultValues()
    {
        return $this->container['extra_data_default_values'];
    }

    /**
     * Sets extra_data_default_values
     *
     * @param \FattureInCloud\Model\IssuedDocumentPreCreateInfoExtraDataDefaultValues|null $extra_data_default_values extra_data_default_values
     *
     * @return self
     */
    public function setExtraDataDefaultValues($extra_data_default_values)
    {
        if (is_null($extra_data_default_values)) {
            array_push($this->openAPINullablesSetToNull, 'extra_data_default_values');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extra_data_default_values', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extra_data_default_values'] = $extra_data_default_values;

        return $this;
    }

    /**
     * Gets items_default_values
     *
     * @return \FattureInCloud\Model\IssuedDocumentPreCreateInfoItemsDefaultValues|null
     */
    public function getItemsDefaultValues()
    {
        return $this->container['items_default_values'];
    }

    /**
     * Sets items_default_values
     *
     * @param \FattureInCloud\Model\IssuedDocumentPreCreateInfoItemsDefaultValues|null $items_default_values items_default_values
     *
     * @return self
     */
    public function setItemsDefaultValues($items_default_values)
    {
        if (is_null($items_default_values)) {
            array_push($this->openAPINullablesSetToNull, 'items_default_values');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('items_default_values', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['items_default_values'] = $items_default_values;

        return $this;
    }

    /**
     * Gets countries_list
     *
     * @return string[]|null
     */
    public function getCountriesList()
    {
        return $this->container['countries_list'];
    }

    /**
     * Sets countries_list
     *
     * @param string[]|null $countries_list Countries list
     *
     * @return self
     */
    public function setCountriesList($countries_list)
    {
        if (is_null($countries_list)) {
            array_push($this->openAPINullablesSetToNull, 'countries_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('countries_list', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['countries_list'] = $countries_list;

        return $this;
    }

    /**
     * Gets currencies_list
     *
     * @return \FattureInCloud\Model\Currency[]|null
     */
    public function getCurrenciesList()
    {
        return $this->container['currencies_list'];
    }

    /**
     * Sets currencies_list
     *
     * @param \FattureInCloud\Model\Currency[]|null $currencies_list Currencies list
     *
     * @return self
     */
    public function setCurrenciesList($currencies_list)
    {
        if (is_null($currencies_list)) {
            array_push($this->openAPINullablesSetToNull, 'currencies_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currencies_list', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currencies_list'] = $currencies_list;

        return $this;
    }

    /**
     * Gets templates_list
     *
     * @return \FattureInCloud\Model\DocumentTemplate[]|null
     */
    public function getTemplatesList()
    {
        return $this->container['templates_list'];
    }

    /**
     * Sets templates_list
     *
     * @param \FattureInCloud\Model\DocumentTemplate[]|null $templates_list Document templates list
     *
     * @return self
     */
    public function setTemplatesList($templates_list)
    {
        if (is_null($templates_list)) {
            array_push($this->openAPINullablesSetToNull, 'templates_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('templates_list', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['templates_list'] = $templates_list;

        return $this;
    }

    /**
     * Gets dn_templates_list
     *
     * @return \FattureInCloud\Model\DocumentTemplate[]|null
     */
    public function getDnTemplatesList()
    {
        return $this->container['dn_templates_list'];
    }

    /**
     * Sets dn_templates_list
     *
     * @param \FattureInCloud\Model\DocumentTemplate[]|null $dn_templates_list Delivery note templates list
     *
     * @return self
     */
    public function setDnTemplatesList($dn_templates_list)
    {
        if (is_null($dn_templates_list)) {
            array_push($this->openAPINullablesSetToNull, 'dn_templates_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dn_templates_list', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dn_templates_list'] = $dn_templates_list;

        return $this;
    }

    /**
     * Gets ai_templates_list
     *
     * @return \FattureInCloud\Model\DocumentTemplate[]|null
     */
    public function getAiTemplatesList()
    {
        return $this->container['ai_templates_list'];
    }

    /**
     * Sets ai_templates_list
     *
     * @param \FattureInCloud\Model\DocumentTemplate[]|null $ai_templates_list Accompanying invoice templates list
     *
     * @return self
     */
    public function setAiTemplatesList($ai_templates_list)
    {
        if (is_null($ai_templates_list)) {
            array_push($this->openAPINullablesSetToNull, 'ai_templates_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ai_templates_list', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ai_templates_list'] = $ai_templates_list;

        return $this;
    }

    /**
     * Gets payment_methods_list
     *
     * @return \FattureInCloud\Model\PaymentMethod[]|null
     */
    public function getPaymentMethodsList()
    {
        return $this->container['payment_methods_list'];
    }

    /**
     * Sets payment_methods_list
     *
     * @param \FattureInCloud\Model\PaymentMethod[]|null $payment_methods_list Payment methods list
     *
     * @return self
     */
    public function setPaymentMethodsList($payment_methods_list)
    {
        if (is_null($payment_methods_list)) {
            array_push($this->openAPINullablesSetToNull, 'payment_methods_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_methods_list', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_methods_list'] = $payment_methods_list;

        return $this;
    }

    /**
     * Gets payment_accounts_list
     *
     * @return \FattureInCloud\Model\PaymentAccount[]|null
     */
    public function getPaymentAccountsList()
    {
        return $this->container['payment_accounts_list'];
    }

    /**
     * Sets payment_accounts_list
     *
     * @param \FattureInCloud\Model\PaymentAccount[]|null $payment_accounts_list Payment accounts list
     *
     * @return self
     */
    public function setPaymentAccountsList($payment_accounts_list)
    {
        if (is_null($payment_accounts_list)) {
            array_push($this->openAPINullablesSetToNull, 'payment_accounts_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_accounts_list', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_accounts_list'] = $payment_accounts_list;

        return $this;
    }

    /**
     * Gets vat_types_list
     *
     * @return \FattureInCloud\Model\VatType[]|null
     */
    public function getVatTypesList()
    {
        return $this->container['vat_types_list'];
    }

    /**
     * Sets vat_types_list
     *
     * @param \FattureInCloud\Model\VatType[]|null $vat_types_list Vat types list
     *
     * @return self
     */
    public function setVatTypesList($vat_types_list)
    {
        if (is_null($vat_types_list)) {
            array_push($this->openAPINullablesSetToNull, 'vat_types_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vat_types_list', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vat_types_list'] = $vat_types_list;

        return $this;
    }

    /**
     * Gets languages_list
     *
     * @return \FattureInCloud\Model\Language[]|null
     */
    public function getLanguagesList()
    {
        return $this->container['languages_list'];
    }

    /**
     * Sets languages_list
     *
     * @param \FattureInCloud\Model\Language[]|null $languages_list Languages list
     *
     * @return self
     */
    public function setLanguagesList($languages_list)
    {
        if (is_null($languages_list)) {
            array_push($this->openAPINullablesSetToNull, 'languages_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('languages_list', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['languages_list'] = $languages_list;

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


