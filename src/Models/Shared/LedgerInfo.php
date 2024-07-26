<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class LedgerInfo
{
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    #[\JMS\Serializer\Annotation\SerializedName('storage')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\Storage')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Storage $storage = null;

    public function __construct()
    {
        $this->name = null;
        $this->storage = null;
    }
}