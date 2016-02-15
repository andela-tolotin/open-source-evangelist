<?php

namespace Laztopaz\OpenSourceEvangelistStatus;

/**
 *
 * EvangelistStatusRankingInterface  class
 * 
 * @package  Laztopaz\OpenSourceEvangelistStatus
 * @author   Temitope Olotin <temitope.olotin@andela.com>
 * @license  <https://opensource.org/license/MIT> MIT
 */

interface EvangelistStatusRankingInterface
{
    /**
     * This method returns the evangelist level 
     * @param void
     * @return void
     */
     public static function determineEvangelistLevel($noOfRepositories);
     
     /**
      * This method checkForNullRepos 
      * @param  array $jsonBody
      * @return boolean
      */
     public static function checkForNullRepos($jsonBody);

}
