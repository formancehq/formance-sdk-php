<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
class V2CreateWorkflowResponse
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
     * Created workflow
     *
     * @var ?Shared\V2CreateWorkflowResponse $v2CreateWorkflowResponse
     */
    public ?Shared\V2CreateWorkflowResponse $v2CreateWorkflowResponse = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Shared\V2CreateWorkflowResponse  $v2CreateWorkflowResponse
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Shared\V2CreateWorkflowResponse $v2CreateWorkflowResponse = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->v2CreateWorkflowResponse = $v2CreateWorkflowResponse;
    }
}