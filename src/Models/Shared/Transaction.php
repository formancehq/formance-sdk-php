<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Transaction
{
    /**
     * $metadata
     *
     * @var ?array<string, mixed> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;

    /**
     * $postCommitVolumes
     *
     * @var ?array<string, array<string, \formance\stack\Models\Shared\Volume>> $postCommitVolumes
     */
    #[\JMS\Serializer\Annotation\SerializedName('postCommitVolumes')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string, formance\stack\Models\Shared\Volume>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $postCommitVolumes = null;

    /**
     * $postings
     *
     * @var array<\formance\stack\Models\Shared\Posting> $postings
     */
    #[\JMS\Serializer\Annotation\SerializedName('postings')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\Posting>')]
    public array $postings;

    /**
     * $preCommitVolumes
     *
     * @var ?array<string, array<string, \formance\stack\Models\Shared\Volume>> $preCommitVolumes
     */
    #[\JMS\Serializer\Annotation\SerializedName('preCommitVolumes')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string, formance\stack\Models\Shared\Volume>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $preCommitVolumes = null;

    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reference = null;

    #[\JMS\Serializer\Annotation\SerializedName('timestamp')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $timestamp;

    #[\JMS\Serializer\Annotation\SerializedName('txid')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $txid;

    public function __construct()
    {
        $this->metadata = null;
        $this->postCommitVolumes = null;
        $this->postings = [];
        $this->preCommitVolumes = null;
        $this->reference = null;
        $this->timestamp = new \DateTime();
        $this->txid = 0;
    }
}