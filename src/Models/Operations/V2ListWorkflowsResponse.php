<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;


class V2ListWorkflowsResponse
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
     * General error
     *
     * @var ?\formance\stack\Models\Shared\V2Error $v2Error
     */
    public ?\formance\stack\Models\Shared\V2Error $v2Error = null;

    /**
     * List of workflows
     *
     * @var ?\formance\stack\Models\Shared\V2ListWorkflowsResponse $v2ListWorkflowsResponse
     */
    public ?\formance\stack\Models\Shared\V2ListWorkflowsResponse $v2ListWorkflowsResponse = null;

    public function __construct()
    {
        $this->contentType = '';
        $this->statusCode = 0;
        $this->rawResponse = null;
        $this->v2Error = null;
        $this->v2ListWorkflowsResponse = null;
    }
}