# Pool

A named group of accounts whose balances are aggregated together


## Fields

| Field                                                                                  | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `accounts`                                                                             | array<*string*>                                                                        | :heavy_check_mark:                                                                     | Accounts currently in the pool                                                         |
| `id`                                                                                   | *string*                                                                               | :heavy_check_mark:                                                                     | Unique identifier of the pool                                                          |
| `name`                                                                                 | *string*                                                                               | :heavy_check_mark:                                                                     | Human-readable name of the pool                                                        |
| `query`                                                                                | array<string, *mixed*>                                                                 | :heavy_minus_sign:                                                                     | Filter selecting the accounts a dynamic pool contains                                  |
| `type`                                                                                 | [?\formance\stack\Models\Payments\PoolTypeEnum](../../Models/payments/PoolTypeEnum.md) | :heavy_minus_sign:                                                                     | Whether a pool holds a fixed account list or is driven by a query                      |