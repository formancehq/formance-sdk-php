<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class V2CreateBulkRequest
{
    /**
     * $requestBody
     *
     * @var array<Shared\V2BulkElementCreateTransaction|Shared\V2BulkElementAddMetadata|Shared\V2BulkElementRevertTransaction|Shared\V2BulkElementDeleteMetadata> $requestBody
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
     * Make bulk atomic
     *
     * @var ?bool $atomic
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=atomic')]
    public ?bool $atomic = null;

    /**
     * Continue on failure
     *
     * @var ?bool $continueOnFailure
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=continueOnFailure')]
    public ?bool $continueOnFailure = null;

    /**
     * Process bulk elements in parallel
     *
     * @var ?bool $parallel
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=parallel')]
    public ?bool $parallel = null;

    /**
     * @param  array<Shared\V2BulkElementCreateTransaction|Shared\V2BulkElementAddMetadata|Shared\V2BulkElementRevertTransaction|Shared\V2BulkElementDeleteMetadata>  $requestBody
     * @param  string  $ledger
     * @param  ?bool  $atomic
     * @param  ?bool  $continueOnFailure
     * @param  ?bool  $parallel
     * @phpstan-pure
     */
    public function __construct(array $requestBody, string $ledger, ?bool $atomic = null, ?bool $continueOnFailure = null, ?bool $parallel = null)
    {
        $this->requestBody = $requestBody;
        $this->ledger = $ledger;
        $this->atomic = $atomic;
        $this->continueOnFailure = $continueOnFailure;
        $this->parallel = $parallel;
    }
}