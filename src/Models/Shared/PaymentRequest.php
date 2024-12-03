<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class PaymentRequest
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
     * @var ?string $destinationAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('destinationAccountID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $destinationAccountID = null;

    /**
     *
     * @var string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    public string $reference;

    /**
     *
     * @var PaymentScheme $scheme
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scheme')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\PaymentScheme')]
    public PaymentScheme $scheme;

    /**
     *
     * @var ?string $sourceAccountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sourceAccountID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceAccountID = null;

    /**
     *
     * @var PaymentStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\PaymentStatus')]
    public PaymentStatus $status;

    /**
     *
     * @var PaymentType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\PaymentType')]
    public PaymentType $type;

    /**
     * @param  \Brick\Math\BigInteger  $amount
     * @param  string  $asset
     * @param  string  $connectorID
     * @param  \DateTime  $createdAt
     * @param  string  $reference
     * @param  PaymentScheme  $scheme
     * @param  PaymentStatus  $status
     * @param  PaymentType  $type
     * @param  ?string  $destinationAccountID
     * @param  ?string  $sourceAccountID
     */
    public function __construct(\Brick\Math\BigInteger $amount, string $asset, string $connectorID, \DateTime $createdAt, string $reference, PaymentScheme $scheme, PaymentStatus $status, PaymentType $type, ?string $destinationAccountID = null, ?string $sourceAccountID = null)
    {
        $this->amount = $amount;
        $this->asset = $asset;
        $this->connectorID = $connectorID;
        $this->createdAt = $createdAt;
        $this->reference = $reference;
        $this->scheme = $scheme;
        $this->status = $status;
        $this->type = $type;
        $this->destinationAccountID = $destinationAccountID;
        $this->sourceAccountID = $sourceAccountID;
    }
}