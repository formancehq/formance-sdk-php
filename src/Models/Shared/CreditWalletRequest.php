<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class CreditWalletRequest
{
    /**
     *
     * @var Monetary $amount
     */
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\Monetary')]
    public Monetary $amount;

    /**
     * The balance to credit
     *
     * @var ?string $balance
     */
    #[\JMS\Serializer\Annotation\SerializedName('balance')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $balance = null;

    /**
     * Metadata associated with the wallet.
     *
     * @var ?array<string, string> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var ?string $reference
     */
    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     * $sources
     *
     * @var ?array<mixed> $sources
     */
    #[\JMS\Serializer\Annotation\SerializedName('sources')]
    #[\JMS\Serializer\Annotation\Type('array<mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $sources = null;

    /**
     *
     * @var ?\DateTime $timestamp
     */
    #[\JMS\Serializer\Annotation\SerializedName('timestamp')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $timestamp = null;

    /**
     * @param  Monetary  $amount
     * @param  ?string  $balance
     * @param  ?string  $reference
     * @param  ?\DateTime  $timestamp
     * @param  ?array<string, string>  $metadata
     * @param  ?array<mixed>  $sources
     */
    public function __construct(Monetary $amount, ?string $balance = null, ?string $reference = null, ?\DateTime $timestamp = null, ?array $metadata = null, ?array $sources = null)
    {
        $this->amount = $amount;
        $this->balance = $balance;
        $this->reference = $reference;
        $this->timestamp = $timestamp;
        $this->metadata = $metadata;
        $this->sources = $sources;
    }
}