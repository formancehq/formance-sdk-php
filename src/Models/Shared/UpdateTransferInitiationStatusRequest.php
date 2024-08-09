<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class UpdateTransferInitiationStatusRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\Status>')]
    public Status $status;

    public function __construct()
    {
        $this->status = \formance\stack\Models\Shared\Status::WaitingForValidation;
    }
}