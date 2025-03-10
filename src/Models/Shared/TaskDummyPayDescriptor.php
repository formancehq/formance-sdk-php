<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TaskDummyPayDescriptor
{
    /**
     *
     * @var ?string $fileName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('fileName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $fileName = null;

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
     * @param  ?string  $fileName
     * @param  ?string  $key
     * @param  ?string  $name
     * @phpstan-pure
     */
    public function __construct(?string $fileName = null, ?string $key = null, ?string $name = null)
    {
        $this->fileName = $fileName;
        $this->key = $key;
        $this->name = $name;
    }
}