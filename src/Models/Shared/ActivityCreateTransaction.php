<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ActivityCreateTransaction
{
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\OrchestrationPostTransaction')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrchestrationPostTransaction $data = null;

    #[\JMS\Serializer\Annotation\SerializedName('ledger')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ledger = null;

    public function __construct()
    {
        $this->data = null;
        $this->ledger = null;
    }
}