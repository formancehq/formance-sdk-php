<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;


class RevertTransactionResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * Error
     *
     * @var ?\formance\stack\Models\Shared\ErrorResponse $errorResponse
     */
    public ?\formance\stack\Models\Shared\ErrorResponse $errorResponse = null;

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
     * OK
     *
     * @var ?\formance\stack\Models\Shared\TransactionResponse $transactionResponse
     */
    public ?\formance\stack\Models\Shared\TransactionResponse $transactionResponse = null;

    public function __construct()
    {
        $this->contentType = '';
        $this->errorResponse = null;
        $this->statusCode = 0;
        $this->rawResponse = null;
        $this->transactionResponse = null;
    }
}