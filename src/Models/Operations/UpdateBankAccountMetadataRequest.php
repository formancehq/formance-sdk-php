<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use \formance\stack\Utils\SpeakeasyMetadata;
class UpdateBankAccountMetadataRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \formance\stack\Models\Shared\UpdateBankAccountMetadataRequest $updateBankAccountMetadataRequest;
    
    /**
     * The bank account ID.
     * 
     * @var string $bankAccountId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=bankAccountId')]
    public string $bankAccountId;
    
	public function __construct()
	{
		$this->updateBankAccountMetadataRequest = new \formance\stack\Models\Shared\UpdateBankAccountMetadataRequest();
		$this->bankAccountId = "";
	}
}