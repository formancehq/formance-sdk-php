<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ActivityGetAccountOutput
{
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\V2Account')]
    public V2Account $data;

    public function __construct()
    {
        $this->data = new \formance\stack\Models\Shared\V2Account();
    }
}