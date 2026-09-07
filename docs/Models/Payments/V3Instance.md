# V3Instance


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `connectorID`                                                 | *string*                                                      | :heavy_check_mark:                                            | Identifier of the connector this run belongs to               |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | When the run started                                          |
| `error`                                                       | *?string*                                                     | :heavy_minus_sign:                                            | Why the run failed, absent when it succeeded                  |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | Unique identifier of the run                                  |
| `scheduleID`                                                  | *string*                                                      | :heavy_check_mark:                                            | Identifier of the schedule that started this run              |
| `terminated`                                                  | *bool*                                                        | :heavy_check_mark:                                            | Whether the run has finished, successfully or not             |
| `terminatedAt`                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | When the run finished, absent while it is still running       |
| `updatedAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | When the run was last updated                                 |