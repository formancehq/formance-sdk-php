<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class GetHoldResponse
{
    /**
     *
     * @var ExpandedDebitHold $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\ExpandedDebitHold')]
    public ExpandedDebitHold $data;

    /**
     * @param  ExpandedDebitHold  $data
     * @phpstan-pure
     */
    public function __construct(ExpandedDebitHold $data)
    {
        $this->data = $data;
    }
}