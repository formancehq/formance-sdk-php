<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class ListTransactionsRequest
{
    /**
     * Filter transactions with postings involving given account, either as source or destination (regular expression placed between ^ and $).
     *
     * @var ?string $account
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=account')]
    public ?string $account = null;

    /**
     * Pagination cursor, will return transactions after given txid (in descending order).
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
     * Filter transactions with postings involving given account at destination (regular expression placed between ^ and $).
     *
     * @var ?string $destination
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=destination')]
    public ?string $destination = null;

    /**
     * Filter transactions that occurred before this timestamp.
     *
     * The format is RFC3339 and is exclusive (for example, "2023-01-02T15:04:01Z" excludes the first second of 4th minute).
     *
     *
     * @var ?\DateTime $endTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=endTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $endTime = null;

    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;

    /**
     * Filter transactions by metadata key value pairs. Nested objects can be used as seen in the example below.
     *
     * @var ?array<string, mixed> $metadata
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=metadata')]
    public ?array $metadata = null;

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
     * Find transactions by reference field.
     *
     * @var ?string $reference
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=reference')]
    public ?string $reference = null;

    /**
     * Filter transactions with postings involving given account at source (regular expression placed between ^ and $).
     *
     * @var ?string $source
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=source')]
    public ?string $source = null;

    /**
     * Filter transactions that occurred after this timestamp.
     *
     * The format is RFC3339 and is inclusive (for example, "2023-01-02T15:04:01Z" includes the first second of 4th minute).
     *
     *
     * @var ?\DateTime $startTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=startTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $startTime = null;

    /**
     * @param  string  $ledger
     * @param  ?string  $account
     * @param  ?string  $after
     * @param  ?string  $cursor
     * @param  ?string  $destination
     * @param  ?\DateTime  $endTime
     * @param  ?array<string, mixed>  $metadata
     * @param  ?int  $pageSize
     * @param  ?string  $reference
     * @param  ?string  $source
     * @param  ?\DateTime  $startTime
     */
    public function __construct(string $ledger, ?string $account = null, ?string $after = null, ?string $cursor = null, ?string $destination = null, ?\DateTime $endTime = null, ?array $metadata = null, ?string $reference = null, ?string $source = null, ?\DateTime $startTime = null, ?int $pageSize = 15)
    {
        $this->ledger = $ledger;
        $this->account = $account;
        $this->after = $after;
        $this->cursor = $cursor;
        $this->destination = $destination;
        $this->endTime = $endTime;
        $this->metadata = $metadata;
        $this->pageSize = $pageSize;
        $this->reference = $reference;
        $this->source = $source;
        $this->startTime = $startTime;
    }
}