<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ActivityCreateTransactionOutput
{
    /**
     *
     * @var OrchestrationTransaction $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationTransaction')]
    public OrchestrationTransaction $data;

    /**
     * @param  OrchestrationTransaction  $data
     */
    public function __construct(OrchestrationTransaction $data)
    {
        $this->data = $data;
    }
}