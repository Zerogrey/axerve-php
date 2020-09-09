<?php
/**
 * InlineResponse2009Payload
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
 * Axerve Codegen version: 3.0.21
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
 * InlineResponse2009Payload Class Doc Comment
 *
 * @category Class
 * @package  Axerve\Client
 * @author   Axerve Codegen team
 * @link     https://github.com/axerve-api/axerve-codegen
 */
class InlineResponse2009Payload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $axerveModelName = 'inline_response_200_9_payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveTypes = [
        'transaction_type' => 'string',
'transaction_result' => 'string',
'bank_transaction_id' => 'string',
'shop_transaction_id' => 'string',
'payment_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveFormats = [
        'transaction_type' => null,
'transaction_result' => null,
'bank_transaction_id' => null,
'shop_transaction_id' => null,
'payment_id' => null    ];

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
        'transaction_type' => 'transactionType',
'transaction_result' => 'transactionResult',
'bank_transaction_id' => 'bankTransactionID',
'shop_transaction_id' => 'shopTransactionID',
'payment_id' => 'paymentID'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_type' => 'setTransactionType',
'transaction_result' => 'setTransactionResult',
'bank_transaction_id' => 'setBankTransactionId',
'shop_transaction_id' => 'setShopTransactionId',
'payment_id' => 'setPaymentId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_type' => 'getTransactionType',
'transaction_result' => 'getTransactionResult',
'bank_transaction_id' => 'getBankTransactionId',
'shop_transaction_id' => 'getShopTransactionId',
'payment_id' => 'getPaymentId'    ];

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
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['transaction_result'] = isset($data['transaction_result']) ? $data['transaction_result'] : null;
        $this->container['bank_transaction_id'] = isset($data['bank_transaction_id']) ? $data['bank_transaction_id'] : null;
        $this->container['shop_transaction_id'] = isset($data['shop_transaction_id']) ? $data['shop_transaction_id'] : null;
        $this->container['payment_id'] = isset($data['payment_id']) ? $data['payment_id'] : null;
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
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type transaction_type
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets transaction_result
     *
     * @return string
     */
    public function getTransactionResult()
    {
        return $this->container['transaction_result'];
    }

    /**
     * Sets transaction_result
     *
     * @param string $transaction_result transaction_result
     *
     * @return $this
     */
    public function setTransactionResult($transaction_result)
    {
        $this->container['transaction_result'] = $transaction_result;

        return $this;
    }

    /**
     * Gets bank_transaction_id
     *
     * @return string
     */
    public function getBankTransactionId()
    {
        return $this->container['bank_transaction_id'];
    }

    /**
     * Sets bank_transaction_id
     *
     * @param string $bank_transaction_id bank_transaction_id
     *
     * @return $this
     */
    public function setBankTransactionId($bank_transaction_id)
    {
        $this->container['bank_transaction_id'] = $bank_transaction_id;

        return $this;
    }

    /**
     * Gets shop_transaction_id
     *
     * @return string
     */
    public function getShopTransactionId()
    {
        return $this->container['shop_transaction_id'];
    }

    /**
     * Sets shop_transaction_id
     *
     * @param string $shop_transaction_id shop_transaction_id
     *
     * @return $this
     */
    public function setShopTransactionId($shop_transaction_id)
    {
        $this->container['shop_transaction_id'] = $shop_transaction_id;

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