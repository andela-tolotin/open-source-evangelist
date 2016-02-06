<?php

namespace Laztopaz\OpenSourceEvangelistStatus;

/**
 *
 * Interface for evangelistStatus class
 * 
 * @package  Laztopaz\OpenSourceEvangelistStatus
 * @author   Temitope Olotin <temitope.olotin@andela.com>
 * @license  <https://opensource.org/license/MIT> MIT
 */

/**
 *
 *  This interface contain methods to be implemented  
 */

interface EvangelistStatusInterface

{
    /**
     *  
     * This method returns a string depending on number of user repo on Github
     */
    
	public function getStatus();

	/**
     * 
     * This method returns number of the user repo on Github
     */
    
	public function getNumberOfRepos();


    /**
     * 
     * This method returns Github data
     */

    public function getGitApiData();
}