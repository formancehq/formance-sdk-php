<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack;

class SDKConfiguration
{
    public ?\GuzzleHttp\ClientInterface $defaultClient = null;

    public ?\GuzzleHttp\ClientInterface $securityClient = null;

    public ?Models\Shared\Security $security = null;
    /** @var pure-Closure(): string */
    public ?\Closure $securitySource = null;

    public string $serverUrl = '';

    public int $serverIndex = 0;

    public string $language = 'php';

    public string $openapiDocVersion = 'v2.0.9';

    public string $sdkVersion = '2.1.3';

    public string $genVersion = '2.390.6';

    public string $userAgent = 'speakeasy-sdk/php 2.1.3 2.390.6 v2.0.9 formance/formance-sdk';

    public function getServerUrl(): string
    {

        if ($this->serverUrl !== '') {
            return $this->serverUrl;
        }

        return SDK::SERVERS[$this->serverIndex];
    }
    public function hasSecurity(): bool
    {
        return $this->security !== null || $this->securitySource !== null;
    }

    public function getSecurity(): ?Models\Shared\Security
    {
        if ($this->securitySource !== null) {
            $security = new Models\Shared\Security();
            $security->authorization = $this->securitySource->call($this);

            return $security;
        } else {
            return $this->security;
        }
    }
}