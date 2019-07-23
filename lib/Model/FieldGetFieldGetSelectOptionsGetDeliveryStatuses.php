<?php
/**
 * FieldGetFieldGetSelectOptionsGetDeliveryStatuses
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
 * The version of the OpenAPI document: v0.1.40-86-ge2f1de7
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
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
 * FieldGetFieldGetSelectOptionsGetDeliveryStatuses Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldGetFieldGetSelectOptionsGetDeliveryStatuses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Field-getField_getSelectOptions_getDeliveryStatuses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'workspace' => 'string',
        'title' => 'string',
        'fieldType' => 'string',
        'readonly' => 'bool',
        'sorting' => 'bool',
        'primary' => 'bool',
        'selectOptions' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'code' => null,
        'workspace' => null,
        'title' => null,
        'fieldType' => null,
        'readonly' => null,
        'sorting' => null,
        'primary' => null,
        'selectOptions' => null
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
        'code' => 'code',
        'workspace' => 'workspace',
        'title' => 'title',
        'fieldType' => 'fieldType',
        'readonly' => 'readonly',
        'sorting' => 'sorting',
        'primary' => 'primary',
        'selectOptions' => 'selectOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'workspace' => 'setWorkspace',
        'title' => 'setTitle',
        'fieldType' => 'setFieldType',
        'readonly' => 'setReadonly',
        'sorting' => 'setSorting',
        'primary' => 'setPrimary',
        'selectOptions' => 'setSelectOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'workspace' => 'getWorkspace',
        'title' => 'getTitle',
        'fieldType' => 'getFieldType',
        'readonly' => 'getReadonly',
        'sorting' => 'getSorting',
        'primary' => 'getPrimary',
        'selectOptions' => 'getSelectOptions'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['sorting'] = isset($data['sorting']) ? $data['sorting'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
        $this->container['selectOptions'] = isset($data['selectOptions']) ? $data['selectOptions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets workspace
     *
     * @return string|null
     */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
     * Sets workspace
     *
     * @param string|null $workspace workspace
     *
     * @return $this
     */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets fieldType
     *
     * @return string|null
     */
    public function getFieldType()
    {
        return $this->container['fieldType'];
    }

    /**
     * Sets fieldType
     *
     * @param string|null $fieldType fieldType
     *
     * @return $this
     */
    public function setFieldType($fieldType)
    {
        $this->container['fieldType'] = $fieldType;

        return $this;
    }

    /**
     * Gets readonly
     *
     * @return bool|null
     */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
     * Sets readonly
     *
     * @param bool|null $readonly readonly
     *
     * @return $this
     */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;

        return $this;
    }

    /**
     * Gets sorting
     *
     * @return bool|null
     */
    public function getSorting()
    {
        return $this->container['sorting'];
    }

    /**
     * Sets sorting
     *
     * @param bool|null $sorting sorting
     *
     * @return $this
     */
    public function setSorting($sorting)
    {
        $this->container['sorting'] = $sorting;

        return $this;
    }

    /**
     * Gets primary
     *
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param bool|null $primary primary
     *
     * @return $this
     */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets selectOptions
     *
     * @return string|null
     */
    public function getSelectOptions()
    {
        return $this->container['selectOptions'];
    }

    /**
     * Sets selectOptions
     *
     * @param string|null $selectOptions selectOptions
     *
     * @return $this
     */
    public function setSelectOptions($selectOptions)
    {
        $this->container['selectOptions'] = $selectOptions;

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

