<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ReconciliationResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\Reconciliation')]
    public Reconciliation $data;

    public function __construct()
    {
        $this->data = new \formance\stack\Models\Shared\Reconciliation();
    }
}