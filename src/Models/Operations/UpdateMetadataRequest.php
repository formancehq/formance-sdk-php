<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class UpdateMetadataRequest
{
    /**
     * The payment ID.
     *
     * @var string $paymentId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=paymentId')]
    public string $paymentId;

    /**
     * $requestBody
     *
     * @var ?array<string, string> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?array $requestBody;

    /**
     * @param  string  $paymentId
     * @param  ?array<string, string>  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $paymentId, ?array $requestBody = null)
    {
        $this->paymentId = $paymentId;
        $this->requestBody = $requestBody;
    }
}