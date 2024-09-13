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
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * $postCommitVolumes
     *
     * @var ?array<string, array<string, Volume>> $postCommitVolumes
     */
    #[\JMS\Serializer\Annotation\SerializedName('postCommitVolumes')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string, \formance\stack\Models\Shared\Volume>>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $postCommitVolumes = null;

    /**
     * $postings
     *
     * @var array<Posting> $postings
     */
    #[\JMS\Serializer\Annotation\SerializedName('postings')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\Posting>')]
    public array $postings;

    /**
     * $preCommitVolumes
     *
     * @var ?array<string, array<string, Volume>> $preCommitVolumes
     */
    #[\JMS\Serializer\Annotation\SerializedName('preCommitVolumes')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string, \formance\stack\Models\Shared\Volume>>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $preCommitVolumes = null;

    /**
     *
     * @var ?string $reference
     */
    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     *
     * @var \DateTime $timestamp
     */
    #[\JMS\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     *
     * @var int $txid
     */
    #[\JMS\Serializer\Annotation\SerializedName('txid')]
    public int $txid;

    /**
     * @param  array<Posting>  $postings
     * @param  \DateTime  $timestamp
     * @param  int  $txid
     * @param  ?array<string, array<string, Volume>>  $postCommitVolumes
     * @param  ?array<string, array<string, Volume>>  $preCommitVolumes
     * @param  ?string  $reference
     * @param  ?array<string, mixed>  $metadata
     */
    public function __construct(array $postings, \DateTime $timestamp, int $txid, ?array $postCommitVolumes = null, ?array $preCommitVolumes = null, ?string $reference = null, ?array $metadata = null)
    {
        $this->postings = $postings;
        $this->timestamp = $timestamp;
        $this->txid = $txid;
        $this->postCommitVolumes = $postCommitVolumes;
        $this->preCommitVolumes = $preCommitVolumes;
        $this->reference = $reference;
        $this->metadata = $metadata;
    }
}