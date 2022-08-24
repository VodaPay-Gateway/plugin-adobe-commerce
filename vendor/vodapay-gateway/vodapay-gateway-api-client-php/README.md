# VodaPayGateway.Pay.V2

Enabling ecommerce merchants to accept online payments from customers.

For more information, please visit [https://docs.vodapaygateway.vodacom.co.za/](https://docs.vodapaygateway.vodacom.co.za/).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/VodaPayGateway.Pay.V2/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PayApi* | [**payCompleteOnceOff**](docs/Api/PayApi.md#paycompleteonceoff) | **POST** /v2/Pay/CompleteOnceOff | Complete payment.
*PayApi* | [**payHealth**](docs/Api/PayApi.md#payhealth) | **GET** /v2/Pay | Health check.
*PayApi* | [**payOnceOff**](docs/Api/PayApi.md#payonceoff) | **POST** /v2/Pay/OnceOff | Immediate payment intent.
*PayApi* | [**payRecurring**](docs/Api/PayApi.md#payrecurring) | **POST** /v2/Pay/Recurring | Create recurring payment.
*PayApi* | [**payRefund**](docs/Api/PayApi.md#payrefund) | **POST** /v2/Pay/Refund | Immediate refund.
*PayApi* | [**paySubmitRecurring**](docs/Api/PayApi.md#paysubmitrecurring) | **POST** /v2/Pay/SubmitRecurring | Submit recurring payment.
*TokenApi* | [**tokenHealth**](docs/Api/TokenApi.md#tokenhealth) | **GET** /v2/Token | Health check.
*TokenApi* | [**tokenPostBlock**](docs/Api/TokenApi.md#tokenpostblock) | **POST** /v2/Token/Block | Block a token.
*TokenApi* | [**tokenPostInitiateAuthenticateToken**](docs/Api/TokenApi.md#tokenpostinitiateauthenticatetoken) | **POST** /v2/Token/InitiateAuthenticate | Initiate authentication of token
*TokenApi* | [**tokenPostInitiateIssueToken**](docs/Api/TokenApi.md#tokenpostinitiateissuetoken) | **POST** /v2/Token/InitiateIssue | Initiate the issue of a token.
*TokenApi* | [**tokenPostList**](docs/Api/TokenApi.md#tokenpostlist) | **POST** /v2/Token/List | Get a list of tokens.
*TokenApi* | [**tokenPostRemove**](docs/Api/TokenApi.md#tokenpostremove) | **POST** /v2/Token/Remove | Removes a token.
*TokenApi* | [**tokenPostSetDefault**](docs/Api/TokenApi.md#tokenpostsetdefault) | **POST** /v2/Token/SetDefault | Set token as default.
*TokenApi* | [**tokenPostUnblock**](docs/Api/TokenApi.md#tokenpostunblock) | **POST** /v2/Token/Unblock | Unblock a token.
*VirtualTillApi* | [**virtualTillHealth**](docs/Api/VirtualTillApi.md#virtualtillhealth) | **GET** /v2/VirtualTill | Health check.
*VirtualTillApi* | [**virtualTillRequestQrInformation**](docs/Api/VirtualTillApi.md#virtualtillrequestqrinformation) | **POST** /v2/VirtualTill/RequestQrInformation | Request for a QR code.
*WalletApi* | [**walletHealth**](docs/Api/WalletApi.md#wallethealth) | **GET** /v2/Wallet | Health check.
*WalletApi* | [**walletPostBlock**](docs/Api/WalletApi.md#walletpostblock) | **POST** /v2/Wallet/Block | Block wallet.
*WalletApi* | [**walletPostUnblock**](docs/Api/WalletApi.md#walletpostunblock) | **POST** /v2/Wallet/Unblock | Unblock wallet.

## Models

- [BaseResponseModel](docs/Model/BaseResponseModel.md)
- [BasketItems](docs/Model/BasketItems.md)
- [Category](docs/Model/Category.md)
- [Communication](docs/Model/Communication.md)
- [CompleteActions](docs/Model/CompleteActions.md)
- [ErrorPaymentBaseResponseModel](docs/Model/ErrorPaymentBaseResponseModel.md)
- [ErrorPaymentDigitalWalletResponseModel](docs/Model/ErrorPaymentDigitalWalletResponseModel.md)
- [ErrorPaymentTokenListResponseModel](docs/Model/ErrorPaymentTokenListResponseModel.md)
- [ErrorPaymentTokenResponseModel](docs/Model/ErrorPaymentTokenResponseModel.md)
- [ErrorVodaPayGatewayCompleteResponse](docs/Model/ErrorVodaPayGatewayCompleteResponse.md)
- [ErrorVodaPayGatewayRefundResponse](docs/Model/ErrorVodaPayGatewayRefundResponse.md)
- [ErrorVodaPayGatewayResponse](docs/Model/ErrorVodaPayGatewayResponse.md)
- [ErrorVodaPayGatewayResponseAllOf](docs/Model/ErrorVodaPayGatewayResponseAllOf.md)
- [ErrorVodaPayGatewaySubmitRecurringResponse](docs/Model/ErrorVodaPayGatewaySubmitRecurringResponse.md)
- [FrequencyCodes](docs/Model/FrequencyCodes.md)
- [Notifications](docs/Model/Notifications.md)
- [PaymentBaseResponseModel](docs/Model/PaymentBaseResponseModel.md)
- [PaymentBaseResponseModelAllOf](docs/Model/PaymentBaseResponseModelAllOf.md)
- [PaymentDigitalWalletRequestBaseModel](docs/Model/PaymentDigitalWalletRequestBaseModel.md)
- [PaymentDigitalWalletRequestV2Model](docs/Model/PaymentDigitalWalletRequestV2Model.md)
- [PaymentDigitalWalletResponseModel](docs/Model/PaymentDigitalWalletResponseModel.md)
- [PaymentIntentAdditionalDataModel](docs/Model/PaymentIntentAdditionalDataModel.md)
- [PaymentIntentBasketItemModel](docs/Model/PaymentIntentBasketItemModel.md)
- [PaymentIntentBasketModel](docs/Model/PaymentIntentBasketModel.md)
- [PaymentIssueTokenRequestBaseModel](docs/Model/PaymentIssueTokenRequestBaseModel.md)
- [PaymentIssueTokenRequestV2Model](docs/Model/PaymentIssueTokenRequestV2Model.md)
- [PaymentIssueTokenRequestV2ModelAllOf](docs/Model/PaymentIssueTokenRequestV2ModelAllOf.md)
- [PaymentNotificationDataModel](docs/Model/PaymentNotificationDataModel.md)
- [PaymentNotificationMethod](docs/Model/PaymentNotificationMethod.md)
- [PaymentNotifications](docs/Model/PaymentNotifications.md)
- [PaymentPageStyling](docs/Model/PaymentPageStyling.md)
- [PaymentPageTheme](docs/Model/PaymentPageTheme.md)
- [PaymentRecurringDataModel](docs/Model/PaymentRecurringDataModel.md)
- [PaymentTokenDataModel](docs/Model/PaymentTokenDataModel.md)
- [PaymentTokenListItemDataModel](docs/Model/PaymentTokenListItemDataModel.md)
- [PaymentTokenListResponseModel](docs/Model/PaymentTokenListResponseModel.md)
- [PaymentTokenListResponseModelAllOf](docs/Model/PaymentTokenListResponseModelAllOf.md)
- [PaymentTokenRequestModel](docs/Model/PaymentTokenRequestModel.md)
- [PaymentTokenResponseModel](docs/Model/PaymentTokenResponseModel.md)
- [PaymentTokenResponseModelAllOf](docs/Model/PaymentTokenResponseModelAllOf.md)
- [Recurring](docs/Model/Recurring.md)
- [RecurringPaymentCategory](docs/Model/RecurringPaymentCategory.md)
- [RecurringPaymentFrequencyCodes](docs/Model/RecurringPaymentFrequencyCodes.md)
- [RequestQRInformationRequestModel](docs/Model/RequestQRInformationRequestModel.md)
- [RequestQRInformationResponseModel](docs/Model/RequestQRInformationResponseModel.md)
- [Styling](docs/Model/Styling.md)
- [VodaPayGatewayCompleteResponse](docs/Model/VodaPayGatewayCompleteResponse.md)
- [VodaPayGatewayPayment](docs/Model/VodaPayGatewayPayment.md)
- [VodaPayGatewayPaymentComplete](docs/Model/VodaPayGatewayPaymentComplete.md)
- [VodaPayGatewayRecurring](docs/Model/VodaPayGatewayRecurring.md)
- [VodaPayGatewayRecurringSubmit](docs/Model/VodaPayGatewayRecurringSubmit.md)
- [VodaPayGatewayRefund](docs/Model/VodaPayGatewayRefund.md)
- [VodaPayGatewayRefundResponse](docs/Model/VodaPayGatewayRefundResponse.md)
- [VodaPayGatewayResponse](docs/Model/VodaPayGatewayResponse.md)
- [VodaPayGatewaySubmitRecurringResponse](docs/Model/VodaPayGatewaySubmitRecurringResponse.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
