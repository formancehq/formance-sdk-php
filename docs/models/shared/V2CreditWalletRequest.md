# V2CreditWalletRequest


## Fields

| Field                                           | Type                                            | Required                                        | Description                                     |
| ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- |
| `amount`                                        | [V2Monetary](../../models/shared/V2Monetary.md) | :heavy_check_mark:                              | N/A                                             |
| `balance`                                       | *?string*                                       | :heavy_minus_sign:                              | The balance to credit                           |
| `metadata`                                      | array<string, *string*>                         | :heavy_check_mark:                              | Metadata associated with the wallet.            |
| `reference`                                     | *?string*                                       | :heavy_minus_sign:                              | N/A                                             |
| `sources`                                       | array<*mixed*>                                  | :heavy_check_mark:                              | N/A                                             |