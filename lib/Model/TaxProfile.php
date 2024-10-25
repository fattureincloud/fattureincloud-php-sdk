<?php
/**
 * TaxProfile
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
 * The version of the OpenAPI document: 2.1.2
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
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
 * TaxProfile Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class TaxProfile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_type' => 'string',
        'company_subtype' => 'string',
        'profession' => 'string',
        'regime' => 'string',
        'rivalsa_name' => 'string',
        'default_rivalsa' => 'float',
        'cassa_name' => 'string',
        'default_cassa' => 'float',
        'default_cassa_taxable' => 'float',
        'cassa2_name' => 'string',
        'default_cassa2' => 'float',
        'default_cassa2_taxable' => 'float',
        'default_withholding_tax' => 'float',
        'default_withholding_tax_taxable' => 'float',
        'default_other_withholding_tax' => 'float',
        'enasarco' => 'bool',
        'enasarco_type' => 'string',
        'contributions_percentage' => 'float',
        'profit_coefficient' => 'float',
        'med' => 'bool',
        'default_vat' => '\FattureInCloud\Model\VatType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'company_type' => null,
        'company_subtype' => null,
        'profession' => null,
        'regime' => null,
        'rivalsa_name' => null,
        'default_rivalsa' => null,
        'cassa_name' => null,
        'default_cassa' => null,
        'default_cassa_taxable' => null,
        'cassa2_name' => null,
        'default_cassa2' => null,
        'default_cassa2_taxable' => null,
        'default_withholding_tax' => null,
        'default_withholding_tax_taxable' => null,
        'default_other_withholding_tax' => null,
        'enasarco' => null,
        'enasarco_type' => null,
        'contributions_percentage' => null,
        'profit_coefficient' => null,
        'med' => null,
        'default_vat' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'company_type' => true,
        'company_subtype' => true,
        'profession' => true,
        'regime' => true,
        'rivalsa_name' => true,
        'default_rivalsa' => true,
        'cassa_name' => true,
        'default_cassa' => true,
        'default_cassa_taxable' => true,
        'cassa2_name' => true,
        'default_cassa2' => true,
        'default_cassa2_taxable' => true,
        'default_withholding_tax' => true,
        'default_withholding_tax_taxable' => true,
        'default_other_withholding_tax' => true,
        'enasarco' => true,
        'enasarco_type' => true,
        'contributions_percentage' => true,
        'profit_coefficient' => true,
        'med' => true,
        'default_vat' => true
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
        'company_type' => 'company_type',
        'company_subtype' => 'company_subtype',
        'profession' => 'profession',
        'regime' => 'regime',
        'rivalsa_name' => 'rivalsa_name',
        'default_rivalsa' => 'default_rivalsa',
        'cassa_name' => 'cassa_name',
        'default_cassa' => 'default_cassa',
        'default_cassa_taxable' => 'default_cassa_taxable',
        'cassa2_name' => 'cassa2_name',
        'default_cassa2' => 'default_cassa2',
        'default_cassa2_taxable' => 'default_cassa2_taxable',
        'default_withholding_tax' => 'default_withholding_tax',
        'default_withholding_tax_taxable' => 'default_withholding_tax_taxable',
        'default_other_withholding_tax' => 'default_other_withholding_tax',
        'enasarco' => 'enasarco',
        'enasarco_type' => 'enasarco_type',
        'contributions_percentage' => 'contributions_percentage',
        'profit_coefficient' => 'profit_coefficient',
        'med' => 'med',
        'default_vat' => 'default_vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_type' => 'setCompanyType',
        'company_subtype' => 'setCompanySubtype',
        'profession' => 'setProfession',
        'regime' => 'setRegime',
        'rivalsa_name' => 'setRivalsaName',
        'default_rivalsa' => 'setDefaultRivalsa',
        'cassa_name' => 'setCassaName',
        'default_cassa' => 'setDefaultCassa',
        'default_cassa_taxable' => 'setDefaultCassaTaxable',
        'cassa2_name' => 'setCassa2Name',
        'default_cassa2' => 'setDefaultCassa2',
        'default_cassa2_taxable' => 'setDefaultCassa2Taxable',
        'default_withholding_tax' => 'setDefaultWithholdingTax',
        'default_withholding_tax_taxable' => 'setDefaultWithholdingTaxTaxable',
        'default_other_withholding_tax' => 'setDefaultOtherWithholdingTax',
        'enasarco' => 'setEnasarco',
        'enasarco_type' => 'setEnasarcoType',
        'contributions_percentage' => 'setContributionsPercentage',
        'profit_coefficient' => 'setProfitCoefficient',
        'med' => 'setMed',
        'default_vat' => 'setDefaultVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_type' => 'getCompanyType',
        'company_subtype' => 'getCompanySubtype',
        'profession' => 'getProfession',
        'regime' => 'getRegime',
        'rivalsa_name' => 'getRivalsaName',
        'default_rivalsa' => 'getDefaultRivalsa',
        'cassa_name' => 'getCassaName',
        'default_cassa' => 'getDefaultCassa',
        'default_cassa_taxable' => 'getDefaultCassaTaxable',
        'cassa2_name' => 'getCassa2Name',
        'default_cassa2' => 'getDefaultCassa2',
        'default_cassa2_taxable' => 'getDefaultCassa2Taxable',
        'default_withholding_tax' => 'getDefaultWithholdingTax',
        'default_withholding_tax_taxable' => 'getDefaultWithholdingTaxTaxable',
        'default_other_withholding_tax' => 'getDefaultOtherWithholdingTax',
        'enasarco' => 'getEnasarco',
        'enasarco_type' => 'getEnasarcoType',
        'contributions_percentage' => 'getContributionsPercentage',
        'profit_coefficient' => 'getProfitCoefficient',
        'med' => 'getMed',
        'default_vat' => 'getDefaultVat'
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
        $this->setIfExists('company_type', $data ?? [], null);
        $this->setIfExists('company_subtype', $data ?? [], null);
        $this->setIfExists('profession', $data ?? [], null);
        $this->setIfExists('regime', $data ?? [], null);
        $this->setIfExists('rivalsa_name', $data ?? [], null);
        $this->setIfExists('default_rivalsa', $data ?? [], null);
        $this->setIfExists('cassa_name', $data ?? [], null);
        $this->setIfExists('default_cassa', $data ?? [], null);
        $this->setIfExists('default_cassa_taxable', $data ?? [], null);
        $this->setIfExists('cassa2_name', $data ?? [], null);
        $this->setIfExists('default_cassa2', $data ?? [], null);
        $this->setIfExists('default_cassa2_taxable', $data ?? [], null);
        $this->setIfExists('default_withholding_tax', $data ?? [], null);
        $this->setIfExists('default_withholding_tax_taxable', $data ?? [], null);
        $this->setIfExists('default_other_withholding_tax', $data ?? [], null);
        $this->setIfExists('enasarco', $data ?? [], null);
        $this->setIfExists('enasarco_type', $data ?? [], null);
        $this->setIfExists('contributions_percentage', $data ?? [], null);
        $this->setIfExists('profit_coefficient', $data ?? [], null);
        $this->setIfExists('med', $data ?? [], null);
        $this->setIfExists('default_vat', $data ?? [], null);
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
     * Gets company_type
     *
     * @return string|null
     */
    public function getCompanyType()
    {
        return $this->container['company_type'];
    }

    /**
     * Sets company_type
     *
     * @param string|null $company_type The company type
     *
     * @return self
     */
    public function setCompanyType($company_type)
    {
        if (is_null($company_type)) {
            array_push($this->openAPINullablesSetToNull, 'company_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company_type', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['company_type'] = $company_type;

        return $this;
    }

    /**
     * Gets company_subtype
     *
     * @return string|null
     */
    public function getCompanySubtype()
    {
        return $this->container['company_subtype'];
    }

    /**
     * Sets company_subtype
     *
     * @param string|null $company_subtype The company subtype
     *
     * @return self
     */
    public function setCompanySubtype($company_subtype)
    {
        if (is_null($company_subtype)) {
            array_push($this->openAPINullablesSetToNull, 'company_subtype');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company_subtype', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['company_subtype'] = $company_subtype;

        return $this;
    }

    /**
     * Gets profession
     *
     * @return string|null
     */
    public function getProfession()
    {
        return $this->container['profession'];
    }

    /**
     * Sets profession
     *
     * @param string|null $profession The profession
     *
     * @return self
     */
    public function setProfession($profession)
    {
        if (is_null($profession)) {
            array_push($this->openAPINullablesSetToNull, 'profession');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('profession', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['profession'] = $profession;

        return $this;
    }

    /**
     * Gets regime
     *
     * @return string|null
     */
    public function getRegime()
    {
        return $this->container['regime'];
    }

    /**
     * Sets regime
     *
     * @param string|null $regime The applied regime
     *
     * @return self
     */
    public function setRegime($regime)
    {
        if (is_null($regime)) {
            array_push($this->openAPINullablesSetToNull, 'regime');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('regime', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['regime'] = $regime;

        return $this;
    }

    /**
     * Gets rivalsa_name
     *
     * @return string|null
     */
    public function getRivalsaName()
    {
        return $this->container['rivalsa_name'];
    }

    /**
     * Sets rivalsa_name
     *
     * @param string|null $rivalsa_name The name of the rivalsa
     *
     * @return self
     */
    public function setRivalsaName($rivalsa_name)
    {
        if (is_null($rivalsa_name)) {
            array_push($this->openAPINullablesSetToNull, 'rivalsa_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rivalsa_name', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rivalsa_name'] = $rivalsa_name;

        return $this;
    }

    /**
     * Gets default_rivalsa
     *
     * @return float|null
     */
    public function getDefaultRivalsa()
    {
        return $this->container['default_rivalsa'];
    }

    /**
     * Sets default_rivalsa
     *
     * @param float|null $default_rivalsa The default rivalsa amount
     *
     * @return self
     */
    public function setDefaultRivalsa($default_rivalsa)
    {
        if (is_null($default_rivalsa)) {
            array_push($this->openAPINullablesSetToNull, 'default_rivalsa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_rivalsa', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_rivalsa'] = $default_rivalsa;

        return $this;
    }

    /**
     * Gets cassa_name
     *
     * @return string|null
     */
    public function getCassaName()
    {
        return $this->container['cassa_name'];
    }

    /**
     * Sets cassa_name
     *
     * @param string|null $cassa_name The name of the cassa
     *
     * @return self
     */
    public function setCassaName($cassa_name)
    {
        if (is_null($cassa_name)) {
            array_push($this->openAPINullablesSetToNull, 'cassa_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cassa_name', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cassa_name'] = $cassa_name;

        return $this;
    }

    /**
     * Gets default_cassa
     *
     * @return float|null
     */
    public function getDefaultCassa()
    {
        return $this->container['default_cassa'];
    }

    /**
     * Sets default_cassa
     *
     * @param float|null $default_cassa The default cassa amount
     *
     * @return self
     */
    public function setDefaultCassa($default_cassa)
    {
        if (is_null($default_cassa)) {
            array_push($this->openAPINullablesSetToNull, 'default_cassa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_cassa', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_cassa'] = $default_cassa;

        return $this;
    }

    /**
     * Gets default_cassa_taxable
     *
     * @return float|null
     */
    public function getDefaultCassaTaxable()
    {
        return $this->container['default_cassa_taxable'];
    }

    /**
     * Sets default_cassa_taxable
     *
     * @param float|null $default_cassa_taxable The default taxable amount for the cassa
     *
     * @return self
     */
    public function setDefaultCassaTaxable($default_cassa_taxable)
    {
        if (is_null($default_cassa_taxable)) {
            array_push($this->openAPINullablesSetToNull, 'default_cassa_taxable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_cassa_taxable', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_cassa_taxable'] = $default_cassa_taxable;

        return $this;
    }

    /**
     * Gets cassa2_name
     *
     * @return string|null
     */
    public function getCassa2Name()
    {
        return $this->container['cassa2_name'];
    }

    /**
     * Sets cassa2_name
     *
     * @param string|null $cassa2_name The name of the second cassa
     *
     * @return self
     */
    public function setCassa2Name($cassa2_name)
    {
        if (is_null($cassa2_name)) {
            array_push($this->openAPINullablesSetToNull, 'cassa2_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cassa2_name', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cassa2_name'] = $cassa2_name;

        return $this;
    }

    /**
     * Gets default_cassa2
     *
     * @return float|null
     */
    public function getDefaultCassa2()
    {
        return $this->container['default_cassa2'];
    }

    /**
     * Sets default_cassa2
     *
     * @param float|null $default_cassa2 The default second cassa amount
     *
     * @return self
     */
    public function setDefaultCassa2($default_cassa2)
    {
        if (is_null($default_cassa2)) {
            array_push($this->openAPINullablesSetToNull, 'default_cassa2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_cassa2', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_cassa2'] = $default_cassa2;

        return $this;
    }

    /**
     * Gets default_cassa2_taxable
     *
     * @return float|null
     */
    public function getDefaultCassa2Taxable()
    {
        return $this->container['default_cassa2_taxable'];
    }

    /**
     * Sets default_cassa2_taxable
     *
     * @param float|null $default_cassa2_taxable The default taxable amount for the second cassa
     *
     * @return self
     */
    public function setDefaultCassa2Taxable($default_cassa2_taxable)
    {
        if (is_null($default_cassa2_taxable)) {
            array_push($this->openAPINullablesSetToNull, 'default_cassa2_taxable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_cassa2_taxable', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_cassa2_taxable'] = $default_cassa2_taxable;

        return $this;
    }

    /**
     * Gets default_withholding_tax
     *
     * @return float|null
     */
    public function getDefaultWithholdingTax()
    {
        return $this->container['default_withholding_tax'];
    }

    /**
     * Sets default_withholding_tax
     *
     * @param float|null $default_withholding_tax The default withholding tax
     *
     * @return self
     */
    public function setDefaultWithholdingTax($default_withholding_tax)
    {
        if (is_null($default_withholding_tax)) {
            array_push($this->openAPINullablesSetToNull, 'default_withholding_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_withholding_tax', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_withholding_tax'] = $default_withholding_tax;

        return $this;
    }

    /**
     * Gets default_withholding_tax_taxable
     *
     * @return float|null
     */
    public function getDefaultWithholdingTaxTaxable()
    {
        return $this->container['default_withholding_tax_taxable'];
    }

    /**
     * Sets default_withholding_tax_taxable
     *
     * @param float|null $default_withholding_tax_taxable The default taxable amount for the withholding tax
     *
     * @return self
     */
    public function setDefaultWithholdingTaxTaxable($default_withholding_tax_taxable)
    {
        if (is_null($default_withholding_tax_taxable)) {
            array_push($this->openAPINullablesSetToNull, 'default_withholding_tax_taxable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_withholding_tax_taxable', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_withholding_tax_taxable'] = $default_withholding_tax_taxable;

        return $this;
    }

    /**
     * Gets default_other_withholding_tax
     *
     * @return float|null
     */
    public function getDefaultOtherWithholdingTax()
    {
        return $this->container['default_other_withholding_tax'];
    }

    /**
     * Sets default_other_withholding_tax
     *
     * @param float|null $default_other_withholding_tax The default other withholding tax
     *
     * @return self
     */
    public function setDefaultOtherWithholdingTax($default_other_withholding_tax)
    {
        if (is_null($default_other_withholding_tax)) {
            array_push($this->openAPINullablesSetToNull, 'default_other_withholding_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_other_withholding_tax', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_other_withholding_tax'] = $default_other_withholding_tax;

        return $this;
    }

    /**
     * Gets enasarco
     *
     * @return bool|null
     */
    public function getEnasarco()
    {
        return $this->container['enasarco'];
    }

    /**
     * Sets enasarco
     *
     * @param bool|null $enasarco If it has enasarco
     *
     * @return self
     */
    public function setEnasarco($enasarco)
    {
        if (is_null($enasarco)) {
            array_push($this->openAPINullablesSetToNull, 'enasarco');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enasarco', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enasarco'] = $enasarco;

        return $this;
    }

    /**
     * Gets enasarco_type
     *
     * @return string|null
     */
    public function getEnasarcoType()
    {
        return $this->container['enasarco_type'];
    }

    /**
     * Sets enasarco_type
     *
     * @param string|null $enasarco_type The enasarco type
     *
     * @return self
     */
    public function setEnasarcoType($enasarco_type)
    {
        if (is_null($enasarco_type)) {
            array_push($this->openAPINullablesSetToNull, 'enasarco_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enasarco_type', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enasarco_type'] = $enasarco_type;

        return $this;
    }

    /**
     * Gets contributions_percentage
     *
     * @return float|null
     */
    public function getContributionsPercentage()
    {
        return $this->container['contributions_percentage'];
    }

    /**
     * Sets contributions_percentage
     *
     * @param float|null $contributions_percentage The contributions percentage
     *
     * @return self
     */
    public function setContributionsPercentage($contributions_percentage)
    {
        if (is_null($contributions_percentage)) {
            array_push($this->openAPINullablesSetToNull, 'contributions_percentage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contributions_percentage', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contributions_percentage'] = $contributions_percentage;

        return $this;
    }

    /**
     * Gets profit_coefficient
     *
     * @return float|null
     */
    public function getProfitCoefficient()
    {
        return $this->container['profit_coefficient'];
    }

    /**
     * Sets profit_coefficient
     *
     * @param float|null $profit_coefficient The profit coefficient
     *
     * @return self
     */
    public function setProfitCoefficient($profit_coefficient)
    {
        if (is_null($profit_coefficient)) {
            array_push($this->openAPINullablesSetToNull, 'profit_coefficient');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('profit_coefficient', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['profit_coefficient'] = $profit_coefficient;

        return $this;
    }

    /**
     * Gets med
     *
     * @return bool|null
     */
    public function getMed()
    {
        return $this->container['med'];
    }

    /**
     * Sets med
     *
     * @param bool|null $med If the health card system is active
     *
     * @return self
     */
    public function setMed($med)
    {
        if (is_null($med)) {
            array_push($this->openAPINullablesSetToNull, 'med');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('med', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['med'] = $med;

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


