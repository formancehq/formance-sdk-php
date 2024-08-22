<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TaskMangoPay
{
    /**
     *
     * @var string $connectorID
     */
    #[\JMS\Serializer\Annotation\SerializedName('connectorID')]
    public string $connectorID;

    /**
     *
     * @var \DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public \DateTime $createdAt;

    /**
     *
     * @var TaskMangoPayDescriptor $descriptor
     */
    #[\JMS\Serializer\Annotation\SerializedName('descriptor')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\TaskMangoPayDescriptor')]
    public TaskMangoPayDescriptor $descriptor;

    /**
     *
     * @var ?string $error
     */
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $error = null;

    /**
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var TaskMangoPayState $state
     */
    #[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\TaskMangoPayState')]
    public TaskMangoPayState $state;

    /**
     *
     * @var PaymentStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\PaymentStatus')]
    public PaymentStatus $status;

    /**
     *
     * @var \DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    public \DateTime $updatedAt;

    /**
     * @param  ?string  $connectorID
     * @param  ?\DateTime  $createdAt
     * @param  ?TaskMangoPayDescriptor  $descriptor
     * @param  ?string  $id
     * @param  ?TaskMangoPayState  $state
     * @param  ?PaymentStatus  $status
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $error
     */
    public function __construct(?string $connectorID = null, ?\DateTime $createdAt = null, ?TaskMangoPayDescriptor $descriptor = null, ?string $id = null, ?TaskMangoPayState $state = null, ?PaymentStatus $status = null, ?\DateTime $updatedAt = null, ?string $error = null)
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