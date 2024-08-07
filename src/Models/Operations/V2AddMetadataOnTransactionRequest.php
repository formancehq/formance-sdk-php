<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
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
     * @var int $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public int $id;

    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;

    public function __construct()
    {
        $this->idempotencyKey = null;
        $this->requestBody = null;
        $this->dryRun = null;
        $this->id = 0;
        $this->ledger = '';
    }
}