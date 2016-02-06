<?php


namespace Laztopaz\OpenSourceEvangelistStatus\Test;

/**
 *
 * Run test on EvangelistStatus of user
 * 
 * @package  Laztopaz\OpenSourceEvangelistStatus\Test
 * @author   Temitope Olotin <temitope.olotin@andela.com>
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
		$this->assertEquals("Fuck Off!!! Please make the world better, Oh Ye Lazy Evangelist",$evangelistRating);
	}

	/**
	 * 
	 * This method testNumberOfReposGreaterThanFiveAndLessOrEqualTen
	 * 
	 */
	public function testNumberOfReposGreaterThanFiveAndLessOrEqualTen()
	{
		$evangelistRating = $this->evangelistRating->determineEvangelistLevel(6);
		$this->assertEquals("Damn It!!! Please make the world better, Oh Ye Prodigal Junior Evangelist",$evangelistRating);
	}

	/**
	 * This method testNumberOfReposGreaterThanTenAndLessOrEqualTwenty
	 * 
	 */
	public function testNumberOfReposGreaterThanTenAndLessOrEqualTwenty()
	{
		$evangelistRating = $this->evangelistRating->determineEvangelistLevel(19);
		$this->assertEquals("Keep Up The Good Work, I crown you Associate Evangelist",$evangelistRating);
	}

	/**
	 * 
	 * This method testNumberOfReposGreaterThanTwentyOne
	 * 
	 */
	public function testNumberOfReposGreaterThanTwentyOne()
	{
		$evangelistRating = $this->evangelistRating->determineEvangelistLevel(23);
		$this->assertEquals("Yeah, I crown you Senior Evangelist. Thanks for making the world a better place",$evangelistRating);
	}

}