# SDKV1
(*ledger->v1*)

## Overview

### Available Operations

* [createTransactions](#createtransactions) - Create a new batch of transactions to a ledger
* [addMetadataOnTransaction](#addmetadataontransaction) - Set the metadata of a transaction by its ID
* [addMetadataToAccount](#addmetadatatoaccount) - Add metadata to an account
* [countAccounts](#countaccounts) - Count the accounts from a ledger
* [countTransactions](#counttransactions) - Count the transactions from a ledger
* [createTransaction](#createtransaction) - Create a new transaction to a ledger
* [getAccount](#getaccount) - Get account by its address
* [getBalances](#getbalances) - Get the balances from a ledger's account
* [getBalancesAggregated](#getbalancesaggregated) - Get the aggregated balances from selected accounts
* [getInfo](#getinfo) - Show server information
* [getLedgerInfo](#getledgerinfo) - Get information about a ledger
* [getMapping](#getmapping) - Get the mapping of a ledger
* [getTransaction](#gettransaction) - Get transaction from a ledger by its ID
* [listAccounts](#listaccounts) - List accounts from a ledger
* [listLogs](#listlogs) - List the logs from a ledger
* [listTransactions](#listtransactions) - List transactions from a ledger
* [readStats](#readstats) - Get statistics from a ledger
* [revertTransaction](#reverttransaction) - Revert a ledger transaction by its ID
* [~~runScript~~](#runscript) - Execute a Numscript :warning: **Deprecated**
* [updateMapping](#updatemapping) - Update the mapping of a ledger

## createTransactions

Create a new batch of transactions to a ledger

### Example Usage

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

$request = new Operations\CreateTransactionsRequest(
    transactions: new Shared\Transactions(
        transactions: [
            new Shared\TransactionData(
                postings: [
                    new Shared\Posting(
                        amount: BigInteger::of('100'),
                        asset: 'COIN',
                        destination: 'users:002',
                        source: 'users:001',
                    ),
                ],
                reference: 'ref:001',
            ),
        ],
    ),
    ledger: 'ledger001',
);

$response = $sdk->ledger->v1->createTransactions(
    request: $request
);

if ($response->transactionsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateTransactionsRequest](../../Models/Operations/CreateTransactionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateTransactionsResponse](../../Models/Operations/CreateTransactionsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## addMetadataOnTransaction

Set the metadata of a transaction by its ID

### Example Usage

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

$request = new Operations\AddMetadataOnTransactionRequest(
    ledger: 'ledger001',
    txid: BigInteger::of('1234'),
);

$response = $sdk->ledger->v1->addMetadataOnTransaction(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AddMetadataOnTransactionRequest](../../Models/Operations/AddMetadataOnTransactionRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AddMetadataOnTransactionResponse](../../Models/Operations/AddMetadataOnTransactionResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## addMetadataToAccount

Add metadata to an account

### Example Usage

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

$request = new Operations\AddMetadataToAccountRequest(
    address: 'users:001',
    ledger: 'ledger001',
    requestBody: [
        'key' => '<value>',
    ],
);

$response = $sdk->ledger->v1->addMetadataToAccount(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\AddMetadataToAccountRequest](../../Models/Operations/AddMetadataToAccountRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\AddMetadataToAccountResponse](../../Models/Operations/AddMetadataToAccountResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## countAccounts

Count the accounts from a ledger

### Example Usage

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

$request = new Operations\CountAccountsRequest(
    ledger: 'ledger001',
    address: 'users:.+',
    metadata: [
        '0' => 'm',
        '1' => 'e',
        '2' => 't',
        '3' => 'a',
        '4' => 'd',
        '5' => 'a',
        '6' => 't',
        '7' => 'a',
        '8' => '[',
        '9' => 'k',
        '10' => 'e',
        '11' => 'y',
        '12' => ']',
        '13' => '=',
        '14' => 'v',
        '15' => 'a',
        '16' => 'l',
        '17' => 'u',
        '18' => 'e',
        '19' => '1',
        '20' => '&',
        '21' => 'm',
        '22' => 'e',
        '23' => 't',
        '24' => 'a',
        '25' => 'd',
        '26' => 'a',
        '27' => 't',
        '28' => 'a',
        '29' => '[',
        '30' => 'a',
        '31' => '.',
        '32' => 'n',
        '33' => 'e',
        '34' => 's',
        '35' => 't',
        '36' => 'e',
        '37' => 'd',
        '38' => '.',
        '39' => 'k',
        '40' => 'e',
        '41' => 'y',
        '42' => ']',
        '43' => '=',
        '44' => 'v',
        '45' => 'a',
        '46' => 'l',
        '47' => 'u',
        '48' => 'e',
        '49' => '2',
    ],
);

$response = $sdk->ledger->v1->countAccounts(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CountAccountsRequest](../../Models/Operations/CountAccountsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CountAccountsResponse](../../Models/Operations/CountAccountsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## countTransactions

Count the transactions from a ledger

### Example Usage

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

$request = new Operations\CountTransactionsRequest(
    ledger: 'ledger001',
    account: 'users:001',
    destination: 'users:001',
    metadata: new Operations\Metadata(),
    reference: 'ref:001',
    source: 'users:001',
);

$response = $sdk->ledger->v1->countTransactions(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CountTransactionsRequest](../../Models/Operations/CountTransactionsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CountTransactionsResponse](../../Models/Operations/CountTransactionsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## createTransaction

Create a new transaction to a ledger

### Example Usage

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

$request = new Operations\CreateTransactionRequest(
    postTransaction: new Shared\PostTransaction(
        postings: [
            new Shared\Posting(
                amount: BigInteger::of('100'),
                asset: 'COIN',
                destination: 'users:002',
                source: 'users:001',
            ),
        ],
        reference: 'ref:001',
        script: new Shared\PostTransactionScript(
            plain: 'vars {\n' .
            'account $user\n' .
            '}\n' .
            'send [COIN 10] (\n' .
            '	source = @world\n' .
            '	destination = $user\n' .
            ')\n' .
            '',
            vars: [
                'user' => 'users:042',
            ],
        ),
    ),
    ledger: 'ledger001',
    preview: true,
);

$response = $sdk->ledger->v1->createTransaction(
    request: $request
);

if ($response->transactionsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateTransactionRequest](../../Models/Operations/CreateTransactionRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateTransactionResponse](../../Models/Operations/CreateTransactionResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## getAccount

Get account by its address

### Example Usage

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

$request = new Operations\GetAccountRequest(
    address: 'users:001',
    ledger: 'ledger001',
);

$response = $sdk->ledger->v1->getAccount(
    request: $request
);

if ($response->accountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetAccountRequest](../../Models/Operations/GetAccountRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetAccountResponse](../../Models/Operations/GetAccountResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## getBalances

Get the balances from a ledger's account

### Example Usage

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

$request = new Operations\GetBalancesRequest(
    ledger: 'ledger001',
    address: 'users:001',
    after: 'users:003',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
);

$response = $sdk->ledger->v1->getBalances(
    request: $request
);

if ($response->balancesCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetBalancesRequest](../../Models/Operations/GetBalancesRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetBalancesResponse](../../Models/Operations/GetBalancesResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## getBalancesAggregated

Get the aggregated balances from selected accounts

### Example Usage

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

$request = new Operations\GetBalancesAggregatedRequest(
    ledger: 'ledger001',
    address: 'users:001',
);

$response = $sdk->ledger->v1->getBalancesAggregated(
    request: $request
);

if ($response->aggregateBalancesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetBalancesAggregatedRequest](../../Models/Operations/GetBalancesAggregatedRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetBalancesAggregatedResponse](../../Models/Operations/GetBalancesAggregatedResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## getInfo

Show server information

### Example Usage

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



$response = $sdk->ledger->v1->getInfo(

);

if ($response->configInfoResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\GetInfoResponse](../../Models/Operations/GetInfoResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## getLedgerInfo

Get information about a ledger

### Example Usage

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

$request = new Operations\GetLedgerInfoRequest(
    ledger: 'ledger001',
);

$response = $sdk->ledger->v1->getLedgerInfo(
    request: $request
);

if ($response->ledgerInfoResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetLedgerInfoRequest](../../Models/Operations/GetLedgerInfoRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetLedgerInfoResponse](../../Models/Operations/GetLedgerInfoResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## getMapping

Get the mapping of a ledger

### Example Usage

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

$request = new Operations\GetMappingRequest(
    ledger: 'ledger001',
);

$response = $sdk->ledger->v1->getMapping(
    request: $request
);

if ($response->mappingResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetMappingRequest](../../Models/Operations/GetMappingRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetMappingResponse](../../Models/Operations/GetMappingResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## getTransaction

Get transaction from a ledger by its ID

### Example Usage

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

$request = new Operations\GetTransactionRequest(
    ledger: 'ledger001',
    txid: BigInteger::of('1234'),
);

$response = $sdk->ledger->v1->getTransaction(
    request: $request
);

if ($response->transactionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetTransactionRequest](../../Models/Operations/GetTransactionRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetTransactionResponse](../../Models/Operations/GetTransactionResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## listAccounts

List accounts from a ledger, sorted by address in descending order.

### Example Usage

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

$request = new Operations\ListAccountsRequest(
    ledger: 'ledger001',
    address: 'users:.+',
    after: 'users:003',
    balance: 2400,
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    metadata: [
        '0' => 'm',
        '1' => 'e',
        '2' => 't',
        '3' => 'a',
        '4' => 'd',
        '5' => 'a',
        '6' => 't',
        '7' => 'a',
        '8' => '[',
        '9' => 'k',
        '10' => 'e',
        '11' => 'y',
        '12' => ']',
        '13' => '=',
        '14' => 'v',
        '15' => 'a',
        '16' => 'l',
        '17' => 'u',
        '18' => 'e',
        '19' => '1',
        '20' => '&',
        '21' => 'm',
        '22' => 'e',
        '23' => 't',
        '24' => 'a',
        '25' => 'd',
        '26' => 'a',
        '27' => 't',
        '28' => 'a',
        '29' => '[',
        '30' => 'a',
        '31' => '.',
        '32' => 'n',
        '33' => 'e',
        '34' => 's',
        '35' => 't',
        '36' => 'e',
        '37' => 'd',
        '38' => '.',
        '39' => 'k',
        '40' => 'e',
        '41' => 'y',
        '42' => ']',
        '43' => '=',
        '44' => 'v',
        '45' => 'a',
        '46' => 'l',
        '47' => 'u',
        '48' => 'e',
        '49' => '2',
    ],
    pageSize: 100,
);

$response = $sdk->ledger->v1->listAccounts(
    request: $request
);

if ($response->accountsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListAccountsRequest](../../Models/Operations/ListAccountsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListAccountsResponse](../../Models/Operations/ListAccountsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## listLogs

List the logs from a ledger, sorted by ID in descending order.

### Example Usage

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

$request = new Operations\ListLogsRequest(
    ledger: 'ledger001',
    after: '1234',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->ledger->v1->listLogs(
    request: $request
);

if ($response->logsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\ListLogsRequest](../../Models/Operations/ListLogsRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\ListLogsResponse](../../Models/Operations/ListLogsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## listTransactions

List transactions from a ledger, sorted by txid in descending order.

### Example Usage

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

$request = new Operations\ListTransactionsRequest(
    ledger: 'ledger001',
    account: 'users:001',
    after: '1234',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    destination: 'users:001',
    pageSize: 100,
    reference: 'ref:001',
    source: 'users:001',
);

$response = $sdk->ledger->v1->listTransactions(
    request: $request
);

if ($response->transactionsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListTransactionsRequest](../../Models/Operations/ListTransactionsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListTransactionsResponse](../../Models/Operations/ListTransactionsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## readStats

Get statistics from a ledger. (aggregate metrics on accounts and transactions)


### Example Usage

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

$request = new Operations\ReadStatsRequest(
    ledger: 'ledger001',
);

$response = $sdk->ledger->v1->readStats(
    request: $request
);

if ($response->statsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\ReadStatsRequest](../../Models/Operations/ReadStatsRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\ReadStatsResponse](../../Models/Operations/ReadStatsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## revertTransaction

Revert a ledger transaction by its ID

### Example Usage

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

$request = new Operations\RevertTransactionRequest(
    ledger: 'ledger001',
    txid: BigInteger::of('1234'),
);

$response = $sdk->ledger->v1->revertTransaction(
    request: $request
);

if ($response->transactionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RevertTransactionRequest](../../Models/Operations/RevertTransactionRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RevertTransactionResponse](../../Models/Operations/RevertTransactionResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## ~~runScript~~

This route is deprecated, and has been merged into `POST /{ledger}/transactions`.


> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

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

$request = new Operations\RunScriptRequest(
    script: new Shared\Script(
        plain: 'vars {\n' .
        'account $user\n' .
        '}\n' .
        'send [COIN 10] (\n' .
        '	source = @world\n' .
        '	destination = $user\n' .
        ')\n' .
        '',
        reference: 'order_1234',
        vars: [
            'user' => 'users:042',
        ],
    ),
    ledger: 'ledger001',
    preview: true,
);

$response = $sdk->ledger->v1->runScript(
    request: $request
);

if ($response->scriptResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\RunScriptRequest](../../Models/Operations/RunScriptRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\RunScriptResponse](../../Models/Operations/RunScriptResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMapping

Update the mapping of a ledger

### Example Usage

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

$request = new Operations\UpdateMappingRequest(
    ledger: 'ledger001',
    mapping: new Shared\Mapping(
        contracts: [
            new Shared\Contract(
                expr: new Shared\Expr(),
                account: 'users:001',
            ),
        ],
    ),
);

$response = $sdk->ledger->v1->updateMapping(
    request: $request
);

if ($response->mappingResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateMappingRequest](../../Models/Operations/UpdateMappingRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateMappingResponse](../../Models/Operations/UpdateMappingResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | default              | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |