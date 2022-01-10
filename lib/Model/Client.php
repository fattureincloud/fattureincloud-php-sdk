<?php
/**
 * Client
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
 * The version of the OpenAPI document: 2.0.8
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
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
 * Client Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Client implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Client';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'code' => 'string',
        'name' => 'string',
        'type' => '\FattureInCloud\Model\ClientType',
        'first_name' => 'string',
        'last_name' => 'string',
        'contact_person' => 'string',
        'vat_number' => 'string',
        'tax_code' => 'string',
        'address_street' => 'string',
        'address_postal_code' => 'string',
        'address_city' => 'string',
        'address_province' => 'string',
        'address_extra' => 'string',
        'country' => 'string',
        'email' => 'string',
        'certified_email' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'notes' => 'string',
        'default_vat' => '\FattureInCloud\Model\VatType',
        'default_payment_terms' => 'int',
        'default_payment_terms_type' => '\FattureInCloud\Model\DefaultPaymentTermsType',
        'default_payment_method' => '\FattureInCloud\Model\PaymentMethod',
        'bank_name' => 'string',
        'bank_iban' => 'string',
        'bank_swift_code' => 'string',
        'shipping_address' => 'string',
        'e_invoice' => 'bool',
        'ei_code' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string'
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
        'code' => null,
        'name' => null,
        'type' => null,
        'first_name' => null,
        'last_name' => null,
        'contact_person' => null,
        'vat_number' => null,
        'tax_code' => null,
        'address_street' => null,
        'address_postal_code' => null,
        'address_city' => null,
        'address_province' => null,
        'address_extra' => null,
        'country' => null,
        'email' => null,
        'certified_email' => null,
        'phone' => null,
        'fax' => null,
        'notes' => null,
        'default_vat' => null,
        'default_payment_terms' => null,
        'default_payment_terms_type' => null,
        'default_payment_method' => null,
        'bank_name' => null,
        'bank_iban' => null,
        'bank_swift_code' => null,
        'shipping_address' => null,
        'e_invoice' => null,
        'ei_code' => null,
        'created_at' => null,
        'updated_at' => null
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
        'code' => 'code',
        'name' => 'name',
        'type' => 'type',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'contact_person' => 'contact_person',
        'vat_number' => 'vat_number',
        'tax_code' => 'tax_code',
        'address_street' => 'address_street',
        'address_postal_code' => 'address_postal_code',
        'address_city' => 'address_city',
        'address_province' => 'address_province',
        'address_extra' => 'address_extra',
        'country' => 'country',
        'email' => 'email',
        'certified_email' => 'certified_email',
        'phone' => 'phone',
        'fax' => 'fax',
        'notes' => 'notes',
        'default_vat' => 'default_vat',
        'default_payment_terms' => 'default_payment_terms',
        'default_payment_terms_type' => 'default_payment_terms_type',
        'default_payment_method' => 'default_payment_method',
        'bank_name' => 'bank_name',
        'bank_iban' => 'bank_iban',
        'bank_swift_code' => 'bank_swift_code',
        'shipping_address' => 'shipping_address',
        'e_invoice' => 'e_invoice',
        'ei_code' => 'ei_code',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'code' => 'setCode',
        'name' => 'setName',
        'type' => 'setType',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'contact_person' => 'setContactPerson',
        'vat_number' => 'setVatNumber',
        'tax_code' => 'setTaxCode',
        'address_street' => 'setAddressStreet',
        'address_postal_code' => 'setAddressPostalCode',
        'address_city' => 'setAddressCity',
        'address_province' => 'setAddressProvince',
        'address_extra' => 'setAddressExtra',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'certified_email' => 'setCertifiedEmail',
        'phone' => 'setPhone',
        'fax' => 'setFax',
        'notes' => 'setNotes',
        'default_vat' => 'setDefaultVat',
        'default_payment_terms' => 'setDefaultPaymentTerms',
        'default_payment_terms_type' => 'setDefaultPaymentTermsType',
        'default_payment_method' => 'setDefaultPaymentMethod',
        'bank_name' => 'setBankName',
        'bank_iban' => 'setBankIban',
        'bank_swift_code' => 'setBankSwiftCode',
        'shipping_address' => 'setShippingAddress',
        'e_invoice' => 'setEInvoice',
        'ei_code' => 'setEiCode',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'code' => 'getCode',
        'name' => 'getName',
        'type' => 'getType',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'contact_person' => 'getContactPerson',
        'vat_number' => 'getVatNumber',
        'tax_code' => 'getTaxCode',
        'address_street' => 'getAddressStreet',
        'address_postal_code' => 'getAddressPostalCode',
        'address_city' => 'getAddressCity',
        'address_province' => 'getAddressProvince',
        'address_extra' => 'getAddressExtra',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'certified_email' => 'getCertifiedEmail',
        'phone' => 'getPhone',
        'fax' => 'getFax',
        'notes' => 'getNotes',
        'default_vat' => 'getDefaultVat',
        'default_payment_terms' => 'getDefaultPaymentTerms',
        'default_payment_terms_type' => 'getDefaultPaymentTermsType',
        'default_payment_method' => 'getDefaultPaymentMethod',
        'bank_name' => 'getBankName',
        'bank_iban' => 'getBankIban',
        'bank_swift_code' => 'getBankSwiftCode',
        'shipping_address' => 'getShippingAddress',
        'e_invoice' => 'getEInvoice',
        'ei_code' => 'getEiCode',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['contact_person'] = $data['contact_person'] ?? null;
        $this->container['vat_number'] = $data['vat_number'] ?? null;
        $this->container['tax_code'] = $data['tax_code'] ?? null;
        $this->container['address_street'] = $data['address_street'] ?? null;
        $this->container['address_postal_code'] = $data['address_postal_code'] ?? null;
        $this->container['address_city'] = $data['address_city'] ?? null;
        $this->container['address_province'] = $data['address_province'] ?? null;
        $this->container['address_extra'] = $data['address_extra'] ?? null;
        $this->container['country'] = $data['country'] ?? 'Italia';
        $this->container['email'] = $data['email'] ?? null;
        $this->container['certified_email'] = $data['certified_email'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['default_vat'] = $data['default_vat'] ?? null;
        $this->container['default_payment_terms'] = $data['default_payment_terms'] ?? null;
        $this->container['default_payment_terms_type'] = $data['default_payment_terms_type'] ?? null;
        $this->container['default_payment_method'] = $data['default_payment_method'] ?? null;
        $this->container['bank_name'] = $data['bank_name'] ?? null;
        $this->container['bank_iban'] = $data['bank_iban'] ?? null;
        $this->container['bank_swift_code'] = $data['bank_swift_code'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['e_invoice'] = $data['e_invoice'] ?? false;
        $this->container['ei_code'] = $data['ei_code'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * @param int|null $id Unique identifier
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Client code.
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Client name
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
     * @return \FattureInCloud\Model\ClientType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \FattureInCloud\Model\ClientType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name Client first name.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Client last name.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets contact_person
     *
     * @return string|null
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     *
     * @param string|null $contact_person contact_person
     *
     * @return self
     */
    public function setContactPerson($contact_person)
    {
        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string|null
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string|null $vat_number Client vat number
     *
     * @return self
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

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
     * @param string|null $tax_code Client tax code.
     *
     * @return self
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets address_street
     *
     * @return string|null
     */
    public function getAddressStreet()
    {
        return $this->container['address_street'];
    }

    /**
     * Sets address_street
     *
     * @param string|null $address_street Client street address.
     *
     * @return self
     */
    public function setAddressStreet($address_street)
    {
        $this->container['address_street'] = $address_street;

        return $this;
    }

    /**
     * Gets address_postal_code
     *
     * @return string|null
     */
    public function getAddressPostalCode()
    {
        return $this->container['address_postal_code'];
    }

    /**
     * Sets address_postal_code
     *
     * @param string|null $address_postal_code Client postal code.
     *
     * @return self
     */
    public function setAddressPostalCode($address_postal_code)
    {
        $this->container['address_postal_code'] = $address_postal_code;

        return $this;
    }

    /**
     * Gets address_city
     *
     * @return string|null
     */
    public function getAddressCity()
    {
        return $this->container['address_city'];
    }

    /**
     * Sets address_city
     *
     * @param string|null $address_city Client city.
     *
     * @return self
     */
    public function setAddressCity($address_city)
    {
        $this->container['address_city'] = $address_city;

        return $this;
    }

    /**
     * Gets address_province
     *
     * @return string|null
     */
    public function getAddressProvince()
    {
        return $this->container['address_province'];
    }

    /**
     * Sets address_province
     *
     * @param string|null $address_province Client province.
     *
     * @return self
     */
    public function setAddressProvince($address_province)
    {
        $this->container['address_province'] = $address_province;

        return $this;
    }

    /**
     * Gets address_extra
     *
     * @return string|null
     */
    public function getAddressExtra()
    {
        return $this->container['address_extra'];
    }

    /**
     * Sets address_extra
     *
     * @param string|null $address_extra Client address extra info.
     *
     * @return self
     */
    public function setAddressExtra($address_extra)
    {
        $this->container['address_extra'] = $address_extra;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Client country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Client email.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets certified_email
     *
     * @return string|null
     */
    public function getCertifiedEmail()
    {
        return $this->container['certified_email'];
    }

    /**
     * Sets certified_email
     *
     * @param string|null $certified_email Client certified email.
     *
     * @return self
     */
    public function setCertifiedEmail($certified_email)
    {
        $this->container['certified_email'] = $certified_email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Client phone.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax Client fax.
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Extra notes.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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
        $this->container['default_vat'] = $default_vat;

        return $this;
    }

    /**
     * Gets default_payment_terms
     *
     * @return int|null
     */
    public function getDefaultPaymentTerms()
    {
        return $this->container['default_payment_terms'];
    }

    /**
     * Sets default_payment_terms
     *
     * @param int|null $default_payment_terms default_payment_terms
     *
     * @return self
     */
    public function setDefaultPaymentTerms($default_payment_terms)
    {
        $this->container['default_payment_terms'] = $default_payment_terms;

        return $this;
    }

    /**
     * Gets default_payment_terms_type
     *
     * @return \FattureInCloud\Model\DefaultPaymentTermsType|null
     */
    public function getDefaultPaymentTermsType()
    {
        return $this->container['default_payment_terms_type'];
    }

    /**
     * Sets default_payment_terms_type
     *
     * @param \FattureInCloud\Model\DefaultPaymentTermsType|null $default_payment_terms_type default_payment_terms_type
     *
     * @return self
     */
    public function setDefaultPaymentTermsType($default_payment_terms_type)
    {
        $this->container['default_payment_terms_type'] = $default_payment_terms_type;

        return $this;
    }

    /**
     * Gets default_payment_method
     *
     * @return \FattureInCloud\Model\PaymentMethod|null
     */
    public function getDefaultPaymentMethod()
    {
        return $this->container['default_payment_method'];
    }

    /**
     * Sets default_payment_method
     *
     * @param \FattureInCloud\Model\PaymentMethod|null $default_payment_method default_payment_method
     *
     * @return self
     */
    public function setDefaultPaymentMethod($default_payment_method)
    {
        $this->container['default_payment_method'] = $default_payment_method;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name Client bank name.
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bank_iban
     *
     * @return string|null
     */
    public function getBankIban()
    {
        return $this->container['bank_iban'];
    }

    /**
     * Sets bank_iban
     *
     * @param string|null $bank_iban Client iban.
     *
     * @return self
     */
    public function setBankIban($bank_iban)
    {
        $this->container['bank_iban'] = $bank_iban;

        return $this;
    }

    /**
     * Gets bank_swift_code
     *
     * @return string|null
     */
    public function getBankSwiftCode()
    {
        return $this->container['bank_swift_code'];
    }

    /**
     * Sets bank_swift_code
     *
     * @param string|null $bank_swift_code Client bank swift code.
     *
     * @return self
     */
    public function setBankSwiftCode($bank_swift_code)
    {
        $this->container['bank_swift_code'] = $bank_swift_code;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return string|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param string|null $shipping_address Client shipping address.
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

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
     * @param bool|null $e_invoice Use e-invoices for this entity
     *
     * @return self
     */
    public function setEInvoice($e_invoice)
    {
        $this->container['e_invoice'] = $e_invoice;

        return $this;
    }

    /**
     * Gets ei_code
     *
     * @return string|null
     */
    public function getEiCode()
    {
        return $this->container['ei_code'];
    }

    /**
     * Sets ei_code
     *
     * @param string|null $ei_code E-invoice code
     *
     * @return self
     */
    public function setEiCode($ei_code)
    {
        $this->container['ei_code'] = $ei_code;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


