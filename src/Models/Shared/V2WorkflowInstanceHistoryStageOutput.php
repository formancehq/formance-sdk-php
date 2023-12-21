<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2WorkflowInstanceHistoryStageOutput
{
	#[\JMS\Serializer\Annotation\SerializedName('CreateTransaction')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\V2ActivityCreateTransactionOutput')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2ActivityCreateTransactionOutput $createTransaction = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('DebitWallet')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\V2ActivityDebitWalletOutput')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2ActivityDebitWalletOutput $debitWallet = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('GetAccount')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\V2ActivityGetAccountOutput')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2ActivityGetAccountOutput $getAccount = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('GetPayment')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\V2ActivityGetPaymentOutput')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2ActivityGetPaymentOutput $getPayment = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('GetWallet')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\V2ActivityGetWalletOutput')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2ActivityGetWalletOutput $getWallet = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('ListWallets')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\V2ListWalletsResponse')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2ListWalletsResponse $listWallets = null;
    
	public function __construct()
	{
		$this->createTransaction = null;
		$this->debitWallet = null;
		$this->getAccount = null;
		$this->getPayment = null;
		$this->getWallet = null;
		$this->listWallets = null;
	}
}
