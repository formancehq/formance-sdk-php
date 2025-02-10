<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class PoolRequest
{
    /**
     * $accountIDs
     *
     * @var array<string> $accountIDs
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountIDs')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $accountIDs;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * @param  array<string>  $accountIDs
     * @param  string  $name
     * @phpstan-pure
     */
    public function __construct(array $accountIDs, string $name)
    {
        $this->accountIDs = $accountIDs;
        $this->name = $name;
    }
}