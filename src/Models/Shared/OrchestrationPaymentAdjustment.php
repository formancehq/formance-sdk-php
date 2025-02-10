<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class OrchestrationPaymentAdjustment
{
    /**
     *
     * @var bool $absolute
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('absolute')]
    public bool $absolute;

    /**
     *
     * @var \Brick\Math\BigInteger $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public \Brick\Math\BigInteger $amount;

    /**
     *
     * @var \DateTime $date
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('date')]
    public \DateTime $date;

    /**
     *
     * @var OrchestrationPaymentAdjustmentRaw $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationPaymentAdjustmentRaw')]
    public OrchestrationPaymentAdjustmentRaw $raw;

    /**
     *
     * @var OrchestrationPaymentStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationPaymentStatus')]
    public OrchestrationPaymentStatus $status;

    /**
     * @param  bool  $absolute
     * @param  \Brick\Math\BigInteger  $amount
     * @param  \DateTime  $date
     * @param  OrchestrationPaymentAdjustmentRaw  $raw
     * @param  OrchestrationPaymentStatus  $status
     * @phpstan-pure
     */
    public function __construct(bool $absolute, \Brick\Math\BigInteger $amount, \DateTime $date, OrchestrationPaymentAdjustmentRaw $raw, OrchestrationPaymentStatus $status)
    {
        $this->absolute = $absolute;
        $this->amount = $amount;
        $this->date = $date;
        $this->raw = $raw;
        $this->status = $status;
    }
}