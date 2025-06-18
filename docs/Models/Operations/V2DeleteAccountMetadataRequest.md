# V2DeleteAccountMetadataRequest


## Fields

| Field                  | Type                   | Required               | Description            | Example                |
| ---------------------- | ---------------------- | ---------------------- | ---------------------- | ---------------------- |
| `idempotencyKey`       | *?string*              | :heavy_minus_sign:     | Use an idempotency key |                        |
| `address`              | *string*               | :heavy_check_mark:     | Account address        |                        |
| `key`                  | *string*               | :heavy_check_mark:     | The key to remove.     | foo                    |
| `ledger`               | *string*               | :heavy_check_mark:     | Name of the ledger.    | ledger001              |