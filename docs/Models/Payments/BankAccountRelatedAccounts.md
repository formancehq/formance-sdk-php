# BankAccountRelatedAccounts


## Fields

| Field                                                                   | Type                                                                    | Required                                                                | Description                                                             |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `accountID`                                                             | *string*                                                                | :heavy_check_mark:                                                      | Identifier of the provider-side account                                 |
| `connectorID`                                                           | *string*                                                                | :heavy_check_mark:                                                      | Identifier of the connector holding the provider-side account           |
| `createdAt`                                                             | [\DateTime](https://www.php.net/manual/en/class.datetime.php)           | :heavy_check_mark:                                                      | When the bank account was forwarded to this provider                    |
| `id`                                                                    | *string*                                                                | :heavy_check_mark:                                                      | Unique identifier of the link between the bank account and the provider |
| `provider`                                                              | *string*                                                                | :heavy_check_mark:                                                      | Name of the payment provider behind the connector                       |