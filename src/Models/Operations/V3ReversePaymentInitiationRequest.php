<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class V3ReversePaymentInitiationRequest
{
    /**
     * The payment initiation ID
     *
     * @var string $paymentInitiationID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=paymentInitiationID')]
    public string $paymentInitiationID;

    /**
     *
     * @var ?Shared\V3ReversePaymentInitiationRequest $v3ReversePaymentInitiationRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\V3ReversePaymentInitiationRequest $v3ReversePaymentInitiationRequest = null;

    /**
     * @param  string  $paymentInitiationID
     * @param  ?Shared\V3ReversePaymentInitiationRequest  $v3ReversePaymentInitiationRequest
     * @phpstan-pure
     */
    public function __construct(string $paymentInitiationID, ?Shared\V3ReversePaymentInitiationRequest $v3ReversePaymentInitiationRequest = null)
    {
        $this->paymentInitiationID = $paymentInitiationID;
        $this->v3ReversePaymentInitiationRequest = $v3ReversePaymentInitiationRequest;
    }
}