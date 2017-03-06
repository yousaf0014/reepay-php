<?php
/**
 * WebhookSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Reepay\Model;

use \ArrayAccess;

/**
 * WebhookSettings Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WebhookSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'WebhookSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'urls' => 'string[]',
        'username' => 'string',
        'password' => 'string',
        'disabled' => 'bool',
        'secret' => 'string',
        'alert_emails' => 'string[]',
        'alert_count' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'urls' => 'urls',
        'username' => 'username',
        'password' => 'password',
        'disabled' => 'disabled',
        'secret' => 'secret',
        'alert_emails' => 'alert_emails',
        'alert_count' => 'alert_count'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'urls' => 'setUrls',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'disabled' => 'setDisabled',
        'secret' => 'setSecret',
        'alert_emails' => 'setAlertEmails',
        'alert_count' => 'setAlertCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'urls' => 'getUrls',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'disabled' => 'getDisabled',
        'secret' => 'getSecret',
        'alert_emails' => 'getAlertEmails',
        'alert_count' => 'getAlertCount'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
        $this->container['alert_emails'] = isset($data['alert_emails']) ? $data['alert_emails'] : null;
        $this->container['alert_count'] = isset($data['alert_count']) ? $data['alert_count'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['urls'] === null) {
            $invalid_properties[] = "'urls' can't be null";
        }
        if ($this->container['disabled'] === null) {
            $invalid_properties[] = "'disabled' can't be null";
        }
        if ($this->container['secret'] === null) {
            $invalid_properties[] = "'secret' can't be null";
        }
        if (!is_null($this->container['alert_count']) && ($this->container['alert_count'] < 4)) {
            $invalid_properties[] = "invalid value for 'alert_count', must be bigger than or equal to 4.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['urls'] === null) {
            return false;
        }
        if ($this->container['disabled'] === null) {
            return false;
        }
        if ($this->container['secret'] === null) {
            return false;
        }
        if ($this->container['alert_count'] < 4) {
            return false;
        }
        return true;
    }


    /**
     * Gets urls
     * @return string[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     * @param string[] $urls Webhook urls
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username Optional HTTP Basic Auth username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password Optional HTTP Basic Auth password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets disabled
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     * @param bool $disabled Webhook disabled
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets secret
     * @return string
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     * @param string $secret Webhook secret used for signature
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;

        return $this;
    }

    /**
     * Gets alert_emails
     * @return string[]
     */
    public function getAlertEmails()
    {
        return $this->container['alert_emails'];
    }

    /**
     * Sets alert_emails
     * @param string[] $alert_emails Optional list of emails to send alert to if webhook fails
     * @return $this
     */
    public function setAlertEmails($alert_emails)
    {
        $this->container['alert_emails'] = $alert_emails;

        return $this;
    }

    /**
     * Gets alert_count
     * @return int
     */
    public function getAlertCount()
    {
        return $this->container['alert_count'];
    }

    /**
     * Sets alert_count
     * @param int $alert_count Number of requests to perform before alert email is sent, must be greater than or equal to four (1 hour)
     * @return $this
     */
    public function setAlertCount($alert_count)
    {

        if (!is_null($alert_count) && ($alert_count < 4)) {
            throw new \InvalidArgumentException('invalid value for $alert_count when calling WebhookSettings., must be bigger than or equal to 4.');
        }

        $this->container['alert_count'] = $alert_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this));
    }
}


