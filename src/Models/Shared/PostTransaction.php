<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class PostTransaction
{
    /**
     * $postings
     *
     * @var ?array<Posting> $postings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('postings')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\Posting>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $postings = null;

    /**
     *
     * @var ?string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     *
     * @var ?PostTransactionScript $script
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('script')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\PostTransactionScript|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PostTransactionScript $script = null;

    /**
     *
     * @var ?\DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $timestamp = null;

    /**
     * $metadata
     *
     * @var ?array<string, mixed> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * @param  ?array<Posting>  $postings
     * @param  ?string  $reference
     * @param  ?PostTransactionScript  $script
     * @param  ?\DateTime  $timestamp
     * @param  ?array<string, mixed>  $metadata
     * @phpstan-pure
     */
    public function __construct(?array $postings = null, ?string $reference = null, ?PostTransactionScript $script = null, ?\DateTime $timestamp = null, ?array $metadata = null)
    {
        $this->postings = $postings;
        $this->reference = $reference;
        $this->script = $script;
        $this->timestamp = $timestamp;
        $this->metadata = $metadata;
    }
}