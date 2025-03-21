<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class MangoPayConfig
{
    /**
     *
     * @var string $apiKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('apiKey')]
    public string $apiKey;

    /**
     *
     * @var string $clientID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('clientID')]
    public string $clientID;

    /**
     *
     * @var string $endpoint
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('endpoint')]
    public string $endpoint;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The frequency at which the connector will try to fetch new BalanceTransaction objects from MangoPay API.
     *
     *
     *
     * @var ?string $pollingPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pollingPeriod')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pollingPeriod = null;

    /**
     *
     * @var ?string $provider
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $provider = null;

    /**
     * @param  string  $apiKey
     * @param  string  $clientID
     * @param  string  $endpoint
     * @param  string  $name
     * @param  ?string  $pollingPeriod
     * @param  ?string  $provider
     * @phpstan-pure
     */
    public function __construct(string $apiKey, string $clientID, string $endpoint, string $name, ?string $pollingPeriod = '120s', ?string $provider = 'Mangopay')
    {
        $this->apiKey = $apiKey;
        $this->clientID = $clientID;
        $this->endpoint = $endpoint;
        $this->name = $name;
        $this->pollingPeriod = $pollingPeriod;
        $this->provider = $provider;
    }
}