<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use \formance\stack\Utils\SpeakeasyMetadata;
class GetBankAccountRequest
{
    /**
     * The bank account ID.
     * 
     * @var string $bankAccountId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=bankAccountId')]
    public string $bankAccountId;
    
	public function __construct()
	{
		$this->bankAccountId = "";
	}
}