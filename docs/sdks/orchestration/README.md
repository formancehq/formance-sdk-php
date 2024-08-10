# Orchestration


### Available Operations

* [cancelEvent](#cancelevent) - Cancel a running workflow
* [createTrigger](#createtrigger) - Create trigger
* [createWorkflow](#createworkflow) - Create workflow
* [deleteTrigger](#deletetrigger) - Delete trigger
* [deleteWorkflow](#deleteworkflow) - Delete a flow by id
* [getInstance](#getinstance) - Get a workflow instance by id
* [getInstanceHistory](#getinstancehistory) - Get a workflow instance history by id
* [getInstanceStageHistory](#getinstancestagehistory) - Get a workflow instance stage history
* [getWorkflow](#getworkflow) - Get a flow by id
* [listInstances](#listinstances) - List instances of a workflow
* [listTriggers](#listtriggers) - List triggers
* [listTriggersOccurrences](#listtriggersoccurrences) - List triggers occurrences
* [listWorkflows](#listworkflows) - List registered workflows
* [orchestrationgetServerInfo](#orchestrationgetserverinfo) - Get server info
* [readTrigger](#readtrigger) - Read trigger
* [runWorkflow](#runworkflow) - Run workflow
* [sendEvent](#sendevent) - Send an event to a running workflow
* [testTrigger](#testtrigger) - Test trigger
* [v2CancelEvent](#v2cancelevent) - Cancel a running workflow
* [v2CreateTrigger](#v2createtrigger) - Create trigger
* [v2CreateWorkflow](#v2createworkflow) - Create workflow
* [v2DeleteTrigger](#v2deletetrigger) - Delete trigger
* [v2DeleteWorkflow](#v2deleteworkflow) - Delete a flow by id
* [v2GetInstance](#v2getinstance) - Get a workflow instance by id
* [v2GetInstanceHistory](#v2getinstancehistory) - Get a workflow instance history by id
* [v2GetInstanceStageHistory](#v2getinstancestagehistory) - Get a workflow instance stage history
* [v2GetServerInfo](#v2getserverinfo) - Get server info
* [v2GetWorkflow](#v2getworkflow) - Get a flow by id
* [v2ListInstances](#v2listinstances) - List instances of a workflow
* [v2ListTriggers](#v2listtriggers) - List triggers
* [v2ListTriggersOccurrences](#v2listtriggersoccurrences) - List triggers occurrences
* [v2ListWorkflows](#v2listworkflows) - List registered workflows
* [v2ReadTrigger](#v2readtrigger) - Read trigger
* [v2RunWorkflow](#v2runworkflow) - Run workflow
* [v2SendEvent](#v2sendevent) - Send an event to a running workflow

## cancelEvent

Cancel a running workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CancelEventRequest(
        instanceID: 'xxx',
    );
    $response = $sdk->orchestration->cancelEvent($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\CancelEventRequest](../../Models/Operations/CancelEventRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\CancelEventResponse](../../Models/Operations/CancelEventResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## createTrigger

Create trigger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Shared\TriggerData(
        event: '<value>',
        workflowID: '<value>',
        filter: '<value>',
        name: '<value>',
        vars: [
            'paradigms' => '<value>',
        ],
    );
    $response = $sdk->orchestration->createTrigger($request);

    if ($response->createTriggerResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                | Type                                                     | Required                                                 | Description                                              |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `$request`                                               | [Shared\TriggerData](../../Models/Shared/TriggerData.md) | :heavy_check_mark:                                       | The request object to use for the request.               |


### Response

**[?Operations\CreateTriggerResponse](../../Models/Operations/CreateTriggerResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## createWorkflow

Create a workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Shared\CreateWorkflowRequest(
        stages: [
            [
                'why' => '<value>',
            ],
        ],
        name: '<value>',
    );
    $response = $sdk->orchestration->createWorkflow($request);

    if ($response->createWorkflowResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Shared\CreateWorkflowRequest](../../Models/Shared/CreateWorkflowRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |


### Response

**[?Operations\CreateWorkflowResponse](../../Models/Operations/CreateWorkflowResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## deleteTrigger

Read trigger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\DeleteTriggerRequest(
        triggerID: '<value>',
    );
    $response = $sdk->orchestration->deleteTrigger($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\DeleteTriggerRequest](../../Models/Operations/DeleteTriggerRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\DeleteTriggerResponse](../../Models/Operations/DeleteTriggerResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## deleteWorkflow

Delete a flow by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\DeleteWorkflowRequest(
        flowId: 'xxx',
    );
    $response = $sdk->orchestration->deleteWorkflow($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\DeleteWorkflowRequest](../../Models/Operations/DeleteWorkflowRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\DeleteWorkflowResponse](../../Models/Operations/DeleteWorkflowResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## getInstance

Get a workflow instance by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetInstanceRequest(
        instanceID: 'xxx',
    );
    $response = $sdk->orchestration->getInstance($request);

    if ($response->getWorkflowInstanceResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetInstanceRequest](../../Models/Operations/GetInstanceRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\GetInstanceResponse](../../Models/Operations/GetInstanceResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## getInstanceHistory

Get a workflow instance history by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetInstanceHistoryRequest(
        instanceID: 'xxx',
    );
    $response = $sdk->orchestration->getInstanceHistory($request);

    if ($response->getWorkflowInstanceHistoryResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetInstanceHistoryRequest](../../Models/Operations/GetInstanceHistoryRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\GetInstanceHistoryResponse](../../Models/Operations/GetInstanceHistoryResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## getInstanceStageHistory

Get a workflow instance stage history

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetInstanceStageHistoryRequest(
        instanceID: 'xxx',
    );
    $response = $sdk->orchestration->getInstanceStageHistory($request);

    if ($response->getWorkflowInstanceHistoryStageResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetInstanceStageHistoryRequest](../../Models/Operations/GetInstanceStageHistoryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\GetInstanceStageHistoryResponse](../../Models/Operations/GetInstanceStageHistoryResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## getWorkflow

Get a flow by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetWorkflowRequest(
        flowId: 'xxx',
    );
    $response = $sdk->orchestration->getWorkflow($request);

    if ($response->getWorkflowResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetWorkflowRequest](../../Models/Operations/GetWorkflowRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\GetWorkflowResponse](../../Models/Operations/GetWorkflowResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## listInstances

List instances of a workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListInstancesRequest(
        running: true,
        workflowID: 'xxx',
    );
    $response = $sdk->orchestration->listInstances($request);

    if ($response->listRunsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListInstancesRequest](../../Models/Operations/ListInstancesRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\ListInstancesResponse](../../Models/Operations/ListInstancesResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## listTriggers

List triggers

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListTriggersRequest(
        name: '<value>',
    );
    $response = $sdk->orchestration->listTriggers($request);

    if ($response->listTriggersResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListTriggersRequest](../../Models/Operations/ListTriggersRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?Operations\ListTriggersResponse](../../Models/Operations/ListTriggersResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## listTriggersOccurrences

List triggers occurrences

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListTriggersOccurrencesRequest(
        triggerID: '<value>',
    );
    $response = $sdk->orchestration->listTriggersOccurrences($request);

    if ($response->listTriggersOccurrencesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListTriggersOccurrencesRequest](../../Models/Operations/ListTriggersOccurrencesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\ListTriggersOccurrencesResponse](../../Models/Operations/ListTriggersOccurrencesResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## listWorkflows

List registered workflows

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->orchestration->listWorkflows();

    if ($response->listWorkflowsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?Operations\ListWorkflowsResponse](../../Models/Operations/ListWorkflowsResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## orchestrationgetServerInfo

Get server info

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->orchestration->orchestrationgetServerInfo();

    if ($response->serverInfo !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?Operations\OrchestrationgetServerInfoResponse](../../Models/Operations/OrchestrationgetServerInfoResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## readTrigger

Read trigger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ReadTriggerRequest(
        triggerID: '<value>',
    );
    $response = $sdk->orchestration->readTrigger($request);

    if ($response->readTriggerResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\ReadTriggerRequest](../../Models/Operations/ReadTriggerRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\ReadTriggerResponse](../../Models/Operations/ReadTriggerResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## runWorkflow

Run workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RunWorkflowRequest(
        workflowID: 'xxx',
        requestBody: [
            'off' => '<value>',
        ],
        wait: false,
    );
    $response = $sdk->orchestration->runWorkflow($request);

    if ($response->runWorkflowResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\RunWorkflowRequest](../../Models/Operations/RunWorkflowRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\RunWorkflowResponse](../../Models/Operations/RunWorkflowResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## sendEvent

Send an event to a running workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\SendEventRequest(
        instanceID: 'xxx',
        requestBody: new Operations\SendEventRequestBody(
            name: '<value>',
        ),
    );
    $response = $sdk->orchestration->sendEvent($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\SendEventRequest](../../Models/Operations/SendEventRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |


### Response

**[?Operations\SendEventResponse](../../Models/Operations/SendEventResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\Error                              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## testTrigger

Test trigger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\TestTriggerRequest(
        triggerID: '<value>',
        requestBody: [
            'bluetooth' => '<value>',
        ],
    );
    $response = $sdk->orchestration->testTrigger($request);

    if ($response->v2TestTriggerResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\TestTriggerRequest](../../Models/Operations/TestTriggerRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\TestTriggerResponse](../../Models/Operations/TestTriggerResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2CancelEvent

Cancel a running workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2CancelEventRequest(
        instanceID: 'xxx',
    );
    $response = $sdk->orchestration->v2CancelEvent($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2CancelEventRequest](../../Models/Operations/V2CancelEventRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\V2CancelEventResponse](../../Models/Operations/V2CancelEventResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2CreateTrigger

Create trigger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Shared\V2TriggerData(
        event: '<value>',
        workflowID: '<value>',
        filter: '<value>',
        name: '<value>',
        vars: [
            'primary' => '<value>',
        ],
    );
    $response = $sdk->orchestration->v2CreateTrigger($request);

    if ($response->v2CreateTriggerResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                    | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `$request`                                                   | [Shared\V2TriggerData](../../Models/Shared/V2TriggerData.md) | :heavy_check_mark:                                           | The request object to use for the request.                   |


### Response

**[?Operations\V2CreateTriggerResponse](../../Models/Operations/V2CreateTriggerResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2CreateWorkflow

Create a workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Shared\V2CreateWorkflowRequest(
        stages: [
            [
                'system' => '<value>',
            ],
        ],
        name: '<value>',
    );
    $response = $sdk->orchestration->v2CreateWorkflow($request);

    if ($response->v2CreateWorkflowResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Shared\V2CreateWorkflowRequest](../../Models/Shared/V2CreateWorkflowRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?Operations\V2CreateWorkflowResponse](../../Models/Operations/V2CreateWorkflowResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2DeleteTrigger

Read trigger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2DeleteTriggerRequest(
        triggerID: '<value>',
    );
    $response = $sdk->orchestration->v2DeleteTrigger($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2DeleteTriggerRequest](../../Models/Operations/V2DeleteTriggerRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\V2DeleteTriggerResponse](../../Models/Operations/V2DeleteTriggerResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2DeleteWorkflow

Delete a flow by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2DeleteWorkflowRequest(
        flowId: 'xxx',
    );
    $response = $sdk->orchestration->v2DeleteWorkflow($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\V2DeleteWorkflowRequest](../../Models/Operations/V2DeleteWorkflowRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\V2DeleteWorkflowResponse](../../Models/Operations/V2DeleteWorkflowResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2GetInstance

Get a workflow instance by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2GetInstanceRequest(
        instanceID: 'xxx',
    );
    $response = $sdk->orchestration->v2GetInstance($request);

    if ($response->v2GetWorkflowInstanceResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2GetInstanceRequest](../../Models/Operations/V2GetInstanceRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\V2GetInstanceResponse](../../Models/Operations/V2GetInstanceResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2GetInstanceHistory

Get a workflow instance history by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2GetInstanceHistoryRequest(
        instanceID: 'xxx',
    );
    $response = $sdk->orchestration->v2GetInstanceHistory($request);

    if ($response->v2GetWorkflowInstanceHistoryResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\V2GetInstanceHistoryRequest](../../Models/Operations/V2GetInstanceHistoryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?Operations\V2GetInstanceHistoryResponse](../../Models/Operations/V2GetInstanceHistoryResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2GetInstanceStageHistory

Get a workflow instance stage history

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2GetInstanceStageHistoryRequest(
        instanceID: 'xxx',
    );
    $response = $sdk->orchestration->v2GetInstanceStageHistory($request);

    if ($response->v2GetWorkflowInstanceHistoryStageResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\V2GetInstanceStageHistoryRequest](../../Models/Operations/V2GetInstanceStageHistoryRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?Operations\V2GetInstanceStageHistoryResponse](../../Models/Operations/V2GetInstanceStageHistoryResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2GetServerInfo

Get server info

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->orchestration->v2GetServerInfo();

    if ($response->v2ServerInfo !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?Operations\V2GetServerInfoResponse](../../Models/Operations/V2GetServerInfoResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2GetWorkflow

Get a flow by id

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2GetWorkflowRequest(
        flowId: 'xxx',
    );
    $response = $sdk->orchestration->v2GetWorkflow($request);

    if ($response->v2GetWorkflowResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2GetWorkflowRequest](../../Models/Operations/V2GetWorkflowRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\V2GetWorkflowResponse](../../Models/Operations/V2GetWorkflowResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2ListInstances

List instances of a workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ListInstancesRequest(
        cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
        pageSize: 100,
        running: true,
        workflowID: 'xxx',
    );
    $response = $sdk->orchestration->v2ListInstances($request);

    if ($response->v2ListRunsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2ListInstancesRequest](../../Models/Operations/V2ListInstancesRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\V2ListInstancesResponse](../../Models/Operations/V2ListInstancesResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2ListTriggers

List triggers

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ListTriggersRequest(
        cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
        name: '<value>',
        pageSize: 100,
    );
    $response = $sdk->orchestration->v2ListTriggers($request);

    if ($response->v2ListTriggersResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\V2ListTriggersRequest](../../Models/Operations/V2ListTriggersRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\V2ListTriggersResponse](../../Models/Operations/V2ListTriggersResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2ListTriggersOccurrences

List triggers occurrences

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ListTriggersOccurrencesRequest(
        triggerID: '<value>',
        cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
        pageSize: 100,
    );
    $response = $sdk->orchestration->v2ListTriggersOccurrences($request);

    if ($response->v2ListTriggersOccurrencesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\V2ListTriggersOccurrencesRequest](../../Models/Operations/V2ListTriggersOccurrencesRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?Operations\V2ListTriggersOccurrencesResponse](../../Models/Operations/V2ListTriggersOccurrencesResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2ListWorkflows

List registered workflows

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ListWorkflowsRequest(
        cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
        pageSize: 100,
    );
    $response = $sdk->orchestration->v2ListWorkflows($request);

    if ($response->v2ListWorkflowsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2ListWorkflowsRequest](../../Models/Operations/V2ListWorkflowsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\V2ListWorkflowsResponse](../../Models/Operations/V2ListWorkflowsResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2ReadTrigger

Read trigger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ReadTriggerRequest(
        triggerID: '<value>',
    );
    $response = $sdk->orchestration->v2ReadTrigger($request);

    if ($response->v2ReadTriggerResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2ReadTriggerRequest](../../Models/Operations/V2ReadTriggerRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\V2ReadTriggerResponse](../../Models/Operations/V2ReadTriggerResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2RunWorkflow

Run workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2RunWorkflowRequest(
        workflowID: 'xxx',
        requestBody: [
            'Wooden' => '<value>',
        ],
        wait: false,
    );
    $response = $sdk->orchestration->v2RunWorkflow($request);

    if ($response->v2RunWorkflowResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2RunWorkflowRequest](../../Models/Operations/V2RunWorkflowRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\V2RunWorkflowResponse](../../Models/Operations/V2RunWorkflowResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## v2SendEvent

Send an event to a running workflow

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2SendEventRequest(
        instanceID: 'xxx',
        requestBody: new Operations\V2SendEventRequestBody(
            name: '<value>',
        ),
    );
    $response = $sdk->orchestration->v2SendEvent($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\V2SendEventRequest](../../Models/Operations/V2SendEventRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\V2SendEventResponse](../../Models/Operations/V2SendEventResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2Error                            | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |
