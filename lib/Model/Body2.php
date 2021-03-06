<?php
/**
 * Body2
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
 * Body2 Class Doc Comment
 *
 * @category Class
 * @package  Axerve\Client
 * @author   Axerve Codegen team
 * @link     https://github.com/axerve-api/axerve-codegen
 */
class Body2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $axerveModelName = 'body_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveTypes = [
        'order_details' => '\Axerve\Client\Model\OrderDetailsModel',
'amount' => 'string',
'shipping_details' => '\Axerve\Client\Model\ShippingDetailsModel',
'payment_id' => 'string',
'shop_login' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveFormats = [
        'order_details' => null,
'amount' => null,
'shipping_details' => null,
'payment_id' => null,
'shop_login' => null    ];

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
        'order_details' => 'orderDetails',
'amount' => 'amount',
'shipping_details' => 'shippingDetails',
'payment_id' => 'paymentId',
'shop_login' => 'shopLogin'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_details' => 'setOrderDetails',
'amount' => 'setAmount',
'shipping_details' => 'setShippingDetails',
'payment_id' => 'setPaymentId',
'shop_login' => 'setShopLogin'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_details' => 'getOrderDetails',
'amount' => 'getAmount',
'shipping_details' => 'getShippingDetails',
'payment_id' => 'getPaymentId',
'shop_login' => 'getShopLogin'    ];

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
        $this->container['order_details'] = isset($data['order_details']) ? $data['order_details'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['shipping_details'] = isset($data['shipping_details']) ? $data['shipping_details'] : null;
        $this->container['payment_id'] = isset($data['payment_id']) ? $data['payment_id'] : null;
        $this->container['shop_login'] = isset($data['shop_login']) ? $data['shop_login'] : null;
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
     * Gets order_details
     *
     * @return \Axerve\Client\Model\OrderDetailsModel
     */
    public function getOrderDetails()
    {
        return $this->container['order_details'];
    }

    /**
     * Sets order_details
     *
     * @param \Axerve\Client\Model\OrderDetailsModel $order_details order_details
     *
     * @return $this
     */
    public function setOrderDetails($order_details)
    {
        $this->container['order_details'] = $order_details;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets shipping_details
     *
     * @return \Axerve\Client\Model\ShippingDetailsModel
     */
    public function getShippingDetails()
    {
        return $this->container['shipping_details'];
    }

    /**
     * Sets shipping_details
     *
     * @param \Axerve\Client\Model\ShippingDetailsModel $shipping_details shipping_details
     *
     * @return $this
     */
    public function setShippingDetails($shipping_details)
    {
        $this->container['shipping_details'] = $shipping_details;

        return $this;
    }

    /**
     * Gets payment_id
     *
     * @return string
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     *
     * @param string $payment_id payment_id
     *
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets shop_login
     *
     * @return string
     */
    public function getShopLogin()
    {
        return $this->container['shop_login'];
    }

    /**
     * Sets shop_login
     *
     * @param string $shop_login shop_login
     *
     * @return $this
     */
    public function setShopLogin($shop_login)
    {
        $this->container['shop_login'] = $shop_login;

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
