<?php

namespace Vodapay\Vodapay\Model;
include_once( dirname( __FILE__ ) .'/../Model/vodapay_common.inc' );
require( dirname( __FILE__ ) .'\..\vendor\vodapay-gateway\vodapay-gateway-api-client-php\lib\Model\ModelInterface.php' );
require( dirname( __FILE__ ) .'\..\vendor\vodapay-gateway\vodapay-gateway-api-client-php\lib\Model\VodaPayGatewayPayment.php' );
require( dirname( __FILE__ ) .'\..\vendor\vodapay-gateway\vodapay-gateway-api-client-php\lib\Model\Notifications.php' );
require( dirname( __FILE__ ) .'\..\vendor\vodapay-gateway\vodapay-gateway-api-client-php\lib\Model\Styling.php' );
require( dirname( __FILE__ ) .'\..\vendor\vodapay-gateway\vodapay-gateway-api-client-php\lib\ObjectSerializer.php' );
require( dirname( __FILE__ ) .'\..\vendor\vodapay-gateway\vodapay-gateway-api-client-php\lib\Model\PaymentIntentAdditionalDataModel.php' );

use Magento\Sales\Api\Data\OrderPaymentInterface;
use Magento\Sales\Model\Order\Payment;
use Magento\Sales\Model\Order\Payment\Transaction;
use Magento\Quote\Model\Quote;
use VodaPayGatewayClient\Model\VodaPayGatewayPayment as VPGlientPayment;
use VodaPayGatewayClient\Api;

// use \Vodapay\Vodapay\Helper\VodapayValidate;

