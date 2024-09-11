<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2TriggerData
{
    /**
     *
     * @var string $event
     */
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    public string $event;

    /**
     *
     * @var ?string $filter
     */
    #[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $filter = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * $vars
     *
     * @var ?array<string, mixed> $vars
     */
    #[\JMS\Serializer\Annotation\SerializedName('vars')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $vars = null;

    /**
     *
     * @var string $workflowID
     */
    #[\JMS\Serializer\Annotation\SerializedName('workflowID')]
    public string $workflowID;

    /**
     * @param  string  $event
     * @param  string  $workflowID
     * @param  ?string  $filter
     * @param  ?string  $name
     * @param  ?array<string, mixed>  $vars
     */
    public function __construct(string $event, string $workflowID, ?string $filter = null, ?string $name = null, ?array $vars = null)
    {
        $this->event = $event;
        $this->workflowID = $workflowID;
        $this->filter = $filter;
        $this->name = $name;
        $this->vars = $vars;
    }
}