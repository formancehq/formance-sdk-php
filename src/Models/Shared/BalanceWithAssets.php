<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class BalanceWithAssets
{
    /**
     * $assets
     *
     * @var array<string, int> $assets
     */
    #[\JMS\Serializer\Annotation\SerializedName('assets')]
    #[\JMS\Serializer\Annotation\Type('array<string, int>')]
    public array $assets;

    /**
     *
     * @var ?\DateTime $expiresAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('expiresAt')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $expiresAt = null;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?int $priority
     */
    #[\JMS\Serializer\Annotation\SerializedName('priority')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $priority = null;

    /**
     * @param  array<string, int>  $assets
     * @param  string  $name
     * @param  ?int  $priority
     * @param  ?\DateTime  $expiresAt
     */
    public function __construct(array $assets, string $name, ?int $priority = null, ?\DateTime $expiresAt = null)
    {
        $this->assets = $assets;
        $this->name = $name;
        $this->priority = $priority;
        $this->expiresAt = $expiresAt;
    }
}