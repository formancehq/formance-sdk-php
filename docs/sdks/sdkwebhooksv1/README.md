# SDKWebhooksV1
(*webhooks->v1*)

## Overview

### Available Operations

* [activateConfig](#activateconfig) - Activate one config
* [changeConfigSecret](#changeconfigsecret) - Change the signing secret of a config
* [deactivateConfig](#deactivateconfig) - Deactivate one config
* [deleteConfig](#deleteconfig) - Delete one config
* [getManyConfigs](#getmanyconfigs) - Get many configs
* [insertConfig](#insertconfig) - Insert a new config
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

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\WebhooksErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

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

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\ChangeConfigSecretRequest(
    configChangeSecret: new Shared\ConfigChangeSecret(
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

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\WebhooksErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

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

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\WebhooksErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

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

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\WebhooksErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

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

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\WebhooksErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

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

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Shared\ConfigUser(
    endpoint: 'https://example.com',
    eventTypes: [
        'TYPE1',
        'TYPE2',
    ],
    name: 'customer_payment',
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

| Parameter                                              | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `$request`                                             | [Shared\ConfigUser](../../Models/Shared/ConfigUser.md) | :heavy_check_mark:                                     | The request object to use for the request.             |

### Response

**[?Operations\InsertConfigResponse](../../Models/Operations/InsertConfigResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\WebhooksErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

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

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\WebhooksErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

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

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\UpdateConfigRequest(
    configUser: new Shared\ConfigUser(
        endpoint: 'https://example.com',
        eventTypes: [
            'TYPE1',
            'TYPE2',
        ],
        name: 'customer_payment',
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

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\WebhooksErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |