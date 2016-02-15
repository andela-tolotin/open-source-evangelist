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

class EvangelistStatusException extends Exception
{
    /**
     * This method return an instance of an exception
     * @param message
     * @return message
     */
    public static function createEvangelistStatusException($message)
    {
	return new static($message);
    }
}
