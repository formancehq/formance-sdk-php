# Transaction


## Fields

| Field                                                                                                                 | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           | Example                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `metadata`                                                                                                            | array<string, *mixed*>                                                                                                | :heavy_minus_sign:                                                                                                    | N/A                                                                                                                   |                                                                                                                       |
| `postCommitVolumes`                                                                                                   | array<string, array<string, [\formance\stack\Models\Shared\Volume](../../Models/Shared/Volume.md)>>                   | :heavy_minus_sign:                                                                                                    | N/A                                                                                                                   | {"orders:1":{"USD":{"input":100,"output":10,"balance":90}},"orders:2":{"USD":{"input":100,"output":10,"balance":90}}} |
| `postings`                                                                                                            | array<[\formance\stack\Models\Shared\Posting](../../Models/Shared/Posting.md)>                                        | :heavy_check_mark:                                                                                                    | N/A                                                                                                                   |                                                                                                                       |
| `preCommitVolumes`                                                                                                    | array<string, array<string, [\formance\stack\Models\Shared\Volume](../../Models/Shared/Volume.md)>>                   | :heavy_minus_sign:                                                                                                    | N/A                                                                                                                   | {"orders:1":{"USD":{"input":100,"output":10,"balance":90}},"orders:2":{"USD":{"input":100,"output":10,"balance":90}}} |
| `reference`                                                                                                           | *?string*                                                                                                             | :heavy_minus_sign:                                                                                                    | N/A                                                                                                                   | ref:001                                                                                                               |
| `timestamp`                                                                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                         | :heavy_check_mark:                                                                                                    | N/A                                                                                                                   |                                                                                                                       |
| `txid`                                                                                                                | *int*                                                                                                                 | :heavy_check_mark:                                                                                                    | N/A                                                                                                                   |                                                                                                                       |