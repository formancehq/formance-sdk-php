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
    #[\JMS\Serializer\Annotation\SerializedName('endpoint')]
    public string $endpoint;

    /**
     * $eventTypes
     *
     * @var array<string> $eventTypes
     */
    #[\JMS\Serializer\Annotation\SerializedName('eventTypes')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $eventTypes;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $secret
     */
    #[\JMS\Serializer\Annotation\SerializedName('secret')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $secret = null;

    /**
     * @param  string  $endpoint
     * @param  array<string>  $eventTypes
     * @param  ?string  $name
     * @param  ?string  $secret
     */
    public function __construct(string $endpoint, array $eventTypes, ?string $name = null, ?string $secret = null)
    {
        $this->endpoint = $endpoint;
        $this->eventTypes = $eventTypes;
        $this->name = $name;
        $this->secret = $secret;
    }
}