<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2WalletWithBalances
{
    #[\JMS\Serializer\Annotation\SerializedName('balances')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\Balances')]
    public Balances $balances;

    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;

    /**
     * The unique ID of the wallet.
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

    #[\JMS\Serializer\Annotation\SerializedName('ledger')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $ledger;

    /**
     * Metadata associated with the wallet.
     *
     * @var array<string, string> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    public array $metadata;

    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;

    public function __construct()
    {
        $this->balances = new \formance\stack\Models\Shared\Balances();
        $this->createdAt = new \DateTime();
        $this->id = '';
        $this->ledger = '';
        $this->metadata = [];
        $this->name = '';
    }
}