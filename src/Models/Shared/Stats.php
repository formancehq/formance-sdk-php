<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Stats
{
    #[\JMS\Serializer\Annotation\SerializedName('accounts')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $accounts;

    #[\JMS\Serializer\Annotation\SerializedName('transactions')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $transactions;

    public function __construct()
    {
        $this->accounts = 0;
        $this->transactions = 0;
    }
}