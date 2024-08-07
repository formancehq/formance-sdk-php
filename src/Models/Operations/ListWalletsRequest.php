<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class ListWalletsRequest
{
    /**
     * Parameter used in pagination requests.
     *
     * Set to the value of next for the next page of results.
     * Set to the value of previous for the previous page of results.
     * No other parameters can be set when the pagination token is set.
     *
     *
     * @var ?string $cursor
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=cursor')]
    public ?string $cursor = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=expand')]
    public ?string $expand = null;

    /**
     * Filter wallets by metadata key value pairs. Nested objects can be used as seen in the example below.
     *
     * @var ?array<string, string> $metadata
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=metadata')]
    public ?array $metadata = null;

    /**
     * Filter on wallet name
     *
     * @var ?string $name
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=name')]
    public ?string $name = null;

    /**
     * The maximum number of results to return per page
     *
     * @var ?int $pageSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pageSize')]
    public ?int $pageSize = null;

    public function __construct()
    {
        $this->cursor = null;
        $this->expand = null;
        $this->metadata = null;
        $this->name = null;
        $this->pageSize = null;
    }
}