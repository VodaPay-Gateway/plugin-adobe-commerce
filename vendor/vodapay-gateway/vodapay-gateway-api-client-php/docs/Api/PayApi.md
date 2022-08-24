# VodaPayGatewayClient\PayApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**payCompleteOnceOff()**](PayApi.md#payCompleteOnceOff) | **POST** /v2/Pay/CompleteOnceOff | Complete payment.
[**payHealth()**](PayApi.md#payHealth) | **GET** /v2/Pay | Health check.
[**payOnceOff()**](PayApi.md#payOnceOff) | **POST** /v2/Pay/OnceOff | Immediate payment intent.
[**payRecurring()**](PayApi.md#payRecurring) | **POST** /v2/Pay/Recurring | Create recurring payment.
[**payRefund()**](PayApi.md#payRefund) | **POST** /v2/Pay/Refund | Immediate refund.
[**paySubmitRecurring()**](PayApi.md#paySubmitRecurring) | **POST** /v2/Pay/SubmitRecurring | Submit recurring payment.


## `payCompleteOnceOff()`

```php
payCompleteOnceOff($model): \VodaPayGatewayClient\Model\VodaPayGatewayCompleteResponse
```

Complete payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\VodaPayGatewayPaymentComplete(); // \VodaPayGatewayClient\Model\VodaPayGatewayPaymentComplete | VodaPayGatewayPaymentComplete.

try {
    $result = $apiInstance->payCompleteOnceOff($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payCompleteOnceOff: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\VodaPayGatewayPaymentComplete**](../Model/VodaPayGatewayPaymentComplete.md)| VodaPayGatewayPaymentComplete. |

### Return type

[**\VodaPayGatewayClient\Model\VodaPayGatewayCompleteResponse**](../Model/VodaPayGatewayCompleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payHealth()`

```php
payHealth(): string
```

Health check.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->payHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payHealth: ', $e->getMessage(), PHP_EOL;
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

## `payOnceOff()`

```php
payOnceOff($model): \VodaPayGatewayClient\Model\VodaPayGatewayResponse
```

Immediate payment intent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\VodaPayGatewayPayment(); // \VodaPayGatewayClient\Model\VodaPayGatewayPayment | VodaPayGatewayPayment.

try {
    $result = $apiInstance->payOnceOff($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payOnceOff: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\VodaPayGatewayPayment**](../Model/VodaPayGatewayPayment.md)| VodaPayGatewayPayment. |

### Return type

[**\VodaPayGatewayClient\Model\VodaPayGatewayResponse**](../Model/VodaPayGatewayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payRecurring()`

```php
payRecurring($model): \VodaPayGatewayClient\Model\VodaPayGatewayResponse
```

Create recurring payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\VodaPayGatewayRecurring(); // \VodaPayGatewayClient\Model\VodaPayGatewayRecurring | VodaPayGatewayRecurring.

try {
    $result = $apiInstance->payRecurring($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payRecurring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\VodaPayGatewayRecurring**](../Model/VodaPayGatewayRecurring.md)| VodaPayGatewayRecurring. |

### Return type

[**\VodaPayGatewayClient\Model\VodaPayGatewayResponse**](../Model/VodaPayGatewayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payRefund()`

```php
payRefund($model): \VodaPayGatewayClient\Model\VodaPayGatewayRefundResponse
```

Immediate refund.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\VodaPayGatewayRefund(); // \VodaPayGatewayClient\Model\VodaPayGatewayRefund | VodaPayGatewayRefund.

try {
    $result = $apiInstance->payRefund($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\VodaPayGatewayRefund**](../Model/VodaPayGatewayRefund.md)| VodaPayGatewayRefund. |

### Return type

[**\VodaPayGatewayClient\Model\VodaPayGatewayRefundResponse**](../Model/VodaPayGatewayRefundResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paySubmitRecurring()`

```php
paySubmitRecurring($model): \VodaPayGatewayClient\Model\VodaPayGatewaySubmitRecurringResponse
```

Submit recurring payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\VodaPayGatewayRecurringSubmit(); // \VodaPayGatewayClient\Model\VodaPayGatewayRecurringSubmit | VodaPayGatewayRecurringSubmit.

try {
    $result = $apiInstance->paySubmitRecurring($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->paySubmitRecurring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\VodaPayGatewayRecurringSubmit**](../Model/VodaPayGatewayRecurringSubmit.md)| VodaPayGatewayRecurringSubmit. |

### Return type

[**\VodaPayGatewayClient\Model\VodaPayGatewaySubmitRecurringResponse**](../Model/VodaPayGatewaySubmitRecurringResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
