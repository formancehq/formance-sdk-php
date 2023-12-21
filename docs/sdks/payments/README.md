# Payments
(*payments*)

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

use \formance\stack\SDK;
use \formance\stack\Models\Operations\AddAccountToPoolRequest;
use \formance\stack\Models\Shared\AddAccountToPoolRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new AddAccountToPoolRequest();
    $request->addAccountToPoolRequest = new AddAccountToPoolRequest();
    $request->addAccountToPoolRequest->accountID = 'string';
    $request->poolId = 'string';

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
| `$request`                                                                                                      | [\formance\stack\Models\Operations\AddAccountToPoolRequest](../../models/operations/AddAccountToPoolRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\AddAccountToPoolResponse](../../models/operations/AddAccountToPoolResponse.md)**


## connectorsTransfer

Execute a transfer between two accounts.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ConnectorsTransferRequest;
use \formance\stack\Models\Shared\TransferRequest;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ConnectorsTransferRequest();
    $request->transferRequest = new TransferRequest();
    $request->transferRequest->amount = 100;
    $request->transferRequest->asset = 'USD';
    $request->transferRequest->destination = 'acct_1Gqj58KZcSIg2N2q';
    $request->transferRequest->source = 'acct_1Gqj58KZcSIg2N2q';
    $request->connector = Connector::CurrencyCloud;

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
| `$request`                                                                                                          | [\formance\stack\Models\Operations\ConnectorsTransferRequest](../../models/operations/ConnectorsTransferRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\ConnectorsTransferResponse](../../models/operations/ConnectorsTransferResponse.md)**


## createBankAccount

Create a bank account in Payments and on the PSP.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\BankAccountRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new BankAccountRequest();
    $request->accountNumber = 'string';
    $request->connectorID = 'string';
    $request->country = 'GB';
    $request->iban = 'HU80500236840980904027018003';
    $request->metadata = [
        'Manganese' => 'string',
    ];
    $request->name = 'My account';
    $request->swiftBicCode = 'string';

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
| `$request`                                                                                    | [\formance\stack\Models\Shared\BankAccountRequest](../../models/shared/BankAccountRequest.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\formance\stack\Models\Operations\CreateBankAccountResponse](../../models/operations/CreateBankAccountResponse.md)**


## createPayment

Create a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\PaymentRequest;
use \formance\stack\Models\Shared\PaymentScheme;
use \formance\stack\Models\Shared\PaymentStatus;
use \formance\stack\Models\Shared\PaymentType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new PaymentRequest();
    $request->amount = 100;
    $request->asset = 'USD';
    $request->connectorID = 'string';
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-09T02:12:55.787Z');
    $request->destinationAccountID = 'string';
    $request->reference = 'string';
    $request->scheme = PaymentScheme::GooglePay;
    $request->sourceAccountID = 'string';
    $request->status = PaymentStatus::Refunded;
    $request->type = PaymentType::Transfer;

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
| `$request`                                                                            | [\formance\stack\Models\Shared\PaymentRequest](../../models/shared/PaymentRequest.md) | :heavy_check_mark:                                                                    | The request object to use for the request.                                            |


### Response

**[?\formance\stack\Models\Operations\CreatePaymentResponse](../../models/operations/CreatePaymentResponse.md)**


## createPool

Create a Pool

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\PoolRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new PoolRequest();
    $request->accountIDs = [
        'string',
    ];
    $request->name = 'string';

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
| `$request`                                                                      | [\formance\stack\Models\Shared\PoolRequest](../../models/shared/PoolRequest.md) | :heavy_check_mark:                                                              | The request object to use for the request.                                      |


### Response

**[?\formance\stack\Models\Operations\CreatePoolResponse](../../models/operations/CreatePoolResponse.md)**


## createTransferInitiation

