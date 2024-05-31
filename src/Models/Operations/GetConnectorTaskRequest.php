<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class GetConnectorTaskRequest
{
    /**
     * The name of the connector.
     *
     * @var \formance\stack\Models\Shared\Connector $connector
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connector')]
    public \formance\stack\Models\Shared\Connector $connector;

    /**
     * The task ID.
     *
     * @var string $taskId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=taskId')]
    public string $taskId;

    public function __construct()
    {
        $this->connector = \formance\stack\Models\Shared\Connector::Stripe;
        $this->taskId = '';
    }
}