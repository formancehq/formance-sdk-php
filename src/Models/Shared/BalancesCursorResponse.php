<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class BalancesCursorResponse
{
    /**
     *
     * @var BalancesCursorResponseCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\BalancesCursorResponseCursor')]
    public BalancesCursorResponseCursor $cursor;

    /**
     * @param  BalancesCursorResponseCursor  $cursor
     * @phpstan-pure
     */
    public function __construct(BalancesCursorResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}