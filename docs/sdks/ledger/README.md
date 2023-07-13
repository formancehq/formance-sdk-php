# ledger

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
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;
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
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\AddMetadataOnTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new AddMetadataOnTransactionRequest();
    $request->requestBody = [
        'error' => 'temporibus',
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
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\AddMetadataToAccountRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new AddMetadataToAccountRequest();
    $request->requestBody = [
        'quasi' => 'reiciendis',
        'voluptatibus' => 'vero',
        'nihil' => 'praesentium',
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
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\CountAccountsRequest;
use \formance\stack\Models\Operations\CountAccountsMetadata;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CountAccountsRequest();
    $request->address = 'users:.+';
    $request->ledger = 'ledger001';
    $request->metadata = new CountAccountsMetadata();

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
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\CountTransactionsRequest;
use \formance\stack\Models\Operations\CountTransactionsMetadata;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CountTransactionsRequest();
    $request->account = 'users:001';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-31T23:49:03.388Z');
    $request->ledger = 'ledger001';
    $request->metadata = new CountTransactionsMetadata();
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-05T15:41:25.512Z');

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
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\CreateTransactionRequest;
use \formance\stack\Models\Shared\PostTransaction;
use \formance\stack\Models\Shared\Posting;
use \formance\stack\Models\Shared\PostTransactionScript;
use \formance\stack\Models\Shared\PostTransactionScriptVars;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateTransactionRequest();
    $request->postTransaction = new PostTransaction();
    $request->postTransaction->metadata = [
        'perferendis' => 'doloremque',
        'reprehenderit' => 'ut',
        'maiores' => 'dicta',
    ];
    $request->postTransaction->postings = [
        new Posting(),
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
    $request->postTransaction->script->vars = new PostTransactionScriptVars();
    $request->postTransaction->timestamp = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-09T11:22:20.922Z');
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
use \formance\stack\Models\Shared\Security;
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
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\GetBalancesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetBalancesRequest();
    $request->address = 'users:001';
    $request->after = 'users:003';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';
    $request->paginationToken = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';

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
use \formance\stack\Models\Shared\Security;
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
use \formance\stack\Models\Shared\Security;

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
use \formance\stack\Models\Shared\Security;
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
use \formance\stack\Models\Shared\Security;
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
use \formance\stack\Models\Shared\Security;
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
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\ListAccountsRequest;
use \formance\stack\Models\Operations\ListAccountsBalanceOperator;
use \formance\stack\Models\Operations\ListAccountsMetadata;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListAccountsRequest();
    $request->address = 'users:.+';
    $request->after = 'users:003';
    $request->balance = 2400;
    $request->balanceOperator = ListAccountsBalanceOperator::Gte;
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';
    $request->metadata = new ListAccountsMetadata();
    $request->pageSize = 118727;
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
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\ListLogsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListLogsRequest();
    $request->after = '1234';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-13T20:56:04.612Z');
    $request->ledger = 'ledger001';
    $request->pageSize = 880476;
    $request->paginationToken = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-30T20:15:26.045Z');

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
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\ListTransactionsRequest;
use \formance\stack\Models\Operations\ListTransactionsMetadata;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListTransactionsRequest();
    $request->account = 'users:001';
    $request->after = '1234';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-13T20:38:16.426Z');
    $request->ledger = 'ledger001';
    $request->metadata = new ListTransactionsMetadata();
    $request->pageSize = 692472;
    $request->paginationToken = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-13T09:08:33.009Z');

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
use \formance\stack\Models\Shared\Security;
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
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\RevertTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RevertTransactionRequest();
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


> :warning: **DEPRECATED**: this method will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\stack\SDK;
use \formance\stack\Models\Shared\Security;
use \formance\stack\Models\Operations\RunScriptRequest;
use \formance\stack\Models\Shared\Script;
use \formance\stack\Models\Shared\ScriptVars;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RunScriptRequest();
    $request->script = new Script();
    $request->script->metadata = [
        'modi' => 'praesentium',
        'rem' => 'voluptates',
        'quasi' => 'repudiandae',
        'sint' => 'veritatis',
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
    $request->script->vars = new ScriptVars();
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
use \formance\stack\Models\Shared\Security;
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
        new Contract(),
        new Contract(),
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

