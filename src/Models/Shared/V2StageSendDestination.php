<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2StageSendDestination
{
    /**
     *
     * @var ?V2StageSendDestinationAccount $account
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2StageSendDestinationAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?V2StageSendDestinationAccount $account = null;

    /**
     *
     * @var ?V2StageSendDestinationPayment $payment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2StageSendDestinationPayment|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?V2StageSendDestinationPayment $payment = null;

    /**
     *
     * @var ?V2StageSendDestinationWallet $wallet
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('wallet')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2StageSendDestinationWallet|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?V2StageSendDestinationWallet $wallet = null;

    /**
     * @param  ?V2StageSendDestinationAccount  $account
     * @param  ?V2StageSendDestinationPayment  $payment
     * @param  ?V2StageSendDestinationWallet  $wallet
     * @phpstan-pure
     */
    public function __construct(?V2StageSendDestinationAccount $account = null, ?V2StageSendDestinationPayment $payment = null, ?V2StageSendDestinationWallet $wallet = null)
    {
        $this->account = $account;
        $this->payment = $payment;
        $this->wallet = $wallet;
    }
}