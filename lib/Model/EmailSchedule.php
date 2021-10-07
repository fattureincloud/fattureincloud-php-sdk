<?php
/**
 * EmailSchedule
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
 * ## Request informations In every request description you will be able to find some additional informations about context, permissions and supported functionality:  | Parameter | Description | |-----------|-------------| | 👥 Context | Indicate the subject of the request. Can be `company`, `user` or `accountant`.  | | 🔒 Required scope | If present, indicates the required scope to fulfill the request. | | 🔍 Filtering | If present, indicates which fields support the filtering feature. | | ↕️ Sorting | If present, indicates which fields support the sorting feature. | | 📄 Paginated results | If present, indicate that the results are paginated. | | 🎩 Customized responses supported | If present, indicate that you can use `field` or `fieldset` to customize the response body. |  For example the request `GET /entities/{entityRole}` have tis informations: \\ 👥 Company context \\ 🔒 Required scope: `entity.clients:r` or `entity.suppliers:r` (depending on `entityRole`) \\ 🔍 Filtering: `id`, `name` \\ ↕️ Sorting: `id`, `name` \\ 📄 Paginated results \\ 🎩 Customized responses supported  Keep in mind that if you are making **company realted requests**, you will need to specify the company id in the requests: ``` GET /c/{company_id}/issued_documents ```
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
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
        'sender_id' => 'float',
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
    public function __construct(array $data = null)
    {
        $this->container['sender_id'] = $data['sender_id'] ?? null;
        $this->container['sender_email'] = $data['sender_email'] ?? null;
        $this->container['recipient_email'] = $data['recipient_email'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['include'] = $data['include'] ?? null;
        $this->container['attach_pdf'] = $data['attach_pdf'] ?? null;
        $this->container['send_copy'] = $data['send_copy'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['recipient_email'] === null) {
            $invalidProperties[] = "'recipient_email' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['include'] === null) {
            $invalidProperties[] = "'include' can't be null";
        }
        if ($this->container['attach_pdf'] === null) {
            $invalidProperties[] = "'attach_pdf' can't be null";
        }
        if ($this->container['send_copy'] === null) {
            $invalidProperties[] = "'send_copy' can't be null";
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
     * Gets sender_id
     *
     * @return float|null
     */
    public function getSenderId()
    {
        return $this->container['sender_id'];
    }

    /**
     * Sets sender_id
     *
     * @param float|null $sender_id Sender id. Required if `sender_email` is not specified
     *
     * @return self
     */
    public function setSenderId($sender_id)
    {
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
     * @param string|null $sender_email Sender email. Required if `sender_id` is not specified
     *
     * @return self
     */
    public function setSenderEmail($sender_email)
    {
        $this->container['sender_email'] = $sender_email;

        return $this;
    }

    /**
     * Gets recipient_email
     *
     * @return string
     */
    public function getRecipientEmail()
    {
        return $this->container['recipient_email'];
    }

    /**
     * Sets recipient_email
     *
     * @param string $recipient_email One or more comma separated recipient emails
     *
     * @return self
     */
    public function setRecipientEmail($recipient_email)
    {
        $this->container['recipient_email'] = $recipient_email;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Email subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body Email body
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets include
     *
     * @return \FattureInCloud\Model\EmailScheduleInclude
     */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
     * Sets include
     *
     * @param \FattureInCloud\Model\EmailScheduleInclude $include include
     *
     * @return self
     */
    public function setInclude($include)
    {
        $this->container['include'] = $include;

        return $this;
    }

    /**
     * Gets attach_pdf
     *
     * @return bool
     */
    public function getAttachPdf()
    {
        return $this->container['attach_pdf'];
    }

    /**
     * Sets attach_pdf
     *
     * @param bool $attach_pdf If set to true, documents will be sent as PDF attachments too
     *
     * @return self
     */
    public function setAttachPdf($attach_pdf)
    {
        $this->container['attach_pdf'] = $attach_pdf;

        return $this;
    }

    /**
     * Gets send_copy
     *
     * @return bool
     */
    public function getSendCopy()
    {
        return $this->container['send_copy'];
    }

    /**
     * Sets send_copy
     *
     * @param bool $send_copy If set to true, a copy of the email will be sent to the `cc_email` specified by `Get email data`
     *
     * @return self
     */
    public function setSendCopy($send_copy)
    {
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


