<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Account
{
    /**
     *
     * @var string $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    public string $address;

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
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     * @param  string  $address
     * @param  ?array<string, mixed>  $metadata
     * @param  ?string  $type
     */
    public function __construct(string $address, ?array $metadata = null, ?string $type = null)
    {
        $this->address = $address;
        $this->metadata = $metadata;
        $this->type = $type;
    }
}