# Payments


### Available Operations

* [addAccountToPool](#addaccounttopool) - Add an account to a pool
* [connectorsTransfer](#connectorstransfer) - Transfer funds between Connector accounts
* [createBankAccount](#createbankaccount) - Create a BankAccount in Payments and on the PSP
* [createPayment](#createpayment) - Create a payment
* [createPool](#createpool) - Create a Pool
* [createTransferInitiation](#createtransferinitiation) - Create a TransferInitiation
* [deletePool](#deletepool) - Delete a Pool
* [deleteTransferInitiation](#deletetransferinitiation) - Delete a transfer initiation
* [getAccountBalances](#getaccountbalances) - Get account balances
* [getBankAccount](#getbankaccount) - Get a bank account created by user on Formance
* [~~getConnectorTask~~](#getconnectortask) - Read a specific task of the connector :warning: **Deprecated**
* [getConnectorTaskV1](#getconnectortaskv1) - Read a specific task of the connector
* [getPayment](#getpayment) - Get a payment
* [getPool](#getpool) - Get a Pool
* [getPoolBalances](#getpoolbalances) - Get pool balances
* [getTransferInitiation](#gettransferinitiation) - Get a transfer initiation
* [installConnector](#installconnector) - Install a connector
* [listAllConnectors](#listallconnectors) - List all installed connectors
* [listBankAccounts](#listbankaccounts) - List bank accounts created by user on Formance
* [listConfigsAvailableConnectors](#listconfigsavailableconnectors) - List the configs of each available connector
* [~~listConnectorTasks~~](#listconnectortasks) - List tasks from a connector :warning: **Deprecated**
* [listConnectorTasksV1](#listconnectortasksv1) - List tasks from a connector
* [listPayments](#listpayments) - List payments
* [listPools](#listpools) - List Pools
* [listTransferInitiations](#listtransferinitiations) - List Transfer Initiations
* [paymentsgetAccount](#paymentsgetaccount) - Get an account
* [paymentsgetServerInfo](#paymentsgetserverinfo) - Get server info
* [paymentslistAccounts](#paymentslistaccounts) - List accounts
* [~~readConnectorConfig~~](#readconnectorconfig) - Read the config of a connector :warning: **Deprecated**
* [readConnectorConfigV1](#readconnectorconfigv1) - Read the config of a connector
* [removeAccountFromPool](#removeaccountfrompool) - Remove an account from a pool
* [~~resetConnector~~](#resetconnector) - Reset a connector :warning: **Deprecated**
* [resetConnectorV1](#resetconnectorv1) - Reset a connector
* [retryTransferInitiation](#retrytransferinitiation) - Retry a failed transfer initiation
* [reverseTransferInitiation](#reversetransferinitiation) - Reverse a transfer initiation
* [udpateTransferInitiationStatus](#udpatetransferinitiationstatus) - Update the status of a transfer initiation
* [~~uninstallConnector~~](#uninstallconnector) - Uninstall a connector :warning: **Deprecated**
* [uninstallConnectorV1](#uninstallconnectorv1) - Uninstall a connector
* [updateConnectorConfigV1](#updateconnectorconfigv1) - Update the config of a connector
* [updateMetadata](#updatemetadata) - Update metadata

## addAccountToPool

Add an account to a pool

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
        $request = new Operations\AddAccountToPoolRequest();
    $request->addAccountToPoolRequest = new Shared\AddAccountToPoolRequest();
    $request->addAccountToPoolRequest->accountID = 'string';
    $request->poolId = 'string';;

    $response = $sdk->payments->addAccountToPool($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\formance\stack\Models\Operations\AddAccountToPoolRequest](../../Models/Operations/AddAccountToPoolRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\AddAccountToPoolResponse](../../Models/Operations/AddAccountToPoolResponse.md)**


## connectorsTransfer

Execute a transfer between two accounts.

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
        $request = new Operations\ConnectorsTransferRequest();
    $request->transferRequest = new Shared\TransferRequest();
    $request->transferRequest->amount = 100;
    $request->transferRequest->asset = 'USD';
    $request->transferRequest->destination = 'acct_1Gqj58KZcSIg2N2q';
    $request->transferRequest->source = 'acct_1Gqj58KZcSIg2N2q';
    $request->connector = Shared\Connector::CurrencyCloud;;

    $response = $sdk->payments->connectorsTransfer($request);

    if ($response->transferResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\formance\stack\Models\Operations\ConnectorsTransferRequest](../../Models/Operations/ConnectorsTransferRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\ConnectorsTransferResponse](../../Models/Operations/ConnectorsTransferResponse.md)**


## createBankAccount

Create a bank account in Payments and on the PSP.

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
        $request = new Shared\BankAccountRequest();
    $request->accountNumber = 'string';
    $request->connectorID = 'string';
    $request->country = 'GB';
    $request->iban = 'HU80500236840980904027018003';
    $request->metadata = [
        'Manganese' => 'string',
    ];
    $request->name = 'My account';
    $request->swiftBicCode = 'string';;

    $response = $sdk->payments->createBankAccount($request);

    if ($response->bankAccountResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\formance\stack\Models\Shared\BankAccountRequest](../../Models/Shared/BankAccountRequest.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\formance\stack\Models\Operations\CreateBankAccountResponse](../../Models/Operations/CreateBankAccountResponse.md)**


## createPayment

Create a payment

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
        $request = new Shared\PaymentRequest();
    $request->amount = 100;
    $request->asset = 'USD';
    $request->connectorID = 'string';
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-09T01:03:21.153Z');
    $request->destinationAccountID = 'string';
    $request->reference = 'string';
    $request->scheme = Shared\PaymentScheme::GooglePay;
    $request->sourceAccountID = 'string';
    $request->status = Shared\PaymentStatus::DisputeWon;
    $request->type = Shared\PaymentType::Transfer;;

    $response = $sdk->payments->createPayment($request);

    if ($response->paymentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                             | Type                                                                                  | Required                                                                              | Description                                                                           |
| ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- |
| `$request`                                                                            | [\formance\stack\Models\Shared\PaymentRequest](../../Models/Shared/PaymentRequest.md) | :heavy_check_mark:                                                                    | The request object to use for the request.                                            |


### Response

**[?\formance\stack\Models\Operations\CreatePaymentResponse](../../Models/Operations/CreatePaymentResponse.md)**


## createPool

Create a Pool

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
        $request = new Shared\PoolRequest();
    $request->accountIDs = [
        'string',
    ];
    $request->name = 'string';;

    $response = $sdk->payments->createPool($request);

    if ($response->poolResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                       | Type                                                                            | Required                                                                        | Description                                                                     |
| ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| `$request`                                                                      | [\formance\stack\Models\Shared\PoolRequest](../../Models/Shared/PoolRequest.md) | :heavy_check_mark:                                                              | The request object to use for the request.                                      |


### Response

**[?\formance\stack\Models\Operations\CreatePoolResponse](../../Models/Operations/CreatePoolResponse.md)**


## createTransferInitiation

Create a transfer initiation

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
        $request = new Shared\TransferInitiationRequest();
    $request->amount = 256698;
    $request->asset = 'USD';
    $request->connectorID = 'string';
    $request->description = 'Multi-tiered incremental methodology';
    $request->destinationAccountID = 'string';
    $request->metadata = [
        'deposit' => 'string',
    ];
    $request->provider = Shared\Connector::BankingCircle;
    $request->reference = 'XXX';
    $request->scheduledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-20T07:14:32.431Z');
    $request->sourceAccountID = 'string';
    $request->type = Shared\TransferInitiationRequestType::Payout;
    $request->validated = false;;

    $response = $sdk->payments->createTransferInitiation($request);

    if ($response->transferInitiationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\formance\stack\Models\Shared\TransferInitiationRequest](../../Models/Shared/TransferInitiationRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\CreateTransferInitiationResponse](../../Models/Operations/CreateTransferInitiationResponse.md)**


## deletePool

Delete a pool by its id.

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
        $request = new Operations\DeletePoolRequest();
    $request->poolId = 'string';;

    $response = $sdk->payments->deletePool($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\formance\stack\Models\Operations\DeletePoolRequest](../../Models/Operations/DeletePoolRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\DeletePoolResponse](../../Models/Operations/DeletePoolResponse.md)**


## deleteTransferInitiation

Delete a transfer initiation by its id.

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
        $request = new Operations\DeleteTransferInitiationRequest();
    $request->transferId = 'string';;

    $response = $sdk->payments->deleteTransferInitiation($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\formance\stack\Models\Operations\DeleteTransferInitiationRequest](../../Models/Operations/DeleteTransferInitiationRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\formance\stack\Models\Operations\DeleteTransferInitiationResponse](../../Models/Operations/DeleteTransferInitiationResponse.md)**


## getAccountBalances

Get account balances

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
        $request = new Operations\GetAccountBalancesRequest();
    $request->accountId = 'string';
    $request->asset = 'string';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->from = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-05T05:11:20.042Z');
    $request->limit = 743236;
    $request->pageSize = 125462;
    $request->sort = [
        'string',
    ];
    $request->to = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-15T08:57:06.406Z');;

    $response = $sdk->payments->getAccountBalances($request);

    if ($response->balancesCursor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\formance\stack\Models\Operations\GetAccountBalancesRequest](../../Models/Operations/GetAccountBalancesRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\GetAccountBalancesResponse](../../Models/Operations/GetAccountBalancesResponse.md)**


## getBankAccount

Get a bank account created by user on Formance

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
        $request = new Operations\GetBankAccountRequest();
    $request->bankAccountId = 'string';;

    $response = $sdk->payments->getBankAccount($request);

    if ($response->bankAccountResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\formance\stack\Models\Operations\GetBankAccountRequest](../../Models/Operations/GetBankAccountRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\GetBankAccountResponse](../../Models/Operations/GetBankAccountResponse.md)**


## ~~getConnectorTask~~

Get a specific task associated to the connector.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
        $request = new Operations\GetConnectorTaskRequest();
    $request->connector = Shared\Connector::Atlar;
    $request->taskId = 'string';;

    $response = $sdk->payments->getConnectorTask($request);

    if ($response->taskResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\formance\stack\Models\Operations\GetConnectorTaskRequest](../../Models/Operations/GetConnectorTaskRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\GetConnectorTaskResponse](../../Models/Operations/GetConnectorTaskResponse.md)**


## getConnectorTaskV1

Get a specific task associated to the connector.

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
        $request = new Operations\GetConnectorTaskV1Request();
    $request->connector = Shared\Connector::CurrencyCloud;
    $request->connectorId = 'string';
    $request->taskId = 'string';;

    $response = $sdk->payments->getConnectorTaskV1($request);

    if ($response->taskResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\formance\stack\Models\Operations\GetConnectorTaskV1Request](../../Models/Operations/GetConnectorTaskV1Request.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\GetConnectorTaskV1Response](../../Models/Operations/GetConnectorTaskV1Response.md)**


## getPayment

Get a payment

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
        $request = new Operations\GetPaymentRequest();
    $request->paymentId = 'string';;

    $response = $sdk->payments->getPayment($request);

    if ($response->paymentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\formance\stack\Models\Operations\GetPaymentRequest](../../Models/Operations/GetPaymentRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\GetPaymentResponse](../../Models/Operations/GetPaymentResponse.md)**


## getPool

Get a Pool

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
        $request = new Operations\GetPoolRequest();
    $request->poolId = 'string';;

    $response = $sdk->payments->getPool($request);

    if ($response->poolResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\formance\stack\Models\Operations\GetPoolRequest](../../Models/Operations/GetPoolRequest.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\formance\stack\Models\Operations\GetPoolResponse](../../Models/Operations/GetPoolResponse.md)**


## getPoolBalances

Get pool balances

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
        $request = new Operations\GetPoolBalancesRequest();
    $request->at = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-05T06:40:23.018Z');
    $request->poolId = 'string';;

    $response = $sdk->payments->getPoolBalances($request);

    if ($response->poolBalancesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\formance\stack\Models\Operations\GetPoolBalancesRequest](../../Models/Operations/GetPoolBalancesRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\formance\stack\Models\Operations\GetPoolBalancesResponse](../../Models/Operations/GetPoolBalancesResponse.md)**


## getTransferInitiation

Get a transfer initiation

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
        $request = new Operations\GetTransferInitiationRequest();
    $request->transferId = 'string';;

    $response = $sdk->payments->getTransferInitiation($request);

    if ($response->transferInitiationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\formance\stack\Models\Operations\GetTransferInitiationRequest](../../Models/Operations/GetTransferInitiationRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\formance\stack\Models\Operations\GetTransferInitiationResponse](../../Models/Operations/GetTransferInitiationResponse.md)**


## installConnector

Install a connector by its name and config.

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
        $request = new Operations\InstallConnectorRequest();
    $request->requestBody = 'string';
    $request->connector = Shared\Connector::Wise;;

    $response = $sdk->payments->installConnector($request);

    if ($response->connectorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\formance\stack\Models\Operations\InstallConnectorRequest](../../Models/Operations/InstallConnectorRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\InstallConnectorResponse](../../Models/Operations/InstallConnectorResponse.md)**


## listAllConnectors

List all installed connectors.

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
    $response = $sdk->payments->listAllConnectors();

    if ($response->connectorsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\ListAllConnectorsResponse](../../Models/Operations/ListAllConnectorsResponse.md)**


## listBankAccounts

List all bank accounts created by user on Formance.

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
        $request = new Operations\ListBankAccountsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 578999;
    $request->sort = [
        'string',
    ];;

    $response = $sdk->payments->listBankAccounts($request);

    if ($response->bankAccountsCursor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\formance\stack\Models\Operations\ListBankAccountsRequest](../../Models/Operations/ListBankAccountsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\ListBankAccountsResponse](../../Models/Operations/ListBankAccountsResponse.md)**


## listConfigsAvailableConnectors

List the configs of each available connector.

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
    $response = $sdk->payments->listConfigsAvailableConnectors();

    if ($response->connectorsConfigsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\ListConfigsAvailableConnectorsResponse](../../Models/Operations/ListConfigsAvailableConnectorsResponse.md)**


## ~~listConnectorTasks~~

List all tasks associated with this connector.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
        $request = new Operations\ListConnectorTasksRequest();
    $request->connector = Shared\Connector::Wise;
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 501686;;

    $response = $sdk->payments->listConnectorTasks($request);

    if ($response->tasksCursor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\formance\stack\Models\Operations\ListConnectorTasksRequest](../../Models/Operations/ListConnectorTasksRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\ListConnectorTasksResponse](../../Models/Operations/ListConnectorTasksResponse.md)**


## listConnectorTasksV1

List all tasks associated with this connector.

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
        $request = new Operations\ListConnectorTasksV1Request();
    $request->connector = Shared\Connector::BankingCircle;
    $request->connectorId = 'string';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 442673;;

    $response = $sdk->payments->listConnectorTasksV1($request);

    if ($response->tasksCursor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\formance\stack\Models\Operations\ListConnectorTasksV1Request](../../Models/Operations/ListConnectorTasksV1Request.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\formance\stack\Models\Operations\ListConnectorTasksV1Response](../../Models/Operations/ListConnectorTasksV1Response.md)**


## listPayments

List payments

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
        $request = new Operations\ListPaymentsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 13778;
    $request->sort = [
        'string',
    ];;

    $response = $sdk->payments->listPayments($request);

    if ($response->paymentsCursor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\ListPaymentsRequest](../../Models/Operations/ListPaymentsRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\ListPaymentsResponse](../../Models/Operations/ListPaymentsResponse.md)**


## listPools

List Pools

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
        $request = new Operations\ListPoolsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 567687;
    $request->query = 'string';
    $request->sort = [
        'string',
    ];;

    $response = $sdk->payments->listPools($request);

    if ($response->poolsCursor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\formance\stack\Models\Operations\ListPoolsRequest](../../Models/Operations/ListPoolsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\formance\stack\Models\Operations\ListPoolsResponse](../../Models/Operations/ListPoolsResponse.md)**


## listTransferInitiations

List Transfer Initiations

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
        $request = new Operations\ListTransferInitiationsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 706689;
    $request->query = 'string';
    $request->sort = [
        'string',
    ];;

    $response = $sdk->payments->listTransferInitiations($request);

    if ($response->transferInitiationsCursor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\formance\stack\Models\Operations\ListTransferInitiationsRequest](../../Models/Operations/ListTransferInitiationsRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\formance\stack\Models\Operations\ListTransferInitiationsResponse](../../Models/Operations/ListTransferInitiationsResponse.md)**


## paymentsgetAccount

Get an account

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
        $request = new Operations\PaymentsgetAccountRequest();
    $request->accountId = 'string';;

    $response = $sdk->payments->paymentsgetAccount($request);

    if ($response->paymentsAccountResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\formance\stack\Models\Operations\PaymentsgetAccountRequest](../../Models/Operations/PaymentsgetAccountRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\PaymentsgetAccountResponse](../../Models/Operations/PaymentsgetAccountResponse.md)**


## paymentsgetServerInfo

Get server info

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
    $response = $sdk->payments->paymentsgetServerInfo();

    if ($response->serverInfo !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\PaymentsgetServerInfoResponse](../../Models/Operations/PaymentsgetServerInfoResponse.md)**


## paymentslistAccounts

List accounts

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
        $request = new Operations\PaymentslistAccountsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 227071;
    $request->sort = [
        'string',
    ];;

    $response = $sdk->payments->paymentslistAccounts($request);

    if ($response->accountsCursor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\formance\stack\Models\Operations\PaymentslistAccountsRequest](../../Models/Operations/PaymentslistAccountsRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\formance\stack\Models\Operations\PaymentslistAccountsResponse](../../Models/Operations/PaymentslistAccountsResponse.md)**


## ~~readConnectorConfig~~

Read connector config

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
        $request = new Operations\ReadConnectorConfigRequest();
    $request->connector = Shared\Connector::Adyen;;

    $response = $sdk->payments->readConnectorConfig($request);

    if ($response->connectorConfigResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\formance\stack\Models\Operations\ReadConnectorConfigRequest](../../Models/Operations/ReadConnectorConfigRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\formance\stack\Models\Operations\ReadConnectorConfigResponse](../../Models/Operations/ReadConnectorConfigResponse.md)**


## readConnectorConfigV1

Read connector config

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
        $request = new Operations\ReadConnectorConfigV1Request();
    $request->connector = Shared\Connector::CurrencyCloud;
    $request->connectorId = 'string';;

    $response = $sdk->payments->readConnectorConfigV1($request);

    if ($response->connectorConfigResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\formance\stack\Models\Operations\ReadConnectorConfigV1Request](../../Models/Operations/ReadConnectorConfigV1Request.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\formance\stack\Models\Operations\ReadConnectorConfigV1Response](../../Models/Operations/ReadConnectorConfigV1Response.md)**


## removeAccountFromPool

Remove an account from a pool by its id.

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
        $request = new Operations\RemoveAccountFromPoolRequest();
    $request->accountId = 'string';
    $request->poolId = 'string';;

    $response = $sdk->payments->removeAccountFromPool($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\formance\stack\Models\Operations\RemoveAccountFromPoolRequest](../../Models/Operations/RemoveAccountFromPoolRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\formance\stack\Models\Operations\RemoveAccountFromPoolResponse](../../Models/Operations/RemoveAccountFromPoolResponse.md)**


## ~~resetConnector~~

Reset a connector by its name.
It will remove the connector and ALL PAYMENTS generated with it.


> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
        $request = new Operations\ResetConnectorRequest();
    $request->connector = Shared\Connector::Moneycorp;;

    $response = $sdk->payments->resetConnector($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\formance\stack\Models\Operations\ResetConnectorRequest](../../Models/Operations/ResetConnectorRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\ResetConnectorResponse](../../Models/Operations/ResetConnectorResponse.md)**


## resetConnectorV1

Reset a connector by its name.
It will remove the connector and ALL PAYMENTS generated with it.


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
        $request = new Operations\ResetConnectorV1Request();
    $request->connector = Shared\Connector::Adyen;
    $request->connectorId = 'string';;

    $response = $sdk->payments->resetConnectorV1($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\formance\stack\Models\Operations\ResetConnectorV1Request](../../Models/Operations/ResetConnectorV1Request.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\ResetConnectorV1Response](../../Models/Operations/ResetConnectorV1Response.md)**


## retryTransferInitiation

Retry a failed transfer initiation

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
        $request = new Operations\RetryTransferInitiationRequest();
    $request->transferId = 'string';;

    $response = $sdk->payments->retryTransferInitiation($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\formance\stack\Models\Operations\RetryTransferInitiationRequest](../../Models/Operations/RetryTransferInitiationRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\formance\stack\Models\Operations\RetryTransferInitiationResponse](../../Models/Operations/RetryTransferInitiationResponse.md)**


## reverseTransferInitiation

Reverse transfer initiation

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
        $request = new Operations\ReverseTransferInitiationRequest();
    $request->reverseTransferInitiationRequest = new Shared\ReverseTransferInitiationRequest();
    $request->reverseTransferInitiationRequest->amount = 327549;
    $request->reverseTransferInitiationRequest->asset = 'USD';
    $request->reverseTransferInitiationRequest->description = 'Streamlined high-level local area network';
    $request->reverseTransferInitiationRequest->metadata = [
        'sky' => 'string',
    ];
    $request->reverseTransferInitiationRequest->reference = 'XXX';
    $request->transferId = 'string';;

    $response = $sdk->payments->reverseTransferInitiation($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\formance\stack\Models\Operations\ReverseTransferInitiationRequest](../../Models/Operations/ReverseTransferInitiationRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\formance\stack\Models\Operations\ReverseTransferInitiationResponse](../../Models/Operations/ReverseTransferInitiationResponse.md)**


## udpateTransferInitiationStatus

Update a transfer initiation status

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
        $request = new Operations\UdpateTransferInitiationStatusRequest();
    $request->updateTransferInitiationStatusRequest = new Shared\UpdateTransferInitiationStatusRequest();
    $request->updateTransferInitiationStatusRequest->status = Shared\Status::Validated;
    $request->transferId = 'string';;

    $response = $sdk->payments->udpateTransferInitiationStatus($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\formance\stack\Models\Operations\UdpateTransferInitiationStatusRequest](../../Models/Operations/UdpateTransferInitiationStatusRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\formance\stack\Models\Operations\UdpateTransferInitiationStatusResponse](../../Models/Operations/UdpateTransferInitiationStatusResponse.md)**


## ~~uninstallConnector~~

Uninstall a connector by its name.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
        $request = new Operations\UninstallConnectorRequest();
    $request->connector = Shared\Connector::Wise;;

    $response = $sdk->payments->uninstallConnector($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\formance\stack\Models\Operations\UninstallConnectorRequest](../../Models/Operations/UninstallConnectorRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\UninstallConnectorResponse](../../Models/Operations/UninstallConnectorResponse.md)**


## uninstallConnectorV1

Uninstall a connector by its name.

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
        $request = new Operations\UninstallConnectorV1Request();
    $request->connector = Shared\Connector::Adyen;
    $request->connectorId = 'string';;

    $response = $sdk->payments->uninstallConnectorV1($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\formance\stack\Models\Operations\UninstallConnectorV1Request](../../Models/Operations/UninstallConnectorV1Request.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\formance\stack\Models\Operations\UninstallConnectorV1Response](../../Models/Operations/UninstallConnectorV1Response.md)**


## updateConnectorConfigV1

Update connector config

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
        $request = new Operations\UpdateConnectorConfigV1Request();
    $request->requestBody = 'string';
    $request->connector = Shared\Connector::Stripe;
    $request->connectorId = 'string';;

    $response = $sdk->payments->updateConnectorConfigV1($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\formance\stack\Models\Operations\UpdateConnectorConfigV1Request](../../Models/Operations/UpdateConnectorConfigV1Request.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\formance\stack\Models\Operations\UpdateConnectorConfigV1Response](../../Models/Operations/UpdateConnectorConfigV1Response.md)**


## updateMetadata

Update metadata

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
        $request = new Operations\UpdateMetadataRequest();
    $request->requestBody = [
        'synthesizing' => 'string',
    ];
    $request->paymentId = 'string';;

    $response = $sdk->payments->updateMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\formance\stack\Models\Operations\UpdateMetadataRequest](../../Models/Operations/UpdateMetadataRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\UpdateMetadataResponse](../../Models/Operations/UpdateMetadataResponse.md)**

