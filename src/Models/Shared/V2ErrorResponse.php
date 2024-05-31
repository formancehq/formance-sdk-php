<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ErrorResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $details = null;

    #[\JMS\Serializer\Annotation\SerializedName('errorCode')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\V2ErrorsEnum>')]
    public V2ErrorsEnum $errorCode;

    #[\JMS\Serializer\Annotation\SerializedName('errorMessage')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $errorMessage;

    public function __construct()
    {
        $this->details = null;
        $this->errorCode = \formance\stack\Models\Shared\V2ErrorsEnum::Internal;
        $this->errorMessage = '';
    }
}