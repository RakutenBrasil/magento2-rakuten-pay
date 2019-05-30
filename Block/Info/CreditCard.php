<?php

namespace Rakuten\RakutenPay\Block\Info;

/**
 * Class CreditCard
 * @package Rakuten\RakutenPay\Block\Info
 */
class CreditCard extends \Magento\Payment\Block\Info
{
    protected $_template = 'Rakuten_RakutenPay::info/credit-card.phtml';

    /**
     * @return mixed
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getCreditCardNumber()
    {
        $info = $this->getInfo();

        return $info->getCcNumberEnc();
    }

    /**
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getBrand()
    {
        $info = $this->getInfo();
        return strtoupper($info->getCcType());
    }

    /**
     * @return mixed
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getInstallments()
    {
        $info = $this->getInfo();
        return $info->getAdditionalInformation('installments');
    }
}
