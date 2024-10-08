<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ClientSecret
{
    /**
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $lastDigits
     */
    #[\JMS\Serializer\Annotation\SerializedName('lastDigits')]
    public string $lastDigits;

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
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * @param  string  $id
     * @param  string  $lastDigits
     * @param  string  $name
     * @param  ?array<string, mixed>  $metadata
     */
    public function __construct(string $id, string $lastDigits, string $name, ?array $metadata = null)
    {
        $this->id = $id;
        $this->lastDigits = $lastDigits;
        $this->name = $name;
        $this->metadata = $metadata;
    }
}