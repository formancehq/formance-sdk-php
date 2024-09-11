# SDKSearchV1

## Overview

### Available Operations

* [search](#search) - search.v1
* [searchgetServerInfo](#searchgetserverinfo) - Get server info

## search

Elasticsearch.v1 query engine

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Shared\Query(
        after: [
            'users:002',
        ],
        cursor: 'YXVsdCBhbmQgYSBtYXhpbXVtIG1heF9yZXN1bHRzLol=',
        ledgers: [
            'quickstart',
        ],
        pageSize: 307631,
        policy: 'OR',
        raw: new Shared\QueryRaw(

        ),
        sort: 'id:asc',
        target: '<value>',
        terms: [
            'destination=central_bank1',
        ],
    );
    $response = $sdk->searchV1->search($request);

    if ($response->response !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                    | Type                                         | Required                                     | Description                                  |
| -------------------------------------------- | -------------------------------------------- | -------------------------------------------- | -------------------------------------------- |
| `$request`                                   | [Shared\Query](../../Models/Shared/Query.md) | :heavy_check_mark:                           | The request object to use for the request.   |

### Response

**[?Operations\SearchResponse](../../Models/Operations/SearchResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |


## searchgetServerInfo

Get server info

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = '<YOUR_AUTHORIZATION_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->searchV1->searchgetServerInfo();

    if ($response->serverInfo !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\SearchgetServerInfoResponse](../../Models/Operations/SearchgetServerInfoResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |
