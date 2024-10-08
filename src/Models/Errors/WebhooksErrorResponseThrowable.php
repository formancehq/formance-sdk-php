<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Errors;

class WebhooksErrorResponseThrowable extends \RuntimeException
{
    public WebhooksErrorResponse $container;

    public function __construct(string $message, int $statusCode, WebhooksErrorResponse $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}