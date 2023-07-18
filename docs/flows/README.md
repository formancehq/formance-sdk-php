# flows

### Available Operations

* [flowsgetServerInfo](#flowsgetserverinfo) - Get server info
* [cancelEvent](#cancelevent) - Cancel a running workflow
* [createWorkflow](#createworkflow) - Create workflow
* [getInstance](#getinstance) - Get a workflow instance by id
* [getInstanceHistory](#getinstancehistory) - Get a workflow instance history by id
* [getInstanceStageHistory](#getinstancestagehistory) - Get a workflow instance stage history
* [getWorkflow](#getworkflow) - Get a flow by id
* [listInstances](#listinstances) - List instances of a workflow
* [listWorkflows](#listworkflows) - List registered workflows
* [runWorkflow](#runworkflow) - Run workflow
* [sendEvent](#sendevent) - Send an event to a running workflow

## flowsgetServerInfo

Get server info

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->flows->flowsgetServerInfo();

    if ($response->serverInfo !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## cancelEvent

Cancel a running workflow

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\CancelEventRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CancelEventRequest();
    $request->instanceID = 'dolorem';

    $response = $sdk->flows->cancelEvent($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## createWorkflow

Create a workflow

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Shared\CreateWorkflowRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateWorkflowRequest();
    $request->name = 'Rose Rolfson';
    $request->stages = [
        [
            'excepturi' => 'accusantium',
            'iure' => 'culpa',
        ],
        [
            'sapiente' => 'architecto',
            'mollitia' => 'dolorem',
            'culpa' => 'consequuntur',
            'repellat' => 'mollitia',
        ],
    ];

    $response = $sdk->flows->createWorkflow($request);

    if ($response->createWorkflowResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getInstance

Get a workflow instance by id

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\GetInstanceRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetInstanceRequest();
    $request->instanceID = 'occaecati';

    $response = $sdk->flows->getInstance($request);

    if ($response->getWorkflowInstanceResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getInstanceHistory

Get a workflow instance history by id

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\GetInstanceHistoryRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetInstanceHistoryRequest();
    $request->instanceID = 'numquam';

    $response = $sdk->flows->getInstanceHistory($request);

    if ($response->getWorkflowInstanceHistoryResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getInstanceStageHistory

Get a workflow instance stage history

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\GetInstanceStageHistoryRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetInstanceStageHistoryRequest();
    $request->instanceID = 'commodi';
    $request->number = 466311;

    $response = $sdk->flows->getInstanceStageHistory($request);

    if ($response->getWorkflowInstanceHistoryStageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getWorkflow

Get a flow by id

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\GetWorkflowRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetWorkflowRequest();
    $request->flowId = 'molestiae';

    $response = $sdk->flows->getWorkflow($request);

    if ($response->getWorkflowResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## listInstances

List instances of a workflow

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\ListInstancesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListInstancesRequest();
    $request->running = false;
    $request->workflowID = 'velit';

    $response = $sdk->flows->listInstances($request);

    if ($response->listRunsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## listWorkflows

List registered workflows

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->flows->listWorkflows();

    if ($response->listWorkflowsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## runWorkflow

Run workflow

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\RunWorkflowRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RunWorkflowRequest();
    $request->requestBody = [
        'quia' => 'quis',
        'vitae' => 'laborum',
        'animi' => 'enim',
    ];
    $request->wait = false;
    $request->workflowID = 'odit';

    $response = $sdk->flows->runWorkflow($request);

    if ($response->runWorkflowResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## sendEvent

Send an event to a running workflow

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\SendEventRequest;
use \formance\stack\Models\Operations\SendEventRequestBody;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SendEventRequest();
    $request->requestBody = new SendEventRequestBody();
    $request->requestBody->name = 'Jimmy Wiegand';
    $request->instanceID = 'possimus';

    $response = $sdk->flows->sendEvent($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
