<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2LedgerInfoStorage
{
    /**
     * $migrations
     *
     * @var ?array<V2MigrationInfo> $migrations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('migrations')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\V2MigrationInfo>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $migrations = null;

    /**
     * @param  ?array<V2MigrationInfo>  $migrations
     */
    public function __construct(?array $migrations = null)
    {
        $this->migrations = $migrations;
    }
}