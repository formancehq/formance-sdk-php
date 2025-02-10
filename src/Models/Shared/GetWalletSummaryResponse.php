<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class GetWalletSummaryResponse
{
    /**
     * $availableFunds
     *
     * @var array<string, \Brick\Math\BigInteger> $availableFunds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('availableFunds')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, \Brick\Math\BigInteger>')]
    public array $availableFunds;

    /**
     * $balances
     *
     * @var array<BalanceWithAssets> $balances
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balances')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\BalanceWithAssets>')]
    public array $balances;

    /**
     * $expirableFunds
     *
     * @var array<string, \Brick\Math\BigInteger> $expirableFunds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expirableFunds')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, \Brick\Math\BigInteger>')]
    public array $expirableFunds;

    /**
     * $expiredFunds
     *
     * @var array<string, \Brick\Math\BigInteger> $expiredFunds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiredFunds')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, \Brick\Math\BigInteger>')]
    public array $expiredFunds;

    /**
     * $holdFunds
     *
     * @var array<string, \Brick\Math\BigInteger> $holdFunds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('holdFunds')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, \Brick\Math\BigInteger>')]
    public array $holdFunds;

    /**
     * @param  array<string, \Brick\Math\BigInteger>  $availableFunds
     * @param  array<BalanceWithAssets>  $balances
     * @param  array<string, \Brick\Math\BigInteger>  $expirableFunds
     * @param  array<string, \Brick\Math\BigInteger>  $expiredFunds
     * @param  array<string, \Brick\Math\BigInteger>  $holdFunds
     * @phpstan-pure
     */
    public function __construct(array $availableFunds, array $balances, array $expirableFunds, array $expiredFunds, array $holdFunds)
    {
        $this->availableFunds = $availableFunds;
        $this->balances = $balances;
        $this->expirableFunds = $expirableFunds;
        $this->expiredFunds = $expiredFunds;
        $this->holdFunds = $holdFunds;
    }
}