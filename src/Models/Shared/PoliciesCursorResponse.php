<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class PoliciesCursorResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\PoliciesCursorResponseCursor')]
    public PoliciesCursorResponseCursor $cursor;

    public function __construct()
    {
        $this->cursor = new \formance\stack\Models\Shared\PoliciesCursorResponseCursor();
    }
}