/**
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Vodapay extends \Magento\Payment\Model\Method\AbstractMethod
{
	/**
	 * @var string
	 */
	protected $_code = Config::METHOD_CODE;

	/**
	 * @var string
	 */
	protected $_formBlockType = 'Vodapay\Vodapay\Block\Form';

	/**
	 * @var string
	 */
	protected $_infoBlockType = 'Vodapay\Vodapay\Block\Payment\Info';

	/** @var string */
	protected $_configType = 'Vodapay\Vodapay\Model\Config';

	/**
	 * Payment Method feature
	 *
	 * @var bool
	 */
	protected $_isInitializeNeeded = true;

	/**
	 * Availability option
	 *
	 * @var bool
	 */
	protected $_isGateway = false;

	/**
	 * Availability option
	 *
	 * @var bool
	 */
	protected $_canOrder = true;

	/**
	 * Availability option
	 *
	 * @var bool
	 */
	protected $_canAuthorize = true;

	/**
	 * Availability option
	 *
	 * @var bool
	 */
	protected $_canCapture = true;

	/**
	 * Availability option
	 *
	 * @var bool
	 */
	protected $_canVoid = false;

	/**
	 * Availability option
	 *
	 * @var bool
	 */
	protected $_canUseInternal = true;

	/**
	 * Availability option
	 *
	 * @var bool
	 */
	protected $_canUseCheckout = true;

	/**
	 * Availability option
	 *
	 * @var bool
	 */
	protected $_canFetchTransactionInfo = true;

	/**
	 * Availability option
	 *
	 * @var bool
	 */
	protected $_canReviewPayment = true;

	/**
	 * Website Payments Pro instance
	 *
	 * @var \Vodapay\Vodapay\Model\Config $config
	 */
	protected $_config;
	/**
	 * Payment additional information key for payment action
	 *
	  * @var string
	 */
	protected $_isOrderPaymentActionKey = 'is_order_action';

	/**
	 * Payment additional information key for number of used authorizations
	 *
	 * @var string
	 */
	protected $_authorizationCountKey = 'authorization_count';

	/**
	 * @var \Magento\Store\Model\StoreManagerInterface
	 */
	protected $_storeManager;

	/**
	 * @var \Magento\Framework\UrlInterface
	 */
	protected $_urlBuilder;

	/**
	 * @var \Magento\Checkout\Model\Session
	 */
	protected $_checkoutSession;

	/**
	 * @var \Magento\Framework\Exception\LocalizedExceptionFactory
	 */
	protected $_exception;

	/**
	 * @var \Magento\Sales\Api\TransactionRepositoryInterface
	 */
	protected $transactionRepository;

	/**
	 * @var Transaction\BuilderInterface
	 */
	protected $transactionBuilder;

	/**
	 * @param \Magento\Framework\Model\Context $context
	 * @param \Magento\Framework\Registry $registry
	 * @param \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory
	 * @param \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory
	 * @param \Magento\Payment\Helper\Data $paymentData
	 * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
	 * @param \Magento\Payment\Model\Method\Logger $logger
	 * @param \Vodapay\Vodapay\Model\ConfigFactory $configFactory
	 * @param \Magento\Store\Model\StoreManagerInterface $storeManager
	 * @param \Magento\Framework\UrlInterface $urlBuilder
	 * @param \Vodapay\Vodapay\Model\CartFactory $cartFactory
	 * @param \Magento\Checkout\Model\Session $checkoutSession
	 * @param \Magento\Framework\Exception\LocalizedExceptionFactory $exception
	 * @param \Magento\Sales\Api\TransactionRepositoryInterface $transactionRepository
	 * @param Transaction\BuilderInterface $transactionBuilder
	 * @param \Magento\Framework\Model\ResourceModel\AbstractResource $resource
	 * @param \Magento\Framework\Data\Collection\AbstractDb $resourceCollection
	 * @param array $data
	 * @SuppressWarnings(PHPMD.ExcessiveParameterList)
	 */
	public function __construct( \Magento\Framework\Model\Context $context,
								 \Magento\Framework\Registry $registry,
								 \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory,
								 \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory,
								 \Magento\Payment\Helper\Data $paymentData,
								 \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
								 \Magento\Payment\Model\Method\Logger $logger,
								 ConfigFactory $configFactory,
								 \Magento\Store\Model\StoreManagerInterface $storeManager,
								 \Magento\Framework\UrlInterface $urlBuilder,
								 \Magento\Checkout\Model\Session $checkoutSession,
								 \Magento\Framework\Exception\LocalizedExceptionFactory $exception,
								 \Magento\Sales\Api\TransactionRepositoryInterface $transactionRepository,
								 \Magento\Sales\Model\Order\Payment\Transaction\BuilderInterface $transactionBuilder,
								 \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
								 \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
								 array $data = [ ] )
	{
		parent::__construct( $context, $registry, $extensionFactory, $customAttributeFactory, $paymentData, $scopeConfig, $logger, $resource, $resourceCollection, $data );
		$this->_storeManager = $storeManager;
		$this->_urlBuilder = $urlBuilder;
		$this->_checkoutSession = $checkoutSession;
		$this->_exception = $exception;
		$this->transactionRepository = $transactionRepository;
		$this->transactionBuilder = $transactionBuilder;

		$parameters = [ 'params' => [ $this->_code ] ];

		$this->_config = $configFactory->create( $parameters );

		if (! defined('PN_DEBUG'))
		{
			define('PN_DEBUG', $this->getConfigData('debug'));
		}

	}


	/**
	 * Store setter
	 * Also updates store ID in config object
	 *
	 * @param \Magento\Store\Model\Store|int $store
	 *
	 * @return $this
	 */
	public function setStore( $store )
	{
		$this->setData( 'store', $store );

		if ( null === $store )
		{
			$store = $this->_storeManager->getStore()->getId();
		}
		$this->_config->setStoreId( is_object( $store ) ? $store->getId() : $store );

		return $this;
	}


	/**
	 * Whether method is available for specified currency
	 *
	 * @param string $currencyCode
	 *
	 * @return bool
	 */
	public function canUseForCurrency( $currencyCode )
	{
		return $this->_config->isCurrencyCodeSupported( $currencyCode );
	}

	/**
	 * Payment action getter compatible with payment model
	 *
	 * @see \Magento\Sales\Model\Payment::place()
	 * @return string
	 */
	public function getConfigPaymentAction()
	{
		return $this->_config->getPaymentAction();
	}

	/**
	 * Check whether payment method can be used
	 *
	 * @param \Magento\Quote\Api\Data\CartInterface|Quote|null $quote
	 *
	 * @return bool
	 */
	public function isAvailable( \Magento\Quote\Api\Data\CartInterface $quote = null )
	{
		return parent::isAvailable( $quote ) && $this->_config->isMethodAvailable();
	}


	/**
	 * @return mixed
	 */
	protected function getStoreName()
	{
		$pre = __METHOD__ . " : ";
		pnlog( $pre . 'bof' );

		$storeName = $this->_scopeConfig->getValue(
			'general/store_information/name',
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);

		pnlog( $pre . 'store name is ' . $storeName );

		return $storeName;
	}

    /**
     * getAppVersion
     *
     * @return string
     */
    private function getAppVersion()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $version = $objectManager->get('Magento\Framework\App\ProductMetadataInterface')->getVersion();
    }

	/**
	 * getTotalAmount
	 */
	public function getTotalAmount( $order )
	{
		if( $this->getConfigData( 'use_store_currency' ) )
			$price = $this->getNumberFormat( $order->getGrandTotal() );
		else
			$price = $this->getNumberFormat( $order->getBaseGrandTotal() );

		return $price;
	}

	/**
	 * getNumberFormat
	 */
	public function getNumberFormat( $number )
	{
		return number_format( $number, 2, '.', '' );
	}

	/**
	 * getPaidSuccessUrl
	 */
	public function getPaidSuccessUrl()
	{
		return $this->_urlBuilder->getUrl( 'vodapay/redirect/success', array( '_secure' => true ) );
	}

	/**
	 * Get transaction with type order
	 *
	 * @param OrderPaymentInterface $payment
	 *
	 * @return false|\Magento\Sales\Api\Data\TransactionInterface
	 */
	protected function getOrderTransaction( $payment )
	{
		return $this->transactionRepository->getByTransactionType( Transaction::TYPE_ORDER, $payment->getId(), $payment->getOrder()->getId() );
	}

	/*
	 * called dynamically by checkout's framework.
	 *
	 * Not used anymore  according to https://github.com/magento/magento2/issues/2241#issuecomment-155471428
	 */
	public function getOrderPlaceRedirectUrl()
	{
		$pre = __METHOD__ . " : ";

		$url = $this->_urlBuilder->getUrl( 'vodapay/redirect' );

		pnlog( "{$pre} -> {$url} : " . 'bof' );
		return $url;

	}
	 /**
	 * Checkout redirect URL getter for onepage checkout (hardcode)
	 *
	 * @see \Magento\Checkout\Controller\Onepage::savePaymentAction()
	 * @see Quote\Payment::getCheckoutRedirectUrl()
	 * @return string
	 */
	public function getCheckoutRedirectUrl()
	{

		$pre = __METHOD__ . " : ";

		$order = $this->_checkoutSession->getLastRealOrder();
		$this->_logger->debug($pre . 'order : '. json_encode($order));

		
		$amount = intval($this->getTotalAmount( $order ) * 100);// The amount must be in cents.
		

		$payloadVodapay = new \VodaPayGatewayClient\Model\VodaPayGatewayPayment();

		$this->_logger->debug($pre . 'order : '. json_encode($order));

		
		$amount = intval($this->getTotalAmount( $order ) * 100);// The amount must be in cents.
		$payloadVodapay->setAmount($amount);


		$rlength = 10;
		$retrievalReference =   substr(
			str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
				ceil($rlength/strlen($x)) )),1,32
		);
		$retrievalReference = str_pad($order->get_order_number(), 12, $retrievalReference, STR_PAD_LEFT);
		$payloadVodapay->setTraceId(strval($retrievalReference));


		$payloadVodapay->setEchoData(json_encode(['order_id'=>$order->getRealOrderId()]));


		$additionData = new \VodaPayGatewayClient\Model\PaymentIntentAdditionalDataModel;

		$styling = new \VodaPayGatewayClient\Model\Styling;
		$styling->setLogoUrl("");
		$styling->setBannerUrl("");
		$payloadVodapay->setStyling($styling);	

		$peripheryData = new \VodaPayGatewayClient\Model\Notifications;
		$peripheryData->setCallbackUrl($this->getPaidSuccessUrl());
		$peripheryData->setNotificationUrl($this->getPaidNotifyUrl());
		$payloadVodapay->setNotifications($peripheryData);


		/*$apiInstance = new \VodaPayGatewayClient\Api\PayApi(
			new GuzzleHttp\Client([
				'base_uri' => 'https://api.vodapaygatewaydev.vodacom.co.za/V2',
				'headers' => [
					 'Content-Type' => 'application/json',
					 'api-key' => $this->getConfigData( 'merchant_private_key' )
				],
				'verify'=> false,
				'connect_timeout' => 60
			])
		);
		
		try {
			$result = $apiInstance->payOnceOff($payloadVodapay);
			$this->_logger->debug($pre . 'order : '. json_encode($result));

		} catch (Exception $e) {
			echo 'Exception when calling PayApi->payCompleteOnceOff: ', $e->getMessage(), PHP_EOL;
		}
*/
try {
	$client = new \GuzzleHttp\Client([
		'headers' => [
			 'Content-Type' => 'application/json',
			 'api-key' => $this->getConfigData( 'merchant_private_key' )
		],
		'verify'=> false,
		//'debug' => true,
		'connect_timeout' => 60
	]);

	$response = $client->post($this->getVodapayUrl().'/Pay/OnceOff',
		['body' => strval($payloadVodapay)]
	);                    

	if($response->getStatusCode() == 200){
		$responseJson = $response->getBody()->getContents();
		$responseObj = json_decode($responseJson);

		$responseCode = $responseObj->responseCode;
		if(in_array($responseCode, ResponseCodeConstants::getGoodResponseCodeList())){
			//SUCCESS
			if($responseCode == "00"){
				$peripheryData = $responseObj->peripheryData;
				$peripheryDataObj = (object) $peripheryData;
				$initiationUrl = $peripheryDataObj->initiationUrl;
				header("Location: $initiationUrl");
			}
		}elseif(in_array($responseCode, ResponseCodeConstants::getBadResponseCodeList())){
			//FAILURE
			$responseMessages = ResponseCodeConstants::getResponseText();
			$failureMsg = $responseMessages[$responseCode];
			$this->informTxnFailure($failureMsg.'['.$responseCode.']{'.$responseObj->responseMessage.'}', $order);
		}

	}
} catch (Exception $e) {
	echo 'Exception when calling DefaultApi->initiateImmediatePayment: ', $e->getMessage(), PHP_EOL;
}
		$this->_logger->debug($pre . 'result : '. json_encode($result));

		return $result.initiationUrl;
	}

	/**
	 *
	 * @param string $paymentAction
	 * @param object $stateObject
	 *
	 * @return $this
	 */
	public function initialize( $paymentAction, $stateObject )
	{
		$pre = __METHOD__ . " : ";
		pnlog( $pre . 'bof' );

		$stateObject->setState( \Magento\Sales\Model\Order::STATE_PENDING_PAYMENT );
		$stateObject->setStatus('pending_payment');
		$stateObject->setIsNotified( false );

		return parent::initialize( $paymentAction, $stateObject ); // TODO: Change the autogenerated stub

	}

	/**
	 * getPaidCancelUrl
	 */
	public function getPaidCancelUrl()
	{
		return $this->_urlBuilder->getUrl( 'vodapay/redirect/cancel', array( '_secure' => true ) );
	}
	/**
	 * getPaidNotifyUrl
	 */
	public function getPaidNotifyUrl()
	{
		return $this->_urlBuilder->getUrl( 'vodapay/notify', array( '_secure' => true ) );
	}

	/**
	 * getVodapayUrl
	 *
	 * Get URL for form submission to PayNow.
	 */
	public function getVodapayUrl()
	{
		if($this->getConfigData('test') == 0){
			return 'https://api.vodapaygateway.vodacom.co.za/V2';
		}else{
			return 'https://api.vodapaygatewaydev.vodacom.co.za/V2';
		}
		
	}

}
