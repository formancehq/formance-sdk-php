<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use \formance\stack\Utils\SpeakeasyMetadata;
class PaymentsgetAccountRequest
{
    /**
     * The account ID.
     * 
     * @var string $accountId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountId')]
    public string $accountId;
    
	public function __construct()
	{
		$this->accountId = "";
	}
}