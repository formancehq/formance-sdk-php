<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class GetPoolBalancesRequest
{
    /**
     * Filter balances by date.
     *
     *
     *
     * @var \DateTime $at
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=at,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public \DateTime $at;

    /**
     * The pool ID.
     *
     * @var string $poolId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=poolId')]
    public string $poolId;

    public function __construct()
    {
        $this->at = new \DateTime();
        $this->poolId = '';
    }
}