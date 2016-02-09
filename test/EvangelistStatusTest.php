<?php

namespace Laztopaz\OpenSourceEvangelistStatus\Test;

/**
 *
 * Run test on EvangelistStatusTest of user
 * 
 * @package  Laztopaz\OpenSourceEvangelistStatus\Test
 * @author   Temitope Olotin <temitope.olotin@andela.com>
 * @license  <https://opensource.org/license/MIT> MIT
 */


use PHPUnit_Framework_TestCase;
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatus;

class EvangelistStatusTest extends PHPUnit_Framework_TestCase
{
    private $evangelist;
	
	/**
	 * Class Instantiation of the EvangelistStatus class
     * @param void
     * @return object
	 */
    public function setUp()
    {
    	$this->evangelist = new EvangelistStatus('andela-tolotin');
    }

    /**
     * Check if the number of repos return is an int
     * @param void
     * @return boolean
     */
    public function testUserNumberOfRepo()
    {
    	$status = $this->evangelist->getNumberOfRepos();
    	$this->assertInternalType('int',$status);
    }

    /**
     * Check if the return value of GitHub Api is Object
     * @param void
     * @return boolean
     */
    public function testGitResponseData()
    {
        $returnDataType = $this->evangelist->getGitApiData();
        $this->assertNotEmpty($returnDataType);
    }
}
