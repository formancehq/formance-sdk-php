# SDKWalletsV1
(*wallets->v1*)

## Overview

### Available Operations

* [confirmHold](#confirmhold) - Confirm a hold
* [createBalance](#createbalance) - Create a balance
* [createWallet](#createwallet) - Create a new wallet
* [creditWallet](#creditwallet) - Credit a wallet
* [debitWallet](#debitwallet) - Debit a wallet
* [getBalance](#getbalance) - Get detailed balance
* [getHold](#gethold) - Get a hold
* [getHolds](#getholds) - Get all holds for a wallet
* [getTransactions](#gettransactions)
* [getWallet](#getwallet) - Get a wallet
* [getWalletSummary](#getwalletsummary) - Get wallet summary
* [listBalances](#listbalances) - List balances of a wallet
* [listWallets](#listwallets) - List all wallets
* [updateWallet](#updatewallet) - Update a wallet
* [voidHold](#voidhold) - Cancel a hold
* [walletsgetServerInfo](#walletsgetserverinfo) - Get server info

## confirmHold

Confirm a hold

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\Math\BigInteger;
use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\ConfirmHoldRequest(
    holdId: '<id>',
    confirmHoldRequest: new Shared\ConfirmHoldRequest(
        amount: BigInteger::of('100'),
        final: true,
    ),
);

$response = $sdk->wallets->v1->confirmHold(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\ConfirmHoldRequest](../../Models/Operations/ConfirmHoldRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\ConfirmHoldResponse](../../Models/Operations/ConfirmHoldResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## createBalance

Create a balance

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

$request = new Operations\CreateBalanceRequest(
    id: '<id>',
);

$response = $sdk->wallets->v1->createBalance(
    request: $request
);

if ($response->createBalanceResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateBalanceRequest](../../Models/Operations/CreateBalanceRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateBalanceResponse](../../Models/Operations/CreateBalanceResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## createWallet

Create a new wallet

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

$request = new Operations\CreateWalletRequest();

$response = $sdk->wallets->v1->createWallet(
    request: $request
);

if ($response->createWalletResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\CreateWalletRequest](../../Models/Operations/CreateWalletRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\CreateWalletResponse](../../Models/Operations/CreateWalletResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## creditWallet

Credit a wallet

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\Math\BigInteger;
use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\CreditWalletRequest(
    id: '<id>',
    creditWalletRequest: new Shared\CreditWalletRequest(
        amount: new Shared\Monetary(
            amount: BigInteger::of('100'),
            asset: 'USD/2',
        ),
        metadata: [
            'key' => '',
        ],
        sources: [
            new Shared\LedgerAccountSubject(
                identifier: '<value>',
                type: '<value>',
            ),
        ],
    ),
);

$response = $sdk->wallets->v1->creditWallet(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\CreditWalletRequest](../../Models/Operations/CreditWalletRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\CreditWalletResponse](../../Models/Operations/CreditWalletResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## debitWallet

Debit a wallet

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\Math\BigInteger;
use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

$request = new Operations\DebitWalletRequest(
    id: '<id>',
    debitWalletRequest: new Shared\DebitWalletRequest(
        amount: new Shared\Monetary(
            amount: BigInteger::of('100'),
            asset: 'USD/2',
        ),
        metadata: [
            'key' => '',
        ],
        pending: true,
    ),
);

$response = $sdk->wallets->v1->debitWallet(
    request: $request
);

if ($response->debitWalletResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\DebitWalletRequest](../../Models/Operations/DebitWalletRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\DebitWalletResponse](../../Models/Operations/DebitWalletResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## getBalance

Get detailed balance

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

$request = new Operations\GetBalanceRequest(
    balanceName: '<value>',
    id: '<id>',
);

$response = $sdk->wallets->v1->getBalance(
    request: $request
);

if ($response->getBalanceResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetBalanceRequest](../../Models/Operations/GetBalanceRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetBalanceResponse](../../Models/Operations/GetBalanceResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## getHold

Get a hold

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

$request = new Operations\GetHoldRequest(
    holdID: '<id>',
);

$response = $sdk->wallets->v1->getHold(
    request: $request
);

if ($response->getHoldResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Operations\GetHoldRequest](../../Models/Operations/GetHoldRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\GetHoldResponse](../../Models/Operations/GetHoldResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## getHolds

Get all holds for a wallet

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

$request = new Operations\GetHoldsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    metadata: [
        'admin' => 'true',
    ],
    pageSize: 100,
    walletID: 'wallet1',
);

$response = $sdk->wallets->v1->getHolds(
    request: $request
);

if ($response->getHoldsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\GetHoldsRequest](../../Models/Operations/GetHoldsRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\GetHoldsResponse](../../Models/Operations/GetHoldsResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## getTransactions

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

$request = new Operations\GetTransactionsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
    walletID: 'wallet1',
);

$response = $sdk->wallets->v1->getTransactions(
    request: $request
);

if ($response->getTransactionsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetTransactionsRequest](../../Models/Operations/GetTransactionsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetTransactionsResponse](../../Models/Operations/GetTransactionsResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## getWallet

Get a wallet

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

$request = new Operations\GetWalletRequest(
    id: '<id>',
);

$response = $sdk->wallets->v1->getWallet(
    request: $request
);

if ($response->getWalletResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\GetWalletRequest](../../Models/Operations/GetWalletRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\GetWalletResponse](../../Models/Operations/GetWalletResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## getWalletSummary

Get wallet summary

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

$request = new Operations\GetWalletSummaryRequest(
    id: '<id>',
);

$response = $sdk->wallets->v1->getWalletSummary(
    request: $request
);

if ($response->getWalletSummaryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetWalletSummaryRequest](../../Models/Operations/GetWalletSummaryRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetWalletSummaryResponse](../../Models/Operations/GetWalletSummaryResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## listBalances

List balances of a wallet

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

$request = new Operations\ListBalancesRequest(
    id: '<id>',
);

$response = $sdk->wallets->v1->listBalances(
    request: $request
);

if ($response->listBalancesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListBalancesRequest](../../Models/Operations/ListBalancesRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListBalancesResponse](../../Models/Operations/ListBalancesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listWallets

List all wallets

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

$request = new Operations\ListWalletsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    expand: 'balances',
    metadata: [
        'admin' => 'true',
    ],
    name: 'wallet1',
    pageSize: 100,
);

$response = $sdk->wallets->v1->listWallets(
    request: $request
);

if ($response->listWalletsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\ListWalletsRequest](../../Models/Operations/ListWalletsRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\ListWalletsResponse](../../Models/Operations/ListWalletsResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## updateWallet

Update a wallet

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

$request = new Operations\UpdateWalletRequest(
    id: '<id>',
);

$response = $sdk->wallets->v1->updateWallet(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\UpdateWalletRequest](../../Models/Operations/UpdateWalletRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\UpdateWalletResponse](../../Models/Operations/UpdateWalletResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## voidHold

Cancel a hold

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

$request = new Operations\VoidHoldRequest(
    holdId: '<id>',
);

$response = $sdk->wallets->v1->voidHold(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\VoidHoldRequest](../../Models/Operations/VoidHoldRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\VoidHoldResponse](../../Models/Operations/VoidHoldResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |

## walletsgetServerInfo

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



$response = $sdk->wallets->v1->walletsgetServerInfo(

);

if ($response->serverInfo !== null) {
    // handle response
}
```

### Response

**[?Operations\WalletsgetServerInfoResponse](../../Models/Operations/WalletsgetServerInfoResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\WalletsErrorResponse | default                     | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |