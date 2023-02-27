<?php
/**
 * WorkflowInstanceHistoryStageInput
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
 * The version of the OpenAPI document: 1.0.0-20230225
 * Contact: support@formance.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
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
 * WorkflowInstanceHistoryStageInput Class Doc Comment
 *
 * @category Class
 * @package  Formance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WorkflowInstanceHistoryStageInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WorkflowInstanceHistoryStageInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'get_account' => '\Formance\Model\ActivityGetAccount',
        'create_transaction' => '\Formance\Model\ActivityCreateTransaction',
        'revert_transaction' => '\Formance\Model\ActivityRevertTransaction',
        'stripe_transfer' => '\Formance\Model\StripeTransferRequest',
        'get_payment' => '\Formance\Model\ActivityGetPayment',
        'confirm_hold' => '\Formance\Model\ActivityConfirmHold',
        'credit_wallet' => '\Formance\Model\ActivityCreditWallet',
        'debit_wallet' => '\Formance\Model\ActivityDebitWallet',
        'get_wallet' => '\Formance\Model\ActivityGetWallet',
        'void_hold' => '\Formance\Model\ActivityVoidHold'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'get_account' => null,
        'create_transaction' => null,
        'revert_transaction' => null,
        'stripe_transfer' => null,
        'get_payment' => null,
        'confirm_hold' => null,
        'credit_wallet' => null,
        'debit_wallet' => null,
        'get_wallet' => null,
        'void_hold' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'get_account' => false,
		'create_transaction' => false,
		'revert_transaction' => false,
		'stripe_transfer' => false,
		'get_payment' => false,
		'confirm_hold' => false,
		'credit_wallet' => false,
		'debit_wallet' => false,
		'get_wallet' => false,
		'void_hold' => false
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
        'get_account' => 'GetAccount',
        'create_transaction' => 'CreateTransaction',
        'revert_transaction' => 'RevertTransaction',
        'stripe_transfer' => 'StripeTransfer',
        'get_payment' => 'GetPayment',
        'confirm_hold' => 'ConfirmHold',
        'credit_wallet' => 'CreditWallet',
        'debit_wallet' => 'DebitWallet',
        'get_wallet' => 'GetWallet',
        'void_hold' => 'VoidHold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'get_account' => 'setGetAccount',
        'create_transaction' => 'setCreateTransaction',
        'revert_transaction' => 'setRevertTransaction',
        'stripe_transfer' => 'setStripeTransfer',
        'get_payment' => 'setGetPayment',
        'confirm_hold' => 'setConfirmHold',
        'credit_wallet' => 'setCreditWallet',
        'debit_wallet' => 'setDebitWallet',
        'get_wallet' => 'setGetWallet',
        'void_hold' => 'setVoidHold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'get_account' => 'getGetAccount',
        'create_transaction' => 'getCreateTransaction',
        'revert_transaction' => 'getRevertTransaction',
        'stripe_transfer' => 'getStripeTransfer',
        'get_payment' => 'getGetPayment',
        'confirm_hold' => 'getConfirmHold',
        'credit_wallet' => 'getCreditWallet',
        'debit_wallet' => 'getDebitWallet',
        'get_wallet' => 'getGetWallet',
        'void_hold' => 'getVoidHold'
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
        $this->setIfExists('get_account', $data ?? [], null);
        $this->setIfExists('create_transaction', $data ?? [], null);
        $this->setIfExists('revert_transaction', $data ?? [], null);
        $this->setIfExists('stripe_transfer', $data ?? [], null);
        $this->setIfExists('get_payment', $data ?? [], null);
        $this->setIfExists('confirm_hold', $data ?? [], null);
        $this->setIfExists('credit_wallet', $data ?? [], null);
        $this->setIfExists('debit_wallet', $data ?? [], null);
        $this->setIfExists('get_wallet', $data ?? [], null);
        $this->setIfExists('void_hold', $data ?? [], null);
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
     * Gets get_account
     *
     * @return \Formance\Model\ActivityGetAccount|null
     */
    public function getGetAccount()
    {
        return $this->container['get_account'];
    }

    /**
     * Sets get_account
     *
     * @param \Formance\Model\ActivityGetAccount|null $get_account get_account
     *
     * @return self
     */
    public function setGetAccount($get_account)
    {
        if (is_null($get_account)) {
            throw new \InvalidArgumentException('non-nullable get_account cannot be null');
        }
        $this->container['get_account'] = $get_account;

        return $this;
    }

    /**
     * Gets create_transaction
     *
     * @return \Formance\Model\ActivityCreateTransaction|null
     */
    public function getCreateTransaction()
    {
        return $this->container['create_transaction'];
    }

    /**
     * Sets create_transaction
     *
     * @param \Formance\Model\ActivityCreateTransaction|null $create_transaction create_transaction
     *
     * @return self
     */
    public function setCreateTransaction($create_transaction)
    {
        if (is_null($create_transaction)) {
            throw new \InvalidArgumentException('non-nullable create_transaction cannot be null');
        }
        $this->container['create_transaction'] = $create_transaction;

        return $this;
    }

    /**
     * Gets revert_transaction
     *
     * @return \Formance\Model\ActivityRevertTransaction|null
     */
    public function getRevertTransaction()
    {
        return $this->container['revert_transaction'];
    }

    /**
     * Sets revert_transaction
     *
     * @param \Formance\Model\ActivityRevertTransaction|null $revert_transaction revert_transaction
     *
     * @return self
     */
    public function setRevertTransaction($revert_transaction)
    {
        if (is_null($revert_transaction)) {
            throw new \InvalidArgumentException('non-nullable revert_transaction cannot be null');
        }
        $this->container['revert_transaction'] = $revert_transaction;

        return $this;
    }

    /**
     * Gets stripe_transfer
     *
     * @return \Formance\Model\StripeTransferRequest|null
     */
    public function getStripeTransfer()
    {
        return $this->container['stripe_transfer'];
    }

    /**
     * Sets stripe_transfer
     *
     * @param \Formance\Model\StripeTransferRequest|null $stripe_transfer stripe_transfer
     *
     * @return self
     */
    public function setStripeTransfer($stripe_transfer)
    {
        if (is_null($stripe_transfer)) {
            throw new \InvalidArgumentException('non-nullable stripe_transfer cannot be null');
        }
        $this->container['stripe_transfer'] = $stripe_transfer;

        return $this;
    }

    /**
     * Gets get_payment
     *
     * @return \Formance\Model\ActivityGetPayment|null
     */
    public function getGetPayment()
    {
        return $this->container['get_payment'];
    }

    /**
     * Sets get_payment
     *
     * @param \Formance\Model\ActivityGetPayment|null $get_payment get_payment
     *
     * @return self
     */
    public function setGetPayment($get_payment)
    {
        if (is_null($get_payment)) {
            throw new \InvalidArgumentException('non-nullable get_payment cannot be null');
        }
        $this->container['get_payment'] = $get_payment;

        return $this;
    }

    /**
     * Gets confirm_hold
     *
     * @return \Formance\Model\ActivityConfirmHold|null
     */
    public function getConfirmHold()
    {
        return $this->container['confirm_hold'];
    }

    /**
     * Sets confirm_hold
     *
     * @param \Formance\Model\ActivityConfirmHold|null $confirm_hold confirm_hold
     *
     * @return self
     */
    public function setConfirmHold($confirm_hold)
    {
        if (is_null($confirm_hold)) {
            throw new \InvalidArgumentException('non-nullable confirm_hold cannot be null');
        }
        $this->container['confirm_hold'] = $confirm_hold;

        return $this;
    }

    /**
     * Gets credit_wallet
     *
     * @return \Formance\Model\ActivityCreditWallet|null
     */
    public function getCreditWallet()
    {
        return $this->container['credit_wallet'];
    }

    /**
     * Sets credit_wallet
     *
     * @param \Formance\Model\ActivityCreditWallet|null $credit_wallet credit_wallet
     *
     * @return self
     */
    public function setCreditWallet($credit_wallet)
    {
        if (is_null($credit_wallet)) {
            throw new \InvalidArgumentException('non-nullable credit_wallet cannot be null');
        }
        $this->container['credit_wallet'] = $credit_wallet;

        return $this;
    }

    /**
     * Gets debit_wallet
     *
     * @return \Formance\Model\ActivityDebitWallet|null
     */
    public function getDebitWallet()
    {
        return $this->container['debit_wallet'];
    }

    /**
     * Sets debit_wallet
     *
     * @param \Formance\Model\ActivityDebitWallet|null $debit_wallet debit_wallet
     *
     * @return self
     */
    public function setDebitWallet($debit_wallet)
    {
        if (is_null($debit_wallet)) {
            throw new \InvalidArgumentException('non-nullable debit_wallet cannot be null');
        }
        $this->container['debit_wallet'] = $debit_wallet;

        return $this;
    }

    /**
     * Gets get_wallet
     *
     * @return \Formance\Model\ActivityGetWallet|null
     */
    public function getGetWallet()
    {
        return $this->container['get_wallet'];
    }

    /**
     * Sets get_wallet
     *
     * @param \Formance\Model\ActivityGetWallet|null $get_wallet get_wallet
     *
     * @return self
     */
    public function setGetWallet($get_wallet)
    {
        if (is_null($get_wallet)) {
            throw new \InvalidArgumentException('non-nullable get_wallet cannot be null');
        }
        $this->container['get_wallet'] = $get_wallet;

        return $this;
    }

    /**
     * Gets void_hold
     *
     * @return \Formance\Model\ActivityVoidHold|null
     */
    public function getVoidHold()
    {
        return $this->container['void_hold'];
    }

    /**
     * Sets void_hold
     *
     * @param \Formance\Model\ActivityVoidHold|null $void_hold void_hold
     *
     * @return self
     */
    public function setVoidHold($void_hold)
    {
        if (is_null($void_hold)) {
            throw new \InvalidArgumentException('non-nullable void_hold cannot be null');
        }
        $this->container['void_hold'] = $void_hold;

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


