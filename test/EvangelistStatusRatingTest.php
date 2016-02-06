<?php


namespace Laztopaz\OpenSourceEvangelistStatus\Test;

/**
 *
 * Run test on EvangelistStatus of user
 * 
 * @package  Laztopaz\OpenSourceEvangelistStatus\Test
 * @author   Temitope Olotin] <temitope.olotin@andela.com>
 * @license  <https://opensource.org/license/MIT> MIT
 */



use PHPUnit_Framework_TestCase;
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusRatingTest;

class EvangelistStatusRatingTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->evangelistRating = new EvangelistStatusRating()
	}
	/**
	 * 
	 * This method testNumberOfReposLessThanFive
	 * 
	 */
	
	public function testNumberOfReposLessThanFive()
	{
		$evangelistRating = $this->evangelistRating->determineEvangelistLevel(3);
		$this->assertEquals()
	}

	/**
	 * 
	 * This method testNumberOfReposGreaterThanFiveAndLessOrEqualTen
	 * 
	 */
	public function testNumberOfReposGreaterThanFiveAndLessOrEqualTen()
	{
		
	}

	/**
	 * This method testNumberOfReposGreaterThanTenAndLessOrEqualTwenty
	 * 
	 */
	public function testNumberOfReposGreaterThanTenAndLessOrEqualTwenty()
	{
		
	}

	/**
	 * 
	 * This method testNumberOfReposGreaterThanTwentyOne
	 * 
	 */
	public function testNumberOfReposGreaterThanTwentyOne()
	{
		
	}

}