<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


/** BankAccountsCursor - OK */
class BankAccountsCursor
{
    /**
     *
     * @var BankAccountsCursorCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\BankAccountsCursorCursor')]
    public BankAccountsCursorCursor $cursor;

    /**
     * @param  BankAccountsCursorCursor  $cursor
     * @phpstan-pure
     */
    public function __construct(BankAccountsCursorCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}