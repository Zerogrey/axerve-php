<?php
/**
 * InlineResponse2006Payload
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
 * InlineResponse2006Payload Class Doc Comment
 *
 * @category Class
 * @package  Axerve\Client
 * @author   Axerve Codegen team
 * @link     https://github.com/axerve-api/axerve-codegen
 */
class SubmitPayloadModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $axerveModelName = 'inline_response_200_6_payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveTypes = [
        'transaction_type' => 'string',
'transaction_result' => 'string',
'transaction_error_code' => 'string',
'transaction_error_description' => 'string',
'bank_transaction_id' => 'string',
'shop_transaction_id' => 'string',
'authorization_code' => 'string',
'payment_id' => 'string',
'currency' => 'string',
'country' => 'string',
'company' => 'string',
'td_level' => 'string',
'buyer' => '\Axerve\Client\Model\InlineResponse2006PayloadBuyer',
'risk' => '\Axerve\Client\Model\InlineResponse2006PayloadRisk',
'custom_info' => 'object',
'alert_code' => 'string',
'alert_description' => 'string',
'cvv_present' => 'string',
'masked_pan' => 'string',
'payment_method' => 'string',
'product_type' => 'string',
'token' => 'string',
'token_expiry_month' => 'string',
'token_expiry_year' => 'string',
'user_redirect' => '\Axerve\Client\Model\PayloadUserRedirect'];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveFormats = [
        'transaction_type' => null,
'transaction_result' => null,
'transaction_error_code' => null,
'transaction_error_description' => null,
'bank_transaction_id' => null,
'shop_transaction_id' => null,
'authorization_code' => null,
'payment_id' => null,
'currency' => null,
'country' => null,
'company' => null,
'td_level' => null,
'buyer' => null,
'risk' => null,
'custom_info' => null,
'alert_code' => null,
'alert_description' => null,
'cvv_present' => null,
'masked_pan' => null,
'payment_method' => null,
'product_type' => null,
'token' => null,
'token_expiry_month' => null,
'token_expiry_year' => null,
'user_redirect' => null    ];

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
'transaction_error_code' => 'transactionErrorCode',
'transaction_error_description' => 'transactionErrorDescription',
'bank_transaction_id' => 'bankTransactionID',
'shop_transaction_id' => 'shopTransactionID',
'authorization_code' => 'authorizationCode',
'payment_id' => 'paymentID',
'currency' => 'currency',
'country' => 'country',
'company' => 'company',
'td_level' => 'tdLevel',
'buyer' => 'buyer',
'risk' => 'risk',
'custom_info' => 'customInfo',
'alert_code' => 'alertCode',
'alert_description' => 'alertDescription',
'cvv_present' => 'cvvPresent',
'masked_pan' => 'maskedPAN',
'payment_method' => 'paymentMethod',
'product_type' => 'productType',
'token' => 'token',
'token_expiry_month' => 'tokenExpiryMonth',
'token_expiry_year' => 'tokenExpiryYear',
'user_redirect' => 'userRedirect'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_type' => 'setTransactionType',
'transaction_result' => 'setTransactionResult',
'transaction_error_code' => 'setTransactionErrorCode',
'transaction_error_description' => 'setTransactionErrorDescription',
'bank_transaction_id' => 'setBankTransactionId',
'shop_transaction_id' => 'setShopTransactionId',
'authorization_code' => 'setAuthorizationCode',
'payment_id' => 'setPaymentId',
'currency' => 'setCurrency',
'country' => 'setCountry',
'company' => 'setCompany',
'td_level' => 'setTdLevel',
'buyer' => 'setBuyer',
'risk' => 'setRisk',
'custom_info' => 'setCustomInfo',
'alert_code' => 'setAlertCode',
'alert_description' => 'setAlertDescription',
'cvv_present' => 'setCvvPresent',
'masked_pan' => 'setMaskedPan',
'payment_method' => 'setPaymentMethod',
'product_type' => 'setProductType',
'token' => 'setToken',
'token_expiry_month' => 'setTokenExpiryMonth',
'token_expiry_year' => 'setTokenExpiryYear',
'user_redirect' => 'setUserRedirect'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_type' => 'getTransactionType',
'transaction_result' => 'getTransactionResult',
'transaction_error_code' => 'getTransactionErrorCode',
'transaction_error_description' => 'getTransactionErrorDescription',
'bank_transaction_id' => 'getBankTransactionId',
'shop_transaction_id' => 'getShopTransactionId',
'authorization_code' => 'getAuthorizationCode',
'payment_id' => 'getPaymentId',
'currency' => 'getCurrency',
'country' => 'getCountry',
'company' => 'getCompany',
'td_level' => 'getTdLevel',
'buyer' => 'getBuyer',
'risk' => 'getRisk',
'custom_info' => 'getCustomInfo',
'alert_code' => 'getAlertCode',
'alert_description' => 'getAlertDescription',
'cvv_present' => 'getCvvPresent',
'masked_pan' => 'getMaskedPan',
'payment_method' => 'getPaymentMethod',
'product_type' => 'getProductType',
'token' => 'getToken',
'token_expiry_month' => 'getTokenExpiryMonth',
'token_expiry_year' => 'getTokenExpiryYear',
'user_redirect' => 'getUserRedirect'    ];

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
        $this->container['transaction_error_code'] = isset($data['transaction_error_code']) ? $data['transaction_error_code'] : null;
        $this->container['transaction_error_description'] = isset($data['transaction_error_description']) ? $data['transaction_error_description'] : null;
        $this->container['bank_transaction_id'] = isset($data['bank_transaction_id']) ? $data['bank_transaction_id'] : null;
        $this->container['shop_transaction_id'] = isset($data['shop_transaction_id']) ? $data['shop_transaction_id'] : null;
        $this->container['authorization_code'] = isset($data['authorization_code']) ? $data['authorization_code'] : null;
        $this->container['payment_id'] = isset($data['payment_id']) ? $data['payment_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['td_level'] = isset($data['td_level']) ? $data['td_level'] : null;
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
        $this->container['risk'] = isset($data['risk']) ? $data['risk'] : null;
        $this->container['custom_info'] = isset($data['custom_info']) ? $data['custom_info'] : null;
        $this->container['alert_code'] = isset($data['alert_code']) ? $data['alert_code'] : null;
        $this->container['alert_description'] = isset($data['alert_description']) ? $data['alert_description'] : null;
        $this->container['cvv_present'] = isset($data['cvv_present']) ? $data['cvv_present'] : null;
        $this->container['masked_pan'] = isset($data['masked_pan']) ? $data['masked_pan'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['token_expiry_month'] = isset($data['token_expiry_month']) ? $data['token_expiry_month'] : null;
        $this->container['token_expiry_year'] = isset($data['token_expiry_year']) ? $data['token_expiry_year'] : null;
        $this->container['user_redirect'] = isset($data['user_redirect']) ? $data['user_redirect'] : null;
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
     * Gets transaction_error_code
     *
     * @return string
     */
    public function getTransactionErrorCode()
    {
        return $this->container['transaction_error_code'];
    }

    /**
     * Sets transaction_error_code
     *
     * @param string $transaction_error_code transaction_error_code
     *
     * @return $this
     */
    public function setTransactionErrorCode($transaction_error_code)
    {
        $this->container['transaction_error_code'] = $transaction_error_code;

        return $this;
    }

    /**
     * Gets transaction_error_description
     *
     * @return string
     */
    public function getTransactionErrorDescription()
    {
        return $this->container['transaction_error_description'];
    }

    /**
     * Sets transaction_error_description
     *
     * @param string $transaction_error_description transaction_error_description
     *
     * @return $this
     */
    public function setTransactionErrorDescription($transaction_error_description)
    {
        $this->container['transaction_error_description'] = $transaction_error_description;

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
     * Gets authorization_code
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->container['authorization_code'];
    }

    /**
     * Sets authorization_code
     *
     * @param string $authorization_code authorization_code
     *
     * @return $this
     */
    public function setAuthorizationCode($authorization_code)
    {
        $this->container['authorization_code'] = $authorization_code;

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
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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
     * Gets td_level
     *
     * @return string
     */
    public function getTdLevel()
    {
        return $this->container['td_level'];
    }

    /**
     * Sets td_level
     *
     * @param string $td_level td_level
     *
     * @return $this
     */
    public function setTdLevel($td_level)
    {
        $this->container['td_level'] = $td_level;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \Axerve\Client\Model\InlineResponse2006PayloadBuyer
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \Axerve\Client\Model\InlineResponse2006PayloadBuyer $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets risk
     *
     * @return \Axerve\Client\Model\InlineResponse2006PayloadRisk
     */
    public function getRisk()
    {
        return $this->container['risk'];
    }

    /**
     * Sets risk
     *
     * @param \Axerve\Client\Model\InlineResponse2006PayloadRisk $risk risk
     *
     * @return $this
     */
    public function setRisk($risk)
    {
        $this->container['risk'] = $risk;

        return $this;
    }

    /**
     * Gets custom_info
     *
     * @return object
     */
    public function getCustomInfo()
    {
        return $this->container['custom_info'];
    }

    /**
     * Sets custom_info
     *
     * @param object $custom_info custom_info
     *
     * @return $this
     */
    public function setCustomInfo($custom_info)
    {
        $this->container['custom_info'] = $custom_info;

        return $this;
    }

    /**
     * Gets alert_code
     *
     * @return string
     */
    public function getAlertCode()
    {
        return $this->container['alert_code'];
    }

    /**
     * Sets alert_code
     *
     * @param string $alert_code alert_code
     *
     * @return $this
     */
    public function setAlertCode($alert_code)
    {
        $this->container['alert_code'] = $alert_code;

        return $this;
    }

    /**
     * Gets alert_description
     *
     * @return string
     */
    public function getAlertDescription()
    {
        return $this->container['alert_description'];
    }

    /**
     * Sets alert_description
     *
     * @param string $alert_description alert_description
     *
     * @return $this
     */
    public function setAlertDescription($alert_description)
    {
        $this->container['alert_description'] = $alert_description;

        return $this;
    }

    /**
     * Gets cvv_present
     *
     * @return string
     */
    public function getCvvPresent()
    {
        return $this->container['cvv_present'];
    }

    /**
     * Sets cvv_present
     *
     * @param string $cvv_present cvv_present
     *
     * @return $this
     */
    public function setCvvPresent($cvv_present)
    {
        $this->container['cvv_present'] = $cvv_present;

        return $this;
    }

    /**
     * Gets masked_pan
     *
     * @return string
     */
    public function getMaskedPan()
    {
        return $this->container['masked_pan'];
    }

    /**
     * Sets masked_pan
     *
     * @param string $masked_pan masked_pan
     *
     * @return $this
     */
    public function setMaskedPan($masked_pan)
    {
        $this->container['masked_pan'] = $masked_pan;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type product_type
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets token_expiry_month
     *
     * @return string
     */
    public function getTokenExpiryMonth()
    {
        return $this->container['token_expiry_month'];
    }

    /**
     * Sets token_expiry_month
     *
     * @param string $token_expiry_month token_expiry_month
     *
     * @return $this
     */
    public function setTokenExpiryMonth($token_expiry_month)
    {
        $this->container['token_expiry_month'] = $token_expiry_month;

        return $this;
    }

    /**
     * Gets token_expiry_year
     *
     * @return string
     */
    public function getTokenExpiryYear()
    {
        return $this->container['token_expiry_year'];
    }

    /**
     * Sets token_expiry_year
     *
     * @param string $token_expiry_year token_expiry_year
     *
     * @return $this
     */
    public function setTokenExpiryYear($token_expiry_year)
    {
        $this->container['token_expiry_year'] = $token_expiry_year;

        return $this;
    }

    /**
     * Gets user_redirect
     *
     * @return \Axerve\Client\Model\PayloadUserRedirect
     */
    public function getUserRedirect()
    {
        return $this->container['user_redirect'];
    }

    /**
     * Sets user_redirect
     *
     * @param \Axerve\Client\Model\PayloadUserRedirect $user_redirect user_redirect
     *
     * @return $this
     */
    public function setUserRedirect($user_redirect)
    {
        $this->container['user_redirect'] = $user_redirect;

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

    public function toJson()
    {
        return $this->__toString();
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