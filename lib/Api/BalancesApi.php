<?php
/**
 * BalancesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Formance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Formance Stack API
 *
 * Open, modular foundation for unique payments flows  # Introduction This API is documented in **OpenAPI format**.  # Authentication Formance Stack offers one forms of authentication:   - OAuth2 OAuth2 - an open protocol to allow secure authorization in a simple and standard method from web, mobile and desktop applications. <SecurityDefinitions />
 *
 * The version of the OpenAPI document: v0.2.3
 * Contact: support@formance.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Formance\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Formance\ApiException;
use Formance\Configuration;
use Formance\HeaderSelector;
use Formance\ObjectSerializer;

/**
 * BalancesApi Class Doc Comment
 *
 * @category Class
 * @package  Formance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BalancesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getBalances' => [
            'application/json',
        ],
        'getBalancesAggregated' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getBalances
     *
     * Get the balances from a ledger&#39;s account
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $address Filter balances involving given account, either as source or destination. (optional)
     * @param  string $after Pagination cursor, will return accounts after given address, in descending order. (optional)
     * @param  string $pagination_token Parameter used in pagination requests.  Set to the value of next for the next page of results.  Set to the value of previous for the previous page of results. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalances'] to see the possible values for this operation
     *
     * @throws \Formance\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Formance\Model\GetBalances200Response|\Formance\Model\ListAccounts400Response
     */
    public function getBalances($ledger, $address = null, $after = null, $pagination_token = null, string $contentType = self::contentTypes['getBalances'][0])
    {
        list($response) = $this->getBalancesWithHttpInfo($ledger, $address, $after, $pagination_token, $contentType);
        return $response;
    }

    /**
     * Operation getBalancesWithHttpInfo
     *
     * Get the balances from a ledger&#39;s account
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $address Filter balances involving given account, either as source or destination. (optional)
     * @param  string $after Pagination cursor, will return accounts after given address, in descending order. (optional)
     * @param  string $pagination_token Parameter used in pagination requests.  Set to the value of next for the next page of results.  Set to the value of previous for the previous page of results. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalances'] to see the possible values for this operation
     *
     * @throws \Formance\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Formance\Model\GetBalances200Response|\Formance\Model\ListAccounts400Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBalancesWithHttpInfo($ledger, $address = null, $after = null, $pagination_token = null, string $contentType = self::contentTypes['getBalances'][0])
    {
        $request = $this->getBalancesRequest($ledger, $address, $after, $pagination_token, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Formance\Model\GetBalances200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Formance\Model\GetBalances200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Formance\Model\GetBalances200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Formance\Model\ListAccounts400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Formance\Model\ListAccounts400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Formance\Model\ListAccounts400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Formance\Model\GetBalances200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Formance\Model\GetBalances200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Formance\Model\ListAccounts400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBalancesAsync
     *
     * Get the balances from a ledger&#39;s account
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $address Filter balances involving given account, either as source or destination. (optional)
     * @param  string $after Pagination cursor, will return accounts after given address, in descending order. (optional)
     * @param  string $pagination_token Parameter used in pagination requests.  Set to the value of next for the next page of results.  Set to the value of previous for the previous page of results. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBalancesAsync($ledger, $address = null, $after = null, $pagination_token = null, string $contentType = self::contentTypes['getBalances'][0])
    {
        return $this->getBalancesAsyncWithHttpInfo($ledger, $address, $after, $pagination_token, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBalancesAsyncWithHttpInfo
     *
     * Get the balances from a ledger&#39;s account
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $address Filter balances involving given account, either as source or destination. (optional)
     * @param  string $after Pagination cursor, will return accounts after given address, in descending order. (optional)
     * @param  string $pagination_token Parameter used in pagination requests.  Set to the value of next for the next page of results.  Set to the value of previous for the previous page of results. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBalancesAsyncWithHttpInfo($ledger, $address = null, $after = null, $pagination_token = null, string $contentType = self::contentTypes['getBalances'][0])
    {
        $returnType = '\Formance\Model\GetBalances200Response';
        $request = $this->getBalancesRequest($ledger, $address, $after, $pagination_token, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBalances'
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $address Filter balances involving given account, either as source or destination. (optional)
     * @param  string $after Pagination cursor, will return accounts after given address, in descending order. (optional)
     * @param  string $pagination_token Parameter used in pagination requests.  Set to the value of next for the next page of results.  Set to the value of previous for the previous page of results. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBalancesRequest($ledger, $address = null, $after = null, $pagination_token = null, string $contentType = self::contentTypes['getBalances'][0])
    {

        // verify the required parameter 'ledger' is set
        if ($ledger === null || (is_array($ledger) && count($ledger) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ledger when calling getBalances'
            );
        }





        $resourcePath = '/api/ledger/{ledger}/balances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $address,
            'address', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $after,
            'after', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $pagination_token,
            'pagination_token', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($ledger !== null) {
            $resourcePath = str_replace(
                '{' . 'ledger' . '}',
                ObjectSerializer::toPathValue($ledger),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getBalancesAggregated
     *
     * Get the aggregated balances from selected accounts
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $address Filter balances involving given account, either as source or destination. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalancesAggregated'] to see the possible values for this operation
     *
     * @throws \Formance\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Formance\Model\GetBalancesAggregated200Response|\Formance\Model\GetBalancesAggregated400Response
     */
    public function getBalancesAggregated($ledger, $address = null, string $contentType = self::contentTypes['getBalancesAggregated'][0])
    {
        list($response) = $this->getBalancesAggregatedWithHttpInfo($ledger, $address, $contentType);
        return $response;
    }

    /**
     * Operation getBalancesAggregatedWithHttpInfo
     *
     * Get the aggregated balances from selected accounts
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $address Filter balances involving given account, either as source or destination. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalancesAggregated'] to see the possible values for this operation
     *
     * @throws \Formance\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Formance\Model\GetBalancesAggregated200Response|\Formance\Model\GetBalancesAggregated400Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBalancesAggregatedWithHttpInfo($ledger, $address = null, string $contentType = self::contentTypes['getBalancesAggregated'][0])
    {
        $request = $this->getBalancesAggregatedRequest($ledger, $address, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Formance\Model\GetBalancesAggregated200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Formance\Model\GetBalancesAggregated200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Formance\Model\GetBalancesAggregated200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Formance\Model\GetBalancesAggregated400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Formance\Model\GetBalancesAggregated400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Formance\Model\GetBalancesAggregated400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Formance\Model\GetBalancesAggregated200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Formance\Model\GetBalancesAggregated200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Formance\Model\GetBalancesAggregated400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBalancesAggregatedAsync
     *
     * Get the aggregated balances from selected accounts
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $address Filter balances involving given account, either as source or destination. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalancesAggregated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBalancesAggregatedAsync($ledger, $address = null, string $contentType = self::contentTypes['getBalancesAggregated'][0])
    {
        return $this->getBalancesAggregatedAsyncWithHttpInfo($ledger, $address, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBalancesAggregatedAsyncWithHttpInfo
     *
     * Get the aggregated balances from selected accounts
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $address Filter balances involving given account, either as source or destination. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalancesAggregated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBalancesAggregatedAsyncWithHttpInfo($ledger, $address = null, string $contentType = self::contentTypes['getBalancesAggregated'][0])
    {
        $returnType = '\Formance\Model\GetBalancesAggregated200Response';
        $request = $this->getBalancesAggregatedRequest($ledger, $address, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBalancesAggregated'
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $address Filter balances involving given account, either as source or destination. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalancesAggregated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBalancesAggregatedRequest($ledger, $address = null, string $contentType = self::contentTypes['getBalancesAggregated'][0])
    {

        // verify the required parameter 'ledger' is set
        if ($ledger === null || (is_array($ledger) && count($ledger) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ledger when calling getBalancesAggregated'
            );
        }



        $resourcePath = '/api/ledger/{ledger}/aggregate/balances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $address,
            'address', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($ledger !== null) {
            $resourcePath = str_replace(
                '{' . 'ledger' . '}',
                ObjectSerializer::toPathValue($ledger),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
