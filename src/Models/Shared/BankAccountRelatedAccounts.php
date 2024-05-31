<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class BankAccountRelatedAccounts
{
    #[\JMS\Serializer\Annotation\SerializedName('accountID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $accountID;

    #[\JMS\Serializer\Annotation\SerializedName('connectorID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $connectorID;

    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

    #[\JMS\Serializer\Annotation\SerializedName('provider')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $provider;

    public function __construct()
    {
        $this->accountID = '';
        $this->connectorID = '';
        $this->createdAt = new \DateTime();
        $this->id = '';
        $this->provider = '';
    }
}