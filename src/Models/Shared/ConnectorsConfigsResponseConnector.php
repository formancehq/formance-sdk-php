<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ConnectorsConfigsResponseConnector
{
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\Key')]
    public Key $key;

    public function __construct()
    {
        $this->key = new \formance\stack\Models\Shared\Key();
    }
}