<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class DeleteWorkflowRequest
{
    /**
     * The flow id
     *
     * @var string $flowId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=flowId')]
    public string $flowId;

    /**
     * @param  string  $flowId
     * @phpstan-pure
     */
    public function __construct(string $flowId)
    {
        $this->flowId = $flowId;
    }
}