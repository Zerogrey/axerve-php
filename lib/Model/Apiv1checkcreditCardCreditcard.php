<?php
/**
 * Apiv1checkcreditCardCreditcard
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
 * Apiv1checkcreditCardCreditcard Class Doc Comment
 *
 * @category Class
 * @package  Axerve\Client
 * @author   Axerve Codegen team
 * @link     https://github.com/axerve-api/axerve-codegen
 */
class Apiv1checkcreditCardCreditcard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $axerveModelName = 'apiv1checkcreditCard_creditcard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveTypes = [
        'number' => 'string',
'exp_month' => 'string',
'cvv' => 'string',
'exp_year' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveFormats = [
        'number' => null,
'exp_month' => null,
'cvv' => null,
'exp_year' => null    ];

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
        'number' => 'number',
'exp_month' => 'expMonth',
'cvv' => 'CVV',
'exp_year' => 'expYear'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
'exp_month' => 'setExpMonth',
'cvv' => 'setCvv',
'exp_year' => 'setExpYear'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
'exp_month' => 'getExpMonth',
'cvv' => 'getCvv',
'exp_year' => 'getExpYear'    ];

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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['exp_month'] = isset($data['exp_month']) ? $data['exp_month'] : null;
        $this->container['cvv'] = isset($data['cvv']) ? $data['cvv'] : null;
        $this->container['exp_year'] = isset($data['exp_year']) ? $data['exp_year'] : null;
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets exp_month
     *
     * @return string
     */
    public function getExpMonth()
    {
        return $this->container['exp_month'];
    }

    /**
     * Sets exp_month
     *
     * @param string $exp_month exp_month
     *
     * @return $this
     */
    public function setExpMonth($exp_month)
    {
        $this->container['exp_month'] = $exp_month;

        return $this;
    }

    /**
     * Gets cvv
     *
     * @return string
     */
    public function getCvv()
    {
        return $this->container['cvv'];
    }

    /**
     * Sets cvv
     *
     * @param string $cvv cvv
     *
     * @return $this
     */
    public function setCvv($cvv)
    {
        $this->container['cvv'] = $cvv;

        return $this;
    }

    /**
     * Gets exp_year
     *
     * @return string
     */
    public function getExpYear()
    {
        return $this->container['exp_year'];
    }

    /**
     * Sets exp_year
     *
     * @param string $exp_year exp_year
     *
     * @return $this
     */
    public function setExpYear($exp_year)
    {
        $this->container['exp_year'] = $exp_year;

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
