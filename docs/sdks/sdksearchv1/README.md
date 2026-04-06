# ~~Search.V1~~

> [!WARNING]
> This SDK is **DEPRECATED**

## Overview

### Available Operations

* [~~getServerInfoSearch~~](#getserverinfosearch) - Get server info :warning: **Deprecated**
* [~~search~~](#search) - search.v1 :warning: **Deprecated**

## ~~getServerInfoSearch~~

Get server info

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="getServerInfo_search" method="get" path="/api/search/_info" -->
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



$response = $sdk->search->v1->getServerInfoSearch(

);

if ($response->serverInfo !== null) {
    // handle response
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `$serverURL`                   | *string*                       | :heavy_minus_sign:             | An optional server URL to use. |

### Response

**[?Operations\GetServerInfoSearchResponse](../../Models/Operations/GetServerInfoSearchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## ~~search~~

Elasticsearch.v1 query engine

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="search" method="post" path="/api/search/" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Search;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new \formance\stack\Models\Search\Query(
    after: [
        'users:002',
    ],
    cursor: 'YXVsdCBhbmQgYSBtYXhpbXVtIG1heF9yZXN1bHRzLol=',
    ledgers: [
        'quickstart',
    ],
    policy: 'OR',
    raw: new Search\Raw(),
    sort: 'id:asc',
    terms: [
        'destination=central_bank1',
    ],
);

$response = $sdk->search->v1->search(
    request: $request
);

if ($response->response !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                           | Type                                                                | Required                                                            | Description                                                         |
| ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- |
| `$request`                                                          | [\formance\stack\Models\Search\Query](../../Models/search/Query.md) | :heavy_check_mark:                                                  | The request object to use for the request.                          |
| `$serverURL`                                                        | *string*                                                            | :heavy_minus_sign:                                                  | An optional server URL to use.                                      |

### Response

**[?Operations\SearchResponse](../../Models/Operations/SearchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |