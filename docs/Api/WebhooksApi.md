# Formance\WebhooksApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateOneConfig()**](WebhooksApi.md#activateOneConfig) | **PUT** /api/webhooks/configs/{id}/activate | Activate one config |
| [**changeOneConfigSecret()**](WebhooksApi.md#changeOneConfigSecret) | **PUT** /api/webhooks/configs/{id}/secret/change | Change the signing secret of a config |
| [**deactivateOneConfig()**](WebhooksApi.md#deactivateOneConfig) | **PUT** /api/webhooks/configs/{id}/deactivate | Deactivate one config |
| [**deleteOneConfig()**](WebhooksApi.md#deleteOneConfig) | **DELETE** /api/webhooks/configs/{id} | Delete one config |
| [**getManyConfigs()**](WebhooksApi.md#getManyConfigs) | **GET** /api/webhooks/configs | Get many configs |
| [**insertOneConfig()**](WebhooksApi.md#insertOneConfig) | **POST** /api/webhooks/configs | Insert a new config |
| [**testOneConfig()**](WebhooksApi.md#testOneConfig) | **GET** /api/webhooks/configs/{id}/test | Test one config |


## `activateOneConfig()`

```php
activateOneConfig($id): \Formance\Model\ConfigActivatedResponse
```

Activate one config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4997257d-dfb6-445b-929c-cbe2ab182818; // string | Config ID

try {
    $result = $apiInstance->activateOneConfig($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->activateOneConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Config ID | |

### Return type

[**\Formance\Model\ConfigActivatedResponse**](../Model/ConfigActivatedResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeOneConfigSecret()`

```php
changeOneConfigSecret($id, $change_one_config_secret_request): \Formance\Model\ConfigActivatedResponse
```

Change the signing secret of a config

Change the signing secret of the endpoint of a config.  If not passed or empty, a secret is automatically generated. The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4997257d-dfb6-445b-929c-cbe2ab182818; // string | Config ID
$change_one_config_secret_request = new \Formance\Model\ChangeOneConfigSecretRequest(); // \Formance\Model\ChangeOneConfigSecretRequest

try {
    $result = $apiInstance->changeOneConfigSecret($id, $change_one_config_secret_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->changeOneConfigSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Config ID | |
| **change_one_config_secret_request** | [**\Formance\Model\ChangeOneConfigSecretRequest**](../Model/ChangeOneConfigSecretRequest.md)|  | [optional] |

### Return type

[**\Formance\Model\ConfigActivatedResponse**](../Model/ConfigActivatedResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateOneConfig()`

```php
deactivateOneConfig($id): \Formance\Model\ConfigDeactivatedResponse
```

Deactivate one config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4997257d-dfb6-445b-929c-cbe2ab182818; // string | Config ID

try {
    $result = $apiInstance->deactivateOneConfig($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deactivateOneConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Config ID | |

### Return type

[**\Formance\Model\ConfigDeactivatedResponse**](../Model/ConfigDeactivatedResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOneConfig()`

```php
deleteOneConfig($id)
```

Delete one config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4997257d-dfb6-445b-929c-cbe2ab182818; // string | Config ID

try {
    $apiInstance->deleteOneConfig($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteOneConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Config ID | |

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

## `getManyConfigs()`

```php
getManyConfigs($id, $endpoint): \Formance\Model\GetManyConfigs200Response
```

Get many configs

Sorted by updated date descending

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4997257d-dfb6-445b-929c-cbe2ab182818; // string | Optional filter by Config ID
$endpoint = https://example.com; // string | Optional filter by endpoint URL

try {
    $result = $apiInstance->getManyConfigs($id, $endpoint);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getManyConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Optional filter by Config ID | [optional] |
| **endpoint** | **string**| Optional filter by endpoint URL | [optional] |

### Return type

[**\Formance\Model\GetManyConfigs200Response**](../Model/GetManyConfigs200Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertOneConfig()`

```php
insertOneConfig($config_user): \Formance\Model\ConfigActivatedResponse
```

Insert a new config

Insert a new config.  The endpoint should be a valid https URL and be unique.  The secret is the endpoint's verification secret. If not passed or empty, a secret is automatically generated. The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)  All eventTypes are converted to lower-case when inserted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_user = new \Formance\Model\ConfigUser(); // \Formance\Model\ConfigUser

try {
    $result = $apiInstance->insertOneConfig($config_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->insertOneConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_user** | [**\Formance\Model\ConfigUser**](../Model/ConfigUser.md)|  | |

### Return type

[**\Formance\Model\ConfigActivatedResponse**](../Model/ConfigActivatedResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testOneConfig()`

```php
testOneConfig($id): \Formance\Model\AttemptResponse
```

Test one config

Test one config by sending a webhook to its endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Formance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Formance\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4997257d-dfb6-445b-929c-cbe2ab182818; // string | Config ID

try {
    $result = $apiInstance->testOneConfig($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->testOneConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Config ID | |

### Return type

[**\Formance\Model\AttemptResponse**](../Model/AttemptResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
