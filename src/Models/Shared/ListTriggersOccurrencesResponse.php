<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ListTriggersOccurrencesResponse
{
    /**
     * $data
     *
     * @var array<\formance\stack\Models\Shared\TriggerOccurrence> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\TriggerOccurrence>')]
    public array $data;

    public function __construct()
    {
        $this->data = [];
    }
}