# Reconciliation

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

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Shared\PolicyRequest(
        ledgerName: 'default',
        ledgerQuery: [
            'relationships' => '<value>',
        ],
        name: 'XXX',
        paymentsPoolID: 'XXX',
    );
    $response = $sdk->reconciliation->createPolicy($request);

    if ($response->policyResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                    | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `$request`                                                   | [Shared\PolicyRequest](../../Models/Shared/PolicyRequest.md) | :heavy_check_mark:                                           | The request object to use for the request.                   |

### Response

**[?Operations\CreatePolicyResponse](../../Models/Operations/CreatePolicyResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\ReconciliationErrorResponse        | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## deletePolicy

Delete a policy by its id.

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
    $request = new Operations\DeletePolicyRequest(
        policyID: 'XXX',
    );
    $response = $sdk->reconciliation->deletePolicy($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\DeletePolicyRequest](../../Models/Operations/DeletePolicyRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\DeletePolicyResponse](../../Models/Operations/DeletePolicyResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\ReconciliationErrorResponse        | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## getPolicy

Get a policy

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
    $request = new Operations\GetPolicyRequest(
        policyID: 'XXX',
    );
    $response = $sdk->reconciliation->getPolicy($request);

    if ($response->policyResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\GetPolicyRequest](../../Models/Operations/GetPolicyRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\GetPolicyResponse](../../Models/Operations/GetPolicyResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\ReconciliationErrorResponse        | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## getReconciliation

Get a reconciliation

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
    $request = new Operations\GetReconciliationRequest(
        reconciliationID: 'XXX',
    );
    $response = $sdk->reconciliation->getReconciliation($request);

    if ($response->reconciliationResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetReconciliationRequest](../../Models/Operations/GetReconciliationRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetReconciliationResponse](../../Models/Operations/GetReconciliationResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\ReconciliationErrorResponse        | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## listPolicies

List policies

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
    $request = new Operations\ListPoliciesRequest(
        cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
        pageSize: 100,
    );
    $response = $sdk->reconciliation->listPolicies($request);

    if ($response->policiesCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListPoliciesRequest](../../Models/Operations/ListPoliciesRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListPoliciesResponse](../../Models/Operations/ListPoliciesResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\ReconciliationErrorResponse        | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## listReconciliations

List reconciliations

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
    $request = new Operations\ListReconciliationsRequest(
        cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
        pageSize: 100,
    );
    $response = $sdk->reconciliation->listReconciliations($request);

    if ($response->reconciliationsCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListReconciliationsRequest](../../Models/Operations/ListReconciliationsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListReconciliationsResponse](../../Models/Operations/ListReconciliationsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\ReconciliationErrorResponse        | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## reconcile

Reconcile using a policy

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;
use formance\stack\Utils;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ReconcileRequest(
        reconciliationRequest: new Shared\ReconciliationRequest(
            reconciledAtLedger: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
            reconciledAtPayments: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
        ),
        policyID: 'XXX',
    );
    $response = $sdk->reconciliation->reconcile($request);

    if ($response->reconciliationResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\ReconcileRequest](../../Models/Operations/ReconcileRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\ReconcileResponse](../../Models/Operations/ReconcileResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\ReconciliationErrorResponse        | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## reconciliationgetServerInfo

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
    $response = $sdk->reconciliation->reconciliationgetServerInfo();

    if ($response->serverInfo !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\ReconciliationgetServerInfoResponse](../../Models/Operations/ReconciliationgetServerInfoResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\ReconciliationErrorResponse        | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |
