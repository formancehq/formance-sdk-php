<!-- Start SDK Example Usage [usage] -->
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
<!-- End SDK Example Usage [usage] -->