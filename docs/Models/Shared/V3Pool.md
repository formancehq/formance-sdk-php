# V3Pool


## Fields

| Field                                                           | Type                                                            | Required                                                        | Description                                                     |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `createdAt`                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)   | :heavy_check_mark:                                              | N/A                                                             |
| `id`                                                            | *string*                                                        | :heavy_check_mark:                                              | N/A                                                             |
| `name`                                                          | *string*                                                        | :heavy_check_mark:                                              | N/A                                                             |
| `poolAccounts`                                                  | array<*string*>                                                 | :heavy_check_mark:                                              | N/A                                                             |
| `query`                                                         | array<string, *mixed*>                                          | :heavy_minus_sign:                                              | N/A                                                             |
| `type`                                                          | [?Shared\V3PoolTypeEnum](../../Models/Shared/V3PoolTypeEnum.md) | :heavy_minus_sign:                                              | N/A                                                             |