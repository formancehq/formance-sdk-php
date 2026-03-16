# V2ListSchemasRequest


## Fields

| Field                                                 | Type                                                  | Required                                              | Description                                           | Example                                               |
| ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- |
| `cursor`                                              | *?string*                                             | :heavy_minus_sign:                                    | The pagination cursor value                           |                                                       |
| `ledger`                                              | *string*                                              | :heavy_check_mark:                                    | Name of the ledger.                                   | ledger001                                             |
| `order`                                               | [?Operations\Order](../../Models/Operations/Order.md) | :heavy_minus_sign:                                    | The sort order                                        |                                                       |
| `pageSize`                                            | *?int*                                                | :heavy_minus_sign:                                    | The maximum number of results to return per page      |                                                       |
| `sort`                                                | [?Operations\Sort](../../Models/Operations/Sort.md)   | :heavy_minus_sign:                                    | The field to sort by                                  |                                                       |