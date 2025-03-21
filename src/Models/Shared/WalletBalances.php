<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class WalletBalances
{
    /**
     *
     * @var AssetHolder $main
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('main')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\AssetHolder')]
    public AssetHolder $main;

    /**
     * @param  AssetHolder  $main
     * @phpstan-pure
     */
    public function __construct(AssetHolder $main)
    {
        $this->main = $main;
    }
}