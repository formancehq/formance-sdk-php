<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class PaymentResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\Payment')]
    public Payment $data;

    public function __construct()
    {
        $this->data = new \formance\stack\Models\Shared\Payment();
    }
}