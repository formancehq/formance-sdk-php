# V2
(*ledger->v2*)

## Overview

### Available Operations

* [addMetadataOnTransaction](#addmetadataontransaction) - Set the metadata of a transaction by its ID
* [addMetadataToAccount](#addmetadatatoaccount) - Add metadata to an account
* [countAccounts](#countaccounts) - Count the accounts from a ledger
* [countTransactions](#counttransactions) - Count the transactions from a ledger
* [createBulk](#createbulk) - Bulk request
* [createExporter](#createexporter) - Create exporter
* [createLedger](#createledger) - Create a ledger
* [createPipeline](#createpipeline) - Create pipeline
* [createTransaction](#createtransaction) - Create a new transaction to a ledger
* [deleteAccountMetadata](#deleteaccountmetadata) - Delete metadata by key
* [deleteExporter](#deleteexporter) - Delete exporter
* [deleteLedgerMetadata](#deleteledgermetadata) - Delete ledger metadata by key
* [deletePipeline](#deletepipeline) - Delete pipeline
* [deleteTransactionMetadata](#deletetransactionmetadata) - Delete metadata by key
* [exportLogs](#exportlogs) - Export logs
* [getAccount](#getaccount) - Get account by its address
* [getBalancesAggregated](#getbalancesaggregated) - Get the aggregated balances from selected accounts
* [getExporterState](#getexporterstate) - Get exporter state
* [getLedger](#getledger) - Get a ledger
* [getLedgerInfo](#getledgerinfo) - Get information about a ledger
* [getPipelineState](#getpipelinestate) - Get pipeline state
* [getTransaction](#gettransaction) - Get transaction from a ledger by its ID
* [getVolumesWithBalances](#getvolumeswithbalances) - Get list of volumes with balances for (account/asset)
* [importLogs](#importlogs)
* [listAccounts](#listaccounts) - List accounts from a ledger
* [listExporters](#listexporters) - List exporters
* [listLedgers](#listledgers) - List ledgers
* [listLogs](#listlogs) - List the logs from a ledger
* [listPipelines](#listpipelines) - List pipelines
* [listTransactions](#listtransactions) - List transactions from a ledger
* [readStats](#readstats) - Get statistics from a ledger
* [resetPipeline](#resetpipeline) - Reset pipeline
* [revertTransaction](#reverttransaction) - Revert a ledger transaction by its ID
* [startPipeline](#startpipeline) - Start pipeline
* [stopPipeline](#stoppipeline) - Stop pipeline
* [updateLedgerMetadata](#updateledgermetadata) - Update ledger metadata

## addMetadataOnTransaction

Set the metadata of a transaction by its ID

### Example Usage

<!-- UsageSnippet language="php" operationID="v2AddMetadataOnTransaction" method="post" path="/api/ledger/v2/{ledger}/transactions/{id}/metadata" -->
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

$request = new Operations\V2AddMetadataOnTransactionRequest(
    requestBody: [
        'admin' => 'true',
    ],
    dryRun: true,
    id: BigInteger::of('1234'),
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->addMetadataOnTransaction(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\V2AddMetadataOnTransactionRequest](../../Models/Operations/V2AddMetadataOnTransactionRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\V2AddMetadataOnTransactionResponse](../../Models/Operations/V2AddMetadataOnTransactionResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## addMetadataToAccount

Add metadata to an account

### Example Usage

<!-- UsageSnippet language="php" operationID="v2AddMetadataToAccount" method="post" path="/api/ledger/v2/{ledger}/accounts/{address}/metadata" -->
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

$request = new Operations\V2AddMetadataToAccountRequest(
    requestBody: [
        'admin' => 'true',
    ],
    address: 'users:001',
    dryRun: true,
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->addMetadataToAccount(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\V2AddMetadataToAccountRequest](../../Models/Operations/V2AddMetadataToAccountRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\V2AddMetadataToAccountResponse](../../Models/Operations/V2AddMetadataToAccountResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## countAccounts

Count the accounts from a ledger

### Example Usage

<!-- UsageSnippet language="php" operationID="v2CountAccounts" method="head" path="/api/ledger/v2/{ledger}/accounts" -->
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

$request = new Operations\V2CountAccountsRequest(
    requestBody: [
        'key' => '<value>',
        'key1' => '<value>',
    ],
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->countAccounts(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2CountAccountsRequest](../../Models/Operations/V2CountAccountsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\V2CountAccountsResponse](../../Models/Operations/V2CountAccountsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## countTransactions

Count the transactions from a ledger

### Example Usage

<!-- UsageSnippet language="php" operationID="v2CountTransactions" method="head" path="/api/ledger/v2/{ledger}/transactions" -->
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

$request = new Operations\V2CountTransactionsRequest(
    requestBody: [
        'key' => '<value>',
    ],
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->countTransactions(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\V2CountTransactionsRequest](../../Models/Operations/V2CountTransactionsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\V2CountTransactionsResponse](../../Models/Operations/V2CountTransactionsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## createBulk

Bulk request

### Example Usage

<!-- UsageSnippet language="php" operationID="v2CreateBulk" method="post" path="/api/ledger/v2/{ledger}/_bulk" -->
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

$request = new Operations\V2CreateBulkRequest(
    requestBody: [
        new Shared\V2BulkElementRevertTransaction(
            action: 'REVERT_TRANSACTION',
        ),
    ],
    atomic: true,
    continueOnFailure: true,
    ledger: 'ledger001',
    parallel: true,
);

$response = $sdk->ledger->v2->createBulk(
    request: $request
);

if ($response->v2BulkResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\V2CreateBulkRequest](../../Models/Operations/V2CreateBulkRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V2CreateBulkResponse](../../Models/Operations/V2CreateBulkResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## createExporter

Create exporter

### Example Usage

<!-- UsageSnippet language="php" operationID="v2CreateExporter" method="post" path="/api/ledger/v2/_/exporters" -->
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

$request = new Shared\V2ExporterConfiguration(
    config: [
        'key' => '<value>',
    ],
    driver: '<value>',
);

$response = $sdk->ledger->v2->createExporter(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Shared\V2ExporterConfiguration](../../Models/Shared/V2ExporterConfiguration.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V2CreateExporterResponse](../../Models/Operations/V2CreateExporterResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## createLedger

Create a ledger

### Example Usage

<!-- UsageSnippet language="php" operationID="v2CreateLedger" method="post" path="/api/ledger/v2/{ledger}" -->
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

$request = new Operations\V2CreateLedgerRequest(
    v2CreateLedgerRequest: new Shared\V2CreateLedgerRequest(
        metadata: [
            'admin' => 'true',
        ],
    ),
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->createLedger(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\V2CreateLedgerRequest](../../Models/Operations/V2CreateLedgerRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\V2CreateLedgerResponse](../../Models/Operations/V2CreateLedgerResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## createPipeline

Create pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="v2CreatePipeline" method="post" path="/api/ledger/v2/{ledger}/pipelines" -->
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

$request = new Operations\V2CreatePipelineRequest(
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->createPipeline(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\V2CreatePipelineRequest](../../Models/Operations/V2CreatePipelineRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\V2CreatePipelineResponse](../../Models/Operations/V2CreatePipelineResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## createTransaction

Create a new transaction to a ledger

### Example Usage

<!-- UsageSnippet language="php" operationID="v2CreateTransaction" method="post" path="/api/ledger/v2/{ledger}/transactions" -->
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

$request = new Operations\V2CreateTransactionRequest(
    v2PostTransaction: new Shared\V2PostTransaction(
        accountMetadata: [
            'key' => [
                'admin' => 'true',
            ],
            'key1' => [
                'admin' => 'true',
            ],
            'key2' => [
                'admin' => 'true',
            ],
        ],
        metadata: [
            'admin' => 'true',
        ],
        postings: [
            new Shared\V2Posting(
                amount: BigInteger::of('100'),
                asset: 'COIN',
                destination: 'users:002',
                source: 'users:001',
            ),
        ],
        reference: 'ref:001',
        script: new Shared\V2PostTransactionScript(
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
    dryRun: true,
    force: true,
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->createTransaction(
    request: $request
);

if ($response->v2CreateTransactionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\V2CreateTransactionRequest](../../Models/Operations/V2CreateTransactionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\V2CreateTransactionResponse](../../Models/Operations/V2CreateTransactionResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## deleteAccountMetadata

Delete metadata by key

### Example Usage

<!-- UsageSnippet language="php" operationID="v2DeleteAccountMetadata" method="delete" path="/api/ledger/v2/{ledger}/accounts/{address}/metadata/{key}" -->
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

$request = new Operations\V2DeleteAccountMetadataRequest(
    address: '6753 S Washington Street',
    key: 'foo',
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->deleteAccountMetadata(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\V2DeleteAccountMetadataRequest](../../Models/Operations/V2DeleteAccountMetadataRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\V2DeleteAccountMetadataResponse](../../Models/Operations/V2DeleteAccountMetadataResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## deleteExporter

Delete exporter

### Example Usage

<!-- UsageSnippet language="php" operationID="v2DeleteExporter" method="delete" path="/api/ledger/v2/_/exporters/{exporterID}" -->
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

$request = new Operations\V2DeleteExporterRequest(
    exporterID: '<id>',
);

$response = $sdk->ledger->v2->deleteExporter(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\V2DeleteExporterRequest](../../Models/Operations/V2DeleteExporterRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\V2DeleteExporterResponse](../../Models/Operations/V2DeleteExporterResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## deleteLedgerMetadata

Delete ledger metadata by key

### Example Usage

<!-- UsageSnippet language="php" operationID="v2DeleteLedgerMetadata" method="delete" path="/api/ledger/v2/{ledger}/metadata/{key}" -->
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

$request = new Operations\V2DeleteLedgerMetadataRequest(
    key: 'foo',
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->deleteLedgerMetadata(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\V2DeleteLedgerMetadataRequest](../../Models/Operations/V2DeleteLedgerMetadataRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\V2DeleteLedgerMetadataResponse](../../Models/Operations/V2DeleteLedgerMetadataResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## deletePipeline

Delete pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="v2DeletePipeline" method="delete" path="/api/ledger/v2/{ledger}/pipelines/{pipelineID}" -->
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

$request = new Operations\V2DeletePipelineRequest(
    ledger: 'ledger001',
    pipelineID: '<id>',
);

$response = $sdk->ledger->v2->deletePipeline(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\V2DeletePipelineRequest](../../Models/Operations/V2DeletePipelineRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\V2DeletePipelineResponse](../../Models/Operations/V2DeletePipelineResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## deleteTransactionMetadata

Delete metadata by key

### Example Usage

<!-- UsageSnippet language="php" operationID="v2DeleteTransactionMetadata" method="delete" path="/api/ledger/v2/{ledger}/transactions/{id}/metadata/{key}" -->
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

$request = new Operations\V2DeleteTransactionMetadataRequest(
    id: BigInteger::of('1234'),
    key: 'foo',
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->deleteTransactionMetadata(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\V2DeleteTransactionMetadataRequest](../../Models/Operations/V2DeleteTransactionMetadataRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\V2DeleteTransactionMetadataResponse](../../Models/Operations/V2DeleteTransactionMetadataResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## exportLogs

Export logs

### Example Usage

<!-- UsageSnippet language="php" operationID="v2ExportLogs" method="post" path="/api/ledger/v2/{ledger}/logs/export" -->
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

$request = new Operations\V2ExportLogsRequest(
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->exportLogs(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\V2ExportLogsRequest](../../Models/Operations/V2ExportLogsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V2ExportLogsResponse](../../Models/Operations/V2ExportLogsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccount

Get account by its address

### Example Usage

<!-- UsageSnippet language="php" operationID="v2GetAccount" method="get" path="/api/ledger/v2/{ledger}/accounts/{address}" -->
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

$request = new Operations\V2GetAccountRequest(
    address: 'users:001',
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->getAccount(
    request: $request
);

if ($response->v2AccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\V2GetAccountRequest](../../Models/Operations/V2GetAccountRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V2GetAccountResponse](../../Models/Operations/V2GetAccountResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getBalancesAggregated

Get the aggregated balances from selected accounts

### Example Usage

<!-- UsageSnippet language="php" operationID="v2GetBalancesAggregated" method="get" path="/api/ledger/v2/{ledger}/aggregate/balances" -->
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

$request = new Operations\V2GetBalancesAggregatedRequest(
    requestBody: [
        'key' => '<value>',
        'key1' => '<value>',
        'key2' => '<value>',
    ],
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->getBalancesAggregated(
    request: $request
);

if ($response->v2AggregateBalancesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\V2GetBalancesAggregatedRequest](../../Models/Operations/V2GetBalancesAggregatedRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\V2GetBalancesAggregatedResponse](../../Models/Operations/V2GetBalancesAggregatedResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getExporterState

Get exporter state

### Example Usage

<!-- UsageSnippet language="php" operationID="v2GetExporterState" method="get" path="/api/ledger/v2/_/exporters/{exporterID}" -->
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

$request = new Operations\V2GetExporterStateRequest(
    exporterID: '<id>',
);

$response = $sdk->ledger->v2->getExporterState(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\V2GetExporterStateRequest](../../Models/Operations/V2GetExporterStateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\V2GetExporterStateResponse](../../Models/Operations/V2GetExporterStateResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getLedger

Get a ledger

### Example Usage

<!-- UsageSnippet language="php" operationID="v2GetLedger" method="get" path="/api/ledger/v2/{ledger}" -->
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

$request = new Operations\V2GetLedgerRequest(
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->getLedger(
    request: $request
);

if ($response->v2GetLedgerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\V2GetLedgerRequest](../../Models/Operations/V2GetLedgerRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\V2GetLedgerResponse](../../Models/Operations/V2GetLedgerResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getLedgerInfo

Get information about a ledger

### Example Usage

<!-- UsageSnippet language="php" operationID="v2GetLedgerInfo" method="get" path="/api/ledger/v2/{ledger}/_info" -->
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

$request = new Operations\V2GetLedgerInfoRequest(
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->getLedgerInfo(
    request: $request
);

if ($response->v2LedgerInfoResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2GetLedgerInfoRequest](../../Models/Operations/V2GetLedgerInfoRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\V2GetLedgerInfoResponse](../../Models/Operations/V2GetLedgerInfoResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getPipelineState

Get pipeline state

### Example Usage

<!-- UsageSnippet language="php" operationID="v2GetPipelineState" method="get" path="/api/ledger/v2/{ledger}/pipelines/{pipelineID}" -->
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

$request = new Operations\V2GetPipelineStateRequest(
    ledger: 'ledger001',
    pipelineID: '<id>',
);

$response = $sdk->ledger->v2->getPipelineState(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\V2GetPipelineStateRequest](../../Models/Operations/V2GetPipelineStateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\V2GetPipelineStateResponse](../../Models/Operations/V2GetPipelineStateResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getTransaction

Get transaction from a ledger by its ID

### Example Usage

<!-- UsageSnippet language="php" operationID="v2GetTransaction" method="get" path="/api/ledger/v2/{ledger}/transactions/{id}" -->
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

$request = new Operations\V2GetTransactionRequest(
    id: BigInteger::of('1234'),
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->getTransaction(
    request: $request
);

if ($response->v2GetTransactionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\V2GetTransactionRequest](../../Models/Operations/V2GetTransactionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\V2GetTransactionResponse](../../Models/Operations/V2GetTransactionResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getVolumesWithBalances

Get list of volumes with balances for (account/asset)

### Example Usage

<!-- UsageSnippet language="php" operationID="v2GetVolumesWithBalances" method="get" path="/api/ledger/v2/{ledger}/volumes" -->
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

$request = new Operations\V2GetVolumesWithBalancesRequest(
    requestBody: [
        'key' => '<value>',
    ],
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    groupBy: 3,
    ledger: 'ledger001',
    pageSize: 100,
    sort: 'id:desc',
);

$response = $sdk->ledger->v2->getVolumesWithBalances(
    request: $request
);

if ($response->v2VolumesWithBalanceCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\V2GetVolumesWithBalancesRequest](../../Models/Operations/V2GetVolumesWithBalancesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\V2GetVolumesWithBalancesResponse](../../Models/Operations/V2GetVolumesWithBalancesResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## importLogs

### Example Usage

<!-- UsageSnippet language="php" operationID="v2ImportLogs" method="post" path="/api/ledger/v2/{ledger}/logs/import" -->
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

$request = new Operations\V2ImportLogsRequest(
    v2ImportLogsRequest: '0xde3EDEE9e6',
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->importLogs(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\V2ImportLogsRequest](../../Models/Operations/V2ImportLogsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V2ImportLogsResponse](../../Models/Operations/V2ImportLogsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listAccounts

List accounts from a ledger, sorted by address in descending order.

### Example Usage

<!-- UsageSnippet language="php" operationID="v2ListAccounts" method="get" path="/api/ledger/v2/{ledger}/accounts" -->
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

$request = new Operations\V2ListAccountsRequest(
    requestBody: [

    ],
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    ledger: 'ledger001',
    pageSize: 100,
    sort: 'id:desc',
);

$response = $sdk->ledger->v2->listAccounts(
    request: $request
);

if ($response->v2AccountsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\V2ListAccountsRequest](../../Models/Operations/V2ListAccountsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\V2ListAccountsResponse](../../Models/Operations/V2ListAccountsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listExporters

List exporters

### Example Usage

<!-- UsageSnippet language="php" operationID="v2ListExporters" method="get" path="/api/ledger/v2/_/exporters" -->
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



$response = $sdk->ledger->v2->listExporters(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\V2ListExportersResponse](../../Models/Operations/V2ListExportersResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listLedgers

List ledgers

### Example Usage

<!-- UsageSnippet language="php" operationID="v2ListLedgers" method="get" path="/api/ledger/v2" -->
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

$request = new Operations\V2ListLedgersRequest(
    requestBody: [
        'key' => '<value>',
        'key1' => '<value>',
        'key2' => '<value>',
    ],
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
    sort: 'id:desc',
);

$response = $sdk->ledger->v2->listLedgers(
    request: $request
);

if ($response->v2LedgerListResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\V2ListLedgersRequest](../../Models/Operations/V2ListLedgersRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\V2ListLedgersResponse](../../Models/Operations/V2ListLedgersResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listLogs

List the logs from a ledger, sorted by ID in descending order.

### Example Usage

<!-- UsageSnippet language="php" operationID="v2ListLogs" method="get" path="/api/ledger/v2/{ledger}/logs" -->
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

$request = new Operations\V2ListLogsRequest(
    requestBody: [

    ],
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    ledger: 'ledger001',
    pageSize: 100,
    sort: 'id:desc',
);

$response = $sdk->ledger->v2->listLogs(
    request: $request
);

if ($response->v2LogsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\V2ListLogsRequest](../../Models/Operations/V2ListLogsRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\V2ListLogsResponse](../../Models/Operations/V2ListLogsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listPipelines

List pipelines

### Example Usage

<!-- UsageSnippet language="php" operationID="v2ListPipelines" method="get" path="/api/ledger/v2/{ledger}/pipelines" -->
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

$request = new Operations\V2ListPipelinesRequest(
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->listPipelines(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2ListPipelinesRequest](../../Models/Operations/V2ListPipelinesRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\V2ListPipelinesResponse](../../Models/Operations/V2ListPipelinesResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listTransactions

List transactions from a ledger, sorted by id in descending order.

### Example Usage

<!-- UsageSnippet language="php" operationID="v2ListTransactions" method="get" path="/api/ledger/v2/{ledger}/transactions" -->
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

$request = new Operations\V2ListTransactionsRequest(
    requestBody: [

    ],
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    ledger: 'ledger001',
    pageSize: 100,
    sort: 'id:desc',
);

$response = $sdk->ledger->v2->listTransactions(
    request: $request
);

if ($response->v2TransactionsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\V2ListTransactionsRequest](../../Models/Operations/V2ListTransactionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\V2ListTransactionsResponse](../../Models/Operations/V2ListTransactionsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## readStats

Get statistics from a ledger. (aggregate metrics on accounts and transactions)


### Example Usage

<!-- UsageSnippet language="php" operationID="v2ReadStats" method="get" path="/api/ledger/v2/{ledger}/stats" -->
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

$request = new Operations\V2ReadStatsRequest(
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->readStats(
    request: $request
);

if ($response->v2StatsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\V2ReadStatsRequest](../../Models/Operations/V2ReadStatsRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\V2ReadStatsResponse](../../Models/Operations/V2ReadStatsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## resetPipeline

Reset pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="v2ResetPipeline" method="post" path="/api/ledger/v2/{ledger}/pipelines/{pipelineID}/reset" -->
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

$request = new Operations\V2ResetPipelineRequest(
    ledger: 'ledger001',
    pipelineID: '<id>',
);

$response = $sdk->ledger->v2->resetPipeline(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2ResetPipelineRequest](../../Models/Operations/V2ResetPipelineRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\V2ResetPipelineResponse](../../Models/Operations/V2ResetPipelineResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## revertTransaction

Revert a ledger transaction by its ID

### Example Usage

<!-- UsageSnippet language="php" operationID="v2RevertTransaction" method="post" path="/api/ledger/v2/{ledger}/transactions/{id}/revert" -->
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

$request = new Operations\V2RevertTransactionRequest(
    dryRun: true,
    id: BigInteger::of('1234'),
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->revertTransaction(
    request: $request
);

if ($response->v2CreateTransactionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\V2RevertTransactionRequest](../../Models/Operations/V2RevertTransactionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\V2RevertTransactionResponse](../../Models/Operations/V2RevertTransactionResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## startPipeline

Start pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="v2StartPipeline" method="post" path="/api/ledger/v2/{ledger}/pipelines/{pipelineID}/start" -->
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

$request = new Operations\V2StartPipelineRequest(
    ledger: 'ledger001',
    pipelineID: '<id>',
);

$response = $sdk->ledger->v2->startPipeline(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\V2StartPipelineRequest](../../Models/Operations/V2StartPipelineRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\V2StartPipelineResponse](../../Models/Operations/V2StartPipelineResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## stopPipeline

Stop pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="v2StopPipeline" method="post" path="/api/ledger/v2/{ledger}/pipelines/{pipelineID}/stop" -->
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

$request = new Operations\V2StopPipelineRequest(
    ledger: 'ledger001',
    pipelineID: '<id>',
);

$response = $sdk->ledger->v2->stopPipeline(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\V2StopPipelineRequest](../../Models/Operations/V2StopPipelineRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\V2StopPipelineResponse](../../Models/Operations/V2StopPipelineResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## updateLedgerMetadata

Update ledger metadata

### Example Usage

<!-- UsageSnippet language="php" operationID="v2UpdateLedgerMetadata" method="put" path="/api/ledger/v2/{ledger}/metadata" -->
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

$request = new Operations\V2UpdateLedgerMetadataRequest(
    requestBody: [
        'admin' => 'true',
    ],
    ledger: 'ledger001',
);

$response = $sdk->ledger->v2->updateLedgerMetadata(
    request: $request
);

if ($response->v2ErrorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\V2UpdateLedgerMetadataRequest](../../Models/Operations/V2UpdateLedgerMetadataRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\V2UpdateLedgerMetadataResponse](../../Models/Operations/V2UpdateLedgerMetadataResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |