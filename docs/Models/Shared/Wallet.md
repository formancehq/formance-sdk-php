# Wallet


## Fields

| Field                                                           | Type                                                            | Required                                                        | Description                                                     |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `balances`                                                      | [?Shared\WalletBalances](../../Models/Shared/WalletBalances.md) | :heavy_minus_sign:                                              | N/A                                                             |
| `createdAt`                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)   | :heavy_check_mark:                                              | N/A                                                             |
| `id`                                                            | *string*                                                        | :heavy_check_mark:                                              | The unique ID of the wallet.                                    |
| `ledger`                                                        | *string*                                                        | :heavy_check_mark:                                              | N/A                                                             |
| `metadata`                                                      | array<string, *string*>                                         | :heavy_check_mark:                                              | Metadata associated with the wallet.                            |
| `name`                                                          | *string*                                                        | :heavy_check_mark:                                              | N/A                                                             |