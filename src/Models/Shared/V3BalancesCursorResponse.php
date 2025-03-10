<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3BalancesCursorResponse
{
    /**
     *
     * @var V3BalancesCursorResponseCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V3BalancesCursorResponseCursor')]
    public V3BalancesCursorResponseCursor $cursor;

    /**
     * @param  V3BalancesCursorResponseCursor  $cursor
     * @phpstan-pure
     */
    public function __construct(V3BalancesCursorResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}