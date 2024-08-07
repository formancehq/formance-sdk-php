<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Contract
{
    #[\JMS\Serializer\Annotation\SerializedName('account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $account = null;

    #[\JMS\Serializer\Annotation\SerializedName('expr')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\Expr')]
    public Expr $expr;

    public function __construct()
    {
        $this->account = null;
        $this->expr = new \formance\stack\Models\Shared\Expr();
    }
}