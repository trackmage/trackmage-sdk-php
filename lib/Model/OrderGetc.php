<?php
/**
 * OrderGetc
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
 * OrderGetc Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderGetc implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order-Getc';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'workspace' => 'string',
        'orderNumber' => 'string',
        'externalSourceIntegration' => 'string',
        'externalSourceSyncId' => 'string',
        'externalSourceUrl' => 'string',
        'subtotal' => 'string',
        'total' => 'string',
        'orderStatus' => '\TrackMage\Client\Swagger\Model\StatusGetc',
        'orderType' => 'string',
        'email' => 'string',
        'phoneNumber' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'shippingAddress' => '\TrackMage\Client\Swagger\Model\AddressGetc',
        'billingAddress' => '\TrackMage\Client\Swagger\Model\AddressGetc',
        'fulfilmentStatus' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'workspace' => 'iri-reference',
        'orderNumber' => null,
        'externalSourceIntegration' => 'iri-reference',
        'externalSourceSyncId' => null,
        'externalSourceUrl' => null,
        'subtotal' => null,
        'total' => null,
        'orderStatus' => null,
        'orderType' => null,
        'email' => null,
        'phoneNumber' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'shippingAddress' => null,
        'billingAddress' => null,
        'fulfilmentStatus' => null,
        'id' => 'uuid'
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
        'workspace' => 'workspace',
        'orderNumber' => 'orderNumber',
        'externalSourceIntegration' => 'externalSourceIntegration',
        'externalSourceSyncId' => 'externalSourceSyncId',
        'externalSourceUrl' => 'externalSourceUrl',
        'subtotal' => 'subtotal',
        'total' => 'total',
        'orderStatus' => 'orderStatus',
        'orderType' => 'orderType',
        'email' => 'email',
        'phoneNumber' => 'phoneNumber',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt',
        'shippingAddress' => 'shippingAddress',
        'billingAddress' => 'billingAddress',
        'fulfilmentStatus' => 'fulfilmentStatus',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'workspace' => 'setWorkspace',
        'orderNumber' => 'setOrderNumber',
        'externalSourceIntegration' => 'setExternalSourceIntegration',
        'externalSourceSyncId' => 'setExternalSourceSyncId',
        'externalSourceUrl' => 'setExternalSourceUrl',
        'subtotal' => 'setSubtotal',
        'total' => 'setTotal',
        'orderStatus' => 'setOrderStatus',
        'orderType' => 'setOrderType',
        'email' => 'setEmail',
        'phoneNumber' => 'setPhoneNumber',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'shippingAddress' => 'setShippingAddress',
        'billingAddress' => 'setBillingAddress',
        'fulfilmentStatus' => 'setFulfilmentStatus',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'workspace' => 'getWorkspace',
        'orderNumber' => 'getOrderNumber',
        'externalSourceIntegration' => 'getExternalSourceIntegration',
        'externalSourceSyncId' => 'getExternalSourceSyncId',
        'externalSourceUrl' => 'getExternalSourceUrl',
        'subtotal' => 'getSubtotal',
        'total' => 'getTotal',
        'orderStatus' => 'getOrderStatus',
        'orderType' => 'getOrderType',
        'email' => 'getEmail',
        'phoneNumber' => 'getPhoneNumber',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'shippingAddress' => 'getShippingAddress',
        'billingAddress' => 'getBillingAddress',
        'fulfilmentStatus' => 'getFulfilmentStatus',
        'id' => 'getId'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['orderNumber'] = isset($data['orderNumber']) ? $data['orderNumber'] : null;
        $this->container['externalSourceIntegration'] = isset($data['externalSourceIntegration']) ? $data['externalSourceIntegration'] : null;
        $this->container['externalSourceSyncId'] = isset($data['externalSourceSyncId']) ? $data['externalSourceSyncId'] : null;
        $this->container['externalSourceUrl'] = isset($data['externalSourceUrl']) ? $data['externalSourceUrl'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['orderStatus'] = isset($data['orderStatus']) ? $data['orderStatus'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['fulfilmentStatus'] = isset($data['fulfilmentStatus']) ? $data['fulfilmentStatus'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
        if ($this->container['orderNumber'] === null) {
            $invalidProperties[] = "'orderNumber' can't be null";
        }
        if ($this->container['orderType'] === null) {
            $invalidProperties[] = "'orderType' can't be null";
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
     * Gets workspace
     *
     * @return string
     */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
     * Sets workspace
     *
     * @param string $workspace workspace
     *
     * @return $this
     */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;

        return $this;
    }

    /**
     * Gets orderNumber
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['orderNumber'];
    }

    /**
     * Sets orderNumber
     *
     * @param string $orderNumber orderNumber
     *
     * @return $this
     */
    public function setOrderNumber($orderNumber)
    {
        $this->container['orderNumber'] = $orderNumber;

        return $this;
    }

    /**
     * Gets externalSourceIntegration
     *
     * @return string|null
     */
    public function getExternalSourceIntegration()
    {
        return $this->container['externalSourceIntegration'];
    }

    /**
     * Sets externalSourceIntegration
     *
     * @param string|null $externalSourceIntegration externalSourceIntegration
     *
     * @return $this
     */
    public function setExternalSourceIntegration($externalSourceIntegration)
    {
        $this->container['externalSourceIntegration'] = $externalSourceIntegration;

        return $this;
    }

    /**
     * Gets externalSourceSyncId
     *
     * @return string|null
     */
    public function getExternalSourceSyncId()
    {
        return $this->container['externalSourceSyncId'];
    }

    /**
     * Sets externalSourceSyncId
     *
     * @param string|null $externalSourceSyncId externalSourceSyncId
     *
     * @return $this
     */
    public function setExternalSourceSyncId($externalSourceSyncId)
    {
        $this->container['externalSourceSyncId'] = $externalSourceSyncId;

        return $this;
    }

    /**
     * Gets externalSourceUrl
     *
     * @return string|null
     */
    public function getExternalSourceUrl()
    {
        return $this->container['externalSourceUrl'];
    }

    /**
     * Sets externalSourceUrl
     *
     * @param string|null $externalSourceUrl externalSourceUrl
     *
     * @return $this
     */
    public function setExternalSourceUrl($externalSourceUrl)
    {
        $this->container['externalSourceUrl'] = $externalSourceUrl;

        return $this;
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
     * @return \TrackMage\Client\Swagger\Model\StatusGetc|null
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     *
     * @param \TrackMage\Client\Swagger\Model\StatusGetc|null $orderStatus orderStatus
     *
     * @return $this
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * Gets orderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
     * Sets orderType
     *
     * @param string $orderType customer|vendor
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;

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
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets shippingAddress
     *
     * @return \TrackMage\Client\Swagger\Model\AddressGetc|null
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     *
     * @param \TrackMage\Client\Swagger\Model\AddressGetc|null $shippingAddress shippingAddress
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
     * @return \TrackMage\Client\Swagger\Model\AddressGetc|null
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \TrackMage\Client\Swagger\Model\AddressGetc|null $billingAddress billingAddress
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets fulfilmentStatus
     *
     * @return string|null
     */
    public function getFulfilmentStatus()
    {
        return $this->container['fulfilmentStatus'];
    }

    /**
     * Sets fulfilmentStatus
     *
     * @param string|null $fulfilmentStatus fulfilmentStatus
     *
     * @return $this
     */
    public function setFulfilmentStatus($fulfilmentStatus)
    {
        $this->container['fulfilmentStatus'] = $fulfilmentStatus;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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

