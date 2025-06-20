<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ActivityDebitWalletOutput
{
    /**
     *
     * @var OrchestrationHold $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\OrchestrationHold')]
    public OrchestrationHold $data;

    /**
     * @param  OrchestrationHold  $data
     * @phpstan-pure
     */
    public function __construct(OrchestrationHold $data)
    {
        $this->data = $data;
    }
}