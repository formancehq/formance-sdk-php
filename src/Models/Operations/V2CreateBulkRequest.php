<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class V2CreateBulkRequest
{
    /**
     * $requestBody
     *
     * @var ?array<mixed> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?array $requestBody = null;

    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public ?string $ledger;

    /**
     * @param  ?string  $ledger
     * @param  ?array<mixed>  $requestBody
     */
    public function __construct(?string $ledger = null, ?array $requestBody = null)
    {
        $this->ledger = $ledger;
        $this->requestBody = $requestBody;
    }
}