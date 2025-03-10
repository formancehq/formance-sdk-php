<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3CreateAccountRequest
{
    /**
     *
     * @var string $accountName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountName')]
    public string $accountName;

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
     * @var string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    public string $reference;

    /**
     *
     * @var V3AccountTypeEnum $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V3AccountTypeEnum')]
    public V3AccountTypeEnum $type;

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
     * @param  string  $accountName
     * @param  string  $connectorID
     * @param  \DateTime  $createdAt
     * @param  string  $reference
     * @param  V3AccountTypeEnum  $type
     * @param  ?string  $defaultAsset
     * @param  ?array<string, string>  $metadata
     * @phpstan-pure
     */
    public function __construct(string $accountName, string $connectorID, \DateTime $createdAt, string $reference, V3AccountTypeEnum $type, ?string $defaultAsset = null, ?array $metadata = null)
    {
        $this->accountName = $accountName;
        $this->connectorID = $connectorID;
        $this->createdAt = $createdAt;
        $this->reference = $reference;
        $this->type = $type;
        $this->defaultAsset = $defaultAsset;
        $this->metadata = $metadata;
    }
}