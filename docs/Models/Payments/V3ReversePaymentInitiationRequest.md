# V3ReversePaymentInitiationRequest


## Fields

| Field                                                                    | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `amount`                                                                 | *\Brick\Math\BigInteger*                                                 | :heavy_check_mark:                                                       | Amount to reverse, in the asset's smallest unit                          |
| `asset`                                                                  | *string*                                                                 | :heavy_check_mark:                                                       | Asset the reversal is denominated in                                     |
| `description`                                                            | *string*                                                                 | :heavy_check_mark:                                                       | Human-readable reason for the reversal                                   |
| `metadata`                                                               | array<string, *string*>                                                  | :heavy_minus_sign:                                                       | Arbitrary key/value pairs attached to the resource                       |
| `reference`                                                              | *string*                                                                 | :heavy_check_mark:                                                       | Caller-supplied identifier for the reversal, used to deduplicate retries |