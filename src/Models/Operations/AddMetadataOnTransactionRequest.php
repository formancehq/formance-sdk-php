<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class AddMetadataOnTransactionRequest
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
     * @var \Brick\Math\BigInteger $txid
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=txid')]
    public \Brick\Math\BigInteger $txid;

    /**
     * metadata
     *
     * @var ?array<string, mixed> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?array $requestBody;

    /**
     * @param  string  $ledger
     * @param  \Brick\Math\BigInteger  $txid
     * @param  ?array<string, mixed>  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $ledger, \Brick\Math\BigInteger $txid, ?array $requestBody = null)
    {
        $this->ledger = $ledger;
        $this->txid = $txid;
        $this->requestBody = $requestBody;
    }
}