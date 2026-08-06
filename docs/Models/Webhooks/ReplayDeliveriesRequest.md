# ReplayDeliveriesRequest


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `configIds`                                                   | array<*string*>                                               | :heavy_minus_sign:                                            | N/A                                                           |
| `createdAtFrom`                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |
| `createdAtTo`                                                 | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | N/A                                                           |
| `cursor`                                                      | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `pageSize`                                                    | *?int*                                                        | :heavy_minus_sign:                                            | N/A                                                           |
| `statuses`                                                    | array<[Webhooks\Statuses](../../Models/webhooks/Statuses.md)> | :heavy_minus_sign:                                            | N/A                                                           |