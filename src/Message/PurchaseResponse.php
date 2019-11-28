<?php

namespace Omnipay\Payeer\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;
use Omnipay\Common\Message\RequestInterface;

class PurchaseResponse extends AbstractResponse implements RedirectResponseInterface {

	/**
	 * @var
	 */
	protected $redirectUrl;

	/**
	 * PurchaseResponse constructor.
	 *
	 * @param RequestInterface $request
	 * @param                  $data
	 * @param                  $redirectUrl
	 */
	public function __construct(RequestInterface $request, $data, $redirectUrl) {
		parent::__construct($request, $data);
		$this->redirectUrl = $redirectUrl;
	}

	/**
	 * @return bool
	 */
	public function isSuccessful() {
		return false;
	}

	/**
	 * @return bool
	 */
	public function isRedirect() {
		return true;
	}

	/**
	 * @return string
	 */
	public function getRedirectUrl() {
		return $this->redirectUrl;
	}

	/**
	 * @return string
	 */
	public function getRedirectMethod() {
		return 'POST';
	}

	/**
	 * @return array|mixed
	 */
	public function getRedirectData() {
		return $this->data;
	}
}
