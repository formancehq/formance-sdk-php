<?php
/**
 * ErrorCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Formance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Formance Stack API
 *
 * Open, modular foundation for unique payments flows  # Introduction This API is documented in **OpenAPI format**.  # Authentication Formance Stack offers one forms of authentication:   - OAuth2 OAuth2 - an open protocol to allow secure authorization in a simple and standard method from web, mobile and desktop applications. <SecurityDefinitions />
 *
 * The version of the OpenAPI document: v1.0.0-rc.3
 * Contact: support@formance.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Formance\Model;
use \Formance\ObjectSerializer;

/**
 * ErrorCode Class Doc Comment
 *
 * @category Class
 * @package  Formance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorCode
{
    /**
     * Possible values of this enum
     */
    public const INTERNAL = 'INTERNAL';

    public const INSUFFICIENT_FUND = 'INSUFFICIENT_FUND';

    public const VALIDATION = 'VALIDATION';

    public const CONFLICT = 'CONFLICT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INTERNAL,
            self::INSUFFICIENT_FUND,
            self::VALIDATION,
            self::CONFLICT
        ];
    }
}


