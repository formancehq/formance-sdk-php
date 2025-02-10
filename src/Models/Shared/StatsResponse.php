<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class StatsResponse
{
    /**
     *
     * @var Stats $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\Stats')]
    public Stats $data;

    /**
     * @param  Stats  $data
     * @phpstan-pure
     */
    public function __construct(Stats $data)
    {
        $this->data = $data;
    }
}