<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack;

class Orchestration 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Cancel a running workflow
     * 
     * Cancel a running workflow
     * 
     * @param \formance\stack\Models\Operations\CancelEventRequest $request
     * @return \formance\stack\Models\Operations\CancelEventResponse
     */
	public function cancelEvent(
        \formance\stack\Models\Operations\CancelEventRequest $request,
    ): \formance\stack\Models\Operations\CancelEventResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances/{instanceID}/abort', \formance\stack\Models\Operations\CancelEventRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\stack\Models\Operations\CancelEventResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create workflow
     * 
     * Create a workflow
     * 
     * @param \formance\stack\Models\Shared\CreateWorkflowRequest $request
     * @return \formance\stack\Models\Operations\CreateWorkflowResponse
     */
	public function createWorkflow(
        \formance\stack\Models\Shared\CreateWorkflowRequest $request,
    ): \formance\stack\Models\Operations\CreateWorkflowResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/workflows');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\stack\Models\Operations\CreateWorkflowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createWorkflowResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\CreateWorkflowResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a workflow instance by id
     * 
     * Get a workflow instance by id
     * 
     * @param \formance\stack\Models\Operations\GetInstanceRequest $request
     * @return \formance\stack\Models\Operations\GetInstanceResponse
     */
	public function getInstance(
        \formance\stack\Models\Operations\GetInstanceRequest $request,
    ): \formance\stack\Models\Operations\GetInstanceResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances/{instanceID}', \formance\stack\Models\Operations\GetInstanceRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\stack\Models\Operations\GetInstanceResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWorkflowInstanceResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\GetWorkflowInstanceResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a workflow instance history by id
     * 
     * Get a workflow instance history by id
     * 
     * @param \formance\stack\Models\Operations\GetInstanceHistoryRequest $request
     * @return \formance\stack\Models\Operations\GetInstanceHistoryResponse
     */
	public function getInstanceHistory(
        \formance\stack\Models\Operations\GetInstanceHistoryRequest $request,
    ): \formance\stack\Models\Operations\GetInstanceHistoryResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances/{instanceID}/history', \formance\stack\Models\Operations\GetInstanceHistoryRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\stack\Models\Operations\GetInstanceHistoryResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWorkflowInstanceHistoryResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\GetWorkflowInstanceHistoryResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a workflow instance stage history
     * 
     * Get a workflow instance stage history
     * 
     * @param \formance\stack\Models\Operations\GetInstanceStageHistoryRequest $request
     * @return \formance\stack\Models\Operations\GetInstanceStageHistoryResponse
     */
	public function getInstanceStageHistory(
        \formance\stack\Models\Operations\GetInstanceStageHistoryRequest $request,
    ): \formance\stack\Models\Operations\GetInstanceStageHistoryResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances/{instanceID}/stages/{number}/history', \formance\stack\Models\Operations\GetInstanceStageHistoryRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\stack\Models\Operations\GetInstanceStageHistoryResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWorkflowInstanceHistoryStageResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\GetWorkflowInstanceHistoryStageResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a flow by id
     * 
     * Get a flow by id
     * 
     * @param \formance\stack\Models\Operations\GetWorkflowRequest $request
     * @return \formance\stack\Models\Operations\GetWorkflowResponse
     */
	public function getWorkflow(
        \formance\stack\Models\Operations\GetWorkflowRequest $request,
    ): \formance\stack\Models\Operations\GetWorkflowResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/workflows/{flowId}', \formance\stack\Models\Operations\GetWorkflowRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\stack\Models\Operations\GetWorkflowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWorkflowResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\GetWorkflowResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List instances of a workflow
     * 
     * List instances of a workflow
     * 
     * @param \formance\stack\Models\Operations\ListInstancesRequest $request
     * @return \formance\stack\Models\Operations\ListInstancesResponse
     */
	public function listInstances(
        \formance\stack\Models\Operations\ListInstancesRequest $request,
    ): \formance\stack\Models\Operations\ListInstancesResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\stack\Models\Operations\ListInstancesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\stack\Models\Operations\ListInstancesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listRunsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\ListRunsResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List registered workflows
     * 
     * List registered workflows
     * 
     * @return \formance\stack\Models\Operations\ListWorkflowsResponse
     */
	public function listWorkflows(
    ): \formance\stack\Models\Operations\ListWorkflowsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/workflows');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\stack\Models\Operations\ListWorkflowsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listWorkflowsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\ListWorkflowsResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get server info
     * 
     * @return \formance\stack\Models\Operations\OrchestrationgetServerInfoResponse
     */
	public function orchestrationgetServerInfo(
    ): \formance\stack\Models\Operations\OrchestrationgetServerInfoResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/_info');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\stack\Models\Operations\OrchestrationgetServerInfoResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->serverInfo = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\ServerInfo', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Run workflow
     * 
     * Run workflow
     * 
     * @param \formance\stack\Models\Operations\RunWorkflowRequest $request
     * @return \formance\stack\Models\Operations\RunWorkflowResponse
     */
	public function runWorkflow(
        \formance\stack\Models\Operations\RunWorkflowRequest $request,
    ): \formance\stack\Models\Operations\RunWorkflowResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/workflows/{workflowID}/instances', \formance\stack\Models\Operations\RunWorkflowRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\stack\Models\Operations\RunWorkflowRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\stack\Models\Operations\RunWorkflowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->runWorkflowResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\RunWorkflowResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Send an event to a running workflow
     * 
     * Send an event to a running workflow
     * 
     * @param \formance\stack\Models\Operations\SendEventRequest $request
     * @return \formance\stack\Models\Operations\SendEventResponse
     */
	public function sendEvent(
        \formance\stack\Models\Operations\SendEventRequest $request,
    ): \formance\stack\Models\Operations\SendEventResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances/{instanceID}/events', \formance\stack\Models\Operations\SendEventRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\stack\Models\Operations\SendEventResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\stack\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
}