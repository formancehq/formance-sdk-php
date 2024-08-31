<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class AccountRequest
{
    /**
     *
     * @var ?string $accountName
     */
    #[\JMS\Serializer\Annotation\SerializedName('accountName')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $accountName = null;

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
     * @var ?string $defaultAsset
     */
    #[\JMS\Serializer\Annotation\SerializedName('defaultAsset')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $defaultAsset = null;

    /**
     * $metadata
     *
     * @var ?array<string, string> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;

    /**
     *
     * @var string $reference
     */
    #[\JMS\Serializer\Annotation\SerializedName('reference')]
    public string $reference;

    /**
     *
     * @var AccountType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\AccountType')]
    public AccountType $type;

    /**
     * @param  ?string  $connectorID
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $reference
     * @param  ?AccountType  $type
     * @param  ?string  $accountName
     * @param  ?string  $defaultAsset
     * @param  ?array<string, string>  $metadata
     */
    public function __construct(?string $connectorID = null, ?\DateTime $createdAt = null, ?string $reference = null, ?AccountType $type = null, ?string $accountName = null, ?string $defaultAsset = null, ?array $metadata = null)
    {
        $this->connectorID = $connectorID;
        $this->createdAt = $createdAt;
        $this->reference = $reference;
        $this->type = $type;
        $this->accountName = $accountName;
        $this->defaultAsset = $defaultAsset;
        $this->metadata = $metadata;
    }
}