<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2LedgerListResponse
{
    /**
     *
     * @var V2LedgerListResponseCursor $cursor
     */
    #[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2LedgerListResponseCursor')]
    public V2LedgerListResponseCursor $cursor;

    /**
     * @param  V2LedgerListResponseCursor  $cursor
     */
    public function __construct(V2LedgerListResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}