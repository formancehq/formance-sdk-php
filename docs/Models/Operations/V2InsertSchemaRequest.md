# V2InsertSchemaRequest


## Fields

| Field                                                      | Type                                                       | Required                                                   | Description                                                | Example                                                    |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `idempotencyKey`                                           | *?string*                                                  | :heavy_minus_sign:                                         | Use an idempotency key                                     |                                                            |
| `v2SchemaData`                                             | [Shared\V2SchemaData](../../Models/Shared/V2SchemaData.md) | :heavy_check_mark:                                         | N/A                                                        |                                                            |
| `ledger`                                                   | *string*                                                   | :heavy_check_mark:                                         | Name of the ledger.                                        | ledger001                                                  |
| `version`                                                  | *string*                                                   | :heavy_check_mark:                                         | Schema version.                                            | v1.0.0                                                     |