<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TransferInitiationRequest
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
     * @var ?string $connectorID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('connectorID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $connectorID = null;

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
     * @var ?Connector $provider
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\Connector|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Connector $provider = null;

    /**
     *
     * @var string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    public string $reference;

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
     * @var TransferInitiationRequestType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\TransferInitiationRequestType')]
    public TransferInitiationRequestType $type;

    /**
     *
     * @var bool $validated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('validated')]
    public bool $validated;

    /**
     * @param  \Brick\Math\BigInteger  $amount
     * @param  string  $asset
     * @param  string  $description
     * @param  string  $destinationAccountID
     * @param  string  $reference
     * @param  \DateTime  $scheduledAt
     * @param  string  $sourceAccountID
     * @param  TransferInitiationRequestType  $type
     * @param  bool  $validated
     * @param  ?string  $connectorID
     * @param  ?Connector  $provider
     * @param  ?array<string, string>  $metadata
     */
    public function __construct(\Brick\Math\BigInteger $amount, string $asset, string $description, string $destinationAccountID, string $reference, \DateTime $scheduledAt, string $sourceAccountID, TransferInitiationRequestType $type, bool $validated, ?string $connectorID = null, ?Connector $provider = null, ?array $metadata = null)
    {
        $this->amount = $amount;
        $this->asset = $asset;
        $this->description = $description;
        $this->destinationAccountID = $destinationAccountID;
        $this->reference = $reference;
        $this->scheduledAt = $scheduledAt;
        $this->sourceAccountID = $sourceAccountID;
        $this->type = $type;
        $this->validated = $validated;
        $this->connectorID = $connectorID;
        $this->provider = $provider;
        $this->metadata = $metadata;
    }
}