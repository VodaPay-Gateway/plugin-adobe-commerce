<?php
/**
 * PaymentDigitalWalletRequestV2Model
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  VodaPayGatewayClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * VodaPay Gateway
 *
 * Enabling ecommerce merchants to accept online payments from customers.
 *
 * The version of the OpenAPI document: v2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace VodaPayGatewayClient\Model;

use \ArrayAccess;
use \VodaPayGatewayClient\ObjectSerializer;

/**
 * PaymentDigitalWalletRequestV2Model Class Doc Comment
 *
 * @category Class
 * @package  VodaPayGatewayClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentDigitalWalletRequestV2Model implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentDigitalWalletRequestV2Model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'token_requester_id' => 'string',
        'payment_token' => 'int',
        'system_trace_number' => 'int',
        'echo_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'token_requester_id' => null,
        'payment_token' => 'int64',
        'system_trace_number' => 'int32',
        'echo_data' => null
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
        'token_requester_id' => 'tokenRequesterId',
        'payment_token' => 'paymentToken',
        'system_trace_number' => 'systemTraceNumber',
        'echo_data' => 'echoData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token_requester_id' => 'setTokenRequesterId',
        'payment_token' => 'setPaymentToken',
        'system_trace_number' => 'setSystemTraceNumber',
        'echo_data' => 'setEchoData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token_requester_id' => 'getTokenRequesterId',
        'payment_token' => 'getPaymentToken',
        'system_trace_number' => 'getSystemTraceNumber',
        'echo_data' => 'getEchoData'
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
        $this->container['token_requester_id'] = $data['token_requester_id'] ?? null;
        $this->container['payment_token'] = $data['payment_token'] ?? null;
        $this->container['system_trace_number'] = $data['system_trace_number'] ?? null;
        $this->container['echo_data'] = $data['echo_data'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payment_token'] === null) {
            $invalidProperties[] = "'payment_token' can't be null";
        }
        if ($this->container['system_trace_number'] === null) {
            $invalidProperties[] = "'system_trace_number' can't be null";
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
     * Gets token_requester_id
     *
     * @return string|null
     */
    public function getTokenRequesterId()
    {
        return $this->container['token_requester_id'];
    }

    /**
     * Sets token_requester_id
     *
     * @param string|null $token_requester_id token_requester_id
     *
     * @return self
     */
    public function setTokenRequesterId($token_requester_id)
    {
        $this->container['token_requester_id'] = $token_requester_id;

        return $this;
    }

    /**
     * Gets payment_token
     *
     * @return int
     */
    public function getPaymentToken()
    {
        return $this->container['payment_token'];
    }

    /**
     * Sets payment_token
     *
     * @param int $payment_token payment_token
     *
     * @return self
     */
    public function setPaymentToken($payment_token)
    {
        $this->container['payment_token'] = $payment_token;

        return $this;
    }

    /**
     * Gets system_trace_number
     *
     * @return int
     */
    public function getSystemTraceNumber()
    {
        return $this->container['system_trace_number'];
    }

    /**
     * Sets system_trace_number
     *
     * @param int $system_trace_number system_trace_number
     *
     * @return self
     */
    public function setSystemTraceNumber($system_trace_number)
    {
        $this->container['system_trace_number'] = $system_trace_number;

        return $this;
    }

    /**
     * Gets echo_data
     *
     * @return string|null
     */
    public function getEchoData()
    {
        return $this->container['echo_data'];
    }

    /**
     * Sets echo_data
     *
     * @param string|null $echo_data echo_data
     *
     * @return self
     */
    public function setEchoData($echo_data)
    {
        $this->container['echo_data'] = $echo_data;

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
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
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


