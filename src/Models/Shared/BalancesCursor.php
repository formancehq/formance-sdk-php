<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


/** BalancesCursor - OK */
class BalancesCursor
{
    /**
     *
     * @var BalancesCursorCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\BalancesCursorCursor')]
    public BalancesCursorCursor $cursor;

    /**
     * @param  BalancesCursorCursor  $cursor
     * @phpstan-pure
     */
    public function __construct(BalancesCursorCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}