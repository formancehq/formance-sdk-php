<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2VolumesWithBalanceCursorResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\V2VolumesWithBalanceCursorResponseCursor')]
    public V2VolumesWithBalanceCursorResponseCursor $cursor;

    public function __construct()
    {
        $this->cursor = new \formance\stack\Models\Shared\V2VolumesWithBalanceCursorResponseCursor();
    }
}