<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class AccountsCursorResponse
{
    /**
     *
     * @var AccountsCursorResponseCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\AccountsCursorResponseCursor')]
    public AccountsCursorResponseCursor $cursor;

    /**
     * @param  AccountsCursorResponseCursor  $cursor
     */
    public function __construct(AccountsCursorResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}