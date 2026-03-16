# V2LogDataRevertedTransaction

Payload for REVERTED_TRANSACTION log entries. Contains both the original reverted transaction and the new reverting transaction.


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `revertedTransaction`                                              | [Shared\V2LogTransaction](../../Models/Shared/V2LogTransaction.md) | :heavy_check_mark:                                                 | Transaction structure as it appears in log payloads                |
| `transaction`                                                      | [Shared\V2LogTransaction](../../Models/Shared/V2LogTransaction.md) | :heavy_check_mark:                                                 | Transaction structure as it appears in log payloads                |