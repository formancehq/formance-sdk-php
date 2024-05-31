<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class UpdateMappingRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \formance\stack\Models\Shared\Mapping $mapping;

    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;

    public function __construct()
    {
        $this->mapping = new \formance\stack\Models\Shared\Mapping();
        $this->ledger = '';
    }
}