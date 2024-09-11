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
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public \DateTime $createdAt;

    /**
     *
     * @var ?string $error
     */
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * $status
     *
     * @var ?array<StageStatus> $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\StageStatus>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $status = null;

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
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $terminatedAt = null;

    /**
     *
     * @var \DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    public \DateTime $updatedAt;

    /**
     *
     * @var string $workflowID
     */
    #[\JMS\Serializer\Annotation\SerializedName('workflowID')]
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