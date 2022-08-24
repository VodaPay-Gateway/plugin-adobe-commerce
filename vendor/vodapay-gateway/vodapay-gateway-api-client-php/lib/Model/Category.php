<?php
/**
 * Category
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  VodaPayGatewayClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * VodaPay Gateway
 *
 * Enabling ecommerce merchants to accept online payments from customers.
 *
 * The version of the OpenAPI document: v2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace VodaPayGatewayClient\Model;
use \VodaPayGatewayClient\ObjectSerializer;

/**
 * Category Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  VodaPayGatewayClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Category
{
    /**
     * Possible values of this enum
     */
    const NUMBER_1 = 1;

    const NUMBER_2 = 2;

    const NUMBER_6 = 6;

    const NUMBER_7 = 7;

    const NUMBER_11 = 11;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_1,
            self::NUMBER_2,
            self::NUMBER_6,
            self::NUMBER_7,
            self::NUMBER_11
        ];
    }
}


