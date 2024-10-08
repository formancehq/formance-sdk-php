<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2TriggerTest
{
    /**
     *
     * @var ?Filter $filter
     */
    #[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\Filter|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Filter $filter = null;

    /**
     * $variables
     *
     * @var ?array<string, Variables> $variables
     */
    #[\JMS\Serializer\Annotation\SerializedName('variables')]
    #[\JMS\Serializer\Annotation\Type('array<string, \formance\stack\Models\Shared\Variables>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $variables = null;

    /**
     * @param  ?Filter  $filter
     * @param  ?array<string, Variables>  $variables
     */
    public function __construct(?Filter $filter = null, ?array $variables = null)
    {
        $this->filter = $filter;
        $this->variables = $variables;
    }
}