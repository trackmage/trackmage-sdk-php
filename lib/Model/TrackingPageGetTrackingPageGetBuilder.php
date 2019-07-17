<?php
/**
 * TrackingPageGetTrackingPageGetBuilder
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
 * TrackingPageGetTrackingPageGetBuilder Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrackingPageGetTrackingPageGetBuilder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TrackingPage-getTrackingPage_getBuilder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'enabled' => 'bool',
        'reviewsEnabled' => 'bool',
        'title' => 'string',
        'workspace' => 'string',
        'subdomain' => 'string',
        'domain' => 'string',
        'domainEnabled' => 'bool',
        'sidebarField' => 'string',
        'trackingNumberField' => 'string',
        'builder' => 'string',
        'usedByDefault' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'enabled' => null,
        'reviewsEnabled' => null,
        'title' => null,
        'workspace' => null,
        'subdomain' => null,
        'domain' => null,
        'domainEnabled' => null,
        'sidebarField' => null,
        'trackingNumberField' => null,
        'builder' => null,
        'usedByDefault' => null
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
        'id' => 'id',
        'enabled' => 'enabled',
        'reviewsEnabled' => 'reviewsEnabled',
        'title' => 'title',
        'workspace' => 'workspace',
        'subdomain' => 'subdomain',
        'domain' => 'domain',
        'domainEnabled' => 'domainEnabled',
        'sidebarField' => 'sidebarField',
        'trackingNumberField' => 'trackingNumberField',
        'builder' => 'builder',
        'usedByDefault' => 'usedByDefault'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'enabled' => 'setEnabled',
        'reviewsEnabled' => 'setReviewsEnabled',
        'title' => 'setTitle',
        'workspace' => 'setWorkspace',
        'subdomain' => 'setSubdomain',
        'domain' => 'setDomain',
        'domainEnabled' => 'setDomainEnabled',
        'sidebarField' => 'setSidebarField',
        'trackingNumberField' => 'setTrackingNumberField',
        'builder' => 'setBuilder',
        'usedByDefault' => 'setUsedByDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'enabled' => 'getEnabled',
        'reviewsEnabled' => 'getReviewsEnabled',
        'title' => 'getTitle',
        'workspace' => 'getWorkspace',
        'subdomain' => 'getSubdomain',
        'domain' => 'getDomain',
        'domainEnabled' => 'getDomainEnabled',
        'sidebarField' => 'getSidebarField',
        'trackingNumberField' => 'getTrackingNumberField',
        'builder' => 'getBuilder',
        'usedByDefault' => 'getUsedByDefault'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['reviewsEnabled'] = isset($data['reviewsEnabled']) ? $data['reviewsEnabled'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['subdomain'] = isset($data['subdomain']) ? $data['subdomain'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['domainEnabled'] = isset($data['domainEnabled']) ? $data['domainEnabled'] : null;
        $this->container['sidebarField'] = isset($data['sidebarField']) ? $data['sidebarField'] : null;
        $this->container['trackingNumberField'] = isset($data['trackingNumberField']) ? $data['trackingNumberField'] : null;
        $this->container['builder'] = isset($data['builder']) ? $data['builder'] : null;
        $this->container['usedByDefault'] = isset($data['usedByDefault']) ? $data['usedByDefault'] : null;
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
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
        if ($this->container['subdomain'] === null) {
            $invalidProperties[] = "'subdomain' can't be null";
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets reviewsEnabled
     *
     * @return bool|null
     */
    public function getReviewsEnabled()
    {
        return $this->container['reviewsEnabled'];
    }

    /**
     * Sets reviewsEnabled
     *
     * @param bool|null $reviewsEnabled reviewsEnabled
     *
     * @return $this
     */
    public function setReviewsEnabled($reviewsEnabled)
    {
        $this->container['reviewsEnabled'] = $reviewsEnabled;

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
     * Gets subdomain
     *
     * @return string
     */
    public function getSubdomain()
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     *
     * @param string $subdomain subdomain
     *
     * @return $this
     */
    public function setSubdomain($subdomain)
    {
        $this->container['subdomain'] = $subdomain;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets domainEnabled
     *
     * @return bool|null
     */
    public function getDomainEnabled()
    {
        return $this->container['domainEnabled'];
    }

    /**
     * Sets domainEnabled
     *
     * @param bool|null $domainEnabled domainEnabled
     *
     * @return $this
     */
    public function setDomainEnabled($domainEnabled)
    {
        $this->container['domainEnabled'] = $domainEnabled;

        return $this;
    }

    /**
     * Gets sidebarField
     *
     * @return string|null
     */
    public function getSidebarField()
    {
        return $this->container['sidebarField'];
    }

    /**
     * Sets sidebarField
     *
     * @param string|null $sidebarField sidebarField
     *
     * @return $this
     */
    public function setSidebarField($sidebarField)
    {
        $this->container['sidebarField'] = $sidebarField;

        return $this;
    }

    /**
     * Gets trackingNumberField
     *
     * @return string|null
     */
    public function getTrackingNumberField()
    {
        return $this->container['trackingNumberField'];
    }

    /**
     * Sets trackingNumberField
     *
     * @param string|null $trackingNumberField trackingNumberField
     *
     * @return $this
     */
    public function setTrackingNumberField($trackingNumberField)
    {
        $this->container['trackingNumberField'] = $trackingNumberField;

        return $this;
    }

    /**
     * Gets builder
     *
     * @return string|null
     */
    public function getBuilder()
    {
        return $this->container['builder'];
    }

    /**
     * Sets builder
     *
     * @param string|null $builder builder
     *
     * @return $this
     */
    public function setBuilder($builder)
    {
        $this->container['builder'] = $builder;

        return $this;
    }

    /**
     * Gets usedByDefault
     *
     * @return bool|null
     */
    public function getUsedByDefault()
    {
        return $this->container['usedByDefault'];
    }

    /**
     * Sets usedByDefault
     *
     * @param bool|null $usedByDefault usedByDefault
     *
     * @return $this
     */
    public function setUsedByDefault($usedByDefault)
    {
        $this->container['usedByDefault'] = $usedByDefault;

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


