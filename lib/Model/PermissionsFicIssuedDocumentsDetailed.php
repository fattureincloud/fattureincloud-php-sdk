<?php
/**
 * PermissionsFicIssuedDocumentsDetailed
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
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 400.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.
 *
 * The version of the OpenAPI document: 2.0.19
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
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
 * PermissionsFicIssuedDocumentsDetailed Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class PermissionsFicIssuedDocumentsDetailed implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Permissions_fic_issued_documents_detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quotes' => '\FattureInCloud\Model\PermissionLevel',
        'proformas' => '\FattureInCloud\Model\PermissionLevel',
        'invoices' => '\FattureInCloud\Model\PermissionLevel',
        'receipts' => '\FattureInCloud\Model\PermissionLevel',
        'delivery_notes' => '\FattureInCloud\Model\PermissionLevel',
        'credit_notes' => '\FattureInCloud\Model\PermissionLevel',
        'orders' => '\FattureInCloud\Model\PermissionLevel',
        'work_reports' => '\FattureInCloud\Model\PermissionLevel',
        'supplier_orders' => '\FattureInCloud\Model\PermissionLevel',
        'self_invoices' => '\FattureInCloud\Model\PermissionLevel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'quotes' => null,
        'proformas' => null,
        'invoices' => null,
        'receipts' => null,
        'delivery_notes' => null,
        'credit_notes' => null,
        'orders' => null,
        'work_reports' => null,
        'supplier_orders' => null,
        'self_invoices' => null
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
        'quotes' => 'quotes',
        'proformas' => 'proformas',
        'invoices' => 'invoices',
        'receipts' => 'receipts',
        'delivery_notes' => 'delivery_notes',
        'credit_notes' => 'credit_notes',
        'orders' => 'orders',
        'work_reports' => 'work_reports',
        'supplier_orders' => 'supplier_orders',
        'self_invoices' => 'self_invoices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quotes' => 'setQuotes',
        'proformas' => 'setProformas',
        'invoices' => 'setInvoices',
        'receipts' => 'setReceipts',
        'delivery_notes' => 'setDeliveryNotes',
        'credit_notes' => 'setCreditNotes',
        'orders' => 'setOrders',
        'work_reports' => 'setWorkReports',
        'supplier_orders' => 'setSupplierOrders',
        'self_invoices' => 'setSelfInvoices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quotes' => 'getQuotes',
        'proformas' => 'getProformas',
        'invoices' => 'getInvoices',
        'receipts' => 'getReceipts',
        'delivery_notes' => 'getDeliveryNotes',
        'credit_notes' => 'getCreditNotes',
        'orders' => 'getOrders',
        'work_reports' => 'getWorkReports',
        'supplier_orders' => 'getSupplierOrders',
        'self_invoices' => 'getSelfInvoices'
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
        $this->container['quotes'] = $data['quotes'] ?? null;
        $this->container['proformas'] = $data['proformas'] ?? null;
        $this->container['invoices'] = $data['invoices'] ?? null;
        $this->container['receipts'] = $data['receipts'] ?? null;
        $this->container['delivery_notes'] = $data['delivery_notes'] ?? null;
        $this->container['credit_notes'] = $data['credit_notes'] ?? null;
        $this->container['orders'] = $data['orders'] ?? null;
        $this->container['work_reports'] = $data['work_reports'] ?? null;
        $this->container['supplier_orders'] = $data['supplier_orders'] ?? null;
        $this->container['self_invoices'] = $data['self_invoices'] ?? null;
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
     * Gets quotes
     *
     * @return string|null
     */
    public function getQuotes()
    {
        return $this->container['quotes'];
    }

    /**
     * Sets quotes, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $quotes quotes
     *
     * @return self
     */
    public function setQuotes($quotes)
    {
        $this->container['quotes'] = $quotes;

        return $this;
    }

    /**
     * Gets proformas
     *
     * @return string|null
     */
    public function getProformas()
    {
        return $this->container['proformas'];
    }

    /**
     * Sets proformas, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $proformas proformas
     *
     * @return self
     */
    public function setProformas($proformas)
    {
        $this->container['proformas'] = $proformas;

        return $this;
    }

    /**
     * Gets invoices
     *
     * @return string|null
     */
    public function getInvoices()
    {
        return $this->container['invoices'];
    }

    /**
     * Sets invoices, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $invoices invoices
     *
     * @return self
     */
    public function setInvoices($invoices)
    {
        $this->container['invoices'] = $invoices;

        return $this;
    }

    /**
     * Gets receipts
     *
     * @return string|null
     */
    public function getReceipts()
    {
        return $this->container['receipts'];
    }

    /**
     * Sets receipts, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $receipts receipts
     *
     * @return self
     */
    public function setReceipts($receipts)
    {
        $this->container['receipts'] = $receipts;

        return $this;
    }

    /**
     * Gets delivery_notes
     *
     * @return string|null
     */
    public function getDeliveryNotes()
    {
        return $this->container['delivery_notes'];
    }

    /**
     * Sets delivery_notes, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $delivery_notes delivery_notes
     *
     * @return self
     */
    public function setDeliveryNotes($delivery_notes)
    {
        $this->container['delivery_notes'] = $delivery_notes;

        return $this;
    }

    /**
     * Gets credit_notes
     *
     * @return string|null
     */
    public function getCreditNotes()
    {
        return $this->container['credit_notes'];
    }

    /**
     * Sets credit_notes, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $credit_notes credit_notes
     *
     * @return self
     */
    public function setCreditNotes($credit_notes)
    {
        $this->container['credit_notes'] = $credit_notes;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return string|null
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $orders orders
     *
     * @return self
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets work_reports
     *
     * @return string|null
     */
    public function getWorkReports()
    {
        return $this->container['work_reports'];
    }

    /**
     * Sets work_reports, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $work_reports work_reports
     *
     * @return self
     */
    public function setWorkReports($work_reports)
    {
        $this->container['work_reports'] = $work_reports;

        return $this;
    }

    /**
     * Gets supplier_orders
     *
     * @return string|null
     */
    public function getSupplierOrders()
    {
        return $this->container['supplier_orders'];
    }

    /**
     * Sets supplier_orders, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $supplier_orders supplier_orders
     *
     * @return self
     */
    public function setSupplierOrders($supplier_orders)
    {
        $this->container['supplier_orders'] = $supplier_orders;

        return $this;
    }

    /**
     * Gets self_invoices
     *
     * @return string|null
     */
    public function getSelfInvoices()
    {
        return $this->container['self_invoices'];
    }

    /**
     * Sets self_invoices, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $self_invoices self_invoices
     *
     * @return self
     */
    public function setSelfInvoices($self_invoices)
    {
        $this->container['self_invoices'] = $self_invoices;

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


