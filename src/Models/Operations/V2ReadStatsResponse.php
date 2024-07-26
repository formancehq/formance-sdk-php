<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;


class V2ReadStatsResponse
{
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
     * @var ?\formance\stack\Models\Shared\V2ErrorResponse $v2ErrorResponse
     */
    public ?\formance\stack\Models\Shared\V2ErrorResponse $v2ErrorResponse = null;

    /**
     * OK
     *
     * @var ?\formance\stack\Models\Shared\V2StatsResponse $v2StatsResponse
     */
    public ?\formance\stack\Models\Shared\V2StatsResponse $v2StatsResponse = null;

    public function __construct()
    {
        $this->contentType = '';
        $this->statusCode = 0;
        $this->rawResponse = null;
        $this->v2ErrorResponse = null;
        $this->v2StatsResponse = null;
    }
}