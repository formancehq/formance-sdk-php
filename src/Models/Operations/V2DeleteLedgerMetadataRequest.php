<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use \formance\stack\Utils\SpeakeasyMetadata;
class V2DeleteLedgerMetadataRequest
{
    /**
     * Key to remove.
     * 
     * @var string $key
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=key')]
    public string $key;
    
    /**
     * Name of the ledger.
     * 
     * @var string $ledger
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;
    
	public function __construct()
	{
		$this->key = "";
		$this->ledger = "";
	}
}