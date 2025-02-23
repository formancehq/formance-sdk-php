<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3GetAccountResponse
{
    /**
     *
     * @var V3Account $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V3Account')]
    public V3Account $data;

    /**
     * @param  V3Account  $data
     * @phpstan-pure
     */
    public function __construct(V3Account $data)
    {
        $this->data = $data;
    }
}