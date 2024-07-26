<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2GetWorkflowInstanceHistoryStageResponse
{
    /**
     * $data
     *
     * @var array<\formance\stack\Models\Shared\V2WorkflowInstanceHistoryStage> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\V2WorkflowInstanceHistoryStage>')]
    public array $data;

    public function __construct()
    {
        $this->data = [];
    }
}