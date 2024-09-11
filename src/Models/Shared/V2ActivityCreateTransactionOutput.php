<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ActivityCreateTransactionOutput
{
    /**
     * $data
     *
     * @var array<OrchestrationV2Transaction> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\OrchestrationV2Transaction>')]
    public array $data;

    /**
     * @param  array<OrchestrationV2Transaction>  $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}