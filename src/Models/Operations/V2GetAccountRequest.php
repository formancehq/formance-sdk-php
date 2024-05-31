<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class V2GetAccountRequest
{
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

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=expand')]
    public ?string $expand = null;

    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pit,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $pit = null;

    public function __construct()
    {
        $this->address = '';
        $this->expand = null;
        $this->ledger = '';
        $this->pit = null;
    }
}