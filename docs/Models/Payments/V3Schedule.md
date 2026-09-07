# V3Schedule

A recurring job a connector runs to fetch data from its provider


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `connectorID`                                                 | *string*                                                      | :heavy_check_mark:                                            | Identifier of the connector this schedule belongs to          |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | When the schedule was created                                 |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | Unique identifier of the schedule                             |
| `pausedAt`                                                    | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | When the schedule was paused, absent while it is running      |
| `pausedReason`                                                | *?string*                                                     | :heavy_minus_sign:                                            | Why the schedule was paused                                   |