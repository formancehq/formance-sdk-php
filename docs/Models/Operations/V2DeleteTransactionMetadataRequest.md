# V2DeleteTransactionMetadataRequest


## Fields

| Field                    | Type                     | Required                 | Description              | Example                  |
| ------------------------ | ------------------------ | ------------------------ | ------------------------ | ------------------------ |
| `idempotencyKey`         | *?string*                | :heavy_minus_sign:       | Use an idempotency key   |                          |
| `id`                     | *\Brick\Math\BigInteger* | :heavy_check_mark:       | Transaction ID.          | 1234                     |
| `key`                    | *string*                 | :heavy_check_mark:       | The key to remove.       | foo                      |
| `ledger`                 | *string*                 | :heavy_check_mark:       | Name of the ledger.      | ledger001                |