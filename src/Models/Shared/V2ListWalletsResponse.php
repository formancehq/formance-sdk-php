<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ListWalletsResponse
{
    /**
     *
     * @var V2ListWalletsResponseCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2ListWalletsResponseCursor')]
    public V2ListWalletsResponseCursor $cursor;

    /**
     * @param  V2ListWalletsResponseCursor  $cursor
     */
    public function __construct(V2ListWalletsResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}