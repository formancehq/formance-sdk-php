# SDKSearchV1
(*search->v1*)

## Overview

### Available Operations

* [~~search~~](#search) - search.v1 :warning: **Deprecated**
* [~~searchgetServerInfo~~](#searchgetserverinfo) - Get server info :warning: **Deprecated**

## ~~search~~

Elasticsearch.v1 query engine

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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

$request = new Shared\Query(
    after: [
        'users:002',
    ],
    cursor: 'YXVsdCBhbmQgYSBtYXhpbXVtIG1heF9yZXN1bHRzLol=',
    ledgers: [
        'quickstart',
    ],
    policy: 'OR',
    raw: new Shared\QueryRaw(),
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

| Parameter                                    | Type                                         | Required                                     | Description                                  |
| -------------------------------------------- | -------------------------------------------- | -------------------------------------------- | -------------------------------------------- |
| `$request`                                   | [Shared\Query](../../Models/Shared/Query.md) | :heavy_check_mark:                           | The request object to use for the request.   |

### Response

**[?Operations\SearchResponse](../../Models/Operations/SearchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## ~~searchgetServerInfo~~

Get server info

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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



$response = $sdk->search->v1->searchgetServerInfo(

);

if ($response->serverInfo !== null) {
    // handle response
}
```

### Response

**[?Operations\SearchgetServerInfoResponse](../../Models/Operations/SearchgetServerInfoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |