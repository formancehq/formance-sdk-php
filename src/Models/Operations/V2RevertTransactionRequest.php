<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class V2RevertTransactionRequest
{
    /**
     * Revert transaction at effective date of the original tx
     *
     * @var ?bool $atEffectiveDate
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=atEffectiveDate')]
    public ?bool $atEffectiveDate = null;

    /**
     * Force revert
     *
     * @var ?bool $force
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=force')]
    public ?bool $force = null;

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
     * @param  ?bool  $atEffectiveDate
     * @param  ?bool  $force
     */
    public function __construct(\Brick\Math\BigInteger $id, string $ledger, ?bool $atEffectiveDate = null, ?bool $force = null)
    {
        $this->id = $id;
        $this->ledger = $ledger;
        $this->atEffectiveDate = $atEffectiveDate;
        $this->force = $force;
    }
}