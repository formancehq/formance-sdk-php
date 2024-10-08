<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class AccountsCursor
{
    /**
     *
     * @var Cursor $cursor
     */
    #[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\Cursor')]
    public Cursor $cursor;

    /**
     * @param  Cursor  $cursor
     */
    public function __construct(Cursor $cursor)
    {
        $this->cursor = $cursor;
    }
}