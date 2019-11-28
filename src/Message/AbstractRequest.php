<?php

namespace Omnipay\Payeer\Message;

use Omnipay\Common\Message\AbstractRequest as OmnipayRequest;

abstract class AbstractRequest extends OmnipayRequest {

	/**
	 * @var string
	 */
	protected $liveMerchantEndpoint = '//payeer.com/api/merchant/m.php';

	/**
	 * @var string
	 */
	protected $liveApiEndpoint = 'https://payeer.com/ajax/api/api.php';

	/**
	 * @return string
	 */
	protected function getMerchantEndpoint() {
		return $this->liveMerchantEndpoint;
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
	 * @return AbstractRequest
	 */
	public function setAccount($value) {
		return $this->setParameter('account', $value);
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
	 * @return AbstractRequest
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
	 * @return AbstractRequest
	 */
	public function setShopSecret($value) {
		return $this->setParameter('shop_secret', $value);
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
	 * @return AbstractRequest
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
	 * @return AbstractRequest
	 */
	public function setApiSecret($value) {
		return $this->setParameter('api_secret', $value);
	}

	/**
	 * @return mixed
	 */
	public function getPayeeAccount() {
		return $this->getParameter('payeeAccount');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setPayeeAccount($value) {
		return $this->setParameter('payeeAccount', $value);
	}
}
