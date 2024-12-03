<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class WalletWithBalances
{
    /**
     *
     * @var WalletWithBalancesBalances $balances
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balances')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\WalletWithBalancesBalances')]
    public WalletWithBalancesBalances $balances;

    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public \DateTime $createdAt;

    /**
     * The unique ID of the wallet.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $ledger
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ledger')]
    public string $ledger;

    /**
     * Metadata associated with the wallet.
     *
     * @var array<string, string> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>')]
    public array $metadata;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * @param  WalletWithBalancesBalances  $balances
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $ledger
     * @param  array<string, string>  $metadata
     * @param  string  $name
     */
    public function __construct(WalletWithBalancesBalances $balances, \DateTime $createdAt, string $id, string $ledger, array $metadata, string $name)
    {
        $this->balances = $balances;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->ledger = $ledger;
        $this->metadata = $metadata;
        $this->name = $name;
    }
}