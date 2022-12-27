<?php
/**
 * ConnectorConfig
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
 * The version of the OpenAPI document: v1.0.0-rc.2
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
 * ConnectorConfig Class Doc Comment
 *
 * @category Class
 * @package  Formance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConnectorConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConnectorConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'polling_period' => 'string',
        'api_key' => 'string',
        'page_size' => 'float',
        'file_polling_period' => 'string',
        'file_generation_period' => 'string',
        'directory' => 'string',
        'api_secret' => 'string',
        'endpoint' => 'string',
        'login_id' => 'string',
        'username' => 'string',
        'password' => 'string',
        'authorization_endpoint' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'polling_period' => null,
        'api_key' => null,
        'page_size' => null,
        'file_polling_period' => null,
        'file_generation_period' => null,
        'directory' => null,
        'api_secret' => null,
        'endpoint' => null,
        'login_id' => null,
        'username' => null,
        'password' => null,
        'authorization_endpoint' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'polling_period' => false,
		'api_key' => false,
		'page_size' => false,
		'file_polling_period' => false,
		'file_generation_period' => false,
		'directory' => false,
		'api_secret' => false,
		'endpoint' => false,
		'login_id' => false,
		'username' => false,
		'password' => false,
		'authorization_endpoint' => false
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
        'polling_period' => 'pollingPeriod',
        'api_key' => 'apiKey',
        'page_size' => 'pageSize',
        'file_polling_period' => 'filePollingPeriod',
        'file_generation_period' => 'fileGenerationPeriod',
        'directory' => 'directory',
        'api_secret' => 'apiSecret',
        'endpoint' => 'endpoint',
        'login_id' => 'loginID',
        'username' => 'username',
        'password' => 'password',
        'authorization_endpoint' => 'authorizationEndpoint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'polling_period' => 'setPollingPeriod',
        'api_key' => 'setApiKey',
        'page_size' => 'setPageSize',
        'file_polling_period' => 'setFilePollingPeriod',
        'file_generation_period' => 'setFileGenerationPeriod',
        'directory' => 'setDirectory',
        'api_secret' => 'setApiSecret',
        'endpoint' => 'setEndpoint',
        'login_id' => 'setLoginId',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'authorization_endpoint' => 'setAuthorizationEndpoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'polling_period' => 'getPollingPeriod',
        'api_key' => 'getApiKey',
        'page_size' => 'getPageSize',
        'file_polling_period' => 'getFilePollingPeriod',
        'file_generation_period' => 'getFileGenerationPeriod',
        'directory' => 'getDirectory',
        'api_secret' => 'getApiSecret',
        'endpoint' => 'getEndpoint',
        'login_id' => 'getLoginId',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'authorization_endpoint' => 'getAuthorizationEndpoint'
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
        $this->setIfExists('polling_period', $data ?? [], null);
        $this->setIfExists('api_key', $data ?? [], null);
        $this->setIfExists('page_size', $data ?? [], 10);
        $this->setIfExists('file_polling_period', $data ?? [], '10s');
        $this->setIfExists('file_generation_period', $data ?? [], '10s');
        $this->setIfExists('directory', $data ?? [], null);
        $this->setIfExists('api_secret', $data ?? [], null);
        $this->setIfExists('endpoint', $data ?? [], null);
        $this->setIfExists('login_id', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('authorization_endpoint', $data ?? [], null);
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

        if ($this->container['api_key'] === null) {
            $invalidProperties[] = "'api_key' can't be null";
        }
        if ($this->container['directory'] === null) {
            $invalidProperties[] = "'directory' can't be null";
        }
        if ($this->container['api_secret'] === null) {
            $invalidProperties[] = "'api_secret' can't be null";
        }
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
        if ($this->container['login_id'] === null) {
            $invalidProperties[] = "'login_id' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['authorization_endpoint'] === null) {
            $invalidProperties[] = "'authorization_endpoint' can't be null";
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
     * Gets polling_period
     *
     * @return string|null
     */
    public function getPollingPeriod()
    {
        return $this->container['polling_period'];
    }

    /**
     * Sets polling_period
     *
     * @param string|null $polling_period The frequency at which the connector will fetch transactions
     *
     * @return self
     */
    public function setPollingPeriod($polling_period)
    {
        if (is_null($polling_period)) {
            throw new \InvalidArgumentException('non-nullable polling_period cannot be null');
        }
        $this->container['polling_period'] = $polling_period;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key api_key
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        if (is_null($api_key)) {
            throw new \InvalidArgumentException('non-nullable api_key cannot be null');
        }
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return float|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param float|null $page_size Number of BalanceTransaction to fetch at each polling interval.
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        if (is_null($page_size)) {
            throw new \InvalidArgumentException('non-nullable page_size cannot be null');
        }
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets file_polling_period
     *
     * @return string|null
     */
    public function getFilePollingPeriod()
    {
        return $this->container['file_polling_period'];
    }

    /**
     * Sets file_polling_period
     *
     * @param string|null $file_polling_period The frequency at which the connector will try to fetch new payment objects from the directory
     *
     * @return self
     */
    public function setFilePollingPeriod($file_polling_period)
    {
        if (is_null($file_polling_period)) {
            throw new \InvalidArgumentException('non-nullable file_polling_period cannot be null');
        }
        $this->container['file_polling_period'] = $file_polling_period;

        return $this;
    }

    /**
     * Gets file_generation_period
     *
     * @return string|null
     */
    public function getFileGenerationPeriod()
    {
        return $this->container['file_generation_period'];
    }

    /**
     * Sets file_generation_period
     *
     * @param string|null $file_generation_period The frequency at which the connector will create new payment objects in the directory
     *
     * @return self
     */
    public function setFileGenerationPeriod($file_generation_period)
    {
        if (is_null($file_generation_period)) {
            throw new \InvalidArgumentException('non-nullable file_generation_period cannot be null');
        }
        $this->container['file_generation_period'] = $file_generation_period;

        return $this;
    }

    /**
     * Gets directory
     *
     * @return string
     */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
     * Sets directory
     *
     * @param string $directory directory
     *
     * @return self
     */
    public function setDirectory($directory)
    {
        if (is_null($directory)) {
            throw new \InvalidArgumentException('non-nullable directory cannot be null');
        }
        $this->container['directory'] = $directory;

        return $this;
    }

    /**
     * Gets api_secret
     *
     * @return string
     */
    public function getApiSecret()
    {
        return $this->container['api_secret'];
    }

    /**
     * Sets api_secret
     *
     * @param string $api_secret api_secret
     *
     * @return self
     */
    public function setApiSecret($api_secret)
    {
        if (is_null($api_secret)) {
            throw new \InvalidArgumentException('non-nullable api_secret cannot be null');
        }
        $this->container['api_secret'] = $api_secret;

        return $this;
    }

    /**
     * Gets endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     *
     * @param string $endpoint endpoint
     *
     * @return self
     */
    public function setEndpoint($endpoint)
    {
        if (is_null($endpoint)) {
            throw new \InvalidArgumentException('non-nullable endpoint cannot be null');
        }
        $this->container['endpoint'] = $endpoint;

        return $this;
    }

    /**
     * Gets login_id
     *
     * @return string
     */
    public function getLoginId()
    {
        return $this->container['login_id'];
    }

    /**
     * Sets login_id
     *
     * @param string $login_id Username of the API Key holder
     *
     * @return self
     */
    public function setLoginId($login_id)
    {
        if (is_null($login_id)) {
            throw new \InvalidArgumentException('non-nullable login_id cannot be null');
        }
        $this->container['login_id'] = $login_id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets authorization_endpoint
     *
     * @return string
     */
    public function getAuthorizationEndpoint()
    {
        return $this->container['authorization_endpoint'];
    }

    /**
     * Sets authorization_endpoint
     *
     * @param string $authorization_endpoint authorization_endpoint
     *
     * @return self
     */
    public function setAuthorizationEndpoint($authorization_endpoint)
    {
        if (is_null($authorization_endpoint)) {
            throw new \InvalidArgumentException('non-nullable authorization_endpoint cannot be null');
        }
        $this->container['authorization_endpoint'] = $authorization_endpoint;

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


