# V2LogDataRevertedTransaction

Payload for REVERTED_TRANSACTION log entries. Contains both the original reverted transaction and the new reverting transaction.


## Fields

| Field                                                                                     | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `v2LogTransaction`                                                                        | [\formance\stack\Models\Ledger\V2LogTransaction](../../Models/ledger/V2LogTransaction.md) | :heavy_check_mark:                                                                        | Transaction structure as it appears in log payloads                                       |
| `v2LogTransaction1`                                                                       | [\formance\stack\Models\Ledger\V2LogTransaction](../../Models/ledger/V2LogTransaction.md) | :heavy_check_mark:                                                                        | Transaction structure as it appears in log payloads                                       |