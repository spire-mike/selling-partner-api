<?php
/**
 * FulfillmentReturnItemStatus
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
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * FulfillmentReturnItemStatus Class Doc Comment
 *
 * @category Class
 * @description Indicates if the return item has been processed by a fulfillment center.
 * @package  SellingPartnerApi
 * @group 
 */
class FulfillmentReturnItemStatus
{
    /**
     * Possible values of this enum
     */
    const _NEW = 'New';
    const PROCESSED = 'Processed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::PROCESSED,
        ];
    }
}


