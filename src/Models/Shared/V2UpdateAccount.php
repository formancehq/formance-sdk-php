<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2UpdateAccount
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
     * $metadata
     *
     * @var array<string, string> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>')]
    public array $metadata;

    /**
     * @param  string  $id
     * @param  string  $ledger
     * @param  array<string, string>  $metadata
     */
    public function __construct(string $id, string $ledger, array $metadata)
    {
        $this->id = $id;
        $this->ledger = $ledger;
        $this->metadata = $metadata;
    }
}