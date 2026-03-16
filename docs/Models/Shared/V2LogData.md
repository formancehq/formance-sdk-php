# V2LogData

The payload of the log entry. Structure depends on the log type:
- NEW_TRANSACTION: V2LogDataNewTransaction
- SET_METADATA: V2LogDataSetMetadata
- REVERTED_TRANSACTION: V2LogDataRevertedTransaction
- DELETE_METADATA: V2LogDataDeleteMetadata
- INSERTED_SCHEMA: V2LogDataInsertedSchema



## Supported Types

### `Shared\V2LogDataNewTransaction`

```php
/**
* @var Shared\V2LogDataNewTransaction
*/
Shared\V2LogDataNewTransaction $value = /* values here */
```

### `Shared\V2LogDataSetMetadata`

```php
/**
* @var Shared\V2LogDataSetMetadata
*/
Shared\V2LogDataSetMetadata $value = /* values here */
```

### `Shared\V2LogDataRevertedTransaction`

```php
/**
* @var Shared\V2LogDataRevertedTransaction
*/
Shared\V2LogDataRevertedTransaction $value = /* values here */
```

### `Shared\V2LogDataDeleteMetadata`

```php
/**
* @var Shared\V2LogDataDeleteMetadata
*/
Shared\V2LogDataDeleteMetadata $value = /* values here */
```

### `Shared\V2LogDataInsertedSchema`

```php
/**
* @var Shared\V2LogDataInsertedSchema
*/
Shared\V2LogDataInsertedSchema $value = /* values here */
```

