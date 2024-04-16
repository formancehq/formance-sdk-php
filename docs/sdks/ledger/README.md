# Ledger


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
* [v2AddMetadataOnTransaction](#v2addmetadataontransaction) - Set the metadata of a transaction by its ID
* [v2AddMetadataToAccount](#v2addmetadatatoaccount) - Add metadata to an account
* [v2CountAccounts](#v2countaccounts) - Count the accounts from a ledger
* [v2CountTransactions](#v2counttransactions) - Count the transactions from a ledger
* [v2CreateBulk](#v2createbulk) - Bulk request
* [v2CreateLedger](#v2createledger) - Create a ledger
* [v2CreateTransaction](#v2createtransaction) - Create a new transaction to a ledger
* [v2DeleteAccountMetadata](#v2deleteaccountmetadata) - Delete metadata by key
* [v2DeleteLedgerMetadata](#v2deleteledgermetadata) - Delete ledger metadata by key
* [v2DeleteTransactionMetadata](#v2deletetransactionmetadata) - Delete metadata by key
* [v2GetAccount](#v2getaccount) - Get account by its address
* [v2GetBalancesAggregated](#v2getbalancesaggregated) - Get the aggregated balances from selected accounts
* [v2GetInfo](#v2getinfo) - Show server information
* [v2GetLedger](#v2getledger) - Get a ledger
* [v2GetLedgerInfo](#v2getledgerinfo) - Get information about a ledger
* [v2GetTransaction](#v2gettransaction) - Get transaction from a ledger by its ID
* [v2GetVolumesWithBalances](#v2getvolumeswithbalances) - Get list of volumes with balances for (account/asset)
* [v2ListAccounts](#v2listaccounts) - List accounts from a ledger
* [v2ListLedgers](#v2listledgers) - List ledgers
* [v2ListLogs](#v2listlogs) - List the logs from a ledger
* [v2ListTransactions](#v2listtransactions) - List transactions from a ledger
* [v2ReadStats](#v2readstats) - Get statistics from a ledger
* [v2RevertTransaction](#v2reverttransaction) - Revert a ledger transaction by its ID
* [v2UpdateLedgerMetadata](#v2updateledgermetadata) - Update ledger metadata

## createTransactions

Create a new batch of transactions to a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateTransactionsRequest();
    $request->transactions = new Shared\Transactions();
    $request->transactions->transactions = [
        new Shared\TransactionData(),
    ];
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->createTransactions($request);

    if ($response->transactionsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\formance\stack\Models\Operations\CreateTransactionsRequest](../../Models/Operations/CreateTransactionsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\CreateTransactionsResponse](../../Models/Operations/CreateTransactionsResponse.md)**


## addMetadataOnTransaction

Set the metadata of a transaction by its ID

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AddMetadataOnTransactionRequest();
    $request->requestBody = [
        'withdrawal' => '<value>',
    ];
    $request->ledger = 'ledger001';
    $request->txid = 1234;;

    $response = $sdk->ledger->addMetadataOnTransaction($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\formance\stack\Models\Operations\AddMetadataOnTransactionRequest](../../Models/Operations/AddMetadataOnTransactionRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\formance\stack\Models\Operations\AddMetadataOnTransactionResponse](../../Models/Operations/AddMetadataOnTransactionResponse.md)**


## addMetadataToAccount

Add metadata to an account

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AddMetadataToAccountRequest();
    $request->requestBody = [
        'Oriental' => '<value>',
    ];
    $request->address = 'users:001';
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->addMetadataToAccount($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\formance\stack\Models\Operations\AddMetadataToAccountRequest](../../Models/Operations/AddMetadataToAccountRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\formance\stack\Models\Operations\AddMetadataToAccountResponse](../../Models/Operations/AddMetadataToAccountResponse.md)**


## countAccounts

Count the accounts from a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CountAccountsRequest();
    $request->address = 'users:.+';
    $request->ledger = 'ledger001';
    $request->metadata = [
        'Electronic' => '<value>',
    ];;

    $response = $sdk->ledger->countAccounts($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\formance\stack\Models\Operations\CountAccountsRequest](../../Models/Operations/CountAccountsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\formance\stack\Models\Operations\CountAccountsResponse](../../Models/Operations/CountAccountsResponse.md)**


## countTransactions

Count the transactions from a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CountTransactionsRequest();
    $request->account = 'users:001';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-20T14:23:01.272Z');
    $request->ledger = 'ledger001';
    $request->metadata = new Operations\Metadata();
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-26T22:46:35.189Z');;

    $response = $sdk->ledger->countTransactions($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\formance\stack\Models\Operations\CountTransactionsRequest](../../Models/Operations/CountTransactionsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\formance\stack\Models\Operations\CountTransactionsResponse](../../Models/Operations/CountTransactionsResponse.md)**


## createTransaction

Create a new transaction to a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateTransactionRequest();
    $request->postTransaction = new Shared\PostTransaction();
    $request->postTransaction->metadata = [
        'before' => '<value>',
    ];
    $request->postTransaction->postings = [
        new Shared\Posting(),
    ];
    $request->postTransaction->reference = 'ref:001';
    $request->postTransaction->script = new Shared\PostTransactionScript();
    $request->postTransaction->script->plain = 'vars {
    account $user
    }
    send [COIN 10] (
    	source = @world
    	destination = $user
    )
    ';
    $request->postTransaction->script->vars = [
        'zowie' => '<value>',
    ];
    $request->postTransaction->timestamp = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-30T20:06:44.554Z');
    $request->ledger = 'ledger001';
    $request->preview = true;;

    $response = $sdk->ledger->createTransaction($request);

    if ($response->transactionsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\formance\stack\Models\Operations\CreateTransactionRequest](../../Models/Operations/CreateTransactionRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\formance\stack\Models\Operations\CreateTransactionResponse](../../Models/Operations/CreateTransactionResponse.md)**


## getAccount

Get account by its address

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAccountRequest();
    $request->address = 'users:001';
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->getAccount($request);

    if ($response->accountResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\formance\stack\Models\Operations\GetAccountRequest](../../Models/Operations/GetAccountRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\GetAccountResponse](../../Models/Operations/GetAccountResponse.md)**


## getBalances

Get the balances from a ledger's account

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetBalancesRequest();
    $request->address = 'users:001';
    $request->after = 'users:003';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';
    $request->pageSize = 755286;;

    $response = $sdk->ledger->getBalances($request);

    if ($response->balancesCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\formance\stack\Models\Operations\GetBalancesRequest](../../Models/Operations/GetBalancesRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\formance\stack\Models\Operations\GetBalancesResponse](../../Models/Operations/GetBalancesResponse.md)**


## getBalancesAggregated

Get the aggregated balances from selected accounts

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetBalancesAggregatedRequest();
    $request->address = 'users:001';
    $request->ledger = 'ledger001';
    $request->useInsertionDate = false;;

    $response = $sdk->ledger->getBalancesAggregated($request);

    if ($response->aggregateBalancesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\formance\stack\Models\Operations\GetBalancesAggregatedRequest](../../Models/Operations/GetBalancesAggregatedRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\formance\stack\Models\Operations\GetBalancesAggregatedResponse](../../Models/Operations/GetBalancesAggregatedResponse.md)**


## getInfo

Show server information

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->ledger->getInfo();

    if ($response->configInfoResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\GetInfoResponse](../../Models/Operations/GetInfoResponse.md)**


## getLedgerInfo

Get information about a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetLedgerInfoRequest();
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->getLedgerInfo($request);

    if ($response->ledgerInfoResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\formance\stack\Models\Operations\GetLedgerInfoRequest](../../Models/Operations/GetLedgerInfoRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\formance\stack\Models\Operations\GetLedgerInfoResponse](../../Models/Operations/GetLedgerInfoResponse.md)**


## getMapping

Get the mapping of a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetMappingRequest();
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->getMapping($request);

    if ($response->mappingResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\formance\stack\Models\Operations\GetMappingRequest](../../Models/Operations/GetMappingRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\GetMappingResponse](../../Models/Operations/GetMappingResponse.md)**


## getTransaction

Get transaction from a ledger by its ID

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetTransactionRequest();
    $request->ledger = 'ledger001';
    $request->txid = 1234;;

    $response = $sdk->ledger->getTransaction($request);

    if ($response->transactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\formance\stack\Models\Operations\GetTransactionRequest](../../Models/Operations/GetTransactionRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\GetTransactionResponse](../../Models/Operations/GetTransactionResponse.md)**


## listAccounts

List accounts from a ledger, sorted by address in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAccountsRequest();
    $request->address = 'users:.+';
    $request->after = 'users:003';
    $request->balance = 2400;
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';
    $request->metadata = [
        'glistening' => '<value>',
    ];
    $request->pageSize = 412291;
    $request->paginationToken = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';;

    $response = $sdk->ledger->listAccounts($request);

    if ($response->accountsCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\ListAccountsRequest](../../Models/Operations/ListAccountsRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\ListAccountsResponse](../../Models/Operations/ListAccountsResponse.md)**


## listLogs

List the logs from a ledger, sorted by ID in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListLogsRequest();
    $request->after = '1234';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-04T18:34:28.222Z');
    $request->ledger = 'ledger001';
    $request->pageSize = 657242;
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-03T09:19:08.045Z');;

    $response = $sdk->ledger->listLogs($request);

    if ($response->logsCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\formance\stack\Models\Operations\ListLogsRequest](../../Models/Operations/ListLogsRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\formance\stack\Models\Operations\ListLogsResponse](../../Models/Operations/ListLogsResponse.md)**


## listTransactions

List transactions from a ledger, sorted by txid in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListTransactionsRequest();
    $request->account = 'users:001';
    $request->after = '1234';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-09T05:38:58.239Z');
    $request->ledger = 'ledger001';
    $request->metadata = [
        'South' => '<value>',
    ];
    $request->pageSize = 459510;
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-19T19:47:16.501Z');;

    $response = $sdk->ledger->listTransactions($request);

    if ($response->transactionsCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\formance\stack\Models\Operations\ListTransactionsRequest](../../Models/Operations/ListTransactionsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\ListTransactionsResponse](../../Models/Operations/ListTransactionsResponse.md)**


## readStats

Get statistics from a ledger. (aggregate metrics on accounts and transactions)


### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ReadStatsRequest();
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->readStats($request);

    if ($response->statsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\formance\stack\Models\Operations\ReadStatsRequest](../../Models/Operations/ReadStatsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\formance\stack\Models\Operations\ReadStatsResponse](../../Models/Operations/ReadStatsResponse.md)**


## revertTransaction

Revert a ledger transaction by its ID

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RevertTransactionRequest();
    $request->disableChecks = false;
    $request->ledger = 'ledger001';
    $request->txid = 1234;;

    $response = $sdk->ledger->revertTransaction($request);

    if ($response->transactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\formance\stack\Models\Operations\RevertTransactionRequest](../../Models/Operations/RevertTransactionRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\formance\stack\Models\Operations\RevertTransactionResponse](../../Models/Operations/RevertTransactionResponse.md)**


## ~~runScript~~

This route is deprecated, and has been merged into `POST /{ledger}/transactions`.


> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RunScriptRequest();
    $request->script = new Shared\Script();
    $request->script->metadata = [
        'Azerbaijan' => '<value>',
    ];
    $request->script->plain = 'vars {
    account $user
    }
    send [COIN 10] (
    	source = @world
    	destination = $user
    )
    ';
    $request->script->reference = 'order_1234';
    $request->script->vars = [
        'Mercury' => '<value>',
    ];
    $request->ledger = 'ledger001';
    $request->preview = true;;

    $response = $sdk->ledger->runScript($request);

    if ($response->scriptResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\formance\stack\Models\Operations\RunScriptRequest](../../Models/Operations/RunScriptRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\formance\stack\Models\Operations\RunScriptResponse](../../Models/Operations/RunScriptResponse.md)**


## updateMapping

Update the mapping of a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateMappingRequest();
    $request->mapping = new Shared\Mapping();
    $request->mapping->contracts = [
        new Shared\Contract(),
    ];
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->updateMapping($request);

    if ($response->mappingResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\formance\stack\Models\Operations\UpdateMappingRequest](../../Models/Operations/UpdateMappingRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\formance\stack\Models\Operations\UpdateMappingResponse](../../Models/Operations/UpdateMappingResponse.md)**


## v2AddMetadataOnTransaction

Set the metadata of a transaction by its ID

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2AddMetadataOnTransactionRequest();
    $request->idempotencyKey = '<value>';
    $request->requestBody = [
        'nor' => '<value>',
    ];
    $request->dryRun = true;
    $request->id = 1234;
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2AddMetadataOnTransaction($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\formance\stack\Models\Operations\V2AddMetadataOnTransactionRequest](../../Models/Operations/V2AddMetadataOnTransactionRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\formance\stack\Models\Operations\V2AddMetadataOnTransactionResponse](../../Models/Operations/V2AddMetadataOnTransactionResponse.md)**


## v2AddMetadataToAccount

Add metadata to an account

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2AddMetadataToAccountRequest();
    $request->idempotencyKey = '<value>';
    $request->requestBody = [
        'South' => '<value>',
    ];
    $request->address = 'users:001';
    $request->dryRun = true;
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2AddMetadataToAccount($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\formance\stack\Models\Operations\V2AddMetadataToAccountRequest](../../Models/Operations/V2AddMetadataToAccountRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\formance\stack\Models\Operations\V2AddMetadataToAccountResponse](../../Models/Operations/V2AddMetadataToAccountResponse.md)**


## v2CountAccounts

Count the accounts from a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2CountAccountsRequest();
    $request->requestBody = [
        'Marketing' => '<value>',
    ];
    $request->ledger = 'ledger001';
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-04T06:10:56.689Z');;

    $response = $sdk->ledger->v2CountAccounts($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\formance\stack\Models\Operations\V2CountAccountsRequest](../../Models/Operations/V2CountAccountsRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\formance\stack\Models\Operations\V2CountAccountsResponse](../../Models/Operations/V2CountAccountsResponse.md)**


## v2CountTransactions

Count the transactions from a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2CountTransactionsRequest();
    $request->requestBody = [
        'East' => '<value>',
    ];
    $request->ledger = 'ledger001';
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-23T10:44:24.304Z');;

    $response = $sdk->ledger->v2CountTransactions($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\formance\stack\Models\Operations\V2CountTransactionsRequest](../../Models/Operations/V2CountTransactionsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\formance\stack\Models\Operations\V2CountTransactionsResponse](../../Models/Operations/V2CountTransactionsResponse.md)**


## v2CreateBulk

Bulk request

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2CreateBulkRequest();
    $request->requestBody = [
        '<value>',
    ];
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2CreateBulk($request);

    if ($response->v2BulkResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\V2CreateBulkRequest](../../Models/Operations/V2CreateBulkRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\V2CreateBulkResponse](../../Models/Operations/V2CreateBulkResponse.md)**


## v2CreateLedger

Create a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2CreateLedgerRequest();
    $request->v2CreateLedgerRequest = new Shared\V2CreateLedgerRequest();
    $request->v2CreateLedgerRequest->bucket = '<value>';
    $request->v2CreateLedgerRequest->metadata = [
        'whoa' => '<value>',
    ];
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2CreateLedger($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\formance\stack\Models\Operations\V2CreateLedgerRequest](../../Models/Operations/V2CreateLedgerRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\V2CreateLedgerResponse](../../Models/Operations/V2CreateLedgerResponse.md)**


## v2CreateTransaction

Create a new transaction to a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2CreateTransactionRequest();
    $request->idempotencyKey = '<value>';
    $request->v2PostTransaction = new Shared\V2PostTransaction();
    $request->v2PostTransaction->metadata = [
        'Gasoline' => '<value>',
    ];
    $request->v2PostTransaction->postings = [
        new Shared\V2Posting(),
    ];
    $request->v2PostTransaction->reference = 'ref:001';
    $request->v2PostTransaction->script = new Shared\V2PostTransactionScript();
    $request->v2PostTransaction->script->plain = 'vars {
    account $user
    }
    send [COIN 10] (
    	source = @world
    	destination = $user
    )
    ';
    $request->v2PostTransaction->script->vars = [
        'gauge' => '<value>',
    ];
    $request->v2PostTransaction->timestamp = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-06T15:20:41.892Z');
    $request->dryRun = true;
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2CreateTransaction($request);

    if ($response->v2CreateTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\formance\stack\Models\Operations\V2CreateTransactionRequest](../../Models/Operations/V2CreateTransactionRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\formance\stack\Models\Operations\V2CreateTransactionResponse](../../Models/Operations/V2CreateTransactionResponse.md)**


## v2DeleteAccountMetadata

Delete metadata by key

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2DeleteAccountMetadataRequest();
    $request->address = '3680 Emile Grove';
    $request->key = 'foo';
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2DeleteAccountMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\formance\stack\Models\Operations\V2DeleteAccountMetadataRequest](../../Models/Operations/V2DeleteAccountMetadataRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\formance\stack\Models\Operations\V2DeleteAccountMetadataResponse](../../Models/Operations/V2DeleteAccountMetadataResponse.md)**


## v2DeleteLedgerMetadata

Delete ledger metadata by key

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2DeleteLedgerMetadataRequest();
    $request->key = 'foo';
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2DeleteLedgerMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\formance\stack\Models\Operations\V2DeleteLedgerMetadataRequest](../../Models/Operations/V2DeleteLedgerMetadataRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\formance\stack\Models\Operations\V2DeleteLedgerMetadataResponse](../../Models/Operations/V2DeleteLedgerMetadataResponse.md)**


## v2DeleteTransactionMetadata

Delete metadata by key

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2DeleteTransactionMetadataRequest();
    $request->id = 1234;
    $request->key = 'foo';
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2DeleteTransactionMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\formance\stack\Models\Operations\V2DeleteTransactionMetadataRequest](../../Models/Operations/V2DeleteTransactionMetadataRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\formance\stack\Models\Operations\V2DeleteTransactionMetadataResponse](../../Models/Operations/V2DeleteTransactionMetadataResponse.md)**


## v2GetAccount

Get account by its address

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2GetAccountRequest();
    $request->address = 'users:001';
    $request->expand = '<value>';
    $request->ledger = 'ledger001';
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-12T20:42:33.400Z');;

    $response = $sdk->ledger->v2GetAccount($request);

    if ($response->v2AccountResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\V2GetAccountRequest](../../Models/Operations/V2GetAccountRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\V2GetAccountResponse](../../Models/Operations/V2GetAccountResponse.md)**


## v2GetBalancesAggregated

Get the aggregated balances from selected accounts

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2GetBalancesAggregatedRequest();
    $request->requestBody = [
        'rehouse' => '<value>',
    ];
    $request->ledger = 'ledger001';
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-29T13:30:40.635Z');
    $request->useInsertionDate = false;;

    $response = $sdk->ledger->v2GetBalancesAggregated($request);

    if ($response->v2AggregateBalancesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\formance\stack\Models\Operations\V2GetBalancesAggregatedRequest](../../Models/Operations/V2GetBalancesAggregatedRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\formance\stack\Models\Operations\V2GetBalancesAggregatedResponse](../../Models/Operations/V2GetBalancesAggregatedResponse.md)**


## v2GetInfo

Show server information

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->ledger->v2GetInfo();

    if ($response->v2ConfigInfoResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\V2GetInfoResponse](../../Models/Operations/V2GetInfoResponse.md)**


## v2GetLedger

Get a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2GetLedgerRequest();
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2GetLedger($request);

    if ($response->v2GetLedgerResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\formance\stack\Models\Operations\V2GetLedgerRequest](../../Models/Operations/V2GetLedgerRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\formance\stack\Models\Operations\V2GetLedgerResponse](../../Models/Operations/V2GetLedgerResponse.md)**


## v2GetLedgerInfo

Get information about a ledger

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2GetLedgerInfoRequest();
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2GetLedgerInfo($request);

    if ($response->v2LedgerInfoResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\formance\stack\Models\Operations\V2GetLedgerInfoRequest](../../Models/Operations/V2GetLedgerInfoRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\formance\stack\Models\Operations\V2GetLedgerInfoResponse](../../Models/Operations/V2GetLedgerInfoResponse.md)**


## v2GetTransaction

Get transaction from a ledger by its ID

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2GetTransactionRequest();
    $request->expand = '<value>';
    $request->id = 1234;
    $request->ledger = 'ledger001';
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-12T09:39:55.552Z');;

    $response = $sdk->ledger->v2GetTransaction($request);

    if ($response->v2GetTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\formance\stack\Models\Operations\V2GetTransactionRequest](../../Models/Operations/V2GetTransactionRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\V2GetTransactionResponse](../../Models/Operations/V2GetTransactionResponse.md)**


## v2GetVolumesWithBalances

Get list of volumes with balances for (account/asset)

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2GetVolumesWithBalancesRequest();
    $request->requestBody = [
        'transition' => '<value>',
    ];
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-29T04:00:36.732Z');
    $request->groupBy = 424820;
    $request->insertionDate = false;
    $request->ledger = 'ledger001';
    $request->pageSize = 89226;
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-03T06:24:15.183Z');;

    $response = $sdk->ledger->v2GetVolumesWithBalances($request);

    if ($response->v2VolumesWithBalanceCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\formance\stack\Models\Operations\V2GetVolumesWithBalancesRequest](../../Models/Operations/V2GetVolumesWithBalancesRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\formance\stack\Models\Operations\V2GetVolumesWithBalancesResponse](../../Models/Operations/V2GetVolumesWithBalancesResponse.md)**


## v2ListAccounts

List accounts from a ledger, sorted by address in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2ListAccountsRequest();
    $request->requestBody = [
        'Bend' => '<value>',
    ];
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->expand = '<value>';
    $request->ledger = 'ledger001';
    $request->pageSize = 390193;
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-16T23:00:37.064Z');;

    $response = $sdk->ledger->v2ListAccounts($request);

    if ($response->v2AccountsCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\formance\stack\Models\Operations\V2ListAccountsRequest](../../Models/Operations/V2ListAccountsRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\V2ListAccountsResponse](../../Models/Operations/V2ListAccountsResponse.md)**


## v2ListLedgers

List ledgers

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2ListLedgersRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 748636;;

    $response = $sdk->ledger->v2ListLedgers($request);

    if ($response->v2LedgerListResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\formance\stack\Models\Operations\V2ListLedgersRequest](../../Models/Operations/V2ListLedgersRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\formance\stack\Models\Operations\V2ListLedgersResponse](../../Models/Operations/V2ListLedgersResponse.md)**


## v2ListLogs

List the logs from a ledger, sorted by ID in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2ListLogsRequest();
    $request->requestBody = [
        'parse' => '<value>',
    ];
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';
    $request->pageSize = 578671;
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-08T20:06:24.496Z');;

    $response = $sdk->ledger->v2ListLogs($request);

    if ($response->v2LogsCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\formance\stack\Models\Operations\V2ListLogsRequest](../../Models/Operations/V2ListLogsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\V2ListLogsResponse](../../Models/Operations/V2ListLogsResponse.md)**


## v2ListTransactions

List transactions from a ledger, sorted by id in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2ListTransactionsRequest();
    $request->requestBody = [
        'Assurance' => '<value>',
    ];
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->expand = '<value>';
    $request->ledger = 'ledger001';
    $request->pageSize = 167393;
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-23T01:01:19.968Z');;

    $response = $sdk->ledger->v2ListTransactions($request);

    if ($response->v2TransactionsCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\formance\stack\Models\Operations\V2ListTransactionsRequest](../../Models/Operations/V2ListTransactionsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\V2ListTransactionsResponse](../../Models/Operations/V2ListTransactionsResponse.md)**


## v2ReadStats

Get statistics from a ledger. (aggregate metrics on accounts and transactions)


### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2ReadStatsRequest();
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2ReadStats($request);

    if ($response->v2StatsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\formance\stack\Models\Operations\V2ReadStatsRequest](../../Models/Operations/V2ReadStatsRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\formance\stack\Models\Operations\V2ReadStatsResponse](../../Models/Operations/V2ReadStatsResponse.md)**


## v2RevertTransaction

Revert a ledger transaction by its ID

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2RevertTransactionRequest();
    $request->atEffectiveDate = false;
    $request->force = false;
    $request->id = 1234;
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2RevertTransaction($request);

    if ($response->v2RevertTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\formance\stack\Models\Operations\V2RevertTransactionRequest](../../Models/Operations/V2RevertTransactionRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\formance\stack\Models\Operations\V2RevertTransactionResponse](../../Models/Operations/V2RevertTransactionResponse.md)**


## v2UpdateLedgerMetadata

Update ledger metadata

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;
use \formance\stack\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\V2UpdateLedgerMetadataRequest();
    $request->requestBody = [
        'Borders' => '<value>',
    ];
    $request->ledger = 'ledger001';;

    $response = $sdk->ledger->v2UpdateLedgerMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\formance\stack\Models\Operations\V2UpdateLedgerMetadataRequest](../../Models/Operations/V2UpdateLedgerMetadataRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\formance\stack\Models\Operations\V2UpdateLedgerMetadataResponse](../../Models/Operations/V2UpdateLedgerMetadataResponse.md)**

