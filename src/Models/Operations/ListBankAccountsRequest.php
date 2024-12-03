<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class ListBankAccountsRequest
{
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
     * The maximum number of results to return per page.
     *
     *
     *
     * @var ?int $pageSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pageSize')]
    public ?int $pageSize = null;

    /**
     * Fields used to sort payments (default is date:desc).
     *
     * @var ?array<string> $sort
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?array $sort = null;

    /**
     * @param  ?string  $cursor
     * @param  ?int  $pageSize
     * @param  ?array<string>  $sort
     */
    public function __construct(?string $cursor = null, ?array $sort = null, ?int $pageSize = 15)
    {
        $this->cursor = $cursor;
        $this->pageSize = $pageSize;
        $this->sort = $sort;
    }
}