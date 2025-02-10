<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2StageSendSourceWallet
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var ?string $balance
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balance')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $balance = null;

    /**
     * @param  string  $id
     * @param  ?string  $balance
     * @phpstan-pure
     */
    public function __construct(string $id, ?string $balance = null)
    {
        $this->id = $id;
        $this->balance = $balance;
    }
}