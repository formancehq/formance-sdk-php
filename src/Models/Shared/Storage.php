<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Storage
{
    /**
     * $migrations
     *
     * @var ?array<MigrationInfo> $migrations
     */
    #[\JMS\Serializer\Annotation\SerializedName('migrations')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\MigrationInfo>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $migrations = null;

    /**
     * @param  ?array<MigrationInfo>  $migrations
     */
    public function __construct(?array $migrations = null)
    {
        $this->migrations = $migrations;
    }
}