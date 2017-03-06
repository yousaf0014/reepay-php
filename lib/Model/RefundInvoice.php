<?php
/**
 * RefundInvoice
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
 * RefundInvoice Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RefundInvoice implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RefundInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'note_lines' => '\Reepay\Model\CreateCreditNoteLine[]',
        'manual_transfer' => '\Reepay\Model\ManualRefundTransfer'
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
        'note_lines' => 'note_lines',
        'manual_transfer' => 'manual_transfer'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'note_lines' => 'setNoteLines',
        'manual_transfer' => 'setManualTransfer'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'note_lines' => 'getNoteLines',
        'manual_transfer' => 'getManualTransfer'
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
        $this->container['note_lines'] = isset($data['note_lines']) ? $data['note_lines'] : null;
        $this->container['manual_transfer'] = isset($data['manual_transfer']) ? $data['manual_transfer'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['note_lines'] === null) {
            $invalid_properties[] = "'note_lines' can't be null";
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

        if ($this->container['note_lines'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets note_lines
     * @return \Reepay\Model\CreateCreditNoteLine[]
     */
    public function getNoteLines()
    {
        return $this->container['note_lines'];
    }

    /**
     * Sets note_lines
     * @param \Reepay\Model\CreateCreditNoteLine[] $note_lines Refund credit note lines
     * @return $this
     */
    public function setNoteLines($note_lines)
    {
        $this->container['note_lines'] = $note_lines;

        return $this;
    }

    /**
     * Gets manual_transfer
     * @return \Reepay\Model\ManualRefundTransfer
     */
    public function getManualTransfer()
    {
        return $this->container['manual_transfer'];
    }

    /**
     * Sets manual_transfer
     * @param \Reepay\Model\ManualRefundTransfer $manual_transfer Optional manual tranfer. If given no refund will be performed on potential online settled transaction like card transaction.
     * @return $this
     */
    public function setManualTransfer($manual_transfer)
    {
        $this->container['manual_transfer'] = $manual_transfer;

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


