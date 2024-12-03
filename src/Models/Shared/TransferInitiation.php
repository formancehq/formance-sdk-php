<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TransferInitiation
{
    /**
     *
     * @var \Brick\Math\BigInteger $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public \Brick\Math\BigInteger $amount;

    /**
     *
     * @var string $asset
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('asset')]
    public string $asset;

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
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     *
     * @var string $destinationAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('destinationAccountID')]
    public string $destinationAccountID;

    /**
     *
     * @var string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    public string $error;

    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var \Brick\Math\BigInteger $initialAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('initialAmount')]
    public \Brick\Math\BigInteger $initialAmount;

    /**
     * $metadata
     *
     * @var ?array<string, string> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    public string $reference;

    /**
     * $relatedAdjustments
     *
     * @var ?array<TransferInitiationAdjusments> $relatedAdjustments
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('relatedAdjustments')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\TransferInitiationAdjusments>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $relatedAdjustments = null;

    /**
     * $relatedPayments
     *
     * @var ?array<TransferInitiationPayments> $relatedPayments
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('relatedPayments')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\TransferInitiationPayments>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $relatedPayments = null;

    /**
     *
     * @var \DateTime $scheduledAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scheduledAt')]
    public \DateTime $scheduledAt;

    /**
     *
     * @var string $sourceAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sourceAccountID')]
    public string $sourceAccountID;

    /**
     *
     * @var TransferInitiationStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\TransferInitiationStatus')]
    public TransferInitiationStatus $status;

    /**
     *
     * @var TransferInitiationType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\TransferInitiationType')]
    public TransferInitiationType $type;

    /**
     * @param  \Brick\Math\BigInteger  $amount
     * @param  string  $asset
     * @param  string  $connectorID
     * @param  \DateTime  $createdAt
     * @param  string  $description
     * @param  string  $destinationAccountID
     * @param  string  $error
     * @param  string  $id
     * @param  \Brick\Math\BigInteger  $initialAmount
     * @param  string  $reference
     * @param  \DateTime  $scheduledAt
     * @param  string  $sourceAccountID
     * @param  TransferInitiationStatus  $status
     * @param  TransferInitiationType  $type
     * @param  ?array<TransferInitiationAdjusments>  $relatedAdjustments
     * @param  ?array<TransferInitiationPayments>  $relatedPayments
     * @param  ?array<string, string>  $metadata
     */
    public function __construct(\Brick\Math\BigInteger $amount, string $asset, string $connectorID, \DateTime $createdAt, string $description, string $destinationAccountID, string $error, string $id, \Brick\Math\BigInteger $initialAmount, string $reference, \DateTime $scheduledAt, string $sourceAccountID, TransferInitiationStatus $status, TransferInitiationType $type, ?array $relatedAdjustments = null, ?array $relatedPayments = null, ?array $metadata = null)
    {
        $this->amount = $amount;
        $this->asset = $asset;
        $this->connectorID = $connectorID;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->destinationAccountID = $destinationAccountID;
        $this->error = $error;
        $this->id = $id;
        $this->initialAmount = $initialAmount;
        $this->reference = $reference;
        $this->scheduledAt = $scheduledAt;
        $this->sourceAccountID = $sourceAccountID;
        $this->status = $status;
        $this->type = $type;
        $this->relatedAdjustments = $relatedAdjustments;
        $this->relatedPayments = $relatedPayments;
        $this->metadata = $metadata;
    }
}