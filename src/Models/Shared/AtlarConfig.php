<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class AtlarConfig
{
    /**
     * The access key used by the connector for authorizing requests to the Atlar API.
     *
     * You can obtain it along with the associated secret from the Atlar dashboard.
     *
     *
     * @var string $accessKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accessKey')]
    public string $accessKey;

    /**
     * The base URL the client uses for making requests towards the Atlar API.
     *
     *
     *
     * @var ?string $baseUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('baseUrl')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $baseUrl = null;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * Number of items to fetch when querying paginated APIs.
     *
     *
     *
     * @var ?int $pageSize
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pageSize')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $pageSize = null;

    /**
     * The frequency at which the connector tries to fetch new Transaction objects from the Atlar API.
     *
     *
     *
     * @var ?string $pollingPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pollingPeriod')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pollingPeriod = null;

    /**
     * The secret used by the connector for authorizing requests to the Atlar API.
     *
     * You can obtain it along with the associated access key from the Atlar dashboard.
     *
     *
     * @var string $secret
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('secret')]
    public string $secret;

    /**
     * The frequency at which the connector tries to fetch the status of payment initiations from the Atlar API.
     *
     *
     *
     * @var ?string $transferInitiationStatusPollingPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transferInitiationStatusPollingPeriod')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $transferInitiationStatusPollingPeriod = null;

    /**
     * @param  string  $accessKey
     * @param  string  $name
     * @param  string  $secret
     * @param  ?string  $baseUrl
     * @param  ?int  $pageSize
     * @param  ?string  $pollingPeriod
     * @param  ?string  $transferInitiationStatusPollingPeriod
     */
    public function __construct(string $accessKey, string $name, string $secret, ?string $baseUrl = 'https://api.atlar.com', ?int $pageSize = 25, ?string $pollingPeriod = '120s', ?string $transferInitiationStatusPollingPeriod = '120s')
    {
        $this->accessKey = $accessKey;
        $this->name = $name;
        $this->secret = $secret;
        $this->baseUrl = $baseUrl;
        $this->pageSize = $pageSize;
        $this->pollingPeriod = $pollingPeriod;
        $this->transferInitiationStatusPollingPeriod = $transferInitiationStatusPollingPeriod;
    }
}