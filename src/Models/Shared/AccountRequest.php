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
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountName = null;

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
     * @var ?string $defaultAsset
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('defaultAsset')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $defaultAsset = null;

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
     *
     * @var AccountType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\AccountType')]
    public AccountType $type;

    /**
     * @param  string  $connectorID
     * @param  \DateTime  $createdAt
     * @param  string  $reference
     * @param  AccountType  $type
     * @param  ?string  $accountName
     * @param  ?string  $defaultAsset
     * @param  ?array<string, string>  $metadata
     */
    public function __construct(string $connectorID, \DateTime $createdAt, string $reference, AccountType $type, ?string $accountName = null, ?string $defaultAsset = null, ?array $metadata = null)
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