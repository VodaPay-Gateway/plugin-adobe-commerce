<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Vodapay\Vodapay\Block\Payment;

/**
 * PayNow common payment info block
 * Uses default templates
 */
class Info extends \Magento\Payment\Block\Info
{
    /**
     * @var \Vodapay\Vodapay\Model\InfoFactory
     */
    protected $_vodapayInfoFactory;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Payment\Model\Config $paymentConfig
     * @param \Vodapay\Vodapay\Model\InfoFactory $vodapayInfoFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Payment\Model\Config $paymentConfig,
        \Vodapay\Vodapay\Model\InfoFactory $vodapayInfoFactory,
        array $data = []
    ) {
        $this->_vodapayInfoFactory = $vodapayInfoFactory;
        parent::__construct($context, $data);
    }

}
