<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TaskMangoPayDescriptor
{
    /**
     *
     * @var ?string $key
     */
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $key = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    /**
     *
     * @var ?string $userID
     */
    #[\JMS\Serializer\Annotation\SerializedName('userID')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $userID = null;

    /**
     * @param  ?string  $key
     * @param  ?string  $name
     * @param  ?string  $userID
     */
    public function __construct(?string $key = null, ?string $name = null, ?string $userID = null)
    {
        $this->key = $key;
        $this->name = $name;
        $this->userID = $userID;
    }
}