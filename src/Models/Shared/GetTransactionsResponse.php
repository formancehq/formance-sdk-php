<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class GetTransactionsResponse
{
    /**
     *
     * @var GetTransactionsResponseCursor $cursor
     */
    #[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\GetTransactionsResponseCursor')]
    public GetTransactionsResponseCursor $cursor;

    /**
     * @param  GetTransactionsResponseCursor  $cursor
     */
    public function __construct(GetTransactionsResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}