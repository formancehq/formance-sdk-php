<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class UpdateMetadataRequest
{
    /**
     * $requestBody
     *
     * @var array<string, string> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public array $requestBody;

    /**
     * The payment ID.
     *
     * @var string $paymentId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=paymentId')]
    public string $paymentId;

    public function __construct()
    {
        $this->requestBody = [];
        $this->paymentId = '';
    }
}