<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class WorkflowInstance
{
    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public \DateTime $createdAt;

    /**
     *
     * @var ?string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * $status
     *
     * @var ?array<StageStatus> $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\StageStatus>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $status = null;

    /**
     *
     * @var bool $terminated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terminated')]
    public bool $terminated;

    /**
     *
     * @var ?\DateTime $terminatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terminatedAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $terminatedAt = null;

    /**
     *
     * @var \DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedAt')]
    public \DateTime $updatedAt;

    /**
     *
     * @var string $workflowID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workflowID')]
    public string $workflowID;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  bool  $terminated
     * @param  \DateTime  $updatedAt
     * @param  string  $workflowID
     * @param  ?string  $error
     * @param  ?array<StageStatus>  $status
     * @param  ?\DateTime  $terminatedAt
     */
    public function __construct(\DateTime $createdAt, string $id, bool $terminated, \DateTime $updatedAt, string $workflowID, ?string $error = null, ?array $status = null, ?\DateTime $terminatedAt = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->terminated = $terminated;
        $this->updatedAt = $updatedAt;
        $this->workflowID = $workflowID;
        $this->error = $error;
        $this->status = $status;
        $this->terminatedAt = $terminatedAt;
    }
}