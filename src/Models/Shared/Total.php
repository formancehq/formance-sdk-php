<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Total
{
    #[\JMS\Serializer\Annotation\SerializedName('relation')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $relation = null;

    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $value = null;

    public function __construct()
    {
        $this->relation = null;
        $this->value = null;
    }
}