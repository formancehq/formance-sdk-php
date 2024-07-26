<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Payment
{
    /**
     * $adjustments
     *
     * @var array<\formance\stack\Models\Shared\PaymentAdjustment> $adjustments
     */
    #[\JMS\Serializer\Annotation\SerializedName('adjustments')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\PaymentAdjustment>')]
    public array $adjustments;

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

    #[\JMS\Serializer\Annotation\SerializedName('destinationAccountID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $destinationAccountID;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

    #[\JMS\Serializer\Annotation\SerializedName('initialAmount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $initialAmount;

    /**
     * $metadata
     *
     * @var array<string, string> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    public array $metadata;

    #[\JMS\Serializer\Annotation\SerializedName('provider')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\Connector>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Connector $provider = null;

    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\Raw')]
    public Raw $raw;

    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $reference;

    #[\JMS\Serializer\Annotation\SerializedName('scheme')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\PaymentScheme>')]
    public PaymentScheme $scheme;

    #[\JMS\Serializer\Annotation\SerializedName('sourceAccountID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $sourceAccountID;

    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\PaymentStatus>')]
    public PaymentStatus $status;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\PaymentType>')]
    public PaymentType $type;

    public function __construct()
    {
        $this->adjustments = [];
        $this->amount = 0;
        $this->asset = '';
        $this->connectorID = '';
        $this->createdAt = new \DateTime();
        $this->destinationAccountID = '';
        $this->id = '';
        $this->initialAmount = 0;
        $this->metadata = [];
        $this->provider = null;
        $this->raw = new \formance\stack\Models\Shared\Raw();
        $this->reference = '';
        $this->scheme = \formance\stack\Models\Shared\PaymentScheme::Unknown;
        $this->sourceAccountID = '';
        $this->status = \formance\stack\Models\Shared\PaymentStatus::Pending;
        $this->type = \formance\stack\Models\Shared\PaymentType::PayIn;
    }
}