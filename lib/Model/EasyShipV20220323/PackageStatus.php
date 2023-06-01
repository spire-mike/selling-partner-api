<?php
/**
 * PackageStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders. Your Easy Ship applications can: * Get available time slots for packages to be scheduled for delivery. * Schedule, reschedule, and cancel Easy Ship orders. * Print labels, invoices, and warranties. See the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * The version of the OpenAPI document: 2022-03-23
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\EasyShipV20220323;
use ArrayAccess;

use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * PackageStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the package.
 * @package  SellingPartnerApi
 * @group 
 */
class PackageStatus
{
    public $value;

    /**
     * Possible values of this enum
     */
    const READY_FOR_PICKUP = 'ReadyForPickup';
    const PICKED_UP = 'PickedUp';
    const AT_ORIGIN_FC = 'AtOriginFC';
    const AT_DESTINATION_FC = 'AtDestinationFC';
    const DELIVERED = 'Delivered';
    const REJECTED = 'Rejected';
    const UNDELIVERABLE = 'Undeliverable';
    const RETURNED_TO_SELLER = 'ReturnedToSeller';
    const LOST_IN_TRANSIT = 'LostInTransit';
    const LABEL_CANCELED = 'LabelCanceled';
    const DAMAGED_IN_TRANSIT = 'DamagedInTransit';
    const OUT_FOR_DELIVERY = 'OutForDelivery';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::READY_FOR_PICKUP,
            self::PICKED_UP,
            self::AT_ORIGIN_FC,
            self::AT_DESTINATION_FC,
            self::DELIVERED,
            self::REJECTED,
            self::UNDELIVERABLE,
            self::RETURNED_TO_SELLER,
            self::LOST_IN_TRANSIT,
            self::LABEL_CANCELED,
            self::DAMAGED_IN_TRANSIT,
            self::OUT_FOR_DELIVERY,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'PackageStatus', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


