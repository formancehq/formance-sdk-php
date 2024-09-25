# SDK

## Overview

Formance Stack API: Open, modular foundation for unique payments flows

# Introduction
This API is documented in **OpenAPI format**.

# Authentication
Formance Stack offers one forms of authentication:
  - OAuth2
OAuth2 - an open protocol to allow secure authorization in a simple
and standard method from web, mobile and desktop applications.
<SecurityDefinitions />


### Available Operations

* [getVersions](#getversions) - Show stack version information

## getVersions

Show stack version information

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;

$sdk = stack\SDK::builder()->build();

try {
    $requestSecurity = new Operations\GetVersionsSecurity(
        authorization: "<YOUR_AUTHORIZATION_HERE>",
    );
    $response = $sdk->getVersions($requestSecurity);

    if ($response->getVersionsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `security`                                                                       | [Operations\GetVersionsSecurity](../../Models/Operations/GetVersionsSecurity.md) | :heavy_check_mark:                                                               | The security requirements to use for the request.                                |

### Response

**[?Operations\GetVersionsResponse](../../Models/Operations/GetVersionsResponse.md)**

### Errors

| Error Object                              | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| formance\stack\Models\Errors.SDKException | 4xx-5xx                                   | */*                                       |
