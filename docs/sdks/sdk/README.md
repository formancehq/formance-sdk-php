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
* [getApiAuthWellKnownOpenidConfiguration](#getapiauthwellknownopenidconfiguration)

## getVersions

Show stack version information

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->getVersions();

    if ($response->getVersionsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\GetVersionsResponse](../../Models/Operations/GetVersionsResponse.md)**


## getApiAuthWellKnownOpenidConfiguration

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\stack;
use \formance\stack\Models\Shared;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = stack\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->getApiAuthWellKnownOpenidConfiguration();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\formance\stack\Models\Operations\GetApiAuthWellKnownOpenidConfigurationResponse](../../Models/Operations/GetApiAuthWellKnownOpenidConfigurationResponse.md)**

