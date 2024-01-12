# V2WorkflowInstanceHistoryStage


## Fields

| Field                                                                                                                              | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `attempt`                                                                                                                          | *int*                                                                                                                              | :heavy_check_mark:                                                                                                                 | N/A                                                                                                                                |
| `error`                                                                                                                            | *?string*                                                                                                                          | :heavy_minus_sign:                                                                                                                 | N/A                                                                                                                                |
| `input`                                                                                                                            | [\formance\stack\Models\Shared\V2WorkflowInstanceHistoryStageInput](../../Models/Shared/V2WorkflowInstanceHistoryStageInput.md)    | :heavy_check_mark:                                                                                                                 | N/A                                                                                                                                |
| `lastFailure`                                                                                                                      | *?string*                                                                                                                          | :heavy_minus_sign:                                                                                                                 | N/A                                                                                                                                |
| `name`                                                                                                                             | *string*                                                                                                                           | :heavy_check_mark:                                                                                                                 | N/A                                                                                                                                |
| `nextExecution`                                                                                                                    | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                      | :heavy_minus_sign:                                                                                                                 | N/A                                                                                                                                |
| `output`                                                                                                                           | [?\formance\stack\Models\Shared\V2WorkflowInstanceHistoryStageOutput](../../Models/Shared/V2WorkflowInstanceHistoryStageOutput.md) | :heavy_minus_sign:                                                                                                                 | N/A                                                                                                                                |
| `startedAt`                                                                                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                      | :heavy_check_mark:                                                                                                                 | N/A                                                                                                                                |
| `terminated`                                                                                                                       | *bool*                                                                                                                             | :heavy_check_mark:                                                                                                                 | N/A                                                                                                                                |
| `terminatedAt`                                                                                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                      | :heavy_minus_sign:                                                                                                                 | N/A                                                                                                                                |