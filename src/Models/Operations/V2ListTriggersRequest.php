<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use \formance\stack\Utils\SpeakeasyMetadata;
class V2ListTriggersRequest
{
    /**
     * Parameter used in pagination requests.
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
     * search by name
     * 
     * @var ?string $name
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=name')]
    public ?string $name = null;
    
    /**
     * The maximum number of results to return per page.
     * 
     * 
     * 
     * @var ?int $pageSize
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pageSize')]
    public ?int $pageSize = null;
    
	public function __construct()
	{
		$this->cursor = null;
		$this->name = null;
		$this->pageSize = null;
	}
}
