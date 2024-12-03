<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Transactions
{
    /**
     * $transactions
     *
     * @var array<TransactionData> $transactions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transactions')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\TransactionData>')]
    public array $transactions;

    /**
     * @param  array<TransactionData>  $transactions
     */
    public function __construct(array $transactions)
    {
        $this->transactions = $transactions;
    }
}