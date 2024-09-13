<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class MappingResponse
{
    /**
     *
     * @var ?Mapping $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\Mapping|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Mapping $data = null;

    /**
     * @param  ?Mapping  $data
     */
    public function __construct(?Mapping $data = null)
    {
        $this->data = $data;
    }
}