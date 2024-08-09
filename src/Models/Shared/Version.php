<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Version
{
    #[\JMS\Serializer\Annotation\SerializedName('health')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $health;

    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;

    #[\JMS\Serializer\Annotation\SerializedName('version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $version;

    public function __construct()
    {
        $this->health = false;
        $this->name = '';
        $this->version = '';
    }
}