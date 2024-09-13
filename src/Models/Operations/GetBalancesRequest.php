<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class GetBalancesRequest
{
    /**
     * Filter balances involving given account, either as source or destination.
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
     * Parameter used in pagination requests. Maximum page size is set to 1000.
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
     * The maximum number of results to return per page.
     *
     *
     *
     * @var ?int $pageSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pageSize')]
    public ?int $pageSize = null;

    /**
     * @param  string  $ledger
     * @param  ?string  $address
     * @param  ?string  $after
     * @param  ?string  $cursor
     * @param  ?int  $pageSize
     */
    public function __construct(string $ledger, ?string $address = null, ?string $after = null, ?string $cursor = null, ?int $pageSize = null)
    {
        $this->ledger = $ledger;
        $this->address = $address;
        $this->after = $after;
        $this->cursor = $cursor;
        $this->pageSize = $pageSize;
    }
}