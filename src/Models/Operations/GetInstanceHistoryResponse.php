<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
class GetInstanceHistoryResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * The workflow instance history
     *
     * @var ?Shared\GetWorkflowInstanceHistoryResponse $getWorkflowInstanceHistoryResponse
     */
    public ?Shared\GetWorkflowInstanceHistoryResponse $getWorkflowInstanceHistoryResponse = null;

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
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Shared\GetWorkflowInstanceHistoryResponse  $getWorkflowInstanceHistoryResponse
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Shared\GetWorkflowInstanceHistoryResponse $getWorkflowInstanceHistoryResponse = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->getWorkflowInstanceHistoryResponse = $getWorkflowInstanceHistoryResponse;
    }
}