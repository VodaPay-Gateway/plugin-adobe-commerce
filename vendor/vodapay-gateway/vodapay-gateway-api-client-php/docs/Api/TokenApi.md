# VodaPayGatewayClient\TokenApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenHealth()**](TokenApi.md#tokenHealth) | **GET** /v2/Token | Health check.
[**tokenPostBlock()**](TokenApi.md#tokenPostBlock) | **POST** /v2/Token/Block | Block a token.
[**tokenPostInitiateAuthenticateToken()**](TokenApi.md#tokenPostInitiateAuthenticateToken) | **POST** /v2/Token/InitiateAuthenticate | Initiate authentication of token
[**tokenPostInitiateIssueToken()**](TokenApi.md#tokenPostInitiateIssueToken) | **POST** /v2/Token/InitiateIssue | Initiate the issue of a token.
[**tokenPostList()**](TokenApi.md#tokenPostList) | **POST** /v2/Token/List | Get a list of tokens.
[**tokenPostRemove()**](TokenApi.md#tokenPostRemove) | **POST** /v2/Token/Remove | Removes a token.
[**tokenPostSetDefault()**](TokenApi.md#tokenPostSetDefault) | **POST** /v2/Token/SetDefault | Set token as default.
[**tokenPostUnblock()**](TokenApi.md#tokenPostUnblock) | **POST** /v2/Token/Unblock | Unblock a token.


## `tokenHealth()`

```php
tokenHealth(): string
```

Health check.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->tokenHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenHealth: ', $e->getMessage(), PHP_EOL;
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

## `tokenPostBlock()`

```php
tokenPostBlock($model): \VodaPayGatewayClient\Model\PaymentTokenResponseModel
```

Block a token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\PaymentTokenRequestModel(); // \VodaPayGatewayClient\Model\PaymentTokenRequestModel | PaymentTokenRequestModel.

try {
    $result = $apiInstance->tokenPostBlock($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenPostBlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\PaymentTokenRequestModel**](../Model/PaymentTokenRequestModel.md)| PaymentTokenRequestModel. |

### Return type

[**\VodaPayGatewayClient\Model\PaymentTokenResponseModel**](../Model/PaymentTokenResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenPostInitiateAuthenticateToken()`

```php
tokenPostInitiateAuthenticateToken($model): \VodaPayGatewayClient\Model\PaymentBaseResponseModel
```

Initiate authentication of token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\PaymentIssueTokenRequestV2Model(); // \VodaPayGatewayClient\Model\PaymentIssueTokenRequestV2Model | PaymentIssueTokenRequestV2Model.

try {
    $result = $apiInstance->tokenPostInitiateAuthenticateToken($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenPostInitiateAuthenticateToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\PaymentIssueTokenRequestV2Model**](../Model/PaymentIssueTokenRequestV2Model.md)| PaymentIssueTokenRequestV2Model. |

### Return type

[**\VodaPayGatewayClient\Model\PaymentBaseResponseModel**](../Model/PaymentBaseResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenPostInitiateIssueToken()`

```php
tokenPostInitiateIssueToken($model): \VodaPayGatewayClient\Model\PaymentBaseResponseModel
```

Initiate the issue of a token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\PaymentIssueTokenRequestV2Model(); // \VodaPayGatewayClient\Model\PaymentIssueTokenRequestV2Model | PaymentIssueTokenRequestV2Model.

try {
    $result = $apiInstance->tokenPostInitiateIssueToken($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenPostInitiateIssueToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\PaymentIssueTokenRequestV2Model**](../Model/PaymentIssueTokenRequestV2Model.md)| PaymentIssueTokenRequestV2Model. |

### Return type

[**\VodaPayGatewayClient\Model\PaymentBaseResponseModel**](../Model/PaymentBaseResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenPostList()`

```php
tokenPostList($model): \VodaPayGatewayClient\Model\PaymentTokenListResponseModel
```

Get a list of tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\PaymentTokenRequestModel(); // \VodaPayGatewayClient\Model\PaymentTokenRequestModel | PaymentTokenRequestModel.

try {
    $result = $apiInstance->tokenPostList($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenPostList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\PaymentTokenRequestModel**](../Model/PaymentTokenRequestModel.md)| PaymentTokenRequestModel. |

### Return type

[**\VodaPayGatewayClient\Model\PaymentTokenListResponseModel**](../Model/PaymentTokenListResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenPostRemove()`

```php
tokenPostRemove($model): \VodaPayGatewayClient\Model\PaymentTokenResponseModel
```

Removes a token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\PaymentTokenRequestModel(); // \VodaPayGatewayClient\Model\PaymentTokenRequestModel | PaymentTokenRequestModel.

try {
    $result = $apiInstance->tokenPostRemove($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenPostRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\PaymentTokenRequestModel**](../Model/PaymentTokenRequestModel.md)| PaymentTokenRequestModel. |

### Return type

[**\VodaPayGatewayClient\Model\PaymentTokenResponseModel**](../Model/PaymentTokenResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenPostSetDefault()`

```php
tokenPostSetDefault($model): \VodaPayGatewayClient\Model\PaymentTokenResponseModel
```

Set token as default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\PaymentTokenRequestModel(); // \VodaPayGatewayClient\Model\PaymentTokenRequestModel | PaymentTokenRequestModel.

try {
    $result = $apiInstance->tokenPostSetDefault($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenPostSetDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\PaymentTokenRequestModel**](../Model/PaymentTokenRequestModel.md)| PaymentTokenRequestModel. |

### Return type

[**\VodaPayGatewayClient\Model\PaymentTokenResponseModel**](../Model/PaymentTokenResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenPostUnblock()`

```php
tokenPostUnblock($model): \VodaPayGatewayClient\Model\PaymentTokenResponseModel
```

Unblock a token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\PaymentTokenRequestModel(); // \VodaPayGatewayClient\Model\PaymentTokenRequestModel | PaymentTokenRequestModel.

try {
    $result = $apiInstance->tokenPostUnblock($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenPostUnblock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\PaymentTokenRequestModel**](../Model/PaymentTokenRequestModel.md)| PaymentTokenRequestModel. |

### Return type

[**\VodaPayGatewayClient\Model\PaymentTokenResponseModel**](../Model/PaymentTokenResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
