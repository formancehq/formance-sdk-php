<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class PoolBalances
{
    /**
     * $balances
     *
     * @var array<\formance\stack\Models\Shared\PoolBalance> $balances
     */
    #[\JMS\Serializer\Annotation\SerializedName('balances')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\PoolBalance>')]
    public array $balances;

    public function __construct()
    {
        $this->balances = [];
    }
}