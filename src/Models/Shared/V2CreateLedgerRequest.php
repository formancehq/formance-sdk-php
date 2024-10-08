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
    #[\JMS\Serializer\Annotation\SerializedName('bucket')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $bucket = null;

    /**
     * $metadata
     *
     * @var ?array<string, string> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
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