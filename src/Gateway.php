<?php

namespace Omnipay\Payeer;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Common\Message\RequestInterface;

/**
 * Gateway Class
 * @method RequestInterface authorize(array $options = array())
 * @method RequestInterface completeAuthorize(array $options = array())
 * @method RequestInterface capture(array $options = array())
 * @method RequestInterface void(array $options = array())
 * @method RequestInterface createCard(array $options = array())
 * @method RequestInterface updateCard(array $options = array())
 * @method RequestInterface deleteCard(array $options = array())
 */
class Gateway extends AbstractGateway {

	/**
	 * @return string
	 */
	public function getName() {
		return 'Payeer';
	}

	/**
	 * @return mixed
	 */
	public function getAccount() {
		return $this->getParameter('account');
	}

	/**
	 * @param $value
	 *
	 * @return Gateway
	 */
	public function setAccount($value) {
		return $this->setParameter('account', $value);
	}

	/**
	 * @return mixed
	 */
	public function getApiId() {
		return $this->getParameter('api_id');
	}

	/**
	 * @param $value
	 *
	 * @return Gateway
	 */
	public function setApiId($value) {
		return $this->setParameter('api_id', $value);
	}

	/**
	 * @return mixed
	 */
	public function getApiSecret() {
		return $this->getParameter('api_secret');
	}

	/**
	 * @param $value
	 *
	 * @return Gateway
	 */
	public function setApiSecret($value) {
		return $this->setParameter('api_secret', $value);
	}

	/**
	 * @return mixed
	 */
	public function getShopId() {
		return $this->getParameter('shop_id');
	}

	/**
	 * @param $value
	 *
	 * @return Gateway
	 */
	public function setShopId($value) {
		return $this->setParameter('shop_id', $value);
	}

	/**
	 * @return mixed
	 */
	public function getShopSecret() {
		return $this->getParameter('shop_secret');
	}

	/**
	 * @param $value
	 *
	 * @return Gateway
	 */
	public function setShopSecret($value) {
		return $this->setParameter('shop_secret', $value);
	}

	/**
	 * @return array
	 */
	public function getDefaultParameters() {
		return array(
			'account'     => '',
			'api_id'      => '',
			'api_secret'  => '',
			'shop_id'     => '',
			'shop_secret' => '',
		);
	}

	public function request($parameters = []) {
		return $this->createRequest('\Omnipay\Payeer\Message\RequestRequest', $parameters);
	}

	/**
	 * @param array $parameters
	 *
	 * @return AbstractRequest|RequestInterface
	 */
	public function purchase($parameters = []) {
		return $this->createRequest('\Omnipay\Payeer\Message\PurchaseRequest', $parameters);
	}

	/**
	 * @param array $parameters
	 *
	 * @return AbstractRequest|RequestInterface
	 */
	public function completePurchase($parameters = []) {
		return $this->createRequest('\Omnipay\Payeer\Message\CompletePurchaseRequest', $parameters);
	}

	/**
	 * @param array $parameters
	 *
	 * @return AbstractRequest|RequestInterface
	 */
	public function refund($parameters = []) {
		return $this->createRequest('\Omnipay\Payeer\Message\RefundRequest', $parameters);
	}
}