Create a transfer initiation

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\TransferInitiationRequest;
use \formance\stack\Models\Shared\Connector;
use \formance\stack\Models\Shared\TransferInitiationRequestType;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TransferInitiationRequest();
    $request->amount = 256698;
    $request->asset = 'USD';
    $request->connectorID = 'string';
    $request->description = 'Multi-tiered incremental methodology';
    $request->destinationAccountID = 'string';
    $request->metadata = [
        'deposit' => 'string',
    ];
    $request->provider = Connector::BankingCircle;
    $request->reference = 'XXX';
    $request->scheduledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-20T04:11:30.978Z');
    $request->sourceAccountID = 'string';
    $request->type = TransferInitiationRequestType::Payout;
    $request->validated = false;

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
| `$request`                                                                                                  | [\formance\stack\Models\Shared\TransferInitiationRequest](../../models/shared/TransferInitiationRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\CreateTransferInitiationResponse](../../models/operations/CreateTransferInitiationResponse.md)**


## deletePool

Delete a pool by its id.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\DeletePoolRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeletePoolRequest();
    $request->poolId = 'string';

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
| `$request`                                                                                          | [\formance\stack\Models\Operations\DeletePoolRequest](../../models/operations/DeletePoolRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\DeletePoolResponse](../../models/operations/DeletePoolResponse.md)**


## deleteTransferInitiation

Delete a transfer initiation by its id.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\DeleteTransferInitiationRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteTransferInitiationRequest();
    $request->transferId = 'string';

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
| `$request`                                                                                                                      | [\formance\stack\Models\Operations\DeleteTransferInitiationRequest](../../models/operations/DeleteTransferInitiationRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\formance\stack\Models\Operations\DeleteTransferInitiationResponse](../../models/operations/DeleteTransferInitiationResponse.md)**


## getAccountBalances

Get account balances

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetAccountBalancesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetAccountBalancesRequest();
    $request->accountId = 'string';
    $request->asset = 'string';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->from = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-04T20:25:30.152Z');
    $request->limit = 743236;
    $request->pageSize = 125462;
    $request->sort = [
        'string',
    ];
    $request->to = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-14T20:40:51.017Z');

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
| `$request`                                                                                                          | [\formance\stack\Models\Operations\GetAccountBalancesRequest](../../models/operations/GetAccountBalancesRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\GetAccountBalancesResponse](../../models/operations/GetAccountBalancesResponse.md)**


## getBankAccount

Get a bank account created by user on Formance

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetBankAccountRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetBankAccountRequest();
    $request->bankAccountId = 'string';

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
| `$request`                                                                                                  | [\formance\stack\Models\Operations\GetBankAccountRequest](../../models/operations/GetBankAccountRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\GetBankAccountResponse](../../models/operations/GetBankAccountResponse.md)**


## ~~getConnectorTask~~

Get a specific task associated to the connector.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetConnectorTaskRequest;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetConnectorTaskRequest();
    $request->connector = Connector::Atlar;
    $request->taskId = 'string';

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
| `$request`                                                                                                      | [\formance\stack\Models\Operations\GetConnectorTaskRequest](../../models/operations/GetConnectorTaskRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\GetConnectorTaskResponse](../../models/operations/GetConnectorTaskResponse.md)**


## getConnectorTaskV1

Get a specific task associated to the connector.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetConnectorTaskV1Request;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetConnectorTaskV1Request();
    $request->connector = Connector::CurrencyCloud;
    $request->connectorId = 'string';
    $request->taskId = 'string';

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
| `$request`                                                                                                          | [\formance\stack\Models\Operations\GetConnectorTaskV1Request](../../models/operations/GetConnectorTaskV1Request.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\GetConnectorTaskV1Response](../../models/operations/GetConnectorTaskV1Response.md)**


## getPayment

Get a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetPaymentRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetPaymentRequest();
    $request->paymentId = 'string';

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
| `$request`                                                                                          | [\formance\stack\Models\Operations\GetPaymentRequest](../../models/operations/GetPaymentRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\GetPaymentResponse](../../models/operations/GetPaymentResponse.md)**


