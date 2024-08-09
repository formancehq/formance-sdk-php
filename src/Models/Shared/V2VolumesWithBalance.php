<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2VolumesWithBalance
{
    #[\JMS\Serializer\Annotation\SerializedName('account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $account;

    #[\JMS\Serializer\Annotation\SerializedName('asset')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $asset;

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
        $this->account = '';
        $this->asset = '';
        $this->balance = 0;
        $this->input = 0;
        $this->output = 0;
    }
}