<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2GetWorkflowInstanceHistoryStageResponse
{
    /**
     * $data
     *
     * @var array<V2WorkflowInstanceHistoryStage> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\V2WorkflowInstanceHistoryStage>')]
    public array $data;

    /**
     * @param  array<V2WorkflowInstanceHistoryStage>  $data
     * @phpstan-pure
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}