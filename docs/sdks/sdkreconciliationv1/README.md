# Reconciliation.V1

## Overview

### Available Operations

* [acceptAlert](#acceptalert) - Accept an alert (accepted_by_business)
* [ackAlert](#ackalert) - Acknowledge an alert
* [createPolicy](#createpolicy) - Create a policy
* [createRule](#createrule) - Create a rule
* [deletePolicy](#deletepolicy) - Delete a policy
* [deleteRule](#deleterule) - Delete a rule (cascades to evaluations + alerts + alert events)
* [evaluateRule](#evaluaterule) - Evaluate a rule now
* [getAlert](#getalert) - Get an alert
* [getEvaluation](#getevaluation) - Get an evaluation
* [getPolicy](#getpolicy) - Get a policy
* [getReconciliation](#getreconciliation) - Get a reconciliation
* [getRule](#getrule) - Get a rule
* [getServerInfoReconciliation](#getserverinforeconciliation) - Get server info
* [listAlertEvents](#listalertevents) - List alert events (append-only timeline)
* [listAlerts](#listalerts) - List alerts
* [listEvaluations](#listevaluations) - List evaluations
* [listPolicies](#listpolicies) - List policies
* [listReconciliations](#listreconciliations) - List reconciliations
* [listRules](#listrules) - List rules
* [patchRule](#patchrule) - Patch a rule (partial update)
* [reconcile](#reconcile) - Reconcile using a policy
* [resolveAlert](#resolvealert) - Resolve an alert (fixed_by_booking)
* [snoozeAlert](#snoozealert) - Snooze an alert's notifications until a future instant
* [unsnoozeAlert](#unsnoozealert) - Lift a snooze early

## acceptAlert

Accept an alert (accepted_by_business)

### Example Usage

<!-- UsageSnippet language="php" operationID="acceptAlert" method="post" path="/api/reconciliation/alerts/{alertID}/accept" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Reconciliation;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\AcceptAlertRequest(
    acceptAlertRequest: new \formance\stack\Models\Reconciliation\AcceptAlertRequest(
        by: '<value>',
        note: '<value>',
    ),
    alertID: '5550ef95-072d-4bbb-9d3b-6a9dd307b2bd',
);

$response = $sdk->reconciliation->v1->acceptAlert(
    request: $request
);

if ($response->alertResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\AcceptAlertRequest](../../Models/Operations/AcceptAlertRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\AcceptAlertResponse](../../Models/Operations/AcceptAlertResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## ackAlert

Acknowledge an alert

### Example Usage

<!-- UsageSnippet language="php" operationID="ackAlert" method="post" path="/api/reconciliation/alerts/{alertID}/ack" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Reconciliation;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\AckAlertRequest(
    ackAlertRequest: new \formance\stack\Models\Reconciliation\AckAlertRequest(
        by: 'ops@buildr.com',
    ),
    alertID: '5439ab64-6482-49fb-993f-3411bfe19fef',
);

$response = $sdk->reconciliation->v1->ackAlert(
    request: $request
);

if ($response->alertResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\AckAlertRequest](../../Models/Operations/AckAlertRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\AckAlertResponse](../../Models/Operations/AckAlertResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## createPolicy

Create a policy

### Example Usage

<!-- UsageSnippet language="php" operationID="createPolicy" method="post" path="/api/reconciliation/policies" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Reconciliation;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new \formance\stack\Models\Reconciliation\PolicyRequest(
    ledgerName: 'default',
    ledgerQuery: [
        'key' => '<value>',
    ],
    name: 'XXX',
    paymentsPoolID: 'XXX',
);

$response = $sdk->reconciliation->v1->createPolicy(
    request: $request
);

if ($response->policyResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\formance\stack\Models\Reconciliation\PolicyRequest](../../Models/reconciliation/PolicyRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |

### Response

**[?Operations\CreatePolicyResponse](../../Models/Operations/CreatePolicyResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## createRule

Create a rule

### Example Usage

<!-- UsageSnippet language="php" operationID="createRule" method="post" path="/api/reconciliation/rules" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Reconciliation;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new \formance\stack\Models\Reconciliation\RuleRequest(
    name: '<value>',
    schedule: new \formance\stack\Models\Reconciliation\Schedule(
        expr: '*/15 * * * *',
        kind: Reconciliation\ScheduleKind::OnDemand,
        safetyMargin: '30s',
        tz: 'UTC',
    ),
    templateKind: \formance\stack\Models\Reconciliation\TemplateKind::LedgerVsPoolDrift,
    templateSpec: [
        'key' => '<value>',
        'key1' => '<value>',
        'key2' => '<value>',
    ],
);

$response = $sdk->reconciliation->v1->createRule(
    request: $request
);

if ($response->ruleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\formance\stack\Models\Reconciliation\RuleRequest](../../Models/reconciliation/RuleRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |

### Response

**[?Operations\CreateRuleResponse](../../Models/Operations/CreateRuleResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## deletePolicy

Delete a policy by its id.

### Example Usage

<!-- UsageSnippet language="php" operationID="deletePolicy" method="delete" path="/api/reconciliation/policies/{policyID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\DeletePolicyRequest(
    policyID: 'XXX',
);

$response = $sdk->reconciliation->v1->deletePolicy(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\DeletePolicyRequest](../../Models/Operations/DeletePolicyRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\DeletePolicyResponse](../../Models/Operations/DeletePolicyResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## deleteRule

Delete a rule (cascades to evaluations + alerts + alert events)

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteRule" method="delete" path="/api/reconciliation/rules/{ruleID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\DeleteRuleRequest(
    ruleID: '3254b217-2184-4bf4-bbc8-b529fa29bd7c',
);

$response = $sdk->reconciliation->v1->deleteRule(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\DeleteRuleRequest](../../Models/Operations/DeleteRuleRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\DeleteRuleResponse](../../Models/Operations/DeleteRuleResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## evaluateRule

Evaluate a rule now

### Example Usage

<!-- UsageSnippet language="php" operationID="evaluateRule" method="post" path="/api/reconciliation/rules/{ruleID}/evaluate" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Reconciliation;
use formance\stack\Models\Shared;
use formance\stack\Utils;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\EvaluateRuleRequest(
    evaluateRuleRequest: new \formance\stack\Models\Reconciliation\EvaluateRuleRequest(
        safetyMargin: '30s',
        sourcePITs: [
            'ledger:main#0' => Utils\Utils::parseDateTime('2026-06-30T23:59:59Z'),
            'pool:acct#0' => Utils\Utils::parseDateTime('2026-06-30T23:00:00Z'),
        ],
    ),
    ruleID: 'e9d27cb2-b7fc-4383-b319-936c01a66703',
);

$response = $sdk->reconciliation->v1->evaluateRule(
    request: $request
);

if ($response->evaluationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\EvaluateRuleRequest](../../Models/Operations/EvaluateRuleRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\EvaluateRuleResponse](../../Models/Operations/EvaluateRuleResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## getAlert

Get an alert

### Example Usage

<!-- UsageSnippet language="php" operationID="getAlert" method="get" path="/api/reconciliation/alerts/{alertID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\GetAlertRequest(
    alertID: 'c7c54af9-81a4-4208-844b-4f25f89cf8a1',
);

$response = $sdk->reconciliation->v1->getAlert(
    request: $request
);

if ($response->alertResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\GetAlertRequest](../../Models/Operations/GetAlertRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\GetAlertResponse](../../Models/Operations/GetAlertResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## getEvaluation

Get an evaluation

### Example Usage

<!-- UsageSnippet language="php" operationID="getEvaluation" method="get" path="/api/reconciliation/evaluations/{evaluationID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\GetEvaluationRequest(
    evaluationID: '121717d3-a7d1-444d-9d11-6ea2dc0d3db5',
);

$response = $sdk->reconciliation->v1->getEvaluation(
    request: $request
);

if ($response->evaluationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetEvaluationRequest](../../Models/Operations/GetEvaluationRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetEvaluationResponse](../../Models/Operations/GetEvaluationResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## getPolicy

Get a policy

### Example Usage

<!-- UsageSnippet language="php" operationID="getPolicy" method="get" path="/api/reconciliation/policies/{policyID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\GetPolicyRequest(
    policyID: 'XXX',
);

$response = $sdk->reconciliation->v1->getPolicy(
    request: $request
);

if ($response->policyResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\GetPolicyRequest](../../Models/Operations/GetPolicyRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\GetPolicyResponse](../../Models/Operations/GetPolicyResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## getReconciliation

Get a reconciliation

### Example Usage

<!-- UsageSnippet language="php" operationID="getReconciliation" method="get" path="/api/reconciliation/reconciliations/{reconciliationID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\GetReconciliationRequest(
    reconciliationID: 'XXX',
);

$response = $sdk->reconciliation->v1->getReconciliation(
    request: $request
);

if ($response->reconciliationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetReconciliationRequest](../../Models/Operations/GetReconciliationRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetReconciliationResponse](../../Models/Operations/GetReconciliationResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## getRule

Get a rule

### Example Usage

<!-- UsageSnippet language="php" operationID="getRule" method="get" path="/api/reconciliation/rules/{ruleID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\GetRuleRequest(
    ruleID: 'fd71d712-041d-4271-b7c5-c9adac177f52',
);

$response = $sdk->reconciliation->v1->getRule(
    request: $request
);

if ($response->ruleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Operations\GetRuleRequest](../../Models/Operations/GetRuleRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\GetRuleResponse](../../Models/Operations/GetRuleResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## getServerInfoReconciliation

Get server info

### Example Usage

<!-- UsageSnippet language="php" operationID="getServerInfo_reconciliation" method="get" path="/api/reconciliation/_info" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();



$response = $sdk->reconciliation->v1->getServerInfoReconciliation(

);

if ($response->serverInfo !== null) {
    // handle response
}
```

### Response

**[?Operations\GetServerInfoReconciliationResponse](../../Models/Operations/GetServerInfoReconciliationResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## listAlertEvents

Returns a page of the events recorded for this alert — every evaluation
that touched it plus every manual transition. The list is append-only;
events are never modified or deleted. Ordered most-recent-first and
cursor-paginated: a long-lived alert's timeline is unbounded (one row per
failing evaluation), so callers must page through it.


### Example Usage

<!-- UsageSnippet language="php" operationID="listAlertEvents" method="get" path="/api/reconciliation/alerts/{alertID}/events" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\ListAlertEventsRequest(
    alertID: '259536e6-acd5-4e38-9154-10e46ea2bc63',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->reconciliation->v1->listAlertEvents(
    request: $request
);

if ($response->alertEventsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListAlertEventsRequest](../../Models/Operations/ListAlertEventsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListAlertEventsResponse](../../Models/Operations/ListAlertEventsResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## listAlerts

List alerts

### Example Usage

<!-- UsageSnippet language="php" operationID="listAlerts" method="get" path="/api/reconciliation/alerts" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\ListAlertsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->reconciliation->v1->listAlerts(
    request: $request
);

if ($response->alertsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\ListAlertsRequest](../../Models/Operations/ListAlertsRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\ListAlertsResponse](../../Models/Operations/ListAlertsResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## listEvaluations

List evaluations

### Example Usage

<!-- UsageSnippet language="php" operationID="listEvaluations" method="get" path="/api/reconciliation/evaluations" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\ListEvaluationsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->reconciliation->v1->listEvaluations(
    request: $request
);

if ($response->evaluationsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListEvaluationsRequest](../../Models/Operations/ListEvaluationsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListEvaluationsResponse](../../Models/Operations/ListEvaluationsResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## listPolicies

List policies

### Example Usage

<!-- UsageSnippet language="php" operationID="listPolicies" method="get" path="/api/reconciliation/policies" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\ListPoliciesRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->reconciliation->v1->listPolicies(
    request: $request
);

if ($response->policiesCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListPoliciesRequest](../../Models/Operations/ListPoliciesRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListPoliciesResponse](../../Models/Operations/ListPoliciesResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## listReconciliations

List reconciliations

### Example Usage

<!-- UsageSnippet language="php" operationID="listReconciliations" method="get" path="/api/reconciliation/reconciliations" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\ListReconciliationsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->reconciliation->v1->listReconciliations(
    request: $request
);

if ($response->reconciliationsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListReconciliationsRequest](../../Models/Operations/ListReconciliationsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListReconciliationsResponse](../../Models/Operations/ListReconciliationsResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## listRules

List rules

### Example Usage

<!-- UsageSnippet language="php" operationID="listRules" method="get" path="/api/reconciliation/rules" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\ListRulesRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->reconciliation->v1->listRules(
    request: $request
);

if ($response->rulesCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\ListRulesRequest](../../Models/Operations/ListRulesRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\ListRulesResponse](../../Models/Operations/ListRulesResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## patchRule

Patch a rule (partial update)

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRule" method="patch" path="/api/reconciliation/rules/{ruleID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Reconciliation;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\PatchRuleRequest(
    rulePatchRequest: new \formance\stack\Models\Reconciliation\RulePatchRequest(
        schedule: new \formance\stack\Models\Reconciliation\Schedule(
            expr: '*/15 * * * *',
            kind: Reconciliation\ScheduleKind::Cron,
            safetyMargin: '30s',
            tz: 'UTC',
        ),
    ),
    ruleID: '0b4aa7b1-cc5d-4700-91ec-4983510fef86',
);

$response = $sdk->reconciliation->v1->patchRule(
    request: $request
);

if ($response->ruleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\PatchRuleRequest](../../Models/Operations/PatchRuleRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\PatchRuleResponse](../../Models/Operations/PatchRuleResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## reconcile

Reconcile using a policy

### Example Usage

<!-- UsageSnippet language="php" operationID="reconcile" method="post" path="/api/reconciliation/policies/{policyID}/reconciliation" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Reconciliation;
use formance\stack\Models\Shared;
use formance\stack\Utils;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\ReconcileRequest(
    reconciliationRequest: new \formance\stack\Models\Reconciliation\ReconciliationRequest(
        reconciledAtLedger: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
        reconciledAtPayments: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
    ),
    policyID: 'XXX',
);

$response = $sdk->reconciliation->v1->reconcile(
    request: $request
);

if ($response->reconciliationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\ReconcileRequest](../../Models/Operations/ReconcileRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\ReconcileResponse](../../Models/Operations/ReconcileResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## resolveAlert

Resolve an alert (fixed_by_booking)

### Example Usage

<!-- UsageSnippet language="php" operationID="resolveAlert" method="post" path="/api/reconciliation/alerts/{alertID}/resolve" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Reconciliation;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\ResolveAlertRequest(
    resolveAlertRequest: new \formance\stack\Models\Reconciliation\ResolveAlertRequest(
        by: '<value>',
    ),
    alertID: '53527ec3-b39f-4eee-ac1d-6e2bad87f240',
);

$response = $sdk->reconciliation->v1->resolveAlert(
    request: $request
);

if ($response->alertResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ResolveAlertRequest](../../Models/Operations/ResolveAlertRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ResolveAlertResponse](../../Models/Operations/ResolveAlertResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## snoozeAlert

Mutes the alert's webhook notifications until `until`. The alert keeps
failing, keeps its status, and keeps counting against period-green —
only its notifications are suppressed, even if the discrepancy changes.
The first failing evaluation at or after `until` clears the snooze and
notifies once. Re-snoozing overwrites the window. Rejects RESOLVED
alerts and a non-future `until`.


### Example Usage

<!-- UsageSnippet language="php" operationID="snoozeAlert" method="post" path="/api/reconciliation/alerts/{alertID}/snooze" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Reconciliation;
use formance\stack\Models\Shared;
use formance\stack\Utils;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\SnoozeAlertRequest(
    snoozeAlertRequest: new \formance\stack\Models\Reconciliation\SnoozeAlertRequest(
        by: 'ops@buildr.com',
        until: Utils\Utils::parseDateTime('2026-07-17T12:27:27.142Z'),
    ),
    alertID: '96529a25-9005-499e-a0ec-daa0ae32f4cb',
);

$response = $sdk->reconciliation->v1->snoozeAlert(
    request: $request
);

if ($response->alertResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\SnoozeAlertRequest](../../Models/Operations/SnoozeAlertRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\SnoozeAlertResponse](../../Models/Operations/SnoozeAlertResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |

## unsnoozeAlert

Clears an active snooze before its window elapses. Idempotent —
unsnoozing an alert that is not snoozed returns it unchanged.


### Example Usage

<!-- UsageSnippet language="php" operationID="unsnoozeAlert" method="post" path="/api/reconciliation/alerts/{alertID}/unsnooze" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Reconciliation;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\UnsnoozeAlertRequest(
    unsnoozeAlertRequest: new \formance\stack\Models\Reconciliation\UnsnoozeAlertRequest(
        by: 'ops@buildr.com',
    ),
    alertID: 'a1f12fdd-d9de-483a-b3c6-41ec79a76231',
);

$response = $sdk->reconciliation->v1->unsnoozeAlert(
    request: $request
);

if ($response->alertResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UnsnoozeAlertRequest](../../Models/Operations/UnsnoozeAlertRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UnsnoozeAlertResponse](../../Models/Operations/UnsnoozeAlertResponse.md)**

### Errors

| Error Type                                               | Status Code                                              | Content Type                                             |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| \formance\stack\Models\Reconciliation\ErrorResponseError | default                                                  | application/json                                         |
| Errors\SDKException                                      | 4XX, 5XX                                                 | \*/\*                                                    |