# TriggerOccurrence


## Fields

| Field                                                               | Type                                                                | Required                                                            | Description                                                         |
| ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- |
| `date`                                                              | [\DateTime](https://www.php.net/manual/en/class.datetime.php)       | :heavy_check_mark:                                                  | N/A                                                                 |
| `error`                                                             | *?string*                                                           | :heavy_minus_sign:                                                  | N/A                                                                 |
| `event`                                                             | array<string, *mixed*>                                              | :heavy_check_mark:                                                  | N/A                                                                 |
| `triggerID`                                                         | *string*                                                            | :heavy_check_mark:                                                  | N/A                                                                 |
| `workflowInstance`                                                  | [?Shared\WorkflowInstance](../../Models/Shared/WorkflowInstance.md) | :heavy_minus_sign:                                                  | N/A                                                                 |
| `workflowInstanceID`                                                | *?string*                                                           | :heavy_minus_sign:                                                  | N/A                                                                 |