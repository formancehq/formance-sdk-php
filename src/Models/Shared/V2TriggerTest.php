<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2TriggerTest
{
    #[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\Filter')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Filter $filter = null;

    /**
     * $variables
     *
     * @var ?array<string, \formance\stack\Models\Shared\Variables> $variables
     */
    #[\JMS\Serializer\Annotation\SerializedName('variables')]
    #[\JMS\Serializer\Annotation\Type('array<string, formance\stack\Models\Shared\Variables>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $variables = null;

    public function __construct()
    {
        $this->filter = null;
        $this->variables = null;
    }
}