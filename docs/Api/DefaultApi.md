# Formance\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBalance()**](DefaultApi.md#createBalance) | **POST** /api/wallets/wallets/{id}/balances | Create a balance |
| [**getBalance()**](DefaultApi.md#getBalance) | **GET** /api/wallets/wallets/{id}/balances/{balanceName} | Get detailed balance |
| [**getServerInfo()**](DefaultApi.md#getServerInfo) | **GET** /api/auth/_info | Get server info |
| [**listBalances()**](DefaultApi.md#listBalances) | **GET** /api/wallets/wallets/{id}/balances | List balances of a wallet |
| [**searchgetServerInfo()**](DefaultApi.md#searchgetServerInfo) | **GET** /api/search/_info | Get server info |
| [**walletsgetServerInfo()**](DefaultApi.md#walletsgetServerInfo) | **GET** /api/wallets/_info | Get server info |


## `createBalance()`

```php
createBalance($id, $body): \Formance\Model\CreateBalanceResponse
```

Create a balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \Formance\Model\Balance(); // \Formance\Model\Balance

try {
    $result = $apiInstance->createBalance($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **\Formance\Model\Balance**|  | [optional] |

### Return type

[**\Formance\Model\CreateBalanceResponse**](../Model/CreateBalanceResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalance()`

```php
getBalance($id, $balance_name): \Formance\Model\GetBalanceResponse
```

Get detailed balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$balance_name = 'balance_name_example'; // string

try {
    $result = $apiInstance->getBalance($id, $balance_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **balance_name** | **string**|  | |

### Return type

[**\Formance\Model\GetBalanceResponse**](../Model/GetBalanceResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerInfo()`

```php
getServerInfo(): \Formance\Model\ServerInfo
```

Get server info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getServerInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getServerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Formance\Model\ServerInfo**](../Model/ServerInfo.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBalances()`

```php
listBalances($id): \Formance\Model\ListBalancesResponse
```

List balances of a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listBalances($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Formance\Model\ListBalancesResponse**](../Model/ListBalancesResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchgetServerInfo()`

```php
searchgetServerInfo(): \Formance\Model\ServerInfo
```

Get server info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchgetServerInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchgetServerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Formance\Model\ServerInfo**](../Model/ServerInfo.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletsgetServerInfo()`

```php
walletsgetServerInfo(): \Formance\Model\ServerInfo
```

Get server info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->walletsgetServerInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletsgetServerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Formance\Model\ServerInfo**](../Model/ServerInfo.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
