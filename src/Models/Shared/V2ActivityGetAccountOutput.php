<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ActivityGetAccountOutput
{
    /**
     *
     * @var V2Account $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2Account')]
    public V2Account $data;

    /**
     * @param  V2Account  $data
     */
    public function __construct(V2Account $data)
    {
        $this->data = $data;
    }
}