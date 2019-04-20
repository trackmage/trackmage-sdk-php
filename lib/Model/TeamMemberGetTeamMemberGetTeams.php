<?php
/**
 * TeamMemberGetTeamMemberGetTeams
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
 * OpenAPI spec version: v0.1.40-5-g0495724
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta3
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
 * TeamMemberGetTeamMemberGetTeams Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TeamMemberGetTeamMemberGetTeams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TeamMember-getTeamMember_getTeams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'team' => '\TrackMage\Client\Swagger\Model\TeamGetTeamMemberGetTeams',
        'invitedEmail' => 'string',
        'member' => 'string',
        'teamAdmin' => 'bool',
        'teamOwner' => 'bool',
        'memberName' => 'string',
        'memberEmail' => 'string',
        'memberLastLoggedIn' => 'string',
        'teamName' => 'string',
        'teamId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'team' => null,
        'invitedEmail' => null,
        'member' => null,
        'teamAdmin' => null,
        'teamOwner' => null,
        'memberName' => null,
        'memberEmail' => null,
        'memberLastLoggedIn' => null,
        'teamName' => null,
        'teamId' => null
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
        'team' => 'team',
        'invitedEmail' => 'invitedEmail',
        'member' => 'member',
        'teamAdmin' => 'teamAdmin',
        'teamOwner' => 'teamOwner',
        'memberName' => 'memberName',
        'memberEmail' => 'memberEmail',
        'memberLastLoggedIn' => 'memberLastLoggedIn',
        'teamName' => 'teamName',
        'teamId' => 'teamId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'team' => 'setTeam',
        'invitedEmail' => 'setInvitedEmail',
        'member' => 'setMember',
        'teamAdmin' => 'setTeamAdmin',
        'teamOwner' => 'setTeamOwner',
        'memberName' => 'setMemberName',
        'memberEmail' => 'setMemberEmail',
        'memberLastLoggedIn' => 'setMemberLastLoggedIn',
        'teamName' => 'setTeamName',
        'teamId' => 'setTeamId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'team' => 'getTeam',
        'invitedEmail' => 'getInvitedEmail',
        'member' => 'getMember',
        'teamAdmin' => 'getTeamAdmin',
        'teamOwner' => 'getTeamOwner',
        'memberName' => 'getMemberName',
        'memberEmail' => 'getMemberEmail',
        'memberLastLoggedIn' => 'getMemberLastLoggedIn',
        'teamName' => 'getTeamName',
        'teamId' => 'getTeamId'
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
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['invitedEmail'] = isset($data['invitedEmail']) ? $data['invitedEmail'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
        $this->container['teamAdmin'] = isset($data['teamAdmin']) ? $data['teamAdmin'] : null;
        $this->container['teamOwner'] = isset($data['teamOwner']) ? $data['teamOwner'] : null;
        $this->container['memberName'] = isset($data['memberName']) ? $data['memberName'] : null;
        $this->container['memberEmail'] = isset($data['memberEmail']) ? $data['memberEmail'] : null;
        $this->container['memberLastLoggedIn'] = isset($data['memberLastLoggedIn']) ? $data['memberLastLoggedIn'] : null;
        $this->container['teamName'] = isset($data['teamName']) ? $data['teamName'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
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
     * Gets team
     *
     * @return \TrackMage\Client\Swagger\Model\TeamGetTeamMemberGetTeams|null
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param \TrackMage\Client\Swagger\Model\TeamGetTeamMemberGetTeams|null $team team
     *
     * @return $this
     */
    public function setTeam($team)
    {
        $this->container['team'] = $team;

        return $this;
    }

    /**
     * Gets invitedEmail
     *
     * @return string|null
     */
    public function getInvitedEmail()
    {
        return $this->container['invitedEmail'];
    }

    /**
     * Sets invitedEmail
     *
     * @param string|null $invitedEmail invitedEmail
     *
     * @return $this
     */
    public function setInvitedEmail($invitedEmail)
    {
        $this->container['invitedEmail'] = $invitedEmail;

        return $this;
    }

    /**
     * Gets member
     *
     * @return string|null
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member
     *
     * @param string|null $member member
     *
     * @return $this
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

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
     * Gets teamOwner
     *
     * @return bool|null
     */
    public function getTeamOwner()
    {
        return $this->container['teamOwner'];
    }

    /**
     * Sets teamOwner
     *
     * @param bool|null $teamOwner teamOwner
     *
     * @return $this
     */
    public function setTeamOwner($teamOwner)
    {
        $this->container['teamOwner'] = $teamOwner;

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
     * Gets teamName
     *
     * @return string|null
     */
    public function getTeamName()
    {
        return $this->container['teamName'];
    }

    /**
     * Sets teamName
     *
     * @param string|null $teamName teamName
     *
     * @return $this
     */
    public function setTeamName($teamName)
    {
        $this->container['teamName'] = $teamName;

        return $this;
    }

    /**
     * Gets teamId
     *
     * @return int|null
     */
    public function getTeamId()
    {
        return $this->container['teamId'];
    }

    /**
     * Sets teamId
     *
     * @param int|null $teamId teamId
     *
     * @return $this
     */
    public function setTeamId($teamId)
    {
        $this->container['teamId'] = $teamId;

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

