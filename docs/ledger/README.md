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
        'possimus' => 'aut',
        'quasi' => 'error',
        'temporibus' => 'laborum',
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
        'reiciendis' => 'voluptatibus',
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

$sdk = SDK::builder()
    ->build();

try {
    $request = new CountAccountsRequest();
    $request->address = 'users:.+';
    $request->ledger = 'ledger001';
    $request->metadata = [
        'nihil' => 'praesentium',
        'voluptatibus' => 'ipsa',
        'omnis' => 'voluptate',
        'cum' => 'perferendis',
    ];

    $response = $sdk->ledger->countAccounts($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new CountTransactionsRequest();
    $request->account = 'users:001';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-23T18:36:43.822Z');
    $request->ledger = 'ledger001';
    $request->metadata = [
        'maiores' => 'dicta',
        'corporis' => 'dolore',
    ];
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-18T15:56:41.921Z');

    $response = $sdk->ledger->countTransactions($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateTransactionRequest();
    $request->postTransaction = new PostTransaction();
    $request->postTransaction->metadata = [
        'enim' => 'accusamus',
        'commodi' => 'repudiandae',
        'quae' => 'ipsum',
    ];
    $request->postTransaction->postings = [
        new Posting(),
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
    $request->postTransaction->script->vars = [
        'excepturi' => 'pariatur',
        'modi' => 'praesentium',
        'rem' => 'voluptates',
    ];
    $request->postTransaction->timestamp = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-29T18:39:33.469Z');
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

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListAccountsRequest();
    $request->address = 'users:.+';
    $request->after = 'users:003';
    $request->balance = 2400;
    $request->balanceOperator = ListAccountsBalanceOperator::GTE;
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';
    $request->metadata = [
        'veritatis' => 'itaque',
        'incidunt' => 'enim',
        'consequatur' => 'est',
    ];
    $request->pageSize = 842342;
    $request->paginationToken = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';

    $response = $sdk->ledger->listAccounts($request);

    if ($response->accountsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-09T18:45:16.013Z');
    $request->ledger = 'ledger001';
    $request->pageSize = 716327;
    $request->paginationToken = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-18T02:24:27.835Z');

    $response = $sdk->ledger->listLogs($request);

    if ($response->logsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListTransactionsRequest();
    $request->account = 'users:001';
    $request->after = '1234';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-26T03:14:36.345Z');
    $request->ledger = 'ledger001';
    $request->metadata = [
        'cupiditate' => 'quos',
        'perferendis' => 'magni',
    ];
    $request->pageSize = 828940;
    $request->paginationToken = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-30T06:52:02.282Z');

    $response = $sdk->ledger->listTransactions($request);

    if ($response->transactionsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new RunScriptRequest();
    $request->script = new Script();
    $request->script->metadata = [
        'dolorum' => 'excepturi',
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
        'facilis' => 'tempore',
        'labore' => 'delectus',
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

$sdk = SDK::builder()
    ->build();

try {
    $request = new UpdateMappingRequest();
    $request->mapping = new Mapping();
    $request->mapping->contracts = [
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
