<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3PaymentsCursorResponse
{
    /**
     *
     * @var V3PaymentsCursorResponseCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V3PaymentsCursorResponseCursor')]
    public V3PaymentsCursorResponseCursor $cursor;

    /**
     * @param  V3PaymentsCursorResponseCursor  $cursor
     * @phpstan-pure
     */
    public function __construct(V3PaymentsCursorResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}