<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Config
{
    /**
     *
     * @var LedgerStorage $storage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('storage')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\LedgerStorage')]
    public LedgerStorage $storage;

    /**
     * @param  LedgerStorage  $storage
     * @phpstan-pure
     */
    public function __construct(LedgerStorage $storage)
    {
        $this->storage = $storage;
    }
}