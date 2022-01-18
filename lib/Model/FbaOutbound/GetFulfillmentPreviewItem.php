<?php
/**
 * GetFulfillmentPreviewItem
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutbound;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * GetFulfillmentPreviewItem Class Doc Comment
 *
 * @category Class
 * @description Item information for a fulfillment order preview.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetFulfillmentPreviewItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetFulfillmentPreviewItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'quantity' => 'int',
        'per_unit_declared_value' => '\SellingPartnerApi\Model\FbaOutbound\Money',
        'seller_fulfillment_order_item_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_sku' => null,
        'quantity' => 'int32',
        'per_unit_declared_value' => null,
        'seller_fulfillment_order_item_id' => null
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
        'seller_sku' => 'sellerSku',
        'quantity' => 'quantity',
        'per_unit_declared_value' => 'perUnitDeclaredValue',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'seller_sku' => 'setSellerSku',
        'quantity' => 'setQuantity',
        'per_unit_declared_value' => 'setPerUnitDeclaredValue',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'quantity' => 'getQuantity',
        'per_unit_declared_value' => 'getPerUnitDeclaredValue',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId'
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
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['per_unit_declared_value'] = $data['per_unit_declared_value'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        if ((mb_strlen($this->container['seller_sku']) > 50)) {
            $invalidProperties[] = "invalid value for 'seller_sku', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if ((mb_strlen($this->container['seller_fulfillment_order_item_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'seller_fulfillment_order_item_id', the character length must be smaller than or equal to 50.";
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
     * Gets seller_sku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string $seller_sku The seller SKU of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        if ((mb_strlen($seller_sku) > 50)) {
            throw new \InvalidArgumentException('invalid length for $seller_sku when calling GetFulfillmentPreviewItem., must be smaller than or equal to 50.');
        }

        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }
    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The item quantity.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }
    /**
     * Gets per_unit_declared_value
     *
     * @return \SellingPartnerApi\Model\FbaOutbound\Money|null
     */
    public function getPerUnitDeclaredValue()
    {
        return $this->container['per_unit_declared_value'];
    }

    /**
     * Sets per_unit_declared_value
     *
     * @param \SellingPartnerApi\Model\FbaOutbound\Money|null $per_unit_declared_value per_unit_declared_value
     *
     * @return self
     */
    public function setPerUnitDeclaredValue($per_unit_declared_value)
    {
        $this->container['per_unit_declared_value'] = $per_unit_declared_value;

        return $this;
    }
    /**
     * Gets seller_fulfillment_order_item_id
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id
     *
     * @param string $seller_fulfillment_order_item_id A fulfillment order item identifier that the seller creates to track items in the fulfillment preview.
     *
     * @return self
     */
    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        if ((mb_strlen($seller_fulfillment_order_item_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $seller_fulfillment_order_item_id when calling GetFulfillmentPreviewItem., must be smaller than or equal to 50.');
        }

        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

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


