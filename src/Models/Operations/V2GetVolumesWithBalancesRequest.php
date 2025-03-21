<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class V2GetVolumesWithBalancesRequest
{
    /**
     * $requestBody
     *
     * @var array<string, mixed> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public array $requestBody;

    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;

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
     *
     * @var ?\DateTime $endTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=endTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $endTime = null;

    /**
     * Group volumes and balance by the level of the segment of the address
     *
     * @var ?int $groupBy
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=groupBy')]
    public ?int $groupBy = null;

    /**
     * Use insertion date instead of effective date
     *
     * @var ?bool $insertionDate
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=insertionDate')]
    public ?bool $insertionDate = null;

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
     *
     * @var ?\DateTime $startTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=startTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $startTime = null;

    /**
     * @param  array<string, mixed>  $requestBody
     * @param  string  $ledger
     * @param  ?string  $cursor
     * @param  ?\DateTime  $endTime
     * @param  ?int  $groupBy
     * @param  ?bool  $insertionDate
     * @param  ?int  $pageSize
     * @param  ?\DateTime  $startTime
     * @phpstan-pure
     */
    public function __construct(array $requestBody, string $ledger, ?string $cursor = null, ?\DateTime $endTime = null, ?int $groupBy = null, ?bool $insertionDate = null, ?int $pageSize = null, ?\DateTime $startTime = null)
    {
        $this->requestBody = $requestBody;
        $this->ledger = $ledger;
        $this->cursor = $cursor;
        $this->endTime = $endTime;
        $this->groupBy = $groupBy;
        $this->insertionDate = $insertionDate;
        $this->pageSize = $pageSize;
        $this->startTime = $startTime;
    }
}