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
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?int $profileID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('profileID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $profileID = null;

    /**
     * @param  ?string  $key
     * @param  ?string  $name
     * @param  ?int  $profileID
     * @phpstan-pure
     */
    public function __construct(?string $key = null, ?string $name = null, ?int $profileID = null)
    {
        $this->key = $key;
        $this->name = $name;
        $this->profileID = $profileID;
    }
}