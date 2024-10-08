<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class V2CreateLedgerRequest
{
    /**
     *
     * @var ?Shared\V2CreateLedgerRequest $v2CreateLedgerRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\V2CreateLedgerRequest $v2CreateLedgerRequest = null;

    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;

    /**
     * @param  string  $ledger
     * @param  ?Shared\V2CreateLedgerRequest  $v2CreateLedgerRequest
     */
    public function __construct(string $ledger, ?Shared\V2CreateLedgerRequest $v2CreateLedgerRequest = null)
    {
        $this->ledger = $ledger;
        $this->v2CreateLedgerRequest = $v2CreateLedgerRequest;
    }
}