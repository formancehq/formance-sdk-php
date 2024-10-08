<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Errors;

class PaymentsErrorResponseThrowable extends \RuntimeException
{
    public PaymentsErrorResponse $container;

    public function __construct(string $message, int $statusCode, PaymentsErrorResponse $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}