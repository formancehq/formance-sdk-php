<?php
/**
 * StripeTask
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Formance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Formance Stack API
 *
 * Open, modular foundation for unique payments flows  # Introduction This API is documented in **OpenAPI format**.  # Authentication Formance Stack offers one forms of authentication:   - OAuth2 OAuth2 - an open protocol to allow secure authorization in a simple and standard method from web, mobile and desktop applications. <SecurityDefinitions />
 *
 * The version of the OpenAPI document: v1.0.0-rc.1
 * Contact: support@formance.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Formance\Model;

use \ArrayAccess;
use \Formance\ObjectSerializer;

/**
 * StripeTask Class Doc Comment
 *
 * @category Class
 * @package  Formance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StripeTask implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StripeTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'oldest_id' => 'string',
        'oldest_date' => '\DateTime',
        'more_recent_id' => 'string',
        'more_recent_date' => '\DateTime',
        'no_more_history' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'oldest_id' => null,
        'oldest_date' => 'date-time',
        'more_recent_id' => null,
        'more_recent_date' => 'date-time',
        'no_more_history' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'oldest_id' => false,
		'oldest_date' => false,
		'more_recent_id' => false,
		'more_recent_date' => false,
		'no_more_history' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'oldest_id' => 'oldestId',
        'oldest_date' => 'oldestDate',
        'more_recent_id' => 'moreRecentId',
        'more_recent_date' => 'moreRecentDate',
        'no_more_history' => 'noMoreHistory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'oldest_id' => 'setOldestId',
        'oldest_date' => 'setOldestDate',
        'more_recent_id' => 'setMoreRecentId',
        'more_recent_date' => 'setMoreRecentDate',
        'no_more_history' => 'setNoMoreHistory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'oldest_id' => 'getOldestId',
        'oldest_date' => 'getOldestDate',
        'more_recent_id' => 'getMoreRecentId',
        'more_recent_date' => 'getMoreRecentDate',
        'no_more_history' => 'getNoMoreHistory'
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
        $this->setIfExists('oldest_id', $data ?? [], null);
        $this->setIfExists('oldest_date', $data ?? [], null);
        $this->setIfExists('more_recent_id', $data ?? [], null);
        $this->setIfExists('more_recent_date', $data ?? [], null);
        $this->setIfExists('no_more_history', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets oldest_id
     *
     * @return string|null
     */
    public function getOldestId()
    {
        return $this->container['oldest_id'];
    }

    /**
     * Sets oldest_id
     *
     * @param string|null $oldest_id The id of the oldest BalanceTransaction fetched from stripe for this account
     *
     * @return self
     */
    public function setOldestId($oldest_id)
    {
        if (is_null($oldest_id)) {
            throw new \InvalidArgumentException('non-nullable oldest_id cannot be null');
        }
        $this->container['oldest_id'] = $oldest_id;

        return $this;
    }

    /**
     * Gets oldest_date
     *
     * @return \DateTime|null
     */
    public function getOldestDate()
    {
        return $this->container['oldest_date'];
    }

    /**
     * Sets oldest_date
     *
     * @param \DateTime|null $oldest_date The creation date of the oldest BalanceTransaction fetched from stripe for this account
     *
     * @return self
     */
    public function setOldestDate($oldest_date)
    {
        if (is_null($oldest_date)) {
            throw new \InvalidArgumentException('non-nullable oldest_date cannot be null');
        }
        $this->container['oldest_date'] = $oldest_date;

        return $this;
    }

    /**
     * Gets more_recent_id
     *
     * @return string|null
     */
    public function getMoreRecentId()
    {
        return $this->container['more_recent_id'];
    }

    /**
     * Sets more_recent_id
     *
     * @param string|null $more_recent_id The id of the more recent BalanceTransaction fetched from stripe for this account
     *
     * @return self
     */
    public function setMoreRecentId($more_recent_id)
    {
        if (is_null($more_recent_id)) {
            throw new \InvalidArgumentException('non-nullable more_recent_id cannot be null');
        }
        $this->container['more_recent_id'] = $more_recent_id;

        return $this;
    }

    /**
     * Gets more_recent_date
     *
     * @return \DateTime|null
     */
    public function getMoreRecentDate()
    {
        return $this->container['more_recent_date'];
    }

    /**
     * Sets more_recent_date
     *
     * @param \DateTime|null $more_recent_date The creation date of the more recent BalanceTransaction fetched from stripe for this account
     *
     * @return self
     */
    public function setMoreRecentDate($more_recent_date)
    {
        if (is_null($more_recent_date)) {
            throw new \InvalidArgumentException('non-nullable more_recent_date cannot be null');
        }
        $this->container['more_recent_date'] = $more_recent_date;

        return $this;
    }

    /**
     * Gets no_more_history
     *
     * @return bool|null
     */
    public function getNoMoreHistory()
    {
        return $this->container['no_more_history'];
    }

    /**
     * Sets no_more_history
     *
     * @param bool|null $no_more_history no_more_history
     *
     * @return self
     */
    public function setNoMoreHistory($no_more_history)
    {
        if (is_null($no_more_history)) {
            throw new \InvalidArgumentException('non-nullable no_more_history cannot be null');
        }
        $this->container['no_more_history'] = $no_more_history;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


