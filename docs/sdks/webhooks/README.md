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
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ActivateConfigRequest();
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';;

    $response = $sdk->webhooks->activateConfig($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\formance\stack\Models\Operations\ActivateConfigRequest](../../Models/Operations/ActivateConfigRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\ActivateConfigResponse](../../Models/Operations/ActivateConfigResponse.md)**


## changeConfigSecret

Change the signing secret of the endpoint of a webhooks config.

If not passed or empty, a secret is automatically generated.
The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ChangeConfigSecretRequest();
    $request->configChangeSecret = new Shared\ConfigChangeSecret();
    $request->configChangeSecret->secret = 'V0bivxRWveaoz08afqjU6Ko/jwO0Cb+3';
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';;

    $response = $sdk->webhooks->changeConfigSecret($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\formance\stack\Models\Operations\ChangeConfigSecretRequest](../../Models/Operations/ChangeConfigSecretRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\ChangeConfigSecretResponse](../../Models/Operations/ChangeConfigSecretResponse.md)**


## deactivateConfig

Deactivate a webhooks config by ID, to stop receiving webhooks to its endpoint.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeactivateConfigRequest();
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';;

    $response = $sdk->webhooks->deactivateConfig($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\formance\stack\Models\Operations\DeactivateConfigRequest](../../Models/Operations/DeactivateConfigRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\DeactivateConfigResponse](../../Models/Operations/DeactivateConfigResponse.md)**


## deleteConfig

Delete a webhooks config by ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteConfigRequest();
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';;

    $response = $sdk->webhooks->deleteConfig($request);

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
| `$request`                                                                                              | [\formance\stack\Models\Operations\DeleteConfigRequest](../../Models/Operations/DeleteConfigRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\DeleteConfigResponse](../../Models/Operations/DeleteConfigResponse.md)**


## getManyConfigs

Sorted by updated date descending

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetManyConfigsRequest();
    $request->endpoint = 'https://example.com';
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';;

    $response = $sdk->webhooks->getManyConfigs($request);

    if ($response->configsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\formance\stack\Models\Operations\GetManyConfigsRequest](../../Models/Operations/GetManyConfigsRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\GetManyConfigsResponse](../../Models/Operations/GetManyConfigsResponse.md)**


## insertConfig

Insert a new webhooks config.

The endpoint should be a valid https URL and be unique.

The secret is the endpoint's verification secret.
If not passed or empty, a secret is automatically generated.
The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)

All eventTypes are converted to lower-case when inserted.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\ConfigUser();
    $request->endpoint = 'https://example.com';
    $request->eventTypes = [
        'TYPE1',
    ];
    $request->name = 'customer_payment';
    $request->secret = 'V0bivxRWveaoz08afqjU6Ko/jwO0Cb+3';;

    $response = $sdk->webhooks->insertConfig($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                     | Type                                                                          | Required                                                                      | Description                                                                   |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `$request`                                                                    | [\formance\stack\Models\Shared\ConfigUser](../../Models/Shared/ConfigUser.md) | :heavy_check_mark:                                                            | The request object to use for the request.                                    |


### Response

**[?\formance\stack\Models\Operations\InsertConfigResponse](../../Models/Operations/InsertConfigResponse.md)**


## testConfig

Test a config by sending a webhook to its endpoint.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TestConfigRequest();
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';;

    $response = $sdk->webhooks->testConfig($request);

    if ($response->attemptResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\formance\stack\Models\Operations\TestConfigRequest](../../Models/Operations/TestConfigRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\TestConfigResponse](../../Models/Operations/TestConfigResponse.md)**

