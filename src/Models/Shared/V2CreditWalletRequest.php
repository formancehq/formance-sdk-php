<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2CreditWalletRequest
{
    /**
     *
     * @var V2Monetary $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2Monetary')]
    public V2Monetary $amount;

    /**
     * Metadata associated with the wallet.
     *
     * @var array<string, string> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>')]
    public array $metadata;

    /**
     * $sources
     *
     * @var array<V2LedgerAccountSubject|V2WalletSubject> $sources
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sources')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\V2LedgerAccountSubject|\formance\stack\Models\Shared\V2WalletSubject>')]
    public array $sources;

    /**
     * The balance to credit
     *
     * @var ?string $balance
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balance')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $balance = null;

    /**
     *
     * @var ?string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     *
     * @var ?\DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $timestamp = null;

    /**
     * @param  V2Monetary  $amount
     * @param  array<string, string>  $metadata
     * @param  array<V2LedgerAccountSubject|V2WalletSubject>  $sources
     * @param  ?string  $balance
     * @param  ?string  $reference
     * @param  ?\DateTime  $timestamp
     * @phpstan-pure
     */
    public function __construct(V2Monetary $amount, array $metadata, array $sources, ?string $balance = null, ?string $reference = null, ?\DateTime $timestamp = null)
    {
        $this->amount = $amount;
        $this->metadata = $metadata;
        $this->sources = $sources;
        $this->balance = $balance;
        $this->reference = $reference;
        $this->timestamp = $timestamp;
    }
}