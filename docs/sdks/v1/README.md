# V1
(*auth->v1*)

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
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Shared\CreateClientRequest(
    name: '<value>',
);

$response = $sdk->auth->v1->createClient(
    request: $request
);

if ($response->createClientResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Shared\CreateClientRequest](../../Models/Shared/CreateClientRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\CreateClientResponse](../../Models/Operations/CreateClientResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\CreateSecretRequest(
    clientId: '<id>',
);

$response = $sdk->auth->v1->createSecret(
    request: $request
);

if ($response->createSecretResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\CreateSecretRequest](../../Models/Operations/CreateSecretRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\CreateSecretResponse](../../Models/Operations/CreateSecretResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\DeleteClientRequest(
    clientId: '<id>',
);

$response = $sdk->auth->v1->deleteClient(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\DeleteClientRequest](../../Models/Operations/DeleteClientRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\DeleteClientResponse](../../Models/Operations/DeleteClientResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\DeleteSecretRequest(
    clientId: '<id>',
    secretId: '<id>',
);

$response = $sdk->auth->v1->deleteSecret(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\DeleteSecretRequest](../../Models/Operations/DeleteSecretRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\DeleteSecretResponse](../../Models/Operations/DeleteSecretResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getOIDCWellKnowns

Retrieve OpenID connect well-knowns.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();



$response = $sdk->auth->v1->getOIDCWellKnowns(

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Response

**[?Operations\GetOIDCWellKnownsResponse](../../Models/Operations/GetOIDCWellKnownsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getServerInfo

Get server info

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();



$response = $sdk->auth->v1->getServerInfo(

);

if ($response->serverInfo !== null) {
    // handle response
}
```

### Response

**[?Operations\GetServerInfoResponse](../../Models/Operations/GetServerInfoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listClients

List clients

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();



$response = $sdk->auth->v1->listClients(

);

if ($response->listClientsResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\ListClientsResponse](../../Models/Operations/ListClientsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUsers

List users

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();



$response = $sdk->auth->v1->listUsers(

);

if ($response->listUsersResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\ListUsersResponse](../../Models/Operations/ListUsersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\ReadClientRequest(
    clientId: '<id>',
);

$response = $sdk->auth->v1->readClient(
    request: $request
);

if ($response->readClientResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\ReadClientRequest](../../Models/Operations/ReadClientRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\ReadClientResponse](../../Models/Operations/ReadClientResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\ReadUserRequest(
    userId: '<id>',
);

$response = $sdk->auth->v1->readUser(
    request: $request
);

if ($response->readUserResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\ReadUserRequest](../../Models/Operations/ReadUserRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\ReadUserResponse](../../Models/Operations/ReadUserResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\UpdateClientRequest(
    clientId: '<id>',
);

$response = $sdk->auth->v1->updateClient(
    request: $request
);

if ($response->updateClientResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\UpdateClientRequest](../../Models/Operations/UpdateClientRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\UpdateClientResponse](../../Models/Operations/UpdateClientResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |