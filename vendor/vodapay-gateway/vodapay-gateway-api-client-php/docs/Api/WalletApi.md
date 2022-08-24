# VodaPayGatewayClient\WalletApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**walletHealth()**](WalletApi.md#walletHealth) | **GET** /v2/Wallet | Health check.
[**walletPostBlock()**](WalletApi.md#walletPostBlock) | **POST** /v2/Wallet/Block | Block wallet.
[**walletPostUnblock()**](WalletApi.md#walletPostUnblock) | **POST** /v2/Wallet/Unblock | Unblock wallet.


## `walletHealth()`

```php
walletHealth(): string
```

Health check.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->walletHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->walletHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletPostBlock()`

```php
walletPostBlock($model): \VodaPayGatewayClient\Model\PaymentDigitalWalletResponseModel
```

Block wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\PaymentDigitalWalletRequestV2Model(); // \VodaPayGatewayClient\Model\PaymentDigitalWalletRequestV2Model | PaymentDigitalWalletRequestV2Model.

try {
    $result = $apiInstance->walletPostBlock($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->walletPostBlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\PaymentDigitalWalletRequestV2Model**](../Model/PaymentDigitalWalletRequestV2Model.md)| PaymentDigitalWalletRequestV2Model. |

### Return type

[**\VodaPayGatewayClient\Model\PaymentDigitalWalletResponseModel**](../Model/PaymentDigitalWalletResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletPostUnblock()`

```php
walletPostUnblock($model): \VodaPayGatewayClient\Model\PaymentDigitalWalletResponseModel
```

Unblock wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\PaymentDigitalWalletRequestV2Model(); // \VodaPayGatewayClient\Model\PaymentDigitalWalletRequestV2Model | PaymentDigitalWalletRequestV2Model.

try {
    $result = $apiInstance->walletPostUnblock($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->walletPostUnblock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\PaymentDigitalWalletRequestV2Model**](../Model/PaymentDigitalWalletRequestV2Model.md)| PaymentDigitalWalletRequestV2Model. |

### Return type

[**\VodaPayGatewayClient\Model\PaymentDigitalWalletResponseModel**](../Model/PaymentDigitalWalletResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
