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
use formance\stack\Models\Shared;

$security = new Shared\Security(
    clientID: '<YOUR_CLIENT_ID_HERE>',
    clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
);

$sdk = stack\SDK::builder()->setSecurity($security)->build();



$response = $sdk->getVersions(

);

if ($response->getVersionsResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\GetVersionsResponse](../../Models/Operations/GetVersionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |