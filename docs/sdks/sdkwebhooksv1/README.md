# Webhooks.V1

## Overview

### Available Operations

* [activateConfig](#activateconfig) - Activate one config
* [changeConfigSecret](#changeconfigsecret) - Change the signing secret of a config
* [deactivateConfig](#deactivateconfig) - Deactivate one config
* [deleteConfig](#deleteconfig) - Delete one config
* [getDeliveries](#getdeliveries) - List webhook deliveries
* [getDelivery](#getdelivery) - Get a webhook delivery
* [getDeliveryAttempts](#getdeliveryattempts) - List attempts for a webhook delivery
* [getManyConfigs](#getmanyconfigs) - Get many configs
* [insertConfig](#insertconfig) - Insert a new config
* [replayDeliveries](#replaydeliveries) - Replay a page of failed or pending deliveries
* [replayDelivery](#replaydelivery) - Replay one failed or pending delivery
* [testConfig](#testconfig) - Test one config
* [updateConfig](#updateconfig) - Update one config

## activateConfig

Activate a webhooks config by ID, to start receiving webhooks to its endpoint.

### Example Usage

<!-- UsageSnippet language="php" operationID="activateConfig" method="put" path="/api/webhooks/configs/{id}/activate" -->
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

$request = new Operations\ActivateConfigRequest(
    id: '4997257d-dfb6-445b-929c-cbe2ab182818',
);

$response = $sdk->webhooks->v1->activateConfig(
    request: $request
);

if ($response->configResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ActivateConfigRequest](../../Models/Operations/ActivateConfigRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ActivateConfigResponse](../../Models/Operations/ActivateConfigResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## changeConfigSecret

Change the signing secret of the endpoint of a webhooks config.

If not passed or empty, a secret is automatically generated.
The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)


### Example Usage

<!-- UsageSnippet language="php" operationID="changeConfigSecret" method="put" path="/api/webhooks/configs/{id}/secret/change" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;
use formance\stack\Models\Webhooks;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\ChangeConfigSecretRequest(
    configChangeSecret: new \formance\stack\Models\Webhooks\ConfigChangeSecret(
        secret: 'V0bivxRWveaoz08afqjU6Ko/jwO0Cb+3',
    ),
    id: '4997257d-dfb6-445b-929c-cbe2ab182818',
);

$response = $sdk->webhooks->v1->changeConfigSecret(
    request: $request
);

if ($response->configResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ChangeConfigSecretRequest](../../Models/Operations/ChangeConfigSecretRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ChangeConfigSecretResponse](../../Models/Operations/ChangeConfigSecretResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## deactivateConfig

Deactivate a webhooks config by ID, to stop receiving webhooks to its endpoint.

### Example Usage

<!-- UsageSnippet language="php" operationID="deactivateConfig" method="put" path="/api/webhooks/configs/{id}/deactivate" -->
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

$request = new Operations\DeactivateConfigRequest(
    id: '4997257d-dfb6-445b-929c-cbe2ab182818',
);

$response = $sdk->webhooks->v1->deactivateConfig(
    request: $request
);

if ($response->configResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\DeactivateConfigRequest](../../Models/Operations/DeactivateConfigRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\DeactivateConfigResponse](../../Models/Operations/DeactivateConfigResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## deleteConfig

Delete a webhooks config by ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteConfig" method="delete" path="/api/webhooks/configs/{id}" -->
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

$request = new Operations\DeleteConfigRequest(
    id: '4997257d-dfb6-445b-929c-cbe2ab182818',
);

$response = $sdk->webhooks->v1->deleteConfig(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\DeleteConfigRequest](../../Models/Operations/DeleteConfigRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\DeleteConfigResponse](../../Models/Operations/DeleteConfigResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## getDeliveries

List webhook deliveries

### Example Usage

<!-- UsageSnippet language="php" operationID="getDeliveries" method="get" path="/api/webhooks/deliveries" -->
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

$request = new Operations\GetDeliveriesRequest();

$response = $sdk->webhooks->v1->getDeliveries(
    request: $request
);

if ($response->deliveriesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetDeliveriesRequest](../../Models/Operations/GetDeliveriesRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetDeliveriesResponse](../../Models/Operations/GetDeliveriesResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## getDelivery

Get a webhook delivery

### Example Usage

<!-- UsageSnippet language="php" operationID="getDelivery" method="get" path="/api/webhooks/deliveries/{id}" -->
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

$request = new Operations\GetDeliveryRequest(
    id: '01e5cac6-75f1-4720-81ca-5563ce22d2e0',
);

$response = $sdk->webhooks->v1->getDelivery(
    request: $request
);

if ($response->deliveryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetDeliveryRequest](../../Models/Operations/GetDeliveryRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetDeliveryResponse](../../Models/Operations/GetDeliveryResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## getDeliveryAttempts

List attempts for a webhook delivery

### Example Usage

<!-- UsageSnippet language="php" operationID="getDeliveryAttempts" method="get" path="/api/webhooks/deliveries/{id}/attempts" -->
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

$request = new Operations\GetDeliveryAttemptsRequest(
    id: '967e7a38-b11b-4809-92cf-6789e24dbe13',
);

$response = $sdk->webhooks->v1->getDeliveryAttempts(
    request: $request
);

if ($response->deliveryAttemptsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetDeliveryAttemptsRequest](../../Models/Operations/GetDeliveryAttemptsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetDeliveryAttemptsResponse](../../Models/Operations/GetDeliveryAttemptsResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## getManyConfigs

Sorted by updated date descending

### Example Usage

<!-- UsageSnippet language="php" operationID="getManyConfigs" method="get" path="/api/webhooks/configs" -->
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

$request = new Operations\GetManyConfigsRequest(
    endpoint: 'https://example.com',
    id: '4997257d-dfb6-445b-929c-cbe2ab182818',
);

$response = $sdk->webhooks->v1->getManyConfigs(
    request: $request
);

if ($response->configsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetManyConfigsRequest](../../Models/Operations/GetManyConfigsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetManyConfigsResponse](../../Models/Operations/GetManyConfigsResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## insertConfig

Insert a new webhooks config.

The endpoint should be a valid https URL and be unique.

The secret is the endpoint's verification secret.
If not passed or empty, a secret is automatically generated.
The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)

All eventTypes are converted to lower-case when inserted.


### Example Usage

<!-- UsageSnippet language="php" operationID="insertConfig" method="post" path="/api/webhooks/configs" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;
use formance\stack\Models\Webhooks;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new \formance\stack\Models\Webhooks\ConfigUser(
    endpoint: 'https://example.com',
    eventTypes: [
        'TYPE1',
        'TYPE2',
    ],
    secret: 'V0bivxRWveaoz08afqjU6Ko/jwO0Cb+3',
);

$response = $sdk->webhooks->v1->insertConfig(
    request: $request
);

if ($response->configResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                         | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `$request`                                                                        | [\formance\stack\Models\Webhooks\ConfigUser](../../Models/webhooks/ConfigUser.md) | :heavy_check_mark:                                                                | The request object to use for the request.                                        |

### Response

**[?Operations\InsertConfigResponse](../../Models/Operations/InsertConfigResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## replayDeliveries

Replay a page of failed or pending deliveries

### Example Usage

<!-- UsageSnippet language="php" operationID="replayDeliveries" method="post" path="/api/webhooks/deliveries/replay" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;
use formance\stack\Models\Webhooks;
use formance\stack\Utils;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\ReplayDeliveriesRequest(
    idempotencyKey: '<value>',
    replayDeliveriesRequest: new \formance\stack\Models\Webhooks\ReplayDeliveriesRequest(
        createdAtFrom: Utils\Utils::parseDateTime('2026-10-16T11:02:44.647Z'),
    ),
);

$response = $sdk->webhooks->v1->replayDeliveries(
    request: $request
);

if ($response->replayDeliveriesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ReplayDeliveriesRequest](../../Models/Operations/ReplayDeliveriesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ReplayDeliveriesResponse](../../Models/Operations/ReplayDeliveriesResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## replayDelivery

Replay one failed or pending delivery

### Example Usage

<!-- UsageSnippet language="php" operationID="replayDelivery" method="post" path="/api/webhooks/deliveries/{id}/replay" -->
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

$request = new Operations\ReplayDeliveryRequest(
    idempotencyKey: '<value>',
    id: '06a0d0bb-48de-45f0-b12f-6458a3a41bbe',
);

$response = $sdk->webhooks->v1->replayDelivery(
    request: $request
);

if ($response->deliveryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ReplayDeliveryRequest](../../Models/Operations/ReplayDeliveryRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ReplayDeliveryResponse](../../Models/Operations/ReplayDeliveryResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## testConfig

Test a config by sending a webhook to its endpoint.

### Example Usage

<!-- UsageSnippet language="php" operationID="testConfig" method="get" path="/api/webhooks/configs/{id}/test" -->
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

$request = new Operations\TestConfigRequest(
    id: '4997257d-dfb6-445b-929c-cbe2ab182818',
);

$response = $sdk->webhooks->v1->testConfig(
    request: $request
);

if ($response->attemptResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\TestConfigRequest](../../Models/Operations/TestConfigRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\TestConfigResponse](../../Models/Operations/TestConfigResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |

## updateConfig

Update a webhooks config by ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateConfig" method="put" path="/api/webhooks/configs/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;
use formance\stack\Models\Webhooks;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\UpdateConfigRequest(
    configUser: new \formance\stack\Models\Webhooks\ConfigUser(
        endpoint: 'https://example.com',
        eventTypes: [
            'TYPE1',
            'TYPE2',
        ],
        secret: 'V0bivxRWveaoz08afqjU6Ko/jwO0Cb+3',
    ),
    id: '4997257d-dfb6-445b-929c-cbe2ab182818',
);

$response = $sdk->webhooks->v1->updateConfig(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\UpdateConfigRequest](../../Models/Operations/UpdateConfigRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\UpdateConfigResponse](../../Models/Operations/UpdateConfigResponse.md)**

### Errors

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| \formance\stack\Models\Webhooks\ErrorResponse | default                                       | application/json                              |
| Errors\SDKException                           | 4XX, 5XX                                      | \*/\*                                         |