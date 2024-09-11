<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class ListConnectorTasksV1Request
{
    /**
     * The name of the connector.
     *
     * @var Shared\Connector $connector
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connector')]
    public Shared\Connector $connector;

    /**
     * The connector ID.
     *
     * @var string $connectorId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connectorId')]
    public string $connectorId;

    /**
     * Parameter used in pagination requests. Maximum page size is set to 15.
     *
     * Set to the value of next for the next page of results.
     * Set to the value of previous for the previous page of results.
     * No other parameters can be set when this parameter is set.
     *
     *
     * @var ?string $cursor
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=cursor')]
    public ?string $cursor = null;

    /**
     * The maximum number of results to return per page.
     *
     *
     *
     * @var ?int $pageSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pageSize')]
    public ?int $pageSize = null;

    /**
     * @param  Shared\Connector  $connector
     * @param  string  $connectorId
     * @param  ?string  $cursor
     * @param  ?int  $pageSize
     */
    public function __construct(Shared\Connector $connector, string $connectorId, ?string $cursor = null, ?int $pageSize = null)
    {
        $this->connector = $connector;
        $this->connectorId = $connectorId;
        $this->cursor = $cursor;
        $this->pageSize = $pageSize;
    }
}