<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class V2AddMetadataOnTransactionRequest
{
    /**
     * Use an idempotency key
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=Idempotency-Key')]
    public ?string $idempotencyKey = null;

    /**
     * metadata
     *
     * @var ?array<string, string> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?array $requestBody = null;

    /**
     * Set the dryRun mode. Dry run mode doesn't add the logs to the database or publish a message to the message broker.
     *
     * @var ?bool $dryRun
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=dryRun')]
    public ?bool $dryRun = null;

    /**
     * Transaction ID.
     *
     * @var \Brick\Math\BigInteger $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public \Brick\Math\BigInteger $id;

    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;

    /**
     * @param  \Brick\Math\BigInteger  $id
     * @param  string  $ledger
     * @param  ?string  $idempotencyKey
     * @param  ?array<string, string>  $requestBody
     * @param  ?bool  $dryRun
     */
    public function __construct(\Brick\Math\BigInteger $id, string $ledger, ?string $idempotencyKey = null, ?array $requestBody = null, ?bool $dryRun = null)
    {
        $this->id = $id;
        $this->ledger = $ledger;
        $this->idempotencyKey = $idempotencyKey;
        $this->requestBody = $requestBody;
        $this->dryRun = $dryRun;
    }
}