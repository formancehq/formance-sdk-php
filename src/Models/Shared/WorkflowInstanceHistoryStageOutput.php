<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class WorkflowInstanceHistoryStageOutput
{
    /**
     *
     * @var ?ActivityCreateTransactionOutput $createTransaction
     */
    #[\JMS\Serializer\Annotation\SerializedName('CreateTransaction')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\ActivityCreateTransactionOutput|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?ActivityCreateTransactionOutput $createTransaction = null;

    /**
     *
     * @var ?ActivityDebitWalletOutput $debitWallet
     */
    #[\JMS\Serializer\Annotation\SerializedName('DebitWallet')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\ActivityDebitWalletOutput|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?ActivityDebitWalletOutput $debitWallet = null;

    /**
     *
     * @var ?ActivityGetAccountOutput $getAccount
     */
    #[\JMS\Serializer\Annotation\SerializedName('GetAccount')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\ActivityGetAccountOutput|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?ActivityGetAccountOutput $getAccount = null;

    /**
     *
     * @var ?ActivityGetPaymentOutput $getPayment
     */
    #[\JMS\Serializer\Annotation\SerializedName('GetPayment')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\ActivityGetPaymentOutput|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?ActivityGetPaymentOutput $getPayment = null;

    /**
     *
     * @var ?ActivityGetWalletOutput $getWallet
     */
    #[\JMS\Serializer\Annotation\SerializedName('GetWallet')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\ActivityGetWalletOutput|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?ActivityGetWalletOutput $getWallet = null;

    /**
     *
     * @var ?OrchestrationListWalletsResponse $listWallets
     */
    #[\JMS\Serializer\Annotation\SerializedName('ListWallets')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationListWalletsResponse|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?OrchestrationListWalletsResponse $listWallets = null;

    /**
     *
     * @var ?ActivityRevertTransactionOutput $revertTransaction
     */
    #[\JMS\Serializer\Annotation\SerializedName('RevertTransaction')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\ActivityRevertTransactionOutput|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?ActivityRevertTransactionOutput $revertTransaction = null;

    /**
     * @param  ?ActivityCreateTransactionOutput  $createTransaction
     * @param  ?ActivityDebitWalletOutput  $debitWallet
     * @param  ?ActivityGetAccountOutput  $getAccount
     * @param  ?ActivityGetPaymentOutput  $getPayment
     * @param  ?ActivityGetWalletOutput  $getWallet
     * @param  ?OrchestrationListWalletsResponse  $listWallets
     * @param  ?ActivityRevertTransactionOutput  $revertTransaction
     */
    public function __construct(?ActivityCreateTransactionOutput $createTransaction = null, ?ActivityDebitWalletOutput $debitWallet = null, ?ActivityGetAccountOutput $getAccount = null, ?ActivityGetPaymentOutput $getPayment = null, ?ActivityGetWalletOutput $getWallet = null, ?OrchestrationListWalletsResponse $listWallets = null, ?ActivityRevertTransactionOutput $revertTransaction = null)
    {
        $this->createTransaction = $createTransaction;
        $this->debitWallet = $debitWallet;
        $this->getAccount = $getAccount;
        $this->getPayment = $getPayment;
        $this->getWallet = $getWallet;
        $this->listWallets = $listWallets;
        $this->revertTransaction = $revertTransaction;
    }
}