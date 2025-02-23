<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2LogsCursorResponse
{
    /**
     *
     * @var V2LogsCursorResponseCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2LogsCursorResponseCursor')]
    public V2LogsCursorResponseCursor $cursor;

    /**
     * @param  V2LogsCursorResponseCursor  $cursor
     * @phpstan-pure
     */
    public function __construct(V2LogsCursorResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}