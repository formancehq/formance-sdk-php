<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class LedgerStorage
{
    /**
     *
     * @var string $driver
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('driver')]
    public string $driver;

    /**
     * $ledgers
     *
     * @var array<string> $ledgers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ledgers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $ledgers;

    /**
     * @param  string  $driver
     * @param  array<string>  $ledgers
     * @phpstan-pure
     */
    public function __construct(string $driver, array $ledgers)
    {
        $this->driver = $driver;
        $this->ledgers = $ledgers;
    }
}