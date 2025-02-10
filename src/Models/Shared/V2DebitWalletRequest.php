<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2DebitWalletRequest
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
     * $balances
     *
     * @var ?array<string> $balances
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balances')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $balances = null;

    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var V2LedgerAccountSubject|V2WalletSubject|null $destination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('destination')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2LedgerAccountSubject|\formance\stack\Models\Shared\V2WalletSubject|null')]
    #[\Speakeasy\Serializer\Annotation\UnionDiscriminator(field: 'type', map: ['V2LedgerAccountSubject' => '\formance\stack\Models\Shared\V2LedgerAccountSubject', 'V2WalletSubject' => '\formance\stack\Models\Shared\V2WalletSubject'])]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public V2LedgerAccountSubject|V2WalletSubject|null $destination = null;

    /**
     * Set to true to create a pending hold. If false, the wallet will be debited immediately.
     *
     * @var ?bool $pending
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pending')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $pending = null;

    /**
     * cannot be used in conjunction with `pending` property
     *
     * @var ?\DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $timestamp = null;

    /**
     * @param  V2Monetary  $amount
     * @param  array<string, string>  $metadata
     * @param  ?array<string>  $balances
     * @param  ?string  $description
     * @param  V2LedgerAccountSubject|V2WalletSubject|null  $destination
     * @param  ?bool  $pending
     * @param  ?\DateTime  $timestamp
     * @phpstan-pure
     */
    public function __construct(V2Monetary $amount, array $metadata, ?array $balances = null, ?string $description = null, V2LedgerAccountSubject|V2WalletSubject|null $destination = null, ?bool $pending = null, ?\DateTime $timestamp = null)
    {
        $this->amount = $amount;
        $this->metadata = $metadata;
        $this->balances = $balances;
        $this->description = $description;
        $this->destination = $destination;
        $this->pending = $pending;
        $this->timestamp = $timestamp;
    }
}