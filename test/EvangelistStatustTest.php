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
	 *
	 * Class Instantiation of the EvangelistStatus class
	 */
    public function setUp()
    {
    	$this->evangelist = new EvangelistStatus('andela-tolotin');
    }

    /**
     *
     * Check if the number of repos return is an int
     */
    public function testUserNumberOfRepo()
    {
    	$status = $this->evangelist->getNumberOfRepo();
    	$this->assertInternalType('int',$status);
    }

    /**
     *
     * check if the return value of GitHub Api is Object
     *
     */
    
    public function testGitResponseData()
    {
        $returnDataType = $this->evangelist->getGitApiData();
        $this->assertNotNul($returnDataType);
    }




}


?>