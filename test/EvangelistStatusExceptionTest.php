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

class EvangelistStatusExceptionTest extends PHPUnit_Framework_TestCase
{	
<<<<<<< HEAD
    /**
	 * Class Instantiation of the EvangelistStatus class
	 */
=======
   /**
    * Class Instantiation of the EvangelistStatus class
    */
>>>>>>> b8b747217e6bc5fa03d7b609be2a89d0aeb34ad0
    public function setUp()
    {
    }

    /**
     * @expectedException Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusException
     */
    public function testGitHubUsernameEmptyException()
    {
        $evangelist = new EvangelistStatus('');
    }
}
