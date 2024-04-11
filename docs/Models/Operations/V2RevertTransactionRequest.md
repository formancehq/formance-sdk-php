# V2RevertTransactionRequest


## Fields

| Field                                                   | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `atEffectiveDate`                                       | *?bool*                                                 | :heavy_minus_sign:                                      | Revert transaction at effective date of the original tx |                                                         |
| `force`                                                 | *?bool*                                                 | :heavy_minus_sign:                                      | Force revert                                            |                                                         |
| `id`                                                    | *int*                                                   | :heavy_check_mark:                                      | Transaction ID.                                         | 1234                                                    |
| `ledger`                                                | *string*                                                | :heavy_check_mark:                                      | Name of the ledger.                                     | ledger001                                               |