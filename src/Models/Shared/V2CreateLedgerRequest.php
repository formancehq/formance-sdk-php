<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2CreateLedgerRequest
{
    /**
     *
     * @var ?string $bucket
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bucket')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $bucket = null;

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
     * @param  ?string  $bucket
     * @param  ?array<string, string>  $metadata
     */
    public function __construct(?string $bucket = null, ?array $metadata = null)
    {
        $this->bucket = $bucket;
        $this->metadata = $metadata;
    }
}