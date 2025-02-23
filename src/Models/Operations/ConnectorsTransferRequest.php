<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class ConnectorsTransferRequest
{
    /**
     *
     * @var Shared\TransferRequest $transferRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\TransferRequest $transferRequest;

    /**
     * The name of the connector.
     *
     * @var Shared\Connector $connector
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connector')]
    public Shared\Connector $connector;

    /**
     * @param  Shared\TransferRequest  $transferRequest
     * @param  Shared\Connector  $connector
     * @phpstan-pure
     */
    public function __construct(Shared\TransferRequest $transferRequest, Shared\Connector $connector)
    {
        $this->transferRequest = $transferRequest;
        $this->connector = $connector;
    }
}