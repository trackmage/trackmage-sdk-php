<?php
/**
 * OrderPut
 *
 * PHP version 5
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Trackmage Public API
 *
 * TrackMage API
 *
 * The version of the OpenAPI document: dev
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TrackMage\Client\Swagger\Model;

use \ArrayAccess;
use \TrackMage\Client\Swagger\ObjectSerializer;

/**
 * OrderPut Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderPut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order-Put';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subtotal' => 'string',
        'total' => 'string',
        'orderStatus' => '\TrackMage\Client\Swagger\Model\StatusPut',
        'email' => 'string',
        'phoneNumber' => 'string',
        'shipments' => 'string[]',
        'shippingAddress' => '\TrackMage\Client\Swagger\Model\AddressPut',
        'billingAddress' => '\TrackMage\Client\Swagger\Model\AddressPut'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'subtotal' => null,
        'total' => null,
        'orderStatus' => null,
        'email' => null,
        'phoneNumber' => null,
        'shipments' => 'iri-reference',
        'shippingAddress' => null,
        'billingAddress' => null
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
        'subtotal' => 'subtotal',
        'total' => 'total',
        'orderStatus' => 'orderStatus',
        'email' => 'email',
        'phoneNumber' => 'phoneNumber',
        'shipments' => 'shipments',
        'shippingAddress' => 'shippingAddress',
        'billingAddress' => 'billingAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subtotal' => 'setSubtotal',
        'total' => 'setTotal',
        'orderStatus' => 'setOrderStatus',
        'email' => 'setEmail',
        'phoneNumber' => 'setPhoneNumber',
        'shipments' => 'setShipments',
        'shippingAddress' => 'setShippingAddress',
        'billingAddress' => 'setBillingAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subtotal' => 'getSubtotal',
        'total' => 'getTotal',
        'orderStatus' => 'getOrderStatus',
        'email' => 'getEmail',
        'phoneNumber' => 'getPhoneNumber',
        'shipments' => 'getShipments',
        'shippingAddress' => 'getShippingAddress',
        'billingAddress' => 'getBillingAddress'
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
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['orderStatus'] = isset($data['orderStatus']) ? $data['orderStatus'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['shipments'] = isset($data['shipments']) ? $data['shipments'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
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
     * Gets subtotal
     *
     * @return string|null
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param string|null $subtotal subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string|null $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets orderStatus
     *
     * @return \TrackMage\Client\Swagger\Model\StatusPut|null
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     *
     * @param \TrackMage\Client\Swagger\Model\StatusPut|null $orderStatus orderStatus
     *
     * @return $this
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

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
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string|null $phoneNumber phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets shipments
     *
     * @return string[]|null
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param string[]|null $shipments shipments
     *
     * @return $this
     */
    public function setShipments($shipments)
    {
        $this->container['shipments'] = $shipments;

        return $this;
    }

    /**
     * Gets shippingAddress
     *
     * @return \TrackMage\Client\Swagger\Model\AddressPut|null
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     *
     * @param \TrackMage\Client\Swagger\Model\AddressPut|null $shippingAddress shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \TrackMage\Client\Swagger\Model\AddressPut|null
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \TrackMage\Client\Swagger\Model\AddressPut|null $billingAddress billingAddress
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

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

