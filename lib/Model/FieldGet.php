<?php
/**
 * FieldGet
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
 * FieldGet Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldGet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Field-Get';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'workspace' => 'string',
        'entity' => 'string',
        'title' => 'string',
        'fieldType' => 'string',
        'readonly' => 'bool',
        'sorting' => 'bool',
        'selectOptions' => '\TrackMage\Client\Swagger\Model\FieldSelectOptionsGet',
        'visibleExpr' => 'string',
        'validation' => 'string',
        'default' => 'string',
        'placeholder' => 'string',
        'refreshOnChange' => 'bool',
        'helperText' => 'string',
        'primary' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'code' => null,
        'workspace' => 'iri-reference',
        'entity' => null,
        'title' => null,
        'fieldType' => null,
        'readonly' => null,
        'sorting' => null,
        'selectOptions' => null,
        'visibleExpr' => null,
        'validation' => null,
        'default' => null,
        'placeholder' => null,
        'refreshOnChange' => null,
        'helperText' => null,
        'primary' => null
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
        'entity' => 'entity',
        'title' => 'title',
        'fieldType' => 'fieldType',
        'readonly' => 'readonly',
        'sorting' => 'sorting',
        'selectOptions' => 'selectOptions',
        'visibleExpr' => 'visibleExpr',
        'validation' => 'validation',
        'default' => 'default',
        'placeholder' => 'placeholder',
        'refreshOnChange' => 'refreshOnChange',
        'helperText' => 'helperText',
        'primary' => 'primary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'workspace' => 'setWorkspace',
        'entity' => 'setEntity',
        'title' => 'setTitle',
        'fieldType' => 'setFieldType',
        'readonly' => 'setReadonly',
        'sorting' => 'setSorting',
        'selectOptions' => 'setSelectOptions',
        'visibleExpr' => 'setVisibleExpr',
        'validation' => 'setValidation',
        'default' => 'setDefault',
        'placeholder' => 'setPlaceholder',
        'refreshOnChange' => 'setRefreshOnChange',
        'helperText' => 'setHelperText',
        'primary' => 'setPrimary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'workspace' => 'getWorkspace',
        'entity' => 'getEntity',
        'title' => 'getTitle',
        'fieldType' => 'getFieldType',
        'readonly' => 'getReadonly',
        'sorting' => 'getSorting',
        'selectOptions' => 'getSelectOptions',
        'visibleExpr' => 'getVisibleExpr',
        'validation' => 'getValidation',
        'default' => 'getDefault',
        'placeholder' => 'getPlaceholder',
        'refreshOnChange' => 'getRefreshOnChange',
        'helperText' => 'getHelperText',
        'primary' => 'getPrimary'
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
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['sorting'] = isset($data['sorting']) ? $data['sorting'] : null;
        $this->container['selectOptions'] = isset($data['selectOptions']) ? $data['selectOptions'] : null;
        $this->container['visibleExpr'] = isset($data['visibleExpr']) ? $data['visibleExpr'] : null;
        $this->container['validation'] = isset($data['validation']) ? $data['validation'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['placeholder'] = isset($data['placeholder']) ? $data['placeholder'] : null;
        $this->container['refreshOnChange'] = isset($data['refreshOnChange']) ? $data['refreshOnChange'] : null;
        $this->container['helperText'] = isset($data['helperText']) ? $data['helperText'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
        if ($this->container['entity'] === null) {
            $invalidProperties[] = "'entity' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['fieldType'] === null) {
            $invalidProperties[] = "'fieldType' can't be null";
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
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
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
     * Gets entity
     *
     * @return string
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param string $entity entity
     *
     * @return $this
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

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
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['fieldType'];
    }

    /**
     * Sets fieldType
     *
     * @param string $fieldType fieldType
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
     * Gets selectOptions
     *
     * @return \TrackMage\Client\Swagger\Model\FieldSelectOptionsGet|null
     */
    public function getSelectOptions()
    {
        return $this->container['selectOptions'];
    }

    /**
     * Sets selectOptions
     *
     * @param \TrackMage\Client\Swagger\Model\FieldSelectOptionsGet|null $selectOptions selectOptions
     *
     * @return $this
     */
    public function setSelectOptions($selectOptions)
    {
        $this->container['selectOptions'] = $selectOptions;

        return $this;
    }

    /**
     * Gets visibleExpr
     *
     * @return string|null
     */
    public function getVisibleExpr()
    {
        return $this->container['visibleExpr'];
    }

    /**
     * Sets visibleExpr
     *
     * @param string|null $visibleExpr visibleExpr
     *
     * @return $this
     */
    public function setVisibleExpr($visibleExpr)
    {
        $this->container['visibleExpr'] = $visibleExpr;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return string|null
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param string|null $validation validation
     *
     * @return $this
     */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;

        return $this;
    }

    /**
     * Gets default
     *
     * @return string|null
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param string|null $default default
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param string|null $placeholder placeholder
     *
     * @return $this
     */
    public function setPlaceholder($placeholder)
    {
        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets refreshOnChange
     *
     * @return bool|null
     */
    public function getRefreshOnChange()
    {
        return $this->container['refreshOnChange'];
    }

    /**
     * Sets refreshOnChange
     *
     * @param bool|null $refreshOnChange refreshOnChange
     *
     * @return $this
     */
    public function setRefreshOnChange($refreshOnChange)
    {
        $this->container['refreshOnChange'] = $refreshOnChange;

        return $this;
    }

    /**
     * Gets helperText
     *
     * @return string|null
     */
    public function getHelperText()
    {
        return $this->container['helperText'];
    }

    /**
     * Sets helperText
     *
     * @param string|null $helperText helperText
     *
     * @return $this
     */
    public function setHelperText($helperText)
    {
        $this->container['helperText'] = $helperText;

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
     * @param bool|null $primary Primary field means defined statically. Custom field is from EAV
     *
     * @return $this
     */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;

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


