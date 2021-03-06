<?php
/**
 * Apiv1paymentcreateOrderDetailsCustomerDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  Axerve\Client
 * @author   Axerve Codegen team
 * @link     https://github.com/axerve-api/axerve-codegen
 */

/**
 * Axerve-php
 *
 * Axerve API client made for PHP
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/axerve-api/axerve-codegen.git
 * Axerve Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the axerve code generator program.
 * https://github.com/axerve-api/axerve-codegen
 * Do not edit the class manually.
 */

namespace Axerve\Client\Model;

use \ArrayAccess;
use \Axerve\Client\ObjectSerializer;

/**
 * Apiv1paymentcreateOrderDetailsCustomerDetail Class Doc Comment
 *
 * @category Class
 * @package  Axerve\Client
 * @author   Axerve Codegen team
 * @link     https://github.com/axerve-api/axerve-codegen
 */
class OrderCustomerDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $axerveModelName = 'apiv1paymentcreate_orderDetails_customerDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveTypes = [
        'first_name' => 'string',
'created_at_date' => 'string',
'mobile_phone' => 'string',
'gender' => 'int',
'social_security_number' => 'string',
'home_phone' => 'string',
'middle_name' => 'string',
'company' => 'string',
'primary_email' => 'string',
'lastname' => 'string',
'verified_email' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveFormats = [
        'first_name' => null,
'created_at_date' => null,
'mobile_phone' => null,
'gender' => null,
'social_security_number' => null,
'home_phone' => null,
'middle_name' => null,
'company' => null,
'primary_email' => null,
'lastname' => null,
'verified_email' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function axerveTypes()
    {
        return self::$axerveTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function axerveFormats()
    {
        return self::$axerveFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'first_name' => 'firstName',
'created_at_date' => 'createdAtDate',
'mobile_phone' => 'mobilePhone',
'gender' => 'gender',
'social_security_number' => 'socialSecurityNumber',
'home_phone' => 'homePhone',
'middle_name' => 'middleName',
'company' => 'company',
'primary_email' => 'primaryEmail',
'lastname' => 'lastname',
'verified_email' => 'verifiedEmail'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
'created_at_date' => 'setCreatedAtDate',
'mobile_phone' => 'setMobilePhone',
'gender' => 'setGender',
'social_security_number' => 'setSocialSecurityNumber',
'home_phone' => 'setHomePhone',
'middle_name' => 'setMiddleName',
'company' => 'setCompany',
'primary_email' => 'setPrimaryEmail',
'lastname' => 'setLastname',
'verified_email' => 'setVerifiedEmail'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
'created_at_date' => 'getCreatedAtDate',
'mobile_phone' => 'getMobilePhone',
'gender' => 'getGender',
'social_security_number' => 'getSocialSecurityNumber',
'home_phone' => 'getHomePhone',
'middle_name' => 'getMiddleName',
'company' => 'getCompany',
'primary_email' => 'getPrimaryEmail',
'lastname' => 'getLastname',
'verified_email' => 'getVerifiedEmail'    ];

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
        return self::$axerveModelName;
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['created_at_date'] = isset($data['created_at_date']) ? $data['created_at_date'] : null;
        $this->container['mobile_phone'] = isset($data['mobile_phone']) ? $data['mobile_phone'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['social_security_number'] = isset($data['social_security_number']) ? $data['social_security_number'] : null;
        $this->container['home_phone'] = isset($data['home_phone']) ? $data['home_phone'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['primary_email'] = isset($data['primary_email']) ? $data['primary_email'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['verified_email'] = isset($data['verified_email']) ? $data['verified_email'] : null;
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets created_at_date
     *
     * @return string
     */
    public function getCreatedAtDate()
    {
        return $this->container['created_at_date'];
    }

    /**
     * Sets created_at_date
     *
     * @param string $created_at_date created_at_date
     *
     * @return $this
     */
    public function setCreatedAtDate($created_at_date)
    {
        $this->container['created_at_date'] = $created_at_date;

        return $this;
    }

    /**
     * Gets mobile_phone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->container['mobile_phone'];
    }

    /**
     * Sets mobile_phone
     *
     * @param string $mobile_phone mobile_phone
     *
     * @return $this
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->container['mobile_phone'] = $mobile_phone;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return int
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param int $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets social_security_number
     *
     * @return string
     */
    public function getSocialSecurityNumber()
    {
        return $this->container['social_security_number'];
    }

    /**
     * Sets social_security_number
     *
     * @param string $social_security_number social_security_number
     *
     * @return $this
     */
    public function setSocialSecurityNumber($social_security_number)
    {
        $this->container['social_security_number'] = $social_security_number;

        return $this;
    }

    /**
     * Gets home_phone
     *
     * @return string
     */
    public function getHomePhone()
    {
        return $this->container['home_phone'];
    }

    /**
     * Sets home_phone
     *
     * @param string $home_phone home_phone
     *
     * @return $this
     */
    public function setHomePhone($home_phone)
    {
        $this->container['home_phone'] = $home_phone;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string $middle_name middle_name
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets primary_email
     *
     * @return string
     */
    public function getPrimaryEmail()
    {
        return $this->container['primary_email'];
    }

    /**
     * Sets primary_email
     *
     * @param string $primary_email primary_email
     *
     * @return $this
     */
    public function setPrimaryEmail($primary_email)
    {
        $this->container['primary_email'] = $primary_email;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets verified_email
     *
     * @return string
     */
    public function getVerifiedEmail()
    {
        return $this->container['verified_email'];
    }

    /**
     * Sets verified_email
     *
     * @param string $verified_email verified_email
     *
     * @return $this
     */
    public function setVerifiedEmail($verified_email)
    {
        $this->container['verified_email'] = $verified_email;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            $jsonString = json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
return "$jsonString";
        }

        $jsonString =  json_encode(ObjectSerializer::sanitizeForSerialization($this));
return "$jsonString";
    }
}
