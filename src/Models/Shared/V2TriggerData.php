<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2TriggerData
{
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $event;

    #[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $filter = null;

    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    /**
     * $vars
     *
     * @var ?array<string, mixed> $vars
     */
    #[\JMS\Serializer\Annotation\SerializedName('vars')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $vars = null;

    #[\JMS\Serializer\Annotation\SerializedName('workflowID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workflowID;

    public function __construct()
    {
        $this->event = '';
        $this->filter = null;
        $this->name = null;
        $this->vars = null;
        $this->workflowID = '';
    }
}