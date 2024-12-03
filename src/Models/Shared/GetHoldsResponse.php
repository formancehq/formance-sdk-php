<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class GetHoldsResponse
{
    /**
     *
     * @var GetHoldsResponseCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\GetHoldsResponseCursor')]
    public GetHoldsResponseCursor $cursor;

    /**
     * @param  GetHoldsResponseCursor  $cursor
     */
    public function __construct(GetHoldsResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}