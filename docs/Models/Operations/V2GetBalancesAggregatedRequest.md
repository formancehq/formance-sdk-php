# V2GetBalancesAggregatedRequest


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `requestBody`                                                 | array<string, *mixed*>                                        | :heavy_check_mark:                                            | N/A                                                           |                                                               |
| `ledger`                                                      | *string*                                                      | :heavy_check_mark:                                            | Name of the ledger.                                           | ledger001                                                     |
| `pit`                                                         | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | N/A                                                           |                                                               |
| `useInsertionDate`                                            | *?bool*                                                       | :heavy_minus_sign:                                            | Use insertion date instead of effective date                  |                                                               |