<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;


class ReadUserResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * Retrieved user
     *
     * @var ?\formance\stack\Models\Shared\ReadUserResponse $readUserResponse
     */
    public ?\formance\stack\Models\Shared\ReadUserResponse $readUserResponse = null;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;

    public function __construct()
    {
        $this->contentType = '';
        $this->readUserResponse = null;
        $this->statusCode = 0;
        $this->rawResponse = null;
    }
}