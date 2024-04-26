# Auth


### Available Operations

* [createClient](#createclient) - Create client
* [createSecret](#createsecret) - Add a secret to a client
* [deleteClient](#deleteclient) - Delete client
* [deleteSecret](#deletesecret) - Delete a secret from a client
* [listClients](#listclients) - List clients
* [listUsers](#listusers) - List users
* [readClient](#readclient) - Read client
* [readUser](#readuser) - Read user
* [updateClient](#updateclient) - Update client

## createClient

Create client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateClientRequest();
    $request->description = 'Managed optimizing help-desk';
    $request->metadata = [
        'pessimistic' => '<value>',
    ];
    $request->name = '<value>';
    $request->postLogoutRedirectUris = [
        '<value>',
    ];
    $request->public = false;
    $request->redirectUris = [
        '<value>',
    ];
    $request->scopes = [
        '<value>',
    ];
    $request->trusted = false;;

    $response = $sdk->auth->createClient($request);

    if ($response->createClientResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\formance\stack\Models\Shared\CreateClientRequest](../../Models/Shared/CreateClientRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\formance\stack\Models\Operations\CreateClientResponse](../../Models/Operations/CreateClientResponse.md)**


## createSecret

Add a secret to a client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateSecretRequest();
    $request->createSecretRequest = new Shared\CreateSecretRequest();
    $request->createSecretRequest->metadata = [
        'architecture' => '<value>',
    ];
    $request->createSecretRequest->name = '<value>';
    $request->clientId = '<value>';;

    $response = $sdk->auth->createSecret($request);

    if ($response->createSecretResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\CreateSecretRequest](../../Models/Operations/CreateSecretRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\CreateSecretResponse](../../Models/Operations/CreateSecretResponse.md)**


## deleteClient

Delete client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteClientRequest();
    $request->clientId = '<value>';;

    $response = $sdk->auth->deleteClient($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\DeleteClientRequest](../../Models/Operations/DeleteClientRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\DeleteClientResponse](../../Models/Operations/DeleteClientResponse.md)**


## deleteSecret

Delete a secret from a client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteSecretRequest();
    $request->clientId = '<value>';
    $request->secretId = '<value>';;

    $response = $sdk->auth->deleteSecret($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\DeleteSecretRequest](../../Models/Operations/DeleteSecretRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\DeleteSecretResponse](../../Models/Operations/DeleteSecretResponse.md)**


## listClients

List clients

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->auth->listClients();

    if ($response->listClientsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\ListClientsResponse](../../Models/Operations/ListClientsResponse.md)**


## listUsers

List users

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->auth->listUsers();

    if ($response->listUsersResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\ListUsersResponse](../../Models/Operations/ListUsersResponse.md)**


## readClient

Read client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ReadClientRequest();
    $request->clientId = '<value>';;

    $response = $sdk->auth->readClient($request);

    if ($response->readClientResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\formance\stack\Models\Operations\ReadClientRequest](../../Models/Operations/ReadClientRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\ReadClientResponse](../../Models/Operations/ReadClientResponse.md)**


## readUser

Read user

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ReadUserRequest();
    $request->userId = '<value>';;

    $response = $sdk->auth->readUser($request);

    if ($response->readUserResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\formance\stack\Models\Operations\ReadUserRequest](../../Models/Operations/ReadUserRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\formance\stack\Models\Operations\ReadUserResponse](../../Models/Operations/ReadUserResponse.md)**


## updateClient

Update client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateClientRequest();
    $request->updateClientRequest = new Shared\UpdateClientRequest();
    $request->updateClientRequest->description = 'Secured static model';
    $request->updateClientRequest->metadata = [
        'Bentley' => '<value>',
    ];
    $request->updateClientRequest->name = '<value>';
    $request->updateClientRequest->postLogoutRedirectUris = [
        '<value>',
    ];
    $request->updateClientRequest->public = false;
    $request->updateClientRequest->redirectUris = [
        '<value>',
    ];
    $request->updateClientRequest->scopes = [
        '<value>',
    ];
    $request->updateClientRequest->trusted = false;
    $request->clientId = '<value>';;

    $response = $sdk->auth->updateClient($request);

    if ($response->updateClientResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\UpdateClientRequest](../../Models/Operations/UpdateClientRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\UpdateClientResponse](../../Models/Operations/UpdateClientResponse.md)**

