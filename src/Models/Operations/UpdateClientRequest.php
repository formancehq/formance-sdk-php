<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class UpdateClientRequest
{
    /**
     *
     * @var ?Shared\UpdateClientRequest $updateClientRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\UpdateClientRequest $updateClientRequest = null;

    /**
     * Client ID
     *
     * @var string $clientId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=clientId')]
    public string $clientId;

    /**
     * @param  string  $clientId
     * @param  ?Shared\UpdateClientRequest  $updateClientRequest
     */
    public function __construct(string $clientId, ?Shared\UpdateClientRequest $updateClientRequest = null)
    {
        $this->clientId = $clientId;
        $this->updateClientRequest = $updateClientRequest;
    }
}