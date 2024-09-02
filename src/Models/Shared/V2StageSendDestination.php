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
    #[\JMS\Serializer\Annotation\SerializedName('account')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2StageSendDestinationAccount|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2StageSendDestinationAccount $account = null;

    /**
     *
     * @var ?V2StageSendDestinationPayment $payment
     */
    #[\JMS\Serializer\Annotation\SerializedName('payment')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2StageSendDestinationPayment|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2StageSendDestinationPayment $payment = null;

    /**
     *
     * @var ?V2StageSendDestinationWallet $wallet
     */
    #[\JMS\Serializer\Annotation\SerializedName('wallet')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2StageSendDestinationWallet|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2StageSendDestinationWallet $wallet = null;

    /**
     * @param  ?V2StageSendDestinationAccount  $account
     * @param  ?V2StageSendDestinationPayment  $payment
     * @param  ?V2StageSendDestinationWallet  $wallet
     */
    public function __construct(?V2StageSendDestinationAccount $account = null, ?V2StageSendDestinationPayment $payment = null, ?V2StageSendDestinationWallet $wallet = null)
    {
        $this->account = $account;
        $this->payment = $payment;
        $this->wallet = $wallet;
    }
}