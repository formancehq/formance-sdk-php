<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ListWorkflowsResponse
{
    /**
     * $data
     * 
     * @var array<\formance\stack\Models\Shared\Workflow> $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\Workflow>')]
    public array $data;
    
	public function __construct()
	{
		$this->data = [];
	}
}
