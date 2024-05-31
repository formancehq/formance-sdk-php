<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TriggerOccurrence
{
    #[\JMS\Serializer\Annotation\SerializedName('date')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $date;

    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $error = null;

    /**
     * $event
     *
     * @var array<string, mixed> $event
     */
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    public array $event;

    #[\JMS\Serializer\Annotation\SerializedName('triggerID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $triggerID;

    #[\JMS\Serializer\Annotation\SerializedName('workflowInstance')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\WorkflowInstance')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?WorkflowInstance $workflowInstance = null;

    #[\JMS\Serializer\Annotation\SerializedName('workflowInstanceID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $workflowInstanceID = null;

    public function __construct()
    {
        $this->date = new \DateTime();
        $this->error = null;
        $this->event = [];
        $this->triggerID = '';
        $this->workflowInstance = null;
        $this->workflowInstanceID = null;
    }
}