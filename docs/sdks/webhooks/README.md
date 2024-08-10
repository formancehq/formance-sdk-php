# Webhooks


### Available Operations

* [activateConfig](#activateconfig) - Activate one config
* [changeConfigSecret](#changeconfigsecret) - Change the signing secret of a config
* [deactivateConfig](#deactivateconfig) - Deactivate one config
* [deleteConfig](#deleteconfig) - Delete one config
* [getManyConfigs](#getmanyconfigs) - Get many configs
* [insertConfig](#insertconfig) - Insert a new config
* [testConfig](#testconfig) - Test one config

## activateConfig

Activate a webhooks config by ID, to start receiving webhooks to its endpoint.

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
    $request = new Operations\ActivateConfigRequest(
        id: '4997257d-dfb6-445b-929c-cbe2ab182818',
    );
    $response = $sdk->webhooks->activateConfig($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ActivateConfigRequest](../../Models/Operations/ActivateConfigRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\ActivateConfigResponse](../../Models/Operations/ActivateConfigResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\WebhooksErrorResponse              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## changeConfigSecret

Change the signing secret of the endpoint of a webhooks config.

If not passed or empty, a secret is automatically generated.
The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)


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
    $request = new Operations\ChangeConfigSecretRequest(
        id: '4997257d-dfb6-445b-929c-cbe2ab182818',
        configChangeSecret: new Shared\ConfigChangeSecret(
            secret: 'V0bivxRWveaoz08afqjU6Ko/jwO0Cb+3',
        ),
    );
    $response = $sdk->webhooks->changeConfigSecret($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ChangeConfigSecretRequest](../../Models/Operations/ChangeConfigSecretRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\ChangeConfigSecretResponse](../../Models/Operations/ChangeConfigSecretResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\WebhooksErrorResponse              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## deactivateConfig

Deactivate a webhooks config by ID, to stop receiving webhooks to its endpoint.

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
    $request = new Operations\DeactivateConfigRequest(
        id: '4997257d-dfb6-445b-929c-cbe2ab182818',
    );
    $response = $sdk->webhooks->deactivateConfig($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\DeactivateConfigRequest](../../Models/Operations/DeactivateConfigRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\DeactivateConfigResponse](../../Models/Operations/DeactivateConfigResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\WebhooksErrorResponse              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## deleteConfig

Delete a webhooks config by ID.

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
    $request = new Operations\DeleteConfigRequest(
        id: '4997257d-dfb6-445b-929c-cbe2ab182818',
    );
    $response = $sdk->webhooks->deleteConfig($request);

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
| `$request`                                                                       | [Operations\DeleteConfigRequest](../../Models/Operations/DeleteConfigRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?Operations\DeleteConfigResponse](../../Models/Operations/DeleteConfigResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\WebhooksErrorResponse              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## getManyConfigs

Sorted by updated date descending

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
    $request = new Operations\GetManyConfigsRequest(
        endpoint: 'https://example.com',
        id: '4997257d-dfb6-445b-929c-cbe2ab182818',
    );
    $response = $sdk->webhooks->getManyConfigs($request);

    if ($response->configsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetManyConfigsRequest](../../Models/Operations/GetManyConfigsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\GetManyConfigsResponse](../../Models/Operations/GetManyConfigsResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\WebhooksErrorResponse              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## insertConfig

Insert a new webhooks config.

The endpoint should be a valid https URL and be unique.

The secret is the endpoint's verification secret.
If not passed or empty, a secret is automatically generated.
The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)

All eventTypes are converted to lower-case when inserted.


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
    $request = new Shared\ConfigUser(
        endpoint: 'https://example.com',
        eventTypes: [
            'TYPE1',
        ],
        name: 'customer_payment',
        secret: 'V0bivxRWveaoz08afqjU6Ko/jwO0Cb+3',
    );
    $response = $sdk->webhooks->insertConfig($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                              | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `$request`                                             | [Shared\ConfigUser](../../Models/Shared/ConfigUser.md) | :heavy_check_mark:                                     | The request object to use for the request.             |


### Response

**[?Operations\InsertConfigResponse](../../Models/Operations/InsertConfigResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\WebhooksErrorResponse              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |

## testConfig

Test a config by sending a webhook to its endpoint.

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
    $request = new Operations\TestConfigRequest(
        id: '4997257d-dfb6-445b-929c-cbe2ab182818',
    );
    $response = $sdk->webhooks->testConfig($request);

    if ($response->attemptResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\TestConfigRequest](../../Models/Operations/TestConfigRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |


### Response

**[?Operations\TestConfigResponse](../../Models/Operations/TestConfigResponse.md)**
### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\WebhooksErrorResponse              | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |
