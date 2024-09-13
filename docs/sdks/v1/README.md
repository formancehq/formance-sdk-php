# V1

## Overview

### Available Operations

* [createClient](#createclient) - Create client
* [createSecret](#createsecret) - Add a secret to a client
* [deleteClient](#deleteclient) - Delete client
* [deleteSecret](#deletesecret) - Delete a secret from a client
* [getOIDCWellKnowns](#getoidcwellknowns) - Retrieve OpenID connect well-knowns.
* [getServerInfo](#getserverinfo) - Get server info
* [listClients](#listclients) - List clients
* [listUsers](#listusers) - List users
* [readClient](#readclient) - Read client
* [readUser](#readuser) - Read user
* [updateClient](#updateclient) - Update client

## createClient

Create client

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Shared\CreateClientRequest(
        name: '<value>',
    );
    $response = $sdk->authV1->createClient($request);

    if ($response->createClientResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Shared\CreateClientRequest](../../Models/Shared/CreateClientRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\CreateClientResponse](../../Models/Operations/CreateClientResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## createSecret

Add a secret to a client

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateSecretRequest(
        clientId: '<value>',
    );
    $response = $sdk->authV1->createSecret($request);

    if ($response->createSecretResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\CreateSecretRequest](../../Models/Operations/CreateSecretRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\CreateSecretResponse](../../Models/Operations/CreateSecretResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## deleteClient

Delete client

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\DeleteClientRequest(
        clientId: '<value>',
    );
    $response = $sdk->authV1->deleteClient($request);

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
| `$request`                                                                       | [Operations\DeleteClientRequest](../../Models/Operations/DeleteClientRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\DeleteClientResponse](../../Models/Operations/DeleteClientResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## deleteSecret

Delete a secret from a client

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\DeleteSecretRequest(
        clientId: '<value>',
        secretId: '<value>',
    );
    $response = $sdk->authV1->deleteSecret($request);

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
| `$request`                                                                       | [Operations\DeleteSecretRequest](../../Models/Operations/DeleteSecretRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\DeleteSecretResponse](../../Models/Operations/DeleteSecretResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## getOIDCWellKnowns

Retrieve OpenID connect well-knowns.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->authV1->getOIDCWellKnowns();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\GetOIDCWellKnownsResponse](../../Models/Operations/GetOIDCWellKnownsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## getServerInfo

Get server info

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->authV1->getServerInfo();

    if ($response->serverInfo !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\GetServerInfoResponse](../../Models/Operations/GetServerInfoResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## listClients

List clients

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->authV1->listClients();

    if ($response->listClientsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\ListClientsResponse](../../Models/Operations/ListClientsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## listUsers

List users

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->authV1->listUsers();

    if ($response->listUsersResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\ListUsersResponse](../../Models/Operations/ListUsersResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## readClient

Read client

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ReadClientRequest(
        clientId: '<value>',
    );
    $response = $sdk->authV1->readClient($request);

    if ($response->readClientResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\ReadClientRequest](../../Models/Operations/ReadClientRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\ReadClientResponse](../../Models/Operations/ReadClientResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## readUser

Read user

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ReadUserRequest(
        userId: '<value>',
    );
    $response = $sdk->authV1->readUser($request);

    if ($response->readUserResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\ReadUserRequest](../../Models/Operations/ReadUserRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\ReadUserResponse](../../Models/Operations/ReadUserResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## updateClient

Update client

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateClientRequest(
        clientId: '<value>',
    );
    $response = $sdk->authV1->updateClient($request);

    if ($response->updateClientResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\UpdateClientRequest](../../Models/Operations/UpdateClientRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\UpdateClientResponse](../../Models/Operations/UpdateClientResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |
