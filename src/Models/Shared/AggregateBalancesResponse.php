<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class AggregateBalancesResponse
{
    /**
     * $data
     *
     * @var array<string, int> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, int>')]
    public array $data;

    /**
     * @param  array<string, int>  $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}