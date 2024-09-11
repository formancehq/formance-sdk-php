<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class StageWaitEvent
{
    /**
     *
     * @var string $event
     */
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    public string $event;

    /**
     * @param  string  $event
     */
    public function __construct(string $event)
    {
        $this->event = $event;
    }
}