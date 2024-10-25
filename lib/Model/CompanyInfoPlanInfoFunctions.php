<?php
/**
 * CompanyInfoPlanInfoFunctions
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
 * CompanyInfoPlanInfoFunctions Class Doc Comment
 *
 * @category Class
 * @description Access to functions for this company.
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class CompanyInfoPlanInfoFunctions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompanyInfo_plan_info_functions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'archive' => 'bool',
        'cerved' => 'bool',
        'document_attachments' => 'bool',
        'e_invoice' => 'bool',
        'genius' => 'bool',
        'mail_tracking' => 'bool',
        'payment_notifications' => 'bool',
        'paypal' => 'bool',
        'receipts' => 'bool',
        'recurring' => 'bool',
        'smtp' => 'bool',
        'sofort' => 'bool',
        'stock' => 'bool',
        'subaccounts' => 'bool',
        'tessera_sanitaria' => 'bool',
        'ts_digital' => 'bool',
        'ts_invoice_trading' => 'bool',
        'ts_pay' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'archive' => null,
        'cerved' => null,
        'document_attachments' => null,
        'e_invoice' => null,
        'genius' => null,
        'mail_tracking' => null,
        'payment_notifications' => null,
        'paypal' => null,
        'receipts' => null,
        'recurring' => null,
        'smtp' => null,
        'sofort' => null,
        'stock' => null,
        'subaccounts' => null,
        'tessera_sanitaria' => null,
        'ts_digital' => null,
        'ts_invoice_trading' => null,
        'ts_pay' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'archive' => true,
        'cerved' => true,
        'document_attachments' => true,
        'e_invoice' => true,
        'genius' => true,
        'mail_tracking' => true,
        'payment_notifications' => true,
        'paypal' => true,
        'receipts' => true,
        'recurring' => true,
        'smtp' => true,
        'sofort' => true,
        'stock' => true,
        'subaccounts' => true,
        'tessera_sanitaria' => true,
        'ts_digital' => true,
        'ts_invoice_trading' => true,
        'ts_pay' => true
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
        'archive' => 'archive',
        'cerved' => 'cerved',
        'document_attachments' => 'document_attachments',
        'e_invoice' => 'e_invoice',
        'genius' => 'genius',
        'mail_tracking' => 'mail_tracking',
        'payment_notifications' => 'payment_notifications',
        'paypal' => 'paypal',
        'receipts' => 'receipts',
        'recurring' => 'recurring',
        'smtp' => 'smtp',
        'sofort' => 'sofort',
        'stock' => 'stock',
        'subaccounts' => 'subaccounts',
        'tessera_sanitaria' => 'tessera_sanitaria',
        'ts_digital' => 'ts_digital',
        'ts_invoice_trading' => 'ts_invoice_trading',
        'ts_pay' => 'ts_pay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'archive' => 'setArchive',
        'cerved' => 'setCerved',
        'document_attachments' => 'setDocumentAttachments',
        'e_invoice' => 'setEInvoice',
        'genius' => 'setGenius',
        'mail_tracking' => 'setMailTracking',
        'payment_notifications' => 'setPaymentNotifications',
        'paypal' => 'setPaypal',
        'receipts' => 'setReceipts',
        'recurring' => 'setRecurring',
        'smtp' => 'setSmtp',
        'sofort' => 'setSofort',
        'stock' => 'setStock',
        'subaccounts' => 'setSubaccounts',
        'tessera_sanitaria' => 'setTesseraSanitaria',
        'ts_digital' => 'setTsDigital',
        'ts_invoice_trading' => 'setTsInvoiceTrading',
        'ts_pay' => 'setTsPay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'archive' => 'getArchive',
        'cerved' => 'getCerved',
        'document_attachments' => 'getDocumentAttachments',
        'e_invoice' => 'getEInvoice',
        'genius' => 'getGenius',
        'mail_tracking' => 'getMailTracking',
        'payment_notifications' => 'getPaymentNotifications',
        'paypal' => 'getPaypal',
        'receipts' => 'getReceipts',
        'recurring' => 'getRecurring',
        'smtp' => 'getSmtp',
        'sofort' => 'getSofort',
        'stock' => 'getStock',
        'subaccounts' => 'getSubaccounts',
        'tessera_sanitaria' => 'getTesseraSanitaria',
        'ts_digital' => 'getTsDigital',
        'ts_invoice_trading' => 'getTsInvoiceTrading',
        'ts_pay' => 'getTsPay'
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
        $this->setIfExists('archive', $data ?? [], null);
        $this->setIfExists('cerved', $data ?? [], null);
        $this->setIfExists('document_attachments', $data ?? [], null);
        $this->setIfExists('e_invoice', $data ?? [], null);
        $this->setIfExists('genius', $data ?? [], null);
        $this->setIfExists('mail_tracking', $data ?? [], null);
        $this->setIfExists('payment_notifications', $data ?? [], null);
        $this->setIfExists('paypal', $data ?? [], null);
        $this->setIfExists('receipts', $data ?? [], null);
        $this->setIfExists('recurring', $data ?? [], null);
        $this->setIfExists('smtp', $data ?? [], null);
        $this->setIfExists('sofort', $data ?? [], null);
        $this->setIfExists('stock', $data ?? [], null);
        $this->setIfExists('subaccounts', $data ?? [], null);
        $this->setIfExists('tessera_sanitaria', $data ?? [], null);
        $this->setIfExists('ts_digital', $data ?? [], null);
        $this->setIfExists('ts_invoice_trading', $data ?? [], null);
        $this->setIfExists('ts_pay', $data ?? [], null);
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
     * Gets archive
     *
     * @return bool|null
     */
    public function getArchive()
    {
        return $this->container['archive'];
    }

    /**
     * Sets archive
     *
     * @param bool|null $archive archive
     *
     * @return self
     */
    public function setArchive($archive)
    {
        if (is_null($archive)) {
            array_push($this->openAPINullablesSetToNull, 'archive');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('archive', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['archive'] = $archive;

        return $this;
    }

    /**
     * Gets cerved
     *
     * @return bool|null
     */
    public function getCerved()
    {
        return $this->container['cerved'];
    }

    /**
     * Sets cerved
     *
     * @param bool|null $cerved cerved
     *
     * @return self
     */
    public function setCerved($cerved)
    {
        if (is_null($cerved)) {
            array_push($this->openAPINullablesSetToNull, 'cerved');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cerved', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cerved'] = $cerved;

        return $this;
    }

    /**
     * Gets document_attachments
     *
     * @return bool|null
     */
    public function getDocumentAttachments()
    {
        return $this->container['document_attachments'];
    }

    /**
     * Sets document_attachments
     *
     * @param bool|null $document_attachments document_attachments
     *
     * @return self
     */
    public function setDocumentAttachments($document_attachments)
    {
        if (is_null($document_attachments)) {
            array_push($this->openAPINullablesSetToNull, 'document_attachments');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('document_attachments', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['document_attachments'] = $document_attachments;

        return $this;
    }

    /**
     * Gets e_invoice
     *
     * @return bool|null
     */
    public function getEInvoice()
    {
        return $this->container['e_invoice'];
    }

    /**
     * Sets e_invoice
     *
     * @param bool|null $e_invoice e_invoice
     *
     * @return self
     */
    public function setEInvoice($e_invoice)
    {
        if (is_null($e_invoice)) {
            array_push($this->openAPINullablesSetToNull, 'e_invoice');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('e_invoice', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['e_invoice'] = $e_invoice;

        return $this;
    }

    /**
     * Gets genius
     *
     * @return bool|null
     */
    public function getGenius()
    {
        return $this->container['genius'];
    }

    /**
     * Sets genius
     *
     * @param bool|null $genius genius
     *
     * @return self
     */
    public function setGenius($genius)
    {
        if (is_null($genius)) {
            array_push($this->openAPINullablesSetToNull, 'genius');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('genius', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['genius'] = $genius;

        return $this;
    }

    /**
     * Gets mail_tracking
     *
     * @return bool|null
     */
    public function getMailTracking()
    {
        return $this->container['mail_tracking'];
    }

    /**
     * Sets mail_tracking
     *
     * @param bool|null $mail_tracking mail_tracking
     *
     * @return self
     */
    public function setMailTracking($mail_tracking)
    {
        if (is_null($mail_tracking)) {
            array_push($this->openAPINullablesSetToNull, 'mail_tracking');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mail_tracking', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mail_tracking'] = $mail_tracking;

        return $this;
    }

    /**
     * Gets payment_notifications
     *
     * @return bool|null
     */
    public function getPaymentNotifications()
    {
        return $this->container['payment_notifications'];
    }

    /**
     * Sets payment_notifications
     *
     * @param bool|null $payment_notifications payment_notifications
     *
     * @return self
     */
    public function setPaymentNotifications($payment_notifications)
    {
        if (is_null($payment_notifications)) {
            array_push($this->openAPINullablesSetToNull, 'payment_notifications');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_notifications', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_notifications'] = $payment_notifications;

        return $this;
    }

    /**
     * Gets paypal
     *
     * @return bool|null
     */
    public function getPaypal()
    {
        return $this->container['paypal'];
    }

    /**
     * Sets paypal
     *
     * @param bool|null $paypal paypal
     *
     * @return self
     */
    public function setPaypal($paypal)
    {
        if (is_null($paypal)) {
            array_push($this->openAPINullablesSetToNull, 'paypal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paypal', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paypal'] = $paypal;

        return $this;
    }

    /**
     * Gets receipts
     *
     * @return bool|null
     */
    public function getReceipts()
    {
        return $this->container['receipts'];
    }

    /**
     * Sets receipts
     *
     * @param bool|null $receipts receipts
     *
     * @return self
     */
    public function setReceipts($receipts)
    {
        if (is_null($receipts)) {
            array_push($this->openAPINullablesSetToNull, 'receipts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('receipts', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['receipts'] = $receipts;

        return $this;
    }

    /**
     * Gets recurring
     *
     * @return bool|null
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     *
     * @param bool|null $recurring recurring
     *
     * @return self
     */
    public function setRecurring($recurring)
    {
        if (is_null($recurring)) {
            array_push($this->openAPINullablesSetToNull, 'recurring');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recurring', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Gets smtp
     *
     * @return bool|null
     */
    public function getSmtp()
    {
        return $this->container['smtp'];
    }

    /**
     * Sets smtp
     *
     * @param bool|null $smtp smtp
     *
     * @return self
     */
    public function setSmtp($smtp)
    {
        if (is_null($smtp)) {
            array_push($this->openAPINullablesSetToNull, 'smtp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('smtp', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['smtp'] = $smtp;

        return $this;
    }

    /**
     * Gets sofort
     *
     * @return bool|null
     */
    public function getSofort()
    {
        return $this->container['sofort'];
    }

    /**
     * Sets sofort
     *
     * @param bool|null $sofort sofort
     *
     * @return self
     */
    public function setSofort($sofort)
    {
        if (is_null($sofort)) {
            array_push($this->openAPINullablesSetToNull, 'sofort');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sofort', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sofort'] = $sofort;

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
        if (is_null($stock)) {
            array_push($this->openAPINullablesSetToNull, 'stock');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stock', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets subaccounts
     *
     * @return bool|null
     */
    public function getSubaccounts()
    {
        return $this->container['subaccounts'];
    }

    /**
     * Sets subaccounts
     *
     * @param bool|null $subaccounts subaccounts
     *
     * @return self
     */
    public function setSubaccounts($subaccounts)
    {
        if (is_null($subaccounts)) {
            array_push($this->openAPINullablesSetToNull, 'subaccounts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subaccounts', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['subaccounts'] = $subaccounts;

        return $this;
    }

    /**
     * Gets tessera_sanitaria
     *
     * @return bool|null
     */
    public function getTesseraSanitaria()
    {
        return $this->container['tessera_sanitaria'];
    }

    /**
     * Sets tessera_sanitaria
     *
     * @param bool|null $tessera_sanitaria tessera_sanitaria
     *
     * @return self
     */
    public function setTesseraSanitaria($tessera_sanitaria)
    {
        if (is_null($tessera_sanitaria)) {
            array_push($this->openAPINullablesSetToNull, 'tessera_sanitaria');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tessera_sanitaria', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tessera_sanitaria'] = $tessera_sanitaria;

        return $this;
    }

    /**
     * Gets ts_digital
     *
     * @return bool|null
     */
    public function getTsDigital()
    {
        return $this->container['ts_digital'];
    }

    /**
     * Sets ts_digital
     *
     * @param bool|null $ts_digital ts_digital
     *
     * @return self
     */
    public function setTsDigital($ts_digital)
    {
        if (is_null($ts_digital)) {
            array_push($this->openAPINullablesSetToNull, 'ts_digital');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ts_digital', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ts_digital'] = $ts_digital;

        return $this;
    }

    /**
     * Gets ts_invoice_trading
     *
     * @return bool|null
     */
    public function getTsInvoiceTrading()
    {
        return $this->container['ts_invoice_trading'];
    }

    /**
     * Sets ts_invoice_trading
     *
     * @param bool|null $ts_invoice_trading ts_invoice_trading
     *
     * @return self
     */
    public function setTsInvoiceTrading($ts_invoice_trading)
    {
        if (is_null($ts_invoice_trading)) {
            array_push($this->openAPINullablesSetToNull, 'ts_invoice_trading');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ts_invoice_trading', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ts_invoice_trading'] = $ts_invoice_trading;

        return $this;
    }

    /**
     * Gets ts_pay
     *
     * @return bool|null
     */
    public function getTsPay()
    {
        return $this->container['ts_pay'];
    }

    /**
     * Sets ts_pay
     *
     * @param bool|null $ts_pay ts_pay
     *
     * @return self
     */
    public function setTsPay($ts_pay)
    {
        if (is_null($ts_pay)) {
            array_push($this->openAPINullablesSetToNull, 'ts_pay');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ts_pay', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ts_pay'] = $ts_pay;

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


