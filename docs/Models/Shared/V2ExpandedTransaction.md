# V2ExpandedTransaction


## Fields

| Field                                                                                                                 | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           | Example                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                                  | *int*                                                                                                                 | :heavy_check_mark:                                                                                                    | N/A                                                                                                                   |                                                                                                                       |
| `metadata`                                                                                                            | array<string, *string*>                                                                                               | :heavy_check_mark:                                                                                                    | N/A                                                                                                                   | {"admin":"true"}                                                                                                      |
| `postCommitVolumes`                                                                                                   | array<string, array<string, [\formance\stack\Models\Shared\V2Volume](../../Models/Shared/V2Volume.md)>>               | :heavy_minus_sign:                                                                                                    | N/A                                                                                                                   | {"orders:1":{"USD":{"input":100,"output":10,"balance":90}},"orders:2":{"USD":{"input":100,"output":10,"balance":90}}} |
| `postings`                                                                                                            | array<[\formance\stack\Models\Shared\V2Posting](../../Models/Shared/V2Posting.md)>                                    | :heavy_check_mark:                                                                                                    | N/A                                                                                                                   |                                                                                                                       |
| `preCommitVolumes`                                                                                                    | array<string, array<string, [\formance\stack\Models\Shared\V2Volume](../../Models/Shared/V2Volume.md)>>               | :heavy_minus_sign:                                                                                                    | N/A                                                                                                                   | {"orders:1":{"USD":{"input":100,"output":10,"balance":90}},"orders:2":{"USD":{"input":100,"output":10,"balance":90}}} |
| `reference`                                                                                                           | *?string*                                                                                                             | :heavy_minus_sign:                                                                                                    | N/A                                                                                                                   | ref:001                                                                                                               |
| `reverted`                                                                                                            | *bool*                                                                                                                | :heavy_check_mark:                                                                                                    | N/A                                                                                                                   |                                                                                                                       |
| `timestamp`                                                                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                         | :heavy_check_mark:                                                                                                    | N/A                                                                                                                   |                                                                                                                       |