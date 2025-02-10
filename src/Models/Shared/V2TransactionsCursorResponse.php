<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2TransactionsCursorResponse
{
    /**
     *
     * @var V2TransactionsCursorResponseCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2TransactionsCursorResponseCursor')]
    public V2TransactionsCursorResponseCursor $cursor;

    /**
     * @param  V2TransactionsCursorResponseCursor  $cursor
     * @phpstan-pure
     */
    public function __construct(V2TransactionsCursorResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}