<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;

$sdk = stack\SDK::builder()->build();



$response = $sdk->getVersions(

);

if ($response->getVersionsResponse !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->