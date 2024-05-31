<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class DeletePolicyRequest
{
    /**
     * The policy ID.
     *
     * @var string $policyID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=policyID')]
    public string $policyID;

    public function __construct()
    {
        $this->policyID = '';
    }
}