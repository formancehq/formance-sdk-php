# AccountRequest


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `accountName`                                                 | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `connectorID`                                                 | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |
| `defaultAsset`                                                | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `metadata`                                                    | array<string, *string*>                                       | :heavy_minus_sign:                                            | N/A                                                           |
| `reference`                                                   | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `type`                                                        | [Shared\AccountType](../../Models/Shared/AccountType.md)      | :heavy_check_mark:                                            | N/A                                                           |