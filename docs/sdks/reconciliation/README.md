# Reconciliation
(*reconciliation*)

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
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\PolicyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new PolicyRequest();
    $request->ledgerName = 'default';
    $request->ledgerQuery = [
        'relationships' => 'string',
    ];
    $request->name = 'XXX';
    $request->paymentsPoolID = 'XXX';

    $response = $sdk->reconciliation->createPolicy($request);

    if ($response->policyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                           | Type                                                                                | Required                                                                            | Description                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| `$request`                                                                          | [\formance\stack\Models\Shared\PolicyRequest](../../models/shared/PolicyRequest.md) | :heavy_check_mark:                                                                  | The request object to use for the request.                                          |


### Response

**[?\formance\stack\Models\Operations\CreatePolicyResponse](../../models/operations/CreatePolicyResponse.md)**


## deletePolicy

Delete a policy by its id.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\DeletePolicyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeletePolicyRequest();
    $request->policyID = 'string';

    $response = $sdk->reconciliation->deletePolicy($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\DeletePolicyRequest](../../models/operations/DeletePolicyRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\DeletePolicyResponse](../../models/operations/DeletePolicyResponse.md)**


## getPolicy

Get a policy

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetPolicyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetPolicyRequest();
    $request->policyID = 'string';

    $response = $sdk->reconciliation->getPolicy($request);

    if ($response->policyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\formance\stack\Models\Operations\GetPolicyRequest](../../models/operations/GetPolicyRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\formance\stack\Models\Operations\GetPolicyResponse](../../models/operations/GetPolicyResponse.md)**


## getReconciliation

Get a reconciliation

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetReconciliationRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetReconciliationRequest();
    $request->reconciliationID = 'string';

    $response = $sdk->reconciliation->getReconciliation($request);

    if ($response->reconciliationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\formance\stack\Models\Operations\GetReconciliationRequest](../../models/operations/GetReconciliationRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\formance\stack\Models\Operations\GetReconciliationResponse](../../models/operations/GetReconciliationResponse.md)**


## listPolicies

List policies

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ListPoliciesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListPoliciesRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 520028;

    $response = $sdk->reconciliation->listPolicies($request);

    if ($response->policiesCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\ListPoliciesRequest](../../models/operations/ListPoliciesRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\ListPoliciesResponse](../../models/operations/ListPoliciesResponse.md)**


## listReconciliations

List reconciliations

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ListReconciliationsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListReconciliationsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 954636;

    $response = $sdk->reconciliation->listReconciliations($request);

    if ($response->reconciliationsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\formance\stack\Models\Operations\ListReconciliationsRequest](../../models/operations/ListReconciliationsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\formance\stack\Models\Operations\ListReconciliationsResponse](../../models/operations/ListReconciliationsResponse.md)**


## reconcile

Reconcile using a policy

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ReconcileRequest;
use \formance\stack\Models\Shared\ReconciliationRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ReconcileRequest();
    $request->reconciliationRequest = new ReconciliationRequest();
    $request->reconciliationRequest->reconciledAtLedger = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-01T00:00:00.000Z');
    $request->reconciliationRequest->reconciledAtPayments = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-01T00:00:00.000Z');
    $request->policyID = 'string';

    $response = $sdk->reconciliation->reconcile($request);

    if ($response->reconciliationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\formance\stack\Models\Operations\ReconcileRequest](../../models/operations/ReconcileRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\formance\stack\Models\Operations\ReconcileResponse](../../models/operations/ReconcileResponse.md)**


## reconciliationgetServerInfo

Get server info

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->reconciliation->reconciliationgetServerInfo();

    if ($response->serverInfo !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\ReconciliationgetServerInfoResponse](../../models/operations/ReconciliationgetServerInfoResponse.md)**

