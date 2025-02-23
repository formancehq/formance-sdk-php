<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class WorkflowInstanceHistoryStage
{
    /**
     *
     * @var int $attempt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attempt')]
    public int $attempt;

    /**
     *
     * @var WorkflowInstanceHistoryStageInput $input
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('input')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\WorkflowInstanceHistoryStageInput')]
    public WorkflowInstanceHistoryStageInput $input;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var \DateTime $startedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('startedAt')]
    public \DateTime $startedAt;

    /**
     *
     * @var bool $terminated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terminated')]
    public bool $terminated;

    /**
     *
     * @var ?string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     *
     * @var ?string $lastFailure
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastFailure')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastFailure = null;

    /**
     *
     * @var ?\DateTime $nextExecution
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('nextExecution')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $nextExecution = null;

    /**
     *
     * @var ?WorkflowInstanceHistoryStageOutput $output
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('output')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\WorkflowInstanceHistoryStageOutput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?WorkflowInstanceHistoryStageOutput $output = null;

    /**
     *
     * @var ?\DateTime $terminatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terminatedAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $terminatedAt = null;

    /**
     * @param  int  $attempt
     * @param  WorkflowInstanceHistoryStageInput  $input
     * @param  string  $name
     * @param  \DateTime  $startedAt
     * @param  bool  $terminated
     * @param  ?string  $error
     * @param  ?string  $lastFailure
     * @param  ?\DateTime  $nextExecution
     * @param  ?WorkflowInstanceHistoryStageOutput  $output
     * @param  ?\DateTime  $terminatedAt
     * @phpstan-pure
     */
    public function __construct(int $attempt, WorkflowInstanceHistoryStageInput $input, string $name, \DateTime $startedAt, bool $terminated, ?string $error = null, ?string $lastFailure = null, ?\DateTime $nextExecution = null, ?WorkflowInstanceHistoryStageOutput $output = null, ?\DateTime $terminatedAt = null)
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