# V2LogDataDeleteMetadata

Payload for DELETE_METADATA log entries. Contains the target entity and the metadata key that was deleted.


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `key`                                                            | *string*                                                         | :heavy_check_mark:                                               | The metadata key that was deleted                                |
| `targetId`                                                       | [string\|\Brick\Math\BigInteger](../../Models/Shared/TargetId.md) | :heavy_check_mark:                                               | N/A                                                              |
| `targetType`                                                     | [Shared\TargetType](../../Models/Shared/TargetType.md)           | :heavy_check_mark:                                               | Type of the target entity                                        |