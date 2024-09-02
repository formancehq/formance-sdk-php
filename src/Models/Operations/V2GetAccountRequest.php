<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
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

    /**
     *
     * @var ?string $expand
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=expand')]
    public ?string $expand = null;

    /**
     * Name of the ledger.
     *
     * @var string $ledger
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public ?string $ledger;

    /**
     *
     * @var ?\DateTime $pit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pit,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $pit = null;

    /**
     * @param  ?string  $address
     * @param  ?string  $ledger
     * @param  ?string  $expand
     * @param  ?\DateTime  $pit
     */
    public function __construct(?string $address = null, ?string $ledger = null, ?string $expand = null, ?\DateTime $pit = null)
    {
        $this->address = $address;
        $this->ledger = $ledger;
        $this->expand = $expand;
        $this->pit = $pit;
    }
}