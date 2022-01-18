<?php
/**
 * ShipmentInvoiceStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Shipment Invoicing
 *
 * The Selling Partner API for Shipment Invoicing helps you programmatically retrieve shipment invoice information in the Brazil marketplace for a selling partner’s Fulfillment by Amazon (FBA) orders.
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

namespace SellingPartnerApi\Model\ShipmentInvoicing;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ShipmentInvoiceStatus Class Doc Comment
 *
 * @category Class
 * @description The shipment invoice status.
 * @package  SellingPartnerApi
 * @group 
 */
class ShipmentInvoiceStatus
{
    /**
     * Possible values of this enum
     */
    const PROCESSING = 'Processing';
    const ACCEPTED = 'Accepted';
    const ERRORED = 'Errored';
    const NOT_FOUND = 'NotFound';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROCESSING,
            self::ACCEPTED,
            self::ERRORED,
            self::NOT_FOUND,
        ];
    }
}


