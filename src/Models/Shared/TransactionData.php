<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TransactionData
{
    /**
     * $metadata
     *
     * @var ?array<string, mixed> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * $postings
     *
     * @var array<Posting> $postings
     */
    #[\JMS\Serializer\Annotation\SerializedName('postings')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\Posting>')]
    public array $postings;

    /**
     *
     * @var ?string $reference
     */
    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     *
     * @var ?\DateTime $timestamp
     */
    #[\JMS\Serializer\Annotation\SerializedName('timestamp')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $timestamp = null;

    /**
     * @param  array<Posting>  $postings
     * @param  ?string  $reference
     * @param  ?\DateTime  $timestamp
     * @param  ?array<string, mixed>  $metadata
     */
    public function __construct(array $postings, ?string $reference = null, ?\DateTime $timestamp = null, ?array $metadata = null)
    {
        $this->postings = $postings;
        $this->reference = $reference;
        $this->timestamp = $timestamp;
        $this->metadata = $metadata;
    }
}