<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class ReconcileRequest
{
    /**
     *
     * @var Shared\ReconciliationRequest $reconciliationRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\ReconciliationRequest $reconciliationRequest;

    /**
     * The policy ID.
     *
     * @var string $policyID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=policyID')]
    public string $policyID;

    /**
     * @param  Shared\ReconciliationRequest  $reconciliationRequest
     * @param  string  $policyID
     */
    public function __construct(Shared\ReconciliationRequest $reconciliationRequest, string $policyID)
    {
        $this->reconciliationRequest = $reconciliationRequest;
        $this->policyID = $policyID;
    }
}