## getPool

Get a Pool

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetPoolRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetPoolRequest();
    $request->poolId = 'string';

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
| `$request`                                                                                    | [\formance\stack\Models\Operations\GetPoolRequest](../../models/operations/GetPoolRequest.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\formance\stack\Models\Operations\GetPoolResponse](../../models/operations/GetPoolResponse.md)**


## getPoolBalances

Get pool balances

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetPoolBalancesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetPoolBalancesRequest();
    $request->at = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-04T19:57:32.195Z');
    $request->poolId = 'string';

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
| `$request`                                                                                                    | [\formance\stack\Models\Operations\GetPoolBalancesRequest](../../models/operations/GetPoolBalancesRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\formance\stack\Models\Operations\GetPoolBalancesResponse](../../models/operations/GetPoolBalancesResponse.md)**


## getTransferInitiation

Get a transfer initiation

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetTransferInitiationRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetTransferInitiationRequest();
    $request->transferId = 'string';

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
| `$request`                                                                                                                | [\formance\stack\Models\Operations\GetTransferInitiationRequest](../../models/operations/GetTransferInitiationRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\formance\stack\Models\Operations\GetTransferInitiationResponse](../../models/operations/GetTransferInitiationResponse.md)**


## installConnector

Install a connector by its name and config.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\InstallConnectorRequest;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new InstallConnectorRequest();
    $request->requestBody = 'string';
    $request->connector = Connector::Wise;

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
| `$request`                                                                                                      | [\formance\stack\Models\Operations\InstallConnectorRequest](../../models/operations/InstallConnectorRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\InstallConnectorResponse](../../models/operations/InstallConnectorResponse.md)**


## listAllConnectors

List all installed connectors.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;

$sdk = SDK::builder()
    ->build();

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

**[?\formance\stack\Models\Operations\ListAllConnectorsResponse](../../models/operations/ListAllConnectorsResponse.md)**


## listBankAccounts

List all bank accounts created by user on Formance.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ListBankAccountsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListBankAccountsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 578999;
    $request->sort = [
        'string',
    ];

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
| `$request`                                                                                                      | [\formance\stack\Models\Operations\ListBankAccountsRequest](../../models/operations/ListBankAccountsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\ListBankAccountsResponse](../../models/operations/ListBankAccountsResponse.md)**


## listConfigsAvailableConnectors

List the configs of each available connector.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;

$sdk = SDK::builder()
    ->build();

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

**[?\formance\stack\Models\Operations\ListConfigsAvailableConnectorsResponse](../../models/operations/ListConfigsAvailableConnectorsResponse.md)**


## ~~listConnectorTasks~~

List all tasks associated with this connector.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ListConnectorTasksRequest;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListConnectorTasksRequest();
    $request->connector = Connector::Wise;
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 501686;

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
| `$request`                                                                                                          | [\formance\stack\Models\Operations\ListConnectorTasksRequest](../../models/operations/ListConnectorTasksRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\ListConnectorTasksResponse](../../models/operations/ListConnectorTasksResponse.md)**


## listConnectorTasksV1

List all tasks associated with this connector.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ListConnectorTasksV1Request;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListConnectorTasksV1Request();
    $request->connector = Connector::BankingCircle;
    $request->connectorId = 'string';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 442673;

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
| `$request`                                                                                                              | [\formance\stack\Models\Operations\ListConnectorTasksV1Request](../../models/operations/ListConnectorTasksV1Request.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\formance\stack\Models\Operations\ListConnectorTasksV1Response](../../models/operations/ListConnectorTasksV1Response.md)**


## listPayments

List payments

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ListPaymentsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListPaymentsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 13778;
    $request->sort = [
        'string',
    ];

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
| `$request`                                                                                              | [\formance\stack\Models\Operations\ListPaymentsRequest](../../models/operations/ListPaymentsRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\ListPaymentsResponse](../../models/operations/ListPaymentsResponse.md)**


