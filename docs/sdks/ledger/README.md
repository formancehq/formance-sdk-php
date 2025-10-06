# Ledger
(*ledger*)

## Overview

### Available Operations

* [getInfo](#getinfo) - Show server information
* [getMetrics](#getmetrics) - Read in memory metrics

## getInfo

Show server information

### Example Usage

<!-- UsageSnippet language="php" operationID="v2GetInfo" method="get" path="/api/ledger/_/info" -->
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



$response = $sdk->ledger->getInfo(

);

if ($response->v2ConfigInfoResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\V2GetInfoResponse](../../Models/Operations/V2GetInfoResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getMetrics

Read in memory metrics

### Example Usage

<!-- UsageSnippet language="php" operationID="getMetrics" method="get" path="/api/ledger/_/metrics" -->
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



$response = $sdk->ledger->getMetrics(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetMetricsResponse](../../Models/Operations/GetMetricsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V2ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |