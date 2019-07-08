<?php
/**
 * AuthcodeResetAuthCodeResponseData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domain
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Domain\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * AuthcodeResetAuthCodeResponseData Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthcodeResetAuthCodeResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'authcodeResetAuthCodeResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auth_code' => 'string',
        'auth_info' => '\Openprovider\Api\Rest\Client\Domain\Model\AuthcodeAuthInfo',
        'contacts' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainContacts',
        'domain_roid' => 'string',
        'epp_statuses' => 'string[]',
        'rgp_statuses' => '\Openprovider\Api\Rest\Client\Domain\Model\AuthcodeRgpStatuses',
        'success' => 'bool',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'auth_code' => null,
        'auth_info' => null,
        'contacts' => null,
        'domain_roid' => null,
        'epp_statuses' => null,
        'rgp_statuses' => null,
        'success' => 'boolean',
        'type' => null
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
        'auth_code' => 'auth_code',
        'auth_info' => 'auth_info',
        'contacts' => 'contacts',
        'domain_roid' => 'domain_roid',
        'epp_statuses' => 'epp_statuses',
        'rgp_statuses' => 'rgp_statuses',
        'success' => 'success',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auth_code' => 'setAuthCode',
        'auth_info' => 'setAuthInfo',
        'contacts' => 'setContacts',
        'domain_roid' => 'setDomainRoid',
        'epp_statuses' => 'setEppStatuses',
        'rgp_statuses' => 'setRgpStatuses',
        'success' => 'setSuccess',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auth_code' => 'getAuthCode',
        'auth_info' => 'getAuthInfo',
        'contacts' => 'getContacts',
        'domain_roid' => 'getDomainRoid',
        'epp_statuses' => 'getEppStatuses',
        'rgp_statuses' => 'getRgpStatuses',
        'success' => 'getSuccess',
        'type' => 'getType'
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
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['auth_info'] = isset($data['auth_info']) ? $data['auth_info'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
        $this->container['domain_roid'] = isset($data['domain_roid']) ? $data['domain_roid'] : null;
        $this->container['epp_statuses'] = isset($data['epp_statuses']) ? $data['epp_statuses'] : null;
        $this->container['rgp_statuses'] = isset($data['rgp_statuses']) ? $data['rgp_statuses'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets auth_code
     *
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string|null $auth_code auth_code
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets auth_info
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\AuthcodeAuthInfo|null
     */
    public function getAuthInfo()
    {
        return $this->container['auth_info'];
    }

    /**
     * Sets auth_info
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\AuthcodeAuthInfo|null $auth_info auth_info
     *
     * @return $this
     */
    public function setAuthInfo($auth_info)
    {
        $this->container['auth_info'] = $auth_info;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainContacts|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainContacts|null $contacts contacts
     *
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets domain_roid
     *
     * @return string|null
     */
    public function getDomainRoid()
    {
        return $this->container['domain_roid'];
    }

    /**
     * Sets domain_roid
     *
     * @param string|null $domain_roid domain_roid
     *
     * @return $this
     */
    public function setDomainRoid($domain_roid)
    {
        $this->container['domain_roid'] = $domain_roid;

        return $this;
    }

    /**
     * Gets epp_statuses
     *
     * @return string[]|null
     */
    public function getEppStatuses()
    {
        return $this->container['epp_statuses'];
    }

    /**
     * Sets epp_statuses
     *
     * @param string[]|null $epp_statuses epp_statuses
     *
     * @return $this
     */
    public function setEppStatuses($epp_statuses)
    {
        $this->container['epp_statuses'] = $epp_statuses;

        return $this;
    }

    /**
     * Gets rgp_statuses
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\AuthcodeRgpStatuses|null
     */
    public function getRgpStatuses()
    {
        return $this->container['rgp_statuses'];
    }

    /**
     * Sets rgp_statuses
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\AuthcodeRgpStatuses|null $rgp_statuses rgp_statuses
     *
     * @return $this
     */
    public function setRgpStatuses($rgp_statuses)
    {
        $this->container['rgp_statuses'] = $rgp_statuses;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool|null $success success
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


