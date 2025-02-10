<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class V2GetTransactionRequest
{
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
     *
     * @var ?string $expand
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=expand')]
    public ?string $expand = null;

    /**
     *
     * @var ?\DateTime $pit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pit,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $pit = null;

    /**
     * @param  \Brick\Math\BigInteger  $id
     * @param  string  $ledger
     * @param  ?string  $expand
     * @param  ?\DateTime  $pit
     * @phpstan-pure
     */
    public function __construct(\Brick\Math\BigInteger $id, string $ledger, ?string $expand = null, ?\DateTime $pit = null)
    {
        $this->id = $id;
        $this->ledger = $ledger;
        $this->expand = $expand;
        $this->pit = $pit;
    }
}