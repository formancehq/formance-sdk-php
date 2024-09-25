<!-- Start SDK Example Usage [usage] -->
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
<!-- End SDK Example Usage [usage] -->