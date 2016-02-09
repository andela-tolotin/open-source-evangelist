<?php

namespace Laztopaz\OpenSourceEvangelistStatus;

/**
 *
 * EvangelistStatus class
 * 
 * @package  Laztopaz\OpenSourceEvangelistStatus
 * @author   Temitope Olotin <temitope.olotin@andela.com>
 * @license  <https://opensource.org/license/MIT> MIT
 */

use Exception;

class ArgumentCheckException extends Exception
{
    /**
	 * This method return an instance of an exception
	 * @param $exception
	 * @return message
	 */
	public static function NullOfOverflowArgumentException($exception)
	{
		return new static($exception);
	}
}