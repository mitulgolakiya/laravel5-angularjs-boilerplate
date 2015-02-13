<?php

namespace App\Libraries\Mitul\Exceptions;


/**
 * Exception for handling data validation failed event
 * and send direct response to client by aborting request
 *
 * Class AppDataValidationException
 * @package Mitul\Exceptions
 */
class AppDataValidationException extends AppRunTimeException
{
	public function __construct($message, $code = 0, $data = array())
	{
		parent::__construct($message, $code, $data);
	}
}