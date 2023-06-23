<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;


class ListAllConnectorsResponse
{
    /**
     * OK
     * 
     * @var ?\formance\stack\Models\Shared\ConnectorsResponse $connectorsResponse
     */
	
    public ?\formance\stack\Models\Shared\ConnectorsResponse $connectorsResponse = null;
    
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->connectorsResponse = null;
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}