<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Transactions
{
    /**
     * $transactions
     *
     * @var array<\formance\stack\Models\Shared\TransactionData> $transactions
     */
    #[\JMS\Serializer\Annotation\SerializedName('transactions')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\TransactionData>')]
    public array $transactions;

    public function __construct()
    {
        $this->transactions = [];
    }
}