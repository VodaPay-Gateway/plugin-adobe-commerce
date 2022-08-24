# VodaPayGatewayClient\VirtualTillApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualTillHealth()**](VirtualTillApi.md#virtualTillHealth) | **GET** /v2/VirtualTill | Health check.
[**virtualTillRequestQrInformation()**](VirtualTillApi.md#virtualTillRequestQrInformation) | **POST** /v2/VirtualTill/RequestQrInformation | Request for a QR code.


## `virtualTillHealth()`

```php
virtualTillHealth(): string
```

Health check.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\VirtualTillApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->virtualTillHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTillApi->virtualTillHealth: ', $e->getMessage(), PHP_EOL;
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

## `virtualTillRequestQrInformation()`

```php
virtualTillRequestQrInformation($model): \VodaPayGatewayClient\Model\RequestQRInformationResponseModel
```

Request for a QR code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new VodaPayGatewayClient\Api\VirtualTillApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \VodaPayGatewayClient\Model\RequestQRInformationRequestModel(); // \VodaPayGatewayClient\Model\RequestQRInformationRequestModel | RequestQRInformationRequestModel.

try {
    $result = $apiInstance->virtualTillRequestQrInformation($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTillApi->virtualTillRequestQrInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\VodaPayGatewayClient\Model\RequestQRInformationRequestModel**](../Model/RequestQRInformationRequestModel.md)| RequestQRInformationRequestModel. |

### Return type

[**\VodaPayGatewayClient\Model\RequestQRInformationResponseModel**](../Model/RequestQRInformationResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
