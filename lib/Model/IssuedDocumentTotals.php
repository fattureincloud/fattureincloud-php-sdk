<?php
/**
 * IssuedDocumentTotals
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
 * IssuedDocumentTotals Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class IssuedDocumentTotals implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssuedDocumentTotals';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount_net' => 'float',
        'amount_rivalsa' => 'float',
        'amount_net_with_rivalsa' => 'float',
        'amount_cassa' => 'float',
        'taxable_amount' => 'float',
        'not_taxable_amount' => 'float',
        'amount_vat' => 'float',
        'amount_gross' => 'float',
        'taxable_amount_withholding_tax' => 'float',
        'amount_withholding_tax' => 'float',
        'taxable_amount_other_withholding_tax' => 'float',
        'amount_other_withholding_tax' => 'float',
        'stamp_duty' => 'float',
        'amount_due' => 'float',
        'is_enasarco_maximal_exceeded' => 'bool',
        'payments_sum' => 'float',
        'vat_list' => 'array<string,\FattureInCloud\Model\VatItem>'
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
        'amount_rivalsa' => null,
        'amount_net_with_rivalsa' => null,
        'amount_cassa' => null,
        'taxable_amount' => null,
        'not_taxable_amount' => null,
        'amount_vat' => null,
        'amount_gross' => null,
        'taxable_amount_withholding_tax' => null,
        'amount_withholding_tax' => null,
        'taxable_amount_other_withholding_tax' => null,
        'amount_other_withholding_tax' => null,
        'stamp_duty' => null,
        'amount_due' => null,
        'is_enasarco_maximal_exceeded' => null,
        'payments_sum' => null,
        'vat_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'amount_net' => true,
            'amount_rivalsa' => true,
            'amount_net_with_rivalsa' => true,
            'amount_cassa' => true,
            'taxable_amount' => true,
            'not_taxable_amount' => true,
            'amount_vat' => true,
            'amount_gross' => true,
            'taxable_amount_withholding_tax' => true,
            'amount_withholding_tax' => true,
            'taxable_amount_other_withholding_tax' => true,
            'amount_other_withholding_tax' => true,
            'stamp_duty' => true,
            'amount_due' => true,
            'is_enasarco_maximal_exceeded' => true,
            'payments_sum' => true,
            'vat_list' => false
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
        'amount_net' => 'amount_net',
        'amount_rivalsa' => 'amount_rivalsa',
        'amount_net_with_rivalsa' => 'amount_net_with_rivalsa',
        'amount_cassa' => 'amount_cassa',
        'taxable_amount' => 'taxable_amount',
        'not_taxable_amount' => 'not_taxable_amount',
        'amount_vat' => 'amount_vat',
        'amount_gross' => 'amount_gross',
        'taxable_amount_withholding_tax' => 'taxable_amount_withholding_tax',
        'amount_withholding_tax' => 'amount_withholding_tax',
        'taxable_amount_other_withholding_tax' => 'taxable_amount_other_withholding_tax',
        'amount_other_withholding_tax' => 'amount_other_withholding_tax',
        'stamp_duty' => 'stamp_duty',
        'amount_due' => 'amount_due',
        'is_enasarco_maximal_exceeded' => 'is_enasarco_maximal_exceeded',
        'payments_sum' => 'payments_sum',
        'vat_list' => 'vat_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_net' => 'setAmountNet',
        'amount_rivalsa' => 'setAmountRivalsa',
        'amount_net_with_rivalsa' => 'setAmountNetWithRivalsa',
        'amount_cassa' => 'setAmountCassa',
        'taxable_amount' => 'setTaxableAmount',
        'not_taxable_amount' => 'setNotTaxableAmount',
        'amount_vat' => 'setAmountVat',
        'amount_gross' => 'setAmountGross',
        'taxable_amount_withholding_tax' => 'setTaxableAmountWithholdingTax',
        'amount_withholding_tax' => 'setAmountWithholdingTax',
        'taxable_amount_other_withholding_tax' => 'setTaxableAmountOtherWithholdingTax',
        'amount_other_withholding_tax' => 'setAmountOtherWithholdingTax',
        'stamp_duty' => 'setStampDuty',
        'amount_due' => 'setAmountDue',
        'is_enasarco_maximal_exceeded' => 'setIsEnasarcoMaximalExceeded',
        'payments_sum' => 'setPaymentsSum',
        'vat_list' => 'setVatList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_net' => 'getAmountNet',
        'amount_rivalsa' => 'getAmountRivalsa',
        'amount_net_with_rivalsa' => 'getAmountNetWithRivalsa',
        'amount_cassa' => 'getAmountCassa',
        'taxable_amount' => 'getTaxableAmount',
        'not_taxable_amount' => 'getNotTaxableAmount',
        'amount_vat' => 'getAmountVat',
        'amount_gross' => 'getAmountGross',
        'taxable_amount_withholding_tax' => 'getTaxableAmountWithholdingTax',
        'amount_withholding_tax' => 'getAmountWithholdingTax',
        'taxable_amount_other_withholding_tax' => 'getTaxableAmountOtherWithholdingTax',
        'amount_other_withholding_tax' => 'getAmountOtherWithholdingTax',
        'stamp_duty' => 'getStampDuty',
        'amount_due' => 'getAmountDue',
        'is_enasarco_maximal_exceeded' => 'getIsEnasarcoMaximalExceeded',
        'payments_sum' => 'getPaymentsSum',
        'vat_list' => 'getVatList'
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
        $this->setIfExists('amount_net', $data ?? [], null);
        $this->setIfExists('amount_rivalsa', $data ?? [], null);
        $this->setIfExists('amount_net_with_rivalsa', $data ?? [], null);
        $this->setIfExists('amount_cassa', $data ?? [], null);
        $this->setIfExists('taxable_amount', $data ?? [], null);
        $this->setIfExists('not_taxable_amount', $data ?? [], null);
        $this->setIfExists('amount_vat', $data ?? [], null);
        $this->setIfExists('amount_gross', $data ?? [], null);
        $this->setIfExists('taxable_amount_withholding_tax', $data ?? [], null);
        $this->setIfExists('amount_withholding_tax', $data ?? [], null);
        $this->setIfExists('taxable_amount_other_withholding_tax', $data ?? [], null);
        $this->setIfExists('amount_other_withholding_tax', $data ?? [], null);
        $this->setIfExists('stamp_duty', $data ?? [], null);
        $this->setIfExists('amount_due', $data ?? [], null);
        $this->setIfExists('is_enasarco_maximal_exceeded', $data ?? [], null);
        $this->setIfExists('payments_sum', $data ?? [], null);
        $this->setIfExists('vat_list', $data ?? [], null);
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
     * @param float|null $amount_net Issued document total net amount
     *
     * @return self
     */
    public function setAmountNet($amount_net)
    {
        if (is_null($amount_net)) {
            array_push($this->openAPINullablesSetToNull, 'amount_net');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_net', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_net'] = $amount_net;

        return $this;
    }

    /**
     * Gets amount_rivalsa
     *
     * @return float|null
     */
    public function getAmountRivalsa()
    {
        return $this->container['amount_rivalsa'];
    }

    /**
     * Sets amount_rivalsa
     *
     * @param float|null $amount_rivalsa Issued document rivalsa amount
     *
     * @return self
     */
    public function setAmountRivalsa($amount_rivalsa)
    {
        if (is_null($amount_rivalsa)) {
            array_push($this->openAPINullablesSetToNull, 'amount_rivalsa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_rivalsa', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_rivalsa'] = $amount_rivalsa;

        return $this;
    }

    /**
     * Gets amount_net_with_rivalsa
     *
     * @return float|null
     */
    public function getAmountNetWithRivalsa()
    {
        return $this->container['amount_net_with_rivalsa'];
    }

    /**
     * Sets amount_net_with_rivalsa
     *
     * @param float|null $amount_net_with_rivalsa Issued document net amount with rivalsa
     *
     * @return self
     */
    public function setAmountNetWithRivalsa($amount_net_with_rivalsa)
    {
        if (is_null($amount_net_with_rivalsa)) {
            array_push($this->openAPINullablesSetToNull, 'amount_net_with_rivalsa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_net_with_rivalsa', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_net_with_rivalsa'] = $amount_net_with_rivalsa;

        return $this;
    }

    /**
     * Gets amount_cassa
     *
     * @return float|null
     */
    public function getAmountCassa()
    {
        return $this->container['amount_cassa'];
    }

    /**
     * Sets amount_cassa
     *
     * @param float|null $amount_cassa Issued document cassa amount
     *
     * @return self
     */
    public function setAmountCassa($amount_cassa)
    {
        if (is_null($amount_cassa)) {
            array_push($this->openAPINullablesSetToNull, 'amount_cassa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_cassa', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_cassa'] = $amount_cassa;

        return $this;
    }

    /**
     * Gets taxable_amount
     *
     * @return float|null
     */
    public function getTaxableAmount()
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount
     *
     * @param float|null $taxable_amount Issued document taxable amount
     *
     * @return self
     */
    public function setTaxableAmount($taxable_amount)
    {
        if (is_null($taxable_amount)) {
            array_push($this->openAPINullablesSetToNull, 'taxable_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxable_amount', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxable_amount'] = $taxable_amount;

        return $this;
    }

    /**
     * Gets not_taxable_amount
     *
     * @return float|null
     */
    public function getNotTaxableAmount()
    {
        return $this->container['not_taxable_amount'];
    }

    /**
     * Sets not_taxable_amount
     *
     * @param float|null $not_taxable_amount Issued document not taxable amount
     *
     * @return self
     */
    public function setNotTaxableAmount($not_taxable_amount)
    {
        if (is_null($not_taxable_amount)) {
            array_push($this->openAPINullablesSetToNull, 'not_taxable_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('not_taxable_amount', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['not_taxable_amount'] = $not_taxable_amount;

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
     * @param float|null $amount_vat Issued document total vat amount
     *
     * @return self
     */
    public function setAmountVat($amount_vat)
    {
        if (is_null($amount_vat)) {
            array_push($this->openAPINullablesSetToNull, 'amount_vat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_vat', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
     * @param float|null $amount_gross Issued document total gross amount
     *
     * @return self
     */
    public function setAmountGross($amount_gross)
    {
        if (is_null($amount_gross)) {
            array_push($this->openAPINullablesSetToNull, 'amount_gross');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_gross', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_gross'] = $amount_gross;

        return $this;
    }

    /**
     * Gets taxable_amount_withholding_tax
     *
     * @return float|null
     */
    public function getTaxableAmountWithholdingTax()
    {
        return $this->container['taxable_amount_withholding_tax'];
    }

    /**
     * Sets taxable_amount_withholding_tax
     *
     * @param float|null $taxable_amount_withholding_tax Issued document Taxable withholding tax amount
     *
     * @return self
     */
    public function setTaxableAmountWithholdingTax($taxable_amount_withholding_tax)
    {
        if (is_null($taxable_amount_withholding_tax)) {
            array_push($this->openAPINullablesSetToNull, 'taxable_amount_withholding_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxable_amount_withholding_tax', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxable_amount_withholding_tax'] = $taxable_amount_withholding_tax;

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
     * @param float|null $amount_withholding_tax Issued document withholding tax amount
     *
     * @return self
     */
    public function setAmountWithholdingTax($amount_withholding_tax)
    {
        if (is_null($amount_withholding_tax)) {
            array_push($this->openAPINullablesSetToNull, 'amount_withholding_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_withholding_tax', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_withholding_tax'] = $amount_withholding_tax;

        return $this;
    }

    /**
     * Gets taxable_amount_other_withholding_tax
     *
     * @return float|null
     */
    public function getTaxableAmountOtherWithholdingTax()
    {
        return $this->container['taxable_amount_other_withholding_tax'];
    }

    /**
     * Sets taxable_amount_other_withholding_tax
     *
     * @param float|null $taxable_amount_other_withholding_tax Issued document other withholding tax taxable amount
     *
     * @return self
     */
    public function setTaxableAmountOtherWithholdingTax($taxable_amount_other_withholding_tax)
    {
        if (is_null($taxable_amount_other_withholding_tax)) {
            array_push($this->openAPINullablesSetToNull, 'taxable_amount_other_withholding_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxable_amount_other_withholding_tax', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxable_amount_other_withholding_tax'] = $taxable_amount_other_withholding_tax;

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
     * @param float|null $amount_other_withholding_tax Issued document other withholding tax amount
     *
     * @return self
     */
    public function setAmountOtherWithholdingTax($amount_other_withholding_tax)
    {
        if (is_null($amount_other_withholding_tax)) {
            array_push($this->openAPINullablesSetToNull, 'amount_other_withholding_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_other_withholding_tax', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_other_withholding_tax'] = $amount_other_withholding_tax;

        return $this;
    }

    /**
     * Gets stamp_duty
     *
     * @return float|null
     */
    public function getStampDuty()
    {
        return $this->container['stamp_duty'];
    }

    /**
     * Sets stamp_duty
     *
     * @param float|null $stamp_duty Issued document stamp duty value [0 if not present].
     *
     * @return self
     */
    public function setStampDuty($stamp_duty)
    {
        if (is_null($stamp_duty)) {
            array_push($this->openAPINullablesSetToNull, 'stamp_duty');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stamp_duty', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stamp_duty'] = $stamp_duty;

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
     * @param float|null $amount_due Issued document total amount due
     *
     * @return self
     */
    public function setAmountDue($amount_due)
    {
        if (is_null($amount_due)) {
            array_push($this->openAPINullablesSetToNull, 'amount_due');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_due', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_due'] = $amount_due;

        return $this;
    }

    /**
     * Gets is_enasarco_maximal_exceeded
     *
     * @return bool|null
     */
    public function getIsEnasarcoMaximalExceeded()
    {
        return $this->container['is_enasarco_maximal_exceeded'];
    }

    /**
     * Sets is_enasarco_maximal_exceeded
     *
     * @param bool|null $is_enasarco_maximal_exceeded Is enasarco maximal excedeed
     *
     * @return self
     */
    public function setIsEnasarcoMaximalExceeded($is_enasarco_maximal_exceeded)
    {
        if (is_null($is_enasarco_maximal_exceeded)) {
            array_push($this->openAPINullablesSetToNull, 'is_enasarco_maximal_exceeded');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_enasarco_maximal_exceeded', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_enasarco_maximal_exceeded'] = $is_enasarco_maximal_exceeded;

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
     * @param float|null $payments_sum Issued document payments sum
     *
     * @return self
     */
    public function setPaymentsSum($payments_sum)
    {
        if (is_null($payments_sum)) {
            array_push($this->openAPINullablesSetToNull, 'payments_sum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payments_sum', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payments_sum'] = $payments_sum;

        return $this;
    }

    /**
     * Gets vat_list
     *
     * @return array<string,\FattureInCloud\Model\VatItem>|null
     */
    public function getVatList()
    {
        return $this->container['vat_list'];
    }

    /**
     * Sets vat_list
     *
     * @param array<string,\FattureInCloud\Model\VatItem>|null $vat_list vat_list
     *
     * @return self
     */
    public function setVatList($vat_list)
    {
        if (is_null($vat_list)) {
            throw new \InvalidArgumentException('non-nullable vat_list cannot be null');
        }
        $this->container['vat_list'] = $vat_list;

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


