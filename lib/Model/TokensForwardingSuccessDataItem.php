<?php
/**
 * TokensForwardingSuccessDataItem
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Crypto APIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: bizdev@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TokensForwardingSuccessDataItem Class Doc Comment
 *
 * @category Class
 * @description Defines an &#x60;item&#x60; as one result.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TokensForwardingSuccessDataItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TokensForwardingSuccess_data_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'blockchain' => 'string',
        'network' => 'string',
        'from_address' => 'string',
        'to_address' => 'string',
        'spent_fees_amount' => 'string',
        'spent_fees_unit' => 'string',
        'trigger_transaction_id' => 'string',
        'forwarding_transaction_id' => 'string',
        'token_type' => 'string',
        'token' => '\OpenAPI\Client\Model\TokensForwardingSuccessToken'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'blockchain' => null,
        'network' => null,
        'from_address' => null,
        'to_address' => null,
        'spent_fees_amount' => null,
        'spent_fees_unit' => null,
        'trigger_transaction_id' => null,
        'forwarding_transaction_id' => null,
        'token_type' => null,
        'token' => null
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
        'blockchain' => 'blockchain',
        'network' => 'network',
        'from_address' => 'fromAddress',
        'to_address' => 'toAddress',
        'spent_fees_amount' => 'spentFeesAmount',
        'spent_fees_unit' => 'spentFeesUnit',
        'trigger_transaction_id' => 'triggerTransactionId',
        'forwarding_transaction_id' => 'forwardingTransactionId',
        'token_type' => 'tokenType',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blockchain' => 'setBlockchain',
        'network' => 'setNetwork',
        'from_address' => 'setFromAddress',
        'to_address' => 'setToAddress',
        'spent_fees_amount' => 'setSpentFeesAmount',
        'spent_fees_unit' => 'setSpentFeesUnit',
        'trigger_transaction_id' => 'setTriggerTransactionId',
        'forwarding_transaction_id' => 'setForwardingTransactionId',
        'token_type' => 'setTokenType',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blockchain' => 'getBlockchain',
        'network' => 'getNetwork',
        'from_address' => 'getFromAddress',
        'to_address' => 'getToAddress',
        'spent_fees_amount' => 'getSpentFeesAmount',
        'spent_fees_unit' => 'getSpentFeesUnit',
        'trigger_transaction_id' => 'getTriggerTransactionId',
        'forwarding_transaction_id' => 'getForwardingTransactionId',
        'token_type' => 'getTokenType',
        'token' => 'getToken'
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

    const TOKEN_TYPE_ETHEREUM_ERC20_TOKEN = 'ethereumERC20Token';
    const TOKEN_TYPE_ETHEREUM_ERC721_TOKEN = 'ethereumERC721Token';
    const TOKEN_TYPE_OMNI_LAYER_TOKEN = 'omniLayerToken';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTokenTypeAllowableValues()
    {
        return [
            self::TOKEN_TYPE_ETHEREUM_ERC20_TOKEN,
            self::TOKEN_TYPE_ETHEREUM_ERC721_TOKEN,
            self::TOKEN_TYPE_OMNI_LAYER_TOKEN,
        ];
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
        $this->container['blockchain'] = $data['blockchain'] ?? null;
        $this->container['network'] = $data['network'] ?? null;
        $this->container['from_address'] = $data['from_address'] ?? null;
        $this->container['to_address'] = $data['to_address'] ?? null;
        $this->container['spent_fees_amount'] = $data['spent_fees_amount'] ?? null;
        $this->container['spent_fees_unit'] = $data['spent_fees_unit'] ?? null;
        $this->container['trigger_transaction_id'] = $data['trigger_transaction_id'] ?? null;
        $this->container['forwarding_transaction_id'] = $data['forwarding_transaction_id'] ?? null;
        $this->container['token_type'] = $data['token_type'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['blockchain'] === null) {
            $invalidProperties[] = "'blockchain' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['from_address'] === null) {
            $invalidProperties[] = "'from_address' can't be null";
        }
        if ($this->container['to_address'] === null) {
            $invalidProperties[] = "'to_address' can't be null";
        }
        if ($this->container['spent_fees_amount'] === null) {
            $invalidProperties[] = "'spent_fees_amount' can't be null";
        }
        if ($this->container['spent_fees_unit'] === null) {
            $invalidProperties[] = "'spent_fees_unit' can't be null";
        }
        if ($this->container['trigger_transaction_id'] === null) {
            $invalidProperties[] = "'trigger_transaction_id' can't be null";
        }
        if ($this->container['forwarding_transaction_id'] === null) {
            $invalidProperties[] = "'forwarding_transaction_id' can't be null";
        }
        if ($this->container['token_type'] === null) {
            $invalidProperties[] = "'token_type' can't be null";
        }
        $allowedValues = $this->getTokenTypeAllowableValues();
        if (!is_null($this->container['token_type']) && !in_array($this->container['token_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'token_type', must be one of '%s'",
                $this->container['token_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
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
     * Gets blockchain
     *
     * @return string
     */
    public function getBlockchain()
    {
        return $this->container['blockchain'];
    }

    /**
     * Sets blockchain
     *
     * @param string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
     *
     * @return self
     */
    public function setBlockchain($blockchain)
    {
        $this->container['blockchain'] = $blockchain;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\", \"rinkeby\" are test networks.
     *
     * @return self
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets from_address
     *
     * @return string
     */
    public function getFromAddress()
    {
        return $this->container['from_address'];
    }

    /**
     * Sets from_address
     *
     * @param string $from_address Represents the hash of the address that provides the tokens.
     *
     * @return self
     */
    public function setFromAddress($from_address)
    {
        $this->container['from_address'] = $from_address;

        return $this;
    }

    /**
     * Gets to_address
     *
     * @return string
     */
    public function getToAddress()
    {
        return $this->container['to_address'];
    }

    /**
     * Sets to_address
     *
     * @param string $to_address Represents the hash of the address to forward the tokens to.
     *
     * @return self
     */
    public function setToAddress($to_address)
    {
        $this->container['to_address'] = $to_address;

        return $this;
    }

    /**
     * Gets spent_fees_amount
     *
     * @return string
     */
    public function getSpentFeesAmount()
    {
        return $this->container['spent_fees_amount'];
    }

    /**
     * Sets spent_fees_amount
     *
     * @param string $spent_fees_amount Represents the amount of the fee spent for the tokens to be forwarded.
     *
     * @return self
     */
    public function setSpentFeesAmount($spent_fees_amount)
    {
        $this->container['spent_fees_amount'] = $spent_fees_amount;

        return $this;
    }

    /**
     * Gets spent_fees_unit
     *
     * @return string
     */
    public function getSpentFeesUnit()
    {
        return $this->container['spent_fees_unit'];
    }

    /**
     * Sets spent_fees_unit
     *
     * @param string $spent_fees_unit Represents the unit of the fee spent for the tokens to be forwarded, e.g. BTC.
     *
     * @return self
     */
    public function setSpentFeesUnit($spent_fees_unit)
    {
        $this->container['spent_fees_unit'] = $spent_fees_unit;

        return $this;
    }

    /**
     * Gets trigger_transaction_id
     *
     * @return string
     */
    public function getTriggerTransactionId()
    {
        return $this->container['trigger_transaction_id'];
    }

    /**
     * Sets trigger_transaction_id
     *
     * @param string $trigger_transaction_id Defines the unique Transaction ID that triggered the token forwarding.
     *
     * @return self
     */
    public function setTriggerTransactionId($trigger_transaction_id)
    {
        $this->container['trigger_transaction_id'] = $trigger_transaction_id;

        return $this;
    }

    /**
     * Gets forwarding_transaction_id
     *
     * @return string
     */
    public function getForwardingTransactionId()
    {
        return $this->container['forwarding_transaction_id'];
    }

    /**
     * Sets forwarding_transaction_id
     *
     * @param string $forwarding_transaction_id Defines the unique Transaction ID that forwarded the tokens.
     *
     * @return self
     */
    public function setForwardingTransactionId($forwarding_transaction_id)
    {
        $this->container['forwarding_transaction_id'] = $forwarding_transaction_id;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string $token_type Defines the type of token sent with the transaction, e.g. ERC 20.
     *
     * @return self
     */
    public function setTokenType($token_type)
    {
        $allowedValues = $this->getTokenTypeAllowableValues();
        if (!in_array($token_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'token_type', must be one of '%s'",
                    $token_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets token
     *
     * @return \OpenAPI\Client\Model\TokensForwardingSuccessToken
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param \OpenAPI\Client\Model\TokensForwardingSuccessToken $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


