<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TaskWiseDescriptor
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
     * @var ?int $profileID
     */
    #[\JMS\Serializer\Annotation\SerializedName('profileID')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $profileID = null;

    /**
     * @param  ?string  $key
     * @param  ?string  $name
     * @param  ?int  $profileID
     */
    public function __construct(?string $key = null, ?string $name = null, ?int $profileID = null)
    {
        $this->key = $key;
        $this->name = $name;
        $this->profileID = $profileID;
    }
}