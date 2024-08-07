<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class GetTransactionsRequest
{
    /**
     * Parameter used in pagination requests.
     *
     * Set to the value of next for the next page of results.
     * Set to the value of previous for the previous page of results.
     * No other parameters can be set when the cursor is set.
     *
     *
     * @var ?string $cursor
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=cursor')]
    public ?string $cursor = null;

    /**
     * The maximum number of results to return per page
     *
     * @var ?int $pageSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pageSize')]
    public ?int $pageSize = null;

    /**
     * A wallet ID to filter on
     *
     * @var ?string $walletID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=walletID')]
    public ?string $walletID = null;

    public function __construct()
    {
        $this->cursor = null;
        $this->pageSize = null;
        $this->walletID = null;
    }
}