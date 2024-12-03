<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TransferRequest
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
     *
     * @var string $destination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('destination')]
    public string $destination;

    /**
     *
     * @var ?string $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $source = null;

    /**
     * @param  \Brick\Math\BigInteger  $amount
     * @param  string  $asset
     * @param  string  $destination
     * @param  ?string  $source
     */
    public function __construct(\Brick\Math\BigInteger $amount, string $asset, string $destination, ?string $source = null)
    {
        $this->amount = $amount;
        $this->asset = $asset;
        $this->destination = $destination;
        $this->source = $source;
    }
}