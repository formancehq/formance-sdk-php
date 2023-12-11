<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;


class GetBalancesAggregatedResponse
{
    /**
     * OK
     * 
     * @var ?\formance\stack\Models\Shared\AggregateBalancesResponse $aggregateBalancesResponse
     */
	
    public ?\formance\stack\Models\Shared\AggregateBalancesResponse $aggregateBalancesResponse = null;
    
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
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->aggregateBalancesResponse = null;
		$this->contentType = "";
		$this->errorResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
