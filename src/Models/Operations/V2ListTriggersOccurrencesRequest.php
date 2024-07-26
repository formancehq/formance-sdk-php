<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class V2ListTriggersOccurrencesRequest
{
    /**
     * Parameter used in pagination requests.
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
     * The trigger id
     *
     * @var string $triggerID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=triggerID')]
    public string $triggerID;

    public function __construct()
    {
        $this->cursor = null;
        $this->pageSize = null;
        $this->triggerID = '';
    }
}