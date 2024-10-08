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
    #[\JMS\Serializer\Annotation\SerializedName('apiKey')]
    public string $apiKey;

    /**
     *
     * @var string $clientID
     */
    #[\JMS\Serializer\Annotation\SerializedName('clientID')]
    public string $clientID;

    /**
     *
     * @var string $endpoint
     */
    #[\JMS\Serializer\Annotation\SerializedName('endpoint')]
    public string $endpoint;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The frequency at which the connector will try to fetch new BalanceTransaction objects from MangoPay API.
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
     * @param  string  $clientID
     * @param  string  $endpoint
     * @param  string  $name
     * @param  ?string  $pollingPeriod
     */
    public function __construct(string $apiKey, string $clientID, string $endpoint, string $name, ?string $pollingPeriod = null)
    {
        $this->apiKey = $apiKey;
        $this->clientID = $clientID;
        $this->endpoint = $endpoint;
        $this->name = $name;
        $this->pollingPeriod = $pollingPeriod;
    }
}