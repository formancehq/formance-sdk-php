<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class CreateSecretRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\formance\stack\Models\Shared\CreateSecretRequest $createSecretRequest = null;

    /**
     * Client ID
     *
     * @var string $clientId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=clientId')]
    public string $clientId;

    public function __construct()
    {
        $this->createSecretRequest = null;
        $this->clientId = '';
    }
}