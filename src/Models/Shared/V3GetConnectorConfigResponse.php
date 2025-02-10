<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3GetConnectorConfigResponse
{
    /**
     *
     * @var V3AdyenConfig|V3AtlarConfig|V3BankingcircleConfig|V3CurrencycloudConfig|V3DummypayConfig|V3GenericConfig|V3MangopayConfig|V3ModulrConfig|V3MoneycorpConfig|V3StripeConfig|V3WiseConfig $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V3AdyenConfig|\formance\stack\Models\Shared\V3AtlarConfig|\formance\stack\Models\Shared\V3BankingcircleConfig|\formance\stack\Models\Shared\V3CurrencycloudConfig|\formance\stack\Models\Shared\V3DummypayConfig|\formance\stack\Models\Shared\V3GenericConfig|\formance\stack\Models\Shared\V3MangopayConfig|\formance\stack\Models\Shared\V3ModulrConfig|\formance\stack\Models\Shared\V3MoneycorpConfig|\formance\stack\Models\Shared\V3StripeConfig|\formance\stack\Models\Shared\V3WiseConfig')]
    public V3AdyenConfig|V3AtlarConfig|V3BankingcircleConfig|V3CurrencycloudConfig|V3DummypayConfig|V3GenericConfig|V3MangopayConfig|V3ModulrConfig|V3MoneycorpConfig|V3StripeConfig|V3WiseConfig $data;

    /**
     * @param  V3AdyenConfig|V3AtlarConfig|V3BankingcircleConfig|V3CurrencycloudConfig|V3DummypayConfig|V3GenericConfig|V3MangopayConfig|V3ModulrConfig|V3MoneycorpConfig|V3StripeConfig|V3WiseConfig  $data
     * @phpstan-pure
     */
    public function __construct(V3AdyenConfig|V3AtlarConfig|V3BankingcircleConfig|V3CurrencycloudConfig|V3DummypayConfig|V3GenericConfig|V3MangopayConfig|V3ModulrConfig|V3MoneycorpConfig|V3StripeConfig|V3WiseConfig $data)
    {
        $this->data = $data;
    }
}