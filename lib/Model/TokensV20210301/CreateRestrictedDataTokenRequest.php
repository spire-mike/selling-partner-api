<?php
/**
 * CreateRestrictedDataTokenRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Tokens
 *
 * The Selling Partner API for Tokens provides a secure way to access a customer's PII (Personally Identifiable Information). You can call the Tokens API to get a Restricted Data Token (RDT) for one or more restricted resources that you specify. The RDT authorizes subsequent calls to restricted operations that correspond to the restricted resources that you specified. For more information, see the [Tokens API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/tokens-api-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-03-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\TokensV20210301;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * CreateRestrictedDataTokenRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the createRestrictedDataToken operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateRestrictedDataTokenRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateRestrictedDataTokenRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'target_application' => 'string',
        'restricted_resources' => '\SellingPartnerApi\Model\TokensV20210301\RestrictedResource[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'target_application' => null,
        'restricted_resources' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'target_application' => 'targetApplication',
        'restricted_resources' => 'restrictedResources'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target_application' => 'setTargetApplication',
        'restricted_resources' => 'setRestrictedResources'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target_application' => 'getTargetApplication',
        'restricted_resources' => 'getRestrictedResources'
    ];


    
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
        $this->container['target_application'] = $data['target_application'] ?? null;
        $this->container['restricted_resources'] = $data['restricted_resources'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['restricted_resources'] === null) {
            $invalidProperties[] = "'restricted_resources' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets target_application
     *
     * @return string|null
     */
    public function getTargetApplication()
    {
        return $this->container['target_application'];
    }

    /**
     * Sets target_application
     *
     * @param string|null $target_application The application ID for the target application to which access is being delegated.
     *
     * @return self
     */
    public function setTargetApplication($target_application)
    {
        $this->container['target_application'] = $target_application;

        return $this;
    }
    /**
     * Gets restricted_resources
     *
     * @return \SellingPartnerApi\Model\TokensV20210301\RestrictedResource[]
     */
    public function getRestrictedResources()
    {
        return $this->container['restricted_resources'];
    }

    /**
     * Sets restricted_resources
     *
     * @param \SellingPartnerApi\Model\TokensV20210301\RestrictedResource[] $restricted_resources A list of restricted resources.
     *   Maximum: 50
     *
     * @return self
     */
    public function setRestrictedResources($restricted_resources)
    {
        $this->container['restricted_resources'] = $restricted_resources;

        return $this;
    }
}


