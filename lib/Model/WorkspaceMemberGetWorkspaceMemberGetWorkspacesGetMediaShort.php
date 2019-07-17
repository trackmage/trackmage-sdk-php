<?php
/**
 * WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort
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
 * WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WorkspaceMemberGetWorkspaceMemberGetWorkspacesGetMediaShort implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WorkspaceMember-getWorkspaceMember_getWorkspaces_getMediaShort';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'workspace' => '\TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceMemberGetWorkspacesGetMediaShort',
        'accessLevel' => 'string',
        'workspaceId' => 'int',
        'teamAdmin' => 'bool',
        'memberName' => 'string',
        'memberEmail' => 'string',
        'memberLastLoggedIn' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'workspace' => null,
        'accessLevel' => null,
        'workspaceId' => null,
        'teamAdmin' => null,
        'memberName' => null,
        'memberEmail' => null,
        'memberLastLoggedIn' => null
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
        'workspace' => 'workspace',
        'accessLevel' => 'accessLevel',
        'workspaceId' => 'workspaceId',
        'teamAdmin' => 'teamAdmin',
        'memberName' => 'memberName',
        'memberEmail' => 'memberEmail',
        'memberLastLoggedIn' => 'memberLastLoggedIn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'workspace' => 'setWorkspace',
        'accessLevel' => 'setAccessLevel',
        'workspaceId' => 'setWorkspaceId',
        'teamAdmin' => 'setTeamAdmin',
        'memberName' => 'setMemberName',
        'memberEmail' => 'setMemberEmail',
        'memberLastLoggedIn' => 'setMemberLastLoggedIn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'workspace' => 'getWorkspace',
        'accessLevel' => 'getAccessLevel',
        'workspaceId' => 'getWorkspaceId',
        'teamAdmin' => 'getTeamAdmin',
        'memberName' => 'getMemberName',
        'memberEmail' => 'getMemberEmail',
        'memberLastLoggedIn' => 'getMemberLastLoggedIn'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['accessLevel'] = isset($data['accessLevel']) ? $data['accessLevel'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['teamAdmin'] = isset($data['teamAdmin']) ? $data['teamAdmin'] : null;
        $this->container['memberName'] = isset($data['memberName']) ? $data['memberName'] : null;
        $this->container['memberEmail'] = isset($data['memberEmail']) ? $data['memberEmail'] : null;
        $this->container['memberLastLoggedIn'] = isset($data['memberLastLoggedIn']) ? $data['memberLastLoggedIn'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accessLevel'] === null) {
            $invalidProperties[] = "'accessLevel' can't be null";
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
     * Gets workspace
     *
     * @return \TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceMemberGetWorkspacesGetMediaShort|null
     */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
     * Sets workspace
     *
     * @param \TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceMemberGetWorkspacesGetMediaShort|null $workspace workspace
     *
     * @return $this
     */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;

        return $this;
    }

    /**
     * Gets accessLevel
     *
     * @return string
     */
    public function getAccessLevel()
    {
        return $this->container['accessLevel'];
    }

    /**
     * Sets accessLevel
     *
     * @param string $accessLevel accessLevel
     *
     * @return $this
     */
    public function setAccessLevel($accessLevel)
    {
        $this->container['accessLevel'] = $accessLevel;

        return $this;
    }

    /**
     * Gets workspaceId
     *
     * @return int|null
     */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
     * Sets workspaceId
     *
     * @param int|null $workspaceId workspaceId
     *
     * @return $this
     */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;

        return $this;
    }

    /**
     * Gets teamAdmin
     *
     * @return bool|null
     */
    public function getTeamAdmin()
    {
        return $this->container['teamAdmin'];
    }

    /**
     * Sets teamAdmin
     *
     * @param bool|null $teamAdmin teamAdmin
     *
     * @return $this
     */
    public function setTeamAdmin($teamAdmin)
    {
        $this->container['teamAdmin'] = $teamAdmin;

        return $this;
    }

    /**
     * Gets memberName
     *
     * @return string|null
     */
    public function getMemberName()
    {
        return $this->container['memberName'];
    }

    /**
     * Sets memberName
     *
     * @param string|null $memberName memberName
     *
     * @return $this
     */
    public function setMemberName($memberName)
    {
        $this->container['memberName'] = $memberName;

        return $this;
    }

    /**
     * Gets memberEmail
     *
     * @return string|null
     */
    public function getMemberEmail()
    {
        return $this->container['memberEmail'];
    }

    /**
     * Sets memberEmail
     *
     * @param string|null $memberEmail memberEmail
     *
     * @return $this
     */
    public function setMemberEmail($memberEmail)
    {
        $this->container['memberEmail'] = $memberEmail;

        return $this;
    }

    /**
     * Gets memberLastLoggedIn
     *
     * @return string|null
     */
    public function getMemberLastLoggedIn()
    {
        return $this->container['memberLastLoggedIn'];
    }

    /**
     * Sets memberLastLoggedIn
     *
     * @param string|null $memberLastLoggedIn memberLastLoggedIn
     *
     * @return $this
     */
    public function setMemberLastLoggedIn($memberLastLoggedIn)
    {
        $this->container['memberLastLoggedIn'] = $memberLastLoggedIn;

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


