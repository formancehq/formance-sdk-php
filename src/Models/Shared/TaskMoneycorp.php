<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TaskMoneycorp
{
    /**
     *
     * @var string $connectorID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('connectorID')]
    public string $connectorID;

    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public \DateTime $createdAt;

    /**
     *
     * @var TaskMoneycorpDescriptor $descriptor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('descriptor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\TaskMoneycorpDescriptor')]
    public TaskMoneycorpDescriptor $descriptor;

    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var TaskStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\TaskStatus')]
    public TaskStatus $status;

    /**
     *
     * @var \DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedAt')]
    public \DateTime $updatedAt;

    /**
     *
     * @var ?string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     *
     * @var ?TaskMoneycorpState $state
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('state')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\TaskMoneycorpState|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TaskMoneycorpState $state = null;

    /**
     * @param  string  $connectorID
     * @param  \DateTime  $createdAt
     * @param  TaskMoneycorpDescriptor  $descriptor
     * @param  string  $id
     * @param  TaskStatus  $status
     * @param  \DateTime  $updatedAt
     * @param  ?string  $error
     * @param  ?TaskMoneycorpState  $state
     * @phpstan-pure
     */
    public function __construct(string $connectorID, \DateTime $createdAt, TaskMoneycorpDescriptor $descriptor, string $id, TaskStatus $status, \DateTime $updatedAt, ?string $error = null, ?TaskMoneycorpState $state = null)
    {
        $this->connectorID = $connectorID;
        $this->createdAt = $createdAt;
        $this->descriptor = $descriptor;
        $this->id = $id;
        $this->status = $status;
        $this->updatedAt = $updatedAt;
        $this->error = $error;
        $this->state = $state;
    }
}