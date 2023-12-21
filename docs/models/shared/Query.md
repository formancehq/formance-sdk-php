# Query


## Fields

| Field                                        | Type                                         | Required                                     | Description                                  | Example                                      |
| -------------------------------------------- | -------------------------------------------- | -------------------------------------------- | -------------------------------------------- | -------------------------------------------- |
| `after`                                      | array<*string*>                              | :heavy_minus_sign:                           | N/A                                          | users:002                                    |
| `cursor`                                     | *?string*                                    | :heavy_minus_sign:                           | N/A                                          | YXVsdCBhbmQgYSBtYXhpbXVtIG1heF9yZXN1bHRzLol= |
| `ledgers`                                    | array<*string*>                              | :heavy_minus_sign:                           | N/A                                          | quickstart                                   |
| `pageSize`                                   | *?int*                                       | :heavy_minus_sign:                           | N/A                                          |                                              |
| `policy`                                     | *?string*                                    | :heavy_minus_sign:                           | N/A                                          | OR                                           |
| `raw`                                        | [?QueryRaw](../../models/shared/QueryRaw.md) | :heavy_minus_sign:                           | N/A                                          |                                              |
| `sort`                                       | *?string*                                    | :heavy_minus_sign:                           | N/A                                          | id:asc                                       |
| `target`                                     | *?string*                                    | :heavy_minus_sign:                           | N/A                                          |                                              |
| `terms`                                      | array<*string*>                              | :heavy_minus_sign:                           | N/A                                          | destination=central_bank1                    |