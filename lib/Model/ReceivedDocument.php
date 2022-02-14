<?php
/**
 * ReceivedDocument
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
 * The version of the OpenAPI document: 2.0.11
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
 * ReceivedDocument Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReceivedDocument implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReceivedDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'type' => '\FattureInCloud\Model\ReceivedDocumentType',
        'entity' => '\FattureInCloud\Model\ReceivedDocumentEntity',
        'date' => '\DateTime',
        'category' => 'string',
        'description' => 'string',
        'amount_net' => 'float',
        'amount_vat' => 'float',
        'amount_withholding_tax' => 'float',
        'amount_other_withholding_tax' => 'float',
        'amount_gross' => 'float',
        'amortization' => 'float',
        'rc_center' => 'string',
        'invoice_number' => 'string',
        'is_marked' => 'bool',
        'is_detailed' => 'bool',
        'e_invoice' => 'bool',
        'next_due_date' => '\DateTime',
        'currency' => '\FattureInCloud\Model\Currency',
        'tax_deductibility' => 'float',
        'vat_deductibility' => 'float',
        'items_list' => '\FattureInCloud\Model\ReceivedDocumentItemsListItem[]',
        'payments_list' => '\FattureInCloud\Model\ReceivedDocumentPaymentsListItem[]',
        'attachment_url' => 'string',
        'attachment_preview_url' => 'string',
        'attachment_token' => 'string'
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
        'type' => null,
        'entity' => null,
        'date' => 'date',
        'category' => null,
        'description' => null,
        'amount_net' => null,
        'amount_vat' => null,
        'amount_withholding_tax' => null,
        'amount_other_withholding_tax' => null,
        'amount_gross' => null,
        'amortization' => null,
        'rc_center' => null,
        'invoice_number' => null,
        'is_marked' => null,
        'is_detailed' => null,
        'e_invoice' => null,
        'next_due_date' => 'date',
        'currency' => null,
        'tax_deductibility' => null,
        'vat_deductibility' => null,
        'items_list' => null,
        'payments_list' => null,
        'attachment_url' => null,
        'attachment_preview_url' => null,
        'attachment_token' => null
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
        'type' => 'type',
        'entity' => 'entity',
        'date' => 'date',
        'category' => 'category',
        'description' => 'description',
        'amount_net' => 'amount_net',
        'amount_vat' => 'amount_vat',
        'amount_withholding_tax' => 'amount_withholding_tax',
        'amount_other_withholding_tax' => 'amount_other_withholding_tax',
        'amount_gross' => 'amount_gross',
        'amortization' => 'amortization',
        'rc_center' => 'rc_center',
        'invoice_number' => 'invoice_number',
        'is_marked' => 'is_marked',
        'is_detailed' => 'is_detailed',
        'e_invoice' => 'e_invoice',
        'next_due_date' => 'next_due_date',
        'currency' => 'currency',
        'tax_deductibility' => 'tax_deductibility',
        'vat_deductibility' => 'vat_deductibility',
        'items_list' => 'items_list',
        'payments_list' => 'payments_list',
        'attachment_url' => 'attachment_url',
        'attachment_preview_url' => 'attachment_preview_url',
        'attachment_token' => 'attachment_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'entity' => 'setEntity',
        'date' => 'setDate',
        'category' => 'setCategory',
        'description' => 'setDescription',
        'amount_net' => 'setAmountNet',
        'amount_vat' => 'setAmountVat',
        'amount_withholding_tax' => 'setAmountWithholdingTax',
        'amount_other_withholding_tax' => 'setAmountOtherWithholdingTax',
        'amount_gross' => 'setAmountGross',
        'amortization' => 'setAmortization',
        'rc_center' => 'setRcCenter',
        'invoice_number' => 'setInvoiceNumber',
        'is_marked' => 'setIsMarked',
        'is_detailed' => 'setIsDetailed',
        'e_invoice' => 'setEInvoice',
        'next_due_date' => 'setNextDueDate',
        'currency' => 'setCurrency',
        'tax_deductibility' => 'setTaxDeductibility',
        'vat_deductibility' => 'setVatDeductibility',
        'items_list' => 'setItemsList',
        'payments_list' => 'setPaymentsList',
        'attachment_url' => 'setAttachmentUrl',
        'attachment_preview_url' => 'setAttachmentPreviewUrl',
        'attachment_token' => 'setAttachmentToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'entity' => 'getEntity',
        'date' => 'getDate',
        'category' => 'getCategory',
        'description' => 'getDescription',
        'amount_net' => 'getAmountNet',
        'amount_vat' => 'getAmountVat',
        'amount_withholding_tax' => 'getAmountWithholdingTax',
        'amount_other_withholding_tax' => 'getAmountOtherWithholdingTax',
        'amount_gross' => 'getAmountGross',
        'amortization' => 'getAmortization',
        'rc_center' => 'getRcCenter',
        'invoice_number' => 'getInvoiceNumber',
        'is_marked' => 'getIsMarked',
        'is_detailed' => 'getIsDetailed',
        'e_invoice' => 'getEInvoice',
        'next_due_date' => 'getNextDueDate',
        'currency' => 'getCurrency',
        'tax_deductibility' => 'getTaxDeductibility',
        'vat_deductibility' => 'getVatDeductibility',
        'items_list' => 'getItemsList',
        'payments_list' => 'getPaymentsList',
        'attachment_url' => 'getAttachmentUrl',
        'attachment_preview_url' => 'getAttachmentPreviewUrl',
        'attachment_token' => 'getAttachmentToken'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['entity'] = $data['entity'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['amount_net'] = $data['amount_net'] ?? null;
        $this->container['amount_vat'] = $data['amount_vat'] ?? null;
        $this->container['amount_withholding_tax'] = $data['amount_withholding_tax'] ?? null;
        $this->container['amount_other_withholding_tax'] = $data['amount_other_withholding_tax'] ?? null;
        $this->container['amount_gross'] = $data['amount_gross'] ?? null;
        $this->container['amortization'] = $data['amortization'] ?? null;
        $this->container['rc_center'] = $data['rc_center'] ?? null;
        $this->container['invoice_number'] = $data['invoice_number'] ?? null;
        $this->container['is_marked'] = $data['is_marked'] ?? null;
        $this->container['is_detailed'] = $data['is_detailed'] ?? null;
        $this->container['e_invoice'] = $data['e_invoice'] ?? null;
        $this->container['next_due_date'] = $data['next_due_date'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['tax_deductibility'] = $data['tax_deductibility'] ?? null;
        $this->container['vat_deductibility'] = $data['vat_deductibility'] ?? null;
        $this->container['items_list'] = $data['items_list'] ?? null;
        $this->container['payments_list'] = $data['payments_list'] ?? null;
        $this->container['attachment_url'] = $data['attachment_url'] ?? null;
        $this->container['attachment_preview_url'] = $data['attachment_preview_url'] ?? null;
        $this->container['attachment_token'] = $data['attachment_token'] ?? null;
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
     * @param int|null $id Unique identifier of the document.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \FattureInCloud\Model\ReceivedDocumentType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \FattureInCloud\Model\ReceivedDocumentType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return \FattureInCloud\Model\ReceivedDocumentEntity|null
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param \FattureInCloud\Model\ReceivedDocumentEntity|null $entity entity
     *
     * @return self
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Date of the document [If not specified, today date is used].
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Document category.
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Document description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
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
     * @param float|null $amount_net Total net amount.
     *
     * @return self
     */
    public function setAmountNet($amount_net)
    {
        $this->container['amount_net'] = $amount_net;

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
     * @param float|null $amount_vat Total vat amount.
     *
     * @return self
     */
    public function setAmountVat($amount_vat)
    {
        $this->container['amount_vat'] = $amount_vat;

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
     * @param float|null $amount_withholding_tax Withholding tax amount.
     *
     * @return self
     */
    public function setAmountWithholdingTax($amount_withholding_tax)
    {
        $this->container['amount_withholding_tax'] = $amount_withholding_tax;

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
     * @param float|null $amount_other_withholding_tax Other withholding tax amount.
     *
     * @return self
     */
    public function setAmountOtherWithholdingTax($amount_other_withholding_tax)
    {
        $this->container['amount_other_withholding_tax'] = $amount_other_withholding_tax;

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
     * @param float|null $amount_gross [Read Only] Total gross amount.
     *
     * @return self
     */
    public function setAmountGross($amount_gross)
    {
        $this->container['amount_gross'] = $amount_gross;

        return $this;
    }

    /**
     * Gets amortization
     *
     * @return float|null
     */
    public function getAmortization()
    {
        return $this->container['amortization'];
    }

    /**
     * Sets amortization
     *
     * @param float|null $amortization Amortization value
     *
     * @return self
     */
    public function setAmortization($amortization)
    {
        $this->container['amortization'] = $amortization;

        return $this;
    }

    /**
     * Gets rc_center
     *
     * @return string|null
     */
    public function getRcCenter()
    {
        return $this->container['rc_center'];
    }

    /**
     * Sets rc_center
     *
     * @param string|null $rc_center Revenue center.
     *
     * @return self
     */
    public function setRcCenter($rc_center)
    {
        $this->container['rc_center'] = $rc_center;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number Invoice number
     *
     * @return self
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets is_marked
     *
     * @return bool|null
     */
    public function getIsMarked()
    {
        return $this->container['is_marked'];
    }

    /**
     * Sets is_marked
     *
     * @param bool|null $is_marked is_marked
     *
     * @return self
     */
    public function setIsMarked($is_marked)
    {
        $this->container['is_marked'] = $is_marked;

        return $this;
    }

    /**
     * Gets is_detailed
     *
     * @return bool|null
     */
    public function getIsDetailed()
    {
        return $this->container['is_detailed'];
    }

    /**
     * Sets is_detailed
     *
     * @param bool|null $is_detailed is_detailed
     *
     * @return self
     */
    public function setIsDetailed($is_detailed)
    {
        $this->container['is_detailed'] = $is_detailed;

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
     * @param bool|null $e_invoice [Read Only] Indicates if this is an e-invoice.
     *
     * @return self
     */
    public function setEInvoice($e_invoice)
    {
        $this->container['e_invoice'] = $e_invoice;

        return $this;
    }

    /**
     * Gets next_due_date
     *
     * @return \DateTime|null
     */
    public function getNextDueDate()
    {
        return $this->container['next_due_date'];
    }

    /**
     * Sets next_due_date
     *
     * @param \DateTime|null $next_due_date [Read Only] Next due date.
     *
     * @return self
     */
    public function setNextDueDate($next_due_date)
    {
        $this->container['next_due_date'] = $next_due_date;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \FattureInCloud\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \FattureInCloud\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets tax_deductibility
     *
     * @return float|null
     */
    public function getTaxDeductibility()
    {
        return $this->container['tax_deductibility'];
    }

    /**
     * Sets tax_deductibility
     *
     * @param float|null $tax_deductibility Tax deducibility percentage.
     *
     * @return self
     */
    public function setTaxDeductibility($tax_deductibility)
    {
        $this->container['tax_deductibility'] = $tax_deductibility;

        return $this;
    }

    /**
     * Gets vat_deductibility
     *
     * @return float|null
     */
    public function getVatDeductibility()
    {
        return $this->container['vat_deductibility'];
    }

    /**
     * Sets vat_deductibility
     *
     * @param float|null $vat_deductibility Vat deducibility percentage.
     *
     * @return self
     */
    public function setVatDeductibility($vat_deductibility)
    {
        $this->container['vat_deductibility'] = $vat_deductibility;

        return $this;
    }

    /**
     * Gets items_list
     *
     * @return \FattureInCloud\Model\ReceivedDocumentItemsListItem[]|null
     */
    public function getItemsList()
    {
        return $this->container['items_list'];
    }

    /**
     * Sets items_list
     *
     * @param \FattureInCloud\Model\ReceivedDocumentItemsListItem[]|null $items_list items_list
     *
     * @return self
     */
    public function setItemsList($items_list)
    {
        $this->container['items_list'] = $items_list;

        return $this;
    }

    /**
     * Gets payments_list
     *
     * @return \FattureInCloud\Model\ReceivedDocumentPaymentsListItem[]|null
     */
    public function getPaymentsList()
    {
        return $this->container['payments_list'];
    }

    /**
     * Sets payments_list
     *
     * @param \FattureInCloud\Model\ReceivedDocumentPaymentsListItem[]|null $payments_list payments_list
     *
     * @return self
     */
    public function setPaymentsList($payments_list)
    {
        $this->container['payments_list'] = $payments_list;

        return $this;
    }

    /**
     * Gets attachment_url
     *
     * @return string|null
     */
    public function getAttachmentUrl()
    {
        return $this->container['attachment_url'];
    }

    /**
     * Sets attachment_url
     *
     * @param string|null $attachment_url [Read Only] Attachment url.
     *
     * @return self
     */
    public function setAttachmentUrl($attachment_url)
    {
        $this->container['attachment_url'] = $attachment_url;

        return $this;
    }

    /**
     * Gets attachment_preview_url
     *
     * @return string|null
     */
    public function getAttachmentPreviewUrl()
    {
        return $this->container['attachment_preview_url'];
    }

    /**
     * Sets attachment_preview_url
     *
     * @param string|null $attachment_preview_url [Read Only] Attachment preview url.
     *
     * @return self
     */
    public function setAttachmentPreviewUrl($attachment_preview_url)
    {
        $this->container['attachment_preview_url'] = $attachment_preview_url;

        return $this;
    }

    /**
     * Gets attachment_token
     *
     * @return string|null
     */
    public function getAttachmentToken()
    {
        return $this->container['attachment_token'];
    }

    /**
     * Sets attachment_token
     *
     * @param string|null $attachment_token Uploaded attachement token.
     *
     * @return self
     */
    public function setAttachmentToken($attachment_token)
    {
        $this->container['attachment_token'] = $attachment_token;

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


