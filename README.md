# OpenAPIClient-php

Open, modular foundation for unique payments flows

# Introduction
This API is documented in **OpenAPI format**.

# Authentication
Formance Stack offers one forms of authentication:
  - OAuth2
OAuth2 - an open protocol to allow secure authorization in a simple
and standard method from web, mobile and desktop applications.
<SecurityDefinitions />


For more information, please visit [https://www.formance.com](https://www.formance.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/formancehq/formance-sdk-php.git"
    }
  ],
  "require": {
    "formancehq/formance-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**addMetadataToAccount**](docs/Api/AccountsApi.md#addmetadatatoaccount) | **POST** /api/ledger/{ledger}/accounts/{address}/metadata | Add metadata to an account.
*AccountsApi* | [**countAccounts**](docs/Api/AccountsApi.md#countaccounts) | **HEAD** /api/ledger/{ledger}/accounts | Count the accounts from a ledger.
*AccountsApi* | [**getAccount**](docs/Api/AccountsApi.md#getaccount) | **GET** /api/ledger/{ledger}/accounts/{address} | Get account by its address.
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /api/ledger/{ledger}/accounts | List accounts from a ledger.
*BalancesApi* | [**getBalances**](docs/Api/BalancesApi.md#getbalances) | **GET** /api/ledger/{ledger}/balances | Get the balances from a ledger&#39;s account
*BalancesApi* | [**getBalancesAggregated**](docs/Api/BalancesApi.md#getbalancesaggregated) | **GET** /api/ledger/{ledger}/aggregate/balances | Get the aggregated balances from selected accounts
*ClientsApi* | [**addScopeToClient**](docs/Api/ClientsApi.md#addscopetoclient) | **PUT** /api/auth/clients/{clientId}/scopes/{scopeId} | Add scope to client
*ClientsApi* | [**createClient**](docs/Api/ClientsApi.md#createclient) | **POST** /api/auth/clients | Create client
*ClientsApi* | [**createSecret**](docs/Api/ClientsApi.md#createsecret) | **POST** /api/auth/clients/{clientId}/secrets | Add a secret to a client
*ClientsApi* | [**deleteClient**](docs/Api/ClientsApi.md#deleteclient) | **DELETE** /api/auth/clients/{clientId} | Delete client
*ClientsApi* | [**deleteScopeFromClient**](docs/Api/ClientsApi.md#deletescopefromclient) | **DELETE** /api/auth/clients/{clientId}/scopes/{scopeId} | Delete scope from client
*ClientsApi* | [**deleteSecret**](docs/Api/ClientsApi.md#deletesecret) | **DELETE** /api/auth/clients/{clientId}/secrets/{secretId} | Delete a secret from a client
*ClientsApi* | [**listClients**](docs/Api/ClientsApi.md#listclients) | **GET** /api/auth/clients | List clients
*ClientsApi* | [**readClient**](docs/Api/ClientsApi.md#readclient) | **GET** /api/auth/clients/{clientId} | Read client
*ClientsApi* | [**updateClient**](docs/Api/ClientsApi.md#updateclient) | **PUT** /api/auth/clients/{clientId} | Update client
*DefaultApi* | [**getServerInfo**](docs/Api/DefaultApi.md#getserverinfo) | **GET** /api/search/_info | Get server info
*MappingApi* | [**getMapping**](docs/Api/MappingApi.md#getmapping) | **GET** /api/ledger/{ledger}/mapping | Get the mapping of a ledger.
*MappingApi* | [**updateMapping**](docs/Api/MappingApi.md#updatemapping) | **PUT** /api/ledger/{ledger}/mapping | Update the mapping of a ledger.
*PaymentsApi* | [**connectorsStripeTransfer**](docs/Api/PaymentsApi.md#connectorsstripetransfer) | **POST** /api/payments/connectors/stripe/transfer | Transfer funds between Stripe accounts
*PaymentsApi* | [**getAllConnectors**](docs/Api/PaymentsApi.md#getallconnectors) | **GET** /api/payments/connectors | Get all installed connectors
*PaymentsApi* | [**getAllConnectorsConfigs**](docs/Api/PaymentsApi.md#getallconnectorsconfigs) | **GET** /api/payments/connectors/configs | Get all available connectors configs
*PaymentsApi* | [**getConnectorTask**](docs/Api/PaymentsApi.md#getconnectortask) | **GET** /api/payments/connectors/{connector}/tasks/{taskId} | Read a specific task of the connector
*PaymentsApi* | [**getPayment**](docs/Api/PaymentsApi.md#getpayment) | **GET** /api/payments/payments/{paymentId} | Returns a payment.
*PaymentsApi* | [**installConnector**](docs/Api/PaymentsApi.md#installconnector) | **POST** /api/payments/connectors/{connector} | Install connector
*PaymentsApi* | [**listConnectorTasks**](docs/Api/PaymentsApi.md#listconnectortasks) | **GET** /api/payments/connectors/{connector}/tasks | List connector tasks
*PaymentsApi* | [**listPayments**](docs/Api/PaymentsApi.md#listpayments) | **GET** /api/payments/payments | Returns a list of payments.
*PaymentsApi* | [**readConnectorConfig**](docs/Api/PaymentsApi.md#readconnectorconfig) | **GET** /api/payments/connectors/{connector}/config | Read connector config
*PaymentsApi* | [**resetConnector**](docs/Api/PaymentsApi.md#resetconnector) | **POST** /api/payments/connectors/{connector}/reset | Reset connector
*PaymentsApi* | [**uninstallConnector**](docs/Api/PaymentsApi.md#uninstallconnector) | **DELETE** /api/payments/connectors/{connector} | Uninstall connector
*ScopesApi* | [**addTransientScope**](docs/Api/ScopesApi.md#addtransientscope) | **PUT** /api/auth/scopes/{scopeId}/transient/{transientScopeId} | Add a transient scope to a scope
*ScopesApi* | [**createScope**](docs/Api/ScopesApi.md#createscope) | **POST** /api/auth/scopes | Create scope
*ScopesApi* | [**deleteScope**](docs/Api/ScopesApi.md#deletescope) | **DELETE** /api/auth/scopes/{scopeId} | Delete scope
*ScopesApi* | [**deleteTransientScope**](docs/Api/ScopesApi.md#deletetransientscope) | **DELETE** /api/auth/scopes/{scopeId}/transient/{transientScopeId} | Delete a transient scope from a scope
*ScopesApi* | [**listScopes**](docs/Api/ScopesApi.md#listscopes) | **GET** /api/auth/scopes | List scopes
*ScopesApi* | [**readScope**](docs/Api/ScopesApi.md#readscope) | **GET** /api/auth/scopes/{scopeId} | Read scope
*ScopesApi* | [**updateScope**](docs/Api/ScopesApi.md#updatescope) | **PUT** /api/auth/scopes/{scopeId} | Update scope
*ScriptApi* | [**runScript**](docs/Api/ScriptApi.md#runscript) | **POST** /api/ledger/{ledger}/script | Execute a Numscript.
*SearchApi* | [**search**](docs/Api/SearchApi.md#search) | **POST** /api/search/ | Search
*ServerApi* | [**getInfo**](docs/Api/ServerApi.md#getinfo) | **GET** /api/ledger/_info | Show server information.
*StatsApi* | [**readStats**](docs/Api/StatsApi.md#readstats) | **GET** /api/ledger/{ledger}/stats | Get Stats
*TransactionsApi* | [**addMetadataOnTransaction**](docs/Api/TransactionsApi.md#addmetadataontransaction) | **POST** /api/ledger/{ledger}/transactions/{txid}/metadata | Set the metadata of a transaction by its ID.
*TransactionsApi* | [**countTransactions**](docs/Api/TransactionsApi.md#counttransactions) | **HEAD** /api/ledger/{ledger}/transactions | Count the transactions from a ledger.
*TransactionsApi* | [**createTransaction**](docs/Api/TransactionsApi.md#createtransaction) | **POST** /api/ledger/{ledger}/transactions | Create a new transaction to a ledger.
*TransactionsApi* | [**createTransactions**](docs/Api/TransactionsApi.md#createtransactions) | **POST** /api/ledger/{ledger}/transactions/batch | Create a new batch of transactions to a ledger.
*TransactionsApi* | [**getTransaction**](docs/Api/TransactionsApi.md#gettransaction) | **GET** /api/ledger/{ledger}/transactions/{txid} | Get transaction from a ledger by its ID.
*TransactionsApi* | [**listTransactions**](docs/Api/TransactionsApi.md#listtransactions) | **GET** /api/ledger/{ledger}/transactions | List transactions from a ledger.
*TransactionsApi* | [**revertTransaction**](docs/Api/TransactionsApi.md#reverttransaction) | **POST** /api/ledger/{ledger}/transactions/{txid}/revert | Revert a ledger transaction by its ID.
*UsersApi* | [**listUsers**](docs/Api/UsersApi.md#listusers) | **GET** /api/auth/users | List users
*UsersApi* | [**readUser**](docs/Api/UsersApi.md#readuser) | **GET** /api/auth/users/{userId} | Read user
*WebhooksApi* | [**activateOneConfig**](docs/Api/WebhooksApi.md#activateoneconfig) | **PUT** /api/webhooks/configs/{id}/activate | Activate one config
*WebhooksApi* | [**changeOneConfigSecret**](docs/Api/WebhooksApi.md#changeoneconfigsecret) | **PUT** /api/webhooks/configs/{id}/secret/change | Change the signing secret of a config
*WebhooksApi* | [**deactivateOneConfig**](docs/Api/WebhooksApi.md#deactivateoneconfig) | **PUT** /api/webhooks/configs/{id}/deactivate | Deactivate one config
*WebhooksApi* | [**deleteOneConfig**](docs/Api/WebhooksApi.md#deleteoneconfig) | **DELETE** /api/webhooks/configs/{id} | Delete one config
*WebhooksApi* | [**getManyConfigs**](docs/Api/WebhooksApi.md#getmanyconfigs) | **GET** /api/webhooks/configs | Get many configs
*WebhooksApi* | [**insertOneConfig**](docs/Api/WebhooksApi.md#insertoneconfig) | **POST** /api/webhooks/configs | Insert a new config
*WebhooksApi* | [**testOneConfig**](docs/Api/WebhooksApi.md#testoneconfig) | **GET** /api/webhooks/configs/{id}/test | Test one config

## Models

- [Account](docs/Model/Account.md)
- [AccountWithVolumesAndBalances](docs/Model/AccountWithVolumesAndBalances.md)
- [AddMetadataToAccount409Response](docs/Model/AddMetadataToAccount409Response.md)
- [Attempt](docs/Model/Attempt.md)
- [AttemptResponse](docs/Model/AttemptResponse.md)
- [BankingCircleConfig](docs/Model/BankingCircleConfig.md)
- [ChangeOneConfigSecretRequest](docs/Model/ChangeOneConfigSecretRequest.md)
- [Client](docs/Model/Client.md)
- [ClientAllOf](docs/Model/ClientAllOf.md)
- [ClientOptions](docs/Model/ClientOptions.md)
- [ClientSecret](docs/Model/ClientSecret.md)
- [Config](docs/Model/Config.md)
- [ConfigInfo](docs/Model/ConfigInfo.md)
- [ConfigInfoResponse](docs/Model/ConfigInfoResponse.md)
- [ConfigResponse](docs/Model/ConfigResponse.md)
- [ConfigUser](docs/Model/ConfigUser.md)
- [ConnectorBaseInfo](docs/Model/ConnectorBaseInfo.md)
- [ConnectorConfig](docs/Model/ConnectorConfig.md)
- [ConnectorTaskBase](docs/Model/ConnectorTaskBase.md)
- [Connectors](docs/Model/Connectors.md)
- [Contract](docs/Model/Contract.md)
- [CreateClientResponse](docs/Model/CreateClientResponse.md)
- [CreateScopeResponse](docs/Model/CreateScopeResponse.md)
- [CreateSecretResponse](docs/Model/CreateSecretResponse.md)
- [CreateTransaction400Response](docs/Model/CreateTransaction400Response.md)
- [CreateTransaction409Response](docs/Model/CreateTransaction409Response.md)
- [CreateTransactions400Response](docs/Model/CreateTransactions400Response.md)
- [CurrencyCloudConfig](docs/Model/CurrencyCloudConfig.md)
- [Cursor](docs/Model/Cursor.md)
- [DummyPayConfig](docs/Model/DummyPayConfig.md)
- [ErrorCode](docs/Model/ErrorCode.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [GetAccount200Response](docs/Model/GetAccount200Response.md)
- [GetAccount400Response](docs/Model/GetAccount400Response.md)
- [GetBalances200Response](docs/Model/GetBalances200Response.md)
- [GetBalances200ResponseCursor](docs/Model/GetBalances200ResponseCursor.md)
- [GetBalances200ResponseCursorAllOf](docs/Model/GetBalances200ResponseCursorAllOf.md)
- [GetBalancesAggregated200Response](docs/Model/GetBalancesAggregated200Response.md)
- [GetBalancesAggregated400Response](docs/Model/GetBalancesAggregated400Response.md)
- [GetManyConfigs200Response](docs/Model/GetManyConfigs200Response.md)
- [GetManyConfigs200ResponseCursor](docs/Model/GetManyConfigs200ResponseCursor.md)
- [GetManyConfigs200ResponseCursorAllOf](docs/Model/GetManyConfigs200ResponseCursorAllOf.md)
- [GetPaymentResponse](docs/Model/GetPaymentResponse.md)
- [GetTransaction400Response](docs/Model/GetTransaction400Response.md)
- [GetTransaction404Response](docs/Model/GetTransaction404Response.md)
- [LedgerStorage](docs/Model/LedgerStorage.md)
- [ListAccounts200Response](docs/Model/ListAccounts200Response.md)
- [ListAccounts200ResponseCursor](docs/Model/ListAccounts200ResponseCursor.md)
- [ListAccounts200ResponseCursorAllOf](docs/Model/ListAccounts200ResponseCursorAllOf.md)
- [ListAccounts400Response](docs/Model/ListAccounts400Response.md)
- [ListClientsResponse](docs/Model/ListClientsResponse.md)
- [ListConnectorTasks200ResponseInner](docs/Model/ListConnectorTasks200ResponseInner.md)
- [ListConnectorsConfigsResponse](docs/Model/ListConnectorsConfigsResponse.md)
- [ListConnectorsConfigsResponseConnector](docs/Model/ListConnectorsConfigsResponseConnector.md)
- [ListConnectorsConfigsResponseConnectorKey](docs/Model/ListConnectorsConfigsResponseConnectorKey.md)
- [ListConnectorsResponse](docs/Model/ListConnectorsResponse.md)
- [ListPaymentsResponse](docs/Model/ListPaymentsResponse.md)
- [ListScopesResponse](docs/Model/ListScopesResponse.md)
- [ListTransactions200Response](docs/Model/ListTransactions200Response.md)
- [ListTransactions200ResponseCursor](docs/Model/ListTransactions200ResponseCursor.md)
- [ListTransactions200ResponseCursorAllOf](docs/Model/ListTransactions200ResponseCursorAllOf.md)
- [ListUsersResponse](docs/Model/ListUsersResponse.md)
- [Mapping](docs/Model/Mapping.md)
- [MappingResponse](docs/Model/MappingResponse.md)
- [ModulrConfig](docs/Model/ModulrConfig.md)
- [Payment](docs/Model/Payment.md)
- [Posting](docs/Model/Posting.md)
- [Query](docs/Model/Query.md)
- [ReadClientResponse](docs/Model/ReadClientResponse.md)
- [ReadUserResponse](docs/Model/ReadUserResponse.md)
- [Response](docs/Model/Response.md)
- [ResponseCursor](docs/Model/ResponseCursor.md)
- [ResponseCursorTotal](docs/Model/ResponseCursorTotal.md)
- [RunScript400Response](docs/Model/RunScript400Response.md)
- [Scope](docs/Model/Scope.md)
- [ScopeAllOf](docs/Model/ScopeAllOf.md)
- [ScopeOptions](docs/Model/ScopeOptions.md)
- [Script](docs/Model/Script.md)
- [ScriptResult](docs/Model/ScriptResult.md)
- [Secret](docs/Model/Secret.md)
- [SecretAllOf](docs/Model/SecretAllOf.md)
- [SecretOptions](docs/Model/SecretOptions.md)
- [ServerInfo](docs/Model/ServerInfo.md)
- [Stats](docs/Model/Stats.md)
- [StatsResponse](docs/Model/StatsResponse.md)
- [StripeConfig](docs/Model/StripeConfig.md)
- [StripeTask](docs/Model/StripeTask.md)
- [StripeTransferRequest](docs/Model/StripeTransferRequest.md)
- [TaskDescriptorBankingCircle](docs/Model/TaskDescriptorBankingCircle.md)
- [TaskDescriptorBankingCircleAllOf](docs/Model/TaskDescriptorBankingCircleAllOf.md)
- [TaskDescriptorBankingCircleAllOfDescriptor](docs/Model/TaskDescriptorBankingCircleAllOfDescriptor.md)
- [TaskDescriptorCurrencyCloud](docs/Model/TaskDescriptorCurrencyCloud.md)
- [TaskDescriptorCurrencyCloudAllOf](docs/Model/TaskDescriptorCurrencyCloudAllOf.md)
- [TaskDescriptorCurrencyCloudAllOfDescriptor](docs/Model/TaskDescriptorCurrencyCloudAllOfDescriptor.md)
- [TaskDescriptorDummyPay](docs/Model/TaskDescriptorDummyPay.md)
- [TaskDescriptorDummyPayAllOf](docs/Model/TaskDescriptorDummyPayAllOf.md)
- [TaskDescriptorDummyPayAllOfDescriptor](docs/Model/TaskDescriptorDummyPayAllOfDescriptor.md)
- [TaskDescriptorModulr](docs/Model/TaskDescriptorModulr.md)
- [TaskDescriptorModulrAllOf](docs/Model/TaskDescriptorModulrAllOf.md)
- [TaskDescriptorModulrAllOfDescriptor](docs/Model/TaskDescriptorModulrAllOfDescriptor.md)
- [TaskDescriptorStripe](docs/Model/TaskDescriptorStripe.md)
- [TaskDescriptorStripeAllOf](docs/Model/TaskDescriptorStripeAllOf.md)
- [TaskDescriptorStripeAllOfDescriptor](docs/Model/TaskDescriptorStripeAllOfDescriptor.md)
- [TaskDescriptorWise](docs/Model/TaskDescriptorWise.md)
- [TaskDescriptorWiseAllOf](docs/Model/TaskDescriptorWiseAllOf.md)
- [TaskDescriptorWiseAllOfDescriptor](docs/Model/TaskDescriptorWiseAllOfDescriptor.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionData](docs/Model/TransactionData.md)
- [TransactionResponse](docs/Model/TransactionResponse.md)
- [Transactions](docs/Model/Transactions.md)
- [TransactionsResponse](docs/Model/TransactionsResponse.md)
- [User](docs/Model/User.md)
- [Volume](docs/Model/Volume.md)
- [WebhooksConfig](docs/Model/WebhooksConfig.md)
- [WebhooksCursor](docs/Model/WebhooksCursor.md)
- [WiseConfig](docs/Model/WiseConfig.md)

## Authorization

### Authorization

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@formance.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.0.0-rc.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
