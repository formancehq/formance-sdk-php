<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class AssetHolder
{
    /**
     * $assets
     *
     * @var array<string, \Brick\Math\BigInteger> $assets
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('assets')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, \Brick\Math\BigInteger>')]
    public array $assets;

    /**
     * @param  array<string, \Brick\Math\BigInteger>  $assets
     */
    public function __construct(array $assets)
    {
        $this->assets = $assets;
    }
}