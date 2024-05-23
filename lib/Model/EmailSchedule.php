<?php
/**
 * EmailSchedule
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
 * EmailSchedule Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class EmailSchedule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sender_id' => 'int',
        'sender_email' => 'string',
        'recipient_email' => 'string',
        'subject' => 'string',
        'body' => 'string',
        'include' => '\FattureInCloud\Model\EmailScheduleInclude',
        'attach_pdf' => 'bool',
        'send_copy' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sender_id' => null,
        'sender_email' => null,
        'recipient_email' => null,
        'subject' => null,
        'body' => null,
        'include' => null,
        'attach_pdf' => null,
        'send_copy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'sender_id' => true,
            'sender_email' => true,
            'recipient_email' => true,
            'subject' => true,
            'body' => true,
            'include' => true,
            'attach_pdf' => true,
            'send_copy' => true
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
        'sender_id' => 'sender_id',
        'sender_email' => 'sender_email',
        'recipient_email' => 'recipient_email',
        'subject' => 'subject',
        'body' => 'body',
        'include' => 'include',
        'attach_pdf' => 'attach_pdf',
        'send_copy' => 'send_copy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sender_id' => 'setSenderId',
        'sender_email' => 'setSenderEmail',
        'recipient_email' => 'setRecipientEmail',
        'subject' => 'setSubject',
        'body' => 'setBody',
        'include' => 'setInclude',
        'attach_pdf' => 'setAttachPdf',
        'send_copy' => 'setSendCopy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sender_id' => 'getSenderId',
        'sender_email' => 'getSenderEmail',
        'recipient_email' => 'getRecipientEmail',
        'subject' => 'getSubject',
        'body' => 'getBody',
        'include' => 'getInclude',
        'attach_pdf' => 'getAttachPdf',
        'send_copy' => 'getSendCopy'
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
        $this->setIfExists('sender_id', $data ?? [], null);
        $this->setIfExists('sender_email', $data ?? [], null);
        $this->setIfExists('recipient_email', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('include', $data ?? [], null);
        $this->setIfExists('attach_pdf', $data ?? [], null);
        $this->setIfExists('send_copy', $data ?? [], null);
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
     * Gets sender_id
     *
     * @return int|null
     */
    public function getSenderId()
    {
        return $this->container['sender_id'];
    }

    /**
     * Sets sender_id
     *
     * @param int|null $sender_id Email sender id [required if **sender_email** is not specified]
     *
     * @return self
     */
    public function setSenderId($sender_id)
    {
        if (is_null($sender_id)) {
            array_push($this->openAPINullablesSetToNull, 'sender_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender_id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sender_id'] = $sender_id;

        return $this;
    }

    /**
     * Gets sender_email
     *
     * @return string|null
     */
    public function getSenderEmail()
    {
        return $this->container['sender_email'];
    }

    /**
     * Sets sender_email
     *
     * @param string|null $sender_email Email sender address [required if **sender_id** is not specified]
     *
     * @return self
     */
    public function setSenderEmail($sender_email)
    {
        if (is_null($sender_email)) {
            array_push($this->openAPINullablesSetToNull, 'sender_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender_email', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sender_email'] = $sender_email;

        return $this;
    }

    /**
     * Gets recipient_email
     *
     * @return string|null
     */
    public function getRecipientEmail()
    {
        return $this->container['recipient_email'];
    }

    /**
     * Sets recipient_email
     *
     * @param string|null $recipient_email Email recipient emails [comma separated]
     *
     * @return self
     */
    public function setRecipientEmail($recipient_email)
    {
        if (is_null($recipient_email)) {
            array_push($this->openAPINullablesSetToNull, 'recipient_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recipient_email', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['recipient_email'] = $recipient_email;

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
     * @param string|null $subject Email subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            array_push($this->openAPINullablesSetToNull, 'subject');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subject', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body Email body [HTML Escaped] [max size 50KiB]
     *
     * @return self
     */
    public function setBody($body)
    {
        if (is_null($body)) {
            array_push($this->openAPINullablesSetToNull, 'body');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('body', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets include
     *
     * @return \FattureInCloud\Model\EmailScheduleInclude|null
     */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
     * Sets include
     *
     * @param \FattureInCloud\Model\EmailScheduleInclude|null $include include
     *
     * @return self
     */
    public function setInclude($include)
    {
        if (is_null($include)) {
            array_push($this->openAPINullablesSetToNull, 'include');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('include', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['include'] = $include;

        return $this;
    }

    /**
     * Gets attach_pdf
     *
     * @return bool|null
     */
    public function getAttachPdf()
    {
        return $this->container['attach_pdf'];
    }

    /**
     * Sets attach_pdf
     *
     * @param bool|null $attach_pdf Attach the pdf of the document
     *
     * @return self
     */
    public function setAttachPdf($attach_pdf)
    {
        if (is_null($attach_pdf)) {
            array_push($this->openAPINullablesSetToNull, 'attach_pdf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attach_pdf', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['attach_pdf'] = $attach_pdf;

        return $this;
    }

    /**
     * Gets send_copy
     *
     * @return bool|null
     */
    public function getSendCopy()
    {
        return $this->container['send_copy'];
    }

    /**
     * Sets send_copy
     *
     * @param bool|null $send_copy Send a copy of the email to the **cc_email** specified by **Get email data**
     *
     * @return self
     */
    public function setSendCopy($send_copy)
    {
        if (is_null($send_copy)) {
            array_push($this->openAPINullablesSetToNull, 'send_copy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('send_copy', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['send_copy'] = $send_copy;

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


