<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Trigger
{
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;

    #[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $event;

    #[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $filter = null;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

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
        $this->createdAt = new \DateTime();
        $this->event = '';
        $this->filter = null;
        $this->id = '';
        $this->name = null;
        $this->vars = null;
        $this->workflowID = '';
    }
}