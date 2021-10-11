<?php
/**
 * CompanyInfo
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
 * CompanyInfo Class Doc Comment
 *
 * @category Class
 * @description Detailed information for the company.
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CompanyInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompanyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'email' => 'string',
        'type' => 'string',
        'fic' => 'bool',
        'fic_plan_name' => 'string',
        'fic_license_type' => 'string',
        'fic_payment_subject' => 'string',
        'fic_license_expire' => '\DateTime',
        'fic_signup_date' => 'string',
        'use_fic' => 'bool',
        'fic_need_setup' => 'bool',
        'dic' => 'bool',
        'dic_plan' => 'string',
        'dic_license_expire' => '\DateTime',
        'use_dic' => 'bool',
        'dic_need_setup' => 'bool',
        'access_info' => '\FattureInCloud\Model\CompanyInfoAccessInfo',
        'plan_info' => '\FattureInCloud\Model\CompanyInfoPlanInfo',
        'can_use_coupon' => 'bool',
        'accountant_id' => 'int',
        'dic_license_type' => 'string',
        'dic_payment_subject' => 'string',
        'dic_plan_name' => 'string',
        'dic_signup_date' => 'string',
        'is_accountant' => 'bool',
        'registration_service' => 'string'
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
        'name' => null,
        'email' => null,
        'type' => null,
        'fic' => null,
        'fic_plan_name' => null,
        'fic_license_type' => null,
        'fic_payment_subject' => null,
        'fic_license_expire' => 'date',
        'fic_signup_date' => null,
        'use_fic' => null,
        'fic_need_setup' => null,
        'dic' => null,
        'dic_plan' => null,
        'dic_license_expire' => 'date',
        'use_dic' => null,
        'dic_need_setup' => null,
        'access_info' => null,
        'plan_info' => null,
        'can_use_coupon' => null,
        'accountant_id' => null,
        'dic_license_type' => null,
        'dic_payment_subject' => null,
        'dic_plan_name' => null,
        'dic_signup_date' => null,
        'is_accountant' => null,
        'registration_service' => null
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
        'name' => 'name',
        'email' => 'email',
        'type' => 'type',
        'fic' => 'fic',
        'fic_plan_name' => 'fic_plan_name',
        'fic_license_type' => 'fic_license_type',
        'fic_payment_subject' => 'fic_payment_subject',
        'fic_license_expire' => 'fic_license_expire',
        'fic_signup_date' => 'fic_signup_date',
        'use_fic' => 'use_fic',
        'fic_need_setup' => 'fic_need_setup',
        'dic' => 'dic',
        'dic_plan' => 'dic_plan',
        'dic_license_expire' => 'dic_license_expire',
        'use_dic' => 'use_dic',
        'dic_need_setup' => 'dic_need_setup',
        'access_info' => 'access_info',
        'plan_info' => 'plan_info',
        'can_use_coupon' => 'can_use_coupon',
        'accountant_id' => 'accountant_id',
        'dic_license_type' => 'dic_license_type',
        'dic_payment_subject' => 'dic_payment_subject',
        'dic_plan_name' => 'dic_plan_name',
        'dic_signup_date' => 'dic_signup_date',
        'is_accountant' => 'is_accountant',
        'registration_service' => 'registration_service'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'email' => 'setEmail',
        'type' => 'setType',
        'fic' => 'setFic',
        'fic_plan_name' => 'setFicPlanName',
        'fic_license_type' => 'setFicLicenseType',
        'fic_payment_subject' => 'setFicPaymentSubject',
        'fic_license_expire' => 'setFicLicenseExpire',
        'fic_signup_date' => 'setFicSignupDate',
        'use_fic' => 'setUseFic',
        'fic_need_setup' => 'setFicNeedSetup',
        'dic' => 'setDic',
        'dic_plan' => 'setDicPlan',
        'dic_license_expire' => 'setDicLicenseExpire',
        'use_dic' => 'setUseDic',
        'dic_need_setup' => 'setDicNeedSetup',
        'access_info' => 'setAccessInfo',
        'plan_info' => 'setPlanInfo',
        'can_use_coupon' => 'setCanUseCoupon',
        'accountant_id' => 'setAccountantId',
        'dic_license_type' => 'setDicLicenseType',
        'dic_payment_subject' => 'setDicPaymentSubject',
        'dic_plan_name' => 'setDicPlanName',
        'dic_signup_date' => 'setDicSignupDate',
        'is_accountant' => 'setIsAccountant',
        'registration_service' => 'setRegistrationService'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'email' => 'getEmail',
        'type' => 'getType',
        'fic' => 'getFic',
        'fic_plan_name' => 'getFicPlanName',
        'fic_license_type' => 'getFicLicenseType',
        'fic_payment_subject' => 'getFicPaymentSubject',
        'fic_license_expire' => 'getFicLicenseExpire',
        'fic_signup_date' => 'getFicSignupDate',
        'use_fic' => 'getUseFic',
        'fic_need_setup' => 'getFicNeedSetup',
        'dic' => 'getDic',
        'dic_plan' => 'getDicPlan',
        'dic_license_expire' => 'getDicLicenseExpire',
        'use_dic' => 'getUseDic',
        'dic_need_setup' => 'getDicNeedSetup',
        'access_info' => 'getAccessInfo',
        'plan_info' => 'getPlanInfo',
        'can_use_coupon' => 'getCanUseCoupon',
        'accountant_id' => 'getAccountantId',
        'dic_license_type' => 'getDicLicenseType',
        'dic_payment_subject' => 'getDicPaymentSubject',
        'dic_plan_name' => 'getDicPlanName',
        'dic_signup_date' => 'getDicSignupDate',
        'is_accountant' => 'getIsAccountant',
        'registration_service' => 'getRegistrationService'
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

    const TYPE_COMPANY = 'company';
    const TYPE_ACCOUNTANT = 'accountant';
    const FIC_PLAN_NAME_TRIAL = 'trial';
    const FIC_PLAN_NAME_STANDARD = 'standard';
    const FIC_PLAN_NAME_PREMIUM = 'premium';
    const FIC_PLAN_NAME_PREMIUM_PLUS = 'premium_plus';
    const DIC_PLAN_TRIAL = 'trial';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_COMPANY,
            self::TYPE_ACCOUNTANT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFicPlanNameAllowableValues()
    {
        return [
            self::FIC_PLAN_NAME_TRIAL,
            self::FIC_PLAN_NAME_STANDARD,
            self::FIC_PLAN_NAME_PREMIUM,
            self::FIC_PLAN_NAME_PREMIUM_PLUS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDicPlanAllowableValues()
    {
        return [
            self::DIC_PLAN_TRIAL,
        ];
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['fic'] = $data['fic'] ?? null;
        $this->container['fic_plan_name'] = $data['fic_plan_name'] ?? null;
        $this->container['fic_license_type'] = $data['fic_license_type'] ?? null;
        $this->container['fic_payment_subject'] = $data['fic_payment_subject'] ?? null;
        $this->container['fic_license_expire'] = $data['fic_license_expire'] ?? null;
        $this->container['fic_signup_date'] = $data['fic_signup_date'] ?? null;
        $this->container['use_fic'] = $data['use_fic'] ?? null;
        $this->container['fic_need_setup'] = $data['fic_need_setup'] ?? null;
        $this->container['dic'] = $data['dic'] ?? null;
        $this->container['dic_plan'] = $data['dic_plan'] ?? null;
        $this->container['dic_license_expire'] = $data['dic_license_expire'] ?? null;
        $this->container['use_dic'] = $data['use_dic'] ?? null;
        $this->container['dic_need_setup'] = $data['dic_need_setup'] ?? null;
        $this->container['access_info'] = $data['access_info'] ?? null;
        $this->container['plan_info'] = $data['plan_info'] ?? null;
        $this->container['can_use_coupon'] = $data['can_use_coupon'] ?? null;
        $this->container['accountant_id'] = $data['accountant_id'] ?? null;
        $this->container['dic_license_type'] = $data['dic_license_type'] ?? null;
        $this->container['dic_payment_subject'] = $data['dic_payment_subject'] ?? null;
        $this->container['dic_plan_name'] = $data['dic_plan_name'] ?? null;
        $this->container['dic_signup_date'] = $data['dic_signup_date'] ?? null;
        $this->container['is_accountant'] = $data['is_accountant'] ?? null;
        $this->container['registration_service'] = $data['registration_service'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFicPlanNameAllowableValues();
        if (!is_null($this->container['fic_plan_name']) && !in_array($this->container['fic_plan_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fic_plan_name', must be one of '%s'",
                $this->container['fic_plan_name'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDicPlanAllowableValues();
        if (!is_null($this->container['dic_plan']) && !in_array($this->container['dic_plan'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dic_plan', must be one of '%s'",
                $this->container['dic_plan'],
                implode("', '", $allowedValues)
            );
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
     * @param int|null $id Company unique identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Company name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $email Company email.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Company type.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets fic
     *
     * @return bool|null
     */
    public function getFic()
    {
        return $this->container['fic'];
    }

    /**
     * Sets fic
     *
     * @param bool|null $fic Determine if the company has a FIC account.
     *
     * @return self
     */
    public function setFic($fic)
    {
        $this->container['fic'] = $fic;

        return $this;
    }

    /**
     * Gets fic_plan_name
     *
     * @return string|null
     */
    public function getFicPlanName()
    {
        return $this->container['fic_plan_name'];
    }

    /**
     * Sets fic_plan_name
     *
     * @param string|null $fic_plan_name Company FIC account plan.
     *
     * @return self
     */
    public function setFicPlanName($fic_plan_name)
    {
        $allowedValues = $this->getFicPlanNameAllowableValues();
        if (!is_null($fic_plan_name) && !in_array($fic_plan_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fic_plan_name', must be one of '%s'",
                    $fic_plan_name,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fic_plan_name'] = $fic_plan_name;

        return $this;
    }

    /**
     * Gets fic_license_type
     *
     * @return string|null
     */
    public function getFicLicenseType()
    {
        return $this->container['fic_license_type'];
    }

    /**
     * Sets fic_license_type
     *
     * @param string|null $fic_license_type Company FIC account plan.
     *
     * @return self
     */
    public function setFicLicenseType($fic_license_type)
    {
        $this->container['fic_license_type'] = $fic_license_type;

        return $this;
    }

    /**
     * Gets fic_payment_subject
     *
     * @return string|null
     */
    public function getFicPaymentSubject()
    {
        return $this->container['fic_payment_subject'];
    }

    /**
     * Sets fic_payment_subject
     *
     * @param string|null $fic_payment_subject Company FIC account payment subject.
     *
     * @return self
     */
    public function setFicPaymentSubject($fic_payment_subject)
    {
        $this->container['fic_payment_subject'] = $fic_payment_subject;

        return $this;
    }

    /**
     * Gets fic_license_expire
     *
     * @return \DateTime|null
     */
    public function getFicLicenseExpire()
    {
        return $this->container['fic_license_expire'];
    }

    /**
     * Sets fic_license_expire
     *
     * @param \DateTime|null $fic_license_expire Company FIC license expiration date.
     *
     * @return self
     */
    public function setFicLicenseExpire($fic_license_expire)
    {
        $this->container['fic_license_expire'] = $fic_license_expire;

        return $this;
    }

    /**
     * Gets fic_signup_date
     *
     * @return string|null
     */
    public function getFicSignupDate()
    {
        return $this->container['fic_signup_date'];
    }

    /**
     * Sets fic_signup_date
     *
     * @param string|null $fic_signup_date FIC account sign up date.
     *
     * @return self
     */
    public function setFicSignupDate($fic_signup_date)
    {
        $this->container['fic_signup_date'] = $fic_signup_date;

        return $this;
    }

    /**
     * Gets use_fic
     *
     * @return bool|null
     */
    public function getUseFic()
    {
        return $this->container['use_fic'];
    }

    /**
     * Sets use_fic
     *
     * @param bool|null $use_fic Determine if the FIC account is actually used. If type=\"company\" this is always true; if type=\"accountant\" it can be true or false. If false, it means that the accountant uses FIC only to control other companies and not to control itself.
     *
     * @return self
     */
    public function setUseFic($use_fic)
    {
        $this->container['use_fic'] = $use_fic;

        return $this;
    }

    /**
     * Gets fic_need_setup
     *
     * @return bool|null
     */
    public function getFicNeedSetup()
    {
        return $this->container['fic_need_setup'];
    }

    /**
     * Sets fic_need_setup
     *
     * @param bool|null $fic_need_setup Indicate that the initial setup for FIC is required.
     *
     * @return self
     */
    public function setFicNeedSetup($fic_need_setup)
    {
        $this->container['fic_need_setup'] = $fic_need_setup;

        return $this;
    }

    /**
     * Gets dic
     *
     * @return bool|null
     */
    public function getDic()
    {
        return $this->container['dic'];
    }

    /**
     * Sets dic
     *
     * @param bool|null $dic Determine if the company has a DIC account.
     *
     * @return self
     */
    public function setDic($dic)
    {
        $this->container['dic'] = $dic;

        return $this;
    }

    /**
     * Gets dic_plan
     *
     * @return string|null
     */
    public function getDicPlan()
    {
        return $this->container['dic_plan'];
    }

    /**
     * Sets dic_plan
     *
     * @param string|null $dic_plan Company DIC account plan.
     *
     * @return self
     */
    public function setDicPlan($dic_plan)
    {
        $allowedValues = $this->getDicPlanAllowableValues();
        if (!is_null($dic_plan) && !in_array($dic_plan, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dic_plan', must be one of '%s'",
                    $dic_plan,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dic_plan'] = $dic_plan;

        return $this;
    }

    /**
     * Gets dic_license_expire
     *
     * @return \DateTime|null
     */
    public function getDicLicenseExpire()
    {
        return $this->container['dic_license_expire'];
    }

    /**
     * Sets dic_license_expire
     *
     * @param \DateTime|null $dic_license_expire Company FIC license expiration date.
     *
     * @return self
     */
    public function setDicLicenseExpire($dic_license_expire)
    {
        $this->container['dic_license_expire'] = $dic_license_expire;

        return $this;
    }

    /**
     * Gets use_dic
     *
     * @return bool|null
     */
    public function getUseDic()
    {
        return $this->container['use_dic'];
    }

    /**
     * Sets use_dic
     *
     * @param bool|null $use_dic Determine if the DIC account is actually used. If type=“company” this is always true; if type=“accountant” it can be true or false. If false, it means that the accountant uses DIC only to control other companies and not to control itself.
     *
     * @return self
     */
    public function setUseDic($use_dic)
    {
        $this->container['use_dic'] = $use_dic;

        return $this;
    }

    /**
     * Gets dic_need_setup
     *
     * @return bool|null
     */
    public function getDicNeedSetup()
    {
        return $this->container['dic_need_setup'];
    }

    /**
     * Sets dic_need_setup
     *
     * @param bool|null $dic_need_setup Indicate that the initial setup for DIC is required.
     *
     * @return self
     */
    public function setDicNeedSetup($dic_need_setup)
    {
        $this->container['dic_need_setup'] = $dic_need_setup;

        return $this;
    }

    /**
     * Gets access_info
     *
     * @return \FattureInCloud\Model\CompanyInfoAccessInfo|null
     */
    public function getAccessInfo()
    {
        return $this->container['access_info'];
    }

    /**
     * Sets access_info
     *
     * @param \FattureInCloud\Model\CompanyInfoAccessInfo|null $access_info access_info
     *
     * @return self
     */
    public function setAccessInfo($access_info)
    {
        $this->container['access_info'] = $access_info;

        return $this;
    }

    /**
     * Gets plan_info
     *
     * @return \FattureInCloud\Model\CompanyInfoPlanInfo|null
     */
    public function getPlanInfo()
    {
        return $this->container['plan_info'];
    }

    /**
     * Sets plan_info
     *
     * @param \FattureInCloud\Model\CompanyInfoPlanInfo|null $plan_info plan_info
     *
     * @return self
     */
    public function setPlanInfo($plan_info)
    {
        $this->container['plan_info'] = $plan_info;

        return $this;
    }

    /**
     * Gets can_use_coupon
     *
     * @return bool|null
     */
    public function getCanUseCoupon()
    {
        return $this->container['can_use_coupon'];
    }

    /**
     * Sets can_use_coupon
     *
     * @param bool|null $can_use_coupon Determine if a coupon can be used.
     *
     * @return self
     */
    public function setCanUseCoupon($can_use_coupon)
    {
        $this->container['can_use_coupon'] = $can_use_coupon;

        return $this;
    }

    /**
     * Gets accountant_id
     *
     * @return int|null
     */
    public function getAccountantId()
    {
        return $this->container['accountant_id'];
    }

    /**
     * Sets accountant_id
     *
     * @param int|null $accountant_id Accountant unique identifier.
     *
     * @return self
     */
    public function setAccountantId($accountant_id)
    {
        $this->container['accountant_id'] = $accountant_id;

        return $this;
    }

    /**
     * Gets dic_license_type
     *
     * @return string|null
     */
    public function getDicLicenseType()
    {
        return $this->container['dic_license_type'];
    }

    /**
     * Sets dic_license_type
     *
     * @param string|null $dic_license_type Company DIC account license type.
     *
     * @return self
     */
    public function setDicLicenseType($dic_license_type)
    {
        $this->container['dic_license_type'] = $dic_license_type;

        return $this;
    }

    /**
     * Gets dic_payment_subject
     *
     * @return string|null
     */
    public function getDicPaymentSubject()
    {
        return $this->container['dic_payment_subject'];
    }

    /**
     * Sets dic_payment_subject
     *
     * @param string|null $dic_payment_subject Company DIC account payment subject.
     *
     * @return self
     */
    public function setDicPaymentSubject($dic_payment_subject)
    {
        $this->container['dic_payment_subject'] = $dic_payment_subject;

        return $this;
    }

    /**
     * Gets dic_plan_name
     *
     * @return string|null
     */
    public function getDicPlanName()
    {
        return $this->container['dic_plan_name'];
    }

    /**
     * Sets dic_plan_name
     *
     * @param string|null $dic_plan_name Company DIC account plan name.
     *
     * @return self
     */
    public function setDicPlanName($dic_plan_name)
    {
        $this->container['dic_plan_name'] = $dic_plan_name;

        return $this;
    }

    /**
     * Gets dic_signup_date
     *
     * @return string|null
     */
    public function getDicSignupDate()
    {
        return $this->container['dic_signup_date'];
    }

    /**
     * Sets dic_signup_date
     *
     * @param string|null $dic_signup_date DIC account sign up date.
     *
     * @return self
     */
    public function setDicSignupDate($dic_signup_date)
    {
        $this->container['dic_signup_date'] = $dic_signup_date;

        return $this;
    }

    /**
     * Gets is_accountant
     *
     * @return bool|null
     */
    public function getIsAccountant()
    {
        return $this->container['is_accountant'];
    }

    /**
     * Sets is_accountant
     *
     * @param bool|null $is_accountant Determine if the logged account is an accountant.
     *
     * @return self
     */
    public function setIsAccountant($is_accountant)
    {
        $this->container['is_accountant'] = $is_accountant;

        return $this;
    }

    /**
     * Gets registration_service
     *
     * @return string|null
     */
    public function getRegistrationService()
    {
        return $this->container['registration_service'];
    }

    /**
     * Sets registration_service
     *
     * @param string|null $registration_service registration_service
     *
     * @return self
     */
    public function setRegistrationService($registration_service)
    {
        $this->container['registration_service'] = $registration_service;

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

