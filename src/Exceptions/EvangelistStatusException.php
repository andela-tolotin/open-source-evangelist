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
	 * This method checkEmptyGithubusername
	 * @param String $username Github username
	 *
	 */
	public function checkEmptyGithubUsername($username)
	{
		if ($username == "") 
		{
			throw new Exception("Invalid Github username");
		}
	}
}