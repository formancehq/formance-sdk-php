# AccountWithVolumesAndBalances


## Fields

| Field                                                  | Type                                                   | Required                                               | Description                                            | Example                                                |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `address`                                              | *string*                                               | :heavy_check_mark:                                     | N/A                                                    | users:001                                              |
| `balances`                                             | array<string, *int*>                                   | :heavy_minus_sign:                                     | N/A                                                    | [object Object]                                        |
| `metadata`                                             | array<string, *mixed*>                                 | :heavy_minus_sign:                                     | N/A                                                    | [object Object]                                        |
| `type`                                                 | *?string*                                              | :heavy_minus_sign:                                     | N/A                                                    | virtual                                                |
| `volumes`                                              | array<string, [Volume](../../models/shared/Volume.md)> | :heavy_minus_sign:                                     | N/A                                                    | [object Object]                                        |