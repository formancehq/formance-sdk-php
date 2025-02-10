<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class AttemptResponse
{
    /**
     *
     * @var Attempt $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\Attempt')]
    public Attempt $data;

    /**
     * @param  Attempt  $data
     * @phpstan-pure
     */
    public function __construct(Attempt $data)
    {
        $this->data = $data;
    }
}