<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3MoneycorpConfig
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
     *
     * @var ?int $pageSize
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pageSize')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $pageSize = null;

    /**
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
     * @param  ?int  $pageSize
     * @param  ?string  $pollingPeriod
     * @param  ?string  $provider
     * @phpstan-pure
     */
    public function __construct(string $apiKey, string $clientID, string $endpoint, string $name, ?int $pageSize = 25, ?string $pollingPeriod = '2m', ?string $provider = 'Moneycorp')
    {
        $this->apiKey = $apiKey;
        $this->clientID = $clientID;
        $this->endpoint = $endpoint;
        $this->name = $name;
        $this->pageSize = $pageSize;
        $this->pollingPeriod = $pollingPeriod;
        $this->provider = $provider;
    }
}