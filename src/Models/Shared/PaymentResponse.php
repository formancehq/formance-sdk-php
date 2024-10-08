<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class PaymentResponse
{
    /**
     *
     * @var Payment $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\Payment')]
    public Payment $data;

    /**
     * @param  Payment  $data
     */
    public function __construct(Payment $data)
    {
        $this->data = $data;
    }
}