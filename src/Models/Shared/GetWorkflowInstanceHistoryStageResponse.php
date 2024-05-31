<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class GetWorkflowInstanceHistoryStageResponse
{
    /**
     * $data
     *
     * @var array<\formance\stack\Models\Shared\WorkflowInstanceHistoryStage> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\WorkflowInstanceHistoryStage>')]
    public array $data;

    public function __construct()
    {
        $this->data = [];
    }
}