# Formance\AccountsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMetadataToAccount()**](AccountsApi.md#addMetadataToAccount) | **POST** /api/ledger/{ledger}/accounts/{address}/metadata | Add metadata to an account. |
| [**countAccounts()**](AccountsApi.md#countAccounts) | **HEAD** /api/ledger/{ledger}/accounts | Count the accounts from a ledger. |
| [**getAccount()**](AccountsApi.md#getAccount) | **GET** /api/ledger/{ledger}/accounts/{address} | Get account by its address. |
| [**listAccounts()**](AccountsApi.md#listAccounts) | **GET** /api/ledger/{ledger}/accounts | List accounts from a ledger. |


## `addMetadataToAccount()`

```php
addMetadataToAccount($ledger, $address, $request_body)
```

Add metadata to an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = ledger001; // string | Name of the ledger.
$address = users:001; // string | Exact address of the account. It must match the following regular expressions pattern: ``` ^\\w+(:\\w+)*$ ```
$request_body = NULL; // array<string,mixed> | metadata

try {
    $apiInstance->addMetadataToAccount($ledger, $address, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->addMetadataToAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **address** | **string**| Exact address of the account. It must match the following regular expressions pattern: &#x60;&#x60;&#x60; ^\\w+(:\\w+)*$ &#x60;&#x60;&#x60; | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| metadata | |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countAccounts()`

```php
countAccounts($ledger, $address, $metadata)
```

Count the accounts from a ledger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = ledger001; // string | Name of the ledger.
$address = users:.+; // string | Filter accounts by address pattern (regular expression placed between ^ and $).
$metadata = metadata[key]=value1&metadata[a.nested.key]=value2; // object | Filter accounts by metadata key value pairs. Nested objects can be used as seen in the example below.

try {
    $apiInstance->countAccounts($ledger, $address, $metadata);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->countAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **address** | **string**| Filter accounts by address pattern (regular expression placed between ^ and $). | [optional] |
| **metadata** | [**object**](../Model/.md)| Filter accounts by metadata key value pairs. Nested objects can be used as seen in the example below. | [optional] |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccount()`

```php
getAccount($ledger, $address): \Formance\Model\GetAccount200Response
```

Get account by its address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = ledger001; // string | Name of the ledger.
$address = users:001; // string | Exact address of the account. It must match the following regular expressions pattern: ``` ^\\w+(:\\w+)*$ ```

try {
    $result = $apiInstance->getAccount($ledger, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **address** | **string**| Exact address of the account. It must match the following regular expressions pattern: &#x60;&#x60;&#x60; ^\\w+(:\\w+)*$ &#x60;&#x60;&#x60; | |

### Return type

[**\Formance\Model\GetAccount200Response**](../Model/GetAccount200Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccounts()`

```php
listAccounts($ledger, $page_size, $after, $address, $metadata, $balance, $balance_operator, $pagination_token): \Formance\Model\ListAccounts200Response
```

List accounts from a ledger.

List accounts from a ledger, sorted by address in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = ledger001; // string | Name of the ledger.
$page_size = 100; // int | The maximum number of results to return per page
$after = users:003; // string | Pagination cursor, will return accounts after given address, in descending order.
$address = users:.+; // string | Filter accounts by address pattern (regular expression placed between ^ and $).
$metadata = metadata[key]=value1&metadata[a.nested.key]=value2; // object | Filter accounts by metadata key value pairs. Nested objects can be used as seen in the example below.
$balance = 2400; // int | Filter accounts by their balance (default operator is gte)
$balance_operator = gte; // string | Operator used for the filtering of balances can be greater than/equal, less than/equal, greater than, less than, or equal
$pagination_token = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results.  Set to the value of previous for the previous page of results. No other parameters can be set when the pagination token is set.

try {
    $result = $apiInstance->listAccounts($ledger, $page_size, $after, $address, $metadata, $balance, $balance_operator, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **page_size** | **int**| The maximum number of results to return per page | [optional] [default to 15] |
| **after** | **string**| Pagination cursor, will return accounts after given address, in descending order. | [optional] |
| **address** | **string**| Filter accounts by address pattern (regular expression placed between ^ and $). | [optional] |
| **metadata** | [**object**](../Model/.md)| Filter accounts by metadata key value pairs. Nested objects can be used as seen in the example below. | [optional] |
| **balance** | **int**| Filter accounts by their balance (default operator is gte) | [optional] |
| **balance_operator** | **string**| Operator used for the filtering of balances can be greater than/equal, less than/equal, greater than, less than, or equal | [optional] |
| **pagination_token** | **string**| Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results.  Set to the value of previous for the previous page of results. No other parameters can be set when the pagination token is set. | [optional] |

### Return type

[**\Formance\Model\ListAccounts200Response**](../Model/ListAccounts200Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
