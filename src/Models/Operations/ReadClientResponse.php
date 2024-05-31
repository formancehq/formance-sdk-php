<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;


class ReadClientResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * Retrieved client
     *
     * @var ?\formance\stack\Models\Shared\ReadClientResponse $readClientResponse
     */
    public ?\formance\stack\Models\Shared\ReadClientResponse $readClientResponse = null;

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
        $this->readClientResponse = null;
        $this->statusCode = 0;
        $this->rawResponse = null;
    }
}