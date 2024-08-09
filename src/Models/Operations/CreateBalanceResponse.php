<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;


class CreateBalanceResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * Created balance
     *
     * @var ?\formance\stack\Models\Shared\CreateBalanceResponse $createBalanceResponse
     */
    public ?\formance\stack\Models\Shared\CreateBalanceResponse $createBalanceResponse = null;

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
     * @var ?\formance\stack\Models\Shared\WalletsErrorResponse $walletsErrorResponse
     */
    public ?\formance\stack\Models\Shared\WalletsErrorResponse $walletsErrorResponse = null;

    public function __construct()
    {
        $this->contentType = '';
        $this->createBalanceResponse = null;
        $this->statusCode = 0;
        $this->rawResponse = null;
        $this->walletsErrorResponse = null;
    }
}