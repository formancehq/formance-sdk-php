# AddMetadataOnTransactionRequest


## Fields

| Field                    | Type                     | Required                 | Description              | Example                  |
| ------------------------ | ------------------------ | ------------------------ | ------------------------ | ------------------------ |
| `requestBody`            | array<string, *mixed*>   | :heavy_check_mark:       | metadata                 |                          |
| `ledger`                 | *string*                 | :heavy_check_mark:       | Name of the ledger.      | ledger001                |
| `txid`                   | *\Brick\Math\BigInteger* | :heavy_check_mark:       | Transaction ID.          | 1234                     |