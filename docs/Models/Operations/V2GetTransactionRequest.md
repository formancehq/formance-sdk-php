# V2GetTransactionRequest


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `id`                                                          | *\Brick\Math\BigInteger*                                      | :heavy_check_mark:                                            | Transaction ID.                                               | 1234                                                          |
| `ledger`                                                      | *string*                                                      | :heavy_check_mark:                                            | Name of the ledger.                                           | ledger001                                                     |
| `expand`                                                      | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |                                                               |
| `pit`                                                         | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | N/A                                                           |                                                               |