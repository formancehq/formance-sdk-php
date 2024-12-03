<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ActivityGetWalletOutput
{
    /**
     *
     * @var V2WalletWithBalances $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2WalletWithBalances')]
    public V2WalletWithBalances $data;

    /**
     * @param  V2WalletWithBalances  $data
     */
    public function __construct(V2WalletWithBalances $data)
    {
        $this->data = $data;
    }
}