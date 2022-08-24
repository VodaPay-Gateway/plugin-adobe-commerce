<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Vodapay\Vodapay\Block;

use Magento\Customer\Helper\Session\CurrentCustomer;
use Magento\Framework\Locale\ResolverInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Vodapay\Vodapay\Model\Config;
use Vodapay\Vodapay\Model\Vodapay\Checkout;

class Form extends \Magento\Payment\Block\Form
{
    /** @var string Payment method code */
    protected $_methodCode = Config::METHOD_CODE;

    /** @var \Vodapay\Vodapay\Helper\Data */
    protected $_vodapayData;

    /** @var \Vodapay\Vodapay\Model\ConfigFactory */
    protected $vodapayConfigFactory;

    /** @var ResolverInterface */
    protected $_localeResolver;

    /** @var \Vodapay\Vodapay\Model\Config */
    protected $_config;

    /** @var bool */
    protected $_isScopePrivate;

    /** @var CurrentCustomer */
    protected $currentCustomer;

    /**
     * @param Context $context
     * @param \Vodapay\Vodapay\Model\ConfigFactory $vodapayConfigFactory
     * @param ResolverInterface $localeResolver
     * @param \Vodapay\Vodapay\Helper\Data $vodapayData
     * @param CurrentCustomer $currentCustomer
     * @param array $data
     */
    public function __construct(
        Context $context,
        \Vodapay\Vodapay\Model\ConfigFactory $vodapayConfigFactory,
        ResolverInterface $localeResolver,
        \Vodapay\Vodapay\Helper\Data $vodapayData,
        CurrentCustomer $currentCustomer,
        array $data = []
    ) {
        $pre = __METHOD__ . " : ";

	    if($this->_logger)
            $this->_logger->debug( $pre . 'bof' );

	    $this->_vodapayData = $vodapayData;
        $this->vodapayConfigFactory = $vodapayConfigFactory;
        $this->_localeResolver = $localeResolver;
        $this->_config = null;
        $this->_isScopePrivate = true;
        $this->currentCustomer = $currentCustomer;
        parent::__construct($context, $data);

	    if($this->_logger)
            $this->_logger->debug( $pre . "eof" );
    }

    /**
     * Set template and redirect message
     *
     * @return null
     */
    protected function _construct()
    {
        $pre = __METHOD__ . " : ";

	    if($this->_logger)
            $this->_logger->debug( $pre . 'bof' );

        $this->_config = $this->vodapayConfigFactory->create()->setMethod( $this->getMethodCode() );
        parent::_construct();
    }

    /**
     * Payment method code getter
     *
     * @return string
     */
    public function getMethodCode()
    {
        $pre = __METHOD__ . " : ";
        $this->_logger->debug( $pre . 'bof' );

        return $this->_methodCode;
    }




}
