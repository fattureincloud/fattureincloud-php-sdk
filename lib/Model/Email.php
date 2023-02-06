<?php
/**
 * Email
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
 * The version of the OpenAPI document: 2.0.25
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
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
 * Email Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class Email implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Email';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'status' => '\FattureInCloud\Model\EmailStatus',
        'sent_date' => '\DateTime',
        'errors_count' => 'int',
        'error_log' => 'string',
        'from_email' => 'string',
        'from_name' => 'string',
        'to_email' => 'string',
        'to_name' => 'string',
        'subject' => 'string',
        'content' => 'string',
        'copy_to' => 'string',
        'recipient_status' => '\FattureInCloud\Model\EmailRecipientStatus',
        'recipient_date' => '\DateTime',
        'kind' => 'string',
        'attachments' => '\FattureInCloud\Model\EmailAttachment[]'
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
        'status' => null,
        'sent_date' => 'date-time',
        'errors_count' => null,
        'error_log' => null,
        'from_email' => null,
        'from_name' => null,
        'to_email' => null,
        'to_name' => null,
        'subject' => null,
        'content' => null,
        'copy_to' => null,
        'recipient_status' => null,
        'recipient_date' => 'date-time',
        'kind' => null,
        'attachments' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static $openAPINullables = [
        'id' => false,
            'status' => false,
            'sent_date' => false,
            'errors_count' => false,
            'error_log' => false,
            'from_email' => false,
            'from_name' => false,
            'to_email' => false,
            'to_name' => false,
            'subject' => false,
            'content' => false,
            'copy_to' => false,
            'recipient_status' => false,
            'recipient_date' => false,
            'kind' => false,
            'attachments' => false
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
        'id' => 'id',
        'status' => 'status',
        'sent_date' => 'sent_date',
        'errors_count' => 'errors_count',
        'error_log' => 'error_log',
        'from_email' => 'from_email',
        'from_name' => 'from_name',
        'to_email' => 'to_email',
        'to_name' => 'to_name',
        'subject' => 'subject',
        'content' => 'content',
        'copy_to' => 'copy_to',
        'recipient_status' => 'recipient_status',
        'recipient_date' => 'recipient_date',
        'kind' => 'kind',
        'attachments' => 'attachments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'sent_date' => 'setSentDate',
        'errors_count' => 'setErrorsCount',
        'error_log' => 'setErrorLog',
        'from_email' => 'setFromEmail',
        'from_name' => 'setFromName',
        'to_email' => 'setToEmail',
        'to_name' => 'setToName',
        'subject' => 'setSubject',
        'content' => 'setContent',
        'copy_to' => 'setCopyTo',
        'recipient_status' => 'setRecipientStatus',
        'recipient_date' => 'setRecipientDate',
        'kind' => 'setKind',
        'attachments' => 'setAttachments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'sent_date' => 'getSentDate',
        'errors_count' => 'getErrorsCount',
        'error_log' => 'getErrorLog',
        'from_email' => 'getFromEmail',
        'from_name' => 'getFromName',
        'to_email' => 'getToEmail',
        'to_name' => 'getToName',
        'subject' => 'getSubject',
        'content' => 'getContent',
        'copy_to' => 'getCopyTo',
        'recipient_status' => 'getRecipientStatus',
        'recipient_date' => 'getRecipientDate',
        'kind' => 'getKind',
        'attachments' => 'getAttachments'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('sent_date', $data ?? [], null);
        $this->setIfExists('errors_count', $data ?? [], null);
        $this->setIfExists('error_log', $data ?? [], null);
        $this->setIfExists('from_email', $data ?? [], null);
        $this->setIfExists('from_name', $data ?? [], null);
        $this->setIfExists('to_email', $data ?? [], null);
        $this->setIfExists('to_name', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('copy_to', $data ?? [], null);
        $this->setIfExists('recipient_status', $data ?? [], null);
        $this->setIfExists('recipient_date', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
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
     * @param int|null $id Email unique identifier.
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status, the accepted values are available in \FattureInCloud\Model\EmailStatus
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets sent_date
     *
     * @return \DateTime|null
     */
    public function getSentDate()
    {
        return $this->container['sent_date'];
    }

    /**
     * Sets sent_date
     *
     * @param \DateTime|null $sent_date Email sent date.
     *
     * @return self
     */
    public function setSentDate($sent_date)
    {

        if (is_null($sent_date)) {
            throw new \InvalidArgumentException('non-nullable sent_date cannot be null');
        }

        $this->container['sent_date'] = $sent_date;

        return $this;
    }

    /**
     * Gets errors_count
     *
     * @return int|null
     */
    public function getErrorsCount()
    {
        return $this->container['errors_count'];
    }

    /**
     * Sets errors_count
     *
     * @param int|null $errors_count Errors count.
     *
     * @return self
     */
    public function setErrorsCount($errors_count)
    {

        if (is_null($errors_count)) {
            throw new \InvalidArgumentException('non-nullable errors_count cannot be null');
        }

        $this->container['errors_count'] = $errors_count;

        return $this;
    }

    /**
     * Gets error_log
     *
     * @return string|null
     */
    public function getErrorLog()
    {
        return $this->container['error_log'];
    }

    /**
     * Sets error_log
     *
     * @param string|null $error_log Error log.
     *
     * @return self
     */
    public function setErrorLog($error_log)
    {

        if (is_null($error_log)) {
            throw new \InvalidArgumentException('non-nullable error_log cannot be null');
        }

        $this->container['error_log'] = $error_log;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return string|null
     */
    public function getFromEmail()
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param string|null $from_email Sender email.
     *
     * @return self
     */
    public function setFromEmail($from_email)
    {

        if (is_null($from_email)) {
            throw new \InvalidArgumentException('non-nullable from_email cannot be null');
        }

        $this->container['from_email'] = $from_email;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string|null
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string|null $from_name Sender name.
     *
     * @return self
     */
    public function setFromName($from_name)
    {

        if (is_null($from_name)) {
            throw new \InvalidArgumentException('non-nullable from_name cannot be null');
        }

        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets to_email
     *
     * @return string|null
     */
    public function getToEmail()
    {
        return $this->container['to_email'];
    }

    /**
     * Sets to_email
     *
     * @param string|null $to_email Recipient email.
     *
     * @return self
     */
    public function setToEmail($to_email)
    {

        if (is_null($to_email)) {
            throw new \InvalidArgumentException('non-nullable to_email cannot be null');
        }

        $this->container['to_email'] = $to_email;

        return $this;
    }

    /**
     * Gets to_name
     *
     * @return string|null
     */
    public function getToName()
    {
        return $this->container['to_name'];
    }

    /**
     * Sets to_name
     *
     * @param string|null $to_name Receipient email.
     *
     * @return self
     */
    public function setToName($to_name)
    {

        if (is_null($to_name)) {
            throw new \InvalidArgumentException('non-nullable to_name cannot be null');
        }

        $this->container['to_name'] = $to_name;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject Email subject.
     *
     * @return self
     */
    public function setSubject($subject)
    {

        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content Email content.
     *
     * @return self
     */
    public function setContent($content)
    {

        if (is_null($content)) {
            throw new \InvalidArgumentException('non-nullable content cannot be null');
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets copy_to
     *
     * @return string|null
     */
    public function getCopyTo()
    {
        return $this->container['copy_to'];
    }

    /**
     * Sets copy_to
     *
     * @param string|null $copy_to copy_to
     *
     * @return self
     */
    public function setCopyTo($copy_to)
    {

        if (is_null($copy_to)) {
            throw new \InvalidArgumentException('non-nullable copy_to cannot be null');
        }

        $this->container['copy_to'] = $copy_to;

        return $this;
    }

    /**
     * Gets recipient_status
     *
     * @return string|null
     */
    public function getRecipientStatus()
    {
        return $this->container['recipient_status'];
    }

    /**
     * Sets recipient_status, the accepted values are available in \FattureInCloud\Model\EmailRecipientStatus
     *
     * @param string|null $recipient_status recipient_status
     *
     * @return self
     */
    public function setRecipientStatus($recipient_status)
    {

        if (is_null($recipient_status)) {
            throw new \InvalidArgumentException('non-nullable recipient_status cannot be null');
        }

        $this->container['recipient_status'] = $recipient_status;

        return $this;
    }

    /**
     * Gets recipient_date
     *
     * @return \DateTime|null
     */
    public function getRecipientDate()
    {
        return $this->container['recipient_date'];
    }

    /**
     * Sets recipient_date
     *
     * @param \DateTime|null $recipient_date recipient_date
     *
     * @return self
     */
    public function setRecipientDate($recipient_date)
    {

        if (is_null($recipient_date)) {
            throw new \InvalidArgumentException('non-nullable recipient_date cannot be null');
        }

        $this->container['recipient_date'] = $recipient_date;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string|null $kind Email kind.
     *
     * @return self
     */
    public function setKind($kind)
    {

        if (is_null($kind)) {
            throw new \InvalidArgumentException('non-nullable kind cannot be null');
        }

        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \FattureInCloud\Model\EmailAttachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \FattureInCloud\Model\EmailAttachment[]|null $attachments Email attachments.
     *
     * @return self
     */
    public function setAttachments($attachments)
    {

        if (is_null($attachments)) {
            throw new \InvalidArgumentException('non-nullable attachments cannot be null');
        }

        $this->container['attachments'] = $attachments;

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


