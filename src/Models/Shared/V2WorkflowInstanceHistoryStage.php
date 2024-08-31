<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2WorkflowInstanceHistoryStage
{
    /**
     *
     * @var int $attempt
     */
    #[\JMS\Serializer\Annotation\SerializedName('attempt')]
    public int $attempt;

    /**
     *
     * @var ?string $error
     */
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $error = null;

    /**
     *
     * @var V2WorkflowInstanceHistoryStageInput $input
     */
    #[\JMS\Serializer\Annotation\SerializedName('input')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2WorkflowInstanceHistoryStageInput')]
    public V2WorkflowInstanceHistoryStageInput $input;

    /**
     *
     * @var ?string $lastFailure
     */
    #[\JMS\Serializer\Annotation\SerializedName('lastFailure')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $lastFailure = null;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?\DateTime $nextExecution
     */
    #[\JMS\Serializer\Annotation\SerializedName('nextExecution')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $nextExecution = null;

    /**
     *
     * @var ?V2WorkflowInstanceHistoryStageOutput $output
     */
    #[\JMS\Serializer\Annotation\SerializedName('output')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2WorkflowInstanceHistoryStageOutput|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2WorkflowInstanceHistoryStageOutput $output = null;

    /**
     *
     * @var \DateTime $startedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('startedAt')]
    public \DateTime $startedAt;

    /**
     *
     * @var bool $terminated
     */
    #[\JMS\Serializer\Annotation\SerializedName('terminated')]
    public bool $terminated;

    /**
     *
     * @var ?\DateTime $terminatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('terminatedAt')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $terminatedAt = null;

    /**
     * @param  ?int  $attempt
     * @param  ?V2WorkflowInstanceHistoryStageInput  $input
     * @param  ?string  $name
     * @param  ?\DateTime  $startedAt
     * @param  ?bool  $terminated
     * @param  ?string  $error
     * @param  ?string  $lastFailure
     * @param  ?\DateTime  $nextExecution
     * @param  ?V2WorkflowInstanceHistoryStageOutput  $output
     * @param  ?\DateTime  $terminatedAt
     */
    public function __construct(?int $attempt = null, ?V2WorkflowInstanceHistoryStageInput $input = null, ?string $name = null, ?\DateTime $startedAt = null, ?bool $terminated = null, ?string $error = null, ?string $lastFailure = null, ?\DateTime $nextExecution = null, ?V2WorkflowInstanceHistoryStageOutput $output = null, ?\DateTime $terminatedAt = null)
    {
        $this->attempt = $attempt;
        $this->input = $input;
        $this->name = $name;
        $this->startedAt = $startedAt;
        $this->terminated = $terminated;
        $this->error = $error;
        $this->lastFailure = $lastFailure;
        $this->nextExecution = $nextExecution;
        $this->output = $output;
        $this->terminatedAt = $terminatedAt;
    }
}