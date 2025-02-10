<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class V2AddMetadataToAccountRequest
{
    /**
     * metadata
     *
     * @var array<string, string> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public array $requestBody;

    /**
     * Exact address of the account. It must match the following regular expressions pattern:
     *
     * ```
     * ^\w+(:\w+)*$
     * ```
     *
     *
     * @var string $address
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=address')]
    public string $address;

    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;

    /**
     * Use an idempotency key
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=Idempotency-Key')]
    public ?string $idempotencyKey = null;

    /**
     * Set the dry run mode. Dry run mode doesn't add the logs to the database or publish a message to the message broker.
     *
     * @var ?bool $dryRun
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=dryRun')]
    public ?bool $dryRun = null;

    /**
     * @param  array<string, string>  $requestBody
     * @param  string  $address
     * @param  string  $ledger
     * @param  ?string  $idempotencyKey
     * @param  ?bool  $dryRun
     * @phpstan-pure
     */
    public function __construct(array $requestBody, string $address, string $ledger, ?string $idempotencyKey = null, ?bool $dryRun = null)
    {
        $this->requestBody = $requestBody;
        $this->address = $address;
        $this->ledger = $ledger;
        $this->idempotencyKey = $idempotencyKey;
        $this->dryRun = $dryRun;
    }
}