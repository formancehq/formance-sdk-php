<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use \formance\stack\Utils\SpeakeasyMetadata;
class ListAccountsRequest
{
    /**
     * Filter accounts by address pattern (regular expression placed between ^ and $).
     * 
     * @var ?string $address
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=address')]
    public ?string $address = null;
    
    /**
     * Pagination cursor, will return accounts after given address, in descending order.
     * 
     * @var ?string $after
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=after')]
    public ?string $after = null;
    
    /**
     * Filter accounts by their balance (default operator is gte)
     * 
     * @var ?int $balance
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=balance')]
    public ?int $balance = null;
    
    /**
     * Parameter used in pagination requests. Maximum page size is set to 15.
     * 
     * Set to the value of next for the next page of results.
     * Set to the value of previous for the previous page of results.
     * No other parameters can be set when this parameter is set.
     * 
     * 
     * @var ?string $cursor
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=cursor')]
    public ?string $cursor = null;
    
    /**
     * Name of the ledger.
     * 
     * @var string $ledger
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;
    
    /**
     * Filter accounts by metadata key value pairs. Nested objects can be used as seen in the example below.
     * 
     * @var ?\formance\stack\Models\Operations\ListAccountsMetadata $metadata
     */
	#[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=metadata')]
    public ?ListAccountsMetadata $metadata = null;
    
    /**
     * The maximum number of results to return per page.
     * 
     * 
     * 
     * @var ?int $pageSize
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pageSize')]
    public ?int $pageSize = null;
    
    /**
     * Parameter used in pagination requests. Maximum page size is set to 15.
     * 
     * Set to the value of next for the next page of results.
     * Set to the value of previous for the previous page of results.
     * No other parameters can be set when this parameter is set.
     * Deprecated, please use `cursor` instead.
     * 
     * 
     * @var ?string $paginationToken
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pagination_token')]
    public ?string $paginationToken = null;
    
	public function __construct()
	{
		$this->address = null;
		$this->after = null;
		$this->balance = null;
		$this->cursor = null;
		$this->ledger = "";
		$this->metadata = null;
		$this->pageSize = null;
		$this->paginationToken = null;
	}
}
