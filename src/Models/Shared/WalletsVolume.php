<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class WalletsVolume
{
    #[\JMS\Serializer\Annotation\SerializedName('balance')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $balance;

    #[\JMS\Serializer\Annotation\SerializedName('input')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $input;

    #[\JMS\Serializer\Annotation\SerializedName('output')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $output;

    public function __construct()
    {
        $this->balance = 0;
        $this->input = 0;
        $this->output = 0;
    }
}