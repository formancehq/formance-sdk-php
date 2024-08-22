# ErrorResponse

Error


## Fields

| Field                                                                                        | Type                                                                                         | Required                                                                                     | Description                                                                                  | Example                                                                                      |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `errorCode`                                                                                  | [Shared\ErrorsEnum](../../Models/Shared/ErrorsEnum.md)                                       | :heavy_check_mark:                                                                           | N/A                                                                                          | INSUFFICIENT_FUND                                                                            |
| `errorMessage`                                                                               | *string*                                                                                     | :heavy_check_mark:                                                                           | N/A                                                                                          | [INSUFFICIENT_FUND] account had insufficient funds                                           |
| `details`                                                                                    | *?string*                                                                                    | :heavy_minus_sign:                                                                           | N/A                                                                                          | https://play.numscript.org/?payload=eyJlcnJvciI6ImFjY291bnQgaGFkIGluc3VmZmljaWVudCBmdW5kcyJ9 |