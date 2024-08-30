<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ActivityStripeTransfer
{
    /**
     *
     * @var ?int $amount
     */
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $amount = null;

    /**
     *
     * @var ?string $asset
     */
    #[\JMS\Serializer\Annotation\SerializedName('asset')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $asset = null;

    /**
     *
     * @var ?string $connectorID
     */
    #[\JMS\Serializer\Annotation\SerializedName('connectorID')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $connectorID = null;

    /**
     *
     * @var ?string $destination
     */
    #[\JMS\Serializer\Annotation\SerializedName('destination')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $destination = null;

    /**
     * A set of key/value pairs that you can attach to a transfer object.
     *
     * It can be useful for storing additional information about the transfer in a structured format.
     *
     *
     * @var ?V2ActivityStripeTransferMetadata $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2ActivityStripeTransferMetadata|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2ActivityStripeTransferMetadata $metadata = null;

    /**
     *
     * @var ?bool $waitingValidation
     */
    #[\JMS\Serializer\Annotation\SerializedName('waitingValidation')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $waitingValidation = null;

    /**
     * @param  ?int  $amount
     * @param  ?string  $asset
     * @param  ?string  $connectorID
     * @param  ?string  $destination
     * @param  ?V2ActivityStripeTransferMetadata  $metadata
     * @param  ?bool  $waitingValidation
     */
    public function __construct(?int $amount = null, ?string $asset = null, ?string $connectorID = null, ?string $destination = null, ?V2ActivityStripeTransferMetadata $metadata = null, ?bool $waitingValidation = null)
    {
        $this->amount = $amount;
        $this->asset = $asset;
        $this->connectorID = $connectorID;
        $this->destination = $destination;
        $this->metadata = $metadata;
        $this->waitingValidation = $waitingValidation;
    }
}