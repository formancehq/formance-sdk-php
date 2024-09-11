<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ListWorkflowsResponse
{
    /**
     * $data
     *
     * @var array<Workflow> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\Workflow>')]
    public array $data;

    /**
     * @param  array<Workflow>  $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}