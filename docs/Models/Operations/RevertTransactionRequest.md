# RevertTransactionRequest


## Fields

| Field                            | Type                             | Required                         | Description                      | Example                          |
| -------------------------------- | -------------------------------- | -------------------------------- | -------------------------------- | -------------------------------- |
| `ledger`                         | *string*                         | :heavy_check_mark:               | Name of the ledger.              | ledger001                        |
| `txid`                           | *\Brick\Math\BigInteger*         | :heavy_check_mark:               | Transaction ID.                  | 1234                             |
| `disableChecks`                  | *?bool*                          | :heavy_minus_sign:               | Allow to disable balances checks |                                  |