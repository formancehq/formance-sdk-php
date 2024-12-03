<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack;

use formance\stack\Models\Operations;
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
    }

    /**
     * Show stack version information
     *
     * @return Operations\GetVersionsResponse
     * @throws \formance\stack\Models\Errors\SDKException
     */
    public function getVersions(): Operations\GetVersionsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/versions');
        $urlOverride = null;
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
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