<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TransferInitiationRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $amount;

    #[\JMS\Serializer\Annotation\SerializedName('asset')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $asset;

    #[\JMS\Serializer\Annotation\SerializedName('connectorID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $connectorID = null;

    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;

    #[\JMS\Serializer\Annotation\SerializedName('destinationAccountID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $destinationAccountID;

    /**
     * $metadata
     *
     * @var ?array<string, string> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;

    #[\JMS\Serializer\Annotation\SerializedName('provider')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\Connector>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Connector $provider = null;

    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $reference;

    #[\JMS\Serializer\Annotation\SerializedName('scheduledAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $scheduledAt;

    #[\JMS\Serializer\Annotation\SerializedName('sourceAccountID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $sourceAccountID;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\TransferInitiationRequestType>')]
    public TransferInitiationRequestType $type;

    #[\JMS\Serializer\Annotation\SerializedName('validated')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $validated;

    public function __construct()
    {
        $this->amount = 0;
        $this->asset = '';
        $this->connectorID = null;
        $this->description = '';
        $this->destinationAccountID = '';
        $this->metadata = null;
        $this->provider = null;
        $this->reference = '';
        $this->scheduledAt = new \DateTime();
        $this->sourceAccountID = '';
        $this->type = \formance\stack\Models\Shared\TransferInitiationRequestType::Transfer;
        $this->validated = false;
    }
}