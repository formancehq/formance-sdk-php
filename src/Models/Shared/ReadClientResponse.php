<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ReadClientResponse
{
    /**
     *
     * @var ?Client $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\Client|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Client $data = null;

    /**
     * @param  ?Client  $data
     */
    public function __construct(?Client $data = null)
    {
        $this->data = $data;
    }
}