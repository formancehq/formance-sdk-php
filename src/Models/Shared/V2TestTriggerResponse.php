<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2TestTriggerResponse
{
    /**
     *
     * @var V2TriggerTest $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2TriggerTest')]
    public V2TriggerTest $data;

    /**
     * @param  V2TriggerTest  $data
     */
    public function __construct(V2TriggerTest $data)
    {
        $this->data = $data;
    }
}