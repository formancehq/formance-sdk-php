<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


enum V3ErrorsEnum: string
{
    case Internal = 'INTERNAL';
    case Validation = 'VALIDATION';
    case InvalidId = 'INVALID_ID';
    case MissingOrInvalidBody = 'MISSING_OR_INVALID_BODY';
    case Conflict = 'CONFLICT';
    case NotFound = 'NOT_FOUND';
}
