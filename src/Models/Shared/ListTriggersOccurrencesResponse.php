<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ListTriggersOccurrencesResponse
{
    /**
     * $data
     *
     * @var array<TriggerOccurrence> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\TriggerOccurrence>')]
    public array $data;

    /**
     * @param  array<TriggerOccurrence>  $data
     * @phpstan-pure
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}