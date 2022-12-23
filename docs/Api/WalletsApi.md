# Formance\WalletsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**confirmHold()**](WalletsApi.md#confirmHold) | **POST** /api/wallets/wallets/{id}/holds/{hold_id}/confirm | Confirm a hold |
| [**createWallet()**](WalletsApi.md#createWallet) | **POST** /api/wallets/wallets | Create a new wallet |
| [**creditWallet()**](WalletsApi.md#creditWallet) | **POST** /api/wallets/wallets/{id}/credit | Credit a wallet |
| [**debitWallet()**](WalletsApi.md#debitWallet) | **POST** /api/wallets/wallets/{id}/debit | Debit a wallet |
| [**getHolds()**](WalletsApi.md#getHolds) | **GET** /api/wallets/wallets/{id}/holds | Get all holds for a wallet |
| [**getWallet()**](WalletsApi.md#getWallet) | **GET** /api/wallets/wallets/{id} | Get a wallet |
| [**getWallets()**](WalletsApi.md#getWallets) | **GET** /api/wallets/wallets | Get all wallets |
| [**updateWallet()**](WalletsApi.md#updateWallet) | **PATCH** /api/wallets/wallets/{id} | Update a wallet |
| [**voidHold()**](WalletsApi.md#voidHold) | **POST** /api/wallets/wallets/{id}/holds/{hold_id}/void | Cancel a hold |


## `confirmHold()`

```php
confirmHold($id, $hold_id)
```

Confirm a hold

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$hold_id = 'hold_id_example'; // string

try {
    $apiInstance->confirmHold($id, $hold_id);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->confirmHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **hold_id** | **string**|  | |

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

## `createWallet()`

```php
createWallet($create_wallet_request): \Formance\Model\CreateWalletResponse
```

Create a new wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_wallet_request = new \Formance\Model\CreateWalletRequest(); // \Formance\Model\CreateWalletRequest

try {
    $result = $apiInstance->createWallet($create_wallet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_wallet_request** | [**\Formance\Model\CreateWalletRequest**](../Model/CreateWalletRequest.md)|  | [optional] |

### Return type

[**\Formance\Model\CreateWalletResponse**](../Model/CreateWalletResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditWallet()`

```php
creditWallet($id, $credit_wallet_request)
```

Credit a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$credit_wallet_request = {"amount":{"asset":"USD/2","amount":100}}; // \Formance\Model\CreditWalletRequest

try {
    $apiInstance->creditWallet($id, $credit_wallet_request);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->creditWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **credit_wallet_request** | [**\Formance\Model\CreditWalletRequest**](../Model/CreditWalletRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `debitWallet()`

```php
debitWallet($id, $debit_wallet_request): \Formance\Model\DebitWalletResponse
```

Debit a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$debit_wallet_request = {"amount":{"asset":"USD/2","amount":100},"pending":true}; // \Formance\Model\DebitWalletRequest

try {
    $result = $apiInstance->debitWallet($id, $debit_wallet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->debitWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **debit_wallet_request** | [**\Formance\Model\DebitWalletRequest**](../Model/DebitWalletRequest.md)|  | [optional] |

### Return type

[**\Formance\Model\DebitWalletResponse**](../Model/DebitWalletResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHolds()`

```php
getHolds($id): \Formance\Model\GetHoldsResponse
```

Get all holds for a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getHolds($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getHolds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Formance\Model\GetHoldsResponse**](../Model/GetHoldsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWallet()`

```php
getWallet($id): \Formance\Model\GetWalletResponse
```

Get a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWallet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Formance\Model\GetWalletResponse**](../Model/GetWalletResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWallets()`

```php
getWallets($page_size, $after, $pagination_token): \Formance\Model\GetWalletsResponse
```

Get all wallets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 100; // int | The maximum number of results to return per page
$after = users:003; // string | Pagination cursor, will return accounts after given address, in descending order.
$pagination_token = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when the pagination token is set.

try {
    $result = $apiInstance->getWallets($page_size, $after, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWallets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_size** | **int**| The maximum number of results to return per page | [optional] [default to 15] |
| **after** | **string**| Pagination cursor, will return accounts after given address, in descending order. | [optional] |
| **pagination_token** | **string**| Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when the pagination token is set. | [optional] |

### Return type

[**\Formance\Model\GetWalletsResponse**](../Model/GetWalletsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWallet()`

```php
updateWallet($id, $update_wallet_request)
```

Update a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_wallet_request = new \Formance\Model\UpdateWalletRequest(); // \Formance\Model\UpdateWalletRequest

try {
    $apiInstance->updateWallet($id, $update_wallet_request);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->updateWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_wallet_request** | [**\Formance\Model\UpdateWalletRequest**](../Model/UpdateWalletRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidHold()`

```php
voidHold($id, $hold_id)
```

Cancel a hold

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$hold_id = 'hold_id_example'; // string

try {
    $apiInstance->voidHold($id, $hold_id);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->voidHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **hold_id** | **string**|  | |

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
