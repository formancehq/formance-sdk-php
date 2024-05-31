<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;


class CreateTriggerResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * Created trigger
     *
     * @var ?\formance\stack\Models\Shared\CreateTriggerResponse $createTriggerResponse
     */
    public ?\formance\stack\Models\Shared\CreateTriggerResponse $createTriggerResponse = null;

    /**
     * General error
     *
     * @var ?\formance\stack\Models\Shared\Error $error
     */
    public ?\formance\stack\Models\Shared\Error $error = null;

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
        $this->createTriggerResponse = null;
        $this->error = null;
        $this->statusCode = 0;
        $this->rawResponse = null;
    }
}