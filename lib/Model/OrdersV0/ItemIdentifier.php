<?php
/**
 * ItemIdentifier
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\OrdersV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ItemIdentifier Class Doc Comment
 *
 * @category Class
 * @description Item identifiers used in the context of approvals operations.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemIdentifier extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemIdentifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identifier_type' => 'string',
        'identifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identifier_type' => null,
        'identifier' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'identifier_type' => 'IdentifierType',
        'identifier' => 'Identifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier_type' => 'setIdentifierType',
        'identifier' => 'setIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier_type' => 'getIdentifierType',
        'identifier' => 'getIdentifier'
    ];



    const IDENTIFIER_TYPE_ASIN = 'ASIN';
    const IDENTIFIER_TYPE_SELLER_SKU = 'SELLER_SKU';
    const IDENTIFIER_TYPE_EXTERNAL_ID = 'EXTERNAL_ID';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdentifierTypeAllowableValues()
    {
        $baseVals = [
            self::IDENTIFIER_TYPE_ASIN,
            self::IDENTIFIER_TYPE_SELLER_SKU,
            self::IDENTIFIER_TYPE_EXTERNAL_ID,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
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
        $this->container['identifier_type'] = $data['identifier_type'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['identifier_type'] === null) {
            $invalidProperties[] = "'identifier_type' can't be null";
        }
        $allowedValues = $this->getIdentifierTypeAllowableValues();
        if (
            !is_null($this->container['identifier_type']) &&
            !in_array(strtoupper($this->container['identifier_type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'identifier_type', must be one of '%s'",
                $this->container['identifier_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets identifier_type
     *
     * @return string
     */
    public function getIdentifierType()
    {
        return $this->container['identifier_type'];
    }

    /**
     * Sets identifier_type
     *
     * @param string $identifier_type Defines the type of identifiers allowed to specify a substitution.
     *
     * @return self
     */
    public function setIdentifierType($identifier_type)
    {
        $allowedValues = $this->getIdentifierTypeAllowableValues();
        if (!in_array(strtoupper($identifier_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'identifier_type', must be one of '%s'",
                    $identifier_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['identifier_type'] = $identifier_type;

        return $this;
    }
    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }
}


