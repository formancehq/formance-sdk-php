<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ActivityGetAccount
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $ledger
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ledger')]
    public string $ledger;

    /**
     * @param  string  $id
     * @param  string  $ledger
     * @phpstan-pure
     */
    public function __construct(string $id, string $ledger)
    {
        $this->id = $id;
        $this->ledger = $ledger;
    }
}