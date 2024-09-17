# V2

## Overview

### Available Operations

* [addMetadataOnTransaction](#addmetadataontransaction) - Set the metadata of a transaction by its ID
* [addMetadataToAccount](#addmetadatatoaccount) - Add metadata to an account
* [countAccounts](#countaccounts) - Count the accounts from a ledger
* [countTransactions](#counttransactions) - Count the transactions from a ledger
* [createBulk](#createbulk) - Bulk request
* [createLedger](#createledger) - Create a ledger
* [createTransaction](#createtransaction) - Create a new transaction to a ledger
* [deleteAccountMetadata](#deleteaccountmetadata) - Delete metadata by key
* [deleteLedgerMetadata](#deleteledgermetadata) - Delete ledger metadata by key
* [deleteTransactionMetadata](#deletetransactionmetadata) - Delete metadata by key
* [exportLogs](#exportlogs) - Export logs
* [getAccount](#getaccount) - Get account by its address
* [getBalancesAggregated](#getbalancesaggregated) - Get the aggregated balances from selected accounts
* [getInfo](#getinfo) - Show server information
* [getLedger](#getledger) - Get a ledger
* [getLedgerInfo](#getledgerinfo) - Get information about a ledger
* [getTransaction](#gettransaction) - Get transaction from a ledger by its ID
* [getVolumesWithBalances](#getvolumeswithbalances) - Get list of volumes with balances for (account/asset)
* [importLogs](#importlogs)
* [listAccounts](#listaccounts) - List accounts from a ledger
* [listLedgers](#listledgers) - List ledgers
* [listLogs](#listlogs) - List the logs from a ledger
* [listTransactions](#listtransactions) - List transactions from a ledger
* [readStats](#readstats) - Get statistics from a ledger
* [revertTransaction](#reverttransaction) - Revert a ledger transaction by its ID
* [updateLedgerMetadata](#updateledgermetadata) - Update ledger metadata

## addMetadataOnTransaction

Set the metadata of a transaction by its ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2AddMetadataOnTransactionRequest(
        id: 1234,
        ledger: 'ledger001',
        requestBody: [
            'admin' => 'true',
        ],
        dryRun: true,
    );
    $response = $sdk->ledgerV2->addMetadataOnTransaction($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\V2AddMetadataOnTransactionRequest](../../Models/Operations/V2AddMetadataOnTransactionRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\V2AddMetadataOnTransactionResponse](../../Models/Operations/V2AddMetadataOnTransactionResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## addMetadataToAccount

Add metadata to an account

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2AddMetadataToAccountRequest(
        requestBody: [
            'admin' => 'true',
        ],
        address: 'users:001',
        ledger: 'ledger001',
        dryRun: true,
    );
    $response = $sdk->ledgerV2->addMetadataToAccount($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\V2AddMetadataToAccountRequest](../../Models/Operations/V2AddMetadataToAccountRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\V2AddMetadataToAccountResponse](../../Models/Operations/V2AddMetadataToAccountResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## countAccounts

Count the accounts from a ledger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2CountAccountsRequest(
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->countAccounts($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2CountAccountsRequest](../../Models/Operations/V2CountAccountsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\V2CountAccountsResponse](../../Models/Operations/V2CountAccountsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## countTransactions

Count the transactions from a ledger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2CountTransactionsRequest(
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->countTransactions($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\V2CountTransactionsRequest](../../Models/Operations/V2CountTransactionsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\V2CountTransactionsResponse](../../Models/Operations/V2CountTransactionsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## createBulk

Bulk request

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2CreateBulkRequest(
        ledger: 'ledger001',
        requestBody: [

        ],
    );
    $response = $sdk->ledgerV2->createBulk($request);

    if ($response->v2BulkResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\V2CreateBulkRequest](../../Models/Operations/V2CreateBulkRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V2CreateBulkResponse](../../Models/Operations/V2CreateBulkResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## createLedger

Create a ledger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2CreateLedgerRequest(
        ledger: 'ledger001',
        v2CreateLedgerRequest: new Shared\V2CreateLedgerRequest(
            metadata: [
                'admin' => 'true',
            ],
        ),
    );
    $response = $sdk->ledgerV2->createLedger($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\V2CreateLedgerRequest](../../Models/Operations/V2CreateLedgerRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\V2CreateLedgerResponse](../../Models/Operations/V2CreateLedgerResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## createTransaction

Create a new transaction to a ledger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2CreateTransactionRequest(
        v2PostTransaction: new Shared\V2PostTransaction(
            metadata: [
                'admin' => 'true',
            ],
            postings: [
                new Shared\V2Posting,
            ],
            reference: 'ref:001',
            script: new Shared\V2PostTransactionScript(
                plain: 'vars {
                account $user
                }
                send [COIN 10] (
                	source = @world
                	destination = $user
                )
                ',
                vars: [
                    'user' => 'users:042',
                ],
            ),
        ),
        ledger: 'ledger001',
        dryRun: true,
    );
    $response = $sdk->ledgerV2->createTransaction($request);

    if ($response->v2CreateTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\V2CreateTransactionRequest](../../Models/Operations/V2CreateTransactionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\V2CreateTransactionResponse](../../Models/Operations/V2CreateTransactionResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## deleteAccountMetadata

Delete metadata by key

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2DeleteAccountMetadataRequest(
        address: '69266 Krajcik Bypass',
        key: 'foo',
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->deleteAccountMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\V2DeleteAccountMetadataRequest](../../Models/Operations/V2DeleteAccountMetadataRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\V2DeleteAccountMetadataResponse](../../Models/Operations/V2DeleteAccountMetadataResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## deleteLedgerMetadata

Delete ledger metadata by key

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2DeleteLedgerMetadataRequest(
        key: 'foo',
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->deleteLedgerMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\V2DeleteLedgerMetadataRequest](../../Models/Operations/V2DeleteLedgerMetadataRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\V2DeleteLedgerMetadataResponse](../../Models/Operations/V2DeleteLedgerMetadataResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## deleteTransactionMetadata

Delete metadata by key

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2DeleteTransactionMetadataRequest(
        id: 1234,
        key: 'foo',
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->deleteTransactionMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\V2DeleteTransactionMetadataRequest](../../Models/Operations/V2DeleteTransactionMetadataRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\V2DeleteTransactionMetadataResponse](../../Models/Operations/V2DeleteTransactionMetadataResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## exportLogs

Export logs

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ExportLogsRequest(
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->exportLogs($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\V2ExportLogsRequest](../../Models/Operations/V2ExportLogsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V2ExportLogsResponse](../../Models/Operations/V2ExportLogsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## getAccount

Get account by its address

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2GetAccountRequest(
        address: 'users:001',
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->getAccount($request);

    if ($response->v2AccountResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\V2GetAccountRequest](../../Models/Operations/V2GetAccountRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V2GetAccountResponse](../../Models/Operations/V2GetAccountResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## getBalancesAggregated

Get the aggregated balances from selected accounts

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2GetBalancesAggregatedRequest(
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->getBalancesAggregated($request);

    if ($response->v2AggregateBalancesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\V2GetBalancesAggregatedRequest](../../Models/Operations/V2GetBalancesAggregatedRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\V2GetBalancesAggregatedResponse](../../Models/Operations/V2GetBalancesAggregatedResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## getInfo

Show server information

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->ledgerV2->getInfo();

    if ($response->v2ConfigInfoResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\V2GetInfoResponse](../../Models/Operations/V2GetInfoResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## getLedger

Get a ledger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2GetLedgerRequest(
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->getLedger($request);

    if ($response->v2GetLedgerResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\V2GetLedgerRequest](../../Models/Operations/V2GetLedgerRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\V2GetLedgerResponse](../../Models/Operations/V2GetLedgerResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## getLedgerInfo

Get information about a ledger

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2GetLedgerInfoRequest(
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->getLedgerInfo($request);

    if ($response->v2LedgerInfoResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2GetLedgerInfoRequest](../../Models/Operations/V2GetLedgerInfoRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\V2GetLedgerInfoResponse](../../Models/Operations/V2GetLedgerInfoResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## getTransaction

Get transaction from a ledger by its ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2GetTransactionRequest(
        id: 1234,
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->getTransaction($request);

    if ($response->v2GetTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\V2GetTransactionRequest](../../Models/Operations/V2GetTransactionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\V2GetTransactionResponse](../../Models/Operations/V2GetTransactionResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## getVolumesWithBalances

Get list of volumes with balances for (account/asset)

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2GetVolumesWithBalancesRequest(
        ledger: 'ledger001',
        cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
        groupBy: 3,
        pageSize: 100,
    );
    $response = $sdk->ledgerV2->getVolumesWithBalances($request);

    if ($response->v2VolumesWithBalanceCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\V2GetVolumesWithBalancesRequest](../../Models/Operations/V2GetVolumesWithBalancesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\V2GetVolumesWithBalancesResponse](../../Models/Operations/V2GetVolumesWithBalancesResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## importLogs

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ImportLogsRequest(
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->importLogs($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\V2ImportLogsRequest](../../Models/Operations/V2ImportLogsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V2ImportLogsResponse](../../Models/Operations/V2ImportLogsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## listAccounts

List accounts from a ledger, sorted by address in descending order.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ListAccountsRequest(
        ledger: 'ledger001',
        cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
        pageSize: 100,
    );
    $response = $sdk->ledgerV2->listAccounts($request);

    if ($response->v2AccountsCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\V2ListAccountsRequest](../../Models/Operations/V2ListAccountsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\V2ListAccountsResponse](../../Models/Operations/V2ListAccountsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## listLedgers

List ledgers

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ListLedgersRequest(
        cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
        pageSize: 100,
    );
    $response = $sdk->ledgerV2->listLedgers($request);

    if ($response->v2LedgerListResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2ListLedgersRequest](../../Models/Operations/V2ListLedgersRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\V2ListLedgersResponse](../../Models/Operations/V2ListLedgersResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## listLogs

List the logs from a ledger, sorted by ID in descending order.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ListLogsRequest(
        ledger: 'ledger001',
        cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
        pageSize: 100,
    );
    $response = $sdk->ledgerV2->listLogs($request);

    if ($response->v2LogsCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\V2ListLogsRequest](../../Models/Operations/V2ListLogsRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\V2ListLogsResponse](../../Models/Operations/V2ListLogsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## listTransactions

List transactions from a ledger, sorted by id in descending order.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ListTransactionsRequest(
        ledger: 'ledger001',
        cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
        pageSize: 100,
    );
    $response = $sdk->ledgerV2->listTransactions($request);

    if ($response->v2TransactionsCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\V2ListTransactionsRequest](../../Models/Operations/V2ListTransactionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\V2ListTransactionsResponse](../../Models/Operations/V2ListTransactionsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## readStats

Get statistics from a ledger. (aggregate metrics on accounts and transactions)


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2ReadStatsRequest(
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->readStats($request);

    if ($response->v2StatsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\V2ReadStatsRequest](../../Models/Operations/V2ReadStatsRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\V2ReadStatsResponse](../../Models/Operations/V2ReadStatsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## revertTransaction

Revert a ledger transaction by its ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2RevertTransactionRequest(
        id: 1234,
        ledger: 'ledger001',
    );
    $response = $sdk->ledgerV2->revertTransaction($request);

    if ($response->v2RevertTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\V2RevertTransactionRequest](../../Models/Operations/V2RevertTransactionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\V2RevertTransactionResponse](../../Models/Operations/V2RevertTransactionResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## updateLedgerMetadata

Update ledger metadata

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$security = new Shared\Security(
    authorization: "<YOUR_AUTHORIZATION_HERE>",
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\V2UpdateLedgerMetadataRequest(
        ledger: 'ledger001',
        requestBody: [
            'admin' => 'true',
        ],
    );
    $response = $sdk->ledgerV2->updateLedgerMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\V2UpdateLedgerMetadataRequest](../../Models/Operations/V2UpdateLedgerMetadataRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\V2UpdateLedgerMetadataResponse](../../Models/Operations/V2UpdateLedgerMetadataResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\V2ErrorResponse                    | default                                   | application/json                          |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |