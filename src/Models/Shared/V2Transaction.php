<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2Transaction
{
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;

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
     * @var array<\formance\stack\Models\Shared\V2Posting> $postings
     */
    #[\JMS\Serializer\Annotation\SerializedName('postings')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\V2Posting>')]
    public array $postings;

    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reference = null;

    #[\JMS\Serializer\Annotation\SerializedName('reverted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $reverted;

    #[\JMS\Serializer\Annotation\SerializedName('timestamp')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $timestamp;

    public function __construct()
    {
        $this->id = 0;
        $this->metadata = [];
        $this->postings = [];
        $this->reference = null;
        $this->reverted = false;
        $this->timestamp = new \DateTime();
    }
}