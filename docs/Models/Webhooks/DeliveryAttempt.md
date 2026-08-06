# DeliveryAttempt


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `attemptNumber`                                               | *int*                                                         | :heavy_check_mark:                                            | N/A                                                           |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |
| `deliveryID`                                                  | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `durationMillis`                                              | *?int*                                                        | :heavy_minus_sign:                                            | N/A                                                           |
| `endpoint`                                                    | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `error`                                                       | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `outcome`                                                     | [Webhooks\Outcome](../../Models/webhooks/Outcome.md)          | :heavy_check_mark:                                            | N/A                                                           |
| `replayGeneration`                                            | *int*                                                         | :heavy_check_mark:                                            | N/A                                                           |
| `responseExcerpt`                                             | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `statusCode`                                                  | *int*                                                         | :heavy_check_mark:                                            | N/A                                                           |