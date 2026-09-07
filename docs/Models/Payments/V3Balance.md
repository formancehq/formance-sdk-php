# V3Balance


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `accountID`                                                   | *string*                                                      | :heavy_check_mark:                                            | Identifier of the account this balance belongs to             |
| `asset`                                                       | *string*                                                      | :heavy_check_mark:                                            | Asset the balance is denominated in                           |
| `balance`                                                     | *\Brick\Math\BigInteger*                                      | :heavy_check_mark:                                            | Amount held, in the asset's smallest unit                     |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Start of the period this balance covers                       |
| `lastUpdatedAt`                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | When the balance was last refreshed from the provider         |