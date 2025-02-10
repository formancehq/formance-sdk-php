<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class BankAccountRelatedAccounts
{
    /**
     *
     * @var string $accountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountID')]
    public string $accountID;

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
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $provider
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider')]
    public string $provider;

    /**
     * @param  string  $accountID
     * @param  string  $connectorID
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $provider
     * @phpstan-pure
     */
    public function __construct(string $accountID, string $connectorID, \DateTime $createdAt, string $id, string $provider)
    {
        $this->accountID = $accountID;
        $this->connectorID = $connectorID;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->provider = $provider;
    }
}