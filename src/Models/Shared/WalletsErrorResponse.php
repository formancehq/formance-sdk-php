<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class WalletsErrorResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('errorCode')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\WalletsErrorResponseErrorCode>')]
    public WalletsErrorResponseErrorCode $errorCode;

    #[\JMS\Serializer\Annotation\SerializedName('errorMessage')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $errorMessage;

    public function __construct()
    {
        $this->errorCode = \formance\stack\Models\Shared\WalletsErrorResponseErrorCode::Validation;
        $this->errorMessage = '';
    }
}