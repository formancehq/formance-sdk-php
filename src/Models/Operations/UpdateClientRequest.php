<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class UpdateClientRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\formance\stack\Models\Shared\UpdateClientRequest $updateClientRequest = null;

    /**
     * Client ID
     *
     * @var string $clientId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=clientId')]
    public string $clientId;

    public function __construct()
    {
        $this->updateClientRequest = null;
        $this->clientId = '';
    }
}