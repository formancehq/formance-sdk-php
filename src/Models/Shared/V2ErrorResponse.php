<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ErrorResponse
{
    /**
     *
     * @var V2ErrorsEnum $errorCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('errorCode')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2ErrorsEnum')]
    public V2ErrorsEnum $errorCode;

    /**
     *
     * @var string $errorMessage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('errorMessage')]
    public string $errorMessage;

    /**
     *
     * @var ?string $details
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('details')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $details = null;

    /**
     * @param  V2ErrorsEnum  $errorCode
     * @param  string  $errorMessage
     * @param  ?string  $details
     * @phpstan-pure
     */
    public function __construct(V2ErrorsEnum $errorCode, string $errorMessage, ?string $details = null)
    {
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
        $this->details = $details;
    }
}