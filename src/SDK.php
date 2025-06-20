<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack;

use formance\stack\Hooks\HookContext;
use formance\stack\Models\Operations;
use formance\stack\Utils\Options;
use Speakeasy\Serializer\DeserializationContext;

/**
 * SDK - Formance Stack API: Open, modular foundation for unique payments flows
 *
 *
 * # Introduction
 * This API is documented in **OpenAPI format**.
 *
 * # Authentication
 * Formance Stack offers one forms of authentication:
 *   - OAuth2
 * OAuth2 - an open protocol to allow secure authorization in a simple
 * and standard method from web, mobile and desktop applications.
 * <SecurityDefinitions />
 *
 */
class SDK
{
    public const SERVERS = [
        /** local server */
        'http://localhost',
        /** A per-organization and per-environment API */
        'https://{organization}.{environment}.formance.cloud',
    ];

    public Auth $auth;

    public Ledger $ledger;

    public Orchestration $orchestration;

    public Payments $payments;

    public Reconciliation $reconciliation;

    public Search $search;

    public Wallets $wallets;

    public Webhooks $webhooks;

    /**
     * Returns a new instance of the SDK builder used to configure and create the SDK instance.
     *
     * @return SDKBuilder
     */
    public static function builder(): SDKBuilder
    {
        return new SDKBuilder();
    }

    /**
     * @param  SDKConfiguration  $sdkConfiguration
     */
    public function __construct(
        public SDKConfiguration $sdkConfiguration,
    ) {
        $this->auth = new Auth($this->sdkConfiguration);
        $this->ledger = new Ledger($this->sdkConfiguration);
        $this->orchestration = new Orchestration($this->sdkConfiguration);
        $this->payments = new Payments($this->sdkConfiguration);
        $this->reconciliation = new Reconciliation($this->sdkConfiguration);
        $this->search = new Search($this->sdkConfiguration);
        $this->wallets = new Wallets($this->sdkConfiguration);
        $this->webhooks = new Webhooks($this->sdkConfiguration);
        $this->initHooks();

    }

    private function initHooks(): void
    {
        $preHooksUrl = $this->sdkConfiguration->getTemplatedServerUrl();
        $ret = $this->sdkConfiguration->hooks->sdkInit($preHooksUrl, $this->sdkConfiguration->client);
        if ($preHooksUrl != $ret->url) {
            $this->sdkConfiguration->serverUrl = $ret->url;
        }
    }

    /**
     * Show stack version information
     *
     * @return Operations\GetVersionsResponse
     * @throws \formance\stack\Models\Errors\SDKException
     */
    public function getVersions(?Options $options = null): Operations\GetVersionsResponse
    {
        $baseUrl = $this->sdkConfiguration->getTemplatedServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/versions');
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext($this->sdkConfiguration, $baseUrl, 'getVersions', ['auth:read'], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['default'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\formance\stack\Models\Shared\GetVersionsResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetVersionsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    getVersionsResponse: $obj);

                return $response;
            } else {
                throw new \formance\stack\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \formance\stack\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }
}