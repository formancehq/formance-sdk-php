<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;


class GetManyConfigsResponse
{
    /**
     * OK
     *
     * @var ?\formance\stack\Models\Shared\ConfigsResponse $configsResponse
     */
    public ?\formance\stack\Models\Shared\ConfigsResponse $configsResponse = null;

    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

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

    /**
     * Error
     *
     * @var ?\formance\stack\Models\Shared\WebhooksErrorResponse $webhooksErrorResponse
     */
    public ?\formance\stack\Models\Shared\WebhooksErrorResponse $webhooksErrorResponse = null;

    public function __construct()
    {
        $this->configsResponse = null;
        $this->contentType = '';
        $this->statusCode = 0;
        $this->rawResponse = null;
        $this->webhooksErrorResponse = null;
    }
}