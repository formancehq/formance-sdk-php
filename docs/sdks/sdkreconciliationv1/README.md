# SDKReconciliationV1
(*reconciliation->v1*)

## Overview

### Available Operations

* [createPolicy](#createpolicy) - Create a policy
* [deletePolicy](#deletepolicy) - Delete a policy
* [getPolicy](#getpolicy) - Get a policy
* [getReconciliation](#getreconciliation) - Get a reconciliation
* [listPolicies](#listpolicies) - List policies
* [listReconciliations](#listreconciliations) - List reconciliations
* [reconcile](#reconcile) - Reconcile using a policy
* [reconciliationgetServerInfo](#reconciliationgetserverinfo) - Get server info

## createPolicy

Create a policy

### Example Usage

<!-- UsageSnippet language="php" operationID="createPolicy" method="post" path="/api/reconciliation/policies" -->
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

$request = new Shared\PolicyRequest(
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

| Parameter                                                    | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `$request`                                                   | [Shared\PolicyRequest](../../Models/Shared/PolicyRequest.md) | :heavy_check_mark:                                           | The request object to use for the request.                   |

### Response

**[?Operations\CreatePolicyResponse](../../Models/Operations/CreatePolicyResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ReconciliationErrorResponse | default                            | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

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

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ReconciliationErrorResponse | default                            | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

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

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ReconciliationErrorResponse | default                            | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

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

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ReconciliationErrorResponse | default                            | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

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

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ReconciliationErrorResponse | default                            | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

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

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ReconciliationErrorResponse | default                            | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

## reconcile

Reconcile using a policy

### Example Usage

<!-- UsageSnippet language="php" operationID="reconcile" method="post" path="/api/reconciliation/policies/{policyID}/reconciliation" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
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
    reconciliationRequest: new Shared\ReconciliationRequest(
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

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ReconciliationErrorResponse | default                            | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

## reconciliationgetServerInfo

Get server info

### Example Usage

<!-- UsageSnippet language="php" operationID="reconciliationgetServerInfo" method="get" path="/api/reconciliation/_info" -->
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



$response = $sdk->reconciliation->v1->reconciliationgetServerInfo(

);

if ($response->serverInfo !== null) {
    // handle response
}
```

### Response

**[?Operations\ReconciliationgetServerInfoResponse](../../Models/Operations/ReconciliationgetServerInfoResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ReconciliationErrorResponse | default                            | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |