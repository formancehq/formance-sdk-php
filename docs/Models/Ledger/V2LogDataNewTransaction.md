# V2LogDataNewTransaction

Payload for NEW_TRANSACTION log entries. Contains the created transaction and any account metadata set during creation.


## Fields

| Field                                                                                     | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `accountMetadata`                                                                         | array<string, array<string, *string*>>                                                    | :heavy_check_mark:                                                                        | Metadata applied to accounts involved in the transaction                                  |
| `transaction`                                                                             | [\formance\stack\Models\Ledger\V2LogTransaction](../../Models/ledger/V2LogTransaction.md) | :heavy_check_mark:                                                                        | Transaction structure as it appears in log payloads                                       |