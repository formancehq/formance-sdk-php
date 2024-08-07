<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class ListInstancesRequest
{
    /**
     * Filter running instances
     *
     * @var ?bool $running
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=running')]
    public ?bool $running = null;

    /**
     * A workflow id
     *
     * @var ?string $workflowID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=workflowID')]
    public ?string $workflowID = null;

    public function __construct()
    {
        $this->running = null;
        $this->workflowID = null;
    }
}