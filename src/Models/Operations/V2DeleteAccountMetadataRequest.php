<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class V2DeleteAccountMetadataRequest
{
    /**
     * Account address
     *
     * @var string $address
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=address')]
    public string $address;

    /**
     * The key to remove.
     *
     * @var string $key
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=key')]
    public string $key;

    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;

    /**
     * @param  string  $address
     * @param  string  $key
     * @param  string  $ledger
     * @phpstan-pure
     */
    public function __construct(string $address, string $key, string $ledger)
    {
        $this->address = $address;
        $this->key = $key;
        $this->ledger = $ledger;
    }
}