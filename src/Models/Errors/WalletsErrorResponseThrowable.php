<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Errors;

class WalletsErrorResponseThrowable extends \RuntimeException
{
    public WalletsErrorResponse $container;

    public function __construct(string $message, int $statusCode, WalletsErrorResponse $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}