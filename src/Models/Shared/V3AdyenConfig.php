<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3AdyenConfig
{
    /**
     *
     * @var string $apiKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('apiKey')]
    public string $apiKey;

    /**
     *
     * @var string $companyID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('companyID')]
    public string $companyID;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?string $liveEndpointPrefix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('liveEndpointPrefix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $liveEndpointPrefix = null;

    /**
     *
     * @var ?string $webhookPassword
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('webhookPassword')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $webhookPassword = null;

    /**
     *
     * @var ?string $webhookUsername
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('webhookUsername')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $webhookUsername = null;

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
     * @param  string  $companyID
     * @param  string  $name
     * @param  ?string  $liveEndpointPrefix
     * @param  ?int  $pageSize
     * @param  ?string  $pollingPeriod
     * @param  ?string  $provider
     * @param  ?string  $webhookPassword
     * @param  ?string  $webhookUsername
     * @phpstan-pure
     */
    public function __construct(string $apiKey, string $companyID, string $name, ?string $liveEndpointPrefix = null, ?string $webhookPassword = null, ?string $webhookUsername = null, ?int $pageSize = 25, ?string $pollingPeriod = '2m', ?string $provider = 'Adyen')
    {
        $this->apiKey = $apiKey;
        $this->companyID = $companyID;
        $this->name = $name;
        $this->liveEndpointPrefix = $liveEndpointPrefix;
        $this->webhookPassword = $webhookPassword;
        $this->webhookUsername = $webhookUsername;
        $this->pageSize = $pageSize;
        $this->pollingPeriod = $pollingPeriod;
        $this->provider = $provider;
    }
}