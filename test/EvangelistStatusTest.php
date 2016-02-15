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
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusRanking;

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
        $this->ranking = new EvangelistStatusRanking();
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

    /**
     * Check if GitHub username is empty
     * @param void
     * @return void
     */
    public function testGitHubUsernameEmpty()
    {
        $bool_truth = $this->evangelist->checkEmptyGithubUsername("");
        $this->assertTrue($bool_truth);
    }

    /**
     * check the status of user
     * @param void 
     * @return  string 
     */
    public function testEvangelistLevel()
    {
        $status = $this->ranking->determineEvangelistLevel(5); 
        $this->assertEquals($status,"Damn It!!! Please make the world better, Oh Ye Prodigal Junior Evangelist");
    }

    /**
     * check the status of user
     * @param void 
     * @return  string 
     */
    public function testGetStatus()
    {
        $ranking = $this->ranking->determineEvangelistLevel($this->evangelist->getNumberOfRepos());
        $status = $this->evangelist->getStatus(); 
        $this->assertEquals($ranking,$status);

    }
}
