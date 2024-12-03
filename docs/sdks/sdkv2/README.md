# SDKV2
(*orchestration->v2*)

## Overview

### Available Operations

* [cancelEvent](#cancelevent) - Cancel a running workflow
* [createTrigger](#createtrigger) - Create trigger
* [createWorkflow](#createworkflow) - Create workflow
* [deleteTrigger](#deletetrigger) - Delete trigger
* [deleteWorkflow](#deleteworkflow) - Delete a flow by id
* [getInstance](#getinstance) - Get a workflow instance by id
* [getInstanceHistory](#getinstancehistory) - Get a workflow instance history by id
* [getInstanceStageHistory](#getinstancestagehistory) - Get a workflow instance stage history
* [getServerInfo](#getserverinfo) - Get server info
* [getWorkflow](#getworkflow) - Get a flow by id
* [listInstances](#listinstances) - List instances of a workflow
* [listTriggers](#listtriggers) - List triggers
* [listTriggersOccurrences](#listtriggersoccurrences) - List triggers occurrences
* [listWorkflows](#listworkflows) - List registered workflows
* [readTrigger](#readtrigger) - Read trigger
* [runWorkflow](#runworkflow) - Run workflow
* [sendEvent](#sendevent) - Send an event to a running workflow
* [testTrigger](#testtrigger) - Test trigger

## cancelEvent

Cancel a running workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2CancelEventRequest(
    instanceID: 'xxx',
);

$response = $sdk->orchestration->v2->cancelEvent(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2CancelEventRequest](../../Models/Operations/V2CancelEventRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\V2CancelEventResponse](../../Models/Operations/V2CancelEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createTrigger

Create trigger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Shared\V2TriggerData(
    event: '<value>',
    workflowID: '<id>',
);

$response = $sdk->orchestration->v2->createTrigger(
    request: $request
);

if ($response->v2CreateTriggerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                    | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `$request`                                                   | [Shared\V2TriggerData](../../Models/Shared/V2TriggerData.md) | :heavy_check_mark:                                           | The request object to use for the request.                   |

### Response

**[?Operations\V2CreateTriggerResponse](../../Models/Operations/V2CreateTriggerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createWorkflow

Create a workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Shared\V2CreateWorkflowRequest(
    stages: [
        [
            'key' => '<value>',
        ],
    ],
);

$response = $sdk->orchestration->v2->createWorkflow(
    request: $request
);

if ($response->v2CreateWorkflowResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Shared\V2CreateWorkflowRequest](../../Models/Shared/V2CreateWorkflowRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V2CreateWorkflowResponse](../../Models/Operations/V2CreateWorkflowResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## deleteTrigger

Read trigger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2DeleteTriggerRequest(
    triggerID: '<id>',
);

$response = $sdk->orchestration->v2->deleteTrigger(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2DeleteTriggerRequest](../../Models/Operations/V2DeleteTriggerRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\V2DeleteTriggerResponse](../../Models/Operations/V2DeleteTriggerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## deleteWorkflow

Delete a flow by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2DeleteWorkflowRequest(
    flowId: 'xxx',
);

$response = $sdk->orchestration->v2->deleteWorkflow(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\V2DeleteWorkflowRequest](../../Models/Operations/V2DeleteWorkflowRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\V2DeleteWorkflowResponse](../../Models/Operations/V2DeleteWorkflowResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getInstance

Get a workflow instance by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2GetInstanceRequest(
    instanceID: 'xxx',
);

$response = $sdk->orchestration->v2->getInstance(
    request: $request
);

if ($response->v2GetWorkflowInstanceResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2GetInstanceRequest](../../Models/Operations/V2GetInstanceRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\V2GetInstanceResponse](../../Models/Operations/V2GetInstanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getInstanceHistory

Get a workflow instance history by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2GetInstanceHistoryRequest(
    instanceID: 'xxx',
);

$response = $sdk->orchestration->v2->getInstanceHistory(
    request: $request
);

if ($response->v2GetWorkflowInstanceHistoryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\V2GetInstanceHistoryRequest](../../Models/Operations/V2GetInstanceHistoryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\V2GetInstanceHistoryResponse](../../Models/Operations/V2GetInstanceHistoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getInstanceStageHistory

Get a workflow instance stage history

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2GetInstanceStageHistoryRequest(
    instanceID: 'xxx',
    number: 0,
);

$response = $sdk->orchestration->v2->getInstanceStageHistory(
    request: $request
);

if ($response->v2GetWorkflowInstanceHistoryStageResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\V2GetInstanceStageHistoryRequest](../../Models/Operations/V2GetInstanceStageHistoryRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\V2GetInstanceStageHistoryResponse](../../Models/Operations/V2GetInstanceStageHistoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getServerInfo

Get server info

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();



$response = $sdk->orchestration->v2->getServerInfo(

);

if ($response->v2ServerInfo !== null) {
    // handle response
}
```

### Response

**[?Operations\V2GetServerInfoResponse](../../Models/Operations/V2GetServerInfoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getWorkflow

Get a flow by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2GetWorkflowRequest(
    flowId: 'xxx',
);

$response = $sdk->orchestration->v2->getWorkflow(
    request: $request
);

if ($response->v2GetWorkflowResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2GetWorkflowRequest](../../Models/Operations/V2GetWorkflowRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\V2GetWorkflowResponse](../../Models/Operations/V2GetWorkflowResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listInstances

List instances of a workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2ListInstancesRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
    running: true,
    workflowID: 'xxx',
);

$response = $sdk->orchestration->v2->listInstances(
    request: $request
);

if ($response->v2ListRunsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2ListInstancesRequest](../../Models/Operations/V2ListInstancesRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\V2ListInstancesResponse](../../Models/Operations/V2ListInstancesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTriggers

List triggers

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2ListTriggersRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->orchestration->v2->listTriggers(
    request: $request
);

if ($response->v2ListTriggersResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\V2ListTriggersRequest](../../Models/Operations/V2ListTriggersRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\V2ListTriggersResponse](../../Models/Operations/V2ListTriggersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTriggersOccurrences

List triggers occurrences

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2ListTriggersOccurrencesRequest(
    triggerID: '<id>',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->orchestration->v2->listTriggersOccurrences(
    request: $request
);

if ($response->v2ListTriggersOccurrencesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\V2ListTriggersOccurrencesRequest](../../Models/Operations/V2ListTriggersOccurrencesRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\V2ListTriggersOccurrencesResponse](../../Models/Operations/V2ListTriggersOccurrencesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listWorkflows

List registered workflows

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2ListWorkflowsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->orchestration->v2->listWorkflows(
    request: $request
);

if ($response->v2ListWorkflowsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2ListWorkflowsRequest](../../Models/Operations/V2ListWorkflowsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\V2ListWorkflowsResponse](../../Models/Operations/V2ListWorkflowsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## readTrigger

Read trigger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2ReadTriggerRequest(
    triggerID: '<id>',
);

$response = $sdk->orchestration->v2->readTrigger(
    request: $request
);

if ($response->v2ReadTriggerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2ReadTriggerRequest](../../Models/Operations/V2ReadTriggerRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\V2ReadTriggerResponse](../../Models/Operations/V2ReadTriggerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## runWorkflow

Run workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2RunWorkflowRequest(
    workflowID: 'xxx',
);

$response = $sdk->orchestration->v2->runWorkflow(
    request: $request
);

if ($response->v2RunWorkflowResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2RunWorkflowRequest](../../Models/Operations/V2RunWorkflowRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\V2RunWorkflowResponse](../../Models/Operations/V2RunWorkflowResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## sendEvent

Send an event to a running workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\V2SendEventRequest(
    instanceID: 'xxx',
);

$response = $sdk->orchestration->v2->sendEvent(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\V2SendEventRequest](../../Models/Operations/V2SendEventRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\V2SendEventResponse](../../Models/Operations/V2SendEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## testTrigger

Test trigger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\TestTriggerRequest(
    triggerID: '<id>',
);

$response = $sdk->orchestration->v2->testTrigger(
    request: $request
);

if ($response->v2TestTriggerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\TestTriggerRequest](../../Models/Operations/TestTriggerRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\TestTriggerResponse](../../Models/Operations/TestTriggerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\V2Error      | default             | application/json    |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |