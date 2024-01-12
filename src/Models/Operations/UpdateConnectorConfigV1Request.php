<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use \formance\stack\Utils\SpeakeasyMetadata;
class UpdateConnectorConfigV1Request
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public mixed $requestBody;
    
    /**
     * The name of the connector.
     * 
     * @var \formance\stack\Models\Shared\Connector $connector
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connector')]
    public \formance\stack\Models\Shared\Connector $connector;
    
    /**
     * The connector ID.
     * 
     * @var string $connectorId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connectorId')]
    public string $connectorId;
    
	public function __construct()
	{
		$this->requestBody = null;
		$this->connector = \formance\stack\Models\Shared\Connector::Stripe;
		$this->connectorId = "";
	}
}