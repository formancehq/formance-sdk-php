<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Errors;

class V3ErrorResponseThrowable extends \RuntimeException
{
    public V3ErrorResponse $container;

    public function __construct(string $message, int $statusCode, V3ErrorResponse $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}