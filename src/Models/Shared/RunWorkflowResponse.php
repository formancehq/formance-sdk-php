<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class RunWorkflowResponse
{
    /**
     *
     * @var WorkflowInstance $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\WorkflowInstance')]
    public WorkflowInstance $data;

    /**
     * @param  WorkflowInstance  $data
     * @phpstan-pure
     */
    public function __construct(WorkflowInstance $data)
    {
        $this->data = $data;
    }
}