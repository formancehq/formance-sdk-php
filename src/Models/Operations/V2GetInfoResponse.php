<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Errors;
use formance\stack\Models\Shared;
class V2GetInfoResponse
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
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * OK
     *
     * @var ?Shared\V2ConfigInfoResponse $v2ConfigInfoResponse
     */
    public ?Shared\V2ConfigInfoResponse $v2ConfigInfoResponse = null;

    /**
     * Error
     *
     * @var ?Errors\V2ErrorResponse $v2ErrorResponse
     */
    public ?Errors\V2ErrorResponse $v2ErrorResponse = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Shared\V2ConfigInfoResponse  $v2ConfigInfoResponse
     * @param  ?Errors\V2ErrorResponse  $v2ErrorResponse
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Shared\V2ConfigInfoResponse $v2ConfigInfoResponse = null, ?Errors\V2ErrorResponse $v2ErrorResponse = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->v2ConfigInfoResponse = $v2ConfigInfoResponse;
        $this->v2ErrorResponse = $v2ErrorResponse;
    }
}