<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class AdyenConfig
{
    /**
     *
     * @var string $apiKey
     */
    #[\JMS\Serializer\Annotation\SerializedName('apiKey')]
    public string $apiKey;

    /**
     *
     * @var string $hmacKey
     */
    #[\JMS\Serializer\Annotation\SerializedName('hmacKey')]
    public string $hmacKey;

    /**
     *
     * @var ?string $liveEndpointPrefix
     */
    #[\JMS\Serializer\Annotation\SerializedName('liveEndpointPrefix')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $liveEndpointPrefix = null;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The frequency at which the connector will try to fetch new BalanceTransaction objects from Adyen API.
     *
     *
     *
     * @var ?string $pollingPeriod
     */
    #[\JMS\Serializer\Annotation\SerializedName('pollingPeriod')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $pollingPeriod = null;

    /**
     * @param  string  $apiKey
     * @param  string  $hmacKey
     * @param  string  $name
     * @param  ?string  $liveEndpointPrefix
     * @param  ?string  $pollingPeriod
     */
    public function __construct(string $apiKey, string $hmacKey, string $name, ?string $liveEndpointPrefix = null, ?string $pollingPeriod = null)
    {
        $this->apiKey = $apiKey;
        $this->hmacKey = $hmacKey;
        $this->name = $name;
        $this->liveEndpointPrefix = $liveEndpointPrefix;
        $this->pollingPeriod = $pollingPeriod;
    }
}