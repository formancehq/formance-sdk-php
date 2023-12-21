# Ledger
(*ledger*)

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
* [v2DeleteTransactionMetadata](#v2deletetransactionmetadata) - Delete metadata by key
* [v2GetAccount](#v2getaccount) - Get account by its address
* [v2GetBalancesAggregated](#v2getbalancesaggregated) - Get the aggregated balances from selected accounts
* [v2GetInfo](#v2getinfo) - Show server information
* [v2GetLedger](#v2getledger) - Get a ledger
* [v2GetLedgerInfo](#v2getledgerinfo) - Get information about a ledger
* [v2GetTransaction](#v2gettransaction) - Get transaction from a ledger by its ID
* [v2ListAccounts](#v2listaccounts) - List accounts from a ledger
* [v2ListLedgers](#v2listledgers) - List ledgers
* [v2ListLogs](#v2listlogs) - List the logs from a ledger
* [v2ListTransactions](#v2listtransactions) - List transactions from a ledger
* [v2ReadStats](#v2readstats) - Get statistics from a ledger
* [v2RevertTransaction](#v2reverttransaction) - Revert a ledger transaction by its ID

## createTransactions

Create a new batch of transactions to a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\CreateTransactionsRequest;
use \formance\stack\Models\Shared\Transactions;
use \formance\stack\Models\Shared\TransactionData;
use \formance\stack\Models\Shared\Posting;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateTransactionsRequest();
    $request->transactions = new Transactions();
    $request->transactions->transactions = [
        new TransactionData(),
    ];
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->createTransactions($request);

    if ($response->transactionsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\formance\stack\Models\Operations\CreateTransactionsRequest](../../models/operations/CreateTransactionsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\CreateTransactionsResponse](../../models/operations/CreateTransactionsResponse.md)**


## addMetadataOnTransaction

Set the metadata of a transaction by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\AddMetadataOnTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new AddMetadataOnTransactionRequest();
    $request->requestBody = [
        'withdrawal' => 'string',
    ];
    $request->ledger = 'ledger001';
    $request->txid = 1234;

    $response = $sdk->ledger->addMetadataOnTransaction($request);

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
| `$request`                                                                                                                      | [\formance\stack\Models\Operations\AddMetadataOnTransactionRequest](../../models/operations/AddMetadataOnTransactionRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\formance\stack\Models\Operations\AddMetadataOnTransactionResponse](../../models/operations/AddMetadataOnTransactionResponse.md)**


## addMetadataToAccount

Add metadata to an account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\AddMetadataToAccountRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new AddMetadataToAccountRequest();
    $request->requestBody = [
        'Oriental' => 'string',
    ];
    $request->address = 'users:001';
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->addMetadataToAccount($request);

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
| `$request`                                                                                                              | [\formance\stack\Models\Operations\AddMetadataToAccountRequest](../../models/operations/AddMetadataToAccountRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\formance\stack\Models\Operations\AddMetadataToAccountResponse](../../models/operations/AddMetadataToAccountResponse.md)**


## countAccounts

Count the accounts from a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\CountAccountsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CountAccountsRequest();
    $request->address = 'users:.+';
    $request->ledger = 'ledger001';
    $request->metadata = [
        'Electronic' => 'string',
    ];

    $response = $sdk->ledger->countAccounts($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\formance\stack\Models\Operations\CountAccountsRequest](../../models/operations/CountAccountsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\formance\stack\Models\Operations\CountAccountsResponse](../../models/operations/CountAccountsResponse.md)**


## countTransactions

Count the transactions from a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\CountTransactionsRequest;
use \formance\stack\Models\Operations\CountTransactionsMetadata;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CountTransactionsRequest();
    $request->account = 'users:001';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-20T09:59:27.603Z');
    $request->ledger = 'ledger001';
    $request->metadata = new CountTransactionsMetadata();
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-27T00:52:47.091Z');

    $response = $sdk->ledger->countTransactions($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\formance\stack\Models\Operations\CountTransactionsRequest](../../models/operations/CountTransactionsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\formance\stack\Models\Operations\CountTransactionsResponse](../../models/operations/CountTransactionsResponse.md)**


## createTransaction

Create a new transaction to a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\CreateTransactionRequest;
use \formance\stack\Models\Shared\PostTransaction;
use \formance\stack\Models\Shared\Posting;
use \formance\stack\Models\Shared\PostTransactionScript;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateTransactionRequest();
    $request->postTransaction = new PostTransaction();
    $request->postTransaction->metadata = [
        'before' => 'string',
    ];
    $request->postTransaction->postings = [
        new Posting(),
    ];
    $request->postTransaction->reference = 'ref:001';
    $request->postTransaction->script = new PostTransactionScript();
    $request->postTransaction->script->plain = 'vars {
    account $user
    }
    send [COIN 10] (
    	source = @world
    	destination = $user
    )
    ';
    $request->postTransaction->script->vars = [
        'zowie' => 'string',
    ];
    $request->postTransaction->timestamp = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-30T13:28:51.192Z');
    $request->ledger = 'ledger001';
    $request->preview = true;

    $response = $sdk->ledger->createTransaction($request);

    if ($response->transactionsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\formance\stack\Models\Operations\CreateTransactionRequest](../../models/operations/CreateTransactionRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\formance\stack\Models\Operations\CreateTransactionResponse](../../models/operations/CreateTransactionResponse.md)**


## getAccount

Get account by its address

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetAccountRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetAccountRequest();
    $request->address = 'users:001';
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->getAccount($request);

    if ($response->accountResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\formance\stack\Models\Operations\GetAccountRequest](../../models/operations/GetAccountRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\GetAccountResponse](../../models/operations/GetAccountResponse.md)**


## getBalances

Get the balances from a ledger's account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetBalancesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetBalancesRequest();
    $request->address = 'users:001';
    $request->after = 'users:003';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->getBalances($request);

    if ($response->balancesCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\formance\stack\Models\Operations\GetBalancesRequest](../../models/operations/GetBalancesRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\formance\stack\Models\Operations\GetBalancesResponse](../../models/operations/GetBalancesResponse.md)**


## getBalancesAggregated

Get the aggregated balances from selected accounts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetBalancesAggregatedRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetBalancesAggregatedRequest();
    $request->address = 'users:001';
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->getBalancesAggregated($request);

    if ($response->aggregateBalancesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\formance\stack\Models\Operations\GetBalancesAggregatedRequest](../../models/operations/GetBalancesAggregatedRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\formance\stack\Models\Operations\GetBalancesAggregatedResponse](../../models/operations/GetBalancesAggregatedResponse.md)**


## getInfo

Show server information

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->ledger->getInfo();

    if ($response->configInfoResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\GetInfoResponse](../../models/operations/GetInfoResponse.md)**


## getLedgerInfo

Get information about a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetLedgerInfoRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetLedgerInfoRequest();
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->getLedgerInfo($request);

    if ($response->ledgerInfoResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\formance\stack\Models\Operations\GetLedgerInfoRequest](../../models/operations/GetLedgerInfoRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\formance\stack\Models\Operations\GetLedgerInfoResponse](../../models/operations/GetLedgerInfoResponse.md)**


## getMapping

Get the mapping of a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetMappingRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetMappingRequest();
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->getMapping($request);

    if ($response->mappingResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\formance\stack\Models\Operations\GetMappingRequest](../../models/operations/GetMappingRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\GetMappingResponse](../../models/operations/GetMappingResponse.md)**


## getTransaction

Get transaction from a ledger by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\GetTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetTransactionRequest();
    $request->ledger = 'ledger001';
    $request->txid = 1234;

    $response = $sdk->ledger->getTransaction($request);

    if ($response->transactionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\formance\stack\Models\Operations\GetTransactionRequest](../../models/operations/GetTransactionRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\GetTransactionResponse](../../models/operations/GetTransactionResponse.md)**


## listAccounts

List accounts from a ledger, sorted by address in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ListAccountsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListAccountsRequest();
    $request->address = 'users:.+';
    $request->after = 'users:003';
    $request->balance = 2400;
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';
    $request->metadata = [
        'glistening' => 'string',
    ];
    $request->pageSize = 412291;
    $request->paginationToken = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';

    $response = $sdk->ledger->listAccounts($request);

    if ($response->accountsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\ListAccountsRequest](../../models/operations/ListAccountsRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\ListAccountsResponse](../../models/operations/ListAccountsResponse.md)**


## listLogs

List the logs from a ledger, sorted by ID in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ListLogsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListLogsRequest();
    $request->after = '1234';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-04T05:10:40.788Z');
    $request->ledger = 'ledger001';
    $request->pageSize = 657242;
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-03T02:36:34.808Z');

    $response = $sdk->ledger->listLogs($request);

    if ($response->logsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\formance\stack\Models\Operations\ListLogsRequest](../../models/operations/ListLogsRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\formance\stack\Models\Operations\ListLogsResponse](../../models/operations/ListLogsResponse.md)**


## listTransactions

List transactions from a ledger, sorted by txid in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ListTransactionsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListTransactionsRequest();
    $request->account = 'users:001';
    $request->after = '1234';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-08T16:09:19.098Z');
    $request->ledger = 'ledger001';
    $request->metadata = [
        'South' => 'string',
    ];
    $request->pageSize = 459510;
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-19T18:05:01.432Z');

    $response = $sdk->ledger->listTransactions($request);

    if ($response->transactionsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\formance\stack\Models\Operations\ListTransactionsRequest](../../models/operations/ListTransactionsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\ListTransactionsResponse](../../models/operations/ListTransactionsResponse.md)**


## readStats

Get statistics from a ledger. (aggregate metrics on accounts and transactions)


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\ReadStatsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ReadStatsRequest();
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->readStats($request);

    if ($response->statsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\formance\stack\Models\Operations\ReadStatsRequest](../../models/operations/ReadStatsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\formance\stack\Models\Operations\ReadStatsResponse](../../models/operations/ReadStatsResponse.md)**


## revertTransaction

Revert a ledger transaction by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\RevertTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RevertTransactionRequest();
    $request->disableChecks = false;
    $request->ledger = 'ledger001';
    $request->txid = 1234;

    $response = $sdk->ledger->revertTransaction($request);

    if ($response->transactionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\formance\stack\Models\Operations\RevertTransactionRequest](../../models/operations/RevertTransactionRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\formance\stack\Models\Operations\RevertTransactionResponse](../../models/operations/RevertTransactionResponse.md)**


## ~~runScript~~

This route is deprecated, and has been merged into `POST /{ledger}/transactions`.


> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\RunScriptRequest;
use \formance\stack\Models\Shared\Script;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RunScriptRequest();
    $request->script = new Script();
    $request->script->metadata = [
        'Azerbaijan' => 'string',
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
        'Mercury' => 'string',
    ];
    $request->ledger = 'ledger001';
    $request->preview = true;

    $response = $sdk->ledger->runScript($request);

    if ($response->scriptResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\formance\stack\Models\Operations\RunScriptRequest](../../models/operations/RunScriptRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\formance\stack\Models\Operations\RunScriptResponse](../../models/operations/RunScriptResponse.md)**


## updateMapping

Update the mapping of a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\UpdateMappingRequest;
use \formance\stack\Models\Shared\Mapping;
use \formance\stack\Models\Shared\Contract;
use \formance\stack\Models\Shared\ContractExpr;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UpdateMappingRequest();
    $request->mapping = new Mapping();
    $request->mapping->contracts = [
        new Contract(),
    ];
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->updateMapping($request);

    if ($response->mappingResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\formance\stack\Models\Operations\UpdateMappingRequest](../../models/operations/UpdateMappingRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\formance\stack\Models\Operations\UpdateMappingResponse](../../models/operations/UpdateMappingResponse.md)**


## v2AddMetadataOnTransaction

Set the metadata of a transaction by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2AddMetadataOnTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2AddMetadataOnTransactionRequest();
    $request->idempotencyKey = 'string';
    $request->requestBody = [
        'nor' => 'string',
    ];
    $request->dryRun = true;
    $request->id = 1234;
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->v2AddMetadataOnTransaction($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\formance\stack\Models\Operations\V2AddMetadataOnTransactionRequest](../../models/operations/V2AddMetadataOnTransactionRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\formance\stack\Models\Operations\V2AddMetadataOnTransactionResponse](../../models/operations/V2AddMetadataOnTransactionResponse.md)**


## v2AddMetadataToAccount

Add metadata to an account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2AddMetadataToAccountRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2AddMetadataToAccountRequest();
    $request->idempotencyKey = 'string';
    $request->requestBody = [
        'South' => 'string',
    ];
    $request->address = 'users:001';
    $request->dryRun = true;
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->v2AddMetadataToAccount($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\formance\stack\Models\Operations\V2AddMetadataToAccountRequest](../../models/operations/V2AddMetadataToAccountRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\formance\stack\Models\Operations\V2AddMetadataToAccountResponse](../../models/operations/V2AddMetadataToAccountResponse.md)**


## v2CountAccounts

Count the accounts from a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2CountAccountsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2CountAccountsRequest();
    $request->requestBody = [
        'Marketing' => 'string',
    ];
    $request->ledger = 'ledger001';
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-03T20:08:51.272Z');

    $response = $sdk->ledger->v2CountAccounts($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\formance\stack\Models\Operations\V2CountAccountsRequest](../../models/operations/V2CountAccountsRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\formance\stack\Models\Operations\V2CountAccountsResponse](../../models/operations/V2CountAccountsResponse.md)**


## v2CountTransactions

Count the transactions from a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2CountTransactionsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2CountTransactionsRequest();
    $request->requestBody = [
        'East' => 'string',
    ];
    $request->ledger = 'ledger001';
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-22T17:35:03.479Z');

    $response = $sdk->ledger->v2CountTransactions($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\formance\stack\Models\Operations\V2CountTransactionsRequest](../../models/operations/V2CountTransactionsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\formance\stack\Models\Operations\V2CountTransactionsResponse](../../models/operations/V2CountTransactionsResponse.md)**


## v2CreateBulk

Bulk request

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2CreateBulkRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2CreateBulkRequest();
    $request->requestBody = [
        'string',
    ];
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->v2CreateBulk($request);

    if ($response->v2BulkResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\V2CreateBulkRequest](../../models/operations/V2CreateBulkRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\V2CreateBulkResponse](../../models/operations/V2CreateBulkResponse.md)**


## v2CreateLedger

Create a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2CreateLedgerRequest;
use \formance\stack\Models\Shared\V2CreateLedgerRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2CreateLedgerRequest();
    $request->v2CreateLedgerRequest = new V2CreateLedgerRequest();
    $request->v2CreateLedgerRequest->bucket = 'string';
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->v2CreateLedger($request);

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
| `$request`                                                                                                  | [\formance\stack\Models\Operations\V2CreateLedgerRequest](../../models/operations/V2CreateLedgerRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\V2CreateLedgerResponse](../../models/operations/V2CreateLedgerResponse.md)**


## v2CreateTransaction

Create a new transaction to a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2CreateTransactionRequest;
use \formance\stack\Models\Shared\V2PostTransaction;
use \formance\stack\Models\Shared\V2Posting;
use \formance\stack\Models\Shared\V2PostTransactionScript;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2CreateTransactionRequest();
    $request->idempotencyKey = 'string';
    $request->v2PostTransaction = new V2PostTransaction();
    $request->v2PostTransaction->metadata = [
        'Gasoline' => 'string',
    ];
    $request->v2PostTransaction->postings = [
        new V2Posting(),
    ];
    $request->v2PostTransaction->reference = 'ref:001';
    $request->v2PostTransaction->script = new V2PostTransactionScript();
    $request->v2PostTransaction->script->plain = 'vars {
    account $user
    }
    send [COIN 10] (
    	source = @world
    	destination = $user
    )
    ';
    $request->v2PostTransaction->script->vars = [
        'gauge' => 'string',
    ];
    $request->v2PostTransaction->timestamp = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-05T23:14:09.883Z');
    $request->dryRun = true;
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->v2CreateTransaction($request);

    if ($response->v2CreateTransactionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\formance\stack\Models\Operations\V2CreateTransactionRequest](../../models/operations/V2CreateTransactionRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\formance\stack\Models\Operations\V2CreateTransactionResponse](../../models/operations/V2CreateTransactionResponse.md)**


## v2DeleteAccountMetadata

Delete metadata by key

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2DeleteAccountMetadataRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2DeleteAccountMetadataRequest();
    $request->address = '3680 Emile Grove';
    $request->key = 'foo';
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->v2DeleteAccountMetadata($request);

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
| `$request`                                                                                                                    | [\formance\stack\Models\Operations\V2DeleteAccountMetadataRequest](../../models/operations/V2DeleteAccountMetadataRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\formance\stack\Models\Operations\V2DeleteAccountMetadataResponse](../../models/operations/V2DeleteAccountMetadataResponse.md)**


## v2DeleteTransactionMetadata

Delete metadata by key

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2DeleteTransactionMetadataRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2DeleteTransactionMetadataRequest();
    $request->id = 1234;
    $request->key = 'foo';
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->v2DeleteTransactionMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\formance\stack\Models\Operations\V2DeleteTransactionMetadataRequest](../../models/operations/V2DeleteTransactionMetadataRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\formance\stack\Models\Operations\V2DeleteTransactionMetadataResponse](../../models/operations/V2DeleteTransactionMetadataResponse.md)**


## v2GetAccount

Get account by its address

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2GetAccountRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2GetAccountRequest();
    $request->address = 'users:001';
    $request->expand = 'string';
    $request->ledger = 'ledger001';
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-12T20:26:58.224Z');

    $response = $sdk->ledger->v2GetAccount($request);

    if ($response->v2AccountResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\formance\stack\Models\Operations\V2GetAccountRequest](../../models/operations/V2GetAccountRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\formance\stack\Models\Operations\V2GetAccountResponse](../../models/operations/V2GetAccountResponse.md)**


## v2GetBalancesAggregated

Get the aggregated balances from selected accounts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2GetBalancesAggregatedRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2GetBalancesAggregatedRequest();
    $request->requestBody = [
        'rehouse' => 'string',
    ];
    $request->ledger = 'ledger001';
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-28T20:13:17.714Z');

    $response = $sdk->ledger->v2GetBalancesAggregated($request);

    if ($response->v2AggregateBalancesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\formance\stack\Models\Operations\V2GetBalancesAggregatedRequest](../../models/operations/V2GetBalancesAggregatedRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\formance\stack\Models\Operations\V2GetBalancesAggregatedResponse](../../models/operations/V2GetBalancesAggregatedResponse.md)**


## v2GetInfo

Show server information

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->ledger->v2GetInfo();

    if ($response->v2ConfigInfoResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\V2GetInfoResponse](../../models/operations/V2GetInfoResponse.md)**


## v2GetLedger

Get a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2GetLedgerRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2GetLedgerRequest();
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->v2GetLedger($request);

    if ($response->v2Ledger !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\formance\stack\Models\Operations\V2GetLedgerRequest](../../models/operations/V2GetLedgerRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\formance\stack\Models\Operations\V2GetLedgerResponse](../../models/operations/V2GetLedgerResponse.md)**


## v2GetLedgerInfo

Get information about a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2GetLedgerInfoRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2GetLedgerInfoRequest();
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->v2GetLedgerInfo($request);

    if ($response->v2LedgerInfoResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\formance\stack\Models\Operations\V2GetLedgerInfoRequest](../../models/operations/V2GetLedgerInfoRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\formance\stack\Models\Operations\V2GetLedgerInfoResponse](../../models/operations/V2GetLedgerInfoResponse.md)**


## v2GetTransaction

Get transaction from a ledger by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2GetTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2GetTransactionRequest();
    $request->expand = 'string';
    $request->id = 1234;
    $request->ledger = 'ledger001';
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-11T23:27:08.038Z');

    $response = $sdk->ledger->v2GetTransaction($request);

    if ($response->v2GetTransactionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\formance\stack\Models\Operations\V2GetTransactionRequest](../../models/operations/V2GetTransactionRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\formance\stack\Models\Operations\V2GetTransactionResponse](../../models/operations/V2GetTransactionResponse.md)**


## v2ListAccounts

List accounts from a ledger, sorted by address in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2ListAccountsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2ListAccountsRequest();
    $request->requestBody = [
        'Bend' => 'string',
    ];
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->expand = 'string';
    $request->ledger = 'ledger001';
    $request->pageSize = 390193;
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-16T05:59:47.760Z');

    $response = $sdk->ledger->v2ListAccounts($request);

    if ($response->v2AccountsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\formance\stack\Models\Operations\V2ListAccountsRequest](../../models/operations/V2ListAccountsRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\formance\stack\Models\Operations\V2ListAccountsResponse](../../models/operations/V2ListAccountsResponse.md)**


## v2ListLedgers

List ledgers

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2ListLedgersRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2ListLedgersRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 748636;

    $response = $sdk->ledger->v2ListLedgers($request);

    if ($response->v2LedgerListResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\formance\stack\Models\Operations\V2ListLedgersRequest](../../models/operations/V2ListLedgersRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\formance\stack\Models\Operations\V2ListLedgersResponse](../../models/operations/V2ListLedgersResponse.md)**


## v2ListLogs

List the logs from a ledger, sorted by ID in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2ListLogsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2ListLogsRequest();
    $request->requestBody = [
        'parse' => 'string',
    ];
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';
    $request->pageSize = 578671;
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-08T10:39:01.809Z');

    $response = $sdk->ledger->v2ListLogs($request);

    if ($response->v2LogsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\formance\stack\Models\Operations\V2ListLogsRequest](../../models/operations/V2ListLogsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\formance\stack\Models\Operations\V2ListLogsResponse](../../models/operations/V2ListLogsResponse.md)**


## v2ListTransactions

List transactions from a ledger, sorted by id in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2ListTransactionsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2ListTransactionsRequest();
    $request->requestBody = [
        'Assurance' => 'string',
    ];
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->expand = 'string';
    $request->ledger = 'ledger001';
    $request->pageSize = 167393;
    $request->pit = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-22T17:13:32.377Z');

    $response = $sdk->ledger->v2ListTransactions($request);

    if ($response->v2TransactionsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\formance\stack\Models\Operations\V2ListTransactionsRequest](../../models/operations/V2ListTransactionsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\formance\stack\Models\Operations\V2ListTransactionsResponse](../../models/operations/V2ListTransactionsResponse.md)**


## v2ReadStats

Get statistics from a ledger. (aggregate metrics on accounts and transactions)


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2ReadStatsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2ReadStatsRequest();
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->v2ReadStats($request);

    if ($response->v2StatsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\formance\stack\Models\Operations\V2ReadStatsRequest](../../models/operations/V2ReadStatsRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\formance\stack\Models\Operations\V2ReadStatsResponse](../../models/operations/V2ReadStatsResponse.md)**


## v2RevertTransaction

Revert a ledger transaction by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Operations\V2RevertTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new V2RevertTransactionRequest();
    $request->force = false;
    $request->id = 1234;
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->v2RevertTransaction($request);

    if ($response->v2RevertTransactionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\formance\stack\Models\Operations\V2RevertTransactionRequest](../../models/operations/V2RevertTransactionRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\formance\stack\Models\Operations\V2RevertTransactionResponse](../../models/operations/V2RevertTransactionResponse.md)**

