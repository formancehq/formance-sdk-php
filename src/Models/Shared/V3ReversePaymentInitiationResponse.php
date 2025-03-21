<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3ReversePaymentInitiationResponse
{
    /**
     *
     * @var V3ReversePaymentInitiationResponseData $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V3ReversePaymentInitiationResponseData')]
    public V3ReversePaymentInitiationResponseData $data;

    /**
     * @param  V3ReversePaymentInitiationResponseData  $data
     * @phpstan-pure
     */
    public function __construct(V3ReversePaymentInitiationResponseData $data)
    {
        $this->data = $data;
    }
}