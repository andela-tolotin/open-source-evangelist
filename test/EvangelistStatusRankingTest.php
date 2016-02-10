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
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusRanking;
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatus;

class EvangelistStatusRankingTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->evangelistRanking = new EvangelistStatusRanking();
	}

	/**
	 *This method testNumberOfReposLessThanFive
	 * @param void 
	 * @return boolean
	 */
	public function testNumberOfReposLessThanFive()
	{
		$evangelistRanking = $this->evangelistRanking->determineEvangelistLevel(3);
		$this->assertEquals("Fuck Off!!! Please make the world better, Oh Ye Lazy Evangelist",$evangelistRanking);
	}

	/**
	 *This method testNumberOfReposGreaterThanFiveAndLessOrEqualTen
	 **This method testNumberOfReposLessThanFive
	 * @param void 
	 * @return boolean
	 */
	public function testNumberOfReposGreaterThanFiveAndLessOrEqualTen()
	{
		$evangelistRanking = $this->evangelistRanking->determineEvangelistLevel(6);
		$this->assertEquals("Damn It!!! Please make the world better, Oh Ye Prodigal Junior Evangelist",$evangelistRanking);
	}

	/**
	 * This method testNumberOfReposGreaterThanTenAndLessOrEqualTwenty
	 * *This method testNumberOfReposLessThanFive
	 * @param void 
	 * @return boolean
	 */
	public function testNumberOfReposGreaterThanTenAndLessOrEqualTwenty()
	{
		$evangelistRanking = $this->evangelistRanking->determineEvangelistLevel(19);
		$this->assertEquals("Keep Up The Good Work, I crown you Associate Evangelist",$evangelistRanking);
	}

	/**
	 * This method testNumberOfReposGreaterThanTwentyOne
	 * *This method testNumberOfReposLessThanFive
	 * @param void 
	 * @return boolean
	 */
	public function testNumberOfReposGreaterThanTwentyOne()
	{
		$evangelistRanking = $this->evangelistRanking->determineEvangelistLevel(23);
		$this->assertEquals("Yeah, I crown you Senior Evangelist. Thanks for making the world a better place",$evangelistRanking);
	}
}