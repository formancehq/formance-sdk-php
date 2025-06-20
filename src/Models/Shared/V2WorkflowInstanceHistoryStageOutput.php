<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2WorkflowInstanceHistoryStageOutput
{
    /**
     *
     * @var ?V2ActivityCreateTransactionOutput $createTransaction
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('CreateTransaction')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2ActivityCreateTransactionOutput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?V2ActivityCreateTransactionOutput $createTransaction = null;

    /**
     *
     * @var ?V2ActivityDebitWalletOutput $debitWallet
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('DebitWallet')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2ActivityDebitWalletOutput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?V2ActivityDebitWalletOutput $debitWallet = null;

    /**
     *
     * @var ?V2AccountResponse $getAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('GetAccount')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2AccountResponse|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?V2AccountResponse $getAccount = null;

    /**
     *
     * @var ?V2ActivityGetPaymentOutput $getPayment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('GetPayment')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2ActivityGetPaymentOutput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?V2ActivityGetPaymentOutput $getPayment = null;

    /**
     *
     * @var ?V2ActivityGetWalletOutput $getWallet
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('GetWallet')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2ActivityGetWalletOutput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?V2ActivityGetWalletOutput $getWallet = null;

    /**
     *
     * @var ?V2ListWalletsResponse $listWallets
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ListWallets')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2ListWalletsResponse|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?V2ListWalletsResponse $listWallets = null;

    /**
     * @param  ?V2ActivityCreateTransactionOutput  $createTransaction
     * @param  ?V2ActivityDebitWalletOutput  $debitWallet
     * @param  ?V2AccountResponse  $getAccount
     * @param  ?V2ActivityGetPaymentOutput  $getPayment
     * @param  ?V2ActivityGetWalletOutput  $getWallet
     * @param  ?V2ListWalletsResponse  $listWallets
     * @phpstan-pure
     */
    public function __construct(?V2ActivityCreateTransactionOutput $createTransaction = null, ?V2ActivityDebitWalletOutput $debitWallet = null, ?V2AccountResponse $getAccount = null, ?V2ActivityGetPaymentOutput $getPayment = null, ?V2ActivityGetWalletOutput $getWallet = null, ?V2ListWalletsResponse $listWallets = null)
    {
        $this->createTransaction = $createTransaction;
        $this->debitWallet = $debitWallet;
        $this->getAccount = $getAccount;
        $this->getPayment = $getPayment;
        $this->getWallet = $getWallet;
        $this->listWallets = $listWallets;
    }
}