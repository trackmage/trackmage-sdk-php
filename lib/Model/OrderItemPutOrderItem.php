<?php
/**
 * OrderItemPutOrderItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TrackMage API
 *
 * TrackMage API
 *
 * The version of the OpenAPI document: remotes/origin/shipments-0-geb727cd
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.0
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
 * OrderItemPutOrderItem Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderItemPutOrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItem-putOrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'productName' => 'string',
        'qty' => 'int',
        'price' => 'string',
        'rowTotal' => 'string',
        'fulfillmentItem' => '\TrackMage\Client\Swagger\Model\OrderItemPutOrderItem',
        'externalSyncId' => 'string',
        'shipmentItems' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'productName' => null,
        'qty' => null,
        'price' => null,
        'rowTotal' => null,
        'fulfillmentItem' => null,
        'externalSyncId' => null,
        'shipmentItems' => null
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
        'productName' => 'productName',
        'qty' => 'qty',
        'price' => 'price',
        'rowTotal' => 'rowTotal',
        'fulfillmentItem' => 'fulfillmentItem',
        'externalSyncId' => 'externalSyncId',
        'shipmentItems' => 'shipmentItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productName' => 'setProductName',
        'qty' => 'setQty',
        'price' => 'setPrice',
        'rowTotal' => 'setRowTotal',
        'fulfillmentItem' => 'setFulfillmentItem',
        'externalSyncId' => 'setExternalSyncId',
        'shipmentItems' => 'setShipmentItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productName' => 'getProductName',
        'qty' => 'getQty',
        'price' => 'getPrice',
        'rowTotal' => 'getRowTotal',
        'fulfillmentItem' => 'getFulfillmentItem',
        'externalSyncId' => 'getExternalSyncId',
        'shipmentItems' => 'getShipmentItems'
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
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['rowTotal'] = isset($data['rowTotal']) ? $data['rowTotal'] : null;
        $this->container['fulfillmentItem'] = isset($data['fulfillmentItem']) ? $data['fulfillmentItem'] : null;
        $this->container['externalSyncId'] = isset($data['externalSyncId']) ? $data['externalSyncId'] : null;
        $this->container['shipmentItems'] = isset($data['shipmentItems']) ? $data['shipmentItems'] : null;
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
     * Gets productName
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return int|null
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param int|null $qty qty
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets rowTotal
     *
     * @return string|null
     */
    public function getRowTotal()
    {
        return $this->container['rowTotal'];
    }

    /**
     * Sets rowTotal
     *
     * @param string|null $rowTotal rowTotal
     *
     * @return $this
     */
    public function setRowTotal($rowTotal)
    {
        $this->container['rowTotal'] = $rowTotal;

        return $this;
    }

    /**
     * Gets fulfillmentItem
     *
     * @return \TrackMage\Client\Swagger\Model\OrderItemPutOrderItem|null
     */
    public function getFulfillmentItem()
    {
        return $this->container['fulfillmentItem'];
    }

    /**
     * Sets fulfillmentItem
     *
     * @param \TrackMage\Client\Swagger\Model\OrderItemPutOrderItem|null $fulfillmentItem fulfillmentItem
     *
     * @return $this
     */
    public function setFulfillmentItem($fulfillmentItem)
    {
        $this->container['fulfillmentItem'] = $fulfillmentItem;

        return $this;
    }

    /**
     * Gets externalSyncId
     *
     * @return string|null
     */
    public function getExternalSyncId()
    {
        return $this->container['externalSyncId'];
    }

    /**
     * Sets externalSyncId
     *
     * @param string|null $externalSyncId externalSyncId
     *
     * @return $this
     */
    public function setExternalSyncId($externalSyncId)
    {
        $this->container['externalSyncId'] = $externalSyncId;

        return $this;
    }

    /**
     * Gets shipmentItems
     *
     * @return string[]|null
     */
    public function getShipmentItems()
    {
        return $this->container['shipmentItems'];
    }

    /**
     * Sets shipmentItems
     *
     * @param string[]|null $shipmentItems shipmentItems
     *
     * @return $this
     */
    public function setShipmentItems($shipmentItems)
    {
        $this->container['shipmentItems'] = $shipmentItems;

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
}


