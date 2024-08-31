<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Secret
{
    /**
     *
     * @var string $clear
     */
    #[\JMS\Serializer\Annotation\SerializedName('clear')]
    public string $clear;

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
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * @param  ?string  $clear
     * @param  ?string  $id
     * @param  ?string  $lastDigits
     * @param  ?string  $name
     * @param  ?array<string, mixed>  $metadata
     */
    public function __construct(?string $clear = null, ?string $id = null, ?string $lastDigits = null, ?string $name = null, ?array $metadata = null)
    {
        $this->clear = $clear;
        $this->id = $id;
        $this->lastDigits = $lastDigits;
        $this->name = $name;
        $this->metadata = $metadata;
    }
}