<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2CreateTriggerResponse
{
    /**
     *
     * @var V2Trigger $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2Trigger')]
    public V2Trigger $data;

    /**
     * @param  V2Trigger  $data
     */
    public function __construct(V2Trigger $data)
    {
        $this->data = $data;
    }
}