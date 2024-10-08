<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Payment
{
    /**
     * $adjustments
     *
     * @var array<PaymentAdjustment> $adjustments
     */
    #[\JMS\Serializer\Annotation\SerializedName('adjustments')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\PaymentAdjustment>')]
    public array $adjustments;

    /**
     *
     * @var int $amount
     */
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    public int $amount;

    /**
     *
     * @var string $asset
     */
    #[\JMS\Serializer\Annotation\SerializedName('asset')]
    public string $asset;

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
     * @var string $destinationAccountID
     */
    #[\JMS\Serializer\Annotation\SerializedName('destinationAccountID')]
    public string $destinationAccountID;

    /**
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var int $initialAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('initialAmount')]
    public int $initialAmount;

    /**
     * $metadata
     *
     * @var ?array<string, string> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>|null')]
    public ?array $metadata;

    /**
     *
     * @var ?Connector $provider
     */
    #[\JMS\Serializer\Annotation\SerializedName('provider')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\Connector|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Connector $provider = null;

    /**
     *
     * @var ?Raw $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\Raw|null')]
    public ?Raw $raw;

    /**
     *
     * @var string $reference
     */
    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    public string $reference;

    /**
     *
     * @var PaymentScheme $scheme
     */
    #[\JMS\Serializer\Annotation\SerializedName('scheme')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\PaymentScheme')]
    public PaymentScheme $scheme;

    /**
     *
     * @var string $sourceAccountID
     */
    #[\JMS\Serializer\Annotation\SerializedName('sourceAccountID')]
    public string $sourceAccountID;

    /**
     *
     * @var PaymentStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\PaymentStatus')]
    public PaymentStatus $status;

    /**
     *
     * @var PaymentType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\PaymentType')]
    public PaymentType $type;

    /**
     * @param  array<PaymentAdjustment>  $adjustments
     * @param  int  $amount
     * @param  string  $asset
     * @param  string  $connectorID
     * @param  \DateTime  $createdAt
     * @param  string  $destinationAccountID
     * @param  string  $id
     * @param  int  $initialAmount
     * @param  string  $reference
     * @param  PaymentScheme  $scheme
     * @param  string  $sourceAccountID
     * @param  PaymentStatus  $status
     * @param  PaymentType  $type
     * @param  ?array<string, string>  $metadata
     * @param  ?Connector  $provider
     * @param  ?Raw  $raw
     */
    public function __construct(array $adjustments, int $amount, string $asset, string $connectorID, \DateTime $createdAt, string $destinationAccountID, string $id, int $initialAmount, string $reference, PaymentScheme $scheme, string $sourceAccountID, PaymentStatus $status, PaymentType $type, ?array $metadata = null, ?Connector $provider = null, ?Raw $raw = null)
    {
        $this->adjustments = $adjustments;
        $this->amount = $amount;
        $this->asset = $asset;
        $this->connectorID = $connectorID;
        $this->createdAt = $createdAt;
        $this->destinationAccountID = $destinationAccountID;
        $this->id = $id;
        $this->initialAmount = $initialAmount;
        $this->reference = $reference;
        $this->scheme = $scheme;
        $this->sourceAccountID = $sourceAccountID;
        $this->status = $status;
        $this->type = $type;
        $this->metadata = $metadata;
        $this->provider = $provider;
        $this->raw = $raw;
    }
}