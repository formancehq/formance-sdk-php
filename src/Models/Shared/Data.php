<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Data
{
    #[\JMS\Serializer\Annotation\SerializedName('connectorID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $connectorID;

    public function __construct()
    {
        $this->connectorID = '';
    }
}