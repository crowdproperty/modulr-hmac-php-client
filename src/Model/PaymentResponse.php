<?php
/**
 * PaymentResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  CrowdProperty\ModulrHmacPhpClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Modulr API
 *
 * Modulo API
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

namespace CrowdProperty\ModulrHmacPhpClient\Model;

use \ArrayAccess;

/**
 * PaymentResponse Class Doc Comment
 *
 * @category    Class
 * @package     CrowdProperty\ModulrHmacPhpClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_date' => '\DateTime',
        'external_reference' => 'string',
        'message' => 'string',
        'status' => 'string',
        'details' => 'object',
        'id' => 'string'
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
        'created_date' => 'createdDate',
        'external_reference' => 'externalReference',
        'message' => 'message',
        'status' => 'status',
        'details' => 'details',
        'id' => 'id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'created_date' => 'setCreatedDate',
        'external_reference' => 'setExternalReference',
        'message' => 'setMessage',
        'status' => 'setStatus',
        'details' => 'setDetails',
        'id' => 'setId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'created_date' => 'getCreatedDate',
        'external_reference' => 'getExternalReference',
        'message' => 'getMessage',
        'status' => 'getStatus',
        'details' => 'getDetails',
        'id' => 'getId'
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

    const STATUS_SUBMITTED = 'SUBMITTED';
    const STATUS_VALIDATED = 'VALIDATED';
    const STATUS_EXT_PROC = 'EXT_PROC';
    const STATUS_PROCESSED = 'PROCESSED';
    const STATUS_RECONCILED = 'RECONCILED';
    const STATUS_ER_INVALID = 'ER_INVALID';
    const STATUS_ER_EXTCONN = 'ER_EXTCONN';
    const STATUS_ER_EXTSYS = 'ER_EXTSYS';
    const STATUS_ER_EXPIRED = 'ER_EXPIRED';
    const STATUS_ER_GENERAL = 'ER_GENERAL';
    const STATUS_ER_BATCH = 'ER_BATCH';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUBMITTED,
            self::STATUS_VALIDATED,
            self::STATUS_EXT_PROC,
            self::STATUS_PROCESSED,
            self::STATUS_RECONCILED,
            self::STATUS_ER_INVALID,
            self::STATUS_ER_EXTCONN,
            self::STATUS_ER_EXTSYS,
            self::STATUS_ER_EXPIRED,
            self::STATUS_ER_GENERAL,
            self::STATUS_ER_BATCH,
        ];
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
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['external_reference'] = isset($data['external_reference']) ? $data['external_reference'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['external_reference'] === null) {
            $invalid_properties[] = "'external_reference' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["SUBMITTED", "VALIDATED", "EXT_PROC", "PROCESSED", "RECONCILED", "ER_INVALID", "ER_EXTCONN", "ER_EXTSYS", "ER_EXPIRED", "ER_GENERAL", "ER_BATCH"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'SUBMITTED', 'VALIDATED', 'EXT_PROC', 'PROCESSED', 'RECONCILED', 'ER_INVALID', 'ER_EXTCONN', 'ER_EXTSYS', 'ER_EXPIRED', 'ER_GENERAL', 'ER_BATCH'.";
        }

        if ($this->container['details'] === null) {
            $invalid_properties[] = "'details' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
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

        if ($this->container['external_reference'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["SUBMITTED", "VALIDATED", "EXT_PROC", "PROCESSED", "RECONCILED", "ER_INVALID", "ER_EXTCONN", "ER_EXTSYS", "ER_EXPIRED", "ER_GENERAL", "ER_BATCH"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['details'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets created_date
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     * @param \DateTime $created_date
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets external_reference
     * @return string
     */
    public function getExternalReference()
    {
        return $this->container['external_reference'];
    }

    /**
     * Sets external_reference
     * @param string $external_reference external reference if provided
     * @return $this
     */
    public function setExternalReference($external_reference)
    {
        $this->container['external_reference'] = $external_reference;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message Information about payment (if available)
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Current status of payment. Can be one of
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('SUBMITTED', 'VALIDATED', 'EXT_PROC', 'PROCESSED', 'RECONCILED', 'ER_INVALID', 'ER_EXTCONN', 'ER_EXTSYS', 'ER_EXPIRED', 'ER_GENERAL', 'ER_BATCH');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'SUBMITTED', 'VALIDATED', 'EXT_PROC', 'PROCESSED', 'RECONCILED', 'ER_INVALID', 'ER_EXTCONN', 'ER_EXTSYS', 'ER_EXPIRED', 'ER_GENERAL', 'ER_BATCH'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets details
     * @return object
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param object $details All the details of the payment from the original request
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique id for the Payment request
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
            return json_encode(\CrowdProperty\ModulrHmacPhpClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CrowdProperty\ModulrHmacPhpClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}

