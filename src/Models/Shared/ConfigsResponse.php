<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ConfigsResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ConfigsResponseCursor')]
    public ConfigsResponseCursor $cursor;

    public function __construct()
    {
        $this->cursor = new \formance\stack\Models\Shared\ConfigsResponseCursor();
    }
}