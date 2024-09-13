<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ActivityDebitWalletOutput
{
    /**
     *
     * @var V2Hold $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2Hold')]
    public V2Hold $data;

    /**
     * @param  V2Hold  $data
     */
    public function __construct(V2Hold $data)
    {
        $this->data = $data;
    }
}