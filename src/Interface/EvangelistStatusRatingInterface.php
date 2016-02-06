<?php

namespace Laztopaz\OpenSourceEvangelistStatus;

/**
 *
 * EvangelistStatusRaking  class
 * 
 * @package  Laztopaz\OpenSourceEvangelistStatus
 * @author   Temitope Olotin <temitope.olotin@andela.com>
 * @license  <https://opensource.org/license/MIT> MIT
 */

interface EvangelistStatusRatingInterface

{

	/**
	 *
	 * This method returns the evangelist level 
	 */
	
	public function determineEvangelistLevel();

}

?>