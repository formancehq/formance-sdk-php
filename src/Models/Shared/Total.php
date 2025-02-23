<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Total
{
    /**
     *
     * @var ?string $relation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('relation')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $relation = null;

    /**
     *
     * @var ?int $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $value = null;

    /**
     * @param  ?string  $relation
     * @param  ?int  $value
     * @phpstan-pure
     */
    public function __construct(?string $relation = null, ?int $value = null)
    {
        $this->relation = $relation;
        $this->value = $value;
    }
}