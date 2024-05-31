<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TransferInitiation
{
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $amount;

    #[\JMS\Serializer\Annotation\SerializedName('asset')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $asset;

    #[\JMS\Serializer\Annotation\SerializedName('connectorID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $connectorID;

    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;

    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;

    #[\JMS\Serializer\Annotation\SerializedName('destinationAccountID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $destinationAccountID;

    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $error;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

    #[\JMS\Serializer\Annotation\SerializedName('initialAmount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $initialAmount;

    /**
     * $metadata
     *
     * @var ?array<string, string> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;

    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $reference;

    /**
     * $relatedAdjustments
     *
     * @var ?array<\formance\stack\Models\Shared\TransferInitiationAdjusments> $relatedAdjustments
     */
    #[\JMS\Serializer\Annotation\SerializedName('relatedAdjustments')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\TransferInitiationAdjusments>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $relatedAdjustments = null;

    /**
     * $relatedPayments
     *
     * @var ?array<\formance\stack\Models\Shared\TransferInitiationPayments> $relatedPayments
     */
    #[\JMS\Serializer\Annotation\SerializedName('relatedPayments')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\TransferInitiationPayments>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $relatedPayments = null;

    #[\JMS\Serializer\Annotation\SerializedName('scheduledAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $scheduledAt;

    #[\JMS\Serializer\Annotation\SerializedName('sourceAccountID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $sourceAccountID;

    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\TransferInitiationStatus>')]
    public TransferInitiationStatus $status;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\TransferInitiationType>')]
    public TransferInitiationType $type;

    public function __construct()
    {
        $this->amount = 0;
        $this->asset = '';
        $this->connectorID = '';
        $this->createdAt = new \DateTime();
        $this->description = '';
        $this->destinationAccountID = '';
        $this->error = '';
        $this->id = '';
        $this->initialAmount = 0;
        $this->metadata = null;
        $this->reference = '';
        $this->relatedAdjustments = null;
        $this->relatedPayments = null;
        $this->scheduledAt = new \DateTime();
        $this->sourceAccountID = '';
        $this->status = \formance\stack\Models\Shared\TransferInitiationStatus::WaitingForValidation;
        $this->type = \formance\stack\Models\Shared\TransferInitiationType::Transfer;
    }
}