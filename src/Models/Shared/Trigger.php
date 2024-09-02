<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Trigger
{
    /**
     *
     * @var \DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public \DateTime $createdAt;

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
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $filter = null;

    /**
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    /**
     * $vars
     *
     * @var ?array<string, mixed> $vars
     */
    #[\JMS\Serializer\Annotation\SerializedName('vars')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $vars = null;

    /**
     *
     * @var string $workflowID
     */
    #[\JMS\Serializer\Annotation\SerializedName('workflowID')]
    public string $workflowID;

    /**
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $event
     * @param  ?string  $id
     * @param  ?string  $workflowID
     * @param  ?string  $filter
     * @param  ?string  $name
     * @param  ?array<string, mixed>  $vars
     */
    public function __construct(?\DateTime $createdAt = null, ?string $event = null, ?string $id = null, ?string $workflowID = null, ?string $filter = null, ?string $name = null, ?array $vars = null)
    {
        $this->createdAt = $createdAt;
        $this->event = $event;
        $this->id = $id;
        $this->workflowID = $workflowID;
        $this->filter = $filter;
        $this->name = $name;
        $this->vars = $vars;
    }
}