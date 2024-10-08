<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class LedgerInfo
{
    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?Storage $storage
     */
    #[\JMS\Serializer\Annotation\SerializedName('storage')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\Storage|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Storage $storage = null;

    /**
     * @param  ?string  $name
     * @param  ?Storage  $storage
     */
    public function __construct(?string $name = null, ?Storage $storage = null)
    {
        $this->name = $name;
        $this->storage = $storage;
    }
}