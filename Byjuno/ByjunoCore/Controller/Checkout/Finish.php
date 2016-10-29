<?php
/**
 * Copyright � 2015 Pay.nl All rights reserved.
 */
namespace Byjuno\ByjunoCore\Controller\Checkout;
use Magento\Checkout\Model\Session;
/**
 * Description of Redirect
 *
 * @author Andy Pieters <andy@pay.nl>
 */
class Finish extends \Magento\Framework\App\Action\Action
{
    protected $_config;
    /**
     * @var Session
     */
    protected $_checkoutSession;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $_logger;
    /**
     * Index constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param Session $checkoutSession
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        Session $checkoutSession,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->_checkoutSession = $checkoutSession;
        $this->_logger = $logger;
        parent::__construct($context);
    }
    public function execute()
    {
        /*
        $resultRedirect = $this->resultRedirectFactory->create();
        \Paynl\Config::setApiToken($this->_config->getApiToken());
        $params = $this->getRequest()->getParams();
        if(!isset($params['orderId'])){
            $this->messageManager->addNotice(__('Invalid return, no transactionId specified'));
            $this->_logger->critical('Invalid return, no transactionId specified', $params);
            $resultRedirect->setPath('checkout/cart');
            return $resultRedirect;
        }
        try{
            $transaction = \Paynl\Transaction::get($params['orderId']);
        } catch(\Exception $e){
            $this->_logger->critical($e, $params);
            $this->messageManager->addExceptionMessage($e, __('There was an error checking the transaction status'));
            $resultRedirect->setPath('checkout/cart');
            return $resultRedirect;
        }
        if ($transaction->isPaid() || $transaction->isPending()) {
            $this->_getCheckoutSession()->start();
            $resultRedirect->setPath('checkout/onepage/success');
        } else {
            //canceled, re-activate quote
            try {
                $this->_getCheckoutSession()->restoreQuote();
                $this->messageManager->addNotice(__('Payment canceled'));
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->_logger->error($e);
                $this->messageManager->addExceptionMessage($e, $e->getMessage());
            } catch (\Exception $e) {
                $this->_logger->error($e);
                $this->messageManager->addExceptionMessage($e, __('Unable to cancel order'));
            }
            $resultRedirect->setPath('checkout/cart');
        }
        */
        $this->messageManager->addExceptionMessage(new \Exception("ex"), "Error");
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('checkout/cart');
        return $resultRedirect;
    }
    /**
     * Return checkout session object
     *
     * @return Session
     */
    protected function _getCheckoutSession()
    {
        return $this->_checkoutSession;
    }
}