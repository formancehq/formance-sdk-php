<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class WorkflowInstanceHistoryStageInput
{
    #[\JMS\Serializer\Annotation\SerializedName('AddAccountMetadata')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityAddAccountMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityAddAccountMetadata $addAccountMetadata = null;

    #[\JMS\Serializer\Annotation\SerializedName('ConfirmHold')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityConfirmHold')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityConfirmHold $confirmHold = null;

    #[\JMS\Serializer\Annotation\SerializedName('CreateTransaction')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityCreateTransaction')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityCreateTransaction $createTransaction = null;

    #[\JMS\Serializer\Annotation\SerializedName('CreditWallet')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityCreditWallet')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityCreditWallet $creditWallet = null;

    #[\JMS\Serializer\Annotation\SerializedName('DebitWallet')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityDebitWallet')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityDebitWallet $debitWallet = null;

    #[\JMS\Serializer\Annotation\SerializedName('GetAccount')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityGetAccount')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityGetAccount $getAccount = null;

    #[\JMS\Serializer\Annotation\SerializedName('GetPayment')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityGetPayment')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityGetPayment $getPayment = null;

    #[\JMS\Serializer\Annotation\SerializedName('GetWallet')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityGetWallet')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityGetWallet $getWallet = null;

    #[\JMS\Serializer\Annotation\SerializedName('ListWallets')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityListWallets')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityListWallets $listWallets = null;

    #[\JMS\Serializer\Annotation\SerializedName('RevertTransaction')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityRevertTransaction')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityRevertTransaction $revertTransaction = null;

    #[\JMS\Serializer\Annotation\SerializedName('StripeTransfer')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityStripeTransfer')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityStripeTransfer $stripeTransfer = null;

    #[\JMS\Serializer\Annotation\SerializedName('VoidHold')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityVoidHold')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityVoidHold $voidHold = null;

    public function __construct()
    {
        $this->addAccountMetadata = null;
        $this->confirmHold = null;
        $this->createTransaction = null;
        $this->creditWallet = null;
        $this->debitWallet = null;
        $this->getAccount = null;
        $this->getPayment = null;
        $this->getWallet = null;
        $this->listWallets = null;
        $this->revertTransaction = null;
        $this->stripeTransfer = null;
        $this->voidHold = null;
    }
}