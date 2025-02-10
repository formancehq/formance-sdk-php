<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class GenericConfig
{
    /**
     *
     * @var string $apiKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('apiKey')]
    public string $apiKey;

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
     * The frequency at which the connector will try to fetch new BalanceTransaction objects from the API.
     *
     *
     *
     * @var ?string $pollingPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pollingPeriod')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pollingPeriod = null;

    /**
     * @param  string  $apiKey
     * @param  string  $endpoint
     * @param  string  $name
     * @param  ?string  $pollingPeriod
     * @phpstan-pure
     */
    public function __construct(string $apiKey, string $endpoint, string $name, ?string $pollingPeriod = '120s')
    {
        $this->apiKey = $apiKey;
        $this->endpoint = $endpoint;
        $this->name = $name;
        $this->pollingPeriod = $pollingPeriod;
    }
}