## listPools

List Pools

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ListPoolsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListPoolsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 567687;
    $request->query = 'string';
    $request->sort = [
        'string',
    ];

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
| `$request`                                                                                        | [\formance\stack\Models\Operations\ListPoolsRequest](../../models/operations/ListPoolsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\formance\stack\Models\Operations\ListPoolsResponse](../../models/operations/ListPoolsResponse.md)**


## listTransferInitiations

List Transfer Initiations

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ListTransferInitiationsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListTransferInitiationsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 706689;
    $request->query = 'string';
    $request->sort = [
        'string',
    ];

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
| `$request`                                                                                                                    | [\formance\stack\Models\Operations\ListTransferInitiationsRequest](../../models/operations/ListTransferInitiationsRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\formance\stack\Models\Operations\ListTransferInitiationsResponse](../../models/operations/ListTransferInitiationsResponse.md)**


## paymentsgetAccount

Get an account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\PaymentsgetAccountRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new PaymentsgetAccountRequest();
    $request->accountId = 'string';

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
| `$request`                                                                                                          | [\formance\stack\Models\Operations\PaymentsgetAccountRequest](../../models/operations/PaymentsgetAccountRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\PaymentsgetAccountResponse](../../models/operations/PaymentsgetAccountResponse.md)**


## paymentsgetServerInfo

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
    $response = $sdk->payments->paymentsgetServerInfo();

    if ($response->serverInfo !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\PaymentsgetServerInfoResponse](../../models/operations/PaymentsgetServerInfoResponse.md)**


## paymentslistAccounts

List accounts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\PaymentslistAccountsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new PaymentslistAccountsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 227071;
    $request->sort = [
        'string',
    ];

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
| `$request`                                                                                                              | [\formance\stack\Models\Operations\PaymentslistAccountsRequest](../../models/operations/PaymentslistAccountsRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\formance\stack\Models\Operations\PaymentslistAccountsResponse](../../models/operations/PaymentslistAccountsResponse.md)**


## ~~readConnectorConfig~~

Read connector config

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ReadConnectorConfigRequest;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ReadConnectorConfigRequest();
    $request->connector = Connector::Adyen;

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
| `$request`                                                                                                            | [\formance\stack\Models\Operations\ReadConnectorConfigRequest](../../models/operations/ReadConnectorConfigRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\formance\stack\Models\Operations\ReadConnectorConfigResponse](../../models/operations/ReadConnectorConfigResponse.md)**


## readConnectorConfigV1

Read connector config

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ReadConnectorConfigV1Request;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ReadConnectorConfigV1Request();
    $request->connector = Connector::CurrencyCloud;
    $request->connectorId = 'string';

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
| `$request`                                                                                                                | [\formance\stack\Models\Operations\ReadConnectorConfigV1Request](../../models/operations/ReadConnectorConfigV1Request.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\formance\stack\Models\Operations\ReadConnectorConfigV1Response](../../models/operations/ReadConnectorConfigV1Response.md)**


## removeAccountFromPool

Remove an account from a pool by its id.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\RemoveAccountFromPoolRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RemoveAccountFromPoolRequest();
    $request->accountId = 'string';
    $request->poolId = 'string';

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
| `$request`                                                                                                                | [\formance\stack\Models\Operations\RemoveAccountFromPoolRequest](../../models/operations/RemoveAccountFromPoolRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\formance\stack\Models\Operations\RemoveAccountFromPoolResponse](../../models/operations/RemoveAccountFromPoolResponse.md)**


## ~~resetConnector~~

Reset a connector by its name.
It will remove the connector and ALL PAYMENTS generated with it.


> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ResetConnectorRequest;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ResetConnectorRequest();
    $request->connector = Connector::Moneycorp;

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
| `$request`                                                                                                  | [\formance\stack\Models\Operations\ResetConnectorRequest](../../models/operations/ResetConnectorRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\ResetConnectorResponse](../../models/operations/ResetConnectorResponse.md)**


