# BankAccountRequest


## Fields

| Field                   | Type                    | Required                | Description             | Example                 |
| ----------------------- | ----------------------- | ----------------------- | ----------------------- | ----------------------- |
| `connectorID`           | *string*                | :heavy_check_mark:      | N/A                     |                         |
| `country`               | *string*                | :heavy_check_mark:      | N/A                     | GB                      |
| `name`                  | *string*                | :heavy_check_mark:      | N/A                     | My account              |
| `accountNumber`         | *?string*               | :heavy_minus_sign:      | N/A                     |                         |
| `iban`                  | *?string*               | :heavy_minus_sign:      | N/A                     |                         |
| `swiftBicCode`          | *?string*               | :heavy_minus_sign:      | N/A                     |                         |
| `metadata`              | array<string, *string*> | :heavy_minus_sign:      | N/A                     |                         |