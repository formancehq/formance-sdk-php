<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


enum TransferInitiationStatus: string
{
    case WaitingForValidation = 'WAITING_FOR_VALIDATION';
    case Processing = 'PROCESSING';
    case Processed = 'PROCESSED';
    case Failed = 'FAILED';
    case Rejected = 'REJECTED';
    case Validated = 'VALIDATED';
    case AskRetried = 'ASK_RETRIED';
    case AskReversed = 'ASK_REVERSED';
    case ReverseProcessing = 'REVERSE_PROCESSING';
    case ReverseFailed = 'REVERSE_FAILED';
    case PartiallyReversed = 'PARTIALLY_REVERSED';
    case Reversed = 'REVERSED';
}