## resetConnectorV1

Reset a connector by its name.
It will remove the connector and ALL PAYMENTS generated with it.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ResetConnectorV1Request;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ResetConnectorV1Request();
    $request->connector = Connector::Adyen;
    $request->connectorId = 'string';

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
| `$request`                                                                                                      | [\formance\stack\Models\Operations\ResetConnectorV1Request](../../models/operations/ResetConnectorV1Request.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\ResetConnectorV1Response](../../models/operations/ResetConnectorV1Response.md)**


## retryTransferInitiation

Retry a failed transfer initiation

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\RetryTransferInitiationRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RetryTransferInitiationRequest();
    $request->transferId = 'string';

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
| `$request`                                                                                                                    | [\formance\stack\Models\Operations\RetryTransferInitiationRequest](../../models/operations/RetryTransferInitiationRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\formance\stack\Models\Operations\RetryTransferInitiationResponse](../../models/operations/RetryTransferInitiationResponse.md)**


## udpateTransferInitiationStatus

Update a transfer initiation status

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\UdpateTransferInitiationStatusRequest;
use \formance\stack\Models\Shared\UpdateTransferInitiationStatusRequest;
use \formance\stack\Models\Shared\UpdateTransferInitiationStatusRequestStatus;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UdpateTransferInitiationStatusRequest();
    $request->updateTransferInitiationStatusRequest = new UpdateTransferInitiationStatusRequest();
    $request->updateTransferInitiationStatusRequest->status = UpdateTransferInitiationStatusRequestStatus::Validated;
    $request->transferId = 'string';

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
| `$request`                                                                                                                                  | [\formance\stack\Models\Operations\UdpateTransferInitiationStatusRequest](../../models/operations/UdpateTransferInitiationStatusRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\formance\stack\Models\Operations\UdpateTransferInitiationStatusResponse](../../models/operations/UdpateTransferInitiationStatusResponse.md)**


## ~~uninstallConnector~~

Uninstall a connector by its name.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\UninstallConnectorRequest;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UninstallConnectorRequest();
    $request->connector = Connector::Wise;

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
| `$request`                                                                                                          | [\formance\stack\Models\Operations\UninstallConnectorRequest](../../models/operations/UninstallConnectorRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\UninstallConnectorResponse](../../models/operations/UninstallConnectorResponse.md)**


## uninstallConnectorV1

Uninstall a connector by its name.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\UninstallConnectorV1Request;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UninstallConnectorV1Request();
    $request->connector = Connector::Adyen;
    $request->connectorId = 'string';

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
| `$request`                                                                                                              | [\formance\stack\Models\Operations\UninstallConnectorV1Request](../../models/operations/UninstallConnectorV1Request.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\formance\stack\Models\Operations\UninstallConnectorV1Response](../../models/operations/UninstallConnectorV1Response.md)**


## updateConnectorConfigV1

Update connector config

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\UpdateConnectorConfigV1Request;
use \formance\stack\Models\Shared\Connector;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UpdateConnectorConfigV1Request();
    $request->requestBody = 'string';
    $request->connector = Connector::Stripe;
    $request->connectorId = 'string';

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
| `$request`                                                                                                                    | [\formance\stack\Models\Operations\UpdateConnectorConfigV1Request](../../models/operations/UpdateConnectorConfigV1Request.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\formance\stack\Models\Operations\UpdateConnectorConfigV1Response](../../models/operations/UpdateConnectorConfigV1Response.md)**


## updateMetadata

Update metadata

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\UpdateMetadataRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UpdateMetadataRequest();
    $request->requestBody = [
        'synthesizing' => 'string',
    ];
    $request->paymentId = 'string';

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
| `$request`                                                                                                  | [\formance\stack\Models\Operations\UpdateMetadataRequest](../../models/operations/UpdateMetadataRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\UpdateMetadataResponse](../../models/operations/UpdateMetadataResponse.md)**

