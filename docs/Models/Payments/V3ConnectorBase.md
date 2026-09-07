# V3ConnectorBase

Summary of a connector, without its configuration


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | When the connector was installed                              |
| `id`                                                          | *?string*                                                     | :heavy_minus_sign:                                            | Unique identifier of the connector                            |
| `name`                                                        | *?string*                                                     | :heavy_minus_sign:                                            | Human-readable name of the connector instance                 |
| `provider`                                                    | *?string*                                                     | :heavy_minus_sign:                                            | Name of the payment provider behind the connector             |
| `reference`                                                   | *?string*                                                     | :heavy_minus_sign:                                            | Stable reference identifying the connector                    |