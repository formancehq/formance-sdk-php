<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class AddMetadataToAccountRequest
{
    /**
     * metadata
     *
     * @var array<string, mixed> $requestBody
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

    public function __construct()
    {
        $this->requestBody = [];
        $this->address = '';
        $this->ledger = '';
    }
}