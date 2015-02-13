<?php

namespace App\Libraries\Mitul\Exceptions;


/**
 * This exception can be used to fire an exception event to abort the operation with given message
 * and abort the request.
 *
 * Class AppRunTimeException
 * @package Mitul\Exceptions
 */
class AppRunTimeException extends \Exception
{
	public $data;
	public function __construct($message, $code = 0, $data = array())
	{
		parent::__construct($message, $code);
		$this->data = $data;
	}
}