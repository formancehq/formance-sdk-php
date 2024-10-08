<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class GetTransactionRequest
{
    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;

    /**
     * Transaction ID.
     *
     * @var int $txid
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=txid')]
    public int $txid;

    /**
     * @param  string  $ledger
     * @param  int  $txid
     */
    public function __construct(string $ledger, int $txid)
    {
        $this->ledger = $ledger;
        $this->txid = $txid;
    }
}