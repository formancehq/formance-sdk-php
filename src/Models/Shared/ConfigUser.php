<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ConfigUser
{
    /**
     *
     * @var string $endpoint
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('endpoint')]
    public string $endpoint;

    /**
     * $eventTypes
     *
     * @var array<string> $eventTypes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('eventTypes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $eventTypes;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $secret
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('secret')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $secret = null;

    /**
     * @param  string  $endpoint
     * @param  array<string>  $eventTypes
     * @param  ?string  $name
     * @param  ?string  $secret
     * @phpstan-pure
     */
    public function __construct(string $endpoint, array $eventTypes, ?string $name = null, ?string $secret = null)
    {
        $this->endpoint = $endpoint;
        $this->eventTypes = $eventTypes;
        $this->name = $name;
        $this->secret = $secret;
    }
}