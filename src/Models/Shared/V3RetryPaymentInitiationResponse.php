<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3RetryPaymentInitiationResponse
{
    /**
     *
     * @var V3RetryPaymentInitiationResponseData $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V3RetryPaymentInitiationResponseData')]
    public V3RetryPaymentInitiationResponseData $data;

    /**
     * @param  V3RetryPaymentInitiationResponseData  $data
     * @phpstan-pure
     */
    public function __construct(V3RetryPaymentInitiationResponseData $data)
    {
        $this->data = $data;
    }
}