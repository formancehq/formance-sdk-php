<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TaskBankingCircle
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
     * @var Descriptor $descriptor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('descriptor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\Descriptor')]
    public Descriptor $descriptor;

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
     *
     * @var TaskBankingCircleState $state
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('state')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\TaskBankingCircleState')]
    public TaskBankingCircleState $state;

    /**
     *
     * @var PaymentStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\PaymentStatus')]
    public PaymentStatus $status;

    /**
     *
     * @var \DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedAt')]
    public \DateTime $updatedAt;

    /**
     * @param  string  $connectorID
     * @param  \DateTime  $createdAt
     * @param  Descriptor  $descriptor
     * @param  string  $id
     * @param  TaskBankingCircleState  $state
     * @param  PaymentStatus  $status
     * @param  \DateTime  $updatedAt
     * @param  ?string  $error
     */
    public function __construct(string $connectorID, \DateTime $createdAt, Descriptor $descriptor, string $id, TaskBankingCircleState $state, PaymentStatus $status, \DateTime $updatedAt, ?string $error = null)
    {
        $this->connectorID = $connectorID;
        $this->createdAt = $createdAt;
        $this->descriptor = $descriptor;
        $this->id = $id;
        $this->state = $state;
        $this->status = $status;
        $this->updatedAt = $updatedAt;
        $this->error = $error;
    }
}