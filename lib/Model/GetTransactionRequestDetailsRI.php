<?php
/**
 * GetTransactionRequestDetailsRI
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Model;

use \ArrayAccess;
use \CryptoAPIs\ObjectSerializer;

/**
 * GetTransactionRequestDetailsRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetTransactionRequestDetailsRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetTransactionRequestDetailsRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_details' => 'string',
        'blockchain' => 'string',
        'fee_priority' => 'string',
        'network' => 'string',
        'recipients' => '\CryptoAPIs\Model\GetTransactionRequestDetailsRIRecipients[]',
        'total_transaction_amount' => 'string',
        'transaction_request_status' => 'string',
        'transaction_type' => 'string',
        'unit' => 'string',
        'wallet_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_details' => null,
        'blockchain' => null,
        'fee_priority' => null,
        'network' => null,
        'recipients' => null,
        'total_transaction_amount' => null,
        'transaction_request_status' => null,
        'transaction_type' => null,
        'unit' => null,
        'wallet_id' => null
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
        'additional_details' => 'additionalDetails',
        'blockchain' => 'blockchain',
        'fee_priority' => 'feePriority',
        'network' => 'network',
        'recipients' => 'recipients',
        'total_transaction_amount' => 'totalTransactionAmount',
        'transaction_request_status' => 'transactionRequestStatus',
        'transaction_type' => 'transactionType',
        'unit' => 'unit',
        'wallet_id' => 'walletId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_details' => 'setAdditionalDetails',
        'blockchain' => 'setBlockchain',
        'fee_priority' => 'setFeePriority',
        'network' => 'setNetwork',
        'recipients' => 'setRecipients',
        'total_transaction_amount' => 'setTotalTransactionAmount',
        'transaction_request_status' => 'setTransactionRequestStatus',
        'transaction_type' => 'setTransactionType',
        'unit' => 'setUnit',
        'wallet_id' => 'setWalletId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_details' => 'getAdditionalDetails',
        'blockchain' => 'getBlockchain',
        'fee_priority' => 'getFeePriority',
        'network' => 'getNetwork',
        'recipients' => 'getRecipients',
        'total_transaction_amount' => 'getTotalTransactionAmount',
        'transaction_request_status' => 'getTransactionRequestStatus',
        'transaction_type' => 'getTransactionType',
        'unit' => 'getUnit',
        'wallet_id' => 'getWalletId'
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

    const BLOCKCHAIN_BITCOIN = 'bitcoin';
    const BLOCKCHAIN_BITCOIN_CASH = 'bitcoin-cash';
    const BLOCKCHAIN_LITECOIN = 'litecoin';
    const BLOCKCHAIN_DOGECOIN = 'dogecoin';
    const BLOCKCHAIN_DASH = 'dash';
    const BLOCKCHAIN_ETHEREUM = 'ethereum';
    const BLOCKCHAIN_ZCASH = 'zcash';
    const FEE_PRIORITY_SLOW = 'slow';
    const FEE_PRIORITY_STANDARD = 'standard';
    const FEE_PRIORITY_FAST = 'fast';
    const NETWORK_MAINNET = 'mainnet';
    const NETWORK_TESTNET = 'testnet';
    const NETWORK_ROPSTEN = 'ropsten';
    const TRANSACTION_REQUEST_STATUS_CREATED = 'created';
    const TRANSACTION_REQUEST_STATUS_AWAIT_APPROVAL = 'await-approval';
    const TRANSACTION_REQUEST_STATUS_PENDING = 'pending';
    const TRANSACTION_REQUEST_STATUS_PREPARED = 'prepared';
    const TRANSACTION_REQUEST_STATUS_SIGNED = 'signed';
    const TRANSACTION_REQUEST_STATUS_BROADCASTED = 'broadcasted';
    const TRANSACTION_REQUEST_STATUS_SUCCESS = 'success';
    const TRANSACTION_REQUEST_STATUS_FAILED = 'failed';
    const TRANSACTION_REQUEST_STATUS_REJECTED = 'rejected';
    const TRANSACTION_REQUEST_STATUS_MINED = 'mined';
    const TRANSACTION_TYPE_COIN = 'coin';
    const TRANSACTION_TYPE_TOKEN = 'token';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBlockchainAllowableValues()
    {
        return [
            self::BLOCKCHAIN_BITCOIN,
            self::BLOCKCHAIN_BITCOIN_CASH,
            self::BLOCKCHAIN_LITECOIN,
            self::BLOCKCHAIN_DOGECOIN,
            self::BLOCKCHAIN_DASH,
            self::BLOCKCHAIN_ETHEREUM,
            self::BLOCKCHAIN_ZCASH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeePriorityAllowableValues()
    {
        return [
            self::FEE_PRIORITY_SLOW,
            self::FEE_PRIORITY_STANDARD,
            self::FEE_PRIORITY_FAST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNetworkAllowableValues()
    {
        return [
            self::NETWORK_MAINNET,
            self::NETWORK_TESTNET,
            self::NETWORK_ROPSTEN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionRequestStatusAllowableValues()
    {
        return [
            self::TRANSACTION_REQUEST_STATUS_CREATED,
            self::TRANSACTION_REQUEST_STATUS_AWAIT_APPROVAL,
            self::TRANSACTION_REQUEST_STATUS_PENDING,
            self::TRANSACTION_REQUEST_STATUS_PREPARED,
            self::TRANSACTION_REQUEST_STATUS_SIGNED,
            self::TRANSACTION_REQUEST_STATUS_BROADCASTED,
            self::TRANSACTION_REQUEST_STATUS_SUCCESS,
            self::TRANSACTION_REQUEST_STATUS_FAILED,
            self::TRANSACTION_REQUEST_STATUS_REJECTED,
            self::TRANSACTION_REQUEST_STATUS_MINED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionTypeAllowableValues()
    {
        return [
            self::TRANSACTION_TYPE_COIN,
            self::TRANSACTION_TYPE_TOKEN,
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
        $this->container['additional_details'] = $data['additional_details'] ?? null;
        $this->container['blockchain'] = $data['blockchain'] ?? null;
        $this->container['fee_priority'] = $data['fee_priority'] ?? null;
        $this->container['network'] = $data['network'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['total_transaction_amount'] = $data['total_transaction_amount'] ?? null;
        $this->container['transaction_request_status'] = $data['transaction_request_status'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['wallet_id'] = $data['wallet_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['additional_details'] === null) {
            $invalidProperties[] = "'additional_details' can't be null";
        }
        if ($this->container['blockchain'] === null) {
            $invalidProperties[] = "'blockchain' can't be null";
        }
        $allowedValues = $this->getBlockchainAllowableValues();
        if (!is_null($this->container['blockchain']) && !in_array($this->container['blockchain'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'blockchain', must be one of '%s'",
                $this->container['blockchain'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fee_priority'] === null) {
            $invalidProperties[] = "'fee_priority' can't be null";
        }
        $allowedValues = $this->getFeePriorityAllowableValues();
        if (!is_null($this->container['fee_priority']) && !in_array($this->container['fee_priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fee_priority', must be one of '%s'",
                $this->container['fee_priority'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        $allowedValues = $this->getNetworkAllowableValues();
        if (!is_null($this->container['network']) && !in_array($this->container['network'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'network', must be one of '%s'",
                $this->container['network'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
        }
        if ($this->container['total_transaction_amount'] === null) {
            $invalidProperties[] = "'total_transaction_amount' can't be null";
        }
        if ($this->container['transaction_request_status'] === null) {
            $invalidProperties[] = "'transaction_request_status' can't be null";
        }
        $allowedValues = $this->getTransactionRequestStatusAllowableValues();
        if (!is_null($this->container['transaction_request_status']) && !in_array($this->container['transaction_request_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_request_status', must be one of '%s'",
                $this->container['transaction_request_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!is_null($this->container['transaction_type']) && !in_array($this->container['transaction_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_type', must be one of '%s'",
                $this->container['transaction_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ($this->container['wallet_id'] === null) {
            $invalidProperties[] = "'wallet_id' can't be null";
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
     * Gets additional_details
     *
     * @return string
     */
    public function getAdditionalDetails()
    {
        return $this->container['additional_details'];
    }

    /**
     * Sets additional_details
     *
     * @param string $additional_details Defines an optional note for additional details.
     *
     * @return self
     */
    public function setAdditionalDetails($additional_details)
    {
        $this->container['additional_details'] = $additional_details;

        return $this;
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
        $allowedValues = $this->getBlockchainAllowableValues();
        if (!in_array($blockchain, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'blockchain', must be one of '%s'",
                    $blockchain,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['blockchain'] = $blockchain;

        return $this;
    }

    /**
     * Gets fee_priority
     *
     * @return string
     */
    public function getFeePriority()
    {
        return $this->container['fee_priority'];
    }

    /**
     * Sets fee_priority
     *
     * @param string $fee_priority Defines the priority for the fee, if it is \"slow\", \"standard\" or \"fast\".
     *
     * @return self
     */
    public function setFeePriority($fee_priority)
    {
        $allowedValues = $this->getFeePriorityAllowableValues();
        if (!in_array($fee_priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fee_priority', must be one of '%s'",
                    $fee_priority,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_priority'] = $fee_priority;

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
     * @param string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
     *
     * @return self
     */
    public function setNetwork($network)
    {
        $allowedValues = $this->getNetworkAllowableValues();
        if (!in_array($network, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'network', must be one of '%s'",
                    $network,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \CryptoAPIs\Model\GetTransactionRequestDetailsRIRecipients[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \CryptoAPIs\Model\GetTransactionRequestDetailsRIRecipients[] $recipients Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list.
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets total_transaction_amount
     *
     * @return string
     */
    public function getTotalTransactionAmount()
    {
        return $this->container['total_transaction_amount'];
    }

    /**
     * Sets total_transaction_amount
     *
     * @param string $total_transaction_amount Defines the total transaction amount.
     *
     * @return self
     */
    public function setTotalTransactionAmount($total_transaction_amount)
    {
        $this->container['total_transaction_amount'] = $total_transaction_amount;

        return $this;
    }

    /**
     * Gets transaction_request_status
     *
     * @return string
     */
    public function getTransactionRequestStatus()
    {
        return $this->container['transaction_request_status'];
    }

    /**
     * Sets transaction_request_status
     *
     * @param string $transaction_request_status Defines the status of the transaction request, e.g. pending.
     *
     * @return self
     */
    public function setTransactionRequestStatus($transaction_request_status)
    {
        $allowedValues = $this->getTransactionRequestStatusAllowableValues();
        if (!in_array($transaction_request_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_request_status', must be one of '%s'",
                    $transaction_request_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_request_status'] = $transaction_request_status;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type Defines the transaction type, if it is for coins or tokens.
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!in_array($transaction_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_type', must be one of '%s'",
                    $transaction_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit Defines the unit of the amount.
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets wallet_id
     *
     * @return string
     */
    public function getWalletId()
    {
        return $this->container['wallet_id'];
    }

    /**
     * Sets wallet_id
     *
     * @param string $wallet_id Defines the unique ID of the Wallet.
     *
     * @return self
     */
    public function setWalletId($wallet_id)
    {
        $this->container['wallet_id'] = $wallet_id;

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

