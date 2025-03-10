<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ReverseTransferInitiationRequest
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
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     *
     * @var string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    public string $reference;

    /**
     * $metadata
     *
     * @var ?array<string, string> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    public ?array $metadata;

    /**
     * @param  \Brick\Math\BigInteger  $amount
     * @param  string  $asset
     * @param  string  $description
     * @param  string  $reference
     * @param  ?array<string, string>  $metadata
     * @phpstan-pure
     */
    public function __construct(\Brick\Math\BigInteger $amount, string $asset, string $description, string $reference, ?array $metadata = null)
    {
        $this->amount = $amount;
        $this->asset = $asset;
        $this->description = $description;
        $this->reference = $reference;
        $this->metadata = $metadata;
    }
}