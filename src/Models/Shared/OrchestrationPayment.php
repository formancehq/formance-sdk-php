<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class OrchestrationPayment
{
    /**
     * $adjustments
     *
     * @var array<OrchestrationPaymentAdjustment> $adjustments
     */
    #[\JMS\Serializer\Annotation\SerializedName('adjustments')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\OrchestrationPaymentAdjustment>')]
    public array $adjustments;

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
     *
     * @var OrchestrationPaymentMetadata $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationPaymentMetadata')]
    public OrchestrationPaymentMetadata $metadata;

    /**
     *
     * @var ?OrchestrationConnector $provider
     */
    #[\JMS\Serializer\Annotation\SerializedName('provider')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationConnector|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrchestrationConnector $provider = null;

    /**
     *
     * @var OrchestrationPaymentRaw $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationPaymentRaw')]
    public OrchestrationPaymentRaw $raw;

    /**
     *
     * @var string $reference
     */
    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    public string $reference;

    /**
     *
     * @var OrchestrationPaymentScheme $scheme
     */
    #[\JMS\Serializer\Annotation\SerializedName('scheme')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationPaymentScheme')]
    public OrchestrationPaymentScheme $scheme;

    /**
     *
     * @var string $sourceAccountID
     */
    #[\JMS\Serializer\Annotation\SerializedName('sourceAccountID')]
    public string $sourceAccountID;

    /**
     *
     * @var OrchestrationPaymentStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationPaymentStatus')]
    public OrchestrationPaymentStatus $status;

    /**
     *
     * @var OrchestrationPaymentType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationPaymentType')]
    public OrchestrationPaymentType $type;

    /**
     * @param  ?array<OrchestrationPaymentAdjustment>  $adjustments
     * @param  ?string  $asset
     * @param  ?string  $connectorID
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $destinationAccountID
     * @param  ?string  $id
     * @param  ?int  $initialAmount
     * @param  ?OrchestrationPaymentMetadata  $metadata
     * @param  ?OrchestrationPaymentRaw  $raw
     * @param  ?string  $reference
     * @param  ?OrchestrationPaymentScheme  $scheme
     * @param  ?string  $sourceAccountID
     * @param  ?OrchestrationPaymentStatus  $status
     * @param  ?OrchestrationPaymentType  $type
     * @param  ?OrchestrationConnector  $provider
     */
    public function __construct(?array $adjustments = null, ?string $asset = null, ?string $connectorID = null, ?\DateTime $createdAt = null, ?string $destinationAccountID = null, ?string $id = null, ?int $initialAmount = null, ?OrchestrationPaymentMetadata $metadata = null, ?OrchestrationPaymentRaw $raw = null, ?string $reference = null, ?OrchestrationPaymentScheme $scheme = null, ?string $sourceAccountID = null, ?OrchestrationPaymentStatus $status = null, ?OrchestrationPaymentType $type = null, ?OrchestrationConnector $provider = null)
    {
        $this->adjustments = $adjustments;
        $this->asset = $asset;
        $this->connectorID = $connectorID;
        $this->createdAt = $createdAt;
        $this->destinationAccountID = $destinationAccountID;
        $this->id = $id;
        $this->initialAmount = $initialAmount;
        $this->metadata = $metadata;
        $this->raw = $raw;
        $this->reference = $reference;
        $this->scheme = $scheme;
        $this->sourceAccountID = $sourceAccountID;
        $this->status = $status;
        $this->type = $type;
        $this->provider = $provider;
    }
}