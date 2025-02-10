<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3PoolBalance
{
    /**
     *
     * @var \Brick\Math\BigInteger $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public \Brick\Math\BigInteger $amount;

    /**
     *
     * @var string $asset
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('asset')]
    public string $asset;

    /**
     * @param  \Brick\Math\BigInteger  $amount
     * @param  string  $asset
     * @phpstan-pure
     */
    public function __construct(\Brick\Math\BigInteger $amount, string $asset)
    {
        $this->amount = $amount;
        $this->asset = $asset;
    }
}