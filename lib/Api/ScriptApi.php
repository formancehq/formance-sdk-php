<?php
/**
 * ScriptApi
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
 * The version of the OpenAPI document: v0.2.6
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
 * ScriptApi Class Doc Comment
 *
 * @category Class
 * @package  Formance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ScriptApi
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
        'runScript' => [
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
     * Operation runScript
     *
     * Execute a Numscript.
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  \Formance\Model\Script $script script (required)
     * @param  bool $preview Set the preview mode. Preview mode doesn&#39;t add the logs to the database or publish a message to the message broker. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['runScript'] to see the possible values for this operation
     *
     * @throws \Formance\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Formance\Model\ScriptResult
     * @deprecated
     */
    public function runScript($ledger, $script, $preview = null, string $contentType = self::contentTypes['runScript'][0])
    {
        list($response) = $this->runScriptWithHttpInfo($ledger, $script, $preview, $contentType);
        return $response;
    }

    /**
     * Operation runScriptWithHttpInfo
     *
     * Execute a Numscript.
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  \Formance\Model\Script $script (required)
     * @param  bool $preview Set the preview mode. Preview mode doesn&#39;t add the logs to the database or publish a message to the message broker. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['runScript'] to see the possible values for this operation
     *
     * @throws \Formance\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Formance\Model\ScriptResult, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function runScriptWithHttpInfo($ledger, $script, $preview = null, string $contentType = self::contentTypes['runScript'][0])
    {
        $request = $this->runScriptRequest($ledger, $script, $preview, $contentType);

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
                    if ('\Formance\Model\ScriptResult' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Formance\Model\ScriptResult' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Formance\Model\ScriptResult', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Formance\Model\ScriptResult';
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
                        '\Formance\Model\ScriptResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation runScriptAsync
     *
     * Execute a Numscript.
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  \Formance\Model\Script $script (required)
     * @param  bool $preview Set the preview mode. Preview mode doesn&#39;t add the logs to the database or publish a message to the message broker. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['runScript'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function runScriptAsync($ledger, $script, $preview = null, string $contentType = self::contentTypes['runScript'][0])
    {
        return $this->runScriptAsyncWithHttpInfo($ledger, $script, $preview, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation runScriptAsyncWithHttpInfo
     *
     * Execute a Numscript.
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  \Formance\Model\Script $script (required)
     * @param  bool $preview Set the preview mode. Preview mode doesn&#39;t add the logs to the database or publish a message to the message broker. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['runScript'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function runScriptAsyncWithHttpInfo($ledger, $script, $preview = null, string $contentType = self::contentTypes['runScript'][0])
    {
        $returnType = '\Formance\Model\ScriptResult';
        $request = $this->runScriptRequest($ledger, $script, $preview, $contentType);

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
     * Create request for operation 'runScript'
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  \Formance\Model\Script $script (required)
     * @param  bool $preview Set the preview mode. Preview mode doesn&#39;t add the logs to the database or publish a message to the message broker. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['runScript'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function runScriptRequest($ledger, $script, $preview = null, string $contentType = self::contentTypes['runScript'][0])
    {

        // verify the required parameter 'ledger' is set
        if ($ledger === null || (is_array($ledger) && count($ledger) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ledger when calling runScript'
            );
        }

        // verify the required parameter 'script' is set
        if ($script === null || (is_array($script) && count($script) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $script when calling runScript'
            );
        }



        $resourcePath = '/api/ledger/{ledger}/script';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $preview,
            'preview', // param base name
            'boolean', // openApiType
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
        if (isset($script)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($script));
            } else {
                $httpBody = $script;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
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
