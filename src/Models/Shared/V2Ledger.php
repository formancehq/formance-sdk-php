<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2Ledger
{
    /**
     *
     * @var \DateTime $addedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('addedAt')]
    public \DateTime $addedAt;

    /**
     *
     * @var string $bucket
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bucket')]
    public string $bucket;

    /**
     * $metadata
     *
     * @var ?array<string, string> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * @param  \DateTime  $addedAt
     * @param  string  $bucket
     * @param  string  $name
     * @param  ?array<string, string>  $metadata
     */
    public function __construct(\DateTime $addedAt, string $bucket, string $name, ?array $metadata = null)
    {
        $this->addedAt = $addedAt;
        $this->bucket = $bucket;
        $this->name = $name;
        $this->metadata = $metadata;
    }
}