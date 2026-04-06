# V2LogDataInsertedSchema

Payload for INSERTED_SCHEMA log entries. Contains the schema that was inserted into the ledger.


## Fields

| Field                                                                             | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `v2SchemaData`                                                                    | [\formance\stack\Models\Ledger\V2SchemaData](../../Models/ledger/V2SchemaData.md) | :heavy_check_mark:                                                                | Complete schema structure with metadata                                           |