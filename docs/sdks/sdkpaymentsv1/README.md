# SDKPaymentsV1
(*payments->v1*)

## Overview

### Available Operations

* [addAccountToPool](#addaccounttopool) - Add an account to a pool
* [connectorsTransfer](#connectorstransfer) - Transfer funds between Connector accounts
* [createAccount](#createaccount) - Create an account
* [createBankAccount](#createbankaccount) - Create a BankAccount in Payments and on the PSP
* [createPayment](#createpayment) - Create a payment
* [createPool](#createpool) - Create a Pool
* [createTransferInitiation](#createtransferinitiation) - Create a TransferInitiation
* [deletePool](#deletepool) - Delete a Pool
* [deleteTransferInitiation](#deletetransferinitiation) - Delete a transfer initiation
* [forwardBankAccount](#forwardbankaccount) - Forward a bank account to a connector
* [getAccountBalances](#getaccountbalances) - Get account balances
* [getBankAccount](#getbankaccount) - Get a bank account created by user on Formance
* [~~getConnectorTask~~](#getconnectortask) - Read a specific task of the connector :warning: **Deprecated**
* [getConnectorTaskV1](#getconnectortaskv1) - Read a specific task of the connector
* [getPayment](#getpayment) - Get a payment
* [getPool](#getpool) - Get a Pool
* [getPoolBalances](#getpoolbalances) - Get historical pool balances at a particular point in time
* [getPoolBalancesLatest](#getpoolbalanceslatest) - Get latest pool balances
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
* [~~uninstallConnector~~](#uninstallconnector) - Uninstall a connector :warning: **Deprecated**
* [uninstallConnectorV1](#uninstallconnectorv1) - Uninstall a connector
* [updateBankAccountMetadata](#updatebankaccountmetadata) - Update metadata of a bank account
* [updateConnectorConfigV1](#updateconnectorconfigv1) - Update the config of a connector
* [updateMetadata](#updatemetadata) - Update metadata
* [updateTransferInitiationStatus](#updatetransferinitiationstatus) - Update the status of a transfer initiation

## addAccountToPool

Add an account to a pool

### Example Usage

<!-- UsageSnippet language="php" operationID="addAccountToPool" method="post" path="/api/payments/pools/{poolId}/accounts" -->
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

$request = new Operations\AddAccountToPoolRequest(
    addAccountToPoolRequest: new Shared\AddAccountToPoolRequest(
        accountID: '<id>',
    ),
    poolId: 'XXX',
);

$response = $sdk->payments->v1->addAccountToPool(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\AddAccountToPoolRequest](../../Models/Operations/AddAccountToPoolRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\AddAccountToPoolResponse](../../Models/Operations/AddAccountToPoolResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## connectorsTransfer

Execute a transfer between two accounts.

### Example Usage

<!-- UsageSnippet language="php" operationID="connectorsTransfer" method="post" path="/api/payments/connectors/{connector}/transfers" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\Math\BigInteger;
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

$request = new Operations\ConnectorsTransferRequest(
    transferRequest: new Shared\TransferRequest(
        amount: BigInteger::of('100'),
        asset: 'USD',
        destination: 'acct_1Gqj58KZcSIg2N2q',
        source: 'acct_1Gqj58KZcSIg2N2q',
    ),
    connector: Shared\Connector::Generic,
);

$response = $sdk->payments->v1->connectorsTransfer(
    request: $request
);

if ($response->transferResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ConnectorsTransferRequest](../../Models/Operations/ConnectorsTransferRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ConnectorsTransferResponse](../../Models/Operations/ConnectorsTransferResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## createAccount

Create an account

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccount" method="post" path="/api/payments/accounts" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;
use formance\stack\Utils;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Shared\AccountRequest(
    connectorID: '<id>',
    createdAt: Utils\Utils::parseDateTime('2025-07-27T08:57:17.388Z'),
    reference: '<value>',
    type: Shared\AccountType::Unknown,
);

$response = $sdk->payments->v1->createAccount(
    request: $request
);

if ($response->paymentsAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `$request`                                                     | [Shared\AccountRequest](../../Models/Shared/AccountRequest.md) | :heavy_check_mark:                                             | The request object to use for the request.                     |

### Response

**[?Operations\CreateAccountResponse](../../Models/Operations/CreateAccountResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## createBankAccount

Create a bank account in Payments and on the PSP.

### Example Usage

<!-- UsageSnippet language="php" operationID="createBankAccount" method="post" path="/api/payments/bank-accounts" -->
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

$request = new Shared\BankAccountRequest(
    country: 'GB',
    name: 'My account',
);

$response = $sdk->payments->v1->createBankAccount(
    request: $request
);

if ($response->bankAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Shared\BankAccountRequest](../../Models/Shared/BankAccountRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\CreateBankAccountResponse](../../Models/Operations/CreateBankAccountResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## createPayment

Create a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="createPayment" method="post" path="/api/payments/payments" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\Math\BigInteger;
use formance\stack;
use formance\stack\Models\Shared;
use formance\stack\Utils;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Shared\PaymentRequest(
    amount: BigInteger::of('100'),
    asset: 'USD',
    connectorID: '<id>',
    createdAt: Utils\Utils::parseDateTime('2025-08-26T06:29:11.777Z'),
    reference: '<value>',
    scheme: Shared\PaymentScheme::Rtp,
    status: Shared\PaymentStatus::RefundedFailure,
    type: Shared\PaymentType::Payout,
);

$response = $sdk->payments->v1->createPayment(
    request: $request
);

if ($response->paymentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `$request`                                                     | [Shared\PaymentRequest](../../Models/Shared/PaymentRequest.md) | :heavy_check_mark:                                             | The request object to use for the request.                     |

### Response

**[?Operations\CreatePaymentResponse](../../Models/Operations/CreatePaymentResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## createPool

Create a Pool

### Example Usage

<!-- UsageSnippet language="php" operationID="createPool" method="post" path="/api/payments/pools" -->
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

$request = new Shared\PoolRequest(
    accountIDs: [
        '<value 1>',
        '<value 2>',
    ],
    name: '<value>',
);

$response = $sdk->payments->v1->createPool(
    request: $request
);

if ($response->poolResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                | Type                                                     | Required                                                 | Description                                              |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `$request`                                               | [Shared\PoolRequest](../../Models/Shared/PoolRequest.md) | :heavy_check_mark:                                       | The request object to use for the request.               |

### Response

**[?Operations\CreatePoolResponse](../../Models/Operations/CreatePoolResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## createTransferInitiation

Create a transfer initiation

### Example Usage

<!-- UsageSnippet language="php" operationID="createTransferInitiation" method="post" path="/api/payments/transfer-initiations" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\Math\BigInteger;
use formance\stack;
use formance\stack\Models\Shared;
use formance\stack\Utils;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Shared\TransferInitiationRequest(
    amount: BigInteger::of('83093'),
    asset: 'USD',
    description: 'flowery yum keenly operating knavishly commemorate recent apropos',
    destinationAccountID: '<id>',
    reference: 'XXX',
    scheduledAt: Utils\Utils::parseDateTime('2025-07-09T05:18:01.065Z'),
    sourceAccountID: '<id>',
    type: Shared\TransferInitiationRequestType::Transfer,
    validated: false,
);

$response = $sdk->payments->v1->createTransferInitiation(
    request: $request
);

if ($response->transferInitiationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Shared\TransferInitiationRequest](../../Models/Shared/TransferInitiationRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateTransferInitiationResponse](../../Models/Operations/CreateTransferInitiationResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## deletePool

Delete a pool by its id.

### Example Usage

<!-- UsageSnippet language="php" operationID="deletePool" method="delete" path="/api/payments/pools/{poolId}" -->
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

$request = new Operations\DeletePoolRequest(
    poolId: 'XXX',
);

$response = $sdk->payments->v1->deletePool(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\DeletePoolRequest](../../Models/Operations/DeletePoolRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\DeletePoolResponse](../../Models/Operations/DeletePoolResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## deleteTransferInitiation

Delete a transfer initiation by its id.

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteTransferInitiation" method="delete" path="/api/payments/transfer-initiations/{transferId}" -->
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

$request = new Operations\DeleteTransferInitiationRequest(
    transferId: 'XXX',
);

$response = $sdk->payments->v1->deleteTransferInitiation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\DeleteTransferInitiationRequest](../../Models/Operations/DeleteTransferInitiationRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\DeleteTransferInitiationResponse](../../Models/Operations/DeleteTransferInitiationResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## forwardBankAccount

Forward a bank account to a connector

### Example Usage

<!-- UsageSnippet language="php" operationID="forwardBankAccount" method="post" path="/api/payments/bank-accounts/{bankAccountId}/forward" -->
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

$request = new Operations\ForwardBankAccountRequest(
    forwardBankAccountRequest: new Shared\ForwardBankAccountRequest(
        connectorID: '<id>',
    ),
    bankAccountId: 'XXX',
);

$response = $sdk->payments->v1->forwardBankAccount(
    request: $request
);

if ($response->bankAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ForwardBankAccountRequest](../../Models/Operations/ForwardBankAccountRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ForwardBankAccountResponse](../../Models/Operations/ForwardBankAccountResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## getAccountBalances

Get account balances

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountBalances" method="get" path="/api/payments/accounts/{accountId}/balances" -->
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

$request = new Operations\GetAccountBalancesRequest(
    accountId: 'XXX',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
    sort: [
        'date:asc',
        'status:desc',
    ],
);

$response = $sdk->payments->v1->getAccountBalances(
    request: $request
);

if ($response->balancesCursor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAccountBalancesRequest](../../Models/Operations/GetAccountBalancesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAccountBalancesResponse](../../Models/Operations/GetAccountBalancesResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## getBankAccount

Get a bank account created by user on Formance

### Example Usage

<!-- UsageSnippet language="php" operationID="getBankAccount" method="get" path="/api/payments/bank-accounts/{bankAccountId}" -->
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

$request = new Operations\GetBankAccountRequest(
    bankAccountId: 'XXX',
);

$response = $sdk->payments->v1->getBankAccount(
    request: $request
);

if ($response->bankAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetBankAccountRequest](../../Models/Operations/GetBankAccountRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetBankAccountResponse](../../Models/Operations/GetBankAccountResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## ~~getConnectorTask~~

Get a specific task associated to the connector.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="getConnectorTask" method="get" path="/api/payments/connectors/{connector}/tasks/{taskId}" -->
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

$request = new Operations\GetConnectorTaskRequest(
    connector: Shared\Connector::Moneycorp,
    taskId: 'task1',
);

$response = $sdk->payments->v1->getConnectorTask(
    request: $request
);

if ($response->taskResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetConnectorTaskRequest](../../Models/Operations/GetConnectorTaskRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetConnectorTaskResponse](../../Models/Operations/GetConnectorTaskResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## getConnectorTaskV1

Get a specific task associated to the connector.

### Example Usage

<!-- UsageSnippet language="php" operationID="getConnectorTaskV1" method="get" path="/api/payments/connectors/{connector}/{connectorId}/tasks/{taskId}" -->
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

$request = new Operations\GetConnectorTaskV1Request(
    connector: Shared\Connector::Modulr,
    connectorId: 'XXX',
    taskId: 'task1',
);

$response = $sdk->payments->v1->getConnectorTaskV1(
    request: $request
);

if ($response->taskResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetConnectorTaskV1Request](../../Models/Operations/GetConnectorTaskV1Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetConnectorTaskV1Response](../../Models/Operations/GetConnectorTaskV1Response.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## getPayment

Get a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="getPayment" method="get" path="/api/payments/payments/{paymentId}" -->
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

$request = new Operations\GetPaymentRequest(
    paymentId: 'XXX',
);

$response = $sdk->payments->v1->getPayment(
    request: $request
);

if ($response->paymentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetPaymentRequest](../../Models/Operations/GetPaymentRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetPaymentResponse](../../Models/Operations/GetPaymentResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## getPool

Get a Pool

### Example Usage

<!-- UsageSnippet language="php" operationID="getPool" method="get" path="/api/payments/pools/{poolId}" -->
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

$request = new Operations\GetPoolRequest(
    poolId: 'XXX',
);

$response = $sdk->payments->v1->getPool(
    request: $request
);

if ($response->poolResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Operations\GetPoolRequest](../../Models/Operations/GetPoolRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\GetPoolResponse](../../Models/Operations/GetPoolResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## getPoolBalances

Get historical pool balances at a particular point in time

### Example Usage

<!-- UsageSnippet language="php" operationID="getPoolBalances" method="get" path="/api/payments/pools/{poolId}/balances" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;
use formance\stack\Utils;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\GetPoolBalancesRequest(
    at: Utils\Utils::parseDateTime('2024-11-27T10:59:51.663Z'),
    poolId: 'XXX',
);

$response = $sdk->payments->v1->getPoolBalances(
    request: $request
);

if ($response->poolBalancesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetPoolBalancesRequest](../../Models/Operations/GetPoolBalancesRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetPoolBalancesResponse](../../Models/Operations/GetPoolBalancesResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## getPoolBalancesLatest

Get latest pool balances

### Example Usage

<!-- UsageSnippet language="php" operationID="getPoolBalancesLatest" method="get" path="/api/payments/pools/{poolId}/balances/latest" -->
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

$request = new Operations\GetPoolBalancesLatestRequest(
    poolId: 'XXX',
);

$response = $sdk->payments->v1->getPoolBalancesLatest(
    request: $request
);

if ($response->poolBalancesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetPoolBalancesLatestRequest](../../Models/Operations/GetPoolBalancesLatestRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetPoolBalancesLatestResponse](../../Models/Operations/GetPoolBalancesLatestResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## getTransferInitiation

Get a transfer initiation

### Example Usage

<!-- UsageSnippet language="php" operationID="getTransferInitiation" method="get" path="/api/payments/transfer-initiations/{transferId}" -->
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

$request = new Operations\GetTransferInitiationRequest(
    transferId: 'XXX',
);

$response = $sdk->payments->v1->getTransferInitiation(
    request: $request
);

if ($response->transferInitiationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetTransferInitiationRequest](../../Models/Operations/GetTransferInitiationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetTransferInitiationResponse](../../Models/Operations/GetTransferInitiationResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## installConnector

Install a connector by its name and config.

### Example Usage

<!-- UsageSnippet language="php" operationID="installConnector" method="post" path="/api/payments/connectors/{connector}" -->
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

$request = new Operations\InstallConnectorRequest(
    connectorConfig: new Shared\CurrencyCloudConfig(
        apiKey: 'XXX',
        loginID: 'XXX',
        name: 'My CurrencyCloud Account',
        pollingPeriod: '60s',
    ),
    connector: Shared\Connector::Mangopay,
);

$response = $sdk->payments->v1->installConnector(
    request: $request
);

if ($response->connectorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\InstallConnectorRequest](../../Models/Operations/InstallConnectorRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\InstallConnectorResponse](../../Models/Operations/InstallConnectorResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## listAllConnectors

List all installed connectors.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAllConnectors" method="get" path="/api/payments/connectors" -->
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



$response = $sdk->payments->v1->listAllConnectors(

);

if ($response->connectorsResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\ListAllConnectorsResponse](../../Models/Operations/ListAllConnectorsResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## listBankAccounts

List all bank accounts created by user on Formance.

### Example Usage

<!-- UsageSnippet language="php" operationID="listBankAccounts" method="get" path="/api/payments/bank-accounts" -->
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

$request = new Operations\ListBankAccountsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
    sort: [
        'date:asc',
        'status:desc',
    ],
);

$response = $sdk->payments->v1->listBankAccounts(
    request: $request
);

if ($response->bankAccountsCursor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListBankAccountsRequest](../../Models/Operations/ListBankAccountsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListBankAccountsResponse](../../Models/Operations/ListBankAccountsResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## listConfigsAvailableConnectors

List the configs of each available connector.

### Example Usage

<!-- UsageSnippet language="php" operationID="listConfigsAvailableConnectors" method="get" path="/api/payments/connectors/configs" -->
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



$response = $sdk->payments->v1->listConfigsAvailableConnectors(

);

if ($response->connectorsConfigsResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\ListConfigsAvailableConnectorsResponse](../../Models/Operations/ListConfigsAvailableConnectorsResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## ~~listConnectorTasks~~

List all tasks associated with this connector.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="listConnectorTasks" method="get" path="/api/payments/connectors/{connector}/tasks" -->
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

$request = new Operations\ListConnectorTasksRequest(
    connector: Shared\Connector::Modulr,
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v1->listConnectorTasks(
    request: $request
);

if ($response->tasksCursor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListConnectorTasksRequest](../../Models/Operations/ListConnectorTasksRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListConnectorTasksResponse](../../Models/Operations/ListConnectorTasksResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## listConnectorTasksV1

List all tasks associated with this connector.

### Example Usage

<!-- UsageSnippet language="php" operationID="listConnectorTasksV1" method="get" path="/api/payments/connectors/{connector}/{connectorId}/tasks" -->
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

$request = new Operations\ListConnectorTasksV1Request(
    connector: Shared\Connector::Wise,
    connectorId: 'XXX',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v1->listConnectorTasksV1(
    request: $request
);

if ($response->tasksCursor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListConnectorTasksV1Request](../../Models/Operations/ListConnectorTasksV1Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListConnectorTasksV1Response](../../Models/Operations/ListConnectorTasksV1Response.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## listPayments

List payments

### Example Usage

<!-- UsageSnippet language="php" operationID="listPayments" method="get" path="/api/payments/payments" -->
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

$request = new Operations\ListPaymentsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
    sort: [
        'date:asc',
        'status:desc',
    ],
);

$response = $sdk->payments->v1->listPayments(
    request: $request
);

if ($response->paymentsCursor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListPaymentsRequest](../../Models/Operations/ListPaymentsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListPaymentsResponse](../../Models/Operations/ListPaymentsResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## listPools

List Pools

### Example Usage

<!-- UsageSnippet language="php" operationID="listPools" method="get" path="/api/payments/pools" -->
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

$request = new Operations\ListPoolsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
    sort: [
        'date:asc',
        'status:desc',
    ],
);

$response = $sdk->payments->v1->listPools(
    request: $request
);

if ($response->poolsCursor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\ListPoolsRequest](../../Models/Operations/ListPoolsRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\ListPoolsResponse](../../Models/Operations/ListPoolsResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## listTransferInitiations

List Transfer Initiations

### Example Usage

<!-- UsageSnippet language="php" operationID="listTransferInitiations" method="get" path="/api/payments/transfer-initiations" -->
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

$request = new Operations\ListTransferInitiationsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
    sort: [
        'date:asc',
        'status:desc',
    ],
);

$response = $sdk->payments->v1->listTransferInitiations(
    request: $request
);

if ($response->transferInitiationsCursor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListTransferInitiationsRequest](../../Models/Operations/ListTransferInitiationsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListTransferInitiationsResponse](../../Models/Operations/ListTransferInitiationsResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## paymentsgetAccount

Get an account

### Example Usage

<!-- UsageSnippet language="php" operationID="paymentsgetAccount" method="get" path="/api/payments/accounts/{accountId}" -->
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

$request = new Operations\PaymentsgetAccountRequest(
    accountId: 'XXX',
);

$response = $sdk->payments->v1->paymentsgetAccount(
    request: $request
);

if ($response->paymentsAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PaymentsgetAccountRequest](../../Models/Operations/PaymentsgetAccountRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PaymentsgetAccountResponse](../../Models/Operations/PaymentsgetAccountResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## paymentsgetServerInfo

Get server info

### Example Usage

<!-- UsageSnippet language="php" operationID="paymentsgetServerInfo" method="get" path="/api/payments/_info" -->
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



$response = $sdk->payments->v1->paymentsgetServerInfo(

);

if ($response->paymentsServerInfo !== null) {
    // handle response
}
```

### Response

**[?Operations\PaymentsgetServerInfoResponse](../../Models/Operations/PaymentsgetServerInfoResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## paymentslistAccounts

List accounts

### Example Usage

<!-- UsageSnippet language="php" operationID="paymentslistAccounts" method="get" path="/api/payments/accounts" -->
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

$request = new Operations\PaymentslistAccountsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
    sort: [
        'date:asc',
        'status:desc',
    ],
);

$response = $sdk->payments->v1->paymentslistAccounts(
    request: $request
);

if ($response->accountsCursor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PaymentslistAccountsRequest](../../Models/Operations/PaymentslistAccountsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PaymentslistAccountsResponse](../../Models/Operations/PaymentslistAccountsResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## ~~readConnectorConfig~~

Read connector config

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="readConnectorConfig" method="get" path="/api/payments/connectors/{connector}/config" -->
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

$request = new Operations\ReadConnectorConfigRequest(
    connector: Shared\Connector::Modulr,
);

$response = $sdk->payments->v1->readConnectorConfig(
    request: $request
);

if ($response->connectorConfigResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ReadConnectorConfigRequest](../../Models/Operations/ReadConnectorConfigRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ReadConnectorConfigResponse](../../Models/Operations/ReadConnectorConfigResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## readConnectorConfigV1

Read connector config

### Example Usage

<!-- UsageSnippet language="php" operationID="readConnectorConfigV1" method="get" path="/api/payments/connectors/{connector}/{connectorId}/config" -->
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

$request = new Operations\ReadConnectorConfigV1Request(
    connector: Shared\Connector::Mangopay,
    connectorId: 'XXX',
);

$response = $sdk->payments->v1->readConnectorConfigV1(
    request: $request
);

if ($response->connectorConfigResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ReadConnectorConfigV1Request](../../Models/Operations/ReadConnectorConfigV1Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ReadConnectorConfigV1Response](../../Models/Operations/ReadConnectorConfigV1Response.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## removeAccountFromPool

Remove an account from a pool by its id.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountFromPool" method="delete" path="/api/payments/pools/{poolId}/accounts/{accountId}" -->
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

$request = new Operations\RemoveAccountFromPoolRequest(
    accountId: 'XXX',
    poolId: 'XXX',
);

$response = $sdk->payments->v1->removeAccountFromPool(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveAccountFromPoolRequest](../../Models/Operations/RemoveAccountFromPoolRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveAccountFromPoolResponse](../../Models/Operations/RemoveAccountFromPoolResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## ~~resetConnector~~

Reset a connector by its name.
It will remove the connector and ALL PAYMENTS generated with it.


> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="resetConnector" method="post" path="/api/payments/connectors/{connector}/reset" -->
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

$request = new Operations\ResetConnectorRequest(
    connector: Shared\Connector::Wise,
);

$response = $sdk->payments->v1->resetConnector(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ResetConnectorRequest](../../Models/Operations/ResetConnectorRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ResetConnectorResponse](../../Models/Operations/ResetConnectorResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## resetConnectorV1

Reset a connector by its name.
It will remove the connector and ALL PAYMENTS generated with it.


### Example Usage

<!-- UsageSnippet language="php" operationID="resetConnectorV1" method="post" path="/api/payments/connectors/{connector}/{connectorId}/reset" -->
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

$request = new Operations\ResetConnectorV1Request(
    connector: Shared\Connector::Wise,
    connectorId: 'XXX',
);

$response = $sdk->payments->v1->resetConnectorV1(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ResetConnectorV1Request](../../Models/Operations/ResetConnectorV1Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ResetConnectorV1Response](../../Models/Operations/ResetConnectorV1Response.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## retryTransferInitiation

Retry a failed transfer initiation

### Example Usage

<!-- UsageSnippet language="php" operationID="retryTransferInitiation" method="post" path="/api/payments/transfer-initiations/{transferId}/retry" -->
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

$request = new Operations\RetryTransferInitiationRequest(
    transferId: 'XXX',
);

$response = $sdk->payments->v1->retryTransferInitiation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RetryTransferInitiationRequest](../../Models/Operations/RetryTransferInitiationRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RetryTransferInitiationResponse](../../Models/Operations/RetryTransferInitiationResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## reverseTransferInitiation

Reverse transfer initiation

### Example Usage

<!-- UsageSnippet language="php" operationID="reverseTransferInitiation" method="post" path="/api/payments/transfer-initiations/{transferId}/reverse" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\Math\BigInteger;
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

$request = new Operations\ReverseTransferInitiationRequest(
    reverseTransferInitiationRequest: new Shared\ReverseTransferInitiationRequest(
        amount: BigInteger::of('978875'),
        asset: 'USD',
        description: 'whenever phooey a unlike tremendously whoever after when tight',
        metadata: [
            'key' => '<value>',
        ],
        reference: 'XXX',
    ),
    transferId: 'XXX',
);

$response = $sdk->payments->v1->reverseTransferInitiation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ReverseTransferInitiationRequest](../../Models/Operations/ReverseTransferInitiationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ReverseTransferInitiationResponse](../../Models/Operations/ReverseTransferInitiationResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## ~~uninstallConnector~~

Uninstall a connector by its name.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="uninstallConnector" method="delete" path="/api/payments/connectors/{connector}" -->
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

$request = new Operations\UninstallConnectorRequest(
    connector: Shared\Connector::Generic,
);

$response = $sdk->payments->v1->uninstallConnector(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UninstallConnectorRequest](../../Models/Operations/UninstallConnectorRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UninstallConnectorResponse](../../Models/Operations/UninstallConnectorResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## uninstallConnectorV1

Uninstall a connector by its name.

### Example Usage

<!-- UsageSnippet language="php" operationID="uninstallConnectorV1" method="delete" path="/api/payments/connectors/{connector}/{connectorId}" -->
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

$request = new Operations\UninstallConnectorV1Request(
    connector: Shared\Connector::BankingCircle,
    connectorId: 'XXX',
);

$response = $sdk->payments->v1->uninstallConnectorV1(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UninstallConnectorV1Request](../../Models/Operations/UninstallConnectorV1Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UninstallConnectorV1Response](../../Models/Operations/UninstallConnectorV1Response.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## updateBankAccountMetadata

Update metadata of a bank account

### Example Usage

<!-- UsageSnippet language="php" operationID="updateBankAccountMetadata" method="patch" path="/api/payments/bank-accounts/{bankAccountId}/metadata" -->
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

$request = new Operations\UpdateBankAccountMetadataRequest(
    updateBankAccountMetadataRequest: new Shared\UpdateBankAccountMetadataRequest(
        metadata: [
            'key' => '<value>',
            'key1' => '<value>',
            'key2' => '<value>',
        ],
    ),
    bankAccountId: 'XXX',
);

$response = $sdk->payments->v1->updateBankAccountMetadata(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\UpdateBankAccountMetadataRequest](../../Models/Operations/UpdateBankAccountMetadataRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\UpdateBankAccountMetadataResponse](../../Models/Operations/UpdateBankAccountMetadataResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## updateConnectorConfigV1

Update connector config

### Example Usage

<!-- UsageSnippet language="php" operationID="updateConnectorConfigV1" method="post" path="/api/payments/connectors/{connector}/{connectorId}/config" -->
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

$request = new Operations\UpdateConnectorConfigV1Request(
    connectorConfig: new Shared\ModulrConfig(
        apiKey: 'XXX',
        apiSecret: 'XXX',
        name: 'My Modulr Account',
        pollingPeriod: '60s',
    ),
    connector: Shared\Connector::Mangopay,
    connectorId: 'XXX',
);

$response = $sdk->payments->v1->updateConnectorConfigV1(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateConnectorConfigV1Request](../../Models/Operations/UpdateConnectorConfigV1Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateConnectorConfigV1Response](../../Models/Operations/UpdateConnectorConfigV1Response.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## updateMetadata

Update metadata

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMetadata" method="patch" path="/api/payments/payments/{paymentId}/metadata" -->
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

$request = new Operations\UpdateMetadataRequest(
    requestBody: [
        'key' => '<value>',
    ],
    paymentId: 'XXX',
);

$response = $sdk->payments->v1->updateMetadata(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateMetadataRequest](../../Models/Operations/UpdateMetadataRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateMetadataResponse](../../Models/Operations/UpdateMetadataResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## updateTransferInitiationStatus

Update a transfer initiation status

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTransferInitiationStatus" method="post" path="/api/payments/transfer-initiations/{transferId}/status" -->
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

$request = new Operations\UpdateTransferInitiationStatusRequest(
    updateTransferInitiationStatusRequest: new Shared\UpdateTransferInitiationStatusRequest(
        status: Shared\Status::Validated,
    ),
    transferId: 'XXX',
);

$response = $sdk->payments->v1->updateTransferInitiationStatus(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\UpdateTransferInitiationStatusRequest](../../Models/Operations/UpdateTransferInitiationStatusRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\UpdateTransferInitiationStatusResponse](../../Models/Operations/UpdateTransferInitiationStatusResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\PaymentsErrorResponse | default                      | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |