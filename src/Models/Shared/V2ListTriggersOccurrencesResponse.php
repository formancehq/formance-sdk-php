<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ListTriggersOccurrencesResponse
{
    /**
     *
     * @var V2ListTriggersOccurrencesResponseCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2ListTriggersOccurrencesResponseCursor')]
    public V2ListTriggersOccurrencesResponseCursor $cursor;

    /**
     * @param  V2ListTriggersOccurrencesResponseCursor  $cursor
     * @phpstan-pure
     */
    public function __construct(V2ListTriggersOccurrencesResponseCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}