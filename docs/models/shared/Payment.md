# Payment


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          | Example                                                              |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `accountID`                                                          | *string*                                                             | :heavy_check_mark:                                                   | N/A                                                                  |                                                                      |
| `adjustments`                                                        | array<[PaymentAdjustment](../../models/shared/PaymentAdjustment.md)> | :heavy_check_mark:                                                   | N/A                                                                  |                                                                      |
| `asset`                                                              | *string*                                                             | :heavy_check_mark:                                                   | N/A                                                                  | USD                                                                  |
| `createdAt`                                                          | [\DateTime](https://www.php.net/manual/en/class.datetime.php)        | :heavy_check_mark:                                                   | N/A                                                                  |                                                                      |
| `id`                                                                 | *string*                                                             | :heavy_check_mark:                                                   | N/A                                                                  | XXX                                                                  |
| `initialAmount`                                                      | *int*                                                                | :heavy_check_mark:                                                   | N/A                                                                  | 100                                                                  |
| `metadata`                                                           | [PaymentMetadata](../../models/shared/PaymentMetadata.md)            | :heavy_check_mark:                                                   | N/A                                                                  |                                                                      |
| `provider`                                                           | [Connector](../../models/shared/Connector.md)                        | :heavy_check_mark:                                                   | N/A                                                                  |                                                                      |
| `raw`                                                                | [PaymentRaw](../../models/shared/PaymentRaw.md)                      | :heavy_check_mark:                                                   | N/A                                                                  |                                                                      |
| `reference`                                                          | *string*                                                             | :heavy_check_mark:                                                   | N/A                                                                  |                                                                      |
| `scheme`                                                             | [PaymentScheme](../../models/shared/PaymentScheme.md)                | :heavy_check_mark:                                                   | N/A                                                                  |                                                                      |
| `status`                                                             | [PaymentStatus](../../models/shared/PaymentStatus.md)                | :heavy_check_mark:                                                   | N/A                                                                  |                                                                      |
| `type`                                                               | [PaymentType](../../models/shared/PaymentType.md)                    | :heavy_check_mark:                                                   | N/A                                                                  |                                                                      |