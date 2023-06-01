<?php
/**
 * PaymentTerms
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Payments
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorInvoicesV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * PaymentTerms Class Doc Comment
 *
 * @category Class
 * @description Terms of the payment for the invoice. The basis of the payment terms is the invoice date.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PaymentTerms extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentTerms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'discount_percent' => 'string',
        'discount_due_days' => 'float',
        'net_due_days' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'discount_percent' => null,
        'discount_due_days' => null,
        'net_due_days' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'discount_percent' => 'discountPercent',
        'discount_due_days' => 'discountDueDays',
        'net_due_days' => 'netDueDays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'discount_percent' => 'setDiscountPercent',
        'discount_due_days' => 'setDiscountDueDays',
        'net_due_days' => 'setNetDueDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'discount_percent' => 'getDiscountPercent',
        'discount_due_days' => 'getDiscountDueDays',
        'net_due_days' => 'getNetDueDays'
    ];



    const TYPE_BASIC = 'Basic';
    const TYPE_END_OF_MONTH = 'EndOfMonth';
    const TYPE_FIXED_DATE = 'FixedDate';
    const TYPE_PROXIMO = 'Proximo';
    const TYPE_PAYMENT_DUE_UPON_RECEIPT_OF_INVOICE = 'PaymentDueUponReceiptOfInvoice';
    const TYPE_LETTEROF_CREDIT = 'LetterofCredit';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        $baseVals = [
            self::TYPE_BASIC,
            self::TYPE_END_OF_MONTH,
            self::TYPE_FIXED_DATE,
            self::TYPE_PROXIMO,
            self::TYPE_PAYMENT_DUE_UPON_RECEIPT_OF_INVOICE,
            self::TYPE_LETTEROF_CREDIT,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['discount_percent'] = $data['discount_percent'] ?? null;
        $this->container['discount_due_days'] = $data['discount_due_days'] ?? null;
        $this->container['net_due_days'] = $data['net_due_days'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getTypeAllowableValues();
        if (
            !is_null($this->container['type']) &&
            !in_array(strtoupper($this->container['type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }


    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The payment term type for the invoice.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) &&!in_array(strtoupper($type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Gets discount_percent
     *
     * @return string|null
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param string|null $discount_percent A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. 
     *   **Pattern** : `^-?(0|([1-9]\\d*))(\\.\\d+)?([eE][+-]?\\d+)?$`.
     *
     * @return self
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }
    /**
     * Gets discount_due_days
     *
     * @return float|null
     */
    public function getDiscountDueDays()
    {
        return $this->container['discount_due_days'];
    }

    /**
     * Sets discount_due_days
     *
     * @param float|null $discount_due_days The number of calendar days from the Base date (Invoice date) until the discount is no longer valid.
     *
     * @return self
     */
    public function setDiscountDueDays($discount_due_days)
    {
        $this->container['discount_due_days'] = $discount_due_days;

        return $this;
    }
    /**
     * Gets net_due_days
     *
     * @return float|null
     */
    public function getNetDueDays()
    {
        return $this->container['net_due_days'];
    }

    /**
     * Sets net_due_days
     *
     * @param float|null $net_due_days The number of calendar days from the base date (invoice date) until the total amount on the invoice is due.
     *
     * @return self
     */
    public function setNetDueDays($net_due_days)
    {
        $this->container['net_due_days'] = $net_due_days;

        return $this;
    }
}


