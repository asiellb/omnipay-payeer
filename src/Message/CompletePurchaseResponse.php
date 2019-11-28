<?php

namespace Omnipay\Payeer\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;

class CompletePurchaseResponse extends AbstractResponse implements RedirectResponseInterface {

	/**
	 * @return bool
	 */
	public function isSuccessful() {
		return ($this->data['m_status'] == 'success') ? true : false;
	}

	/**
	 * @return bool
	 */
	public function isCancelled() {
		return ($this->data['m_status'] != 'success') ? true : false;
	}

	/**
	 * @return bool
	 */
	public function isRedirect() {
		return false;
	}

	/**
	 * @return string|null
	 */
	public function getRedirectUrl() {
		return null;
	}

	/**
	 * @return string|null
	 */
	public function getRedirectMethod() {
		return null;
	}

	/**
	 * @return array|null
	 */
	public function getRedirectData() {
		return null;
	}

	/**
	 * @return int|string
	 */
	public function getTransactionId() {
		return intval($this->data['m_orderid']);
	}

	/**
	 * @return float
	 */
	public function getAmount() {
		return floatval($this->data['m_amount']);
	}

	/**
	 * @return mixed
	 */
	public function getCurrency() {
		return $this->data['m_curr'];
	}

	/**
	 * @return string|null
	 */
	public function getMessage() {
		return null;
	}
}
