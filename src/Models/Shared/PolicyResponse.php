<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class PolicyResponse
{
    /**
     *
     * @var Policy $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\Policy')]
    public Policy $data;

    /**
     * @param  Policy  $data
     */
    public function __construct(Policy $data)
    {
        $this->data = $data;
    }
}