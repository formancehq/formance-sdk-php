# TaskBankingCircle


## Fields

| Field                                                                          | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `connectorID`                                                                  | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |
| `createdAt`                                                                    | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                  | :heavy_check_mark:                                                             | N/A                                                                            |
| `descriptor`                                                                   | [Shared\Descriptor](../../Models/Shared/Descriptor.md)                         | :heavy_check_mark:                                                             | N/A                                                                            |
| `id`                                                                           | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |
| `state`                                                                        | [Shared\TaskBankingCircleState](../../Models/Shared/TaskBankingCircleState.md) | :heavy_check_mark:                                                             | N/A                                                                            |
| `status`                                                                       | [Shared\PaymentStatus](../../Models/Shared/PaymentStatus.md)                   | :heavy_check_mark:                                                             | N/A                                                                            |
| `updatedAt`                                                                    | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                  | :heavy_check_mark:                                                             | N/A                                                                            |
| `error`                                                                        | *?string*                                                                      | :heavy_minus_sign:                                                             | N/A                                                                            |