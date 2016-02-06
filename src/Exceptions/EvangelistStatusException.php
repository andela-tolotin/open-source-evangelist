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


class EvangelistStatusException extends Exception
{
	private $username;

	public function __construct()
	{

	}

	/**
	 * This method checkEmptyGithubusername
	 * @param  String $username Github username
	 *
	 */
	
	public function checkEmptyGithubusername($username)
	{
		$this->username = $username;

		if ($username == "") 
		{
			throw new Exception("Invalid Github username");
		}
	}
}