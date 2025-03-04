# V3
(*payments->v3*)

## Overview

### Available Operations

* [addAccountToPool](#addaccounttopool) - Add an account to a pool
* [approvePaymentInitiation](#approvepaymentinitiation) - Approve a payment initiation
* [createAccount](#createaccount) - Create a formance account object. This object will not be forwarded to the connector. It is only used for internal purposes.

* [createBankAccount](#createbankaccount) - Create a formance bank account object. This object will not be forwarded to the connector until you called the forwardBankAccount method.

* [createPayment](#createpayment) - Create a formance payment object. This object will not be forwarded to the connector. It is only used for internal purposes.

* [createPool](#createpool) - Create a formance pool object
* [deletePaymentInitiation](#deletepaymentinitiation) - Delete a payment initiation by ID
* [deletePool](#deletepool) - Delete a pool by ID
* [forwardBankAccount](#forwardbankaccount) - Forward a Bank Account to a PSP for creation
* [getAccount](#getaccount) - Get an account by ID
* [getAccountBalances](#getaccountbalances) - Get account balances
* [getBankAccount](#getbankaccount) - Get a Bank Account by ID
* [getConnectorConfig](#getconnectorconfig) - Get a connector configuration by ID
* [getConnectorSchedule](#getconnectorschedule) - Get a connector schedule by ID
* [getPayment](#getpayment) - Get a payment by ID
* [getPaymentInitiation](#getpaymentinitiation) - Get a payment initiation by ID
* [getPool](#getpool) - Get a pool by ID
* [getPoolBalances](#getpoolbalances) - Get pool balances
* [getTask](#gettask) - Get a task and its result by ID
* [initiatePayment](#initiatepayment) - Initiate a payment
* [installConnector](#installconnector) - Install a connector
* [listAccounts](#listaccounts) - List all accounts
* [listBankAccounts](#listbankaccounts) - List all bank accounts
* [listConnectorConfigs](#listconnectorconfigs) - List all connector configurations
* [listConnectorScheduleInstances](#listconnectorscheduleinstances) - List all connector schedule instances
* [listConnectorSchedules](#listconnectorschedules) - List all connector schedules
* [listConnectors](#listconnectors) - List all connectors
* [listPaymentInitiationAdjustments](#listpaymentinitiationadjustments) - List all payment initiation adjustments
* [listPaymentInitiationRelatedPayments](#listpaymentinitiationrelatedpayments) - List all payments related to a payment initiation
* [listPaymentInitiations](#listpaymentinitiations) - List all payment initiations
* [listPayments](#listpayments) - List all payments
* [listPools](#listpools) - List all pools
* [rejectPaymentInitiation](#rejectpaymentinitiation) - Reject a payment initiation
* [removeAccountFromPool](#removeaccountfrompool) - Remove an account from a pool
* [resetConnector](#resetconnector) - Reset a connector. Be aware that this will delete all data and stop all existing tasks like payment initiations and bank account creations.
* [retryPaymentInitiation](#retrypaymentinitiation) - Retry a payment initiation
* [reversePaymentInitiation](#reversepaymentinitiation) - Reverse a payment initiation
* [uninstallConnector](#uninstallconnector) - Uninstall a connector
* [updateBankAccountMetadata](#updatebankaccountmetadata) - Update a bank account's metadata
* [updatePaymentMetadata](#updatepaymentmetadata) - Update a payment's metadata

## addAccountToPool

Add an account to a pool

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3AddAccountToPoolRequest(
    accountID: '<id>',
    poolID: '<id>',
);

$response = $sdk->payments->v3->addAccountToPool(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\V3AddAccountToPoolRequest](../../Models/Operations/V3AddAccountToPoolRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\V3AddAccountToPoolResponse](../../Models/Operations/V3AddAccountToPoolResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## approvePaymentInitiation

Approve a payment initiation

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ApprovePaymentInitiationRequest(
    paymentInitiationID: '<id>',
);

$response = $sdk->payments->v3->approvePaymentInitiation(
    request: $request
);

if ($response->v3ApprovePaymentInitiationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\V3ApprovePaymentInitiationRequest](../../Models/Operations/V3ApprovePaymentInitiationRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\V3ApprovePaymentInitiationResponse](../../Models/Operations/V3ApprovePaymentInitiationResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## createAccount

Create a formance account object. This object will not be forwarded to the connector. It is only used for internal purposes.


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Shared;
use formance\stack\Utils;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Shared\V3CreateAccountRequest(
    accountName: '<value>',
    connectorID: '<value>',
    createdAt: Utils\Utils::parseDateTime('2023-08-09T11:34:36.410Z'),
    reference: '<value>',
    type: Shared\V3AccountTypeEnum::Unknown,
);

$response = $sdk->payments->v3->createAccount(
    request: $request
);

if ($response->v3CreateAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Shared\V3CreateAccountRequest](../../Models/Shared/V3CreateAccountRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\V3CreateAccountResponse](../../Models/Operations/V3CreateAccountResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## createBankAccount

Create a formance bank account object. This object will not be forwarded to the connector until you called the forwardBankAccount method.


### Example Usage

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

$request = new Shared\V3CreateBankAccountRequest(
    name: '<value>',
);

$response = $sdk->payments->v3->createBankAccount(
    request: $request
);

if ($response->v3CreateBankAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Shared\V3CreateBankAccountRequest](../../Models/Shared/V3CreateBankAccountRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\V3CreateBankAccountResponse](../../Models/Operations/V3CreateBankAccountResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## createPayment

Create a formance payment object. This object will not be forwarded to the connector. It is only used for internal purposes.


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\Math\BigInteger;
use formance\stack;
use formance\stack\Models\Shared;
use formance\stack\Utils;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Shared\V3CreatePaymentRequest(
    amount: BigInteger::of('252554'),
    asset: '<value>',
    connectorID: '<value>',
    createdAt: Utils\Utils::parseDateTime('2024-12-31T19:31:25.838Z'),
    initialAmount: BigInteger::of('581056'),
    reference: '<value>',
    scheme: '<value>',
    type: Shared\V3PaymentTypeEnum::Payout,
);

$response = $sdk->payments->v3->createPayment(
    request: $request
);

if ($response->v3CreatePaymentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Shared\V3CreatePaymentRequest](../../Models/Shared/V3CreatePaymentRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\V3CreatePaymentResponse](../../Models/Operations/V3CreatePaymentResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## createPool

Create a formance pool object

### Example Usage

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

$request = new Shared\V3CreatePoolRequest(
    accountIDs: [
        '<value>',
    ],
    name: '<value>',
);

$response = $sdk->payments->v3->createPool(
    request: $request
);

if ($response->v3CreatePoolResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Shared\V3CreatePoolRequest](../../Models/Shared/V3CreatePoolRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\V3CreatePoolResponse](../../Models/Operations/V3CreatePoolResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## deletePaymentInitiation

Delete a payment initiation by ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3DeletePaymentInitiationRequest(
    paymentInitiationID: '<id>',
);

$response = $sdk->payments->v3->deletePaymentInitiation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\V3DeletePaymentInitiationRequest](../../Models/Operations/V3DeletePaymentInitiationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\V3DeletePaymentInitiationResponse](../../Models/Operations/V3DeletePaymentInitiationResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## deletePool

Delete a pool by ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3DeletePoolRequest(
    poolID: '<id>',
);

$response = $sdk->payments->v3->deletePool(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\V3DeletePoolRequest](../../Models/Operations/V3DeletePoolRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V3DeletePoolResponse](../../Models/Operations/V3DeletePoolResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## forwardBankAccount

Forward a Bank Account to a PSP for creation

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ForwardBankAccountRequest(
    bankAccountID: '<id>',
);

$response = $sdk->payments->v3->forwardBankAccount(
    request: $request
);

if ($response->v3ForwardBankAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\V3ForwardBankAccountRequest](../../Models/Operations/V3ForwardBankAccountRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\V3ForwardBankAccountResponse](../../Models/Operations/V3ForwardBankAccountResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getAccount

Get an account by ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3GetAccountRequest(
    accountID: '<id>',
);

$response = $sdk->payments->v3->getAccount(
    request: $request
);

if ($response->v3GetAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\V3GetAccountRequest](../../Models/Operations/V3GetAccountRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V3GetAccountResponse](../../Models/Operations/V3GetAccountResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getAccountBalances

Get account balances

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3GetAccountBalancesRequest(
    accountID: '<id>',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v3->getAccountBalances(
    request: $request
);

if ($response->v3BalancesCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\V3GetAccountBalancesRequest](../../Models/Operations/V3GetAccountBalancesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\V3GetAccountBalancesResponse](../../Models/Operations/V3GetAccountBalancesResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getBankAccount

Get a Bank Account by ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3GetBankAccountRequest(
    bankAccountID: '<id>',
);

$response = $sdk->payments->v3->getBankAccount(
    request: $request
);

if ($response->v3GetBankAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\V3GetBankAccountRequest](../../Models/Operations/V3GetBankAccountRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\V3GetBankAccountResponse](../../Models/Operations/V3GetBankAccountResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getConnectorConfig

Get a connector configuration by ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3GetConnectorConfigRequest(
    connectorID: '<id>',
);

$response = $sdk->payments->v3->getConnectorConfig(
    request: $request
);

if ($response->v3GetConnectorConfigResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\V3GetConnectorConfigRequest](../../Models/Operations/V3GetConnectorConfigRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\V3GetConnectorConfigResponse](../../Models/Operations/V3GetConnectorConfigResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getConnectorSchedule

Get a connector schedule by ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3GetConnectorScheduleRequest(
    connectorID: '<id>',
    scheduleID: '<id>',
);

$response = $sdk->payments->v3->getConnectorSchedule(
    request: $request
);

if ($response->v3ConnectorScheduleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\V3GetConnectorScheduleRequest](../../Models/Operations/V3GetConnectorScheduleRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\V3GetConnectorScheduleResponse](../../Models/Operations/V3GetConnectorScheduleResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getPayment

Get a payment by ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3GetPaymentRequest(
    paymentID: '<id>',
);

$response = $sdk->payments->v3->getPayment(
    request: $request
);

if ($response->v3GetPaymentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\V3GetPaymentRequest](../../Models/Operations/V3GetPaymentRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\V3GetPaymentResponse](../../Models/Operations/V3GetPaymentResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getPaymentInitiation

Get a payment initiation by ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3GetPaymentInitiationRequest(
    paymentInitiationID: '<id>',
);

$response = $sdk->payments->v3->getPaymentInitiation(
    request: $request
);

if ($response->v3GetPaymentInitiationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\V3GetPaymentInitiationRequest](../../Models/Operations/V3GetPaymentInitiationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\V3GetPaymentInitiationResponse](../../Models/Operations/V3GetPaymentInitiationResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getPool

Get a pool by ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3GetPoolRequest(
    poolID: '<id>',
);

$response = $sdk->payments->v3->getPool(
    request: $request
);

if ($response->v3GetPoolResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\V3GetPoolRequest](../../Models/Operations/V3GetPoolRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\V3GetPoolResponse](../../Models/Operations/V3GetPoolResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getPoolBalances

Get pool balances

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3GetPoolBalancesRequest(
    poolID: '<id>',
);

$response = $sdk->payments->v3->getPoolBalances(
    request: $request
);

if ($response->v3PoolBalancesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\V3GetPoolBalancesRequest](../../Models/Operations/V3GetPoolBalancesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\V3GetPoolBalancesResponse](../../Models/Operations/V3GetPoolBalancesResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## getTask

Get a task and its result by ID

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3GetTaskRequest(
    taskID: '<id>',
);

$response = $sdk->payments->v3->getTask(
    request: $request
);

if ($response->v3GetTaskResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\V3GetTaskRequest](../../Models/Operations/V3GetTaskRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\V3GetTaskResponse](../../Models/Operations/V3GetTaskResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## initiatePayment

Initiate a payment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3InitiatePaymentRequest();

$response = $sdk->payments->v3->initiatePayment(
    request: $request
);

if ($response->v3InitiatePaymentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\V3InitiatePaymentRequest](../../Models/Operations/V3InitiatePaymentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\V3InitiatePaymentResponse](../../Models/Operations/V3InitiatePaymentResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## installConnector

Install a connector

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3InstallConnectorRequest(
    connector: '<value>',
);

$response = $sdk->payments->v3->installConnector(
    request: $request
);

if ($response->v3InstallConnectorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\V3InstallConnectorRequest](../../Models/Operations/V3InstallConnectorRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\V3InstallConnectorResponse](../../Models/Operations/V3InstallConnectorResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listAccounts

List all accounts

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ListAccountsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v3->listAccounts(
    request: $request
);

if ($response->v3AccountsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\V3ListAccountsRequest](../../Models/Operations/V3ListAccountsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\V3ListAccountsResponse](../../Models/Operations/V3ListAccountsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listBankAccounts

List all bank accounts

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ListBankAccountsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v3->listBankAccounts(
    request: $request
);

if ($response->v3BankAccountsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\V3ListBankAccountsRequest](../../Models/Operations/V3ListBankAccountsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\V3ListBankAccountsResponse](../../Models/Operations/V3ListBankAccountsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listConnectorConfigs

List all connector configurations

### Example Usage

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



$response = $sdk->payments->v3->listConnectorConfigs(

);

if ($response->v3ConnectorConfigsResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\V3ListConnectorConfigsResponse](../../Models/Operations/V3ListConnectorConfigsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listConnectorScheduleInstances

List all connector schedule instances

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ListConnectorScheduleInstancesRequest(
    connectorID: '<id>',
    scheduleID: '<id>',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v3->listConnectorScheduleInstances(
    request: $request
);

if ($response->v3ConnectorScheduleInstancesCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\V3ListConnectorScheduleInstancesRequest](../../Models/Operations/V3ListConnectorScheduleInstancesRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\V3ListConnectorScheduleInstancesResponse](../../Models/Operations/V3ListConnectorScheduleInstancesResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listConnectorSchedules

List all connector schedules

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ListConnectorSchedulesRequest(
    connectorID: '<id>',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v3->listConnectorSchedules(
    request: $request
);

if ($response->v3ConnectorSchedulesCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\V3ListConnectorSchedulesRequest](../../Models/Operations/V3ListConnectorSchedulesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\V3ListConnectorSchedulesResponse](../../Models/Operations/V3ListConnectorSchedulesResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listConnectors

List all connectors

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ListConnectorsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v3->listConnectors(
    request: $request
);

if ($response->v3ConnectorsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\V3ListConnectorsRequest](../../Models/Operations/V3ListConnectorsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\V3ListConnectorsResponse](../../Models/Operations/V3ListConnectorsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listPaymentInitiationAdjustments

List all payment initiation adjustments

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ListPaymentInitiationAdjustmentsRequest(
    paymentInitiationID: '<id>',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v3->listPaymentInitiationAdjustments(
    request: $request
);

if ($response->v3PaymentInitiationAdjustmentsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [Operations\V3ListPaymentInitiationAdjustmentsRequest](../../Models/Operations/V3ListPaymentInitiationAdjustmentsRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |

### Response

**[?Operations\V3ListPaymentInitiationAdjustmentsResponse](../../Models/Operations/V3ListPaymentInitiationAdjustmentsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listPaymentInitiationRelatedPayments

List all payments related to a payment initiation

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ListPaymentInitiationRelatedPaymentsRequest(
    paymentInitiationID: '<id>',
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v3->listPaymentInitiationRelatedPayments(
    request: $request
);

if ($response->v3PaymentInitiationRelatedPaymentsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\V3ListPaymentInitiationRelatedPaymentsRequest](../../Models/Operations/V3ListPaymentInitiationRelatedPaymentsRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\V3ListPaymentInitiationRelatedPaymentsResponse](../../Models/Operations/V3ListPaymentInitiationRelatedPaymentsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listPaymentInitiations

List all payment initiations

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ListPaymentInitiationsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v3->listPaymentInitiations(
    request: $request
);

if ($response->v3PaymentInitiationsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\V3ListPaymentInitiationsRequest](../../Models/Operations/V3ListPaymentInitiationsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\V3ListPaymentInitiationsResponse](../../Models/Operations/V3ListPaymentInitiationsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listPayments

List all payments

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ListPaymentsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v3->listPayments(
    request: $request
);

if ($response->v3PaymentsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\V3ListPaymentsRequest](../../Models/Operations/V3ListPaymentsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\V3ListPaymentsResponse](../../Models/Operations/V3ListPaymentsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## listPools

List all pools

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ListPoolsRequest(
    cursor: 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==',
    pageSize: 100,
);

$response = $sdk->payments->v3->listPools(
    request: $request
);

if ($response->v3PoolsCursorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\V3ListPoolsRequest](../../Models/Operations/V3ListPoolsRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\V3ListPoolsResponse](../../Models/Operations/V3ListPoolsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## rejectPaymentInitiation

Reject a payment initiation

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3RejectPaymentInitiationRequest(
    paymentInitiationID: '<id>',
);

$response = $sdk->payments->v3->rejectPaymentInitiation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\V3RejectPaymentInitiationRequest](../../Models/Operations/V3RejectPaymentInitiationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\V3RejectPaymentInitiationResponse](../../Models/Operations/V3RejectPaymentInitiationResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## removeAccountFromPool

Remove an account from a pool

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3RemoveAccountFromPoolRequest(
    accountID: '<id>',
    poolID: '<id>',
);

$response = $sdk->payments->v3->removeAccountFromPool(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\V3RemoveAccountFromPoolRequest](../../Models/Operations/V3RemoveAccountFromPoolRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\V3RemoveAccountFromPoolResponse](../../Models/Operations/V3RemoveAccountFromPoolResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## resetConnector

Reset a connector. Be aware that this will delete all data and stop all existing tasks like payment initiations and bank account creations.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ResetConnectorRequest(
    connectorID: '<id>',
);

$response = $sdk->payments->v3->resetConnector(
    request: $request
);

if ($response->v3ResetConnectorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\V3ResetConnectorRequest](../../Models/Operations/V3ResetConnectorRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\V3ResetConnectorResponse](../../Models/Operations/V3ResetConnectorResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## retryPaymentInitiation

Retry a payment initiation

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3RetryPaymentInitiationRequest(
    paymentInitiationID: '<id>',
);

$response = $sdk->payments->v3->retryPaymentInitiation(
    request: $request
);

if ($response->v3RetryPaymentInitiationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\V3RetryPaymentInitiationRequest](../../Models/Operations/V3RetryPaymentInitiationRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\V3RetryPaymentInitiationResponse](../../Models/Operations/V3RetryPaymentInitiationResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## reversePaymentInitiation

Reverse a payment initiation

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3ReversePaymentInitiationRequest(
    paymentInitiationID: '<id>',
);

$response = $sdk->payments->v3->reversePaymentInitiation(
    request: $request
);

if ($response->v3ReversePaymentInitiationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\V3ReversePaymentInitiationRequest](../../Models/Operations/V3ReversePaymentInitiationRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\V3ReversePaymentInitiationResponse](../../Models/Operations/V3ReversePaymentInitiationResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## uninstallConnector

Uninstall a connector

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3UninstallConnectorRequest(
    connectorID: '<id>',
);

$response = $sdk->payments->v3->uninstallConnector(
    request: $request
);

if ($response->v3UninstallConnectorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\V3UninstallConnectorRequest](../../Models/Operations/V3UninstallConnectorRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\V3UninstallConnectorResponse](../../Models/Operations/V3UninstallConnectorResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## updateBankAccountMetadata

Update a bank account's metadata

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3UpdateBankAccountMetadataRequest(
    bankAccountID: '<id>',
);

$response = $sdk->payments->v3->updateBankAccountMetadata(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\V3UpdateBankAccountMetadataRequest](../../Models/Operations/V3UpdateBankAccountMetadataRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\V3UpdateBankAccountMetadataResponse](../../Models/Operations/V3UpdateBankAccountMetadataResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |

## updatePaymentMetadata

Update a payment's metadata

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use formance\stack;
use formance\stack\Models\Operations;
use formance\stack\Models\Shared;

$sdk = stack\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            clientID: '<YOUR_CLIENT_ID_HERE>',
            clientSecret: '<YOUR_CLIENT_SECRET_HERE>',
        )
    )
    ->build();

$request = new Operations\V3UpdatePaymentMetadataRequest(
    paymentID: '<id>',
);

$response = $sdk->payments->v3->updatePaymentMetadata(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\V3UpdatePaymentMetadataRequest](../../Models/Operations/V3UpdatePaymentMetadataRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\V3UpdatePaymentMetadataResponse](../../Models/Operations/V3UpdatePaymentMetadataResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\V3ErrorResponse | default                | application/json       |
| Errors\SDKException    | 4XX, 5XX               | \*/\*                  |