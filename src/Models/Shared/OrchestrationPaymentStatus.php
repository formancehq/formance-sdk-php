<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


enum OrchestrationPaymentStatus: string
{
    case Pending = 'PENDING';
    case Active = 'ACTIVE';
    case Terminated = 'TERMINATED';
    case Failed = 'FAILED';
    case Succeeded = 'SUCCEEDED';
    case Cancelled = 'CANCELLED';
}
