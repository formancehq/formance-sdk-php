# Data

The payload of the log entry. Structure depends on the log type:
- NEW_TRANSACTION: V2LogDataNewTransaction
- SET_METADATA: V2LogDataSetMetadata
- REVERTED_TRANSACTION: V2LogDataRevertedTransaction
- DELETE_METADATA: V2LogDataDeleteMetadata
- INSERTED_SCHEMA: V2LogDataInsertedSchema



## Supported Types

### `\formance\stack\Models\Ledger\V2LogDataNewTransaction`

```php
/**
* @var \formance\stack\Models\Ledger\V2LogDataNewTransaction
*/
\formance\stack\Models\Ledger\V2LogDataNewTransaction $value = /* values here */
```

### `\formance\stack\Models\Ledger\V2LogDataSetMetadata`

```php
/**
* @var \formance\stack\Models\Ledger\V2LogDataSetMetadata
*/
\formance\stack\Models\Ledger\V2LogDataSetMetadata $value = /* values here */
```

### `\formance\stack\Models\Ledger\V2LogDataRevertedTransaction`

```php
/**
* @var \formance\stack\Models\Ledger\V2LogDataRevertedTransaction
*/
\formance\stack\Models\Ledger\V2LogDataRevertedTransaction $value = /* values here */
```

### `\formance\stack\Models\Ledger\V2LogDataDeleteMetadata`

```php
/**
* @var \formance\stack\Models\Ledger\V2LogDataDeleteMetadata
*/
\formance\stack\Models\Ledger\V2LogDataDeleteMetadata $value = /* values here */
```

### `\formance\stack\Models\Ledger\V2LogDataInsertedSchema`

```php
/**
* @var \formance\stack\Models\Ledger\V2LogDataInsertedSchema
*/
\formance\stack\Models\Ledger\V2LogDataInsertedSchema $value = /* values here */
```

