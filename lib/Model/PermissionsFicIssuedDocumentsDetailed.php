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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'quotes' => false,
            'proformas' => false,
            'invoices' => false,
            'receipts' => false,
            'delivery_notes' => false,
            'credit_notes' => false,
            'orders' => false,
            'work_reports' => false,
            'supplier_orders' => false,
            'self_invoices' => false
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
    public function __construct($data = null)
    {
        $this->setIfExists('quotes', $data ?? [], null);
        $this->setIfExists('proformas', $data ?? [], null);
        $this->setIfExists('invoices', $data ?? [], null);
        $this->setIfExists('receipts', $data ?? [], null);
        $this->setIfExists('delivery_notes', $data ?? [], null);
        $this->setIfExists('credit_notes', $data ?? [], null);
        $this->setIfExists('orders', $data ?? [], null);
        $this->setIfExists('work_reports', $data ?? [], null);
        $this->setIfExists('supplier_orders', $data ?? [], null);
        $this->setIfExists('self_invoices', $data ?? [], null);
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
        if (is_null($quotes)) {
            throw new \InvalidArgumentException('non-nullable quotes cannot be null');
        }
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
        if (is_null($proformas)) {
            throw new \InvalidArgumentException('non-nullable proformas cannot be null');
        }
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
        if (is_null($invoices)) {
            throw new \InvalidArgumentException('non-nullable invoices cannot be null');
        }
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
        if (is_null($receipts)) {
            throw new \InvalidArgumentException('non-nullable receipts cannot be null');
        }
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
        if (is_null($delivery_notes)) {
            throw new \InvalidArgumentException('non-nullable delivery_notes cannot be null');
        }
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
        if (is_null($credit_notes)) {
            throw new \InvalidArgumentException('non-nullable credit_notes cannot be null');
        }
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
        if (is_null($orders)) {
            throw new \InvalidArgumentException('non-nullable orders cannot be null');
        }
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
        if (is_null($work_reports)) {
            throw new \InvalidArgumentException('non-nullable work_reports cannot be null');
        }
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
        if (is_null($supplier_orders)) {
            throw new \InvalidArgumentException('non-nullable supplier_orders cannot be null');
        }
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
        if (is_null($self_invoices)) {
            throw new \InvalidArgumentException('non-nullable self_invoices cannot be null');
        }
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


