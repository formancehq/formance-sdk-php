<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class OrchestrationPostTransaction
{
    /**
     * $metadata
     *
     * @var array<string, string> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    public array $metadata;

    /**
     * $postings
     *
     * @var ?array<Posting> $postings
     */
    #[\JMS\Serializer\Annotation\SerializedName('postings')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\Posting>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $postings = null;

    /**
     *
     * @var ?string $reference
     */
    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     *
     * @var ?OrchestrationPostTransactionScript $script
     */
    #[\JMS\Serializer\Annotation\SerializedName('script')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationPostTransactionScript|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?OrchestrationPostTransactionScript $script = null;

    /**
     *
     * @var ?\DateTime $timestamp
     */
    #[\JMS\Serializer\Annotation\SerializedName('timestamp')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $timestamp = null;

    /**
     * @param  array<string, string>  $metadata
     * @param  ?array<Posting>  $postings
     * @param  ?string  $reference
     * @param  ?OrchestrationPostTransactionScript  $script
     * @param  ?\DateTime  $timestamp
     */
    public function __construct(array $metadata, ?array $postings = null, ?string $reference = null, ?OrchestrationPostTransactionScript $script = null, ?\DateTime $timestamp = null)
    {
        $this->metadata = $metadata;
        $this->postings = $postings;
        $this->reference = $reference;
        $this->script = $script;
        $this->timestamp = $timestamp;
    }
}