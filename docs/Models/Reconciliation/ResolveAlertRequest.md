# ResolveAlertRequest

Mark an alert resolved. When `transactionRefs` is non-empty the
resolution kind is recorded as `fixed_by_booking`.



## Fields

| Field              | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `by`               | *string*           | :heavy_check_mark: | N/A                |
| `note`             | *?string*          | :heavy_minus_sign: | N/A                |
| `transactionRefs`  | array<*string*>    | :heavy_minus_sign: | N/A                |