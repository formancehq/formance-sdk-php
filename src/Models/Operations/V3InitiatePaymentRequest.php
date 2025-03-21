<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class V3InitiatePaymentRequest
{
    /**
     *
     * @var ?Shared\V3InitiatePaymentRequest $v3InitiatePaymentRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\V3InitiatePaymentRequest $v3InitiatePaymentRequest = null;

    /**
     * If set to true, the request will not have to be validated. This is useful if we want to directly forward the request to the PSP.
     *
     *
     *
     * @var ?bool $noValidation
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=noValidation')]
    public ?bool $noValidation = null;

    /**
     * @param  ?Shared\V3InitiatePaymentRequest  $v3InitiatePaymentRequest
     * @param  ?bool  $noValidation
     * @phpstan-pure
     */
    public function __construct(?Shared\V3InitiatePaymentRequest $v3InitiatePaymentRequest = null, ?bool $noValidation = false)
    {
        $this->v3InitiatePaymentRequest = $v3InitiatePaymentRequest;
        $this->noValidation = $noValidation;
    }
}