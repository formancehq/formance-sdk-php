# V2LogDataInsertedSchema

Payload for INSERTED_SCHEMA log entries. Contains the schema that was inserted into the ledger.


## Fields

| Field                                              | Type                                               | Required                                           | Description                                        |
| -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- |
| `schema`                                           | [Shared\V2Schema](../../Models/Shared/V2Schema.md) | :heavy_check_mark:                                 | Complete schema structure with metadata            |