<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2LedgerInfo
{
    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    /**
     *
     * @var ?V2LedgerInfoStorage $storage
     */
    #[\JMS\Serializer\Annotation\SerializedName('storage')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2LedgerInfoStorage|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2LedgerInfoStorage $storage = null;

    /**
     * @param  ?string  $name
     * @param  ?V2LedgerInfoStorage  $storage
     */
    public function __construct(?string $name = null, ?V2LedgerInfoStorage $storage = null)
    {
        $this->name = $name;
        $this->storage = $storage;
    }
}