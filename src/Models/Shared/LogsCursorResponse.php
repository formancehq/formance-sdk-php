<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class LogsCursorResponse
{
    /**
     *
     * @var LogsCursorResponseCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\LogsCursorResponseCursor')]
    public LogsCursorResponseCursor $cursor;

    /**
     * @param  LogsCursorResponseCursor  $cursor
     * @phpstan-pure
     */
    public function __construct(LogsCursorResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}